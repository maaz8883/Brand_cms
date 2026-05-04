
$(function () {
	var myLazyLoad = new LazyLoad({
		elements_selector: ".lazy",
		load_delay: 300 //adjust according to use case
	});
});


$(function () {
    var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
    var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.head_top ul li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;
 
            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
})




	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		//>=, not <=
		if (scroll >= 200) {
			//clearHeader, not clearheader - caps H
			$(".new-header-set-top").addClass("darkHeader");
		}
		else {
			$(".darkHeader").removeClass("darkHeader");
		}
	}); //missing );



	var timeInSecs;
	var ticker;

// 	function startTimer(secs) {
// 		timeInSecs = parseInt(secs);
// 		ticker = setInterval("tick()", 1000);
// 	}

// 	function tick() {
// 		var secs = timeInSecs;
// 		if (secs > 0) {
// 			timeInSecs--;
// 		} else {
// 			clearInterval(ticker);
// 			startTimer(3 * 60); // 5 minutes in seconds
// 		}

// 		var mins = Math.floor(secs / 60);
// 		secs %= 60;

// 		document.getElementById("mins-text").innerHTML =
// 			mins == 1 || (mins > 19 && mins % 10 == 1)
// 				? "минуты"
// 				: (mins > 1 && mins < 5) || (secs > 19 && secs % 10 > 1 && mins % 10 < 5)
// 					? "минуты"
// 					: "минут";
// 		document.getElementById("secs-text").innerHTML =
// 			secs == 1 || (secs > 19 && secs % 10 == 1)
// 				? "секунда"
// 				: (secs > 1 && secs < 5) || (secs > 19 && secs % 10 > 1 && secs % 10 < 5)
// 					? "секунды"
// 					: "секунд";

// 		document.getElementById("mins").innerHTML = mins;
// 		document.getElementById("secs").innerHTML = secs;
// 	}
// 	startTimer(3 * 60); // 5 minutes in seconds





	$(".clickbutton").click(function () {
		$('.floatbutton').toggleClass("active");
		$('.crossplus').toggleClass("rotate");
	});

	$("#cross-side-bar-btn").click(function () {
		$('.floatbutton').removeClass("active");
	});
	$(".clickbutton2").click(function () {
		$('.floatbutton2').toggleClass("active");
	});

	$("#cross-side-bar-btn2").click(function () {
		$('.floatbutton2').removeClass("active");
	});


	$(window).on('load', function() {
        setTimeout(function() {
            $('#staticBackdrop1').modal('show');
        }, 1000)
    });


	


	var target_date = new Date().getTime() + (1000 * 3600 * 48); // set the countdown date
	var days, hours, minutes, seconds; // variables for time units

	var countdown = document.getElementById("tiles"); // get tag element

	// getCountdown();

	// setInterval(function () { getCountdown(); }, 1000);

	function getCountdown() {

		// find the amount of "seconds" between now and target
		var current_date = new Date().getTime();
		var seconds_left = (target_date - current_date) / 1000;

		days = pad(parseInt(seconds_left / 86400));
		seconds_left = seconds_left % 86400;

		hours = pad(parseInt(seconds_left / 3600));
		seconds_left = seconds_left % 3600;

		minutes = pad(parseInt(seconds_left / 60));
		seconds = pad(parseInt(seconds_left % 60));

		// format countdown string + set tag value
		countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>";
	}

	function pad(n) {
		return (n < 10 ? '0' : '') + n;
	}


	
	$('.cl-logo-slider').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		autoplaySpeed: 0,
		speed: 5000,
		autoplay: true,

		cssEase: 'linear',
		arrows: false,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 300,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	$('.resume_inner').slick({
		dots: true,
		centerMode: true,
		centerPadding: '60px',
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 2000,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			}
			
		]
	});





	$(document).on('show', '.accordion', function (e) {
		//$('.accordion-heading i').toggleClass(' ');
		$(e.target).prev('.accordion-heading').addClass('accordion-opened');
	});

	$(document).on('hide', '.accordion', function (e) {
		$(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
		//$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
	});


// 	$(document).ready(function () {
// 		$(".fancybox").fancybox();
// 	});

	
	$(document).ready(function(){
		$('.our_work_slider').slick({
			autoplay: true,
			autoplaySpeed: 2000,
			dots: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});







$('.bestSelling-slider').owlCarousel({
loop:true,
margin:10,
nav:true,
responsive:{
	0:{
		items:1
	},
	600:{
		items:3
	},
	1000:{
		items:3
	}
}
})


$('.client_testimonial-carousel').owlCarousel({
loop:true,
margin:10,
nav:true,
responsive:{
	0:{
		items:1
	},
	600:{
		items:3
	},
	1000:{
		items:5
	}
}
})


$('.testimonials-carousel').owlCarousel({
loop:true,
margin:10,
nav:false,
dots:false,
responsive:{
	0:{
		items:1
	},
	600:{
		items:2
	},
	1000:{
		items:2
	}
}
})


$(document).ready(function() {
  $('form input[name="phone"]').on('input', function() {
  $(this).val(function(_, val) {
  return val.replace(/\D/g, '');
  });
  });
});
// debugger
// console.log('global_var ',global )

// custom tabs jquery
// Show the first tab and hide the rest
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

// Click function
$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});