<?php
/**
 * Orbit static site → Laravel API base (yahi file me change karo; .env use nahi hota).
 *
 * Empty string = auto: same host/path as the Orbit page (e.g. Laragon
 * http://localhost/urban_cms/public/api/v1) — zaroori jab aap Apache se open karte ho.
 * Remote CMS ke liye poora URL set karo (trailing slash mat lagao).
 */
if (! defined('ORBIT_API_BASE_URL')) {
	define('ORBIT_API_BASE_URL', 'https://brand.checkyourproject.co/api/v1');
}
