<?php
/**
 * Shared header.
 * Optional variables a page can set BEFORE including this file:
 *   $page_title, $page_desc, $page_canonical (path, e.g. '/contact'), $page_robots,
 *   $page_schema (array of JSON-LD objects), $page_og_image (path),
 *   $page_tagline (small line under the logo),
 *   $static_page = true  -> server-rendered page without the design-component runtime (fast, used by location pages).
 */
require_once __DIR__ . '/config.php';

$static_page    = !empty($static_page);
$page_title     = $page_title ?? '24/7 Ambulance Service in Delhi NCR | ICU, ALS, BLS & Cardiac Ambulance | ' . BRAND;
$page_desc      = $page_desc ?? 'Book an ambulance 24/7 in Delhi, Gurgaon, Noida, Ghaziabad and Faridabad. Emergency, ICU, ALS, BLS, cardiac and ventilator ambulances. Call ' . PHONE_DISPLAY . '.';
$page_canonical = $page_canonical ?? strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
$page_tagline   = $page_tagline ?? 'Ambulance Service · Delhi NCR';
$page_og_image  = $page_og_image ?? '/assets/img/emergency-ambulance.webp';
if (!isset($page_schema)) {
    $page_schema = [[
        '@context' => 'https://schema.org',
        '@type' => 'MedicalBusiness',
        'name' => BRAND,
        'url' => SITE_URL . '/',
        'description' => '24/7 ambulance booking and dispatch helpline — emergency, ICU, ALS, BLS, cardiac, ventilator and air ambulances.',
        'telephone' => PHONE_DISPLAY,
        'image' => SITE_URL . '/assets/img/emergency-ambulance.webp',
        'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Ground Floor, SupremeWork Co-working Space, Plot No. 84, Institutional Area, Sector 32', 'addressLocality' => 'Gurugram', 'addressRegion' => 'Haryana', 'postalCode' => '122001', 'addressCountry' => 'IN'],
        'areaServed' => ['Delhi', 'Gurugram', 'Noida', 'Ghaziabad', 'Faridabad', 'Greater Noida', 'Uttar Pradesh'],
        'openingHoursSpecification' => ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'], 'opens' => '00:00', 'closes' => '23:59'],
    ]];
}
?><!DOCTYPE html>
<html lang="en-IN">
<head>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1944461281103212"
     crossorigin="anonymous"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1944461281103212"
     crossorigin="anonymous"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_desc) ?>">
<link rel="canonical" href="<?= e(SITE_URL . $page_canonical) ?>">
<?php if (!empty($page_robots)): ?><meta name="robots" content="<?= e($page_robots) ?>">
<?php endif; ?>
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= e(BRAND) ?>">
<meta property="og:title" content="<?= e($page_title) ?>">
<meta property="og:description" content="<?= e($page_desc) ?>">
<meta property="og:url" content="<?= e(SITE_URL . $page_canonical) ?>">
<meta property="og:image" content="<?= e(SITE_URL . $page_og_image) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="theme-color" content="#1a1147">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="<?= DS_CSS ?>">
<link rel="stylesheet" href="/assets/css/site.css">
<?php foreach ($page_schema as $schema): ?>
<script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
<?php if (!$static_page): ?><script src="/support.js"></script>
<?php endif; ?>
</head>
<body>
<?php if (!$static_page): ?>
<x-dc>
<helmet>
<link rel="stylesheet" href="<?= DS_CSS ?>">
<script src="/_ds/ethical-healthcare-community-design-syst-6ce9bd81-787b-44c9-bdfb-94df1770d8a1/_ds_bundle.js"></script>
<script src="/image-slot.js"></script>
<style>
#header-call-btn { display: inline-flex; } @media (max-width: 860px) { #header-call-btn, #header-phone-text { display: none !important; } }
html { scroll-behavior: smooth; overflow-x: hidden; }
body { margin: 0; background: var(--canvas); overflow-x: hidden; }
section[id], div[id] { scroll-margin-top: 96px; }
img, svg { display: block; }
input, select, textarea, button { font-family: var(--font-sans); }
[data-show-mobile] { display: none; }
@media (max-width: 1080px) { [data-nav-desktop] { display: none !important; } [data-nav-toggle] { display: inline-flex !important; } }
@media (max-width: 860px) { [data-show-mobile] { display: flex; } [id="header-call-btn"] { display: none !important; } }
[data-seg] input { position: absolute; opacity: 0; pointer-events: none; }
[data-seg] input:checked + span { background: #fff; color: var(--ink); box-shadow: 0 2px 6px rgba(26,17,71,.10); }
[data-faq] summary::-webkit-details-marker { display: none; }
[data-faq] summary::marker { content: ''; }
[data-faq][open] summary [data-chev] { transform: rotate(180deg); }
@keyframes livepulse { 0%,100% { box-shadow: 0 0 0 0 rgba(16,185,129,.55); } 70% { box-shadow: 0 0 0 8px rgba(16,185,129,0); } }
@media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } * { animation: none !important; } }
</style>
</helmet>
<?php endif; ?>

