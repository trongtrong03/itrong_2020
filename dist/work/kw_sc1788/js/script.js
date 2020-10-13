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
    $(".nav-btn").click(function() {
        // $("html, body").toggleClass("no-scroll");
        $(".nav-wrap").addClass("is-active");
        $(".header-wrap").css("z-index", "200");
        $(".js-popup").removeClass("is-active");
    });

    $(".nav-close").click(function() {
        $(".nav-wrap").removeClass("is-active");
        $(".header-wrap").css("z-index", "");
    });
});


// close
$(function() {
    $(".btn-close").click(function() {
        $(".js-popup").removeClass("is-active");
    });
});


// login btn
$(function() {
    $(".user-btn, .b-login, .b-user").click(function() {
        $(this).toggleClass("is-active");
        // $("html, body").toggleClass("no-scroll");
        $(".js-popup").toggleClass("is-active");
    });
});


// member
$(function() {
    $(".member-btn").click(function() {
        // $("html, body").addClass("no-scroll");
        $(".member-aside").addClass("is-active");
    });
    $(".btn-close").click(function() {
        $(".member-aside").removeClass("is-active");
    });
});


// text
$(function() {
    $(".text-btn").click(function() {
        // $("html, body").addClass("no-scroll");
        $(".text-aside").toggleClass("is-active");
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


// Overlay
$(function() {
    $(".overlay").click(function() {
        // $("html, body").removeClass("no-scroll");
        $(this).removeClass("is-active").css("z-index", "");
        $(".promot-popup-wrap").removeClass("is-active");
        $(".member-popup").removeClass("active");
        $(".header-wrap").css("z-index", "");
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