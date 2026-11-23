<?php
// Prints every blog post's metadata as JSON (used by generate.mjs).
require __DIR__ . '/../../blog/_inc/blog.php';
$out = [];
foreach (all_posts() as $slug => $p) {
  $p['category_name'] = BLOG_CATEGORIES[$p['category']]['name'] ?? '';
  $p['color'] = BLOG_CATEGORIES[$p['category']]['color'] ?? '#DC2626';
  $out[] = $p;
}
echo json_encode(['phone' => BLOG_PHONE, 'brand' => BRAND, 'posts' => $out], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
