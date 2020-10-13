// slider
$(function() {
    $('.slider-container').bxSlider({
        mode: 'fade',
        adaptiveHeight: true,
        adaptiveHeightSpeed: 500,
        touchEnabled: true,
        pager: true,
        controls: true,
        auto: true,
        pause: 6000,
        moveSlides: 1,
        infiniteLoop: true,
        speed: 1200,
    });
});


// carousel
$(function() {
    $('.index-carousel-container').iosSlider({
        infiniteSlider: true,
        snapToChildren: true,
        desktopClickDrag: true,
        keyboardControls: true,
        navNextSelector: $('.carousel-btn-next'),
        navPrevSelector: $('.carousel-btn-prev'),
    });
});


// animation
$(function() {
    var offset = $('.index-carousel-wrap').height();
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll >= offset) {
            $('.game-item').addClass('animated');
        }
    });
});


// scroll down
$(function() {
    $(".btn-scrolldown").click(function() {
        $('html, body').animate({
            scrollTop: $(".main-wrap").offset().top},
            '');
    });
});



