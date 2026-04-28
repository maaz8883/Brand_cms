
	<section>
		<div class="main-sec">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-sm-12 col-md-612 col-lg-5 col-12">
						<div class="main-left">
							<h2>PROFESSIONAL WRITERS IN YOUR SERVICE</h2>
							<h1>Manage Content Easily and Launch It In a Second</h1>
							<?php include 'include/main-three-btns.php';?>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-7 col-12">
						<div class="main-left-img"> <img src="images/contact.webp" class="img-fluid" alt="<?php echo $bname ?>"> </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'include/logos-section.php';?>
		<section>
			<div class="contact-form">
				<div class="container">
					<div class="contact-form-head">
						<h3>Let Us Help You Out</h3>
					</div>
					<div class="contact-form-row">
						<div class="row d-flex align-items-center">
							<div class="col-md-12 col-sm-12 col-lg-5 col-12">
								<div class="contac-form-inner">
									   <form action="<?php echo $current_url ?>" method="post">

									     <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo "Unable to get location information.";}?>">
               <input type="hidden" name="url" value='<?php echo $current_url;?>'>
               <input type="hidden" name="domain" value="<?php echo $domainname?>">
               <input type="hidden" name="subject" value="Popup Form (<?php echo $url?>)">
               <input type="hidden" name="first_source" value="<?php echo $_SESSION['first_touch']['source']; ?>">
               <input type="hidden" name="first_medium" value="<?php echo $_SESSION['first_touch']['medium']; ?>">
               <input type="hidden" name="first_campaign" value="<?php echo $_SESSION['first_touch']['campaign']; ?>">
               <input type="hidden" name="last_source" value="<?php echo $_SESSION['last_touch']['source']; ?>">
               <input type="hidden" name="last_medium" value="<?php echo $_SESSION['last_touch']['medium']; ?>">
               <input type="hidden" name="last_campaign" value="<?php echo $_SESSION['last_touch']['campaign']; ?>">




										<h3>CONTACT US</h3>
										<p>We are an internationally recognized ghostwriting, editing, and publishing agency.</p>
										<input name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
										<input name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
										<input name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
										<textarea name="message" id="" placeholder="Enter a Brief Description"><?php echo !empty($_POST['message']) ? $_POST['message'] : ''?></textarea>
                <?php echo !empty($error['message']) ? $error['message']:'';?>
										<button id="" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">SEND MESSAGE</button>
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-lg-7 col-12">
								<div class="contac-side-img"> <img src="images/contact-side.webp" class="img-fluid" alt="<?php echo $bname ?>"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		