// 倒數計時
var countdownnumber = 30;
var countdownid;
function initial(){
    setTimeout('countdownfunc()', 3000);    // 延遲 3 秒等前置動畫跑完後再開始倒數
}
function countdownfunc(){
    var x = document.getElementById("countdown");
    x.innerHTML = countdownnumber;
    if (countdownnumber == 0) { 
        $(".game-wrap").addClass("is-locked");
        $(".game-bet").removeClass("is-start").addClass("is-end");
        $("#countdown").remove();
        $(".game-bet").css("z-index", "");
        $(".game-btn").find("button").prop('disabled', true).css("opacity", ".5");      // 將右側按鈕設為失效

        setTimeout('pokerFlipDemo()', 3000);    // 倒數結束3秒後執行撲克牌開獎模擬函數

        clearTimeout(countdownid);
    }
    else {
        countdownnumber--;
        $(".game-wrap").removeClass("is-locked");
        $(".game-bet").css("z-index", "0");
        $(".gb-chip .chip-item").prop("disabled", false);
        if(countdownid){
            clearTimeout(countdownid);
        }
        countdownid = setTimeout(countdownfunc, 1000);
    }
}

// DEMO: 模擬撲克牌開獎
function pokerFlipDemo(){
    $(".poker-cover").addClass("poker-filp-cover");
    $(".poker-result").addClass("poker-filp-result");
    setTimeout('boardDemo()', 1000);    // 1秒後執行開獎模擬函數
}

// DEMO: 模擬開獎
function boardDemo(){
    $(".board-tiger, .board-d-single, .board-d-small, .board-t-big, .board-t-single").addClass("is-active");
    setTimeout('winDemo()', 1500);    // 1.5秒後執行勝利動畫模擬
}

// DEMO: 模擬勝利動畫
function winDemo(){
    $(".board-tiger").addClass("is-win");
    $(".poker-dragon").addClass("is-lose");
    setTimeout('gamesetDemo()', 2000);    // 2秒後執行籌碼回收
}

// DEMO: 模擬籌碼回收
function gamesetDemo(){
    $(".bet-area").find(".chip-item").animate({
        left: "49%",
        top:  "0%",
        opacity: "0",
    }, 300,"swing");

    $(".poker-tiger").find(".poker-result").animate({
        top:  "-100%",
        left:  "-100%",
        width:  "0",
        height:  "0",
        opacity: "0",
    }, 300, "swing");

    $(".poker-dragon").find(".poker-result").animate({
        top:  "-100%",
        left:  "200%",
        width:  "0",
        height:  "0",
        opacity: "0",
    }, 300, "swing");

    setTimeout(function(){
        $(".bet-area").find(".chip-item").remove();
        $(".poker-result").remove();
    }, 300);
}

