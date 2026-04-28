<?php
// Suppress warnings on production — set $reporting = true for debugging
$reporting = false;
if ($reporting) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    error_reporting(E_ERROR | E_PARSE); // only fatal errors
}

$test_email = null;

// ── $page is set later in this file — remove the premature strpos check ──────
// (was causing "Undefined variable $page" warning on line 27)

if (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://www.bing.com/")) {
    $lead_source = "Bing PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://bing.com/")) {
    $lead_source = "Bing PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://www.bing.com/aclk")) {
    $lead_source = "Bing PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://bing.com/aclk")) {
    $lead_source = "Bing PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://www.googleadservices.com/")) {
    $lead_source = "Google PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://googleadservices.com/")) {
    $lead_source = "Google PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://www.googleadservices.com/pagead/")) {
    $lead_source = "Google PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://googleadservices.com/pagead/")) {
    $lead_source = "Google PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://www.googleadservices.com/pagead/aclk")) {
    $lead_source = "Google PPC";
} elseif (!empty($_SERVER['HTTP_REFERER']) && false !== stripos($_SERVER['HTTP_REFERER'], "https://googleadservices.com/pagead/aclk")) {
    $lead_source = "Google PPC";
} else {
    $lead_source = "Organic";
}

// Force http on localhost to avoid XAMPP SSL issues
$_isLocalhost = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
    || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    || str_starts_with($_SERVER['HTTP_HOST'], '127.0.0.1:');
$_scheme = $_isLocalhost ? 'http' : ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http');

$base_url    = $_scheme . '://' . $_SERVER['HTTP_HOST'];
$base_url   .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])) . '/';
$current_url = $_scheme . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$post_url    = htmlspecialchars($_scheme . '://' . $_SERVER['HTTP_HOST'] . str_replace('index.php/', '', $_SERVER["PHP_SELF"]));

$path       = str_replace($base_url, '', $current_url);
$path_prams = explode('?', $path);
$path       = $path_prams[0];
$prams      = !empty($path_prams[1]) ? $path_prams[1] : '';

// Support ?page= routing (used when .htaccess rewrites to index.php?page=X)
if (!empty($_GET['page']) && (basename($path) === 'index.php' || $path === '' || $path === 'index.php')) {
    $path = $_GET['page'];
    $path_prams = explode('?', $path);
    $path = $path_prams[0];
}

$pages      = explode('/', $path);
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
$page       = (empty($page) || $page == 'index') ? 'home' : $page;
$activePage = $page;
$page      .= '.php';

$exampted_pages  = array('thankyou.php', '404.php', 'enroll-now.php', 'logo.php', 'website.php', 'brief/seo.php', 'smm.php', 'create_link.php', 'link_details.php', 'paynow.php', 'charge.php', 'fail.php', 'confirm_payment.php');
$exampt_allfiles = array('create_payment.php', 'confirm_payment.php');

$no         = "(925) 236 0195";
$add        = "1990 N California Blvd 8 Floor, Walnut Creek, CA, 94596";
$domainname = "hexapublishers.com";
$bname      = "Hexa Publishers";
$url        = "https://$domainname/";
$date       = date('Y-m-d H:i:s');
$logo       = $base_url . "assets/img/logo-blck.webp";
$logo_white = $base_url . "assets/img/logo-wyt.webp";

$error_prefex = "<p class='alert-danger'>";
$error_sufex  = "</p>";

$smtp['host']     = "mail.$domainname";
$smtp['username'] = "info@$domainname";
$smtp['password'] = '!Computer@123';
$smtp['secure']   = 'ssl';
$smtp['port']     = '465';

$from_email = "info@$domainname";
$from_name  = $bname;

// Use POST source safely — fallback to "Organic" if not a POST request
$source = !empty($_POST['source']) ? $_POST['source'] : 'Organic';

$cta_email = "info@hexapublishers.com";
$cc_email  = [
    'muhammadusamastaffshaw@gmail.com',
    'leads.staffshaw@gmail.com',
    'shahan.signups@digitalsynergyservices.com',
    'zohaibkhan.staffshaw@gmail.com',
    'elichris414@gmail.com',
    'eli.chris@digitalsynergyservices.com',
    'shahroondss@gmail.com',
    'huzaifa.staffshaw1@gmail.com',
];
$cta_subject      = "New $source Lead on $bname ";
$cta_template     = __DIR__ . "/email_templates/cta.php";
$cta2_template    = __DIR__ . "/email_templates/cta2.php";
$cta3_template    = __DIR__ . "/email_templates/cta3.php";
$cta4_template    = __DIR__ . "/email_templates/cta4.php";
$cta5_template    = __DIR__ . "/email_templates/cta5.php";
$contact_template = __DIR__ . "/email_templates/contact.php";

$brief_email = "brief@$domainname";

$webbrief_subject  = "New Web Brief Recived from $bname";
$webbrief_template = __DIR__ . "/email_templates/webbrief.php";

$logobrief_subject  = "New Web Brief Recived from $bname";
$logobrief_template = __DIR__ . "/email_templates/logobrief.php";

$seobrief_subject  = "New SEO Brief Recived from $bname";
$seobrief_template = __DIR__ . "/email_templates/seobrief.php";

$smmbrief_subject  = "New SMM Brief Recived from $bname";
$smmbrief_template = __DIR__ . "/email_templates/smmbrief.php";

$payment_email = "billing@$domainname";

$invoicelink_subject  = "New Payment Invoice Link Recived from $bname";
$invoicelink_template = __DIR__ . "/email_templates/invoice_link.php";

$payment_recived_subject  = "New Payment Has Recived from $bname";
$payment_recived_template = __DIR__ . "/email_templates/payment_recived.php";

require('custom-function.php');

// geoplugin — suppress errors on localhost (external API may be unavailable)
$geoplugin = null;
if (file_exists(__DIR__ . '/geoplugin.class.php')) {
    require_once('geoplugin.class.php');
    $geoplugin = new geoPlugin();
    @$geoplugin->locate(); // @ suppresses warnings when API is unreachable
}
