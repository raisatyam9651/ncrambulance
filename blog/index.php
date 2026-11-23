<?php
require_once __DIR__ . '/_inc/blog.php';

$posts = all_posts();
$site  = blog_site_url();
$byCat = [];
foreach ($posts as $p) { $byCat[$p['category']][] = $p; }
$featured = array_values(array_filter($posts, function ($p) { return !empty($p['featured']); }));

// Variables read by /header.php ($static_page = server-rendered, no design-component runtime)
$static_page    = true;
$page_title     = 'First Aid Guides: What to Do Until the Ambulance Arrives | ' . BRAND;
$page_desc      = 'Simple, step-by-step first-aid guides for heart attack, CPR, stroke, road accidents, burns, choking and more. Learn what to do until the ambulance arrives in Delhi NCR.';
$page_canonical = '/blog/';
$page_og_image  = '/assets/blog/blog-cover.jpg';
$page_robots    = 'index, follow, max-image-preview:large';
$page_schema    = [
    [
      '@context' => 'https://schema.org',
      '@type' => 'CollectionPage',
      'name' => 'First Aid Guides: What to Do Until the Ambulance Arrives',
      'url' => $site . '/blog/',
      'inLanguage' => 'en-IN',
      'mainEntity' => [
        '@type' => 'ItemList',
        'itemListElement' => array_values(array_map(function ($p, $i) use ($site) {
          return ['@type' => 'ListItem', 'position' => $i + 1, 'url' => $site . post_url($p['slug']), 'name' => $p['title']];
        }, array_values($posts), array_keys(array_values($posts)))),
      ],
    ],
    [
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'First Aid Blog', 'item' => $site . '/blog/'],
      ],
    ],
];

function bi_card($p) {
  $c = BLOG_CATEGORIES[$p['category']] ?? reset(BLOG_CATEGORIES);
  ?>
  <a class="bp-card" href="<?= post_url($p['slug']) ?>" style="--cat:<?= $c['color'] ?>">
    <img src="<?= post_image($p['slug']) ?>" width="1200" height="630" loading="lazy" decoding="async" alt="<?= blog_e($p['image_alt'] ?? $p['title']) ?>">
    <span class="bp-card__body">
      <span class="bp-card__cat"><?= blog_e($c['name']) ?></span>
      <span class="bp-card__title"><?= blog_e($p['title']) ?></span>
      <span class="bp-card__excerpt"><?= blog_e($p['excerpt']) ?></span>
      <span class="bp-card__meta"><?= blog_icon('clock', 14) ?> <?= post_read_time($p) ?> min read</span>
    </span>
  </a>
  <?php
}

include __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="/assets/css/blog.css">
<main class="bp">
  <section class="bi-hero">
    <div class="bp-wrap">
      <nav class="bp-crumbs" aria-label="Breadcrumb"><a href="/">Home</a><span aria-hidden="true">/</span><span>First Aid Blog</span></nav>
      <span class="bp-pill" style="--cat:#7C3AED;--cat-tint:#F5F3FF">First aid library · <?= count($posts) ?> guides</span>
      <h1>What to Do Until the Ambulance Arrives</h1>
      <p class="bi-lead">The first few minutes of an emergency often decide the outcome. These simple, step-by-step guides show ordinary people what to do for a heart attack, stroke, road accident, burns, choking and more, so you can keep someone safe until our <a href="<?= link_to('home') ?>">24/7 ambulance service in Delhi NCR</a> reaches you.</p>
      <div class="bi-chips">
        <?php foreach (BLOG_CATEGORIES as $key => $c): if (empty($byCat[$key])) continue; ?>
        <a class="bi-chip" href="#<?= $key ?>" style="--cat:<?= $c['color'] ?>"><?= blog_e($c['name']) ?> <span><?= count($byCat[$key]) ?></span></a>
        <?php endforeach; ?>
      </div>
      <div class="bp-alert" role="note">
        <span class="bp-alert__icon"><?= blog_icon('alert', 22) ?></span>
        <p><strong>Emergency happening now?</strong> Don't read first. Call <a href="tel:112">112</a> or our 24/7 helpline <a href="<?= BLOG_TEL ?>"><?= blog_e(BLOG_PHONE) ?></a>, then open the guide you need. The dispatcher can talk you through it.</p>
        <a class="bp-btn bp-btn--red bp-alert__btn" href="<?= BLOG_TEL ?>"><?= blog_icon('phone', 18) ?> Call Ambulance</a>
      </div>
    </div>
  </section>

  <div class="bp-wrap">
    <?php if ($featured): ?>
    <section class="bi-section" id="start-here" style="--cat:#DC2626">
      <div class="bi-section__head">
        <h2>Start here: guides everyone should know</h2>
        <p>Learn these four and you can help in most life-threatening emergencies.</p>
      </div>
      <div class="bi-featured"><?php foreach ($featured as $p) bi_card($p); ?></div>
    </section>
    <?php endif; ?>

    <?php foreach (BLOG_CATEGORIES as $key => $c): if (empty($byCat[$key])) continue; ?>
    <section class="bi-section" id="<?= $key ?>" style="--cat:<?= $c['color'] ?>">
      <div class="bi-section__head">
        <h2><?= blog_e($c['name']) ?></h2>
        <p><?= blog_e($c['intro']) ?></p>
      </div>
      <div class="bp-cards"><?php foreach ($byCat[$key] as $p) bi_card($p); ?></div>
    </section>
    <?php endforeach; ?>

    <section class="bi-bottom">
      <div class="bp-cta" style="margin:0">
        <div class="bp-cta__text">
          <p class="bp-cta__eyebrow">One helpline for all of Delhi NCR</p>
          <p class="bp-cta__title">The right ambulance for every emergency</p>
          <p class="bp-cta__desc">From a <a href="<?= link_to('bls') ?>">BLS ambulance</a> for stable patients to a fully equipped <a href="<?= link_to('icu') ?>">ICU ambulance</a>, <a href="<?= link_to('cardiac') ?>">cardiac ambulance</a> or <a href="<?= link_to('neonatal') ?>">neonatal ambulance</a>, tell us the patient's condition and we dispatch the right vehicle. You can also <a href="<?= link_to('book') ?>">book an ambulance online</a>.</p>
        </div>
        <div class="bp-cta__actions">
          <a class="bp-btn bp-btn--red" href="<?= BLOG_TEL ?>"><?= blog_icon('phone', 18) ?> Call <?= blog_e(BLOG_PHONE) ?></a>
          <a class="bp-btn bp-btn--ghost" href="<?= BLOG_WA ?>" target="_blank" rel="noopener"><?= blog_icon('wa', 18) ?> WhatsApp</a>
        </div>
      </div>
      <p class="bp-locations"><?= blog_icon('pin', 16) ?> <span>24/7 coverage:</span>
        <?php foreach (BLOG_LOCATIONS as $k => $city): ?><a href="<?= link_to($k) ?>">Ambulance service in <?= blog_e($city) ?></a><?php endforeach; ?>
      </p>
    </section>
  </div>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
