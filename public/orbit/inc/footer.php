<footer class="lozad bg-size pt-md-5 " data-background-image="assets/img/footer.webp">
	<div class="container-lg">
		<div class="row py-4 justify-content-between">
			<div class="col-md-3">
				<a href="<?php echo $base_url?>" class="logo d-block" aria-label="Home page">
					<img class="lozad logo" alt="<?php echo $bname?>" data-src="assets/img/logo.png">
				</a>
				<p class="mt-4">From concept to publication and beyond, every stage is handled with precision and care. Authors receive the support needed to move forward confidently and successfully.</p>
					
			</div>
			<div class="col-md-6 col-lg-5 col-sm-6">
				<h2 class="pb-xl-5 py-4">Services</h2>
				<ul class="list-unstyled mb-0 row row-cols-2 row-gap-3">
					<li class="col">
						<a href="book-publishing-services" class="">Book Publishing</a>
					</li>
					<li class="col">
						<a href="book-video-services" class="">Book Video</a>
					</li>
					<li class="col">
						<a href="book-marketing-services" class="">Book Marketing</a>
					</li>
					<li class="col">
						<a href="book-illustration-services" class="">Illustration & Graphics</a>
					</li>
					<li class="col">
						<a href="book-writing-services" class="">Book
							Writing</a>
					</li>
					<li class="col"><a href="book-cover-services" class="">Book Cover</a>
					</li>
					<li class="col">
						<a href="book-editing-services" class="">Book Editing</a>
					</li>
					<li class="col">
						<a href="author-website-services" class="">Author Website</a>
					</li>
					<li class="col">
						<a href="audio-book-services" class="">Audio Book</a>
					</li>
					
				</ul>
			</div>
			<div class="col-md-3 col-sm-4">
				<h2 class="pb-xl-5 py-4">Contact Info</h2>
				<ul class="list-unstyled mb-0">
					<li class="mb-3">
				        <a href="tel:<?php echo $no ?>" aria-label="Call Us now to discuss you project"
							class="d-flex align-items-center mb-3"><span class="icon-phone me-2"></span>
							<?php echo $no ?>
						</a>
					</li>
					<li class="mb-3">
					    <a href="mailto:sales@<?= $domainname ?>" aria-label="Email us to discuss you project"
							class="d-flex align-items-center mb-3"><span class="icon-mail me-2"></span>
							sales@<?= $domainname ?>
						</a>
					</li>
					<li class="mb-3">
					    <span class="d-flex align-items-center mb-3"><span class="icon-location me-2"></span>
						    <?= htmlspecialchars((string) $add, ENT_QUOTES, 'UTF-8') ?>
						</span>
					</li>
					<li class="mb-3">
					    <ul class="list-unstyled d-flex justify-content-start">
								<li class="me-3 ms-0">
									<a href="https://www.facebook.com/orbitbookpublishers1/" aria-label="Like and follow <?php echo $bname?> facbook page"
										target="_blank"><span class="icon-fb"></span></a>
								</li>
								<li class="ms-0">
									<a href="https://www.instagram.com/orbitbookpublishers/" aria-label="Follow Book <?php echo $bname?> on Instagram"
										target="_blank"><span class="icon-insta"></span></a>
								</li>
							</ul>
					</li>
					<!--<li class="mb-3"><a href="about-us" class="">About Us</a></li>-->
					
				</ul> 
				
							
			</div>
		</div>
		<div class="row py-3 border-top">
		    <div class="col-md-6 col-lg-7 col-xl-8">
		        <p class="f-16">
			                        Copyright © <?php echo date('Y')?> <span class="clr-1 text-uppercase fw-600"><?php echo $bname?></span> All Rights Reserved
			                    </p>
		    </div>
		    <div class="col-md-6 col-lg-5 col-xl-4">
		        <ul class="list-unstyled d-flex justify-content-between">
		            <li class=""><a href="terms-conditions" class="">Terms & Conditions</a></li>
					<li class=""><a href="privacy-policy" class="">Privacy & Policy</a></li>
		        </ul>
		    </div>
		</div>
	</div>

</footer>
<div class="modal fade" id="quote" tabindex="-1" aria-labelledby="quoteLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content lozad clr-l">
			<!-- <div class="modal-header  ">
							
						</div> --><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
			<div class="modal-body ">
				<div class="row">
					<div class="col-md-6 d-lg-block d-none">
						<img class="lozad" data-src="assets/img/popcharacter.webp" alt="<?php echo $bname ?>">
					</div>
					<div class="col-md-6 align-self-center">
						<h4 class="f-24 clr-1 fw-700">Start Your Writing Journey</h4>
						<form action="<?php echo $current_url ?>" method="post">
							<div class="form-group">
								<input type="hidden" name="domain" value="<?php echo $domainname ?>">
                                        <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
                                            <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
                                            <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
                                            <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
                                            
                                            <input type="hidden" name="url" value="<?php echo $current_url ?>">
                                            <input type="hidden" name="subject" value="Popup Form (<?php echo $current_url ?>)">
											<input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
											<input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
											<input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">

											<input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
											<input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
											<input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">
							</div>
							<div class="form-group mb-3">
								<input class="form-control" type="text" name="name" placeholder="Your Name" required=""
									value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
								<?php echo !empty($error['name']) ? $error['name'] : ''; ?>
							</div>
							<div class="form-group mb-3">
								<input class="form-control" type="email" name="email" placeholder="Your Email"
									value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>"
									required="required">
								<?php echo !empty($error['email']) ? $error['email'] : ''; ?>
							</div>
							<div class="form-group mb-3">
								<input class="form-control" type="text" name="phone" minlength="10" maxlength="12"
									placeholder="Your Phone"
									value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>"
									required="required">
								<?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
							</div>
							<div class="form-group mb-3">
								<textarea class="form-control" autocomplete="nope" name="message"
									placeholder="Enter Brief"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
								<?php echo !empty($error['message']) ? $error['message'] : ''; ?>
							</div>
							<div class="form-group">
								<button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1"
									value="Submit Now">Submit</button>
							</div>
						</form>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript" src="assets/js/plugin.js"></script>
<script type="text/javascript" src="assets/js/lozad.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js?<?php echo $date ?>"></script>


<script>
	const observer = lozad('.lozad', {
		rootMargin: '10px 0px',
		threshold: 0.1,
		enableAutoReload: true
	});
	observer.observe();
</script>