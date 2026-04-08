<section class="pt-5 pb-md-4 portfolio">
		<div class="container-xxl">
			<div class="row text-center justify-content-center">
				<div class="col-md-10">
					<h2 class="f-40 clr-1 fw-600">Explore the Work of <?php echo $bname?></h2>
					<p class="f-20 fw-500">Take a look at books developed across multiple genres. As trusted book publishers, the focus remains on quality, creativity, and results, helping authors turn ideas into professionally published books that connect with readers.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid pb-5 pt-3">
			<div class="portfolio-slider">
				<?php $dirname = "assets/img/portfolio/"; $images = glob($dirname . "*.webp");  ?>
				<?php foreach ($images as $image)  :?>
					<?php $title = pathinfo($image); ?>
					<div class="item">
						<div class="gallery">
							<img data-lazy="<?= $image ?>" alt="<?= $title['filename']?> by <?= $bname?>"/>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			
		</div>
	</section>