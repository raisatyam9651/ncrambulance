<?php
/**
 * Blog core: config, internal-link map, categories and helpers.
 *
 * INTERNAL LINKING: every link from a blog post to a service or location page goes
 * through link_to('<key>'). When dedicated service pages are created (e.g. /icu-ambulance/),
 * change the URL here once and every blog post updates automatically.
 */

if (defined('BLOG_CORE_LOADED')) return;
define('BLOG_CORE_LOADED', true);

// Site-wide settings (SITE_URL, BRAND, PHONE_*) live in /config.php when it exists.
// Fallbacks keep the blog working on branches without that file.
if (is_file(dirname(__DIR__, 2) . '/config.php')) {
  require_once dirname(__DIR__, 2) . '/config.php';
}
defined('SITE_URL')        || define('SITE_URL', 'https://' . ($_SERVER['HTTP_HOST'] ?? 'localhost'));
defined('BRAND')           || define('BRAND', 'NCR Ambulance');
defined('PHONE_DISPLAY')   || define('PHONE_DISPLAY', '+91 7317564794');
defined('PHONE_TEL')       || define('PHONE_TEL', '+917317564794');
defined('WHATSAPP_DIGITS') || define('WHATSAPP_DIGITS', '917317564794');

define('BLOG_PHONE', PHONE_DISPLAY);
define('BLOG_TEL', 'tel:' . PHONE_TEL);
define('BLOG_WA', 'https://wa.me/' . WHATSAPP_DIGITS);
define('BLOG_AUTHOR', BRAND . ' Editorial Team');

/** Service + location URL map used for internal links. */
const BLOG_LINKS = [
  // Main services (currently sections on the homepage)
  'home'              => '/',
  'emergency'         => '/#services',
  'icu'               => '/#types',
  'als'               => '/#types',
  'bls'               => '/#types',
  'cardiac'           => '/#services',
  'ventilator'        => '/#services',
  'neonatal'          => '/#types',
  'patient-transfer'  => '/#services',
  'hospital-transfer' => '/#services',
  'ambulance-types'   => '/#types',
  'book'              => '/#book',
  'contact'           => '/contact',
  'blog'              => '/blog/',
  // Location pages
  'delhi'             => '/ambulance-service/delhi/',
  'dwarka'            => '/ambulance-service/delhi/dwarka/',
  'gurgaon'           => '/ambulance-service/gurgaon/',
  'noida'             => '/ambulance-service/noida/',
  'greater-noida'     => '/ambulance-service/greater-noida/',
  'ghaziabad'         => '/ambulance-service/ghaziabad/',
  'faridabad'         => '/ambulance-service/faridabad/',
];

/** Service cards shown at the end of each post (keyed like BLOG_LINKS). */
const BLOG_SERVICES = [
  'emergency'         => ['Emergency Ambulance Service', 'Rapid 24/7 dispatch for accidents, cardiac events and sudden medical emergencies across Delhi NCR.'],
  'cardiac'           => ['Cardiac Ambulance', 'Cardiac monitoring and defibrillator support throughout the transfer for heart emergencies.'],
  'icu'               => ['ICU Ambulance', 'ICU-level equipment and a critical care team for unstable and critically ill patients.'],
  'als'               => ['ALS (Advanced Life Support) Ambulance', 'Cardiac monitoring, oxygen support and emergency medicines with trained medical staff.'],
  'bls'               => ['BLS (Basic Life Support) Ambulance', 'Oxygen, stretcher and a trained attendant for stable patients who need safe transport.'],
  'ventilator'        => ['Ventilator Ambulance', 'Ventilator-equipped transport for patients who need breathing support on the way.'],
  'neonatal'          => ['Neonatal Ambulance', 'Incubator-equipped transport with infant monitoring for newborns and babies.'],
  'patient-transfer'  => ['Patient Transport Ambulance', 'Comfortable, planned transport for elderly, bed-ridden and recovering patients.'],
  'hospital-transfer' => ['Hospital-to-Hospital Transfer', 'Planned shifting between hospitals anywhere in Delhi NCR with the right level of care.'],
  'book'              => ['Book an Ambulance Online', 'Share pickup and drop details and our team calls you back. For emergencies, call directly.'],
  'contact'           => ['24/7 Ambulance Helpline', 'Talk to our dispatch team any time of the day or night for advice and bookings.'],
];

const BLOG_LOCATIONS = [
  'delhi'         => 'Delhi',
  'gurgaon'       => 'Gurgaon',
  'noida'         => 'Noida',
  'ghaziabad'     => 'Ghaziabad',
  'faridabad'     => 'Faridabad',
  'greater-noida' => 'Greater Noida',
  'dwarka'        => 'Dwarka',
];

const BLOG_CATEGORIES = [
  'heart-breathing'     => ['name' => 'Heart & Breathing',      'color' => '#DC2626', 'tint' => '#FEF2F2', 'intro' => 'Heart attacks, cardiac arrest, CPR, choking and breathing emergencies.'],
  'brain'               => ['name' => 'Brain & Consciousness',  'color' => '#7C3AED', 'tint' => '#F5F3FF', 'intro' => 'Stroke, seizures, fainting and head injuries.'],
  'accidents-injuries'  => ['name' => 'Accidents & Injuries',   'color' => '#EA580C', 'tint' => '#FFF7ED', 'intro' => 'Road accidents, bleeding, fractures, burns, falls and bites.'],
  'medical-emergencies' => ['name' => 'Medical Emergencies',    'color' => '#0369A1', 'tint' => '#F0F9FF', 'intro' => 'Allergic reactions, diabetic emergencies, heat stroke, poisoning and childbirth.'],
  'be-prepared'         => ['name' => 'Be Prepared',            'color' => '#047857', 'tint' => '#ECFDF5', 'intro' => 'Calling an ambulance, preparing for its arrival and your legal rights as a helper.'],
];

