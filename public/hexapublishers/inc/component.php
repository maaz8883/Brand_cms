<section class="banner bg lozad" data-background-image="<?= getImagePath('assets/img/',$innerBanner['bg-image'])?>">
	<div class="overlay-light py-5">
		<div class="container-fluid py-5">
			<div class="row justify-content-center text-center align-items-center pt-5">
				<div class=" col-md-7" data-aos="fade-down" data-aos-duration="3000">
					<span class="clr-1 fw-700 f-24"><?= $innerBanner['subheading'] ?></span>
					<h1 class="f-55 fw-700"><?= $innerBanner['heading'] ?></h1>
					<p><?= $innerBanner['paragraph'] ?></p>
					<div class="row mb-3 justify-content-center">
						<div class="col-6 col-xl-5">
							<button class=" w-100" type="button" data-bs-toggle="modal" data-bs-target="#quote"><span class="d-flex justify-content-center align-items-center">Get Started <span class="line"><span class="circle"></span></span></span></button>
						</div>
						<div class="col-6 col-xl-5">
						    <span>
							    <a href="javascript:void(0);" class="btn w-100 btn-2 chat"><span class="circle"></span> Live Chat</a>						        
						    </span>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="lozad py-5 service-first" data-background-image="assets/img/service-first-left.webp , assets/img/service-first-right.webp">
	<div class="container-xl py-5">
		<div class="row align-items-center row-gap-5">
			<div class="col-lg-6" data-aos="fade-right" data-aos-duration="3000">
				<span class="fw-700 f-34 clr-1"><?= $serviceFirst['subheading'] ?></span>
				<h2><?= $serviceFirst['heading'] ?></h2>
				<p><?= $serviceFirst['paragraph1'] ?></p>
				<p><?= $serviceFirst['paragraph2'] ?></p>
				<button class="px-5" type="button" data-bs-toggle="modal" data-bs-target="#quote"><span class="d-flex justify-content-center align-items-center">Get Started <span class="line"><span class="circle"></span></span></span></button>
			</div>
			<div class="col-lg-6" data-aos="fade-left" data-aos-duration="3000">
				<img class="lozad" data-src="<?= getImagePath('assets/img/',$serviceFirst['svce-img'])?>"
			</div>
		</div>
	</div>
</section>

<?php include 'inc/portfolio.php';?>

<section class=" py-5">
	<div class="container py-5">
		<div class="row justify-content-center text-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="3000">
				<h2 class="fw-700 f-40"><?= $whyUs['heading'] ?></h2>
				<p><?= $whyUs['paragraph'] ?></p>
			</div>

		</div>
		<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 recog">
			<?php foreach ($whyUs['boxes'] as $box => $boxdetails): ?>
			<div class="col px-2 mb-4" data-aos="fade-up" data-aos-duration="3000">
				<div class="box recognized d-flex flex-column justify-content-between">
				    <div>
					<h3 class="f-24 fw-700"><?= $boxdetails['heading'] ?></h3>
					<p><?= $boxdetails['paragraph'] ?></p>
					</div>
					<div>
					<a href="javascript:;" class="chat d-flex align-items-center"><span class="icon fw-700">&#8594;</span> <span class="ms-2 fw-700 clr-1">Connect With Us</span>
					</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


<?php require 'inc/cta.php' ?>

<?php require 'inc/review.php' ?>
<?php require 'inc/faq.php' ?>