// lang
$(function() {
    $('.lang-title').click(function() {
        $('.lang-wrap').toggleClass('active');
        $('.lang-list').slideToggle();
    });
});


// header fixed
$(function() {
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {
            $('.header-top-wrap').addClass('scrolling').css('transition', 'background .2s ease');
        } else {
            $('.header-top-wrap').removeClass('scrolling').css('transition', '');
        }
    });
    if ($('.header-top-wrap').offset().top >= 1) {
        $('.header-top-wrap').addClass('scrolling');
    }
});


// go top
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 320) {
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