// Remove inline-block node
$(function(){
    $('.removeTextNodes').contents().filter(function() {
        return this.nodeType === 3;
    }).remove();
});


// Nav
$(function(){
    $(".nav-menu-btn").click(function(){
        // $("html, body").toggleClass("no-scroll");
        $(".nav-wrap, .overlay").toggleClass("is-active");
        $(this).toggleClass("is-active");
        if($(".nav-filter-btn").hasClass("is-active")) {
            $(".nav-filter-btn").removeClass("is-active");
            $(".index-filter-wrap").removeClass("is-active");
            $(".overlay").addClass("is-active");
            // $("html, body").addClass("no-scroll");
        }
    });

    $(".nav-filter-btn").click(function(){
        // $("html, body").toggleClass("no-scroll");
        $(".index-filter-wrap, .overlay").toggleClass("is-active");
        $(this).toggleClass("is-active");
        if($(".nav-menu-btn").hasClass("is-active")) {
            $(".nav-menu-btn").removeClass("is-active");
            $(".nav-wrap").removeClass("is-active");
            $(".overlay").addClass("is-active");
            // $("html, body").addClass("no-scroll");
        }
    });

    $(".nav-wrap a").click(function(){
        $(".nav-menu-btn").removeClass("is-active");
        $(".nav-wrap").removeClass("is-active");
        $(".overlay").removeClass("is-active");
    });
});

$(function(){
    $(".index-filter-btn").on("click", function(e){
        if($(this).parent().has(".index-filter-sub")) {
            e.preventDefault();
        }
        if(!$(this).hasClass("is-active")) {
            $(".index-filter-sub").slideUp();
            $(".index-filter-btn").removeClass("is-active");
            $(this).next(".index-filter-sub").slideDown();
            $(this).addClass("is-active");
        }
        else if($(this).hasClass("is-active")) {
            $(this).removeClass("is-active");
            $(this).next(".index-filter-sub").slideUp();
        }
    });
});


// Go top
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 240) {
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



// Overlay
$(function(){
    $(".overlay").click(function(){
        // $("html, body").removeClass("no-scroll");
        $(".nav-wrap, .nav-menu-btn, .index-filter-wrap, .nav-filter-btn").removeClass("is-active");
        $(this).removeClass("is-active");
    });
});