<?php

require 'inc/global.php';
require 'inc/form.php';

$orbit_service_payload = null;

$orbitIndexFile = static function (string $pathPrefix, string $pageFile): string {
	$pathPrefix = str_replace('\\', '/', $pathPrefix);
	$pageFile = str_replace('\\', '/', $pageFile);
	$pageFile = ltrim($pageFile, '/');
	if ($pathPrefix === '') {
		return __DIR__ . '/' . $pageFile;
	}

	return __DIR__ . '/' . rtrim($pathPrefix, '/') . '/' . $pageFile;
};

if (! in_array($page, $exampted_pages)) {

	// ── Blog detail routing: /orbit/blog/{slug} ───────────────────────────────
	// global.php sets $path='blog/' and $page='{slug}.php' for these URLs.
	// Since individual blog files don't exist on disk, we catch this pattern here.
	if (rtrim($path, '/') === 'blog' && ! file_exists($orbitIndexFile($path, $page))) {
		// Save the slug (strip .php suffix that global.php appended)
		$orbit_blog_slug = preg_replace('/\.php$/i', '', $page);
		$page = 'blog-detail.php';
		$path = '';
	}
	// ─────────────────────────────────────────────────────────────────────────

	if (! file_exists($orbitIndexFile($path, $page))) {
		require_once __DIR__ . '/inc/orbit-api-service.php';
		$dynPath = orbit_request_service_path_from_uri();
		if ($dynPath !== null) {
			$orbit_service_payload = orbitFetchServiceShow(ORBIT_BRAND_SLUG, $dynPath);
			if (is_array($orbit_service_payload) && ! empty($orbit_service_payload['service'])) {
				$page = 'service-dynamic.php';
				$path = '';
				$svcContent = $orbit_service_payload['service']['content'] ?? null;
				if (is_array($svcContent)) {
					$svcAddress = trim((string) ($svcContent['contact_info']['address'] ?? ''));
					if ($svcAddress !== '') {
						$add = $svcAddress;
					}
				}
			}
		}
	}

	if (! file_exists($orbitIndexFile($path, $page))) {
		header('Location: ' . $base_url . '404');
		die();
	}

	// For blog-detail: fetch data first so $title/$discription are set before head.php
	if ($page === 'blog-detail.php') {
		require_once __DIR__ . '/inc/orbit-api-service.php';
		require __DIR__ . '/inc/blog-detail-data.php';
	}

	require __DIR__ . '/inc/head.php';
	require __DIR__ . '/inc/header.php';
	require $orbitIndexFile($path, $page);
	require __DIR__ . '/inc/footer.php';
	require __DIR__ . '/inc/chat.php';
} elseif (in_array($page, $exampt_allfiles)) {
	if (! file_exists($orbitIndexFile($path, $page))) {
		header('Location: ' . $base_url . '404');
		die();
	}
	require $orbitIndexFile($path, $page);
} else {
	if (! file_exists($orbitIndexFile($path, $page))) {
		header('Location: ' . $base_url . '404');
	}
	require __DIR__ . '/inc/head.php';
	require $orbitIndexFile($path, $page);
	require __DIR__ . '/inc/chat.php';
}
