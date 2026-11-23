<?php
/**
 * Reusable HTML blocks for the server-rendered location pages.
 */
require_once __DIR__ . '/locations.php';

const ICON_PHONE = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"/></svg>';
const ICON_WA    = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.6 7.3L3 20.5l1.8-5.2A8.4 8.4 0 1 1 21 11.5Z"/></svg>';
const ICON_ARROW = '<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>';
const ICON_PIN   = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>';
const ICON_HOSP  = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M12 7v6M9 10h6M9 21v-4h6v4"/></svg>';
const ICON_PLANE = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>';
const ICON_MAP   = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#047857" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 6 6-3 6 3 6-3v15l-6 3-6-3-6 3z"/><path d="M9 3v15M15 6v15"/></svg>';
const ICON_CHEV  = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>';

/** Breadcrumb HTML + returns BreadcrumbList schema via $schema_out. */
function p_crumbs(array $items, &$schema_out) {
    $list = [];
    $html = '<nav aria-label="Breadcrumb"><ol class="lp-crumbs">';
    foreach ($items as $i => [$text, $href]) {
        $last = $i === count($items) - 1;
        $html .= '<li>' . ($last ? '<span aria-current="page">' . e($text) . '</span>' : '<a href="' . e($href) . '">' . e($text) . '</a>') . '</li>';
        $list[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $text, 'item' => abs_url($href)];
    }
    $schema_out = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $list];
    return $html . '</ol></nav>';
}

function p_ctas($waText) {
    return '<div class="lp-ctas">'
        . '<a class="btn btn-red" href="tel:' . PHONE_TEL . '">' . ICON_PHONE . 'Call ' . e(PHONE_DISPLAY) . '</a>'
        . '<a class="btn btn-wa" href="' . e(wa_href($waText)) . '" target="_blank" rel="noopener">' . ICON_WA . 'WhatsApp us</a>'
        . '</div>';
}

function p_hero($crumbs, $eyebrow, $h1, $lead, $body, $waText, $img, $alt, $chips) {
    ob_start(); ?>
<section class="lp-hero">
  <div class="lp-wrap">
    <?= $crumbs ?>
    <div class="lp-hero-grid">
      <div>
        <span class="lp-live"><i></i><?= e($eyebrow) ?></span>
        <h1 class="lp-h1"><?= e($h1) ?></h1>
        <p class="lp-lead"><?= e($lead) ?></p>
        <p class="lp-p"><?= e($body) ?></p>
        <?= p_ctas($waText) ?>
        <div class="lp-chips"><?php foreach ($chips as $c): ?><span class="lp-chip"><b></b><?= e($c) ?></span><?php endforeach; ?></div>
      </div>
      <div class="lp-hero-img">
        <img src="<?= e($img) ?>" alt="<?= e($alt) ?>" fetchpriority="high">
        <span class="lp-hero-badge"><?= ICON_PHONE ?> 24/7 dispatch desk</span>
      </div>
    </div>
  </div>
</section>
<?php return ob_get_clean();
}

/** $cards: list of [href, svcSlug, title] */
function p_service_cards(array $cards) {
    $svc = loc_services();
    $html = '<div class="lp-grid">';
    foreach ($cards as [$href, $slug, $title]) {
        $s = $svc[$slug];
        $html .= '<a class="lp-card" href="' . e($href) . '">'
            . '<div class="lp-card-img"><img src="' . e($s['image']) . '" alt="' . e($s['alt']) . '" loading="lazy"></div>'
            . '<div class="lp-card-body"><h3 class="lp-h3">' . e($title) . '</h3><p>' . e($s['card']) . '</p>'
            . '<span class="lp-more">View details' . ICON_ARROW . '</span></div></a>';
    }
    return $html . '</div>';
}