function blog_e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

function blog_site_url() {
  return rtrim(SITE_URL, '/');
}

/** URL for an internal service/location link. Unknown keys fall back to the homepage. */
function link_to($key) {
  return BLOG_LINKS[$key] ?? '/';
}

/** URL of a blog post (served from blog/<slug>.php via the extensionless rewrite in /.htaccess). */
function post_url($slug) {
  return '/blog/' . $slug;
}

function blog_dir() { return dirname(__DIR__); }

/**
 * Load one post's metadata. Each post is a single file blog/<slug>.php that starts with
 * a $post = [...] array followed by: if (!empty($BLOG_META_ONLY)) return $post;
 * Including it with $BLOG_META_ONLY set returns the array without rendering the page.
 */
function load_post($slug) {
  if (!preg_match('/^[a-z0-9-]+$/', (string)$slug) || $slug === 'index') return null;
  $file = blog_dir() . '/' . $slug . '.php';
  if (!is_file($file)) return null;
  $BLOG_META_ONLY = true;
  $post = include $file;
  if (!is_array($post)) return null;
  $post['slug'] = $slug;
  return $post;
}

/** All posts, sorted by their "order" field. */
function all_posts() {
  static $cache = null;
  if ($cache !== null) return $cache;
  $posts = [];
  foreach (glob(blog_dir() . '/*.php') as $file) {
    $slug = basename($file, '.php');
    if ($slug === 'index') continue;
    $p = load_post($slug);
    if ($p) $posts[$slug] = $p;
  }
  uasort($posts, function ($a, $b) { return ($a['order'] ?? 999) <=> ($b['order'] ?? 999); });
  return $cache = $posts;
}

/** Word count of a post (body source + FAQ answers). */
function post_word_count($post) {
  $src = (string)@file_get_contents(blog_dir() . '/' . $post['slug'] . '.php');
  $src = preg_replace('/<\?(?:php|=).*?\?>/s', ' ', $src); // drop metadata block + inline PHP before stripping HTML
  $words = str_word_count(strip_tags($src));
  foreach (($post['faqs'] ?? []) as $f) { $words += str_word_count($f['a'] ?? ''); }
  return $words;
}

/** Reading time in minutes (~200 words per minute). */
function post_read_time($post) {
  return max(3, (int)round(post_word_count($post) / 200));
}

function post_image($slug, $variant = '', $ext = 'webp') {
  return '/assets/blog/' . $slug . ($variant ? '-' . $variant : '') . '.' . $ext;
}

function blog_date($ymd) {
  $t = strtotime($ymd);
  return $t ? date('j M Y', $t) : $ymd;
}

/** Mid-article call-to-action box. Use inside post bodies: <?php inline_cta('cardiac'); ?> */
function inline_cta($service = 'emergency', $heading = null) {
  $svc = BLOG_SERVICES[$service] ?? BLOG_SERVICES['emergency'];
  $heading = $heading ?: 'Need an ambulance right now?';
  echo '<aside class="bp-cta">'
     . '<div class="bp-cta__text"><p class="bp-cta__eyebrow">24/7 across Delhi NCR</p>'
     . '<p class="bp-cta__title">' . blog_e($heading) . '</p>'
     . '<p class="bp-cta__desc">Call our helpline and the dispatch team will send the right ambulance. Ask for a <a href="' . blog_e(link_to($service)) . '">' . blog_e($svc[0]) . '</a> if the patient needs it.</p></div>'
     . '<div class="bp-cta__actions"><a class="bp-btn bp-btn--red" href="' . BLOG_TEL . '">Call ' . blog_e(BLOG_PHONE) . '</a>'
     . '<a class="bp-btn bp-btn--ghost" href="' . BLOG_WA . '" target="_blank" rel="noopener">WhatsApp</a></div>'
     . '</aside>';
}

/** Turn heading text into an anchor id. */
function blog_slugify($text) {
  $text = strtolower(trim(html_entity_decode(strip_tags($text), ENT_QUOTES, 'UTF-8')));
  $text = preg_replace('/[^a-z0-9]+/', '-', $text);
  return trim($text, '-');
}

/** Small inline icon set used by the blog templates. */
function blog_icon($name, $size = 18) {
  $paths = [
    'phone'  => '<path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"/>',
    'wa'     => '<path d="M21 11.5a8.4 8.4 0 0 1-12.6 7.3L3 20.5l1.8-5.2A8.4 8.4 0 1 1 21 11.5Z"/>',
    'clock'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
    'arrow'  => '<path d="M4 12h15m-6-6 6 6-6 6"/>',
    'alert'  => '<path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0Z"/><path d="M12 9v4M12 17h.01"/>',
    'check'  => '<path d="m5 12 5 5L20 7"/>',
    'x'      => '<path d="M18 6 6 18M6 6l12 12"/>',
    'list'   => '<path d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/>',
    'ambulance' => '<path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"/><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"/><circle cx="7.5" cy="17.5" r="2"/><circle cx="16.5" cy="17.5" r="2"/><path d="M6 11h4M8 9v4"/>',
    'pin'    => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
    'download' => '<path d="M12 3v12m-5-5 5 5 5-5M5 21h14"/>',
    'shield' => '<path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6l-8-3Z"/>',
  ];
  $p = $paths[$name] ?? '';
  return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
}
