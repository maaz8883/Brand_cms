<div class="abt-three-btns">
	<ul>
		<li>
			<div class="abt-us-ic"> <img src="../images/experience.webp" class="img-fluid" alt="<?php echo $bname ?>"> </div>
			<div class="abt-us-text">
				<h5 id="count1">10+</h5>
				<h6>Years of Experience</h6> </div>
		</li>
		<li>
			<div class="abt-us-ic"> <img src="../images/writings.webp" class="img-fluid" alt="<?php echo $bname ?>"> </div>
			<div class="abt-us-text">
				<h5 id="count2">700+</h5>
				<h6>Books Written</h6> </div>
		</li>
		<li>
			<div class="abt-us-ic"> <img src="../images/writing.webp" class="img-fluid" alt="<?php echo $bname ?>"> </div>
			<div class="abt-us-text">
				<h5 id="count3">250+</h5>
				<h6>American Writers</h6> </div>
		</li>
	</ul>
</div>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", () => {
	function counter(id, start, end, duration) {
		let obj = document.getElementById(id),
			current = start,
			range = end - start,
			increment = end > start ? 1 : -1,
			step = Math.abs(Math.floor(duration / range)),
			timer = setInterval(() => {
				current += increment;
				obj.textContent = current + '+';
				// console.log(obj.textContent);
				if(current == end) {
					clearInterval(timer);
				}
			}, step);
	}
	counter("count1", 0, 10, 3000);
	counter("count2", 100, 700, 2500);
	counter("count3", 0, 250, 3000);
});
</script>