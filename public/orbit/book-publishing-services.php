
<?php

require_once __DIR__ . '/inc/orbit-api-service.php';

$orbitServiceData = orbitGetParentServices(ORBIT_BRAND_SLUG);
$listUrl = $orbitServiceData['list_url'];
$orbitParentServices = $orbitServiceData['items'];
?>


<section class=" main banner lozad bg position-relative z-3" data-background-image="assets/img/book-publishing.webp">
	<div class="overlay position-relative py-5 z-3">
		<img class="lozad sub-ban-left" alt="Book Publishing servcies by <?=$bname; ?>" data-src="assets/img/publishing-before.webp">
		<!-- <img class="lozad sub-ban-right" alt="Book Publishing servcies by <?=$bname; ?>" data-src="assets/img/publishing-after.webp"> -->
		<div class="container-lg py-md-5 py-4 ">
			<div class="row justify-content-center text-center py-5">
				<div class="col-xxl-8 col-lg-9 col-md-11 col-12 pt-lg-5 ">
					<h1 class="f-55 c fw-700 mt-4 clr-1">Searching for  <span class="bg-2 clr-l">Book Publishing Services</span> You Can Actually Trust? Your Search Ends Here</h1>
					<p class=" fw-600">Most manuscripts never make it to print. Don't let yours be one of them. Our professional book publishing services give your work the expert attention it deserves. Let’s make it happen right away.</p>
				</div>
				<div class="col-lg-11 col-xl-10 col-12 pt-4">
					<?php include('inc/inner-form.php');?>
				</div>
			</div>
		</div>

	</div>
