<form action="<?php echo $post_url; ?>" method="post" class="row">
							<div class="form-group">
								<input type="hidden" name="domain" value="<?php echo $domainname ?>">
								<input type="hidden" name="ip" value="<?php echo $geoplugin->ip ?>">
								<input type="hidden" name="city" value="<?php echo $geoplugin->city ?>">
								<input type="hidden" name="region" value="<?php echo $geoplugin->region ?>">
								<input type="hidden" name="country" value="<?php echo $geoplugin->countryName ?>">
								<input type="hidden" name="url" value='<?php
								if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
									$url = "https://";
								else
									$url = "http://";
								// Append the host(domain name, ip) to the URL.   
								$url .= $_SERVER['HTTP_HOST'];

								// Append the requested resource location to the URL   
								$url .= $_SERVER['REQUEST_URI'];

								echo $url;
								?>   '>
								<input type="hidden" name="domain" value="<?php echo $domainname ?>">
								<input type="hidden" name="subject" value="Popup Form (<?php echo $url ?>)">
								<input type="hidden" name="source" value="<?php echo $lead_source ?>" />
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