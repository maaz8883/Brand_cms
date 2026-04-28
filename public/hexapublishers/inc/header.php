<header class="py-3  ">
	<div class="container-xxl">
		<div class="row  align-items-center">
			<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6 order-1">
				<a href="<?php echo $url ?>" class="logo d-block"><img class="lozad" alt="<?php echo $bname ?>" data-src="<?php echo $logo ?>"></a>
			</div>
			<div class="col-lg-6 order-3 order-lg-2">
				<ul class="list-unstyled d-lg-flex mb-0 align-items-center justify-content-center my-pages nav-bar fw-semibold">
					<li class="d-lg-none py-4">
						<div class="row align-items-center">
							<div class="col-6 ">
								<a href="<?php echo $url ?>" class="logo d-block"><img class="lozad" alt="<?php echo $bname ?>" data-src="<?php echo $logo ?>"></a>
							</div>
							<div class="col-6">
								<div class="row align-items-center justify-content-end">

									<div class="col-md-2 col-4 d-lg-none">
										<a href="tel:<?php echo $no ?>" class="icon "><span class="icon-Group-15957"></span> </a>
									</div>
									<div class="col-md-2 nav-open col-4 d-lg-none">
										<span class="icon ">X</span>
									</div>

								</div>
							</div>
						</div>
					</li>
					<li class="px-lg-2">
						<a href="<?= $base_url; ?>">
							Home
						</a>
					</li>

					<li class="px-lg-2 nav-services menu-item-has-children">
						<span>
							<a href="javascript:void(0)">
								Services
							</a>
						</span>


						<ul class="submenu">
							<li class="">
								<span>
									<img data-src="<?= getImagePath('assets/img/', 'website-development') ?>" class="attachment-thumbnail size-thumbnail ls-is-cached lozad" alt="Book Publishing of <?php echo $bname ?>" height="48" width="48">Book Publishing
								</span>
								<div class="submenu-services">
									<a href="book-publishing">Book Publishing</a>
									<a href="author-website">Author Website</a>
								</div>
							</li>
							<li class="">
								<span>
									<img data-src="<?= getImagePath('assets/img/', 'mobile-application') ?>" class="attachment-thumbnail size-thumbnail lozad" alt="Book Publishing of <?php echo $bname ?>" height="48" width="48"> Book Marketing
								</span>
								<div class="submenu-services">
									<a href="book-marketing">Book Marketing</a>
									<a href="audio-book">Audio Book</a>

								</div>
							</li>
							<li class="">
								<span>
									<img data-src="<?= getImagePath('assets/img/', 'branding') ?>" class="attachment-thumbnail size-thumbnail lozad" alt="Branding of <?php echo $bname ?>" height="48" width="26"> Book Design
								</span>
								<div class="submenu-services">
									<a href="book-cover">Book Cover</a>
									<a href="book-video">Book Video</a>
									<a href="illustration">Book Illustration</a>
								</div>
							</li>
							<li class="mt-lg-4">
								<span>
									<img data-src="<?= getImagePath('assets/img/', 'content-icon') ?>" class="attachment-thumbnail size-thumbnail lozad" alt="content-icon of <?php echo $bname ?>" height="48" width="26"> Book Editing
								</span>
								<div class="submenu-services">
									<a href="book-editing">Book Editing</a>
									<a href="book-writing">Book writing</a>

								</div>
							</li>
						</ul>
					</li>

					<li class="px-lg-2">
						<a href="case-studies">
							Case Studies
						</a>
					</li>
					<li class="px-lg-2 ">
						<a href="about">
							About Us
						</a>
					</li>
					<li class="px-lg-2">
						<a href="contact-us">
							Contact Us
						</a>
					</li>
					<li class="px-lg-2">
						<a href="blogs">
							Blog
						</a>
					</li>
					<li class="d-lg-none">
						<span class="f-24 fw-700 mb-4 d-block">Contact</span>
						<p class="mb-2"><?= $add; ?></p>
						<a href="tel:<?php echo $no ?>" class="mb-2 d-block"><span class="me-4">Call Us:</span> <span><?php echo $no ?></span></a>
						<a href="mailto:info@<?= $domainname; ?>" class="mb-4 d-block"><span class="me-3">Email Us:</span> <span>info@<?= $domainname; ?></span></a>
					</li>
					<li class="d-lg-none">
						<ul class="list-unstyled d-flex mb-0">
							<li class="pe-2">
								<a href="" target="_blank"><span class="icon icon-Path-39336"></span></a>
							</li>
							<li class="pe-2">
								<a href="" target="_blank"><span class="icon icon-Group-15960"></span></a>
							</li>
							<li class="pe-2">
								<a href="" target="_blank"><span class="icon icon-Group-15961"></span></a>
							</li>
							<li class="pe-2">
								<a href="" target="_blank"><span class="icon icon-Group-15962"></span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class=" col-lg-4 col-md-6 col-6 order-2 order-lg-3">
				<div class="row align-items-center justify-content-end">
					<div class="px-0 col-md-6 d-none d-lg-block text-end fw-semibold">
						<a href="tel:<?php echo $no ?>" class=" "><img class="lozad" data-src="<?= getImagePath('assets/img/', 'us-flag') ?>" alt="US-flag of <?php echo $bname ?>"> <?php echo $no ?></a>
					</div>
					<div class="col-md-2 col-sm-3 col-4 d-lg-none">
						<a href="tel:<?php echo $no ?>" class="icon "><span class="icon-Group-15957"></span> </a>
					</div>
					<div class="col-md-2 col-sm-3 nav-open col-4 d-lg-none">
						<span class="icon icon-Group-6884"></span>
					</div>
					<div class="col-sm-6 d-none d-sm-block">
						<button class="w-100" type="button" data-bs-toggle="modal" data-bs-target="#quote">Get Started</button>
					</div>
				</div>
			</div>

		</div>
	</div>

	</div>
	</div>
	</div>
</header>
