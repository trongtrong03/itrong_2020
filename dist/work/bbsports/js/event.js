// 計時消除 body hidden
setTimeout(function(){
    $("body").css("overflow-x", "visible");
}, 1000);


// 導覽列移動
var lastId,
    topMenu = $("#mainBody"),
    topMenuHeight = 0,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
    });

menuItems.click(function(e){
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
    $('html, body').stop().animate({ 
        scrollTop: offsetTop
    }, 850);
    e.preventDefault();
});

$(window).scroll(function(){
    var fromTop = $(this).scrollTop()+topMenuHeight;
   
    var cur = scrollItems.map(function(){
        if ($(this).offset().top < fromTop)
            return this;
    });
    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : "";
   
    if (lastId !== id) {
        lastId = id;
        menuItems
            .parent().removeClass("active")
            .end().filter("[href=#"+id+"]").parent().addClass("active");
    }                   
});


// 向下移動
$(".event-scorll-down").click(function() {
    $('html,body').animate({
        scrollTop: $(".event-features-wrap .event-theme-wrap").offset().top},
        '1000');
});


// 滾輪動畫觸發
var $aniPlayer = $('span[class*="event-deco-player"]');
var $window = $(window);

function checkAnimate() {
    var wHeight = $window.height();
    var wTopPosition = $window.scrollTop();
    var wbottomPosition = (wTopPosition + wHeight);

    $.each($aniPlayer, function() {
        var $element = $(this);
        var eleHeight = $element.outerHeight();
        var eleTopPosition = $element.offset().top + 400;
        var eleBottomPosition = (eleTopPosition + eleHeight);

        if ((eleBottomPosition >= wTopPosition) &&
            (eleTopPosition <= wbottomPosition)) {
            $element.addClass('animated');
        } 
        else {
          $element.removeClass('animated');
        }
    });
}

$window.on('scroll resize', checkAnimate);
$window.trigger('scroll');