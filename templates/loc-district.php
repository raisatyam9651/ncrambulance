<?php
/** District page: /ambulance-service/{state}/{district}/  — vars from location.php: $S, $D, $SVC */
$name   = $D['name'];
$label  = loc_label($D);
$hq     = $D['hq'] ?: $D['name'];
$hubs   = loc_hubs($S, $D);
$routes  = loc_routes($S, $D);
$hubCity = $routes[0] ?? $S['capital'];
$nearby = loc_nearby($S, $D);
$nearNames = array_map(fn($x) => $x['name'], array_slice($nearby, 0, 3));
$seed   = $S['slug'] . '/' . $D['slug'];
$wa     = 'Hi, I need an ambulance in ' . $name . ', ' . $S['name'];
$url    = url_district($S, $D);

$lead = loc_pick($seed, [
    "Call one number and we arrange the nearest available ambulance in $name — from a basic patient shift to an ICU or ventilator transfer, day or night.",
    "Need an ambulance in $name? Our 24/7 dispatch desk finds the closest suitable ambulance, shares the driver's details and stays with you until pickup.",
    "Emergency, ICU, cardiac, ventilator and air ambulances for $name and nearby areas — booked through a single 24/7 helpline.",
]);
$body = loc_pick($seed . 'b', [
    "Families in $name call us for emergencies, hospital admissions, discharges and transfers to bigger hospitals in $hubCity. Tell us the patient's condition and pickup point and we will match the right ambulance type.",
    "Whether the patient is at home in $hq or admitted to a hospital anywhere in $name district, we help you book the right ambulance quickly — and plan long-distance transfers to $hubCity or beyond.",
    "From road accidents on the highway to planned dialysis visits in $hq, our helpline arranges ambulances across $name district and confirms the vehicle, crew and fare before dispatch.",
]);

$page_title   = "Ambulance Service in $label | 24/7 ICU & Emergency Ambulance";
$page_desc    = "Need an ambulance in $name, {$S['name']}? Call " . PHONE_DISPLAY . " — 24/7 emergency, ICU, ALS, BLS, cardiac, ventilator & air ambulance booking with fare confirmed on call.";
$page_tagline = "24/7 Ambulance · $name";
$page_og_image = '/assets/img/emergency-ambulance.webp';

$crumbs = p_crumbs([
    ['Home', '/'], ['Locations', url_india()], [$S['name'], url_state($S)], ['Ambulance Service in ' . $name, $url],
], $schemaCrumbs);

$cards = [];
foreach ($SVC as $slug => $s) $cards[] = [url_district_service($S, $D, $slug), $slug, $s['name'] . ' in ' . $name];


$faqs = [
    ["Is ambulance service available 24/7 in $name?", "Yes. Our helpline " . PHONE_DISPLAY . " is answered round the clock, including nights, Sundays and holidays. We arrange the nearest available ambulance anywhere in $name district, including $hq town."],
    ["How much does an ambulance cost in $name?", "The fare depends on the ambulance type (BLS, ALS, ICU, ventilator), the distance and any extra equipment or doctor. We tell you the full fare on the call before the ambulance is dispatched."],
    ["Can I get an ICU or ventilator ambulance in $name?", "Yes. ICU and ventilator ambulances can be arranged for critical patients in $name, including transfers to $hubCity. Share the patient's condition so we can confirm the right vehicle and crew."],
    ["Do you arrange ambulances from $name to " . ($routes[0] ?? 'other cities') . "?", "Yes. Inter-city transfers from $name to " . loc_join(array_slice($routes, 0, 3)) . " are common. Tell us the destination hospital and we will plan the vehicle, oxygen and crew for the distance."],
    ["Which areas of $name do you cover?", "We cover all of $name district — $hq town, surrounding tehsils and villages — and neighbouring districts such as " . loc_join($nearNames) . "."],
    ["Is this the government 108 ambulance?", "No. We are a private 24/7 ambulance booking helpline. For the free government emergency ambulance in {$S['name']}, dial 108. We arrange private BLS, ALS, ICU, ventilator, cardiac and air ambulances and planned transfers."],
];
$faqHtml = p_faq($faqs, $schemaFaq);

$page_schema = [$schemaCrumbs, p_service_schema('Ambulance service', "$name, {$S['name']}", $url), $schemaFaq];
$AREAS = loc_areas_for_state($S['slug'], null, $D['slug']);

