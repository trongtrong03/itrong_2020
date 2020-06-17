// common
$(function() {
    // 粒子特效
    $('.particles-bg').particleground({
        dotColor: '#F6F6F6',
        lineColor: '#F6F6F6',
    });

    // go top
    // $("#sideTop").click(function() {
    //     $('body, html').animate({
    //         scrollTop: 0
    //     }, 500);
    // });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 240) {
            $("#sideTop").fadeIn(300);
        } else {
            $("#sideTop").fadeOut(300);
        }
    });

    // catalog
    $("#sideCatalog").click(function() {
        $(".text-catalog").addClass("is-popup");
        $(".overlay").addClass("is-active");
    });

    $("#sideList").click(function() {
        $(".text-list").addClass("is-active");
        $(".overlay").addClass("is-active");
    });

    $(".text-close").click(function() {
        $(".text-list").removeClass("is-active");
        $(".overlay").removeClass("is-active");
    });

    $(".text-catalog li a").click(function() {
        $(".overlay").removeClass("is-active");
        $(".text-catalog").removeClass("is-popup");
    });

    $(".overlay").click(function() {
        $(this).removeClass("is-active");
        $(".text-list").removeClass("is-active");
        $(".text-catalog").removeClass("is-popup");
    });
});


// 重整頁面後刪除網址列後的 id
// function removeLocationHash(){
//     var noHashURL = window.location.href.replace(/#.*$/, '');
//     window.history.replaceState('', document.title, noHashURL) 
// }

// window.addEventListener("load", function(){
//     removeLocationHash();
// });