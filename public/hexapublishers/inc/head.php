<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?php echo $base_url; ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta name="p:domain_verify" content="5f327d2ded96bcd0eb9bd5da69406fc1">-->
	<?php include 'meta.php'; ?>
	<title><?php echo $title ?></title>
	<meta name="description" content="<?php echo $description ?>">
	<meta name="robots" content="<?php echo $robots ?>">
	<meta name="google-site-verification" content="RoViYaO2SdHwsKyA8004wa0A_03FMU1G_fmKcQ-_f8o" />
	<link rel="canonical" href="<?php echo $current_url ?>">

	<!-- Open Graph (Facebook/LinkedIn) -->
	<meta property="og:title" content="<?php echo $title ?>">
	<meta property="og:description" content="<?php echo $description ?>">
	<meta property="og:url" content="<?php echo $current_url ?>">
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php echo $logo; ?>">
	<!--<meta name="twitter:card" content="summary_large_image" />-->
	<!--<meta name="twitter:creator" content="">-->
	<!--<meta name="twitter:site" content="">-->
	<!--<meta name="twitter:title" content="<?php echo $title ?>" >-->
	<!--<meta name="twitter:description" content="<?php echo $description ?>">-->
	<!--<meta name="twitter:image" content="<?php echo $logo; ?>">-->

	<?php echo $script ?>

	<link rel="icon" type="image/png" href="assets/favicon-96x96.webp" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="assets/favicon.svg" />
	<link rel="shortcut icon" href="assets/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.webp" />
	<meta name="apple-mobile-web-app-title" content="Hexa Publishers" />
	<link rel="manifest" href="assets/site.webmanifest" />

	<link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/XRXV3I6Li01BKofINeaB.woff2" crossorigin="anonymous" media="all">
	<link rel="preload" as="font" type="font/woff2" href="assets/css/fonts/iJWKBXyIfDnIV7nBrXw.woff2" crossorigin="anonymous" media="all">

	<link rel="preload" as="font" type="font/woff" href="assets/css/fonts/slick.woff" crossorigin="anonymous" media="all">
	<link rel="preload" as="font" type="font/ttf" href="assets/css/fonts/slick.ttf" crossorigin="anonymous" media="all">
	<link rel="preload" as="font" type="font/eot" href="assets/css/fonts/slick.eot" crossorigin="anonymous" media="all">

	<link rel="preload" as="font" type="font/eot" href="assets/css/fonts/icomoon.eot" crossorigin="anonymous" media="all">
	<link rel="preload" as="font" type="font/ttf" href="assets/css/fonts/icomoon.ttf" crossorigin="anonymous" media="all">
	<link rel="preload" as="font" type="font/woff" href="assets/css/fonts/icomoon.woff" crossorigin="anonymous" media="all">

	<link rel="preconnect" href="https://cdn.jsdelivr.net">
	<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css">

	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="assets/css/vendor.css?v=<?php echo $date ?>" crossorigin="anonymous" media="all">
	<link rel="stylesheet" rel="preload" as="style" type="text/css" href="<?= $cssPath . '?v=' . $date ?>" crossorigin="anonymous" media="all">

	<link rel="preload" as="image" href="assets/img/logo-blck.webp" type="image/webp" fetchpriority="high">
	<link rel="preload" as="image" href="assets/img/banner.webp" type="image/webp" fetchpriority="high">
	<link rel="preload" as="image" href="assets/img/book-publishing.webp" type="image/webp" fetchpriority="high">

	<!-- Google tag seo (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-H4F2TW7J7S"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-H4F2TW7J7S');
	</script>

	<!-- Google Tag Manager seo -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NN9BWM7J');
	</script>
	<!-- End Google Tag Manager seo -->



</head>

<body class="<?php echo $class ?>">

	<!-- Google Tag Manager (noscript) seo -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NN9BWM7J"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) seo -->



	<script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
