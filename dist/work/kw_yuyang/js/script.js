//Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();

// Form placeholder
$(function() {
    $("input[type='text'] , input[type='password'] , textarea").each(function() {
        $(this).focus(function() {
            $(this).addClass("placeholder");
        });
        $(this).blur(function() {
            $(this).removeClass("placeholder");
        });
    });
});

// Gotop
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


// Scroll
$(function() {
    $("#navAbout").click(function (){
        $('html, body').animate({
            scrollTop: $("#themeAbout").offset().top
        }, 500);
    });
    $("#navProducts").click(function (){
        $('html, body').animate({
            scrollTop: $("#themeProducts").offset().top
        }, 500);
    });
    $("#navContact").click(function (){
        $('html, body').animate({
            scrollTop: $("#themeContact").offset().top
        }, 500);
    });
});