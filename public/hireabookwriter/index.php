<?php
ob_start(); // buffer so header() redirects work even if warnings fire
require 'inc/global.php';
require 'inc/form.php';

// ── Blog detail routing: /hireabookwriter/blog/{slug} ─────────────────────────
if (rtrim($path, '/') === 'blog' && ! file_exists(__DIR__ . '/' . $path . $page)) {
    $hab_blog_slug = preg_replace('/\.php$/i', '', $page);
    require_once __DIR__ . '/inc/hab-blog-detail-data.php';
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
