<?php
/** Blog post layout, bottom half. See post-top.php for usage. */
$body = ob_get_clean();

// Give every <h2> an id and build the table of contents.
$toc = [];
$used = [];
$body = preg_replace_callback('#<h2([^>]*)>(.*?)</h2>#s', function ($m) use (&$toc, &$used) {
  $attrs = $m[1];
  if (preg_match('/\bid="([^"]+)"/', $attrs, $idm)) {
    $id = $idm[1];
  } else {
    $id = blog_slugify($m[2]) ?: 'section';
    $base = $id; $n = 2;
    while (isset($used[$id])) { $id = $base . '-' . $n++; }
    $attrs .= ' id="' . $id . '"';
  }
  $used[$id] = true;
  $toc[] = [$id, trim(html_entity_decode(strip_tags($m[2]), ENT_QUOTES, 'UTF-8'))];
  return '<h2' . $attrs . '>' . $m[2] . '</h2>';
}, $body);

$shareText = $post['title'] . ' ' . $canonical;
$related = array_values(array_filter(array_map('load_post', $post['related'] ?? [])));
$services = $post['services'] ?? ['emergency'];
?>
  <div class="bp-wrap bp-layout">
    <article class="bp-article">

      <?php if (!empty($post['steps'])): ?>
      <section class="bp-steps" aria-labelledby="quick-steps">
        <p class="bp-steps__eyebrow">Until the ambulance arrives</p>
        <h2 id="quick-steps" class="bp-steps__title"><?= blog_e($post['steps_title'] ?? 'What to do right now') ?></h2>
        <ol class="bp-steps__list">
          <?php foreach ($post['steps'] as $s): ?><li><?= blog_e($s) ?></li><?php endforeach; ?>
        </ol>
        <?php if (!empty($post['donts'])): ?>
        <div class="bp-steps__donts">
          <p class="bp-steps__donts-title"><?= blog_icon('x', 16) ?> Do not</p>
          <ul><?php foreach ($post['donts'] as $d): ?><li><?= blog_e($d) ?></li><?php endforeach; ?></ul>
        </div>
        <?php endif; ?>
      </section>
      <?php endif; ?>

      <?php if ($toc): ?>
      <details class="bp-toc bp-toc--mobile">
        <summary><?= blog_icon('list', 18) ?> In this guide</summary>
        <ol><?php foreach ($toc as [$id, $label]): ?><li><a href="#<?= blog_e($id) ?>"><?= blog_e($label) ?></a></li><?php endforeach; ?></ol>
      </details>
      <?php endif; ?>

      <div class="bp-body">
        <?= $body ?>
      </div>

      <section class="bp-share" aria-labelledby="share-card">
        <div class="bp-share__text">
          <p class="bp-steps__eyebrow">Save it. Share it.</p>
          <h2 id="share-card">Keep this step-by-step card on your phone</h2>
          <p>Emergencies rarely give you time to search. Save this card or share it in your family and society WhatsApp groups. One person who knows what to do can save a life.</p>
          <div class="bp-share__actions">
            <a class="bp-btn bp-btn--green" href="https://wa.me/?text=<?= rawurlencode($shareText) ?>" target="_blank" rel="noopener"><?= blog_icon('wa', 18) ?> Share on WhatsApp</a>
            <a class="bp-btn bp-btn--ghost" href="<?= post_image($slug, 'steps', 'jpg') ?>" download><?= blog_icon('download', 18) ?> Download card</a>
          </div>
        </div>
        <figure class="bp-share__img">
          <img src="<?= post_image($slug, 'steps') ?>" width="1080" height="1350" loading="lazy" decoding="async" alt="<?= blog_e('Step-by-step infographic: ' . $post['title']) ?>">
        </figure>
      </section>

      <?php if (!empty($post['faqs'])): ?>
      <section class="bp-faq" aria-labelledby="faqs">
        <h2 id="faqs">Frequently asked questions</h2>
        <?php foreach ($post['faqs'] as $i => $f): ?>
        <details<?= $i === 0 ? ' open' : '' ?>>
          <summary><?= blog_e($f['q']) ?></summary>
          <p><?= blog_e($f['a']) ?></p>
        </details>
        <?php endforeach; ?>
      </section>
      <?php endif; ?>

      <section class="bp-services" aria-labelledby="services-for-this">
        <h2 id="services-for-this">Ambulance services for this emergency</h2>
        <div class="bp-services__grid">
          <?php foreach ($services as $key): if (!isset(BLOG_SERVICES[$key])) continue; [$name, $desc] = BLOG_SERVICES[$key]; ?>
          <a class="bp-service" href="<?= blog_e(link_to($key)) ?>">
            <span class="bp-service__icon"><?= blog_icon('ambulance', 22) ?></span>
            <span class="bp-service__name"><?= blog_e($name) ?></span>
            <span class="bp-service__desc"><?= blog_e($desc) ?></span>
            <span class="bp-service__more">Learn more <?= blog_icon('arrow', 15) ?></span>
          </a>
          <?php endforeach; ?>
        </div>
        <p class="bp-locations"><?= blog_icon('pin', 16) ?> <span>24/7 coverage:</span>
          <?php foreach (BLOG_LOCATIONS as $k => $city): ?><a href="<?= link_to($k) ?>">Ambulance service in <?= blog_e($city) ?></a><?php endforeach; ?>
        </p>
      </section>

      <aside class="bp-disclaimer">
        <?= blog_icon('shield', 20) ?>
        <p><strong>Medical disclaimer:</strong> This guide gives general first-aid information for bystanders and is not a substitute for professional medical advice, diagnosis or treatment. Always call emergency services in a life-threatening situation and follow the instructions of the dispatcher, ambulance crew and doctors. Guidance is based on widely accepted first-aid practice (such as the Indian Red Cross Society, the American Heart Association and the WHO) at the time of writing.</p>
      </aside>

      <?php if ($related): ?>
      <section class="bp-related" aria-labelledby="related-guides">
        <h2 id="related-guides">Related first-aid guides</h2>
        <div class="bp-cards">
          <?php foreach ($related as $r): $rc = BLOG_CATEGORIES[$r['category']] ?? reset(BLOG_CATEGORIES); ?>
          <a class="bp-card" href="<?= post_url($r['slug']) ?>" style="--cat:<?= $rc['color'] ?>">
            <img src="<?= post_image($r['slug']) ?>" width="1200" height="630" loading="lazy" decoding="async" alt="<?= blog_e($r['image_alt'] ?? $r['title']) ?>">
            <span class="bp-card__body">
              <span class="bp-card__cat"><?= blog_e($rc['name']) ?></span>
              <span class="bp-card__title"><?= blog_e($r['title']) ?></span>
            </span>
          </a>
          <?php endforeach; ?>
        </div>
      </section>
      <?php endif; ?>
    </article>

    <aside class="bp-sidebar">
      <div class="bp-sticky">
        <div class="bp-callcard">
          <p class="bp-callcard__eyebrow"><span class="bp-dot"></span> Ambulances available 24/7</p>
          <p class="bp-callcard__title">Emergency? Don't wait.</p>
          <p class="bp-callcard__desc">One call dispatches the right ambulance anywhere in Delhi, Gurgaon, Noida, Ghaziabad and Faridabad.</p>
          <a class="bp-btn bp-btn--red bp-btn--block" href="<?= BLOG_TEL ?>"><?= blog_icon('phone', 18) ?> <?= blog_e(BLOG_PHONE) ?></a>
          <a class="bp-btn bp-btn--ghost bp-btn--block" href="<?= BLOG_WA ?>" target="_blank" rel="noopener"><?= blog_icon('wa', 18) ?> WhatsApp us</a>
          <a class="bp-callcard__link" href="<?= link_to('book') ?>">Book an ambulance online <?= blog_icon('arrow', 14) ?></a>
        </div>
        <?php if ($toc): ?>
        <nav class="bp-toc" aria-label="In this guide">
          <p class="bp-toc__title">In this guide</p>
          <ol><?php foreach ($toc as [$id, $label]): ?><li><a href="#<?= blog_e($id) ?>"><?= blog_e($label) ?></a></li><?php endforeach; ?></ol>
        </nav>
        <?php endif; ?>
      </div>
    </aside>
  </div>
</main>
<?php include dirname(blog_dir()) . '/footer.php'; ?>
