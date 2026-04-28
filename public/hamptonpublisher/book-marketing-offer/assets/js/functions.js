// $(function() {
//         var myLazyLoad = new LazyLoad({
//    elements_selector: ".lazy"
//    // load_delay: 300 //adjust according to use case
// });
//     });
const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();

// wow start
new WOW().init();
// wow end

////// services-slider
$(".services-slider").slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 1000,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  centerMode: false,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});
$(".tabs-slider").slick({
  dots: false,
  arrows: true,
  infinite: false,
  speed: 1000,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: false,
  centerMode: false,
  autoplaySpeed: 1000,
  draggable: false,
  swipeToSlide: false,
  touchMove: false,
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 5,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});
$(".industrie-slider").slick({
  dots: false,
  infinite: true,
  speed: 5000,
  autoplaySpeed: 00,
  pauseOnHover: false,
  cssEase: "linear",
  autoplay: true,
  slidesToShow: 3,
  centerMode: true,
  centerPadding: "0px",
  arrows: false,
  vertical: true,
  verticalSwiping: true,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1368,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
  ],
});
$(".industrie-slider-2").slick({
  dots: false,
  infinite: true,
  speed: 5000,
  autoplaySpeed: 00,
  pauseOnHover: false,
  cssEase: "linear",
  autoplay: true,
  slidesToShow: 3,
  centerMode: true,
  centerPadding: "0px",
  arrows: false,
  vertical: true,
  verticalSwiping: true,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1368,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
  ],
});
$(".chat").click(function () {
  return $zopim.livechat.window.toggle(), !1;
});
$("[data-targetit]").on("click", function () {
  $(this).siblings().removeClass("current");
  $(this).addClass("current");
  var target = $(this).data("targetit");
  $("." + target)
    .siblings('[class*="my-tabs"]')
    .removeClass("current");
  $("." + target).addClass("current");
  $(".slick-slider").slick("setPosition", 0);
});

$(function () {
  $(".drag-img").draggable({});
});

$(document).ready(function () {
  $(".accordion-list > li > .answer").hide();

  $(".accordion-list > li").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".accordion-list > li.active .answer").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    return false;
  });
});

// Get all .item elements
const items = document.querySelectorAll(".item");

// Get the .ul-content-main element
const ulContentMain = document.querySelector(".ul-content-main");

// Loop through each .item and add a click event listener
items.forEach((item) => {
  item.addEventListener("click", () => {
    // Remove "active" class from all items
    items.forEach((item) => {
      item.classList.remove("active");
    });

    // Add "active" class to the clicked item
    item.classList.add("active");

    // Get the corresponding .content-item
    const itemId = item.id;
    const contentItem = document.querySelector(`.content-item-${itemId}`);

    // Scroll to the content-item
    ulContentMain.scrollTop = contentItem.offsetTop - ulContentMain.offsetTop;
  });
});
// $(window).scroll(function () {
//   var oTop = $(".wcag-sec").offset().top - window.innerHeight;
//   if (a == 0 && $(window).scrollTop() > oTop) {
//     window.setTimeout(function () {
//       $(".adddme").addClass("error");
//     }, 2000);
//     a = 1;
//   }
// });

$(document).ready(function () {
  var section = $(".index-wrap-7");
  var processActiveClass = "process-active";
  var scrollThreshold = 100; // Aap is threshold ko apne requirement ke hisab se adjust kar sakte hain

  $(window).scroll(function () {
    if ($(window).scrollTop() >= section.offset().top - scrollThreshold) {
      section.addClass(processActiveClass);
    } else {
      section.removeClass(processActiveClass);
    }
  });
});
$(document).ready(function() {
  setTimeout(alertFunc, 3000);

  function alertFunc() {
      $(".overlayS").addClass("hide");
      new WOW().init();
  }
});