<header id="top" style="position:sticky;top:0;z-index:60;background:rgba(245,244,247,0.78);backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px);border-bottom:1px solid var(--line)">
  <div style="max-width:1280px;margin:0 auto;padding:0 clamp(16px,4vw,64px);height:76px;display:flex;align-items:center;gap:clamp(12px,2vw,32px)">
    <a href="/" style="display:flex;align-items:center;gap:12px;text-decoration:none;color:var(--ink)">
      <span style="width:42px;height:42px;border-radius:14px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);box-shadow:0 10px 24px -12px rgba(220,38,38,.7);display:grid;place-items:center;flex:none">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"></path><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"></path><circle cx="7.5" cy="17.5" r="2"></circle><circle cx="16.5" cy="17.5" r="2"></circle><path d="M6 11h4M8 9v4"></path></svg>
      </span>
      <span style="display:flex;flex-direction:column;line-height:1.1">
        <span style="font-weight:800;font-size:18px;letter-spacing:-0.02em"><?= e(BRAND) ?></span>
        <span style="font-size:11px;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--ink-muted)"><?= e($page_tagline) ?></span>
      </span>
    </a>

    <nav data-nav-desktop style="margin-left:auto;display:flex;align-items:center;gap:clamp(12px,1.6vw,26px)">
      <a href="/" class="nav-link">Home</a>
      <a href="/#about" class="nav-link">About Us</a>
      <a href="/ambulance-service/" class="nav-link">Locations</a>
      <a href="/blog/" class="nav-link">Blog</a>
      <a href="/contact" class="nav-link">Contact</a>
    </nav>

    <div style="margin-left:auto;display:flex;align-items:center;gap:12px">
      <span id="header-phone-text" style="display:flex;flex-direction:column;line-height:1.15;text-align:right">
        <span style="font-size:11px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--ink-muted)">24/7 Helpline</span>
        <span style="font-size:15px;font-weight:800;color:var(--ink)"><?= e(PHONE_DISPLAY) ?></span>
      </span>
      <a id="header-call-btn" href="tel:<?= PHONE_TEL ?>" style="align-items:center;gap:8px;padding:12px 18px;border-radius:16px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:700;font-size:15px;text-decoration:none;box-shadow:0 16px 34px -18px rgba(220,38,38,.85);white-space:nowrap">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
        Call Emergency
      </a>
      <button data-nav-toggle type="button" onclick="var m = document.getElementById('mobile-menu'); m.style.display = m.style.display === 'none' ? 'block' : 'none';" aria-label="Open menu" style="display:none;align-items:center;justify-content:center;width:44px;height:44px;border-radius:14px;border:1px solid var(--line);background:var(--card);color:var(--ink);cursor:pointer;flex:none">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"><path d="M4 7h16M4 12h16M4 17h16"></path></svg>
      </button>
    </div>
  </div>

  <div id="mobile-menu" style="display:none;">
    <div style="border-top:1px solid var(--line);background:var(--card);padding:16px clamp(16px,4vw,64px) 24px;display:grid;gap:4px">
      <a href="/" style="padding:12px 4px;font-weight:600;color:var(--ink);text-decoration:none;border-bottom:1px solid var(--line-soft)">Home</a>
      <a href="/#about" onclick="document.getElementById('mobile-menu').style.display='none'" style="padding:12px 4px;font-weight:600;color:var(--ink);text-decoration:none;border-bottom:1px solid var(--line-soft)">About Us</a>
      <a href="/ambulance-service/" style="padding:12px 4px;font-weight:600;color:var(--ink);text-decoration:none;border-bottom:1px solid var(--line-soft)">Locations</a>
      <a href="/blog/" style="padding:12px 4px;font-weight:600;color:var(--ink);text-decoration:none;border-bottom:1px solid var(--line-soft)">Blog</a>
      <a href="/contact" style="padding:12px 4px;font-weight:600;color:var(--ink);text-decoration:none">Contact</a>
    </div>
  </div>
</header>