</section>
<?php include('inc/platform.php'); ?>
<section class="pt-md-4 pb-5">
	<div class="sub-services">
		<div class="container-lg">
			<div class="row text-center">
				<div class="col-12">
					<h2 class="f-40 clr-1 fw-700">One Platform - Every Format: Explore Our Complete Book Publishing Services</h2>
					<p class="f-18 fw-500">No two books are alike. And neither are their readers. Did you know hardcover books still outsell ebooks in non-fiction, while digital formats dominate fiction? That's why our professional book publishing services are built around your book's unique needs. Whether you're pursuing self-publishing services, traditional print, or digital formats, our expert book publishers in USA have you covered; every format, every genre, every goal.</p>
				</div>
			</div>
			<div class="col-12 ">
				<ul class="nav nav-pills mb-3 justify-content-center row-gap-2" id="pills-tab" role="tablist">
					<li class="nav-item " role="presentation"> <button class="nav-link active" id="pills-audio-dev-tab"
							data-bs-toggle="pill" data-bs-target="#pills-audio-dev" type="button" role="tab"
							aria-controls="pills-audio-dev" aria-selected="true">
							<p class="mb-0">TRADITIONAL PUBLISHING</p>
						</button> </li>
					<li class="nav-item " role="presentation"> <button class="nav-link" id="pills-slef-tab"
							data-bs-toggle="pill" data-bs-target="#pills-slef" type="button" role="tab"
							aria-controls="pills-slef" aria-selected="false" tabindex="-1">
							<p class="mb-0">SELF PUBLISHINGg</p>
						</button> </li>
					<li class="nav-item " role="presentation"> <button class="nav-link" id="pills-digital-tab"
							data-bs-toggle="pill" data-bs-target="#pills-digital" type="button" role="tab"
							aria-controls="pills-digital" aria-selected="false" tabindex="-1">
							<p class="mb-0">DIGITAL PUBLISHING</p>
						</button> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="tab-content container-lg pb-5" id="pills-tabContent">
		<div class="tab-pane fade active show" id="pills-audio-dev" role="tabpanel"
			aria-labelledby="pills-audio-dev-tab">
			<div class="row justify-content-between align-items-center row-gap-4">
				<div class="col-md-7 mt-4 mt-md-0 text-center text-md-start ">
					<h3 class=" f-40 clr-2 fw-700 mb-3">Traditional <span class="bg-2 clr-l">Book Publishing</span>Services </h3>
					<p>Why do only a small number of manuscripts land traditional publishing deals? Because most authors go in unprepared. Our professional book publishing services change that. Our expert consultants connect you with top publishing houses, ensuring your manuscript meets industry-leading standards. Perfect for authors who want credibility, mass-market distribution, and the recognition that only traditional book publishers can deliver.</p>
					<ul class="c-list list-unstyled row row-cols-2">
						<li>Professional Writers</li>
						<li>In-depth Research</li>
						<li>Expert Editing</li>
						<li>Literary Agent Assistance</li>
						<li>Time Management</li>
						<li>Structuring & Organization</li>
						<li>Publisher Submissions</li>
						<li>High-Quality Standards</li>
					</ul> <button class="" data-bs-toggle="modal"
							data-bs-target="#quote">Get Started</button>
				</div>
				<div class="col-xl-5 col-md-5 ">
					<div class="service-image"> <img class="lozad" alt="Audio Book Service by <?=$bname; ?>"
							data-src="assets/img/audible-publishing-side-2.webp"> </div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade row" id="pills-slef" role="tabpanel" aria-labelledby="pills-slef-tab">
			<div class="row justify-content-between align-items-center row-gap-4">
				<div class="col-md-7 mt-4 mt-md-0 text-center text-md-start ">
					<h3 class=" f-40 clr-2 fw-700 mb-3"> Self-Publishing Services Designed for  <span class="bg-2 clr-l">Independent Authors</span></h3>
					<p>Why wait for a traditional publisher to say yes? Our self-publishing services put you in the driver's seat, giving you full control over your book, your brand, and your earnings. From formatting the manuscript to cover design and global distribution and book marketing, our professional book publishers handle every detail. Thousands of authors across the USA have trusted <?php echo $bname?> to help them publish independently, confidently, and successfully on their own terms.</p>
					<ul class="c-list list-unstyled row row-cols-2">
                       <li>Full Creative Control</li>
                      <li>100% Royalties Retained</li>
                      <li>ISBN & Copyright Assistance</li>
                      <li>Professional Cover Design</li>
                      <li>Interior Formatting</li>
                      <li>Global Distribution</li>
                      <li>Marketing Strategy Support</li>
                      <li>Author Website Integration</li>
                      <li>Ultimate Success</li>
					</ul> <button class="" data-bs-toggle="modal"
							data-bs-target="#quote">Get Started</button>
				</div>
				<div class="col-xl-5 col-md-5 ">
					<div class="service-image"> <img class="lozad" alt="Self Publishing Services by <?=$bname; ?>"
							data-src="assets/img/self-side.webp" >
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade row" id="pills-digital" role="tabpanel" aria-labelledby="pills-digital-tab">
			<div class="row justify-content-between align-items-center row-gap-4">
				<div class="col-md-7 mt-4 mt-md-0 text-center text-md-start ">
					<h3 class=" f-40 clr-2 fw-700 mb-3"> Digital Book  <span class="bg-2 clr-l">Publishing Services</span> That Reach Readers Everywhere</h3>
					<p>Readers today consume books on phones, tablets, and smart speakers. If your book is not available digitally, you are leaving a massive audience behind. Our self-publishing services include powerful digital publishing solutions designed to put your book exactly where modern readers are looking.</p>
					<ul class="c-list list-unstyled row row-cols-2">
                    <li>eBook Formatting & Conversion</li>
                      <li>Audiobook Production</li>
                      <li>Distribution on Amazon, Apple, and More</li>
                      <li>Fast Turnaround Time</li>
                      <li>Mobile-Optimized Design</li>
                      <li>DRM Protection & File Security</li>
                      <li>Royalty Reporting Tools</li>
                      <li>Multi-Platform Marketing Support</li>
					</ul> 
					<button class="" data-bs-toggle="modal"
							data-bs-target="#quote">Get Started</button>
						
				</div>
				<div class="col-xl-5 col-md-5 ">
					<div class="service-image"> <img class="lozad"
							alt="Digitalized Publishing Service by <?=$bname; ?>"
							data-src="assets/img/digital-side.webp" > </div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc/cta2.php'); ?>
<section class="text-center pt-5">
	<div class="container-xl">
		<div class="row">
			<div class="col-12">
				<h2 class="f-40 clr-1 fw-700">Why Thousands of Authors Trust Orbit With Their   <span class="clr-l bg-2">Book Publishing</span>
				</h2>
				<p class="f-20 my-4">Because great books deserve more than basic publishing, our professional book publishing services are designed to support authors at every step, from first draft to long-term publishing success.</p>
			</div>
		</div>
		<div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center">
			<div class="col mb-4">
				<div class="box lozad pt-4 px-4 pb-5" data-background-image="assets/img/box-bg.webp">
					<div class="top-tape"></div>
					<h3 class="f-24 clr-2 fw-600">Expert Collaboration</h3>
					<p>Hire a professional book publisher and gain access to a full creative team, writers, editors, designers, and marketers, all working in sync to bring your manuscript to its fullest potential.</p>
				</div>
			</div>
			<div class="col mb-4">
				<div class="box lozad pt-4 px-4 pb-5" data-background-image="assets/img/box-bg.webp">
					<div class="top-tape"></div>
					<h3 class="f-24 clr-2 fw-600"> Customized Publishing</h3>
					<p>Publishing without a strategy kills great books. Our self-publishing services deliver fully customized strategies built around your specific genre, audience, and vision, so every decision drives quality, reach, and lasting impact.</p>
				</div>
			</div>
			<div class="col mb-4">
				<div class="box lozad pt-4 px-4 pb-5" data-background-image="assets/img/box-bg.webp">
					<div class="top-tape"></div>
					<h3 class="f-24 clr-2 fw-600">Market-Ready Content</h3>
					<p>Our professional book publishers shape every detail, structure, storyline, and cover design into a market-ready package engineered to help your book rise above the noise and reach real readers.
					</p>
				</div>
			</div>
			<div class="col mb-4">
				<div class="box lozad pt-4 px-4 pb-5" data-background-image="assets/img/box-bg.webp">
					<div class="top-tape"></div>
					<h3 class="f-24 clr-2 fw-600">Ongoing Support</h3>
					<p>We're in it for the long run. From launch day forward, our book publishers online offer dedicated support to help you expand your readership, grow your brand, and keep your momentum alive.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc/suit-us.php'); ?>
