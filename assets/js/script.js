// common
$(function() {
    // nav
    $(".nav-btn").click(function() {
        $(this).toggleClass('toggle');
        $("html").toggleClass('nav-close');
        $(".nav-list").toggle();
    });

    // 粒子特效
    $('.particles-bg').particleground({
        dotColor: '#F6F6F6',
        lineColor: '#F6F6F6',
    });

    // go top
    $("#sideTop").click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
    });
});