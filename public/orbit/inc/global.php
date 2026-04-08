<?php
// Load environment variables from .env file
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, " \"'");
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
}

// $cacheDir = __DIR__ . '/cache/';
// if (!is_dir($cacheDir)) {
//     mkdir($cacheDir, 0755, true);
// }

// $cachefile = $cacheDir . md5($_SERVER['REQUEST_URI']) . '.php';
// $cachetime = 3600; // 1 hour

// // If cached version exists and is still fresh → serve it
// if (file_exists($cachefile) && (time() - $cachetime < filemtime($cachefile))) {
//     readfile($cachefile);
//     exit;
// }

// Start buffering with minifier callback
ob_start("minifier");

function minifier($code) {
    $search = array(
        '/\>[^\S ]+/s',        // remove spaces after tags
        '/[^\S ]+\</s',        // remove spaces before tags
        '/(\s)+/s',            // collapse multiple spaces
        '/<!--(.|\s)*?-->/'    // remove HTML comments
    );
    $replace = array('>', '<', '\\1');
    return preg_replace($search, $replace, $code);
}



$reporting = false;
if ($reporting) { 
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
}
// Cache folder (make sure it's writable)
// $cacheDir = __DIR__ . '/cache/';
// if (!is_dir($cacheDir)) {
//     mkdir($cacheDir, 0755, true);
// }

// $cachefile = $cacheDir . md5($_SERVER['REQUEST_URI']) . '.php';
// $cachetime = 3600; // 1 hour

// // If a cached version exists and is still fresh → serve it
// if (file_exists($cachefile) && (time() - $cachetime < filemtime($cachefile))) {
//     readfile($cachefile);
//     exit;
// }

// // Start output buffering
// ob_start();

$test_email = null;

// ob_start("minifier");
// function minifier($code)
// {
// 	$search = array(
// 		'/\>[^\S ]+/s',
// 		'/[^\S ]+\</s',
// 		'/(\s)+/s',
// 		'/<!--(.|\s)*?-->/'
// 	);
// 	$replace = array('>', '<', '\\1');
// 	$code = preg_replace($search, $replace, $code);
// 	return $code;
// }

session_start();

function detect_source() {

    // Default
    $source = "Direct";
    $medium = "";
    $campaign = "";

    // Google Ads
    if (isset($_GET['gclid'])) {
        $source = "Google";
        $medium = "PPC";
    }

    // Microsoft Ads
    elseif (isset($_GET['msclkid'])) {
        $source = "Bing";
        $medium = "PPC";
    }

    // UTM parameters
    elseif (isset($_GET['utm_source'])) {
        $source = $_GET['utm_source'] ?? "";
        $medium = $_GET['utm_medium'] ?? "";
        $campaign = $_GET['utm_campaign'] ?? "";
    }

    // Referrer fallback
    elseif (!empty($_SERVER['HTTP_REFERER'])) {

        $ref = strtolower($_SERVER['HTTP_REFERER']);

        if (strpos($ref, 'google.') !== false) {
            $source = "Google";
            $medium = "Organic";
        }
        elseif (strpos($ref, 'bing.') !== false) {
            $source = "Bing";
            $medium = "Organic";
        }
        elseif (strpos($ref, 'facebook.') !== false || strpos($ref, 'fb.') !== false) {
            $source = "Facebook";
            $medium = "Social";
        }
        else {
            $source = "Referral";
        }
    }

    return [
        'source' => $source,
        'medium' => $medium,
        'campaign' => $campaign
    ];
}

// Detect current visit
$current = detect_source();

// FIRST TOUCH
if (!isset($_SESSION['first_touch'])) {
    $_SESSION['first_touch'] = $current;
}

// LAST TOUCH
$_SESSION['last_touch'] = $current;

// Cookies (30 days)
setcookie('first_touch', json_encode($_SESSION['first_touch']), time()+2592000, "/");
setcookie('last_touch', json_encode($_SESSION['last_touch']), time()+2592000, "/");

