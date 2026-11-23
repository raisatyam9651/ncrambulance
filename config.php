<?php
/**
 * Site-wide configuration.
 * Change values here once; every page (legacy + generated location pages) reads from this file.
 */
if (defined('SITE_CONFIG_LOADED')) return;
define('SITE_CONFIG_LOADED', true);

// TODO before going live: replace with the real domain (no trailing slash). Also update robots.txt.
define('SITE_URL', 'https://yourdomain.com');

define('BRAND', 'NCR Ambulance');
define('PHONE_DISPLAY', '+91 7317564794');
define('PHONE_TEL', '+917317564794');
define('WHATSAPP_DIGITS', '917317564794');
define('BUSINESS_ADDRESS', 'Ground Floor, SupremeWork Co-working Space, Plot No. 84, Institutional Area, Sector 32, Gurugram, Haryana 122001');

/**
 * Location roll-out control.
 * Only states listed here get live pages, sitemap entries and footer links.
 * Every other state in data/india.php returns 404 (append ?preview=1 to review it with noindex).
 * Publish in batches — see docs/LOCATION-PAGES-STRATEGY.md.
 */
define('PUBLISHED_STATES', [
    'uttar-pradesh',
]);

// Path to the design-system stylesheet shared by every page.
define('DS_CSS', '/_ds/ethical-healthcare-community-design-syst-6ce9bd81-787b-44c9-bdfb-94df1770d8a1/colors_and_type.css');

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function wa_href($text = '') {
    return 'https://wa.me/' . WHATSAPP_DIGITS . ($text !== '' ? '?text=' . rawurlencode($text) : '');
}
