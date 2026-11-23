<?php
/**
 * Dynamic XML sitemap, served at /sitemap.xml (see .htaccess).
 * Includes static pages, legacy NCR pages, every location page of PUBLISHED_STATES, and the blog.
 */
require_once __DIR__ . '/inc/locations.php';

header('Content-Type: application/xml; charset=utf-8');

$urls = [];
$add = function ($path, $lastmod, $priority) use (&$urls) {
    if (!isset($urls[$path])) $urls[$path] = [$lastmod, $priority];
};
$mtime = fn($f) => is_file(__DIR__ . '/' . $f) ? date('Y-m-d', filemtime(__DIR__ . '/' . $f)) : date('Y-m-d');

// Static & legacy pages
$add('/', $mtime('index.php'), '1.0');
foreach (['delhi', 'gurgaon', 'noida', 'ghaziabad', 'faridabad', 'greater-noida', 'delhi/dwarka'] as $p) {
    $add("/ambulance-service/$p/", $mtime("ambulance-service/$p/index.php"), '0.9');
}
$add('/contact', $mtime('contact.php'), '0.6');
foreach (['privacy-policy', 'terms-and-conditions', 'disclaimer'] as $p) $add("/$p.php", $mtime("$p.php"), '0.3');

// Location pages
$locMod = max(array_map(fn($f) => filemtime(__DIR__ . '/' . $f), ['data/india.php', 'data/services.php', 'templates/loc-district.php', 'templates/loc-district-service.php']));
$locMod = date('Y-m-d', $locMod);
$add(url_india(), $locMod, '0.8');
foreach (loc_published_states() as $s) {
    $add(url_state($s), $locMod, '0.8');
    foreach (loc_services() as $slug => $_) $add(url_state_service($s, $slug), $locMod, '0.6');
    foreach ($s['districts'] as $d) {
        $add(url_district($s, $d), $locMod, '0.7');
        foreach (loc_services() as $slug => $_) $add(url_district_service($s, $d, $slug), $locMod, '0.5');
    }
}

// Blog (owned by blog/_inc/blog.php)
$add('/blog/', $mtime('blog/index.php'), '0.6');
if (is_file(__DIR__ . '/blog/_inc/blog.php')) {
    require_once __DIR__ . '/blog/_inc/blog.php';
    if (function_exists('all_posts') && function_exists('post_url')) {
        foreach (all_posts() as $slug => $p) {
            $add(post_url($slug), $p['updated'] ?? $mtime("blog/$slug.php"), '0.5');
        }
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as $path => [$lastmod, $priority]) {
    echo '  <url><loc>' . htmlspecialchars(SITE_URL . $path, ENT_XML1) . '</loc><lastmod>' . $lastmod . '</lastmod><priority>' . $priority . "</priority></url>\n";
}
echo "</urlset>\n";
