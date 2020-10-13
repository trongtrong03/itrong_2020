$(window).on('resize',function(){
    if ($(window).width() >= 1025 && $(window).width() <= 1030) {   
        location.reload();
    }
    else {
    }
}); 

//Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();


// nav active
var cName = $('html').attr('class');
if ($('html').hasClass(cName)) {
    $('#nav_' + cName).addClass('active');
}

// nav
$(".nav-btn").click(function() {
    $('.nav-wrap').addClass('active');
    $('.overlay-wrap').addClass('active');
});
$(".nav-close").click(function() {
    $('.nav-wrap').removeClass('active');
    $('.overlay-wrap').removeClass('active');
});


$(".nav-title").on("click", function(e){
    if($(this).parent().has(".nav-sub")) {
        e.preventDefault();
    }
    if(!$(this).hasClass("active")) {
        $(".nav-sub").slideUp();
        $(".nav-title").removeClass("active");
        $(this).next(".nav-sub").slideDown();
        $(this).addClass("active");
    }
    else if($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next(".nav-sub").slideUp();
    }
});



// overlay
$(".overlay-wrap").click(function() {
    $(this).removeClass('active');
    $('.nav-wrap').removeClass('active');
});

// go top
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 240) {
            $("#goTop").fadeIn();
        } else {
            $("#goTop").fadeOut();
        }
    });
    $("#goTop").click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
    });
});


// upload
$('.upload-item input').change(function() {
    var i = $(this).prev('span').clone();
    var file = $(this)[0].files[0].name;
    $(this).prev('span').text(file);
});