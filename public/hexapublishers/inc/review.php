	<?php
	$review = [
		"review1" => [
			"name" => "James Carter",
			"paragraph" => "Working with Hexa Publishers was awesome! They really listened to my vision and helped me turn my manuscript into something I’m proud of.",
			"image" => "review-1"
		],
		"review2" => [
			"name" => "Sarah Mitchell",
			"paragraph" => "These guys know their stuff. I had so many questions, but Hexa Publishers guided me step by step. My book is finally out in the world.",
			"image" => "review-2"
		],
		"review3" => [
			"name" => "Sandy KArel",
			"paragraph" => "Hexa Publishers provided exceptional guidance throughout the publishing process. Their attention to detail and professionalism as book publishers ensured my manuscript was publication-ready.",
			"image" => "review-3"
		],
		"review4" => [
			"name" => "Daniel Roberts",
			"paragraph" => "Choosing Hexa Publishers as our publishing partner was an excellent decision. Their comprehensive services and attention to detail demonstrate why they are trusted book publishers in the industry.",
			"image" => "review-4"
		],
	]
	?>
	<section class="lozad bg reviews" data-background-image="<?= getImagePath("assets/img/", "review-bg") ?>">
		<div class=" py-5">
			<div class="container-xl">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-5  align-self-center">
						<span class="f-24 fw-700 clr-1">Testimonials</span>
						<h2 class="fw-700 f-40">Voices of Happy Clients</h2>

					</div>
					<div class="col-lg-5 col-xl-4">
						<p class="mb-0">Behind every testimonial is a story of collaboration, commitment, and results. We take pride in creating solutions that not only meet expectations but exceed them. Explore the voices of our happy clients and see how we turn vision into lasting success.</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="slider">
							<?php foreach ($review as $reviewName => $reviewdetails): ?>
								<div class="item p-1">
									<div class="review-box blur p-4">
										<div class="row">
											<div class="review-image col-md-3">
												<img class="" alt="<?= $reviewdetails["image"] . " by " . $bname; ?>" data-lazy="<?= getImagePath("assets/img/", $reviewdetails["image"]); ?>">
											</div>
											<div class="review-cont col-md-9">
												<div class="d-flex">
													<div class="pe-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="76.5" height="57.549" viewBox="0 0 76.5 57.549">
															<path id="Path_2044" data-name="Path 2044" d="M34.492,202.04V198.4q16.274-9.365,20.09-23.749a14.125,14.125,0,0,1-7.509,2.686,12.042,12.042,0,0,1-9.517-4.551,16.586,16.586,0,0,1-3.881-11.136,16.329,16.329,0,0,1,5.1-12.221,17.366,17.366,0,0,1,12.549-4.941q7.452,0,12.459,6.286t5.007,15.64q0,13.179-10.077,23.62A38.674,38.674,0,0,1,34.492,202.04Z" transform="translate(7.707 -144.491)" fill="#1895ee" />
															<path id="Path_2045" data-name="Path 2045" d="M57.629,202.04V198.4q16.279-9.365,20.094-23.749a14.2,14.2,0,0,1-7.574,2.686,11.988,11.988,0,0,1-9.454-4.551,16.575,16.575,0,0,1-3.877-11.136,16.374,16.374,0,0,1,5.07-12.221,17.254,17.254,0,0,1,12.518-4.941,15.306,15.306,0,0,1,12.486,6.286q4.978,6.283,4.979,15.64,0,13.179-10.049,23.62A38.528,38.528,0,0,1,57.629,202.04Z" transform="translate(-56.818 -144.491)" fill="#1895ee" />
														</svg>
													</div>
													<div>
														<p><?= $reviewdetails["paragraph"]; ?> </p>
													<span class="">	<strong><?= $reviewdetails["name"]; ?></strong></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>