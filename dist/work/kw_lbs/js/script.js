window.onorientationchange = function(){
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


// nav btn
$(function() {
    $(".nav-btn").click(function() {
        $("html, body").addClass("no-scroll");
        $(".nav-wrap").addClass("active");
        $(".overlay-mask").addClass("active");
    });
    $(".nav-close, .nav-main a").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".nav-wrap").removeClass("active");
        $(".overlay-mask").removeClass("active");
    });
});

$(".overlay-mask").click(function(){
    $(this).removeClass("active");
    $("html, body").removeClass("no-scroll");
    $(".nav-wrap").removeClass("active");
    $(".sub-aside").removeClass("active");
    $(".menu-btn").removeClass("active");
    $(".commodity-menu").removeClass("active");
});


// input search
$(".login-search a").click(function(){
    $(".login-search .input").toggleClass('active');
});
$(".login-search .btn-close").click(function(){
    $(".login-search .input").removeClass('active');
});

// Form placeholder
$('input[type="text"] , input[type="password"] , textarea').each(function(){
    $(this).focus(function(){
        $(this).addClass('placeholder');
    });
    $(this).blur(function(){
        $(this).removeClass('placeholder');
    });
});


// overlay close
$(".overlay-close").click(function(){
    $(".overlay-mask").fadeOut();
    $(".f-contact-wrap").fadeOut();
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



// 商品 menu
$(".brand-name").on("click", function(e){
    if($(this).parent().has(".brand-list")) {
        e.preventDefault();
    }
    if(!$(this).hasClass("active")) {
        $(".brand-list").slideUp();
        $(".brand-name").removeClass("active");
        $(this).next(".brand-list").slideDown();
        $(this).addClass("active");
    }
    else if($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next(".brand-list").slideUp();
    }
});

$(".class-name").on("click", function(e){
    if($(this).parent().has(".class-list")) {
        e.preventDefault();
    }
    if(!$(this).hasClass("active")) {
        $(".class-list").slideUp();
        $(".class-name").removeClass("active");
        $(this).next(".class-list").slideDown();
        $(this).addClass("active");
    }
    else if($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next(".class-list").slideUp();
    }
});


// 商品 btn
$(function() {
    $(".menu-btn").click(function() {
        $(this).addClass("active");
        $("html, body").addClass("no-scroll");
        $(".commodity-menu").addClass("active");
        $(".overlay-mask").addClass("active");
    });
    $(".menu-close").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".commodity-menu").removeClass("active");
        $(".overlay-mask").removeClass("active");
    });
});


// member menu
$(".member-menu-btn").click(function(){
    $(this).toggleClass("active");
    $(".member-menu nav").slideToggle();
});