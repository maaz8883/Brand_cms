$(document).ready(function() {

    $(".platforms .slider").slick({
            dots: !1,
            arrows: !1,
            lazyLoad: "ondemand",
            infinite: !0,
            autoplay: !0,
            slidesToShow: 6,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        }),
        $(".genere .slider").slick({
            dots: !1,
            arrows: !0,
            lazyLoad: "ondemand",
            infinite: !0,
            autoplay: !0,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        }),
        $(".reviews .slider").slick({
            dots: !1,
            arrows: !0,
            lazyLoad: "ondemand",
            infinite: !0,
            slidesToShow: 2,
            slidesToScroll: 1,
            fade: !1,
            responsive: [

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        }),
        $(".nav-item .nav-link").click(function() {
            $(".book-slider").slick("refresh");
        });
});