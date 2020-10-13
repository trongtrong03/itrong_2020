window.onorientationchange = function() {
    window.location.reload();
}


//Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();


// header fixed
// $(function() {
//     $(window).scroll(function(){
//         var scroll = $(window).scrollTop();
//         if (scroll >= 136) {
//             $('.header-wrap').addClass('fixed');
//         } else {
//             $('.header-wrap').removeClass('fixed');
//         }
//     });
//     if ($('.header-wrap').offset().top >= 136) {
//         $('.header-wrap').addClass('fixed');
//     }
// });


// menu btn
$(function() {
    $(".menu-btn").click(function() {
        $(this).toggleClass("active");
        $("html, body").toggleClass("no-scroll");
        $(".menu-wrap").toggleClass("active");
        $(".header-login-form").removeClass("active");
    });
    $(".m-sport").click(function() {
        $(".menu-sub").slideToggle();
    });
});

// login btn
$(function() {
    $(".b-login").click(function() {
        $("html, body").addClass("no-scroll");
        $(".js-popup").addClass("active");
    });
    $(".b-user").click(function() {
        $("html, body").addClass("no-scroll");
        $(".js-popup").addClass("active");
    });
    $(".btn-close").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".js-popup").removeClass("active");
    });
});

// member
$(function() {
    $(".member-btn").click(function() {
        $("html, body").addClass("no-scroll");
        $(".member-aside").addClass("active");
    });
    $(".btn-close").click(function() {
        $(".member-aside").removeClass("active");
    });
});


// Form placeholder
$(function() {
    $("input[type='text'] , input[type='password'] , textarea").each(function() {
        $(this).focus(function() {
            $(this).addClass("placeholder");
        });
        $(this).blur(function() {
            $(this).removeClass("placeholder");
        });
    });
});


// Slick
$(function() {
    $('.slider-carousel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 2
            }
        }]
    });
    $('.slider-carousel2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});

// Float close
$(function() {
    $(".float-close").click(function() {
        $(".float-wrap").fadeOut();
    });
});


// Text
$(function() {
    $("#textAboutus, #textFaq, #textContact, #textPrivacy, #textDisclaimer, #textHelp").click(function() {
        $(".overlay").addClass("active").css("z-index", "200");
        $(".text-wrap").addClass("active").fadeIn();
    });
});
$(function() {
    $("#textAboutus").click(function() {
        $(".t-aboutus").addClass("active");
    });
});
$(function() {
    $("#textFaq").click(function() {
        $(".t-faq").addClass("active");
    });
});
$(function() {
    $("#textContact").click(function() {
        $(".t-contact").addClass("active");
    });
});
$(function() {
    $("#textPrivacy").click(function() {
        $(".t-privacy").addClass("active");
    });
});
$(function() {
    $("#textDisclaimer").click(function() {
        $(".t-disclaimer").addClass("active");
    });
});
$(function() {
    $("#textHelp").click(function() {
        $(".t-help").addClass("active");
    });
});
$(function() {
    $(".text-close").click(function() {
        $(".text-wrap, .text-wrap .tabs-item, .text-wrap .tabs-content").removeClass("active");
        $(".overlay").removeClass("active").css("z-index", "");
        $(".text-wrap").fadeOut();
    });
});
$(function() {
    $("#textTabs .tabs-item").click(function() {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $("#textTabs .tabs-content").siblings().removeClass("active");
        $("#textTabs .tabs-content").eq($(this).index()).addClass("active");
    });
});



// Overlay
$(function() {
    $(".overlay").click(function() {
        $("html, body").removeClass("no-scroll");
        $(this).removeClass("active").css("z-index", "");
        $(".text-wrap, .news-view").fadeOut();
        $(".text-wrap, .text-wrap .tabs-item, .text-wrap .tabs-content, .menu-wrap").removeClass("active");
    });
});


// Go top
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 240) {
            $(".btn-top").fadeIn();
        } else {
            $(".btn-top").fadeOut();
        }
    });
    $(".btn-top").click(function() {
        $("body, html").animate({
            scrollTop: 0
        }, 500);
    });
});