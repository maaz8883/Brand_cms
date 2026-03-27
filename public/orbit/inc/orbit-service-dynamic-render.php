<?php
declare(strict_types=1);

function orbit_e(string $s): string
{
	return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function orbit_child_href(array $service, array $child): string
{
	global $base_url;
	$trail = array_column($service['breadcrumb'] ?? [], 'slug');
	$trail[] = $child['slug'] ?? '';

	return rtrim((string) $base_url, '/') . '/' . implode('/', array_filter($trail));
}

/**
 * @param  array{brand:array,service:array}  $payload
 */
function orbit_render_dynamic_service(array $payload): void
{
	global $bname, $no;

	$service = $payload['service'];
	$c = $service['content'] ?? [];
	if (! is_array($c)) {
		$c = [];
	}

	$heroBg = orbitMediaUrl($c['hero']['background_image'] ?? '');
	$hero = $c['hero'] ?? [];

	?>
<section class="main banner lozad bg position-relative z-3"<?= $heroBg !== '' ? ' data-background-image="' . orbit_e($heroBg) . '"' : ' data-background-image="assets/img/book-publishing.webp"'; ?>>
	<div class="overlay position-relative py-5 z-3">
		<img class="lozad sub-ban-left" alt="Book services by <?= orbit_e($bname); ?>" data-src="assets/img/publishing-before.webp">
		<div class="container-lg py-md-5 py-4 ">
			<div class="row justify-content-center text-center py-5">
				<div class="col-xxl-8 col-lg-9 col-md-11 col-12 pt-lg-5 ">
					<h1 class="f-55 c fw-700 mt-4 clr-1"><?= orbit_e($hero['heading'] ?? ''); ?> <span class="bg-2 clr-l"><?= orbit_e($hero['heading_highlight'] ?? ''); ?></span></h1>
					<p class="fw-600"><?= orbit_e($hero['description'] ?? ''); ?></p>
				</div>
				<div class="col-lg-11 col-xl-10 col-12 pt-4">
					<?php include __DIR__ . '/inner-form.php'; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include __DIR__ . '/platform.php'; ?>

<?php
	if (! empty($service['children']) && is_array($service['children'])) {
		?>
<section class="py-3 bg-light border-bottom">
	<div class="container-lg">
		<p class="small text-muted mb-2">Sub-service areas</p>
		<div class="d-flex flex-wrap gap-2 justify-content-center">
			<?php foreach ($service['children'] as $ch) {
				if (empty($ch['slug'])) {
					continue;
				}
				$href = orbit_child_href($service, $ch);
				?>
			<a class="btn btn-outline-secondary btn-sm" href="<?= orbit_e($href); ?>"><?= orbit_e($ch['title'] ?? $ch['slug']); ?></a>
			<?php } ?>
		</div>
	</div>
</section>
		<?php
	}

	$intro = $c['intro'] ?? [];
	$tabs = $c['service_tabs']['tabs'] ?? [];
	if (! is_array($tabs)) {
		$tabs = [];
	}
	?>
<section class="pt-md-4 pb-5">
	<div class="sub-services">
		<div class="container-lg">
			<div class="row text-center">
				<div class="col-12">
					<h2 class="f-40 clr-1 fw-700"><?= orbit_e($intro['heading'] ?? ''); ?></h2>
					<p class="f-18 fw-500"><?= orbit_e($intro['description'] ?? ''); ?></p>
				</div>
			</div>
			<div class="col-12 ">
				<ul class="nav nav-pills mb-3 justify-content-center row-gap-2" id="dyn-pills-tab" role="tablist">
					<?php foreach ($tabs as $ti => $tab) {
						$tid = 'dyn-tab-' . $ti;
						$active = $ti === 0 ? 'active' : '';
						$sel = $ti === 0 ? 'true' : 'false';
						?>
					<li class="nav-item " role="presentation">
						<button class="nav-link <?= $active; ?>" id="<?= $tid; ?>-btn" data-bs-toggle="pill" data-bs-target="#<?= $tid; ?>-pane" type="button" role="tab" aria-controls="<?= $tid; ?>-pane" aria-selected="<?= $sel; ?>">
							<p class="mb-0"><?= orbit_e($tab['tab_title'] ?? ''); ?></p>
						</button>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="tab-content container-lg pb-5" id="dyn-pills-tabContent">
		<?php foreach ($tabs as $ti => $tab) {
			$tid = 'dyn-tab-' . $ti;
			$show = $ti === 0 ? 'show active' : '';
			$tabImg = orbitMediaUrl($tab['image'] ?? '');
			$checklist = $tab['checklist'] ?? [];
			if (! is_array($checklist)) {
				$checklist = [];
			}
			?>
		<div class="tab-pane fade <?= $show; ?>" id="<?= $tid; ?>-pane" role="tabpanel" aria-labelledby="<?= $tid; ?>-btn">
			<div class="row justify-content-between align-items-center row-gap-4">
				<div class="col-md-7 mt-4 mt-md-0 text-center text-md-start ">
					<h3 class=" f-40 clr-2 fw-700 mb-3"><?= orbit_e($tab['title'] ?? ''); ?> <span class="bg-2 clr-l"><?= orbit_e($tab['title_highlight'] ?? ''); ?></span></h3>
					<?php if (! empty($tab['title_suffix'])) { ?>
					<p class="f-20 fw-600"><?= orbit_e($tab['title_suffix']); ?></p>
					<?php } ?>
					<p><?= orbit_e($tab['description'] ?? ''); ?></p>
					<?php if ($checklist !== []) { ?>
					<ul class="c-list list-unstyled row row-cols-2">
						<?php foreach ($checklist as $item) {
							if ((string) $item === '') {
								continue;
							}
							?>
						<li><?= orbit_e((string) $item); ?></li>
						<?php } ?>
					</ul>
					<?php } ?>
					<button class="" data-bs-toggle="modal" data-bs-target="#quote"><?= orbit_e($tab['button_label'] ?? 'Get Started'); ?></button>
				</div>
				<div class="col-xl-5 col-md-5 ">
					<div class="service-image">
						<?php if ($tabImg !== '') { ?>
						<img class="lozad" alt="Service by <?= orbit_e($bname); ?>" data-src="<?= orbit_e($tabImg); ?>">
						<?php } else { ?>
						<img class="lozad" alt="Service by <?= orbit_e($bname); ?>" data-src="assets/img/publishing-side.webp">
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</section>

<?php
	$mid = $c['mid_cta'] ?? [];
	$midBg = orbitMediaUrl($mid['background_image'] ?? '');
	$why = $c['why_choose'] ?? [];
	$cards = $why['cards'] ?? [];
	if (! is_array($cards)) {
		$cards = [];
	}
	?>
<section class="cta1 lozad py-5 bg-size"<?= $midBg !== '' ? ' data-background-image="' . orbit_e($midBg) . '"' : ' data-background-image="assets/img/bg-cta.webp"'; ?>>
	<div class="container-xxl py-4">
		<div class="text-center clr-l">
			<h2 class="f-80 clr-2"><?= orbit_e($mid['heading'] ?? ''); ?> <br><span class="bg-2 clr-l"><?= orbit_e($mid['heading_highlight'] ?? ''); ?></span></h2>
			<p class="f-26"><?= orbit_e($mid['subheading'] ?? ''); ?></p>
			<div class="f-40">
				<a href="tel:<?= orbit_e($mid['phone'] ?? $no); ?>" class="fw-bolder"><span class="fw-lighter clr-grey">Call Us </span><?= orbit_e($mid['phone'] ?? $no); ?></a>
			</div>
			<button class=" my-3" data-bs-toggle="modal" data-bs-target="#quote"><?= orbit_e($mid['button_label'] ?? 'Get Started'); ?></button>
		</div>
	</div>
</section>

<section class="text-center pt-5">
	<div class="container-xl">
		<div class="row">
			<div class="col-12">
				<h2 class="f-40 clr-1 fw-700"><?= orbit_e($why['heading'] ?? ''); ?> <span class="clr-l bg-2"><?= orbit_e($why['heading_highlight'] ?? ''); ?></span></h2>
				<p class="f-20 my-4"><?= orbit_e($why['description'] ?? ''); ?></p>
			</div>
		</div>
		<div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center">
			<?php foreach ($cards as $card) {
				if (! is_array($card)) {
					continue;
				}
				?>
			<div class="col mb-4">
				<div class="box lozad pt-4 px-4 pb-5" data-background-image="assets/img/box-bg.webp">
					<div class="top-tape"></div>
					<h3 class="f-24 clr-2 fw-600"><?= orbit_e($card['title'] ?? ''); ?></h3>
					<p><?= orbit_e($card['description'] ?? ''); ?></p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php
	$sf = $c['success_features'] ?? [];
	$sfItems = $sf['items'] ?? [];
	if (! is_array($sfItems)) {
		$sfItems = [];
	}
	?>
<section class="seats-us-sec py-md-5 py-4">
	<div class="container-xxl">
		<div class="row">
			<div class="col-md-4">
				<div class="inner-heading-head pt-4 text-center text-md-start">
					<h2 class="f-40 fw-500"><strong class="clr-1"><?= orbit_e($sf['heading_strong'] ?? ''); ?></strong> <span class="clr-2 fw-700"><?= orbit_e($sf['heading_span'] ?? ''); ?></span></h2>
					<button class="" data-bs-toggle="modal" data-bs-target="#quote"><?= orbit_e($sf['button_label'] ?? 'Get Started'); ?></button>
				</div>
			</div>
			<div class="col-md-8">
				<ul class="list-unstyled mb-0 seats-us-sec-list px-3">
					<?php foreach ($sfItems as $item) {
						if (! is_array($item)) {
							continue;
						}
						$img = orbitMediaUrl($item['image'] ?? '');
						if ($img === '') {
							$img = 'assets/img/seats-us-sec-box-icon-4.webp';
						}
						?>
					<li>
						<div class="seats-us-sec-box my-4 text-center">
							<img src="<?= orbit_e($img); ?>" alt="">
							<h4><?= orbit_e($item['title'] ?? ''); ?></h4>
							<p><?= orbit_e($item['description'] ?? ''); ?></p>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
	$plat = $c['platform_section'] ?? [];
	$platImg = orbitMediaUrl($plat['side_image'] ?? '');
	$paras = $plat['paragraphs'] ?? [];
	if (! is_array($paras)) {
		$paras = [];
	}
	?>
<section class="cta clr-l">
	<div class="container-xl">
		<div class="row text-center text-md-start align-items-center">
			<div class="col-lg-7 col-md-8 pt-5 pb-4">
				<h2 class="f-40 fw-700 clr-2"><?= orbit_e($plat['heading'] ?? ''); ?> <span class="bg-2 clr-l"><?= orbit_e($plat['heading_highlight'] ?? ''); ?></span></h2>
				<?php foreach ($paras as $p) {
					if ((string) $p === '') {
						continue;
					}
					?>
				<p><?= orbit_e((string) $p); ?></p>
				<?php } ?>
				<div class="row ">
					<div class="col-lg-4 col-md-6 col-9"><button class="w-100 mb-3" data-bs-toggle="modal" data-bs-target="#quote"><?= orbit_e($plat['button_label'] ?? 'Get Started'); ?></button></div>
					<div class="col-lg-6 col-md-6 col-3 "><a href="tel:<?= orbit_e($plat['phone'] ?? $no); ?>" aria-label="Call Us Now " class=" icona text-start d-flex align-items-center justify-content-start"><span class="icon-phone me-2 icon"></span><span class="d-none d-md-block"><span class="clr-l fw-700">Call Us Now</span><br><span class="fw-700"><?= orbit_e($plat['phone'] ?? $no); ?></span></span></a></div>
				</div>
			</div>
			<div class="col-lg-5 col-md-4">
				<?php if ($platImg !== '') { ?>
				<img class="lozad publishing-side" data-src="<?= orbit_e($platImg); ?>" alt="cta-img">
				<?php } else { ?>
				<img class="lozad publishing-side" data-src="assets/img/publishing-side.webp" alt="cta-img">
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__ . '/platform2.php'; ?>

<?php
	$sec = $c['secondary_section'] ?? [];
	$secImg = orbitMediaUrl($sec['image'] ?? '');
	?>
<section class="py-md-5">
	<div class="container-lg">
		<div class="row justify-content-between align-items-center row-gap-4">
			<div class="col-xl-5 col-md-5 ">
				<div class="service-image">
					<?php if ($secImg !== '') { ?>
					<img class="lozad" alt="Service by <?= orbit_e($bname); ?>" data-src="<?= orbit_e($secImg); ?>">
					<?php } else { ?>
					<img class="lozad" alt="Service by <?= orbit_e($bname); ?>" data-src="assets/img/book-writing-side-2.webp">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-7 mt-4 mt-md-0 text-center text-md-start ">
				<h3 class=" f-40 clr-1 fw-700 mb-3"><?= orbit_e($sec['heading'] ?? ''); ?> <span class="bg-2 clr-l"><?= orbit_e($sec['heading_highlight'] ?? ''); ?></span></h3>
				<p><?= orbit_e($sec['description'] ?? ''); ?></p>
				<div class="row ">
					<div class="col-lg-4 col-md-5 col-9">
						<button class="w-100 mb-3" data-bs-toggle="modal" data-bs-target="#quote"><?= orbit_e($sec['button_label'] ?? 'Get Started'); ?></button>
					</div>
					<div class="col-lg-8 col-md-7 col-3 "><a href="tel:<?= orbit_e($sec['phone'] ?? $no); ?>" aria-label="Call Us now to discuss you project" class="icona d-flex align-items-center justify-content-start"><span class="icon-phone me-2 icon"></span><span class="d-none d-md-block"><span class="clr-2 fw-700">Call Now</span><br><span class="fw-700"><?= orbit_e($sec['phone'] ?? $no); ?></span></span></a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$proc = $c['process'] ?? [];
	$steps = $proc['steps'] ?? [];
	if (! is_array($steps)) {
		$steps = [];
	}
	$procLogo = orbitMediaUrl($proc['center_logo'] ?? '');
	$left = array_slice($steps, 0, 2);
	$right = array_slice($steps, 2, 2);
	?>
<section class="pt-4">
	<div class="container-xl">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h2 class="f-40 clr-1 fw-700"><?= orbit_e($proc['heading'] ?? ''); ?></h2>
				<p class="f-20 fw-500"><?= orbit_e($proc['description'] ?? ''); ?></p>
			</div>
		</div>
		<div class="row align-items-center text-center text-auto">
			<div class="col-md-4 text-md-end">
				<div class="row">
					<?php foreach ($left as $i => $st) {
						if (! is_array($st)) {
							continue;
						}
						$mt = $i > 0 ? 'mt-lg-5' : '';
						?>
					<div class="col-md-12 col-6 ">
						<span class="heading f-40 fw-700 clr-1 d-block"><?= orbit_e($st['number'] ?? ''); ?></span>
						<h3 class="f-20 clr-2 fw-600"><?= orbit_e($st['title'] ?? ''); ?></h3>
						<p class="f-20 fw-500"><?= orbit_e($st['description'] ?? ''); ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-4  text-center d-none d-sm-block">
				<div class="center-icon">
					<?php if ($procLogo !== '') { ?>
					<img class="lozad" data-src="<?= orbit_e($procLogo); ?>" alt="">
					<?php } else { ?>
					<img class="lozad" data-src="assets/img/logo.png" alt="">
					<?php } ?>
				</div>
			</div>
			<div class="col-md-4 text-md-start">
				<div class="row">
					<?php foreach ($right as $i => $st) {
						if (! is_array($st)) {
							continue;
						}
						$mt = $i > 0 ? 'mt-lg-5' : '';
						?>
					<div class="col-md-12 col-6">
						<span class="heading f-40 fw-700 clr-1 <?= $mt; ?> d-block"><?= orbit_e($st['number'] ?? ''); ?></span>
						<h3 class="f-20 clr-2 fw-600"><?= orbit_e($st['title'] ?? ''); ?></h3>
						<p class="f-20 fw-500"><?= orbit_e($st['description'] ?? ''); ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	$port = $c['portfolio'] ?? [];
	$portImgs = $port['images'] ?? [];
	if (! is_array($portImgs)) {
		$portImgs = [];
	}
	if ($portImgs !== [] || ($port['heading'] ?? '') !== '') {
		?>
<section class="py-5">
	<div class="container-lg text-center">
		<h2 class="f-40 clr-1 fw-700"> <?= orbit_e($port['heading'] ?? ''); ?></h2>
		<p class="f-18 fw-500"> <?= orbit_e($port['description'] ?? ''); ?></p>
		<div class="row row-cols-2 row-cols-md-4 g-3 mt-3">
			<?php foreach ($portImgs as $img) {
				$u = orbitMediaUrl((string) $img);
				if ($u === '') {
					continue;
				}
				?>
			<div class="col"><img class="img-fluid lozad rounded" data-src="<?= orbit_e($u); ?>" alt="Portfolio"></div>
			<?php } ?>
		</div>
	</div>
</section>
		<?php
	}

	$test = $c['testimonials'] ?? [];
	$tItems = $test['items'] ?? [];
	if (! is_array($tItems)) {
		$tItems = [];
	}
	if ($tItems !== []) {
		?>
<section class="py-5 reviews position-relative z-1">
	<div class="container-xl py-2">
		<div class="row justify-content-center">
			<div class="col-lg-3 text-center text-lg-start">
				<h2 class="f-60 bdr-bfr clr-l position-relative lh-1 d-inline-block "><?= orbit_e($test['heading'] ?? ''); ?></h2>
				<p class="pt-2 pt-sm-0"><?= orbit_e($test['sidebar_text'] ?? ''); ?></p>
			</div>
			<div class="col-lg-9">
				<div class="reviews-silder">
					<?php foreach ($tItems as $t) {
						if (! is_array($t)) {
							continue;
						}
						$quote = (string) ($t['quote'] ?? '');
						if ($quote === '') {
							continue;
						}
						?>
					<div class="item p-3 h-auto">
						<div class="box p-3 h-100 d-flex flex-column justify-content-between">
							<div>
								<p><?= orbit_e($quote); ?></p>
							</div>
							<span class="f-18 heading clr-l"><?= orbit_e($t['author'] ?? ''); ?></span>
						</div>
					</div>
						<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
		<?php
	}

	include __DIR__ . '/package.php';
}
