//Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();


var $html = $('html, body');


// HEADER FIXED
$(function() {
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $(".header-wrap").addClass("header-fixed");
        }
        else {
            $(".header-wrap").removeClass("header-fixed");
        }
    });
});


// TOP
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 240) {
            $(".btn-top").addClass("active");
        } else {
            $(".btn-top").removeClass("active");
        }
    });
    $(".btn-top").click(function() {
        $html.animate({
            scrollTop: 0
        }, 500);
    });
});


// NAV
$(function() {
    $(".nav-btn").click(function (){
        $('.nav-wrap').addClass('active');
        $('.overlay').fadeIn();
        $html.addClass('no-scroll');
    });
});

$(function() {
    $(".nav-close").click(function (){
        $('.nav-wrap').removeClass('active');
        $html.removeClass('no-scroll');
        $('.overlay').fadeOut();
    });
});

$(function() {
    $(".overlay").click(function (){
        $('.nav-wrap').removeClass('active');
        $html.removeClass('no-scroll');
        $(this).fadeOut();
    });
});