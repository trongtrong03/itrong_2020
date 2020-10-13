// 消除inline-block的空白間距
$(".removeTextNodes").contents().filter(function() {
	return this.nodeType === 3;
}).remove();


// 導覽列選單
$(function() {
    $(document).on("scroll", onScroll);
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        // $('a').each(function() {
        //     $(this).removeClass('active');
        // })
        // $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });

        $('.nav-wrap').removeClass('active');
        $html.removeClass('no-scroll');
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.nav-wrap li a').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            // $('.nav-wrap li a').removeClass("active");
            // currLink.addClass("active");
        }
        else {
            // currLink.removeClass("active");
        }
    });
}

var $html = $('html, body');


// SCROLL DOWN
$(function() {
    $(".btn-arrow-down").click(function (){
        $html.animate({
            scrollTop: $(".begin-wrap").offset().top
        }, 500);
    });
});


// SCROLL TOP
$(function() {
    $(".btn-arrow-up").click(function() {
        $html.animate({
            scrollTop: 0
        }, 500);
    });
});


// NAV
$(function() {
    $("#navBtn").click(function (){
        $('.nav-wrap').addClass('active');
        $('.overlay').fadeIn();
        $html.addClass('no-scroll');
    });
});

$(function() {
    $("#navClose").click(function (){
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