$current_url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$post_url = htmlspecialchars((isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . str_replace('index.php/', '', $_SERVER["PHP_SELF"]));

// REQUEST_URI-based routing: .htaccess sends /orbit/texas/houston → index.php/texas/houston, which breaks
// dirname(SCRIPT_NAME) and makes $base_url not match — nested pages then get wrong $path/$page and 404.
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
$requestPath = str_replace('\\', '/', $requestPath);
$orbitPos = stripos($requestPath, '/orbit/');
if ($orbitPos !== false) {
	$base_url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
	$base_url .= substr($requestPath, 0, $orbitPos + strlen('/orbit/'));

	$relative = substr($requestPath, $orbitPos + strlen('/orbit/'));
	if (stripos($relative, 'index.php/') === 0) {
		$relative = substr($relative, strlen('index.php/'));
	} elseif (strcasecmp($relative, 'index.php') === 0) {
		$relative = '';
	}
	$relative = trim($relative, '/');
	if (preg_match('#\.php$#i', $relative)) {
		$relative = preg_replace('#\.php$#i', '', $relative);
	}
	if ($relative === '' || strcasecmp($relative, 'index') === 0) {
		$page = 'home';
		$path = '';
	} else {
		$parts = array_values(array_filter(explode('/', $relative), static fn ($s) => $s !== ''));
		$page = array_pop($parts);
		$path = count($parts) ? implode('/', $parts) . '/' : '';
	}
	if (strpos($page, '.php') !== false) {
		$page = str_replace('.php', '', $page);
	}
	$page = (empty($page) || $page == 'index') ? 'home' : $page;
	$page .= '.php';
} else {
	$base_url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
	$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
	$base_url .= preg_replace('@/+$@', '', $script_dir) . '/';
	$path = str_replace($base_url, '', $current_url);
	$path_prams = explode('?', $path);
	$path = $path_prams[0];
	$pages = explode('/', $path);
	if (!empty($pages) && count($pages) > 0) {
		$page = array_pop($pages);
		$path = implode('/', $pages);
		$path = !empty($path) ? $path . '/' : '';
	} else {
		$page = $path;
		$path = '';
	}
	if (strpos($page, '.php') !== false) {
		$page = str_replace('.php', '', $page);
	}
	$page = (empty($page) || $page == 'index') ? 'home' : $page;
	$page .= '.php';
}
$path_prams = explode('?', str_replace($base_url, '', $current_url));
$prams = !empty($path_prams[1]) ? $path_prams[1] : '';
$exampted_pages = array('thankyou.php', '404.php', 'enroll-now.php', 'logo.php', 'website.php', 'brief/seo.php', 'smm.php', 'create_link.php', 'link_details.php', 'paynow.php', 'charge.php', 'fail.php', 'confirm_payment.php', 'publishing-experts/index.php');
$exampt_allfiles = array('create_payment.php', 'confirm_payment.php');
$no = "+1 (754) 225-2490";
$add = '800 Fairway Dr Ste 120, Deerfield Beach, FL 33441';
$url = "https://orbitbookpublishers.com/";
$bname = "Orbit Book Publishers";
$date = date('d-m-y_h:i:s');
$logo = 'https://orbitbookpublishers.com/assets/img/logo.png';

// $title =  'Welcome To US Logo Designs';
// $keywords =  '';
// $description =  '';
$domainname = "orbitbookpublishers.com";

$error_prefex = "<p class='alert-danger'>";
$error_sufex = "</p>";

$smtp['host'] = 'mail.orbitbookpublishers.com';
$smtp['username'] = 'info@orbitbookpublishers.com';
//$smtp['password'] = 'qrkx gmkd nvxg htpv';
$smtp['password'] = getenv('SMTP_PASSWORD') ?: '';
$smtp['port'] = '465';

$from_email = "info@orbitbookpublishers.com";
$from_name = $bname;

$source= $_SESSION['first_touch']['source'];
// $lead_source = "Organic";
// $source = "organic";
$cta_email = "info@orbitbookpublishers.com";
$cc_email = [
    'muhammadusamastaffshaw@gmail.com',
    'huzaifa.staffshaw1@gmail.com'
];
$cta_subject = "New $source Lead on $bname ";
$cta_template = __DIR__ . "/email_templates/cta.php";
$cta2_template = __DIR__ . "/email_templates/cta2.php";
$cta3_template = __DIR__ . "/email_templates/cta3.php";
$cta4_template = __DIR__ . "/email_templates/cta4.php";
$cta5_template = __DIR__ . "/email_templates/cta5.php";


$brief_email = "brief@orbitbookpublishers.com/";

$webbrief_subject = "New Web Brief Recived from $bname";
$webbrief_template = __DIR__ . "/email_templates/webbrief.php";

$logobrief_subject = "New Web Brief Recived from $bname";
$logobrief_template = __DIR__ . "/email_templates/logobrief.php";

$seobrief_subject = "New SEO Brief Recived from $bname";
$seobrief_template = __DIR__ . "/email_templates/seobrief.php";

$smmbrief_subject = "New SMM Brief Recived from $bname";
$smmbrief_template = __DIR__ . "/email_templates/smmbrief.php";

$payment_email = "billing@orbitbookpublishers.com/";

$invoicelink_subject = "New Payment Invoice Link Recived from $bname";
$invoicelink_template = __DIR__ . "/email_templates/invoice_link.php";

$payment_recived_subject = "New Payment Has Recived from $bname";
$payment_recived_template = __DIR__ . "/email_templates/payment_recived.php";

$activePage = basename($_SERVER['PHP_SELF'], ".php");

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$ip = getUserIP();
$ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
$ipData = json_decode($ipInfo, true);


$orbit_service_payload = null;
