$(function(){

    //QR code
    $(".livedemo-top-qrcode button").click(function(){
        $(".livedemo-top-qrcode figure").slideToggle();
    });
    $(document).on("click", function(e) {
        if ($(e.target).is(".livedemo-top-qrcode button") === false) {
            $(".livedemo-top-qrcode figure").slideUp();
        }
    });


    //提示視窗
    var $tip = $("#breakpoint-tips");
    $tip.fadeIn("fast");
    setTimeout(function(){
        $tip.fadeOut("fast");
    },4000);
    // $("#livedemo-iframe").scroll(function() {
    //     if ($(this).scrollTop() > 0){
    //         $tip.fadeOut("fast");
    //     }
    //     else {
    //         $("#breakpoint-tips").stop().fadeIn("fast");
    //     }
    // });  ***經測試，於iframe嵌入的內容無效


    // 選取某一斷點後，其他斷點的共同樣式變化
    $("#breakpoint-wrap li").click(function(){
        $("#breakpoint-wrap li").removeClass("active").removeClass("incolor");
        $(this).addClass("active").nextAll().addClass("incolor");
        $("#livedemo-iframe").removeClass();
    }).mouseover(function(){
        $(this).nextAll().addClass("incolor-hover");
        $("#breakpoint-tips").fadeOut("fast");
    }).mouseout(function(){
        $(this).nextAll().removeClass("incolor-hover");
    });


    // 斷點列的橘色背景 + 嵌入內容的容器寬度 + 滑入滑出的背景延伸、斷點左右邊的顏色樣式變換
    $(".breakpoint-full").click(function(){
        $("#breakpoint-wrap").removeClass().addClass("fullscreen");
        $("#breakpoint-icon").removeClass().addClass("breakpoint-icon-full");
        $("#livedemo-iframe").addClass("iframe-full");
    }).mouseover(function(){
        $(this).addClass("incolor-hover");
    }).mouseout(function(){
        $(this).removeClass("incolor-hover");
    });

    $(".breakpoint-1024").click(function(){
        $("#breakpoint-wrap").removeClass().addClass("screen-1024");
        $("#breakpoint-icon").removeClass().addClass("breakpoint-icon-1024");
        $("#livedemo-iframe").addClass("iframe-1024");
    }).mouseover(function(){
        $(this).addClass("incolor-hover");
    }).mouseout(function(){
        $(this).removeClass("incolor-hover");
    });

    $(".breakpoint-768").click(function(){
        $("#breakpoint-wrap").removeClass().addClass("screen-768");
        $("#breakpoint-icon").removeClass().addClass("breakpoint-icon-768");
        $("#livedemo-iframe").addClass("iframe-768");
    }).mouseover(function(){
        $(this).addClass("incolor-hover");
    }).mouseout(function(){
        $(this).removeClass("incolor-hover");
    });

    $(".breakpoint-480").click(function(){
        $("#breakpoint-wrap").removeClass().addClass("screen-480");
        $("#breakpoint-icon").removeClass().addClass("breakpoint-icon-480");
        $("#livedemo-iframe").addClass("iframe-480");
    }).mouseover(function(){
        $(this).addClass("incolor-hover");
    }).mouseout(function(){
        $(this).removeClass("incolor-hover");
    });

    $(".breakpoint-320").click(function(){
        $("#breakpoint-wrap").removeClass().addClass("screen-320");
        $("#breakpoint-icon").removeClass().addClass("breakpoint-icon-320");
        $("#livedemo-iframe").addClass("iframe-320");
    }).mouseover(function(){
        $(this).addClass("incolor-hover");
    }).mouseout(function(){
        $(this).removeClass("incolor-hover");
    });
    
});