<?php
/**
 * Orbit static site → Laravel API base (yahi file me change karo; .env use nahi hota).
 *
 * Example list URL: http://127.0.0.1:8000/api/v1/brands/orbit/services
 * → base neeche (trailing slash mat lagao).
 */
if (! defined('ORBIT_API_BASE_URL')) {
	define('ORBIT_API_BASE_URL', 'http://127.0.0.1:8000/api/v1');
}
