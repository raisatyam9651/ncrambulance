<?php
/**
 * Front controller for all generated location pages (see .htaccess):
 *   /ambulance-service/                               india index
 *   /ambulance-service/{state}/                       state hub
 *   /ambulance-service/{state}/{service}/             service across a state
 *   /ambulance-service/{state}/{district}/            district page
 *   /ambulance-service/{state}/{district}/{service}/  service in a district
 * Legacy hand-built folders (delhi, noida, gurgaon …) are real directories and are served directly by Apache.
 */
require_once __DIR__ . '/inc/partials.php';

$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$query   = $_SERVER['QUERY_STRING'] ?? '';
$preview = isset($_GET['preview']);

// One canonical form: lowercase + trailing slash.
$canonPath = strtolower(rtrim($reqPath, '/')) . '/';
if ($reqPath !== $canonPath) {
    $q = preg_replace('/(^|&)path=[^&]*/', '', $query);
    header('Location: ' . $canonPath . (trim($q, '&') !== '' ? '?' . trim($q, '&') : ''), true, 301);
    exit;
}

$path  = trim(substr($canonPath, strlen('/ambulance-service')), '/');
$parts = $path === '' ? [] : explode('/', $path);
$SVC   = loc_services();

function loc_404() {
    http_response_code(404);
    // header.php / footer.php read these from the including scope.
    $static_page = true;
    $page_title  = 'Page not found | ' . BRAND;
    $page_desc   = 'This location page is not available yet.';
    $page_robots = 'noindex, follow';
    $page_schema = [];
    include __DIR__ . '/header.php';
    echo '<main class="lp-section"><div class="lp-wrap"><h1 class="lp-h1">Page not found</h1><p class="lp-p">We may not have a page for this location yet, but our helpline can still help. Call <a href="tel:' . PHONE_TEL . '">' . e(PHONE_DISPLAY) . '</a> or <a href="/ambulance-service/">browse all locations</a>.</p></div></main>';
    include __DIR__ . '/footer.php';
    exit;
}

$type = 'india'; $S = $D = null; $svcSlug = null;
if (count($parts) >= 1) {
    $S = loc_state($parts[0]);
    if (!$S) loc_404();
    if (!loc_is_published($S['slug']) && !$preview) loc_404();
    $type = 'state';
}
if (count($parts) >= 2) {
    if (isset($SVC[$parts[1]]) && count($parts) === 2) {
        $type = 'state-service'; $svcSlug = $parts[1];
    } else {
        $D = $S['districts'][$parts[1]] ?? null;
        if (!$D) loc_404();
        $type = 'district';
    }
}
if (count($parts) === 3) {
    if (!isset($SVC[$parts[2]])) loc_404();
    $type = 'district-service'; $svcSlug = $parts[2];
}
if (count($parts) > 3) loc_404();

// A district that already has a hand-built page: send visitors (and link equity) there.
if ($type === 'district' && isset($S['override'][$D['slug']])) {
    header('Location: ' . $S['override'][$D['slug']], true, 301);
    exit;
}

// Shared page settings
$static_page = true;
$page_robots = ($S && !loc_is_published($S['slug'])) ? 'noindex, nofollow' : null;
$page_canonical = $canonPath;

include __DIR__ . '/templates/loc-' . $type . '.php';
