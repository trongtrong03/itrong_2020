// 視窗一經拖曳就重新更新頁面
$(window).bind('resize', function(e) {
    if (window.RT) clearTimeout(window.RT);
    window.RT = setTimeout(function() {
        this.location.reload(false); /* false to get page from cache */
    }, 0);
});


// 計算畫面正確的vh值
// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);


// removeTextNodes
$('.removeTextNodes').contents().filter(function() {
	return this.nodeType === 3;
}).remove();


// game nav list
$(function() {
    $(".btn-list").click(function() {
        $(this).toggleClass("active");
        $(".list-wrap").toggleClass("active");
    });
});

// chat
$(function() {
    $(".btn-chat").click(function() {
        $(".chat-wrap").toggleClass("active");
    });
});

// 彈窗
$(function() {
    $("#btnRule").click(function() {
        $("#gameRule").fadeIn();
        $(".overlay").addClass("active");
    });

    $("#btnRecord").click(function() {
        $("#gameRecord").fadeIn();
        $(".overlay").addClass("active");
    });

    $("#btnSet").click(function() {
        $("#gameSet").fadeIn();
        $(".overlay").addClass("active");
    });

    $("#btnLimit").click(function() {
        $(".game-limit-wrap").addClass("active");
        $(".btn-list, .list-wrap").removeClass("active");
    });

    $(".btn-close").click(function() {
        $(".game-popup-wrap").fadeOut();
        $(".btn-list, .list-wrap").removeClass("active");
        $(".game-limit-wrap").removeClass("active");
        $(".overlay").removeClass("active");
    });

    $(".tip-close").click(function() {
        $(".tip-wrap").fadeOut();
        $(".overlay").removeClass("active");
    });
});

// 遊戲設定
$(function() {
    $("#gameSet .btn-cancel").click(function() {
        $(".game-popup-wrap").fadeOut();
        $(".overlay").removeClass("active");
    });
});

// 提示視窗DEMO
$(function() {
    $(".game-amount").click(function() {
        $(".tip-wrap").fadeIn();
        $(".overlay").addClass("active");
    });
});
