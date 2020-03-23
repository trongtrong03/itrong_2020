// common
$(function() {
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