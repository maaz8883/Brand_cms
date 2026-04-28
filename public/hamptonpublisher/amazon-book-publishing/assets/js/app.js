$('.port_slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 3000,
    slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
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
$('.test_slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 7000,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
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
$('.res_menuBtn').click(function() {
    $('.responsive_menu').addClass('show')
})

$('.cross_btn').click(function() {
    $('.responsive_menu').removeClass('show')
})
$('.serv_list').click(function() {
    $('.serv_menu').toggleClass('show')
})
document.querySelectorAll('.drop_btn').forEach(button => {
    button.addEventListener('click', () => {
        const subMenu = button.parentElement.nextElementSibling;
        subMenu.classList.toggle('active');
    });
});
zE(function() {
    $zopim(function() {
        $zopim.livechat.setOnUnreadMsgs(unread);

        function unread(number) {
            if (number >= 1) {
                $zopim.livechat.window.show();
            }
        }
    });
});

function setButtonURL() {
    $zopim.livechat.window.toggle();
}