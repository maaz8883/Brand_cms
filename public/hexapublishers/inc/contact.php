<form action="<?php echo $post_url; ?>" method="post" class="row overflow-hidden">
	<div class="form-group mb-3 col-md-6">
		<input class="form-control" type="text" name="name" placeholder="Your Name" required="required" autocomplete="name"
			value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
		<?php echo !empty($error['name']) ? $error['name'] : ''; ?>
	</div>
	<div class="form-group mb-3 col-md-6 ">
		<input class="form-control" type="tel" name="phone" minlength="10" maxlength="12" placeholder="Your Phone" value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required="required" autocomplete="tel">
		<?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>

	</div>
	<div class="form-group mb-3 col-12">
		<input class="form-control" type="email" name="email" placeholder="Your Email" value="" required="required" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>" autocomplete="email">
		<?php echo !empty($error['email']) ? $error['email'] : ''; ?>
	</div>
	<!--<div class="form-group mb-3 col-12">-->
	<!--	<select name="services[]" class="form-control" id="serviceSelect">-->
	<!--		<option value="not-selected" disabled selected>Select Services</option>-->
	<!--		<option value="Book Publishing">Book Publishing</option>-->
	<!--		<option value="Book Editing">Book Editing</option>-->
	<!--		<option value="Book Marketing">Book Marketing</option>-->
	<!--		<option value="Book Writing">Book Writing</option>-->
	<!--		<option value="Author Website">Author Website</option>-->
	<!--		<option value="Audio Book">Audio Book</option>-->
	<!--		<option value="Book Cover">Book Cover</option>-->
	<!--		<option value="Book Video">Book Video</option>-->
	<!--		<option value="Illustration">Illustration</option>-->
	<!--	</select>-->
	<!--</div>-->
	<div class="form-group mb-3 col-12">
		<textarea class="form-control" autocomplete="off" name="message" placeholder="Enter Brief" rows="3"><?php echo !empty($_POST['message']) ? $_POST['message'] : '' ?></textarea>
		<?php echo !empty($error['message']) ? $error['message'] : ''; ?>
	</div>
	<div class="form-group col-sm-4 col-6">
		<button class="btn subbtn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="Submit Now">Get A Quote</button>
	</div>
	<div class="form-group">
		<input type="hidden" name="domain" value="<?php echo $domainname ?>">
		<input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
		<input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
		<input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
		<input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
		<input type="hidden" name="url" value='<?php echo $current_url ?>'>
		<input type="hidden" name="domain" value="<?php echo $domainname ?>">
		<input type="hidden" name="subject" value="Footer Form (<?php echo $current_url ?>)">
		<input type="hidden" name="source" value="<?php echo $lead_source ?>" />
	</div>
</form>