<?php
/** Service across a state: /ambulance-service/{state}/{service}/  — vars: $S, $SVC, $svcSlug */
$sv     = $SVC[$svcSlug];
$svName = $sv['name'];
$an     = loc_an($svName);
$st     = $S['name'];
$count  = count($S['districts']);
$wa     = "Hi, I need $an $svName in $st";
$url    = url_state_service($S, $svcSlug);

$page_title    = "$svName in $st | 24/7 in All $count Districts";
$page_desc     = "$svName service across $st: " . rtrim($sv['card'], '.') . ". Available in all $count districts, 24/7. Call " . PHONE_DISPLAY . ".";
$page_tagline  = "$svName · $st";
$page_og_image = $sv['image'];

$crumbs = p_crumbs([['Home', '/'], ['Locations', url_india()], [$st, url_state($S)], ["$svName in $st", $url]], $schemaCrumbs);

$others = [];
foreach ($SVC as $slug => $s) if ($slug !== $svcSlug) $others[] = [url_state_service($S, $slug), $slug, $s['name'] . ' in ' . $st];

$groups = [];
foreach ($S['districts'] as $d) $groups[$d['division']][] = $d;
ksort($groups);

$faqs = [];
foreach ($sv['faqs'] as [$q, $a]) $faqs[] = [loc_fill($q, $st), loc_fill($a, $st)];
$faqs[] = ["In which districts of $st is the $svName available?", "We arrange the $svName in all $count districts of $st through partner operators. Pick your district from the list above or call " . PHONE_DISPLAY . " to check the nearest vehicle."];
$faqHtml = p_faq($faqs, $schemaFaq);

$districtNames = array_map(fn($d) => $d['name'], $S['districts']);
$page_schema = [$schemaCrumbs, p_service_schema($svName, $st, $url, $districtNames, $page_desc), $schemaFaq];
$AREAS = loc_areas_for_state($S['slug'], $svcSlug);

include __DIR__ . '/../header.php';
?>
<main>
<?= p_hero($crumbs, "$svName · $st", "$svName in $st", "Book $an $svName anywhere in $st through one 24/7 helpline.", loc_fill($sv['intro'], $st), $wa, $sv['image'], "$svName in $st — " . $sv['alt'], ["All $count districts", '24/7 booking', 'Fare confirmed on call']) ?>

<section class="lp-section alt">
  <div class="lp-wrap lp-split">
    <div>
      <span class="lp-eyebrow">When it is needed</span>
      <h2 class="lp-h2">When to book <?= $an ?> <?= e($svName) ?></h2>
      <ul class="lp-checks"><?php foreach ($sv['when'] as $w): ?><li><?= e($w) ?></li><?php endforeach; ?></ul>
    </div>
    <div class="lp-panel">
      <h3 class="lp-h3">Typically on board</h3>
      <ul class="lp-checks"><?php foreach ($sv['equip'] as $q): ?><li><?= e($q) ?></li><?php endforeach; ?></ul>
      <p class="lp-note">Equipment varies by vehicle and operator — we confirm it on the call.</p>
    </div>
  </div>
</section>

<section class="lp-section" id="districts">
  <div class="lp-wrap">
    <div class="lp-head">
      <span class="lp-eyebrow">Choose your district</span>
      <h2 class="lp-h2"><?= e($svName) ?> in every district of <?= e($st) ?></h2>
    </div>
    <?php foreach ($groups as $div => $ds): ?>
      <div class="lp-division">
        <?php if ($div !== ''): ?><h3><?= e($div) ?> division</h3><?php endif; ?>
        <ul class="lp-dlist">
          <?php foreach ($ds as $d): ?><li><a href="<?= e(url_district_service($S, $d, $svcSlug)) ?>"><?= e($svName) ?> in <?= e($d['name']) ?></a></li><?php endforeach; ?>
        </ul>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head"><span class="lp-eyebrow">Other services</span><h2 class="lp-h2">Other ambulance services in <?= e($st) ?></h2></div>
    <?= p_service_cards($others) ?>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head"><span class="lp-eyebrow">FAQs</span><h2 class="lp-h2"><?= e($svName) ?> in <?= e($st) ?> — FAQs</h2></div>
    <?= $faqHtml ?>
    <?= p_disclaimer() ?>
  </div>
</section>

<?= p_cta_band($st, $wa) ?>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
