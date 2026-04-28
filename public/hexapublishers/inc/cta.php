<section class="cta lozad bg-d clr-l py-sm-5 py-4" data-background-image="assets/img/cta-left.webp , assets/img/cta-right.webp">
	<div class="container-md px-sm-5 px-4 px-md-0 py-5">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-center">
				<h2 class="f-40 fw-700 mb-3">Start Your Project</h2>
			</div>
		</div>
		<form action="<?php echo $post_url; ?>" method="post" class="row">
			<div class="col-lg-3 mb-3 col-sm-6 form-group">
				<input type="text" name="name" class="form-control" placeholder="Name" required="" autocomplete="name"
					value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
				<?php echo !empty($error['name']) ? $error['name'] : ''; ?>
			</div>
			<div class="col-lg-3 mb-3 col-sm-6 form-group">
				<input type="email" name="email" class="form-control" placeholder="Email" required="required" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>"  autocomplete="email">
			<?php echo !empty($error['email']) ? $error['email'] : ''; ?>
			</div>
			<div class="col-lg-3 mb-3 form-group">
				<input type="tel" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>" required="required" autocomplete="tel">
				<?php echo !empty($error['phone']) ? $error['phone'] : ''; ?>
			</div>
			<div class="col-lg-3 mb-3 form-group">
				<button type="submit" class="w-100 subbtn" name="cta1" value="Submit Now">Get Started</button>
				<input type="hidden" name="domain" value="<?php echo $domainname ?>">
				<input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
				<input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
				<input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
				<input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
				<input type="hidden" name="url" value='<?php echo $current_url ?>'>
				<input type="hidden" name="domain" value="<?php echo $domainname ?>">
				<input type="hidden" name="subject" value="Cta Form (<?php echo $current_url ?>)">
				<input type="hidden" name="source" value="<?php echo $lead_source ?>">
			</div>
		</form>
	</div>
</section>