include __DIR__ . '/../header.php';
?>
<main>
<?= p_hero($crumbs, "Helpline open 24×7 · $name", "Ambulance Service in $label", $lead, $body, $wa, '/assets/img/emergency-ambulance.webp', "Ambulance service in $name, {$S['name']}", ['24/7 helpline', 'ICU & ventilator', 'Cardiac ambulance', 'Air ambulance', 'Inter-city transfers']) ?>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Services in <?= e($name) ?></span>
      <h2 class="lp-h2">Ambulance services available in <?= e($name) ?></h2>
      <p class="lp-p">Pick the ambulance that matches the patient's condition. Not sure? Call us — the dispatch desk will advise you.</p>
    </div>
    <?= p_service_cards($cards) ?>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap lp-split">
    <div class="lp-photo"><img src="/assets/img/dispatch-desk.webp" alt="Ambulance dispatch desk handling calls for <?= e($name) ?>" loading="lazy"></div>
    <div>
      <span class="lp-eyebrow">Local coverage</span>
      <h2 class="lp-h2">Ambulance booking in <?= e($name) ?>, <?= e($S['name']) ?></h2>
      <p class="lp-p"><?= e("When you call from $name, our dispatch desk checks which partner ambulances are closest to your pickup point and which type the patient needs. You get the driver's number, the fare and an estimated arrival before the ambulance leaves.") ?></p>
      <ul class="lp-facts">
        <li><?= ICON_MAP ?><span><strong><?= e($name) ?> district</strong><?= $D['division'] ? ' is part of the ' . e($D['division']) . ' division of ' . e($S['name']) : ', ' . e($S['name']) ?><?= $D['hq'] ? '; district headquarters: ' . e($D['hq']) : '' ?>.</span></li>
        <li><?= ICON_HOSP ?><span><strong>Referral centres for specialist care:</strong> <?= e(loc_join($hubs)) ?>.</span></li>
        <?php if ($D['airport']): ?><li><?= ICON_PLANE ?><span><strong>Air ambulance:</strong> ground ambulance from <?= e($name) ?> to the nearest airport (<?= e($D['airport']) ?>), then a medical flight to the destination city.</span></li><?php endif; ?>
        <li><?= ICON_PIN ?><span><strong>Nearby districts we also cover:</strong> <?php $i = 0; foreach ($nearby as $n): ?><?= $i++ ? ', ' : '' ?><a href="<?= e(url_district($S, $n)) ?>" style="color:var(--purple-700);font-weight:600"><?= e($n['name']) ?></a><?php endforeach; ?>.</span></li>
      </ul>
      <?= p_disclaimer() ?>
    </div>
  </div>
</section>

<?php $L = $D['local']; if (!empty($L['about']) || !empty($L['areas']) || !empty($L['hospitals'])): ?>
<section class="lp-section alt">
  <div class="lp-wrap lp-split">
    <div>
      <span class="lp-eyebrow">Local guide</span>
      <h2 class="lp-h2">Areas we cover in <?= e($name) ?></h2>
      <?php foreach ((array)($L['about'] ?? []) as $para): ?><p class="lp-p"><?= e($para) ?></p><?php endforeach; ?>
      <?php if (!empty($L['areas'])): ?><ul class="lp-links" style="margin-top:20px"><?php foreach ($L['areas'] as $a): ?><li><a href="tel:<?= PHONE_TEL ?>" title="Call for an ambulance in <?= e($a) ?>">Ambulance in <?= e($a) ?></a></li><?php endforeach; ?></ul><?php endif; ?>
    </div>
    <?php if (!empty($L['hospitals'])): ?>
    <div class="lp-panel">
      <h3 class="lp-h3">Hospitals we commonly transfer patients to</h3>
      <ul class="lp-checks"><?php foreach ($L['hospitals'] as $h): ?><li><?= e($h) ?></li><?php endforeach; ?></ul>
      <p class="lp-note">Listed for convenience only; we are not affiliated with these hospitals. Tell us your preferred hospital when you call.</p>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<section class="lp-section<?= empty($L['about']) && empty($L['areas']) && empty($L['hospitals']) ? ' alt' : '' ?>">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Ambulance types</span>
      <h2 class="lp-h2">Which ambulance does the patient need?</h2>
      <p class="lp-p">A quick guide for families in <?= e($name) ?>. The dispatch desk confirms the final choice with you on the call.</p>
    </div>
    <?= p_types_table() ?>
  </div>
</section>

<?php if ($routes): ?>
<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Inter-city transfers</span>
      <h2 class="lp-h2">Common ambulance trips from <?= e($name) ?></h2>
      <p class="lp-p">Patients from <?= e($name) ?> are often shifted to larger hospitals for specialist treatment. We plan these trips with the right vehicle, oxygen backup and crew for the distance.</p>
    </div>
    <ul class="lp-links">
      <?php foreach ($routes as $r): ?><li><a href="tel:<?= PHONE_TEL ?>"><?= e("$name → $r ambulance") ?></a></li><?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">How it works</span>
      <h2 class="lp-h2">How to book an ambulance in <?= e($name) ?></h2>
    </div>
    <?= p_steps($name) ?>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">FAQs</span>
      <h2 class="lp-h2">Ambulance service in <?= e($name) ?> — questions answered</h2>
    </div>
    <?= $faqHtml ?>
  </div>
</section>

<?= p_cta_band($name, $wa) ?>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
