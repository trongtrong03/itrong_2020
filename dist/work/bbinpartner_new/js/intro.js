// scroll
// $(function() {
//     $("#scroll-cm").click(function (){
//         $(".nav-wrap li a").removeClass("is-active");
//         $(this).addClass("is-active");
//         // $('html, body').animate({
//         //     scrollTop: $("#js-intro-cm").offset().top - 100
//         // }, 300);
//     });
//     $("#scroll-pd").click(function (){
//         $(".nav-wrap li a").removeClass("is-active");
//         $(this).addClass("is-active");
//         // $('html, body').animate({
//         //     scrollTop: $("#js-intro-pd").offset().top - 100
//         // }, 300);
//     });
//     $("#scroll-brand").click(function (){
//         $(".nav-wrap li a").removeClass("is-active");
//         $(this).addClass("is-active");
//         // $('html, body').animate({
//         //     scrollTop: $("#js-intro-brand").offset().top - 100
//         // }, 300);
//     });
//     $("#scroll-partner").click(function (){
//         $(".nav-wrap li a").removeClass("is-active");
//         $(this).addClass("is-active");
//         // $('html, body').animate({
//         //     scrollTop: $("#js-intro-partner").offset().top - 100
//         // }, 300);
//     });
// });


// slider
$(function(){
    $(".intro-slider-wrap").slick({
        dots: true,
        arrows: true,
        adaptiveHeight: true,
    });

    $(".intro-brand-list").slick({
        dots: false,
        arrows: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 481,
                settings: {
                    arrows: true,
                    slidesToShow: 1,
                }
            },
        ]
    });

    $(".filter-nav").slick({
        dots: false,
        infinite: false,
        arrows: false,
        touchMove: false,
        swipe: false,
        swipeToSlide: false,
        variableWidth: true,
        // slidesToShow: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    arrows: true,
                    swipe: true,
                    touchMove: true,
                    swipeToSlide: true,
                    // centerMode: true,
                    infinite: true,
                }
            },
        ]
    });
});


// cm
$(function(){
    $("#js-cm-b1").click(function(){
        $(".intro-cm-popup, .intro-cm-popup .btn-prev, .intro-cm-popup .btn-next").fadeIn();
        $("#js-cm-c1").fadeIn();
    });
    $("#js-cm-b2").click(function(){
        $(".intro-cm-popup, .intro-cm-popup .btn-prev, .intro-cm-popup .btn-next").fadeIn();
        $("#js-cm-c2").fadeIn();
    });

    $(".intro-cm-popup .btn-close").click(function(){
        $(".intro-cm-popup .btn-next, .intro-cm-popup .btn-prev").fadeOut();
        $(".intro-cm-popup").fadeOut();
        $(".intro-cm-popup .popup-text").fadeOut();
    });

    $(".intro-cm-popup .btn-next, .intro-cm-popup .btn-prev").click(function(){
        var display1 = $("#js-cm-c1").css("display");
        var display2 = $("#js-cm-c2").css("display");
        if( display1 == "block" ){
            $("#js-cm-c1").fadeOut();
            $("#js-cm-c2").fadeIn();
        }
        else if (display2 == "block") {
            $("#js-cm-c1").fadeIn();
            $("#js-cm-c2").fadeOut();
        }
    });

    $(".intro-cm-next").click(function(){
        $(".intro-cm-text.is-text-1").removeClass("is-active");
        $(".intro-cm-text.is-text-2").addClass("is-active");
        $(".intro-cm-prev").addClass("is-active");
        $(this).removeClass("is-active");
    });
    $(".intro-cm-prev").click(function(){
        $(".intro-cm-text.is-text-1").addClass("is-active");
        $(".intro-cm-text.is-text-2").removeClass("is-active");
        $(".intro-cm-next").addClass("is-active");
        $(this).removeClass("is-active");
    });
});


// brand
$(function(){
    $(".intro-brand-item.is-style-1 hgroup button").click(function(){
        $("#brand-popup-1").addClass("is-active");
    });
    $(".intro-brand-item.is-style-2 hgroup button").click(function(){
        $("#brand-popup-2").addClass("is-active");
    });
    $(".intro-brand-item.is-style-4 hgroup button").click(function(){
        $("#brand-popup-4").addClass("is-active");
    });
    $(".intro-brand-item.is-style-5 hgroup button").click(function(){
        $("#brand-popup-5").addClass("is-active");
    });

    $(".intro-brand-popup .btn-close").click(function(){
        $(".intro-brand-popup").removeClass("is-active");
    });

    $(".intro-brand-popup .btn-prev").click(function(){
        var bid = $(this).parents(".intro-brand-popup").attr("id");
        $(this).parents(".intro-brand-popup").removeClass("is-active");
        if(bid == "brand-popup-1") {
            $("#brand-popup-5").addClass("is-active");
        }
        else if (bid == "brand-popup-2") {
            $("#brand-popup-1").addClass("is-active");
        }
        else if (bid == "brand-popup-4") {
            $("#brand-popup-2").addClass("is-active");
        }
        else if (bid == "brand-popup-5") {
            $("#brand-popup-4").addClass("is-active");
        }
    });

    $(".intro-brand-popup .btn-next").click(function(){
        var bid = $(this).parents(".intro-brand-popup").attr("id");
        $(this).parents(".intro-brand-popup").removeClass("is-active");
        if(bid == "brand-popup-1") {
            $("#brand-popup-2").addClass("is-active");
        }
        else if (bid == "brand-popup-2") {
            $("#brand-popup-4").addClass("is-active");
        }
        else if (bid == "brand-popup-4") {
            $("#brand-popup-5").addClass("is-active");
        }
        else if (bid == "brand-popup-5") {
            $("#brand-popup-1").addClass("is-active");
        }
    });
});



// tabs
$(function(){
    $(".pd-nav li:first").addClass("is-active");
    $(".pd-content div:first").addClass("is-active");
    $(".pd-nav li").click(function(){
        $(this).addClass("is-active");
        $(this).siblings().removeClass("is-active");
        $(".pd-content div").siblings().removeClass("is-active");  
        $(".pd-content div").eq($(this).index()).addClass("is-active");
    });
});


// filter
$(function() {
    var $MixItUp = $('.filter-content').isotope({
        itemSelector: '.filter-content figure',
        masonry: {gutter: 0}
    });
    $MixItUp.imagesLoaded( function() {
        $MixItUp.isotope('layout');
    });
    $('.intro-partner-filter nav').on( 'click', 'a', function() {
      var filterValue = $(this).attr('data-filter');
      $MixItUp.isotope({ filter: filterValue });
    });

    //篩選按鈕的選取狀態
    $('.intro-partner-filter nav').each( function( i, navfilter ) {
        var $navfilter = $( navfilter );
            $navfilter.on( 'click', 'a', function() {
            $navfilter.find('.is-active').removeClass('is-active');
            $(this).parent().addClass('is-active');
        });
    });
});