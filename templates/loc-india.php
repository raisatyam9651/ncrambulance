<?php
/** India index: /ambulance-service/ */
$live = loc_published_states();
$wa   = 'Hi, I need an ambulance';
$url  = url_india();

$page_title   = 'Ambulance Service Locations | 24/7 Ambulance Booking Across India';
$page_desc    = '24/7 ambulance booking in Delhi NCR and ' . implode(', ', array_map(fn($s) => $s['name'], $live)) . ' — emergency, ICU, ventilator, cardiac and air ambulances. Call ' . PHONE_DISPLAY . '.';
$page_tagline = '24/7 Ambulance · Locations';

$crumbs = p_crumbs([['Home', '/'], ['Locations', $url]], $schemaCrumbs);
$page_schema = [$schemaCrumbs];

$ncr = [
    ['/ambulance-service/delhi/', 'Delhi'], ['/ambulance-service/delhi/dwarka/', 'Dwarka, Delhi'], ['/ambulance-service/noida/', 'Noida'],
    ['/ambulance-service/greater-noida/', 'Greater Noida'], ['/ambulance-service/ghaziabad/', 'Ghaziabad'],
    ['/ambulance-service/gurgaon/', 'Gurgaon'], ['/ambulance-service/faridabad/', 'Faridabad'],
];

include __DIR__ . '/../header.php';
?>
<main>
<?= p_hero($crumbs, 'Helpline open 24×7', 'Ambulance Service Locations', 'One 24/7 helpline for emergency, ICU, ventilator, cardiac and air ambulances.', 'Choose your state or city below for local coverage details — or call us directly from anywhere and our dispatch desk will arrange the nearest suitable ambulance.', $wa, '/assets/img/emergency-ambulance.webp', 'Ambulance on a city road', ['24/7 helpline', 'Fare confirmed on call', 'Inter-city transfers']) ?>

<section class="lp-section alt">
  <div class="lp-wrap">
    <div class="lp-head"><span class="lp-eyebrow">States</span><h2 class="lp-h2">Ambulance service by state</h2></div>
    <div class="lp-grid">
      <?php foreach ($live as $s): ?>
        <a class="lp-card" href="<?= e(url_state($s)) ?>">
          <div class="lp-card-img"><img src="/assets/img/emergency-ambulance.webp" alt="Ambulance service in <?= e($s['name']) ?>" loading="lazy"></div>
          <div class="lp-card-body"><h3 class="lp-h3">Ambulance Service in <?= e($s['name']) ?></h3><p>All <?= count($s['districts']) ?> districts · emergency, ICU, ALS, BLS, cardiac, ventilator & air ambulance.</p><span class="lp-more">View districts<?= ICON_ARROW ?></span></div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="lp-section">
  <div class="lp-wrap">
    <div class="lp-head"><span class="lp-eyebrow">Delhi NCR</span><h2 class="lp-h2">Ambulance service in Delhi NCR</h2></div>
    <ul class="lp-links"><?php foreach ($ncr as [$h, $t]): ?><li><a href="<?= e($h) ?>">Ambulance Service in <?= e($t) ?></a></li><?php endforeach; ?></ul>
    <p class="lp-note">We are adding more states. If your city is not listed, call <?= e(PHONE_DISPLAY) ?> — the helpline can still help you find an ambulance.</p>
  </div>
</section>

<?= p_cta_band('your city', $wa) ?>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
