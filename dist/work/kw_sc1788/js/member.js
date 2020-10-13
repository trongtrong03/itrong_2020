// 側選單收合
$(".member-nav h2").on("click", function(e){
    if($(this).parent().has(".sub")) {
        e.preventDefault();
    }
    if(!$(this).hasClass("active")) {
        $(".sub").slideUp();
        $(".member-nav h2").removeClass("active");
        $(this).next(".sub").slideDown();
        $(this).addClass("active");
    }
    else if($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).next(".sub").slideUp();
    }
});

// 彈窗
$(".btn-openModal, .mail-detial").click(function() {
    $(".member-popup").addClass("active");
    $(".overlay").addClass("is-active").css("z-index", "102");
});

$(".member-btn-close, .mail-box-close").click(function() {
    $(".member-popup").removeClass("active");
    $(".overlay").removeClass("is-active").css("z-index", "");
});

// checkbox
$('.member-center-input input:checkbox').click(function(){
    if($(this).prop('checked')){
        $('.member-center-input input:checkbox').prop('checked',false);
        $(this).prop('checked',true);
    }
});