// 路紙切換
$(function() {
    $(".gb-btn").click(function() {
        if ($(this).hasClass("is-all")) {
            $(this).removeClass("is-all").addClass("is-big");
            $("#js-all").hide();
            $("#js-big").show();
        }
        else if ($(this).hasClass("is-big")) {
            $(this).removeClass("is-big").addClass("is-all");
            $("#js-all").show();
            $("#js-big").hide();
        }
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

    $("#chipSet").click(function() {
        $("#chipCustom").fadeIn();
        $(".btn-list, .list-wrap").removeClass("active");
        $(".overlay").addClass("active");
        checkChip("10");
        checkChip("20");
        checkChip("50");
        checkChip("100");
        checkChip("500");
        checkChip("1000");
        checkChip("5000");
        checkChip("10000");
        checkChip("50000");
        checkChip("100000");
    });

    $(".btn-close").click(function() {
        $(".game-popup-wrap").fadeOut();
        $(".btn-list, .list-wrap").removeClass("active");
        $(".overlay").removeClass("active");
        $(".gb-chip button").removeClass("is-active");
    });
});

// 選擇籌碼
$(function() {
    $(".gb-chip .chip-item").click(function() {
        $(".chip-item, .chip-set").removeClass("is-active");
        $(this).addClass("is-active");
    });
    $(".gb-chip .chip-set").click(function() {
        $(".chip-item").removeClass("is-active");
        $(this).addClass("is-active");
    });
});

// 籌碼對應
function checkChip(e){
    var chip = $(".gb-chip .chip-item.chip-" + e);
    var checkbox = $("#chip" + e);
    if (chip.hasClass("is-hide")) {
        checkbox.prop('checked', false);
    }
    else {
        checkbox.prop('checked', true);
    }
}
$(function() {
    checkChip("10");
    checkChip("20");
    checkChip("50");
    checkChip("100");
    checkChip("500");
    checkChip("1000");
    checkChip("5000");
    checkChip("10000");
    checkChip("50000");
    checkChip("100000");
});

// 自訂籌碼判斷
$('.cc-item input[type=checkbox]').on('change', function (e) {
    if ($('.cc-item input[type=checkbox]:checked').length > 5) {
        $(this).prop('checked', false);
    }
});

// 確認後更新籌碼
$(function() {
    $(".cc-btn .btn-confirm").click(function() {
        $(".gb-chip .chip-item").removeClass("is-hide");
        $(".game-popup-wrap").fadeOut();
        $(".btn-list, .list-wrap").removeClass("active");
        $(".overlay").removeClass("active");
        $(".gb-chip button").removeClass("is-active");
        selectChip("10");
        selectChip("20");
        selectChip("50");
        selectChip("100");
        selectChip("500");
        selectChip("1000");
        selectChip("5000");
        selectChip("10000");
        selectChip("50000");
        selectChip("100000");
    });
});
function selectChip(e){
    var chip = $(".gb-chip .chip-item.chip-" + e);
    var checkbox = $("#chip" + e);

    if (checkbox.is(":checked")) {
        chip.removeClass("is-hide");
    }
    else {
        chip.addClass("is-hide");
    }
}

// 取消籌碼自訂
$(function() {
    $(".cc-btn .btn-cancel").click(function() {
        $(".game-popup-wrap").fadeOut();
        $(".btn-list, .list-wrap").removeClass("active");
        $(".overlay").removeClass("active");
        $(".gb-chip button").removeClass("is-active");
    });
});

// 產生籌碼
$(function() {
    $(".bet-area").click(function(e){
        var chipSize = $(".gb-chip .chip-item").width() / 3 / 2;                        // 除3為板區籌碼的大小 除2讓籌碼定位可以均分居中
        var parentOffset = $(this).offset();
        /** 這裡的程式碼可以完美解決視窗縮放時籌碼位置會跑掉的問題，但相對就無法設計動畫
        var parentWidth = $(this).width();
        var parentHeight = $(this).height();
        var relX = (e.pageX - parentOffset.left - chipSize) / parentWidth * 100;
        var relY = (e.pageY - parentOffset.top - chipSize) / parentHeight * 100;
        **/
        // var wdWidth = $(".game-wrap").width();                                       // 寬度滿版抓寬
        var wdWidth = $(window).width();                                                // 等比縮放抓寬
        var wdHeight = $(window).height();
        var relX = (e.pageX - chipSize) / wdWidth * 100;                                // 計算 left 值並換算成比例值
        var relY = (e.pageY - chipSize) / wdHeight * 100;                               // 計算 top 值並換算成比例值
        var chipVal = $(".gb-chip .chip-item.is-active").val();                         // 取得目前選擇籌碼的參數值
        var chipItem = $(".gb-chip .chip-item.chip-" + chipVal);
        var cloneChip = chipItem.clone().removeClass("is-active");                      // 複製所選的籌碼並移除 .is-active
        var bottomOffset = chipItem.offset();                                           // 取得底部籌碼的位置

        var chipNewSize = $(".gb-chip .chip-item").width() / 3;


        if (chipItem.hasClass("is-active")) {
            $(this).append(cloneChip);                                                  // 新增複製的籌碼到板區上
            cloneChip.css({"left": bottomOffset.left, "top": bottomOffset.top});        // 給予籌碼定位值

            cloneChip.animate({
                left: relX + "%",
                top:  relY + "%",
                width: chipNewSize,
                height: chipNewSize,
            }, 300,"swing");

            
            // 讓籌碼跑完投擲動畫後轉為絕對定位
            // setTimeout(function(){ 
            //     var childPos = cloneChip.offset();
            //     var parentPos = cloneChip.parent().offset();
            //     var parentWidth = cloneChip.parent().width();
            //     var parentHeight = cloneChip.parent().height();
            //     var aX = (childPos.left - parentPos.left) / parentWidth * 100;
            //     var aY = (childPos.top - parentPos.top) / parentHeight * 100;
            //     // console.log(aX, aY);
            //     cloneChip.css({"position": "absolute", "left": aX + "%", "top": aY + "%"});
            // }
            // , 400);


            // 取消下注回收籌碼
            $(".game-btn .btn-cancel").click(function() {
                cloneChip.css({"position": "fixed", "left": relX + "%", "top": relY + "%"});
                cloneChip.animate({
                    left: "100%",
                    top:  "100%",
                }, 300,"swing");
                setTimeout(function(){
                    cloneChip.remove();
                }, 300);
            });

        }
    });
});
