// aside menu
$(function() {
    $("#popupMenu .title").on("click", function(e){
        if($(this).parent().has(".content")) {
            e.preventDefault();
        }
        if(!$(this).hasClass("active")) {
            $("#popupMenu .content").slideUp();
            $("#popupMenu .title").removeClass("active");
            $(this).next(".content").slideDown();
            $(this).addClass("active");
        }
        else if($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).next(".content").slideUp();
        }
    });
});

$(function() {
    $(".popup-menu-title").click(function() {
        $("#popupMenu").fadeIn();
    });
});

// 彈窗
$(function() {
    $(".popup-close").click(function() {
        closePopup();
    });
});

// Overlay
$(function() {
    $(".overlay").click(function() {
        closePopup();
    });
});

function openPopup(){
    $("html, body").addClass("no-scroll");
    $(".popup-wrap").fadeIn();
    $(".overlay").addClass("active");
    $(".nav-wrap").removeClass("active");
}

function closePopup(){
    $("html, body").removeClass("no-scroll");
    $(".popup-wrap").fadeOut();
    $(".overlay").removeClass("active");
    $(".nav-wrap").removeClass("active");
    $(".popup-wrap").load("_null");
}