<section class="cta clr-l">
		<div class="container-xl">
			<div class="row text-center text-md-start align-items-center">
				<div class="col-lg-7 col-md-8  pt-5 pb-4">
					<h2 class="f-40 fw-700 clr-2">Real <span class="bg-2 clr-l">Book Publishing Services</span> That Get Your Book on Every Major Platform
					</h2>
					<p>Too many authors give up because publishing is a nerve-racking process. We, at <?php echo $bname?>, exist to change that. As trusted book publishers in USA, we offer complete professional book publishing services, handling everything from cover design and formatting to ISBN registration and global distribution. Our book publisher experts work across all genres, making sure your book hits the highest standards before it ever goes live. From self-publishing services to traditional publishing options, we manage the hard work so you don't have to. Get your book on Amazon, Barnes & Noble, and beyond, the right way.</p>
					<div class="row ">
						<div class="col-lg-4 col-md-6 col-9"><button class="w-100 mb-3" data-bs-toggle="modal"
								data-bs-target="#quote">Get Started</button></div>
						<div class="col-lg-6 col-md-6 col-3 "><a href="tel:<?= $no;?>" aria-label="Call Us Now "
								class=" icona text-start d-flex align-items-center justify-content-start"><span class="icon-phone me-2 icon"></span><span class="d-none d-md-block"><span class="clr-l fw-700">Call Us Now</span><br><span class="fw-700"><?= $no;?></span></span></a></div>
					</div>
				</div>
				<div class="col-lg-5 col-md-4"><img class="lozad publishing-side"
						data-src="assets/img/publishing-side.webp" alt="cta-img" ></div>
			</div>
		</div>
