/**
 * Blog image generator for NCR Ambulance.
 *
 * For every post in blog/<slug>.php it renders (with your installed Chrome):
 *   assets/blog/<slug>.webp / .jpg              1200x630 featured image (page + social share)
 *   assets/blog/<slug>-steps.webp / .jpg        1080x1350 step-by-step card (WhatsApp / Instagram)
 * plus assets/blog/blog-cover.webp / .jpg for the blog index.
 *
 * Usage (from tools/blog-images):
 *   npm install            (first time only)
 *   npm run build          only posts whose images are missing
 *   node generate.mjs --force                 rebuild everything
 *   node generate.mjs --only=slug-a,slug-b    rebuild specific posts
 * Set CHROME_PATH if Chrome is not in the default Windows location.
 */
import { execFileSync } from 'node:child_process';
import { existsSync, mkdirSync, readFileSync } from 'node:fs';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import puppeteer from 'puppeteer-core';

const here = dirname(fileURLToPath(import.meta.url));
const root = resolve(here, '../..');
const outDir = join(root, 'assets', 'blog');
const iconDir = join(here, 'node_modules', 'lucide-static', 'icons');
mkdirSync(outDir, { recursive: true });

const args = process.argv.slice(2);
const force = args.includes('--force');
const only = (args.find((a) => a.startsWith('--only=')) || '').slice(7).split(',').filter(Boolean);

const data = JSON.parse(execFileSync('php', [join(here, 'export-posts.php')], { encoding: 'utf8' }));
const PHONE = data.phone;
const BRAND = data.brand;

const chromeCandidates = [
  process.env.CHROME_PATH,
  'C:/Program Files/Google/Chrome/Application/chrome.exe',
  'C:/Program Files (x86)/Google/Chrome/Application/chrome.exe',
  'C:/Program Files (x86)/Microsoft/Edge/Application/msedge.exe',
  '/usr/bin/google-chrome',
  '/Applications/Google Chrome.app/Contents/MacOS/Google Chrome',
].filter(Boolean);
const executablePath = chromeCandidates.find((p) => existsSync(p));
if (!executablePath) throw new Error('Chrome not found. Set CHROME_PATH.');

