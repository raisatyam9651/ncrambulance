<?php
/**
 * Location data helpers shared by location.php, footer.php and sitemap.php.
 */
require_once __DIR__ . '/../config.php';

function loc_slug($s) {
    $s = strtolower(trim($s));
    $s = str_replace(['&', '.'], ['and', ''], $s);
    $s = preg_replace('/[^a-z0-9]+/', '-', $s);
    return trim($s, '-');
}

/** All states, normalised: districts keyed by slug, each with name / hq / division. */
function loc_states() {
    static $states = null;
    if ($states !== null) return $states;
    $raw = require __DIR__ . '/../data/india.php';
    $states = [];
    foreach ($raw as $sslug => $st) {
        $st['slug'] = $sslug;
        $st['override'] = $st['override'] ?? [];
        $st['hubs'] = $st['hubs'] ?? [];
        $groups = isset($st['divisions'])
            ? $st['divisions']
            : ['' => ['districts' => $st['districts']]];
        $districts = [];
        foreach ($groups as $div => $g) {
            foreach ($g['districts'] as $entry) {
                $parts = explode('|', $entry);
                $name = $parts[0];
                $slug = loc_slug($name);
                $districts[$slug] = [
                    'slug'     => $slug,
                    'name'     => $name,
                    'hq'       => $parts[1] ?? '',
                    'division' => $div,
                    'hubs'     => $g['hubs'] ?? [],
                    'airport'  => $g['airport'] ?? '',
                ];
            }
        }
        // Optional hand-written local content: data/local/{state}.php => [district-slug => [...]]
        $localFile = __DIR__ . '/../data/local/' . $sslug . '.php';
        $local = is_file($localFile) ? require $localFile : [];
        foreach ($districts as $k => $_) $districts[$k]['local'] = $local[$k] ?? [];
        uasort($districts, fn($a, $b) => strcmp($a['name'], $b['name']));
        $st['districts'] = $districts;
        $states[$sslug] = $st;
    }
    return $states;
}

function loc_state($slug) { $all = loc_states(); return $all[$slug] ?? null; }
function loc_is_published($slug) { return in_array($slug, PUBLISHED_STATES, true); }
function loc_is_indexable($stateSlug, $type, $districtSlug = null, $svcSlug = null) {
    if (!loc_is_published($stateSlug)) return false;
    if (!defined('LIVE_DISTRICTS') || !isset(LIVE_DISTRICTS[$stateSlug])) return true;
    if ($type === 'state') return true;
    if ($type === 'state-service') return defined('LIVE_STATE_SERVICES') && in_array($svcSlug, LIVE_STATE_SERVICES, true);
    return in_array($districtSlug, LIVE_DISTRICTS[$stateSlug], true);
}
function loc_published_states() {
    return array_filter(loc_states(), fn($s) => loc_is_published($s['slug']));
}

function loc_services() {
    static $svc = null;
    if ($svc === null) $svc = require __DIR__ . '/../data/services.php';
    return $svc;
}

/** "Sant Kabir Nagar (Khalilabad)" — used in H1/titles so both names rank. */
function loc_label($d) {
    return $d['hq'] && stripos($d['name'], $d['hq']) === false ? $d['name'] . ' (' . $d['hq'] . ')' : $d['name'];
}

// ------------------------------------------------------------------ URLs (always with trailing slash)
function url_india() { return '/ambulance-service/'; }
function url_state($s) {
    return $s['state_override'] ?? '/ambulance-service/' . $s['slug'] . '/';
}
function url_district($s, $d) {
    return $s['override'][$d['slug']] ?? '/ambulance-service/' . $s['slug'] . '/' . $d['slug'] . '/';
}
function url_state_service($s, $svcSlug) { return '/ambulance-service/' . $s['slug'] . '/' . $svcSlug . '/'; }
function url_district_service($s, $d, $svcSlug) {
    return '/ambulance-service/' . $s['slug'] . '/' . $d['slug'] . '/' . $svcSlug . '/';
}
function abs_url($path) { return SITE_URL . $path; }

/** Deterministic variant picker so each page gets stable (not random-per-load) copy. */
function loc_pick($seed, array $options) {
    return $options[abs(crc32($seed)) % count($options)];
}

