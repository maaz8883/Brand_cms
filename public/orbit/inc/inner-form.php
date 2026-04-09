<form action="<?php echo htmlspecialchars((string) ($current_url ?? ''), ENT_QUOTES, 'UTF-8'); ?>" method="post" class="row">
	<div class="form-group">
		<input type="hidden" name="domain" value="<?php echo htmlspecialchars((string) ($domainname ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="ip" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ip;} else {echo 'Unable to get location information.';}?>">
		<input type="hidden" name="city" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['city'];} else {echo 'Unable to get location information.';}?>">
		<input type="hidden" name="region" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['region'];} else {echo 'Unable to get location information.';}?>">
		<input type="hidden" name="country" value="<?php if ($ipData && $ipData['status'] === 'success') {echo $ipData['country'];} else {echo 'Unable to get location information.';}?>">
		<input type="hidden" name="url" value="<?php echo htmlspecialchars((string) ($current_url ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="domain" value="<?php echo htmlspecialchars((string) ($domainname ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="subject" value="Popup Form (<?php echo htmlspecialchars((string) ($current_url ?? ''), ENT_QUOTES, 'UTF-8'); ?>)">
		<input type="hidden" name="source" value="<?php echo htmlspecialchars((string) ($lead_source ?? ''), ENT_QUOTES, 'UTF-8'); ?>" />
		<input type="hidden" name="first_source" value="<?php echo htmlspecialchars((string) ($_SESSION['first_touch']['source'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="first_medium" value="<?php echo htmlspecialchars((string) ($_SESSION['first_touch']['medium'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="first_campaign" value="<?php echo htmlspecialchars((string) ($_SESSION['first_touch']['campaign'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="last_source" value="<?php echo htmlspecialchars((string) ($_SESSION['last_touch']['source'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="last_medium" value="<?php echo htmlspecialchars((string) ($_SESSION['last_touch']['medium'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
		<input type="hidden" name="last_campaign" value="<?php echo htmlspecialchars((string) ($_SESSION['last_touch']['campaign'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
	</div>
	<div class="form-group mb-3 col-lg col-md-4 col-sm-6"><input class="form-control" type="text" name="name"
			placeholder="Your Name" required="" value=""></div>
	<div class="form-group mb-3 col-lg col-md-4 col-sm-6"><input class="form-control" type="email"
			name="email" placeholder="Your Email" value="" required="required"></div>
	<div class="form-group mb-3 col-lg col-md-4 col-sm-6">
		<input class="form-control" type="text" name="phone" minlength="10" maxlength="14">
	</div>
	<div class="form-group mb-3 col-lg col-md-8	col-sm-6"><input class="form-control" autocomplete="nope"
			name="message" placeholder="Enter Brief" rows="4"></div>
	<div class="form-group col-lg col-md-4"><button class="btn w-100" cite="Submit"
			data-hover="Submit" type="submit" name="cta1" value="Submit Now">Submit</button></div>
</form>
