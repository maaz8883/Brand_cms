<?php
$service = [
	"Book Writing" => [
		"name" => "Book <br> Writing",
		"paragraph" => "Every great book begins with a powerful idea. Our expert writing team helps you shape your concept into a compelling manuscript that captures your voice and engages readers. Unlike many book publishers, we provide structured guidance, research support, and professional storytelling techniques to ensure your book stands out globally.",
	],
	"Book Publishing" => [
		"name" => "Book <br> Publishing",
		"paragraph" => "Among growing book publishers in USA, we proudly support authors nationwide and internationally, delivering professional publishing services with transparency and dedication. If you’re looking to work with reliable book publishers who prioritize quality and author success, $bname is your ideal partner.",
	],
	"Book Editing" => [
		"name" => "Book Editing / Formating",
		"paragraph" => "Our editing and formatting specialists refine your manuscript for clarity, flow, grammar, and structure while maintaining your unique voice. As experienced professional book publishers, we ensure your book meets industry standards and delivers a seamless reading experience across print and digital platforms.",
	],
	"Book Marketing" => [
		"name" => "Book <br> Marketing",
		"paragraph" => "<?= $bname;?> provides strategic marketing solutions that position your book in front of the right audience. As book publishers online, we use targeted campaigns, platform optimization, and branding strategies to expand your reach and increase discoverability. Our goal is simple: help your book gain attention, credibility, and sales momentum.",
	],
];

$result = [
	"Satisfied Clients" => ["5000+", "bg-1"],
	"Projects Completed" => ["10000+", "bg-2"],
	"Success Rate" => ["100%", "bg-2"],
	"Experts" => ["80+", "bg-1"],
];

$process = [
	'Writing & Editing' => [
		'paragraph' => "Our expert team transforms your manuscript into a polished, captivating book, keeping your voice and vision intact. Every word is refined for clarity, flow, and impact, ready to impress readers everywhere.",
		'image' => 'process-1',
	],
	'Design & Layout' => [
		'paragraph' => "We bring your book to life visually. Our designers craft eye-catching covers and layouts that resonate with readers, ensuring your book stands out in the market.",
		'image' => 'process-2',
	],
	'Publishing & Distribution' => [
		'paragraph' => "As one of the leading book publishers online, we manage ISBN registration, distribution, and platform optimization to maximize reach and impact.",
		'image' => 'process-3',
	],
	'Marketing & Promotion' => [
		'paragraph' => "Publishing is just the beginning. Our marketing team ensures your book gets noticed with strategies designed to engage the right audience and drive visibility.",
		'image' => 'process-4',
	],
]
?>

<section class="banner overflow-visible bg lozad" data-background-image="<?= getImagePath('assets/img/', 'banner'); ?>">
	<div class="overlay-light py-5">
		<div class="container-fluid pt-5">
			<div class="row justify-content-center align-items-center pt-5">
				<div class="col-md-8 text-center" >
					<h1 class="f-55 fw-700"> Book Publishers You Can Trust – Welcome to <span class="clr-1"><?= $bname; ?></span></h1>
					<p>At <?= $bname;?>, we are proud to be among the trusted book publishers dedicated to transforming manuscripts into professionally published books. Whether you're a first-time writer or an experienced author, our expert team ensures your book meets global publishing standards and reaches the right audience.</p>
					<div class="row mb-3 justify-content-center">
						<div class="col-6 col-xl-4 col-lg-6">
							<?= getModalButton("w-100", "Get Started "); ?>
						</div>
						<div class="col-6 col-xl-4 col-lg-6">
							<a type="button" href="tel:<?php echo $no ?>" class="btn w-100 btn-2" role="button"><span class="circle"></span> Call Us</a>
						</div>
					</div>
				</div>
				<div class="col-md-6" >
					<div class="my-image d-flex justify-content-center ">
                        <img class="lozad" data-src="<?= getImagePath('assets/img/', 'book-publishing') ?>"  alt="Book Publishing Services <?php echo $bname ?>">
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-gradient">
	<div class="lozad py-5 services" data-background-image="assets/img/service-left.webp , assets/img/service-right.webp">
		<div class=" container my-5">
			<div class="row clr-l justify-content-between mb-4 align-items-center">
				<div class="col-lg-5" >
					<h2 class="f-40 fw-700">Complete Publishing Solutions from Professional Book Publishers</h2>
				</div>
				<div class="col-lg-6">
					<p>At <?= $bname;?>, we go beyond traditional book publishers by offering comprehensive publishing services designed to support you at every stage of your journey. Whether you’re starting with an idea or holding a finished manuscript, our team of professional book publishers ensures your book is written, refined, published, and promoted with excellence.</p>
				</div>
			</div>
			<div class="services-slider">
				<?php foreach ($service as $serviceName => $servicedetails): ?>
					<div class="item px-2 h-auto">
						<div class="box service h-100 d-flex flex-column justify-content-between">
							<div class="">
								<h3 class="f-24 fw-700"><?= ucwords($servicedetails['name']); ?></h3>
								<div class="discription fw-semibold">
									<p><?= $servicedetails['paragraph']; ?></p>
								</div>
							</div>
							<?= getAnchorButton(str_replace(" ", "-", strtolower($serviceName)), "icon", "&#8594;") ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-xxl-5 col-lg-4 col-md-6" data-aos="fade-right" data-aos-duration="3000">
				<img class="lozad obj-cvr" alt="Book Publishers of <?php echo $bname ?>" data-src="<?php echo getImagePath('assets/img/', 'work-1') ?>">
			</div>
			<div class="col-xxl-5 col-lg-6" data-aos="fade-down" data-aos-duration="3000">
				<h2 class="f-40 fw-700">Ready to Publish Your Book? <br>Partner with Trusted Book Publishers – <?= $bname;?></h2>
				<p>Your story deserves more than just a draft; it deserves to be published, polished, and presented to the world with confidence. Whether you're a first-time author or a seasoned writer, now is the perfect time to turn your manuscript into a professionally published book. From editing and design to formatting and final launch, every step matters. Take the leap, share your voice, and let your book reach the readers who have been waiting for it. </p>
			
				<div class="row mb-5 justify-content-between align-items-center">

					<div class="col-xxl-5 col-md-4 col-8 order-2 order-md-1 px-lg-0">
						<?= getModalButton("fa-one px-2 w-100", "Get Started "); ?>
					</div>
					<div class="col-md-4 col-2 order-1 order-md-2">
						<a href='tel:<?=$no?>' class='d-flex justify-content-center mb-3'><span class='clr-1 icon-Group-15959 f-30 me-2'></span> <span class='d-none d-md-block'>Call Us At<br><span class='clr-1'><?=$no?></span></span></a>
					</div>
					<div class="col-xxl-3 col-md-4 col-2 order-3 order-md-3 px-xxl-0 ">
						
						<span>
						    <a href='javascript:;' class='d-flex chat justify-content-start'> <span class='clr-1 icon-Group-15958 f-30 me-2'></span><span class='d-none d-md-block'>24/7 Support<br><span class='clr-1'>Live Chat</span></span></a>						    
						</span>

					</div>
				</div>
			</div>
			<div class="col-xxl-2 col-lg-2" data-aos="fade-left" data-aos-duration="3000">
				<img class="lozad" data-src="<?= getImagePath('assets/img/', 'OWINJSw1'); ?>" alt="Book Publishers of <?php echo $bname ?>">
			</div>
		</div>
	</div>
