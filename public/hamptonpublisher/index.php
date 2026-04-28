<?php
require 'inc/global.php';
require 'inc/form.php';

// ── Blog detail routing: /hamptonpublisher/blog/{slug} ────────────────────────
if (rtrim($path, '/') === 'blog' && ! file_exists(__DIR__ . '/' . $path . $page)) {
    $hp_blog_slug = preg_replace('/\.php$/i', '', $page);
    require_once __DIR__ . '/inc/hp-blog-detail-data.php';
    $page = 'blog-detail.php';
    $path = '';
}
// ─────────────────────────────────────────────────────────────────────────────

if (!in_array($page, $exampted_pages)) {
    if (!file_exists(__DIR__ . '/' . $path . $page)) {
        header('Location: ' . $base_url . '404');
        die();
    }
    require 'inc/head.php';
    require 'inc/header.php';
    require $path . $page;
    require 'inc/footer.php';
    require 'inc/chat.php';
} elseif (in_array($page, $exampt_allfiles)) {
    if (!file_exists(__DIR__ . '/' . $path . $page)) {
        header('Location: ' . $base_url . '404');
        die();
    }
    require $path . $page;
} else {
    if (!file_exists(__DIR__ . '/' . $path . $page)) {
        header('Location: ' . $base_url . '404');
    }
    require 'inc/head.php';
    require $path . $page;
    require 'inc/chat.php';
}