</section>
<?php include('inc/platform2.php'); ?>
<section class="py-md-5">
	<div class="container-lg">
		<div class="row justify-content-between align-items-center row-gap-4">
			<div class="col-xl-5 col-md-5 ">
				<div class="service-image"> <img class="lozad" alt="Book Publishing Service by <?=$bname; ?>"
						data-src="assets/img/book-writing-side-2.webp"> </div>
			</div>
			<div class="col-md-7 mt-4 mt-md-0 text-center text-md-start ">
				<h3 class=" f-40 clr-1 fw-700 mb-3"><span class="bg-2 clr-l">Book Publishing Services </span> Designed Around Your Goals and Your Voice</h3>
				<p>Every author wants to tell a different story, and every story deserves a publishing plan built around it. <?php echo $bname?> offers professional book publishing services customized to match your unique voice, target audience, and long-term goals. Our skilled book publishers and editors cover all genres, ensuring every book is professionally crafted, platform-ready, and built to reach real readers. As one of the leading book publishers in USA, we bring the expertise, the tools, and the dedication to help you publish with confidence, creativity, and excellence.</p>
				<div class="row ">
					<div class="col-lg-4 col-md-5 col-9">
						<button class="w-100 mb-3" data-bs-toggle="modal" data-bs-target="#quote">Get Started</button>
					</div>
					<div class="col-lg-8 col-md-7 col-3 "><a href="tel:<?= $no; ?>" aria-label="Call Us now to discuss you project"
							class="icona d-flex align-items-center justify-content-start"><span
								class="icon-phone me-2 icon"></span><span class="d-none d-md-block"><span
									class="clr-2 fw-700">Call Now</span><br><span
									class="fw-700"><?= $no; ?></span></span></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="pt-4">
	<div class="container-xl">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h2 class="f-40 clr-1 fw-700">How Our Book Publishing Services Work - 4 Simple Clear Steps</h2>
				<p class="f-20 fw-500">We believe great book publishing services should be simple, smooth, and stress-free. Our expert book publishers keep you informed every step of the way, from manuscript to a fully published book live on Amazon, Barnes & Noble, Google Books, and every major platform worldwide.</p>
			</div>
		</div>
		<div class="row align-items-center text-center text-auto">
			<div class="col-md-4 text-md-end">
				<div class="row">
					<div class="col-md-12 col-6 ">
						<span class="heading f-40 fw-700 clr-1 d-block">01</span>
						<h3 class="f-20 clr-2 fw-600">Manuscript Submission</h3>
						<p class="f-20 fw-500">Send us your manuscript and officially start your publishing journey.</p>
					</div>
					<div class="col-md-12 col-6">
						<span class="heading f-40 fw-700 clr-1 mt-lg-5 d-block">02</span>
						<h3 class="f-20 clr-2 fw-600">Professional Editing</h3>
						<p class="f-20 fw-500">We carefully refine, format, and polish every page to perfection.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4  text-center d-none d-sm-block">
				<div class="center-icon"><img class="lozad" data-src="assets/img/logo.png"></div>
			</div>
			<div class="col-md-4 text-md-start">
				<div class="row">
					<div class="col-md-12 col-6">
						<span class="heading f-40 fw-700 clr-1 d-block">03</span>
						<h3 class="f-20 clr-2 fw-600">Design & Setup</h3>
						<p class="f-20 fw-500">Cover design, interior layout, and ISBN registration expertly taken care of.</p>
					</div>
					<div class="col-md-12 col-6">
						<span class="heading f-40 fw-700 clr-1 mt-lg-5 d-block">04</span>
						<h3 class="f-20 clr-2 fw-600">Publish & Distribute</h3>
						<p class="f-20 fw-500">Your finished book launches live across all major global platforms.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="orbit-location-section">
	<div class="container-lg">
		<div class="orbit-location-head">
			<h2 class="f-40 clr-1 fw-700 mb-3">We are in your hometown now!</h2>
			<p class="f-18 fw-500 mb-0">
				We are extending our services to serve you better in your own hometown. Below is a list of geographic locations where we currently offer our services.
				If you don&rsquo;t see your state listed, please contact us &mdash; we may still be able to assist you.
			</p>
		</div>
		<?php if ($orbitParentServices === []) { ?>
			<p class="text-center text-muted mt-4 mb-0">Locations could not be loaded from the API, or no parent services exist yet. Ensure <code><?= htmlspecialchars($listUrl, ENT_QUOTES, 'UTF-8'); ?></code> returns data.</p>
		<?php } else { ?>
		<div class="orbit-state-grid" role="list">
			<?php foreach ($orbitParentServices as $node) {
				$title = $node['title'] ?? '';
				$slug = $node['slug'] ?? '';
				if ($slug === '') {
					continue;
				}
				$servicePageHref = rtrim($base_url, '/') . '/' . implode('/', array_map('rawurlencode', explode('/', trim((string) $slug, '/'))));
				?>
			<a class="orbit-state-pill btn" role="listitem" href="<?= htmlspecialchars($servicePageHref, ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars(orbitSafeUpper((string) $title), ENT_QUOTES, 'UTF-8'); ?></a>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</section>


<?php include('inc/portfolio.php'); ?>
<?php require 'inc/review.php' ?>
<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="f-48 fw-700">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion2">

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What do your book publishing services include?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body">
                        Our book publishing services cover everything, from editing, formatting, cover design, ISBN registration, and global distribution. We handle it all so you don't have to.
                      </div>
                    </div>
                  </div>
                
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is the difference between self-publishing and traditional publishing?
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body">
                        We offer both self-publishing services and traditional publishing. Our expert book publishers help you choose the right path based on your goals and audience.
                      </div>
                    </div>
                  </div>
                
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do I hire a professional book publisher at Orbit?
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body">
                        Simply share your manuscript with us. Our professional book publishers review your goals and build a customized publishing plan tailored specifically to your book.
                      </div>
                    </div>
                  </div>
                
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How long do your book publishing services take?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body">
                        Our professional book publishing process typically takes 4 to 12 weeks. We keep you informed at every stage so there are no surprises.
                      </div>
                    </div>
                  </div>
                
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Which platforms do you distribute books on?
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion2">
                      <div class="accordion-body">
                        As trusted book publishers in USA, we distribute your book on Amazon, Barnes & Noble, Google Books, Apple Books, and all major global platforms.
                      </div>
                    </div>
                  </div>
                
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-image"><img class="lozad" alt="Book Publishing Service by <?php echo $bname?>" data-src="assets/img/book-writing-side-2.webp"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('inc/package.php'); ?>