</section>

<section class="lozad bg" data-background-image="<?= getImagePath("assets/img/", "numbers"); ?>">
	<div class="container py-5">
		<div class="row align-items-center row-gap-4">
			<div class="col-lg-5" data-aos="fade-right" data-aos-duration="3000">
				<span class="heading clr-1 f-24">Our Achievements</span>
				<h2 class="fw-700 f-40">Where Manuscripts Meet Professional Book Publishers</h2>
				<p>At <?= $bname;?>, our success is measured by the achievements of the authors we serve. As trusted book publishers, we’ve helped countless writers transform their ideas into professionally published, market-ready books that reach readers worldwide.

                  <br>Our team of professional book publishers takes pride in delivering excellence at every step, from flawless editing and formatting to stunning design and strategic marketing.
</p>
				<?= getModalButton("px-4", "Get Started "); ?>
			</div>
			<div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="3000">
				<div class="row">
					<?php foreach ($result as $resultName => $resultdetails): ?>
						<div class="col-6 mb-3">
							<div class="box <?= $resultdetails[1] ?> clr-l">
								<span class="heading f-55 fw-700"><?= $resultdetails[0]; ?></span>
								<p><?= $resultName; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'inc/portfolio.php'; ?>
<section class="">
	<div class="container-xl pt-4 pb-5">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-7 order-2 order-md-1" data-aos="fade-right" data-aos-duration="3000">
				<span class="heading f-24 clr-1 fw-700">
					Our Stroy
				</span>
				<h2 class="f-40 fw-700">
					Passion, Creativity, and a Mission to Empower Authors
				</h2>
				<p> Every book we publish is a reflection of our passion for storytelling. Founded with the goal of supporting authors at every stage, we have grown into trusted book publishers who help writers bring their ideas to life with professionalism. Our journey has always been about one thing: authors’ success. We believe every story matters, and every author deserves expert guidance from professional book publishers focused on achieving outstanding results.</p>
				<div class="row mb-3">
					<div class="col-6 col-xl-5">
						<?= getModalButton("w-100", "Get Started "); ?>
					</div>
					<div class="col-6 col-xl-5">
						<?= getAnchorButton("about", "btn w-100 btn-2", "About Us"); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-5 order-1 order-md-2" data-aos="fade-left" data-aos-duration="3000">
				<img class="lozad" data-src="<?= getImagePath('assets/img/', 'book-marketing'); ?>" alt="Book Marketing of <?php echo $bname ?>">
			</div>
		</div>
	</div>
</section>

<section class="pb-4">
	<div class="container-xl pb-5">
		<div class="row justify-content-center text-center">
			<div class="col-lg-10" data-aos="fade-down" data-aos-duration="3000">
				<h2 class="fw-700 f-55 text-uppercase">How Our Team Works</h2>
				<p>Our team of professional book publishers works seamlessly to guide your manuscript from concept to publication. Every step is designed with one goal in mind: your book’s success. We believe that great books are the result of collaboration, creativity, and precision, and our process reflects that philosophy.</p>
			</div>
		</div>
		<div class="row row-cols-md-2 row-gap-4 row-cols-1">
			<?php foreach ($process as $processName => $processdetails): ?>
				<div class="col" data-aos="fade-up" data-aos-duration="3000">
					<div class="box process p-4">
						<div class="title pb-3 d-flex align-items-center prce-img">
							<img class="lozad me-3" data-src="<?= getImagePath('assets/img/', $processdetails['image']); ?>" alt="Book Marketing of <?php echo $bname ?>">
							<h3 class="f-24 fw-700 mb-0"><?= $processName ?></h3>
						</div>
						<div class="discription pt-3">
							<?= $processdetails['paragraph'] ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>

<?php include 'inc/cta.php'; ?>

<?php require 'inc/review.php' ?>

<?php require 'inc/faq.php' ?>