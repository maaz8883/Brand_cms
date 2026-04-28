
<section class="portfolio bg">
			<div class="container pt-5 clr-l">
				<div class="row text-center justify-content-center">
					<div class="col-lg-8 col-md-10 text-dark">
						<h2 class="f-40  fw-700">Our Portfolio</h2>
						<p>Our portfolio is a testament to what <?= $bname;?> stands for: quality, creativity, and author success. As leading book publishers USA, we transform manuscripts into professional, polished books that leave a lasting impression.</p>
					</div>
				</div>

				<div class="row">
					<?php $dirname = "assets/img/portfolio/"; $images = glob($dirname . "*.webp");  ?>
					<?php foreach ($images as $image)  :?>
						<?php $title = pathinfo($image); ?>
						<div class="col-xl-2 col-lg-3 col-md-4 col-6 mb-3">
							<div class="gallery">
								<img class="lozad" data-src="<?= $image ?>" alt="<?= $title['filename']?> by <?= $bname?>"/>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>