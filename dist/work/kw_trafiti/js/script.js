// window.onorientationchange = function () {
//     window.location.reload();
// }

//Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();


// header fixed
$(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 136) {
            $('.header-wrap').addClass('is-fixed');
        } else {
            $('.header-wrap').removeClass('is-fixed');
        }
    });
    if ($('.header-wrap').offset().top >= 136) {
        $('.header-wrap').addClass('is-fixed');
    }
});


// nav btn
$(function() {
    $(".n-currency h2").click(function() {
        $(".n-currency").find(".select").slideToggle();
        $(".n-lang .select").slideUp();
    });
});
$(function() {
    $(".n-lang h2").click(function() {
        $(".n-lang").find(".select").slideToggle();
        $(".n-currency .select").slideUp();
    });
});


// login btn
$(function() {
    $(".btn-login").click(function() {
        if ($("html").hasClass("is-login")) {
            // $(".login-wrap").fadeOut();
            location.href = "m_data.php";
        } else {
            $(".login-wrap").fadeIn();
        }
        $("html, body").addClass("no-scroll");
        $(".overlay").addClass("active");
    });
    $(".btn-regist").click(function() {
        $(".login-wrap").fadeOut();
        $(".regist-wrap").fadeIn();
    });
});


// btn close
$(function() {
    $(".btn-close").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".overlay").removeClass("active");
        $(".login-wrap, .regist-wrap").fadeOut();
        $(".index-welcome-wrap").addClass("close");
        $(".items-aside, .m-data-aside").removeClass("active");
    });
});


// header btn
$(function() {
    $(".nav-btn").click(function() {
        $("html, body").addClass("no-scroll");
        $(".nav-wrap").addClass("active");
    });
    $(".nav-close").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".nav-wrap").removeClass("active");
        $(".n-currency, .n-lang").find(".select").fadeOut("fast");
    });
});


// link search
$(function() {
    $(".btn-search").click(function() {
        $(".js-search-input").toggleClass("active");
    });
});


// add to wish list
$(function() {
    $(".btn-wish").click(function() {
        $(this).toggleClass("is-checked");
    });
});


// nav cart
$(function() {
    var num = $(".nav-cart li").length;
    $(".link-cart").find("a").append("<strong>" + num + "</strong>");

    $(".nav-btn-del").click(function() {
        $(this).parent("li").remove();
        var num = $(".nav-cart li").length;
        $(".link-cart").find("a strong").empty();
        if (num == 0) {
            $(".nav-cart-bottom").hide();
            $(".nav-cart-null").addClass("active");
            $(".link-cart").find("a").append("<strong>" + num + "</strong>");
        } else {
            $(".nav-cart-bottom").show();
            $(".nav-cart-null").removeClass("active");
            $(".link-cart").find("a").append("<strong>" + num + "</strong>");
        }
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
        $("html, body").removeClass("no-scroll");
        $(this).removeClass("active").css("z-index", "");
        $(".nav-wrap").removeClass("active");
        $(".login-wrap, .regist-wrap").fadeOut();
        $(".m-receive-form").removeClass("active");
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
        $('body, html').animate({
            scrollTop: 0
        }, 500);
    });
});