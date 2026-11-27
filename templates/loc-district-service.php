<?php
/** Service in a district: /ambulance-service/{state}/{district}/{service}/  — vars: $S, $D, $SVC, $svcSlug */
$sv     = $SVC[$svcSlug];
$name   = $D['name'];
$label  = loc_label($D);
$hq     = $D['hq'] ?: $D['name'];
$hubs   = loc_hubs($S, $D);
$routes = loc_routes($S, $D);
$hubCity = $routes[0] ?? $S['capital'];
$nearby = loc_nearby($S, $D);
$seed   = $S['slug'] . '/' . $D['slug'] . '/' . $svcSlug;
$svName = $sv['name'];
$an     = loc_an($svName);
$wa     = "Hi, I need $an $svName in $name, {$S['name']}";
$url    = url_district_service($S, $D, $svcSlug);
$isAir  = $svcSlug === 'air-ambulance';

$lead = loc_pick($seed, [
    "Book $an $svName in $name through our 24/7 helpline — we confirm the vehicle, crew and fare before dispatch.",
    "Looking for $an $svName in $name? Call once and our dispatch desk arranges the nearest suitable vehicle for the patient.",
    "$svName for $name and nearby districts — one call, the right equipment and a trained crew.",
]);

$localAreas = $D['local']['areas'] ?? [];
$areaSnippet = $localAreas ? ' Covering ' . implode(', ', array_slice($localAreas, 0, 3)) . ' & nearby areas.' : '';

$page_title    = "$svName in $label | 24/7 Booking – Call " . PHONE_DISPLAY;
$page_desc     = "$svName in $name, {$S['name']}: " . rtrim($sv['card'], '.') . ". 24/7 booking, fare confirmed on call.$areaSnippet Call " . PHONE_DISPLAY . ".";
$page_tagline  = "$svName · $name";
$page_og_image = $sv['image'];

$crumbs = p_crumbs([
    ['Home', '/'], ['Locations', url_india()], [$S['name'], url_state($S)],
    [$name, url_district($S, $D)], ["$svName in $name", $url],
], $schemaCrumbs);

$others = [];
foreach ($SVC as $slug => $s) if ($slug !== $svcSlug) $others[] = [url_district_service($S, $D, $slug), $slug, $s['name'] . ' in ' . $name];

$faqs = [];
foreach ($sv['faqs'] as [$q, $a]) $faqs[] = [loc_fill($q, $name), loc_fill($a, $name)];
$faqs[] = ["What is the $svName fare in $name?", "The fare depends on the distance, the equipment needed and whether a doctor travels with the patient. We share the complete fare on the call before dispatch — there is nothing to pay for asking."];
$faqs[] = ["Is $svName booking available 24/7 in $name?", "Yes, the helpline " . PHONE_DISPLAY . " works 24 hours a day, every day. Availability of a specific vehicle depends on partner operators near your pickup point in $name; we confirm it before sending the ambulance."];
if ($routes) $faqs[] = ["Can $an $svName take the patient from $name to $hubCity?", "Yes. Transfers from $name to " . loc_join(array_slice($routes, 0, 3)) . " can be arranged. Share the destination hospital and the patient's condition so we can plan oxygen, equipment and crew for the journey."];
$faqHtml = p_faq($faqs, $schemaFaq);

$page_schema = [$schemaCrumbs, p_service_schema($svName, "$name, {$S['name']}", $url, $localAreas, $page_desc), $schemaFaq];
$AREAS = loc_areas_for_state($S['slug'], $svcSlug, $D['slug']);

include __DIR__ . '/../header.php';
?>
<main>
<?= p_hero($crumbs, "$svName · $name", "$svName in $label", $lead, loc_fill($sv['intro'], $name), $wa, $sv['image'], "$svName in $name — " . $sv['alt'], ['24/7 booking', 'Fare confirmed on call', 'Trained crew', $isAir ? 'Bed-to-bed transfer' : 'Inter-city transfers']) ?>