/** Districts in the same division; for flat states, alphabetical neighbours. Excludes the district itself. */
function loc_nearby($s, $d, $limit = 8) {
    $all = $s['districts'];
    if ($d['division'] !== '') {
        $same = array_filter($all, fn($x) => $x['division'] === $d['division'] && $x['slug'] !== $d['slug']);
        if (count($same) >= 2) return array_slice($same, 0, $limit, true);
    }
    $keys = array_keys($all);
    $i = array_search($d['slug'], $keys, true);
    $out = [];
    for ($k = 1; count($out) < $limit && ($i - $k >= 0 || $i + $k < count($keys)); $k++) {
        foreach ([$i - $k, $i + $k] as $j) {
            if ($j >= 0 && $j < count($keys) && count($out) < $limit) $out[$keys[$j]] = $all[$keys[$j]];
        }
    }
    return $out;
}

/** Human-readable referral hubs for a district (falls back to the state capital). */
function loc_hubs($s, $d) {
    $out = [];
    foreach ($d['hubs'] as $h) if (isset($s['hubs'][$h])) $out[] = $s['hubs'][$h];
    if (!$out) $out[] = $s['capital'] . ' (state capital) and other major cities with tertiary hospitals';
    return $out;
}

/** Typical inter-city referral destinations for a district: hub cities + state capital + Delhi, minus itself. */
function loc_routes($s, $d) {
    $capital = preg_replace('/\s*\(.*$/', '', $s['capital']);
    $cities = [];
    foreach ($d['hubs'] as $h) if (isset($s['hubs'][$h])) $cities[] = trim(explode(' — ', $s['hubs'][$h])[0]);
    $cities = array_values(array_unique(array_merge($cities, [$capital, 'Delhi'])));
    $hq = $d['hq'] ?: $d['name'];
    return array_values(array_filter($cities, fn($c) =>
        stripos($c, $d['name']) === false && stripos($c, $hq) === false && stripos($d['name'], $c) === false));
}

/** Indefinite article for a service name: "an ICU Ambulance", "a BLS Ambulance". */
function loc_an($phrase) { return preg_match('/^[AEIOU]/i', $phrase) ? 'an' : 'a'; }

/** Natural-language list: "A, B and C". */
function loc_join(array $items) {
    $items = array_values($items);
    if (count($items) <= 1) return $items[0] ?? '';
    $last = array_pop($items);
    return implode(', ', $items) . ' and ' . $last;
}

/** Replace {place} / {phone} tokens in service copy. */
function loc_fill($text, $place) {
    return strtr($text, ['{place}' => $place, '{phone}' => PHONE_DISPLAY]);
}

/**
 * Footer "We are also serving in these areas" context.
 * Pages set $GLOBALS['AREAS'] = loc_areas_for_state(...) before including footer.php.
 */
function loc_areas_for_state($stateSlug, $svcSlug = null, $currentDistrict = null) {
    $s = loc_state($stateSlug);
    if (!$s || !loc_is_published($stateSlug)) return null;  // never link to unpublished (404) pages
    $svc = $svcSlug ? (loc_services()[$svcSlug] ?? null) : null;
    $links = [];
    foreach ($s['districts'] as $d) {
        $links[] = [
            'href'    => $svc ? url_district_service($s, $d, $svcSlug) : url_district($s, $d),
            'text'    => ($svc ? $svc['name'] : 'Ambulance Service') . ' in ' . loc_label($d),
            'current' => $currentDistrict === $d['slug'],
        ];
    }
    return [
        'title'       => $svc ? $svc['name'] . ' — all districts of ' . $s['name'] : 'We are also serving in these areas of ' . $s['name'],
        'parent_href' => $svc ? url_state_service($s, $svcSlug) : url_state($s),
        'parent_text' => ($svc ? $svc['name'] : 'Ambulance Service') . ' in ' . $s['name'] . ' (' . count($s['districts']) . ' districts)',
        'links'       => $links,
    ];
}

/** Default footer context (home / legal / contact pages): every published state + NCR city pages. */
function loc_areas_default() {
    $links = [];
    foreach (loc_published_states() as $s) {
        $links[] = ['href' => url_state($s), 'text' => 'Ambulance Service in ' . $s['name'], 'current' => false];
    }
    foreach ([
        ['/ambulance-service/delhi/', 'Delhi'], ['/ambulance-service/noida/', 'Noida'], ['/ambulance-service/greater-noida/', 'Greater Noida'],
        ['/ambulance-service/ghaziabad/', 'Ghaziabad'], ['/ambulance-service/gurgaon/', 'Gurgaon'], ['/ambulance-service/faridabad/', 'Faridabad'],
        ['/ambulance-service/delhi/dwarka/', 'Dwarka'],
    ] as [$h, $t]) {
        $links[] = ['href' => $h, 'text' => 'Ambulance Service in ' . $t, 'current' => false];
    }
    return [
        'title'       => 'We are also serving in these areas',
        'parent_href' => url_india(),
        'parent_text' => 'All locations across India',
        'links'       => $links,
    ];
}
