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
    $('.nav-btn').click(function() {
        $('html, body').addClass('no-scroll');
        $('.nav-wrap').addClass('active');
        $(".overlay-mask").addClass('active');
    });
    $('.nav-close').click(function() {
        $('html, body').removeClass('no-scroll');
        $('.nav-wrap').removeClass('active');
        $(".overlay-mask").removeClass('active');
    });
});

$(".overlay-mask").click(function(){
    $(this).removeClass('active');
    $('html, body').removeClass('no-scroll');
    $(".nav-wrap").removeClass('active');
    $(".sub-aside").removeClass('active');
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


// float close
$(".float-close").click(function(){
    $(".float-wrap").fadeOut();
});


// contact
$(".btn-contact").click(function(){
    $(".overlay-mask").fadeIn();
    $(".f-contact-wrap").fadeIn();
});

// sub
$(function() {
    $('.sub-btn').click(function() {
        $('html, body').addClass('no-scroll');
        $('.sub-aside').addClass('active');
        $(".overlay-mask").addClass('active');
    });
    $('.sub-close').click(function() {
        $('html, body').removeClass('no-scroll');
        $('.sub-aside').removeClass('active');
        $(".overlay-mask").removeClass('active');
    });
});


// overlay close
$(".overlay-close").click(function(){
    $(".overlay-mask").fadeOut();
    $(".f-contact-wrap").fadeOut();
});



// Go top
$(function() {
    // $(window).scroll(function() {
    //     if ($(this).scrollTop() > 240) {
    //         $(".btn-top").fadeIn();
    //     } else {
    //         $(".btn-top").fadeOut();
    //     }
    // });
    $(".btn-top").click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
    });
});



// form
$(".f-contact-input input, .f-contact-input textarea").focus(function(){
    if ($(this).val().length == 0) {
        $(this).closest(".f-contact-input").addClass("active");
    }
});
$(".f-contact-input input, .f-contact-input textarea").blur(function(){
    if ($(this).val().length == 0) {
        $(this).closest(".f-contact-input").removeClass("active");
    }
});

$(".index-contact-input input").focus(function(){
    if ($(this).val().length == 0) {
        $(this).closest(".index-contact-input").addClass("active");
    }
});
$(".index-contact-input input").blur(function(){
    if ($(this).val().length == 0) {
        $(this).closest(".index-contact-input").removeClass("active");
    }
});