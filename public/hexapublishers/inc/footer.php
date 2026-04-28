<section>
	<div class="py-3 container-xxl">
		<div class="row justify-content-between align-items-center" style="z-index: 0; position: relative;">
			<div class="col-md-2"><img class="lozad skewElem" data-src="<?= getImagePath('assets/img/', 'footer-left') ?>" alt="footer-left"></div>
			<div class="col-lg-6 col-md-8 mt-5 mt-md-0">
				<div class="row align-items-center row-gap-3">
					<div class="col-sm-4 col-6 order-sm-1 order-2"> <a href="tel:<?php echo $no ?>" class="d-flex justify-content-sm-end justify-content-center"><span class="clr-1 icon-Group-15959 f-30 me-2"></span><span>Call Us At<br><span class="clr-1"><?php echo $no ?></span></span></a> </div>
					<div class="col-sm-5 col-md-4 order-sm-2 order-1"> <button class="w-100" type="button" data-bs-toggle="modal" data-bs-target="#quote">Get Started</button> </div>
					<div class="col-sm-3 col-md-4 col-6 order-3">
						<span>
							<a href="javascript:void(0);" class="d-flex justify-content-center justify-content-sm-start chat"><span class="clr-1 icon-Group-15958 f-30 me-2"></span><span>24/7 Support<br><span class="clr-1">Live Chat</span>
								</span>
							</a>
						</span>

					</div>
				</div>
			</div>
			<div class="col-md-2 d-flex justify-content-end">
				<img class="lozad skewElem" data-src="<?= getImagePath('assets/img/', 'footer-right') ?>" alt="footer right image of <?php echo $bname ?>">
			</div>
		</div>
	</div>
</section>
<footer class="position-relative bg-d clr-l  ">
	<div class="container-xxl pt-5 pb-4">
		<div class="row align-items-0 justify-content-between">
			<div class="col-lg-3 col-md-6  mb-3 order-1">
				<a href="<?php echo $url ?>" class="logo d-block"><img class="lozad" alt="<?php echo $bname ?>" data-src="<?php echo $logo_white ?>"></a>
				<p class="pt-2">Welcome to <?= $bname; ?>, Your Partner in Publishing Success. For over a decade, we’ve been helping authors turn their manuscripts into professionally published books.</p>
				<ul class="list-unstyled d-flex mb-0 border-top pt-3">
					<li class="pe-2">
						<a href="https://www.facebook.com/hexapublishers1/" target="_blank" rel="noopener noreferrer" aria-label="Follow Hexa Publishers on Facebook">
							<span class="icon icon-Path-39336"></span>
						</a>
					</li>
					<li class="pe-2">
						<a href="https://www.instagram.com/hexa.publishers/" target="_blank" rel="noopener noreferrer" aria-label="Follow Hexa Publishers on Instagram">
							<span class="icon icon-Group-15961"></span>
						</a>
					</li>
					<li class="pe-2">
						<a href="https://www.linkedin.com/company/hexa-publishers" target="_blank" rel="noopener noreferrer" aria-label="Follow Hexa Publishers on LinkedIn">
							<span class="icon icon-Group-15962"></span>
						</a>
					</li>
				</ul>

			</div>
			<div class="col-lg-3 col-md-6 col-7 order-lg-2  mb-3 order-3">
				<h2 class="f-24 fw-700 mb-4 d-block">Contact</h2>
				<p class="my-4"><?php echo $add; ?></p>
				<a href="tel:<?php echo $no ?>" class="my-4 d-block border-top pt-3"><span class="me-4">Call Us:</span> <span><?php echo $no ?></span></a>
				<a href="mailto:<?php echo $cta_email; ?>" class="my-4 d-block border-top pt-3"><span class="me-4">Email Us:</span> <span><?php echo $cta_email; ?></span></a>
			</div>
			<div class="col-lg-2 col-md-6 col-5 order-lg-3 mb-3 order-4">
				<h2 class="f-24 fw-700 mb-4 d-block">Quick Links</h2>
				<ul class="list-unstyled">
					<li class="pt-2"><a href="<?= $base_url; ?>">Home</a></li>
					<li class="pt-2"><a href="about">About</a></li>
					<li class="pt-2"><a href="case-studies">Case Studies</a></li>
					<li class="pt-2"><a href="blogs">Blog</a></li>
					<li class="pt-2"><a href="contact-us">Contact Us</a></li>
					<li class="pt-2"><a type="button" data-bs-toggle="modal" data-bs-target="#quote">Get Quote</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 order-lg-4 mb-3 order-2">
				<h2 class="f-24 fw-700 mb-4 d-block">They Trust Us!</h2>
				<ul class="list-unstyled row row-cols-3 pb-3">
					<li class=" col">
						<img class="lozad" data-src="<?= getImagePath('assets/img/', 'trust-1') ?>" alt="<?php echo $bname ?>">
					</li>
					<li class=" col">
						<img class="lozad" data-src="<?= getImagePath('assets/img/', 'trust-2') ?>" alt="<?php echo $bname ?>">
					</li>
					<li class=" col">
						<img class="lozad" data-src="<?= getImagePath('assets/img/', 'trust-3') ?>" alt="<?php echo $bname ?>">
					</li>


				</ul>
				<div class="pt-3 border-top"><img class="lozad" data-src="<?= getImagePath('assets/img/', 'payment') ?>" alt="<?php echo $bname ?>"></div>
			</div>
		</div>
	</div>
	<div class="copyright bg-dark py-2 text-center text-md-start">
		<div class="container-xxl">
			<div class="row align-items-center">
				<div class="col-md-6">
					© <?php echo date('Y') ?> <?php echo $bname ?> - All Rights Reserved
				</div>
				<div class="col-md-6">
					<ul class="list-unstyled mb-0 d-flex justify-content-center justify-content-md-end column-gap-4">
						<li><a href="terms-conditions">Terms and conditions</a>
						</li>
						<li><a href="privacy-policy">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


