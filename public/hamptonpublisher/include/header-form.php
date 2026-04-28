<div class="inner-banner-form">
	<div class="form-header">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-12">
				<div class="coupan">
					<h3>ACTIVATE YOUR <span>60% OFF</span></h3>
				
					<h5>COUPON NOW</h5> </div>
			</div>
			
		</div>
	</div>
	<form class="addsender" action="<?php echo $current_url ?>" method="post" >

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
		<button cite="Submit" data-hover="Submit" type="submit" name="cta1" value="submit">SEND MESSAGE</button>
	</form>
</div>