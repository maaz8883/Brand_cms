<section>
	<div class="logos-sec">
		<div class="container">
			<div class="logos-carousel-slider">
				<div class="owl-carousel">
					<div class="item"> <img src="images/1-01.png" class="img-fluid" alt="<?php echo $bname ?>"> </div>
					<div class="item"> <img src="images/2-01.png" class="img-fluid" alt="<?php echo $bname ?>"> </div>
					<div class="item"> <img src="images/3-01.png" class="img-fluid" alt="<?php echo $bname ?>"> </div>
					<div class="item"> <img src="images/4-01.png" class="img-fluid" alt="<?php echo $bname ?>"> </div>
					<div class="item"> <img src="images/5-01.png" class="img-fluid" alt="<?php echo $bname ?>"> </div>
				</div>
			</div>
			<div class="logos-contact">
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



					<div class="logo-contact-sec">
						<div class="logo-contact-name">
							<input  name="name" placeholder="Enter your name" type="text" required 
                  value="<?php echo !empty($_POST['name']) ? $_POST['name'] : ''?>">
               <?php echo !empty($error['name']) ? $error['name']:'';?>
						</div>
						<div class="logo-contact-email">
							<input name="email" placeholder="Enter your Email" type="email" required value="<?php echo !empty($_POST['email']) ? $_POST['email'] : ''?>">
               <?php echo !empty($error['email']) ? $error['email']:'';?>
						</div>
						<div class="logo-contact-phone">
							<input name="phone" placeholder="Enter your phone number" type="tel"
                  value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : ''?>"required >
				<?php echo !empty($error['phone']) ? $error['phone']:'';?>
						</div>
						<div class="logo-contact-button">
							<button cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">Let's Start</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>