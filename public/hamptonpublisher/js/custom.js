///////////////*****//////////////////
// RESPONSIVE NAVIGATION
// OPEN BTN
$(document).ready(function() {
	$("#navbar").on("click", function() {
		$(".nveMenu").addClass("is-opened");
		$(".overlay").addClass("is-on");
	});
	$(".overlay").on("click", function() {
		$(this).removeClass("is-on");
		$(".nveMenu").removeClass("is-opened");
	});
});
// CLOSE BTN
$(".overlay").on("click", function() {
	$(this).removeClass("is-on");
	$(".nveMenu").removeClass("is-opened");
});
$(".close-btn-nav").click(function() {
	$(".nveMenu").removeClass("is-opened");
	$(".overlay").removeClass("is-on");
});
// RESPONSIVE NAVIGATION
// 
// ACTIVE JS START
// $(document).ready(function(){
//   $('.navigation ul li a').click(function(){
//     $('li a').removeClass("active");
//     $(this).addClass("active");
// });
// });
jQuery(function($) {
	var path = window.location.href;
	$('.navigation ul li a').each(function() {
		if(this.href === path) {
			$(this).addClass('active');
		}
	});
});
// ACTIVE JS END
// 
// PRELOADER START
$(document).ready(function() {
	setTimeout(function() {
		$('.preloader').fadeOut('slow');
	}, 2000);
});
// PRELOADER END
///////////////*****//////////////////
$('.services-slider .owl-carousel').owlCarousel({
	loop: true,
	margin: 50,
	animateOut: 'fadeOut',
	autoplayHoverPause: false,
	autoplayTimeout: 2000,
	autoplay: true,
	pagination: false,
	dots: false,
	nav: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 4
		}
	}
});
$('.logos-carousel-slider .owl-carousel').owlCarousel({
	loop: true,
	margin: 60,
	animateOut: 'fadeOut',
	autoplayHoverPause: true,
	autoplayTimeout: 1000,
	autoplay: true,
	pagination: false,
	dots: false,
	nav: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 4
		},
		1000: {
			items: 5
		}
	}
});
$('.testi-row .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	animateOut: 'fadeOut',
	autoplayHoverPause: false,
	autoplayTimeout: 9000,
	autoplay: true,
	pagination: false,
	dots: false,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
	nav: true,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 3
		}
	}
});
$('#customers-testimonials').owlCarousel({
	loop: true,
	center: true,
	margin: 10,
	// autoplay: true,
	autoplayTimeout: 5000,
	nav: true,
	dots: false,
	navText: ['<span class="fa fa-arrow-left fa-2x"></span>', '<span class="fa fa-arrow-right fa-2x"></span>'],
	responsive: {
		0: {
			items: 1
		},
		768: {
			items: 2
		},
		1170: {
			items: 3
		}
	}
});
$(".navigation li").hover(function() {
	var isHovered = $(this).is(":hover");
	if(isHovered) {
		$(this).children("ul").stop().slideDown(300);
	} else {
		$(this).children("ul").stop().slideUp(150);
	}
});
$(window).scroll(function() {
	if($(this).scrollTop() > 1) {
		$('header').addClass("sticky");
	} else {
		$('header').removeClass("sticky");
	}
});