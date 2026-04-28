<section class="banner bg lozad" data-background-image="<?= getImagePath('assets/img/','contact-bg')?>">
	<div class="overlay-light py-5">
		<div class="container-fluid pt-5">
			<div class="row justify-content-center text-center align-items-center pt-5">
				<div class="col-md-7" data-aos="fade-down" data-aos-duration="3000">
					<span class="clr-1 fw-700 f-24">Contact Us</span>
					<h1 class="f-55 fw-700">We Look Forward to A Successful Collaboration</h1>
					<p>Are you ready to turn your manuscript into a published masterpiece? Our dedicated team is here to listen to your ideas, understand your goals as an author, and provide a tailored publishing plan to bring your vision to life. Connect with us today to schedule a consultation and take the next step toward sharing your book with the world.</p>
					<div class="row mb-3 justify-content-center">
						<div class="col-6 col-xl-5">
							<?= getModalButton("w-100", "Get Started "); ?>
						</div>
						<div class="col-6 col-xl-5">
							<a href="javascript:void(0);" class="btn w-100 btn-2 chat"><span class="circle"></span> Live Chat</a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>



<section class="contact-box text-white">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-xl-10  p-4 p-lg-5">
				<div class="mb-3 text-center text-white">
					<h2 class="f-40 fw-700 ">Meet Your Dedicated Publishing Team</h2>
					<p>Allow us to introduce you to the passionate professionals behind our successful book projects</p>
				</div>
			</div>
		</div>
		<div class="row">

                <div class="col-lg-12">

                    <form action="<?php echo $post_url; ?>" method="POST" class="overflow-hidden">
  
                        <div class="row row-gap-4 align-items-center"> 

                            <div class="col-md-12">

                                <div class="wrap-2 mt-30">

                                    <h3 class="question pb-3 text-white">I'm Looking To Avail </h3>

                                    <div class="radio-toolbar">

                                        <input type="checkbox" id="radio1" name="radios" value="Book Publishing" checked="">

                                        <label for="radio1">Book Publishing</label>

                                        <input type="checkbox" id="radio2" name="radios" value="Author Website">

                                        <label for="radio2">Author Website</label>

                                        <input type="checkbox" id="radio3" name="radios" value="Book Marketing">

                                        <label for="radio3">Book Marketing</label>

                                        <input type="checkbox" id="radio4" name="radios" value="Audio Book">

                                        <label for="radio4">Audio Book</label>

                                        <input type="checkbox" id="radio5" name="radios" value="Book Cover">

                                        <label for="radio5">Book Cover</label>

                                        <input type="checkbox" id="radio6" name="radios" value="Book Video">

                                        <label for="radio6">Book Video</label>

                                        <input type="checkbox" id="radio7" name="radios" value="Book Editing">

                                        <label for="radio7">Book Editing</label>

                                        <input type="checkbox" id="radio8" name="radios" value="Book Writing">

                                        <label for="radio8">Book Writing</label>

                                        <input type="checkbox" id="radio9" name="radios" value="Illustration">

                                        <label for="radio9">Illustration</label>

                                        <input type="checkbox" id="radio10" name="radios" value="Other">

                                        <label for="radio10">Other</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-12">

                                <h3 class="question text-white">A Little About You

                                </h3>

                            </div>

                            <div class="col-md-4 form-group">

                                <input class="w-100 bg-transparent border-bottom pb-3 form-control border-0" type="text" name="name" placeholder="What’s Your Name?" required="" autocomplete="name" value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
		                        <?php echo !empty($error['name']) ? $error['name'] : ''; ?>

                            </div>

                            <div class="col-md-4 form-group">

                                <input class="w-100 bg-transparent border-bottom pb-3 form-control border-0" type="email" name="email" placeholder="What’s Your Email?" required="" autocomplete="email" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                                <?php echo !empty($error['email']) ? $error['email'] : ''; ?>

                            </div>

                            <div class="col-md-4 form-group">

                                <input class="w-100 bg-transparent border-bottom pb-3 form-control border-0" type="tel" name="phone" placeholder="What’s Your Phone?" required="" autocomplete="tel" value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>">
                                <?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>

                            </div>
 
                            <div class="col-md-12 form-group mb-5">

                                <input class="w-100 bg-transparent border-bottom pb-3 form-control border-0" type="text" name="message" placeholder="Tell us about your project :)" required="" value="<?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?>">
		                        <?php echo !empty($error['message']) ? $error['message'] : ''; ?>
                                
                                

                            </div>  

                            <div class="col-lg-2 form-group">
                                <button class="btn subbtn w-100" cite="Submit" data-hover="Submit" type="submit" name="contact" value="Submit Now">Submit</button>

                                

                                <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                                <input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
                                <input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
                                <input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
                                <input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
                                <input type="hidden" name="url" value="<?php echo $current_url; ?>">
                                <input type="hidden" name="domain" value="<?php echo $domainname ?>">
                                <input type="hidden" name="subject" value="Contact Form (<?php echo $current_url ?>)">
                                <input type="hidden" name="source" value="<?php echo $lead_source ?>">

                            </div> 
 
                            <div class="col-lg-10 fw-600">

                                <div class="row justify-content-center justify-content-md-between align-items-center row-gap-3">

                                    <div class="col-lg-4 col-md-3 col-sm-6">

                                        <a href="tel:<?= $no;?>" class="d-flex align-items-center justify-content-md-center column-gap-3" aria-label="Call Us now to discuss you project">

                                           <img loading="lazy" alt="<?= $bname;?>" class="lozad" src="assets/img/telephone.webp">

                                            <div class="f-14">
                                                <span>Call Us<br>
                                                <?= $no;?>
                                                </span>
                                            </div>
                                        </a>
 
                                    </div> 

                                    <div class="col-lg-4 col-md-5 col-sm-6 ">

                                        <a href="mailto:<?= $cta_email;?>" class="d-flex align-items-center justify-content-md-center justify-content-lg-start column-gap-3" aria-label="Email us to discuss you project">

                                           <img loading="lazy" alt="<?= $bname;?>" class="lozad" src="assets/img/mail.webp">

                                            <div class="f-14">
                                                <span>Write to Us <br>
                                                <?= $cta_email;?>
                                                </span>
                                            </div>
                                        </a>

                                    </div> 

                                    <div class="col-md-4"> 

                                        <div class="d-flex align-items-center column-gap-3" aria-label="Find us at this address">
                                            <img loading="lazy" alt="<?= $bname;?>" class="lozad" src="assets/img/address.webp">
                                            <div class="f-14">
                                                <span>Address<br>
                                                    <?= $add?>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>
	</div>
</section>