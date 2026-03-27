
<section class="main banner lozad bg position-relative z-3" data-background-image="assets/img/book-editing.webp">
	<div class="overlay position-relative py-5 z-3">
		<img class="lozad sub-ban-left" alt="Book services by <?= $bname; ?>"
			data-src="assets/img/editing-before.webp">
		<div class="container-lg py-md-5 py-4 ">
			<div class="row justify-content-center text-center py-5">
				<div class="col-xxl-8 col-lg-9 col-md-11 col-12 pt-lg-5 ">
					<p class="fw-600 clr-2 mb-2 text-uppercase small">Nationwide coverage</p>
					<h1 class="f-55 c fw-700 mt-2 clr-1">We Are Where <span class="bg-2 clr-l">You Are</span> — Serving Authors Across the USA</h1>
					<p class="fw-600">Orbit Book Publishers brings trusted book publishing, marketing, and support to authors in cities and towns nationwide. Explore our service areas below and connect with us from your hometown.</p>
				</div>
				<div class="col-lg-11 col-xl-10 col-12 pt-4">
					<?php include 'inc/inner-form.php'; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'inc/platform.php'; ?>

<?php
$us_states = [
	['Alabama', 'alabama'],
	['Alaska', 'alaska'],
	['Arizona', 'arizona'],
	['Arkansas', 'arkansas'],
	['California', 'california'],
	['Colorado', 'colorado'],
	['Connecticut', 'connecticut'],
	['Delaware', 'delaware'],
	['Florida', 'florida'],
	['Georgia', 'georgia'],
	['Hawaii', 'hawaii'],
	['Idaho', 'idaho'],
	['Illinois', 'illinois'],
	['Indiana', 'indiana'],
	['Iowa', 'iowa'],
	['Kansas', 'kansas'],
	['Kentucky', 'kentucky'],
	['Louisiana', 'louisiana'],
	['Maine', 'maine'],
	['Maryland', 'maryland'],
	['Massachusetts', 'massachusetts'],
	['Michigan', 'michigan'],
	['Minnesota', 'minnesota'],
	['Mississippi', 'mississippi'],
	['Missouri', 'missouri'],
	['Montana', 'montana'],
	['Nebraska', 'nebraska'],
	['Nevada', 'nevada'],
	['New Hampshire', 'new-hampshire'],
	['New Jersey', 'new-jersey'],
	['New Mexico', 'new-mexico'],
	['New York', 'new-york'],
	['North Carolina', 'north-carolina'],
	['North Dakota', 'north-dakota'],
	['Ohio', 'ohio'],
	['Oklahoma', 'oklahoma'],
	['Oregon', 'oregon'],
	['Pennsylvania', 'pennsylvania'],
	['Rhode Island', 'rhode-island'],
	['South Carolina', 'south-carolina'],
	['South Dakota', 'south-dakota'],
	['Tennessee', 'tennessee'],
	['Texas', 'texas'],
	['Utah', 'utah'],
	['Vermont', 'vermont'],
	['Virginia', 'virginia'],
	['Washington', 'washington'],
	['West Virginia', 'west-virginia'],
	['Wisconsin', 'wisconsin'],
	['Wyoming', 'wyoming'],
];
?>

<section class="orbit-location-section">
	<div class="container-lg">
		<div class="orbit-location-head">
			<h2 class="f-40 clr-1 fw-700 mb-3">We are in your hometown now!</h2>
			<p class="f-18 fw-500 mb-0">
				We are extending our services to serve you better in your own hometown. Below is a list of geographic locations where we currently offer our services.
				If you don&rsquo;t see your state listed, please contact us &mdash; we may still be able to assist you.
			</p>
		</div>
		<div class="orbit-state-grid" role="list">
			<?php foreach ($us_states as $st) {
			    [$label, $slug] = $st;
			    ?>
			<button type="button"  role="listitem" data-state-slug="<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(strtoupper($label), ENT_QUOTES, 'UTF-8'); ?></button>
			<?php } ?>
		</div>
	</div>
</section>
