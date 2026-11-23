<?php
/** State hub: /ambulance-service/{state}/  — vars: $S, $SVC */
$st    = $S['name'];
$count = count($S['districts']);
$wa    = "Hi, I need an ambulance in $st";
$url   = url_state($S);
$capital = preg_replace('/\s*\(.*$/', '', $S['capital']);

$page_title    = "Ambulance Service in $st | 24/7 in All $count Districts";
$page_desc     = "24/7 ambulance booking across all $count districts of $st — emergency, ICU, ALS, BLS, cardiac, ventilator and air ambulances. Call " . PHONE_DISPLAY . ".";
$page_tagline  = "24/7 Ambulance · $st";

$crumbs = p_crumbs([['Home', '/'], ['Locations', url_india()], ["Ambulance Service in $st", $url]], $schemaCrumbs);

$cards = [];
foreach ($SVC as $slug => $s) $cards[] = [url_state_service($S, $slug), $slug, $s['name'] . ' in ' . $st];

// Group districts by division when available.
$groups = [];
foreach ($S['districts'] as $d) $groups[$d['division']][] = $d;
ksort($groups);

$faqs = [
    ["Do you provide ambulance service in every district of $st?", "Yes. Our 24/7 helpline arranges ambulances in all $count districts of $st through partner ambulance operators. Choose your district above for local details, or simply call " . PHONE_DISPLAY . "."],
    ["Can I book an ICU or ventilator ambulance in $st?", "Yes. ICU and ventilator ambulances can be arranged for critical patients, including transfers from district hospitals to $capital and other cities with tertiary hospitals."],
    ["Do you arrange inter-state ambulance transfers from $st?", "Yes. We arrange road ambulances and air ambulances from $st to Delhi and other states. Share the destination hospital and patient condition for a quote."],
    ["Is this the government 108 ambulance service?", "No. We are a private ambulance booking helpline. For the free government emergency ambulance in $st, dial 108. We arrange private BLS, ALS, ICU, ventilator, cardiac and air ambulances and planned transfers."],
];
$faqHtml = p_faq($faqs, $schemaFaq);

$page_schema = [$schemaCrumbs, p_service_schema('Ambulance service', $st, $url), $schemaFaq];
$AREAS = loc_areas_for_state($S['slug']);

include __DIR__ . '/../header.php';
?>
<main>
<?= p_hero($crumbs, "Helpline open 24×7 · $st", "Ambulance Service in $st", "24/7 ambulance booking across all $count districts of $st — from a basic patient shift to an ICU, ventilator or air ambulance transfer.", "Call one number from anywhere in $st. Our dispatch desk finds the nearest suitable ambulance, confirms the fare and shares the driver's details before the ambulance leaves.", $wa, '/assets/img/emergency-ambulance.webp', "Ambulance service in $st", ["All $count districts", 'ICU & ventilator', 'Air ambulance', 'Inter-state transfers']) ?>

<section class="lp-section alt" id="districts">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Choose your district</span>
      <h2 class="lp-h2">Ambulance service in all <?= $count ?> districts of <?= e($st) ?></h2>
      <p class="lp-p">Select a district to see local coverage, referral hospitals and the ambulance services available there.</p>
    </div>
    <?php foreach ($groups as $div => $ds): ?>
      <div class="lp-division">
        <?php if ($div !== ''): ?><h3><?= e($div) ?> division</h3><?php endif; ?>
        <ul class="lp-dlist">
          <?php foreach ($ds as $d): ?><li><a href="<?= e(url_district($S, $d)) ?>">Ambulance Service in <?= e($d['name']) ?></a><?php if ($d['hq'] && stripos($d['name'], $d['hq']) === false): ?> <small>(<?= e($d['hq']) ?>)</small><?php endif; ?></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Services in <?= e($st) ?></span>
      <h2 class="lp-h2">Ambulance services across <?= e($st) ?></h2>
    </div>
    <?= p_service_cards($cards) ?>
  </div>
</section>

<?php if ($S['hubs']): ?>
<section class="lp-section alt">
  <div class="lp-wrap lp-split">
    <div class="lp-photo"><img src="/assets/img/icu-monitor.webp" alt="ICU patient monitor used during critical transfers in <?= e($st) ?>" loading="lazy"></div>
    <div>
      <span class="lp-eyebrow">Referral transfers</span>
      <h2 class="lp-h2">Transfers to major hospitals in <?= e($st) ?></h2>
      <p class="lp-p">Patients from district hospitals are often shifted to these referral centres. We arrange BLS, ALS, ICU and ventilator ambulances for these trips:</p>
      <ul class="lp-checks"><?php foreach ($S['hubs'] as $h): ?><li><?= e($h) ?></li><?php endforeach; ?></ul>
      <?= p_disclaimer() ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Ambulance types</span>
      <h2 class="lp-h2">Which ambulance does the patient need?</h2>
    </div>
    <?= p_types_table() ?>
  </div>
</section>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head"><span class="lp-eyebrow">How it works</span><h2 class="lp-h2">How to book an ambulance in <?= e($st) ?></h2></div>
    <?= p_steps($st) ?>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head"><span class="lp-eyebrow">FAQs</span><h2 class="lp-h2">Ambulance service in <?= e($st) ?> — FAQs</h2></div>
    <?= $faqHtml ?>
  </div>
</section>

<?= p_cta_band($st, $wa) ?>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
