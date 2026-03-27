<?php
declare(strict_types=1);

require_once __DIR__ . '/orbit-api-config.php';

if (! defined('ORBIT_BRAND_SLUG')) {
	define('ORBIT_BRAND_SLUG', 'orbit');
}
if (! defined('ORBIT_API_TIMEOUT')) {
	define('ORBIT_API_TIMEOUT', 10);
}

/**
 * API base = `https://your-cms-domain.tld/api/v1` (remote Laravel) or same-host fallback for local dev.
 */
function orbitApiBaseUrl(): string
{
	if (defined('ORBIT_API_BASE_URL') && ORBIT_API_BASE_URL !== '') {
		return rtrim((string) ORBIT_API_BASE_URL, '/');
	}

	return orbitApiBaseUrlFromCurrentRequest();
}

function orbitApiBaseUrlFromCurrentRequest(): string
{
	$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
	$basePath = str_ends_with($scriptDir, '/orbit')
		? substr($scriptDir, 0, -strlen('/orbit'))
		: '';
	$scheme = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
	$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

	return rtrim($scheme . '://' . $host . $basePath, '/') . '/api/v1';
}

function orbitFetchJson(string $url): ?array
{
	$raw = '';
	$context = stream_context_create([
		'http' => [
			'method' => 'GET',
			'timeout' => ORBIT_API_TIMEOUT,
			'header' => "Accept: application/json\r\nUser-Agent: OrbitLocation/1.0\r\n",
			'ignore_errors' => true,
		],
		'ssl' => [
			'verify_peer' => true,
			'verify_peer_name' => true,
		],
	]);

	$streamResult = @file_get_contents($url, false, $context);
	if (is_string($streamResult) && $streamResult !== '') {
		$raw = $streamResult;
	} elseif (function_exists('curl_init')) {
		$ch = curl_init($url);
		if ($ch) {
			curl_setopt_array($ch, [
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_TIMEOUT => ORBIT_API_TIMEOUT,
				CURLOPT_HTTPHEADER => ['Accept: application/json'],
				CURLOPT_FOLLOWLOCATION => true,
			]);
			$curlResult = curl_exec($ch);
			curl_close($ch);
			if (is_string($curlResult) && $curlResult !== '') {
				$raw = $curlResult;
			}
		}
	}

	if ($raw === '') {
		return null;
	}

	$decoded = json_decode($raw, true);

	return is_array($decoded) ? $decoded : null;
}

/**
 * @return array{api_base:string,list_url:string,items:array<int,array<string,mixed>>}
 */
function orbitGetParentServices(string $brandSlug = ORBIT_BRAND_SLUG): array
{
	$apiBase = orbitApiBaseUrl();
	$listUrl = $apiBase . '/brands/' . rawurlencode($brandSlug) . '/services';
	$payload = orbitFetchJson($listUrl);

	$items = [];
	if (is_array($payload) && ! empty($payload['success']) && is_array($payload['data'] ?? null)) {
		$items = $payload['data'];
	}

	return [
		'api_base' => $apiBase,
		'list_url' => $listUrl,
		'items' => $items,
	];
}

function orbitSafeUpper(string $value): string
{
	return function_exists('mb_strtoupper') ? mb_strtoupper($value, 'UTF-8') : strtoupper($value);
}