const esc = (s) => String(s ?? '').replace(/[&<>"]/g, (c) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' })[c]);

function icon(name, size = 24, stroke = 2) {
  const file = join(iconDir, `${name}.svg`);
  const svg = readFileSync(existsSync(file) ? file : join(iconDir, 'siren.svg'), 'utf8');
  return svg
    .replace(/<!--[\s\S]*?-->/g, '')
    .replace(/width="24"/, `width="${size}"`)
    .replace(/height="24"/, `height="${size}"`)
    .replace(/stroke-width="2"/, `stroke-width="${stroke}"`);
}

const AMB = '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"/><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"/><circle cx="7.5" cy="17.5" r="2"/><circle cx="16.5" cy="17.5" r="2"/><path d="M6 11h4M8 9v4"/></svg>';
const PHONE_ICON = '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"/></svg>';
// Inter is embedded from @fontsource/inter so rendering works offline and never waits on the network.
const fontDir = join(here, 'node_modules', '@fontsource', 'inter', 'files');
const FONTS = '<style>' + [500, 600, 700, 800, 900].map((w) =>
  `@font-face{font-family:Inter;font-style:normal;font-weight:${w};font-display:block;src:url(data:font/woff2;base64,${readFileSync(join(fontDir, `inter-latin-${w}-normal.woff2`)).toString('base64')}) format('woff2')}`
).join('') + '</style>';

function splitTitle(title) {
  const i = title.indexOf(':');
  if (i > 0 && i < title.length - 4) return [title.slice(0, i).trim(), title.slice(i + 1).trim()];
  return [title, ''];
}

function featuredHtml({ title, category, color, iconName }) {
  const [main, sub] = splitTitle(title);
  const fs = main.length <= 16 ? 76 : main.length <= 26 ? 66 : main.length <= 36 ? 58 : main.length <= 48 ? 50 : 44;
  return `<!doctype html><html><head><meta charset="utf-8">${FONTS}<style>
*{box-sizing:border-box;margin:0;padding:0}
body{width:1200px;height:630px;overflow:hidden;position:relative;font-family:Inter,'Segoe UI',Arial,sans-serif;background:#F5F4F7;color:#1a1147}
.grid{position:absolute;inset:0;background-image:linear-gradient(rgba(26,17,71,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(26,17,71,.05) 1px,transparent 1px);background-size:48px 48px;-webkit-mask-image:radial-gradient(ellipse 80% 80% at 70% 40%,#000 30%,transparent 100%)}
.b1{position:absolute;right:-170px;top:-190px;width:700px;height:700px;border-radius:50%;background:radial-gradient(circle,${color}30,transparent 66%)}
.b2{position:absolute;left:-220px;bottom:-300px;width:620px;height:620px;border-radius:50%;background:radial-gradient(circle,rgba(251,191,36,.25),transparent 68%)}
.left{position:absolute;left:64px;top:54px;bottom:52px;width:650px;display:flex;flex-direction:column}
.brand{display:flex;align-items:center;gap:13px}
.logo{width:50px;height:50px;border-radius:15px;background:linear-gradient(180deg,#EF4444,#DC2626);display:grid;place-items:center;box-shadow:0 12px 26px -12px rgba(220,38,38,.8)}
.bn{font-weight:800;font-size:21px;letter-spacing:-.02em;line-height:1.1}
.bs{font-size:12px;font-weight:700;letter-spacing:.13em;text-transform:uppercase;color:#6B6485}
.pill{margin-top:36px;align-self:flex-start;display:inline-flex;align-items:center;gap:9px;padding:9px 17px;border-radius:999px;background:#fff;color:${color};font-weight:800;font-size:15px;letter-spacing:.07em;text-transform:uppercase;border:1.5px solid ${color}40}
.pill i{width:9px;height:9px;border-radius:50%;background:${color}}
h1{margin-top:18px;font-weight:900;font-size:${fs}px;line-height:1.02;text-wrap:balance;letter-spacing:-.04em;background:linear-gradient(180deg,#1a1147 0%,#1a1147 50%,#7C3AED 100%);-webkit-background-clip:text;background-clip:text;color:transparent;padding-bottom:6px}
.sub{margin-top:12px;font-size:27px;font-weight:700;color:#3E3560;line-height:1.28;letter-spacing:-.01em}
.foot{margin-top:auto;display:flex;align-items:center;gap:16px}
.call{display:inline-flex;align-items:center;gap:10px;padding:13px 20px;border-radius:16px;background:linear-gradient(180deg,#EF4444,#DC2626);color:#fff;font-weight:800;font-size:20px;box-shadow:0 18px 36px -18px rgba(220,38,38,.9)}
.av{font-size:15px;font-weight:700;color:#047857;display:flex;align-items:center;gap:8px}
.av i{width:9px;height:9px;border-radius:50%;background:#10B981;box-shadow:0 0 0 5px rgba(16,185,129,.18)}
.right{position:absolute;right:72px;top:118px;width:380px;height:380px}
.ring{position:absolute;inset:-14px;border-radius:50%;border:2.5px dashed ${color}55}
.circle{position:absolute;inset:22px;border-radius:50%;background:radial-gradient(circle at 30% 25%,${color}bb,${color} 70%);box-shadow:0 50px 90px -34px ${color}cc,inset 0 2px 0 rgba(255,255,255,.35);display:grid;place-items:center;color:#fff}
.chip{position:absolute;background:#fff;border-radius:16px;padding:11px 15px;font-weight:800;font-size:16px;box-shadow:0 18px 40px -16px rgba(26,17,71,.35);display:flex;align-items:center;gap:9px;color:#1a1147;white-space:nowrap}
.chip span{width:28px;height:28px;border-radius:9px;display:grid;place-items:center;background:${color}18;color:${color}}
.c1{left:-58px;top:18px}.c2{right:-44px;bottom:30px}
.ecg{position:absolute;left:-90px;right:-60px;bottom:-62px}
</style></head><body>
<div class="grid"></div><div class="b1"></div><div class="b2"></div>
<div class="left">
  <div class="brand"><div class="logo">${AMB}</div><div><div class="bn">${esc(BRAND)}</div><div class="bs">First Aid Guide · Delhi NCR</div></div></div>
  <div class="pill"><i></i>${esc(category)}</div>
  <h1>${esc(main)}</h1>
  ${sub ? `<div class="sub">${esc(sub)}</div>` : ''}
  <div class="foot"><div class="call">${PHONE_ICON} ${esc(PHONE)}</div><div class="av"><i></i>24/7 ambulance helpline</div></div>
</div>
<div class="right">
  <div class="ring"></div>
  <div class="circle">${icon(iconName, 168, 1.6)}</div>
  <div class="chip c1"><span>${icon('list-checks', 18, 2.4)}</span>Step-by-step</div>
  <div class="chip c2"><span>${icon('clock', 18, 2.4)}</span>Until help arrives</div>
  <svg class="ecg" viewBox="0 0 530 70" fill="none"><path d="M0 40 H190 L210 40 L226 12 L246 62 L262 4 L280 58 L294 40 H530" stroke="${color}" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round" opacity=".55"/></svg>
</div>
</body></html>`;
}

function stepsHtml(post) {
  const [main] = splitTitle(post.title);
  const steps = post.steps || [];
  const donts = post.donts || [];
  const color = post.color;
  return `<!doctype html><html><head><meta charset="utf-8">${FONTS}<style>
*{box-sizing:border-box;margin:0;padding:0}
:root{--fs:26px}
body{width:1080px;font-family:Inter,'Segoe UI',Arial,sans-serif;background:#F5F4F7;color:#1a1147}
.page{width:1080px;height:1350px;position:relative;overflow:hidden;display:flex;flex-direction:column}
.top{background:linear-gradient(140deg,#1a1147 0%,#2E1A7A 100%);padding:52px 60px 92px;color:#fff;position:relative;overflow:hidden}
.top::after{content:"";position:absolute;right:-120px;top:-140px;width:460px;height:460px;border-radius:50%;background:radial-gradient(circle,${color}66,transparent 65%)}
.brand{display:flex;align-items:center;gap:13px;position:relative;z-index:1}
.logo{width:50px;height:50px;border-radius:15px;background:linear-gradient(180deg,#EF4444,#DC2626);display:grid;place-items:center}
.bn{font-weight:800;font-size:22px;letter-spacing:-.02em;line-height:1.1}
.bs{font-size:12.5px;font-weight:700;letter-spacing:.13em;text-transform:uppercase;color:rgba(255,255,255,.6)}
.pill{margin-top:34px;display:inline-flex;align-items:center;gap:9px;padding:8px 16px;border-radius:999px;background:#fff;color:${color};font-weight:800;font-size:15px;letter-spacing:.07em;text-transform:uppercase;position:relative;z-index:1}
h1{margin-top:18px;font-size:62px;font-weight:900;letter-spacing:-.04em;line-height:1.02;position:relative;z-index:1}
.lead{margin-top:12px;font-size:25px;font-weight:600;color:rgba(255,255,255,.78);position:relative;z-index:1}
.body{margin:-58px 44px 0;display:flex;flex-direction:column;gap:calc(var(--fs) * .52);position:relative;z-index:2;flex:1;min-height:0}
.step{background:#fff;border-radius:24px;padding:calc(var(--fs) * .66) 26px calc(var(--fs) * .66) 22px;display:flex;gap:20px;align-items:center;box-shadow:0 16px 36px -22px rgba(26,17,71,.45);border:1px solid #E7E4ED}
.num{flex:none;width:calc(var(--fs) * 2.05);height:calc(var(--fs) * 2.05);border-radius:16px;background:${color};color:#fff;font-weight:900;font-size:calc(var(--fs) * 1.05);display:grid;place-items:center}
.txt{font-size:var(--fs);font-weight:650;line-height:1.3;letter-spacing:-.01em}
.dont{margin-top:calc(var(--fs) * .3);background:#FEF2F2;border:2.5px dashed rgba(220,38,38,.4);border-radius:24px;padding:calc(var(--fs) * .7) 28px}
.dont h2{font-size:18px;font-weight:900;letter-spacing:.14em;color:#B91C1C;margin-bottom:8px}
.dont li{list-style:none;font-size:calc(var(--fs) * .86);font-weight:600;color:#450A0A;line-height:1.35;padding-left:34px;position:relative;margin-top:6px}
.dont li::before{content:"✕";position:absolute;left:0;top:0;color:#DC2626;font-weight:900}
.foot{margin:24px 44px 40px;padding:20px 26px;border-radius:24px;background:#fff;border:1px solid #E7E4ED;display:flex;align-items:center;justify-content:space-between;gap:20px}
.foot .k{font-size:15px;font-weight:800;letter-spacing:.12em;text-transform:uppercase;color:#6B6485}
.foot .v{font-size:24px;font-weight:900;color:#1a1147;margin-top:2px}
.call{display:inline-flex;align-items:center;gap:10px;padding:15px 22px;border-radius:18px;background:linear-gradient(180deg,#EF4444,#DC2626);color:#fff;font-weight:900;font-size:25px;white-space:nowrap}
</style></head><body><div class="page">
<div class="top">
  <div class="brand"><div class="logo">${AMB}</div><div><div class="bn">${esc(BRAND)}</div><div class="bs">First Aid Guide · Save &amp; Share</div></div></div>
  <div class="pill">${esc(post.category_name)}</div>
  <h1>${esc(post.steps_title || main)}</h1>
  <div class="lead">What to do until the ambulance arrives</div>
</div>
<div class="body" id="body">
  ${steps.map((s, i) => `<div class="step"><div class="num">${i + 1}</div><div class="txt">${esc(s)}</div></div>`).join('')}
  ${donts.length ? `<div class="dont"><h2>DO NOT</h2><ul>${donts.map((d) => `<li>${esc(d)}</li>`).join('')}</ul></div>` : ''}
</div>
<div class="foot"><div><div class="k">Emergency? Call first</div><div class="v">112 or 24/7 helpline</div></div><div class="call">${PHONE_ICON} ${esc(PHONE)}</div></div>
</div></body></html>`;
}

async function render(page, html, width, height, base, fit = false) {
  await page.setViewport({ width, height, deviceScaleFactor: 1 });
  await page.setContent(html, { waitUntil: 'load', timeout: 60000 });
  await page.evaluate(() => document.fonts.ready);
  if (fit) {
    // Shrink the step text until everything fits inside the card.
    await page.evaluate(() => {
      const body = document.getElementById('body');
      let fs = 27;
      const fits = () => body.scrollHeight <= body.clientHeight + 1;
      document.documentElement.style.setProperty('--fs', fs + 'px');
      while (!fits() && fs > 15) { fs -= 0.5; document.documentElement.style.setProperty('--fs', fs + 'px'); }
    });
  }
  const clip = { x: 0, y: 0, width, height };
  await page.screenshot({ path: `${base}.webp`, type: 'webp', quality: 84, clip });
  await page.screenshot({ path: `${base}.jpg`, type: 'jpeg', quality: 86, clip });
}

const browser = await puppeteer.launch({ executablePath, headless: true, args: ['--hide-scrollbars', '--font-render-hinting=none'] });
const page = await browser.newPage();
let made = 0;

const cover = join(outDir, 'blog-cover');
if (force || !existsSync(`${cover}.jpg`)) {
  await render(page, featuredHtml({ title: 'First Aid Guides: What to Do Until the Ambulance Arrives', category: 'First aid library', color: '#7C3AED', iconName: 'briefcase-medical' }), 1200, 630, cover);
  made++;
}

for (const post of data.posts) {
  if (only.length && !only.includes(post.slug)) continue;
  const base = join(outDir, post.slug);
  if (!force && !only.length && existsSync(`${base}.jpg`) && existsSync(`${base}-steps.jpg`)) continue;
  await render(page, featuredHtml({ title: post.title, category: post.category_name, color: post.color, iconName: post.icon || 'siren' }), 1200, 630, base);
  await render(page, stepsHtml(post), 1080, 1350, `${base}-steps`, true);
  made++;
  console.log('✓', post.slug);
}

await browser.close();
console.log(`Done. ${made} image set(s) written to assets/blog/`);
