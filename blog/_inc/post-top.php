<?php
/**
 * Blog post layout, top half. Each post is one file, blog/<slug>.php:
 *
 *   <?php
 *   $post = [ 'title' => "...", ... ];
 *   if (!empty($BLOG_META_ONLY)) return $post;
 *   require __DIR__ . '/_inc/post-top.php';
 *   ?>
 *   ...article body HTML (h2, h3, p, ul, callouts)...
 *   <?php require __DIR__ . '/_inc/post-bottom.php'; ?>
 */
require_once __DIR__ . '/blog.php';

// The slug is the file name of the post that included this template.
$slug = basename(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0]['file'] ?? get_included_files()[0], '.php');
$post['slug'] = $slug;

$cat       = BLOG_CATEGORIES[$post['category']] ?? reset(BLOG_CATEGORIES);
$site      = blog_site_url();
$canonical = $site . post_url($slug);
$ogImage   = $site . post_image($slug, '', 'jpg');
$published = $post['date'] ?? date('Y-m-d');
$updated   = $post['updated'] ?? $published;

$words     = post_word_count($post);
$readTime  = max(3, (int)round($words / 200));

$schema = [
  [
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => mb_substr($post['title'], 0, 110),
    'description' => $post['description'],
    'image' => [$ogImage, $site . post_image($slug, 'steps', 'jpg')],
    'datePublished' => $published,
    'dateModified' => $updated,
    'inLanguage' => 'en-IN',
    'articleSection' => $cat['name'],
    'wordCount' => $words,
    'author' => ['@type' => 'Organization', 'name' => BLOG_AUTHOR, 'url' => $site . '/'],
    'publisher' => ['@type' => 'Organization', 'name' => 'NCR Ambulance', 'url' => $site . '/'],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $canonical],
    'about' => ['@type' => 'Thing', 'name' => $post['topic'] ?? $post['title']],
  ],
  [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $site . '/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'First Aid Blog', 'item' => $site . '/blog/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => $canonical],
    ],
  ],
];
if (!empty($post['faqs'])) {
  $schema[] = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($f) {
      return ['@type' => 'Question', 'name' => $f['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']]];
    }, $post['faqs']),
  ];
}

// Variables read by /header.php ($static_page = server-rendered, no design-component runtime)
$static_page    = true;
$page_title     = $post['seo_title'] ?? $post['title'];
$page_desc      = $post['description'];
$page_canonical = post_url($slug);
$page_og_image  = post_image($slug, '', 'jpg');
$page_robots    = 'index, follow, max-image-preview:large';
$page_schema    = $schema;

include dirname(blog_dir()) . '/header.php';
?>
<link rel="stylesheet" href="/assets/css/blog.css">
<main class="bp" style="--cat:<?= $cat['color'] ?>;--cat-tint:<?= $cat['tint'] ?>">
  <section class="bp-hero">
    <div class="bp-wrap bp-hero__grid">
      <div class="bp-hero__text">
        <nav class="bp-crumbs" aria-label="Breadcrumb">
          <a href="/">Home</a><span aria-hidden="true">/</span><a href="/blog/">First Aid Blog</a><span aria-hidden="true">/</span><a href="/blog/#<?= blog_e($post['category']) ?>"><?= blog_e($cat['name']) ?></a>
        </nav>
        <span class="bp-pill"><?= blog_e($cat['name']) ?></span>
        <h1 class="bp-title"><?= blog_e($post['title']) ?></h1>
        <p class="bp-dek"><?= blog_e($post['excerpt']) ?></p>
        <p class="bp-meta">
          <span>By <?= blog_e(BLOG_AUTHOR) ?></span>
          <span>Updated <time datetime="<?= blog_e($updated) ?>"><?= blog_e(blog_date($updated)) ?></time></span>
          <span><?= blog_icon('clock', 15) ?> <?= $readTime ?> min read</span>
        </p>
      </div>
      <figure class="bp-hero__img">
        <img src="<?= post_image($slug) ?>" width="1200" height="630" alt="<?= blog_e($post['image_alt'] ?? $post['title']) ?>" fetchpriority="high">
      </figure>
    </div>
    <div class="bp-wrap">
      <div class="bp-alert" role="note">
        <span class="bp-alert__icon"><?= blog_icon('alert', 22) ?></span>
        <p><strong>Is this happening right now?</strong> Call for help first: dial <a href="tel:112">112</a> or our 24/7 ambulance helpline <a href="<?= BLOG_TEL ?>"><?= blog_e(BLOG_PHONE) ?></a>. Put the phone on speaker and follow the steps below while you wait.</p>
        <a class="bp-btn bp-btn--red bp-alert__btn" href="<?= BLOG_TEL ?>"><?= blog_icon('phone', 18) ?> Call Ambulance</a>
      </div>
    </div>
  </section>
<?php ob_start(); ?>