</footer>

<div class="modal fade" id="quote" tabindex="-1" aria-labelledby="quoteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content lozad" data-background-image="<?= getImagePath('assets/img/', 'americas-pop-banner') ?>">
			<div class="modal-header">
				<button type="button" class="btn-close opacity-75" data-bs-dismiss="modal" aria-label="Close">X</button>
			</div>
			<div class="modal-body">
				<div class="row row-gap-4">
					<div class="col-md-6">
						<img class="lozad" data-src="<?= getImagePath('assets/img/', 'story') ?>"
							alt="<?php echo $bname ?>">
					</div>
					<div class="col-md-6">
						<form action="<?php echo $post_url; ?>" method="post" class="overflow-hidden">
							<div class="form-group mb-3">
								<input class="form-control" type="text" name="name" placeholder="Your Name" required=""
									autocomplete="name"
									value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
								<?php echo !empty($error['name']) ? $error['name'] : ''; ?>
							</div>
							<div class="form-group mb-3">
								<input class="form-control" type="email" name="email" placeholder="Your Email"
									value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>"
									required="required" autocomplete="email">
								<?php echo !empty($error['email']) ? $error['email'] : ''; ?>
							</div>
							<div class="form-group mb-3">
								<input class="form-control" type="tel" name="phone" minlength="10" maxlength="12"
									placeholder="Your Phone"
									value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required="required" autocomplete="tel">
								<?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
							</div>
							<div class="form-group mb-3">
								<textarea class="form-control" autocomplete="off" name="message"
									placeholder="Enter Brief"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
								<?php echo !empty($error['message']) ? $error['message'] : ''; ?>
							</div>
							<div class="form-group col-6">
								<button class="btn subbtn w-100" type="submit" name="cta1" value="Submit Now">Submit</button>
							</div>
							<div class="form-group">
								<input type="hidden" name="domain" value="<?php echo $domainname ?>">
								<input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
								<input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
								<input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
								<input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
								<input type="hidden" name="url" value='<?php echo $current_url ?>'>
								<input type="hidden" name="domain" value="<?php echo $domainname ?>">
								<input type="hidden" name="subject" value="Popup Form (<?php echo $current_url ?>)">
								<input type="hidden" name="source" value="<?php echo $lead_source ?>">
							</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript" src="assets/js/plugin.js"></script>
<script type="text/javascript" src="assets/js/lozad.min.js"></script>
<script type="text/javascript" src="<?= $jsPath . '?v=' . $date ?>"></script>


<script>
	const observer = lozad('.lozad', {
		rootMargin: '10px 0px',
		threshold: 0.1,
		enableAutoReload: true
	});
	observer.observe();
</script>