<section class="lp-section alt">
  <div class="lp-wrap lp-split">
    <div>
      <span class="lp-eyebrow">When it is needed</span>
      <h2 class="lp-h2">When to book <?= $an ?> <?= e($svName) ?> in <?= e($name) ?></h2>
      <p class="lp-p">Typical situations where families in <?= e($name) ?> ask for this ambulance:</p>
      <ul class="lp-checks"><?php foreach ($sv['when'] as $w): ?><li><?= e($w) ?></li><?php endforeach; ?></ul>
    </div>
    <div class="lp-panel">
      <h3 class="lp-h3">Typically on board</h3>
      <ul class="lp-checks"><?php foreach ($sv['equip'] as $q): ?><li><?= e($q) ?></li><?php endforeach; ?></ul>
      <p class="lp-note">Equipment varies by vehicle and operator. Tell us the patient's condition and we will confirm exactly what will be on board.</p>
    </div>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap lp-split">
    <div class="lp-photo"><img src="<?= e($isAir ? '/assets/img/air-ambulance-cabin.webp' : '/assets/img/dispatch-desk.webp') ?>" alt="<?= e($isAir ? 'Air ambulance cabin with stretcher and medical equipment' : "Dispatch desk arranging $an $svName in $name") ?>" loading="lazy"></div>
    <div>
      <span class="lp-eyebrow">Coverage</span>
      <h2 class="lp-h2"><?= e($svName) ?> coverage in <?= e($name) ?></h2>
      <ul class="lp-facts">
        <li><?= ICON_MAP ?><span><strong>Pickup anywhere in <?= e($name) ?> district</strong> — <?= e($hq) ?> town, hospitals, homes and highways<?= $D['division'] ? ' (' . e($D['division']) . ' division, ' . e($S['name']) . ')' : '' ?>.</span></li>
        <?php if ($localAreas): ?><li><?= ICON_PIN ?><span><strong>Local areas &amp; towns covered:</strong> <?= e(implode(', ', $localAreas)) ?>.</span></li><?php endif; ?>
        <li><?= ICON_HOSP ?><span><strong>Common destinations:</strong> <?= e(loc_join($hubs)) ?>.</span></li>
        <?php if ($D['airport']): ?><li><?= ICON_PLANE ?><span><strong>Nearest airport<?= $isAir ? ' for the medical flight' : '' ?>:</strong> <?= e($D['airport']) ?><?= $isAir ? ' — we coordinate the ground ambulance from ' . e($name) . ' to the aircraft and from the destination airport to the receiving hospital.' : '.' ?></span></li><?php endif; ?>
        <li><?= ICON_PIN ?><span><strong><?= e($svName) ?> in nearby districts:</strong> <?php $i = 0; foreach ($nearby as $n): ?><?= $i++ ? ', ' : '' ?><a href="<?= e(url_district_service($S, $n, $svcSlug)) ?>" style="color:var(--purple-700);font-weight:600"><?= e($n['name']) ?></a><?php endforeach; ?>.</span></li>
      </ul>
      <p class="lp-p">Also see: <a href="<?= e(url_district($S, $D)) ?>" style="color:var(--purple-700);font-weight:700">all ambulance services in <?= e($name) ?></a> · <a href="<?= e(url_state_service($S, $svcSlug)) ?>" style="color:var(--purple-700);font-weight:700"><?= e($svName) ?> in <?= e($S['name']) ?></a></p>
      <?= p_disclaimer() ?>
    </div>
  </div>
</section>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Other services</span>
      <h2 class="lp-h2">Other ambulance services in <?= e($name) ?></h2>
    </div>
    <?= p_service_cards($others) ?>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">How it works</span>
      <h2 class="lp-h2">How to book <?= $an ?> <?= e($svName) ?> in <?= e($name) ?></h2>
    </div>
    <?= p_steps($name) ?>
  </div>
</section>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">FAQs</span>
      <h2 class="lp-h2"><?= e($svName) ?> in <?= e($name) ?> — FAQs</h2>
    </div>
    <?= $faqHtml ?>
  </div>
</section>

<?= p_cta_band($name, $wa, false) ?>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
