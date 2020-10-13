$(function(){

    //TABS
    var $block = $('.item-tabs');
    $('.item-tabs .title ul li').click(function(){
        var $this = $(this);
        $this.add($('.content', $block)
            .eq($this.index()))
            .addClass('active')
            .siblings('.active')
            .removeClass('active');
    });


    //SLIDER
    $(".item-gallery ul").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        namespace: "item-slider",
    });


    //VENOBOX
    $('.venobox').venobox();


    //SLIDER 前後按鈕浮動
    // $('.test').scrollToFixed({
    //     marginTop: 0,
    //     limit: $('.item-model').offset().top - $('.test').outerHeight() - 72,
    // });

});


$(document).ready(function() {
    $('.header').scrollToFixed({
        preFixed: function() { $(this).find('h1').css('color', 'blue'); },
        postFixed: function() { $(this).find('h1').css('color', ''); }
    });
    $('#summary').scrollToFixed({
        marginTop: 0,
        limit: $('.footer').offset().top - $('#summary').outerHeight() - 10,
        zIndex: 999,
        preFixed: function() { $(this).find('.title').css('color', 'blue'); },
        preAbsolute: function() { $(this).find('.title').css('color', 'red'); },
        postFixed: function() { $(this).find('.title').css('color', ''); },
        postAbsolute: function() { $(this).find('.title').css('color', ''); }
    });
    $('.footer').scrollToFixed( {
        bottom: 0,
        limit: $('.footer').offset().top,
        preFixed: function() { $(this).find('h1').css('color', 'blue'); },
        postFixed: function() { $(this).find('h1').css('color', ''); }
    });
});