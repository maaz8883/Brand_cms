<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="p:domain_verify" content="bc955305a2d7b16ce43b37fc0decf7ec"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<?php
	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri_segments = explode('/', $uri_path);
	if ($uri_segments[1] == "index.php" || $uri_segments[1] == "") {
		$class = "home";
		$title = "Orbit book publishers | Providing Book Services to Authors";
		$discription = "Orbit Book Publishers provides book writing, book publishing, book marketing services to all authors, whether you’re a new author or an experienced one. Call Us ";
		$robots = "NOINDEX , NOFOLLOW";
		
	}elseif ($uri_segments[1] == "privacy-policy") {
		$class = "privacy-policy";
		$title = "Privacy Policy | Orbit Book Publishers ";
		$discription = "Read the privacy policy of Orbit Book Publishers and read about how we protect your data and the precautions we take to process it.";
		$robots = "NOINDEX , NOFOLLOW";
		$script = "";
	} elseif ($uri_segments[1] == "terms-conditions") {
		$class = "terms-conditions";
		$title = "Terms & Conditions of Orbit Book Publishers";
		$discription = "Read Orbit Book Publishers’ terms and conditions and get transparent guidelines about our terms.";
		$robots = "NOINDEX, NOFOLLOW";
		$script = "";
	} elseif ($uri_segments[1] == "404") {
		$class = "404";
		$title = "404 | Oops.. Page Not Found | Orbit Book Publishers";
		$discription = "404 - This page does not exist on Orbit Book Publishers and we’re sorry for the inconvenience.";
		$robots = "NOINDEX, NOFOLLOW";
		$script = "";
	} elseif ($uri_segments[1] == "thankyou") {
		$class = "thankyou";
		$title = "Thank You for Contacting to Orbit Book Publishers";
		$discription = "Thank you for reaching out to Orbit Book Publishers. One of our representatives will contact you soon!";
		$robots = "NOINDEX, NOFOLLOW";
		$script = "";
	} else {
		$class = "random";
		$title = "Orbit book publishers | Providing Book Services to Authors";
		$discription = "Orbit Book Publishers provides book writing, book publishing, book marketing services to all authors, whether you’re a new author or an experienced one. Call Us ";
		$robots = "NOINDEX, NOFOLLOW";
		$script = "";
	}
	?>
	
	<title><?php echo $title ?></title>
	<meta name="description" content="<?php echo $discription ?>">
	<meta name="robots" content="<?php echo $robots ?>" />
	<?php echo $script ?>

<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="https://orbitbookpublishers.com/" />
<link rel="manifest" href="/site.webmanifest" />

    <link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/HTx3L3I-JCGChYJ8VI-L6OO_au7B6xHT2g.woff2" crossorigin="anonymous" media="all" />
	<link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/HTxwL3I-JCGChYJ8VI-L6OO_au7B46r2z3bWuQ.woff2" crossorigin="anonymous" media="all" />
	<link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/iJWEBXyIfDnIV7nEnX661A.woff2" crossorigin="anonymous" media="all" />

	<link rel="preload" as="font" type="font/woff" href="assets/css/fonts/slick.woff" crossorigin="anonymous" media="all" />
	<link rel="preload" as="font" type="font/ttf" href="assets/css/fonts/slick.ttf" crossorigin="anonymous" media="all" />
	<link rel="preload" as="font" type="font/eot" href="assets/css/fonts/slick.eot" crossorigin="anonymous" media="all" />

	<link rel="preload" as="font" type="font/eot" href="assets/css/fonts/icomoon.eot" crossorigin="anonymous" media="all" />
	<link rel="preload" as="font" type="font/ttf" href="assets/css/fonts/icomoon.ttf" crossorigin="anonymous" media="all" />
	<link rel="preload" as="font" type="font/woff" href="assets/css/fonts/icomoon.woff" crossorigin="anonymous" media="all" />
		
	<link rel="preconnect" href="https://cdn.jsdelivr.net">
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" />
	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/vendor.css?<?php echo $date ?>" crossorigin="anonymous" media="all" />
	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/style.css?<?php echo $date ?>" crossorigin="anonymous" media="all" />


	<link rel="preload" fetchpriority="high" as="image" href="assets/img/logo.webp" type="image/webp">
	<link rel="preload" fetchpriority="high" as="image" href="assets/img/banner.webp" type="image/webp">
	<link rel="preload" fetchpriority="high" as="image" href="assets/img/feature/feature-1.webp" type="image/webp">
	<link rel="preload" fetchpriority="high" as="image" href="assets/img/feature/feature-2.webp" type="image/webp">
	<link rel="preload" fetchpriority="high" as="image" href="assets/img/feature/feature-3.webp" type="image/webp">
    
    
</head>

<body class="<?php echo $class ?>">
    <script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
   
	