function p_types_table() {
    $rows = [
        ['BLS Ambulance', 'Stable patients, admissions, discharges, check-ups', 'Stretcher, oxygen, first-aid, trained attendant'],
        ['ALS Ambulance', 'Serious emergencies, patients who may deteriorate', 'Cardiac monitor, defibrillator, airway kit, paramedic'],
        ['Cardiac Ambulance', 'Suspected heart attack, rhythm problems', 'ECG / monitor, defibrillator, cardiac medicines'],
        ['ICU Ambulance', 'Critical patients, ICU-to-ICU transfers', 'Monitor, ventilator, infusion pumps, critical-care crew'],
        ['Ventilator Ambulance', 'Patients who need breathing support', 'Transport ventilator, monitor, suction, oxygen backup'],
        ['Air Ambulance', 'Long-distance critical transfers', 'Aircraft with ICU set-up, doctor, ground ambulances both ends'],
        ['Patient Transfer', 'Planned hospital-to-hospital or inter-city moves', 'Vehicle type matched to the patient'],
    ];
    $h = '<div class="lp-table-wrap"><table class="lp-table"><thead><tr><th>Ambulance</th><th>Best for</th><th>Typically on board</th></tr></thead><tbody>';
    foreach ($rows as $r) $h .= '<tr><td>' . e($r[0]) . '</td><td>' . e($r[1]) . '</td><td>' . e($r[2]) . '</td></tr>';
    return $h . '</tbody></table></div>';
}

function p_steps($place) {
    $steps = [
        ['Call or WhatsApp', 'Call ' . PHONE_DISPLAY . ' or send a WhatsApp message. The helpline is answered 24 hours a day.'],
        ['Share location & condition', 'Tell us the pickup point in ' . $place . ', the patient\'s condition and the destination hospital.'],
        ['Ambulance confirmed', 'We confirm the nearest suitable ambulance, the fare and the driver\'s contact number before dispatch.'],
        ['Safe transfer', 'The crew takes the patient to the hospital. Our desk stays reachable until the trip is complete.'],
    ];
    $h = '<div class="lp-steps">';
    foreach ($steps as $s) $h .= '<div class="lp-step"><h3 class="lp-h3">' . e($s[0]) . '</h3><p>' . e($s[1]) . '</p></div>';
    return $h . '</div>';
}

/** FAQ HTML + FAQPage schema via $schema_out. */
function p_faq(array $faqs, &$schema_out) {
    $h = '<div class="lp-faq">';
    $main = [];
    foreach ($faqs as [$q, $a]) {
        $h .= '<details><summary>' . e($q) . ICON_CHEV . '</summary><p>' . e($a) . '</p></details>';
        $main[] = ['@type' => 'Question', 'name' => $q, 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $a]];
    }
    $schema_out = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $main];
    return $h . '</div>';
}

function p_cta_band($place, $waText, $tight = true) {
    ob_start(); ?>
<section class="lp-section"<?= $tight ? ' style="padding-top:0"' : '' ?>>
  <div class="lp-wrap">
    <div class="lp-band">
      <div>
        <span class="lp-live" style="background:rgba(255,255,255,.10);color:#fff"><i style="background:#EF4444"></i>Emergency desk</span>
        <h2 style="margin-top:18px">Need an ambulance in <?= e($place) ?> right now?</h2>
        <p>Call the 24/7 helpline. We will confirm the nearest suitable ambulance and share the driver's details with you.</p>
        <?= p_ctas($waText) ?>
      </div>
      <div class="lp-band-img"><img src="/assets/img/ambulance-night.webp" alt="Ambulance with emergency lights on at night" loading="lazy"></div>
    </div>
  </div>
</section>
<?php return ob_get_clean();
}

function p_disclaimer() {
    return '<p class="lp-note">We are a 24/7 ambulance booking and dispatch helpline. Ambulances are operated by independent partner providers; vehicle type, crew and fare are confirmed on the call before dispatch. For the free government ambulance, dial 108. In a life-threatening emergency, also contact the nearest hospital.</p>';
}

/** Service schema for a location page. */
function p_service_schema($serviceName, $areaName, $url) {
    return [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'serviceType' => $serviceName,
        'name' => $serviceName . ' in ' . $areaName,
        'url' => abs_url($url),
        'provider' => ['@type' => 'Organization', 'name' => BRAND, 'telephone' => PHONE_DISPLAY, 'url' => SITE_URL . '/'],
        'areaServed' => ['@type' => 'AdministrativeArea', 'name' => $areaName . ', India'],
        'availableChannel' => ['@type' => 'ServiceChannel', 'servicePhone' => ['@type' => 'ContactPoint', 'telephone' => PHONE_DISPLAY, 'contactType' => 'emergency', 'hoursAvailable' => '24/7']],
    ];
}
