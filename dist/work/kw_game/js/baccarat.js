// DEMO: 聊天室自動拉到最底
$(function() {
    $('.chat-content').scrollTop($('.chat-content')[0].scrollHeight);
});


// 倒數計時
var countdownnumber = 30;
var countdownid;
function initial(){
    setTimeout('countdownfunc()', 5000);    // 延遲 5 秒等前置動畫跑完後再開始倒數
}
function countdownfunc(){
    var x = document.getElementById("countdown");
    x.innerHTML = countdownnumber;
    if (countdownnumber == 0) {
        $(".game-bet").removeClass("is-start").addClass("is-end");
        $("#countdown").remove();
        $(".game-bet").css("z-index", "");
        $(".game-btn").find("button").prop('disabled', true);      // 將右側按鈕設為失效
        $(".gb-chip .chip-item").prop("disabled", true).removeClass("is-active");

        setTimeout('pokerFlipDemo()', 3000);    // 倒數結束3秒後執行撲克牌開獎模擬函數

        clearTimeout(countdownid);
    }
    else {
        countdownnumber--;
        $(".game-bet").css("z-index", "0");
        $(".gb-chip .chip-item").prop("disabled", false);
        $(".board-item").removeClass("is-active");
        if(countdownid){
            clearTimeout(countdownid);
        }
        countdownid = setTimeout(countdownfunc, 1000);
    }
}

// DEMO: 模擬撲克牌開牌
function pokerFlipDemo(){
    $(".result-wrap").fadeIn();
    $(".result-main").siblings(".is-default").addClass("is-active");
    setTimeout('pokerOpenDemo()', 1000);    // 1秒後執行開獎模擬函數
}

// DEMO: 莊閒家開牌
function pokerOpenDemo(){
    var player = $(".result-main").siblings(".is-default").find(".result-item-group.is-player");
    var banker = $(".result-main").siblings(".is-default").find(".result-item-group.is-banker");

    // 閒家第一張
    setTimeout(function(){
        player.find(".is-p1").find(".is-cover").addClass("is-out");
        player.find(".is-p1").append("<div class='poker-box poker-c4 is-in'></div>");
        $(".poker-item").siblings(".is-p1").find(".poker-cover").remove();
        $(".poker-item").siblings(".is-p1").append("<div class='poker-result poker-c4'></div>");

    }, 0);

    // 閒家第二張
    setTimeout(function(){
        player.find(".is-p2").find(".is-cover").addClass("is-out");
        player.find(".is-p2").append("<div class='poker-box poker-h6 is-in'></div>");
        $(".poker-item").siblings(".is-p2").find(".poker-cover").remove();
        $(".poker-item").siblings(".is-p2").append("<div class='poker-result poker-h6'></div>");
    }, 1000);

    // 莊家第一張
    setTimeout(function(){
        banker.find(".is-b1").find(".is-cover").addClass("is-out");
        banker.find(".is-b1").append("<div class='poker-box poker-c7 is-in'></div>");
        $(".poker-item").siblings(".is-b1").find(".poker-cover").remove();
        $(".poker-item").siblings(".is-b1").append("<div class='poker-result poker-c7'></div>");
    }, 2000);

    // 莊家第二張
    setTimeout(function(){
        banker.find(".is-b2").find(".is-cover").addClass("is-out");
        banker.find(".is-b2").append("<div class='poker-box poker-h4 is-in'></div>");
        $(".poker-item").siblings(".is-b2").find(".poker-cover").remove();
        $(".poker-item").siblings(".is-b2").append("<div class='poker-result poker-h4'></div>");
    }, 3000);

    // 關閉莊賢開牌
    setTimeout(function(){  
        $(".result-wrap").fadeOut();
        $(".result-main.is-default").removeClass("is-active");
    }, 5000);

    setTimeout('pointSumDemo()', 5000);    // 1秒後執行數字加總
}

// DEMO: 數字加總
function pointSumDemo(){
    $(".number-player, .number-banker").addClass("is-active");
    $(".number-player").append("<span class='is-num0'></span>");
    $(".number-banker").append("<span class='is-num1'></span>");

    setTimeout(function(){
        $(".number-player, .number-banker").removeClass("is-active");   // 清除動畫效果 class
    }, 2000);
    setTimeout('pokerDrawDemo()', 2000);    // 2秒後補牌
}

// DEMO: 補牌
function pokerDrawDemo(){
    $(".poker-area").css("z-index", "10");  // 調整 Z 軸，使補牌不會壓在下注區下方
    setTimeout(function(){
        $(".poker-item").siblings(".order-5").addClass("is-active");
    }, 0);

    setTimeout(function(){
        $(".poker-item").siblings(".order-6").addClass("is-active");
    }, 750);

    setTimeout(function(){
        $(".result-wrap").fadeIn();
        $(".result-main").siblings(".is-draw").addClass("is-active");
    }, 2000);

    setTimeout('drawOpenDemo()', 3000);    // 3秒(2秒發牌 + 1秒等待)後補牌開獎
}

// DEMO: 補牌開獎
function drawOpenDemo(){
    var player = $(".result-main").siblings(".is-draw").find(".result-item-group.is-player");
    var banker = $(".result-main").siblings(".is-draw").find(".result-item-group.is-banker");

    // 閒家補牌
    setTimeout(function(){
        player.find(".is-p3").find(".is-cover").addClass("is-out");
        player.find(".is-p3").append("<div class='poker-box poker-s5 is-in'></div>");
        $(".poker-item").siblings(".is-p3").find(".poker-cover").remove();
        $(".poker-item").siblings(".is-p3").append("<div class='poker-result poker-s5'></div>");
        $(".number-player").empty().append("<span class='is-num5'></span>");
    }, 0);

    // 莊家補牌
    setTimeout(function(){
        banker.find(".is-b3").find(".is-cover").addClass("is-out");
        banker.find(".is-b3").append("<div class='poker-box poker-d5 is-in'></div>");
        $(".poker-item").siblings(".is-b3").find(".poker-cover").remove();
        $(".poker-item").siblings(".is-b3").append("<div class='poker-result poker-d5'></div>");
        $(".number-banker").empty().append("<span class='is-num6'></span>");
    }, 1000);

    // 關閉莊賢補牌
    setTimeout(function(){  
        $(".result-wrap").fadeOut();
        $(".result-main").siblings(".is-draw").removeClass("is-active");
        setTimeout(function(){  
            $(".number-player").addClass("is-active");
        }, 500);
        setTimeout(function(){  
            $(".number-banker").addClass("is-active");
        }, 1000);

        setTimeout('winDemo()', 3000);    // 3秒後執行勝利動畫
    }, 3000);
}


// DEMO: 模擬勝利動畫
function winDemo(){
    $(".win-wrap").fadeIn();
    $(".win-main").addClass("is-banker");   // 莊家: is-banker / 閒家: is-player / 和: is-tie

    setTimeout(function(){  
        $(".win-wrap").fadeOut();
        $(".board-item").siblings(".is-banker").addClass("is-active");
        $(".board-item").siblings(".is-banker-double").addClass("is-active");

        setTimeout('amountDemo()', 4000);    // 4秒後執行總注結算
    }, 3000);
}

// 總注結算 + 莊閒問路更新
function amountDemo(){
    var amountSofar =$(".gb-amount").find("b").text();
    var increase = "999999";
    var amountNew = parseInt(amountSofar) + parseInt(increase);
    $(".gb-amount").addClass("is-animate");
    $(".gb-amount").find("span").text(increase).addClass("is-increase");    // 增加: is-increase / 減少: is-reduce
    $(".gb-amount").find("b").text(amountNew);
    setTimeout(function(){
        $(".gb-amount").removeClass("is-animate");
        $(".gb-amount").find("span").removeClass().text("");
    }, 1500);
    $(".gb-forecast").find(".is-banker").find("span:last").remove();  // (示範)移除莊家問路的最後一筆
    $(".gb-forecast").find(".is-banker").prepend("<span class='is-big-banker is-latest'></span>");

    setTimeout('gamesetDemo()', 3000);    // 3秒後執行籌碼回收
}

// DEMO: 模擬籌碼回收
function gamesetDemo(){
    $(".bet-area").find(".chip-item").animate({
        left: "49%",
        top:  "0%",
        opacity: "0",
    }, 300,"swing");

    setTimeout(function(){
        // 重置
        $(".bet-area").find(".chip-item").remove();
        $(".poker-item").removeClass("is-active").empty();
        $(".number-player, .number-banker").removeClass("is-active").empty();
        $(".bet-count").hide().text("0");
        $(".bet-amount").hide().text("0");
        $(".board-item").removeClass("is-active");
        $(".win-main").removeClass("is-banker");
        $(".win-main").removeClass("is-player");
        $(".win-main").removeClass("is-tie");
        $(".poker-area").css("z-index", "");
        $(".gb-forecast").find("span").removeClass("is-latest");
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
function betChip() {
    $(".bet-area").click(function(e){
        var chipSize = $(".gb-chip .chip-item").width() / 3 / 2;                        // 除3為板區籌碼的大小 除2讓籌碼定位可以均分居中
        var parentOffset = $(this).offset();

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
            var angleDeg = Math.floor(Math.random()*361);                               // 隨機從 0~360 度之間選出亂數角度

            $(this).append(cloneChip);                                                  // 新增複製的籌碼到板區上
            cloneChip.css({
                "left": bottomOffset.left,
                "top": bottomOffset.top,
                "transform": "rotate(" + angleDeg + "deg)",
            });        // 給予籌碼定位值
            
            cloneChip.animate({
                left: relX + "%",
                top:  relY + "%",
                width: chipNewSize,
                height: chipNewSize,
            }, 300, "swing");


            // DEMO: 取消下注回收籌碼
            $(".game-btn .btn-cancel").click(function() {
                cloneChip.css({"position": "fixed", "left": relX + "%", "top": relY + "%"});
                cloneChip.animate({
                    left: "100%",
                    top:  "100%",
                }, 300,"swing");
                setTimeout(function(){
                    cloneChip.remove();
                }, 300);

                $(".bet-count").hide();
                $(".bet-amount").text("0").hide();
                $(".gb-amount").find("b").text("0");
                setTimeout(function(){
                    $(".gb-amount").find("span").removeClass().text("");
                }, 500);
            });

            // DEMO: 下注金額
            var sofarBetCount = $(this).parent().find(".bet-amount").text();
            var newBetCount = parseInt(chipVal) + parseInt(sofarBetCount);
            $(this).parent().find(".bet-amount").show().text(newBetCount);

            // DEMO: 累積下注
            var sofarBetCountAll = $(this).parent().find(".bet-count").text();
            var newBetCountAll = parseInt(chipVal) + parseInt(sofarBetCountAll);
            $(this).parent().find(".bet-count").show().text(newBetCountAll);

            // DEMO: 總注
            var TotalAmount = $(".gb-amount").find("b").text();
            var newTotalAmount = parseInt(chipVal) + parseInt(TotalAmount);
            $(".gb-amount").find("b").text(newTotalAmount);
            setTimeout(function(){
                $(".gb-amount").find("span").removeClass().text("");
            }, 3000);
        }
    });
}


// 發牌
function pokerThrow(){
    setTimeout(function(){
        $(".poker-item").siblings(".order-1").addClass("is-active");
    }, 0);
    setTimeout(function(){
        $(".poker-item").siblings(".order-2").addClass("is-active");
    }, 750);
    setTimeout(function(){
        $(".poker-item").siblings(".order-3").addClass("is-active");
    }, 1500);
    setTimeout(function(){
        $(".poker-item").siblings(".order-4").addClass("is-active");
    }, 2250);

    setTimeout(function(){
        $(".poker-area").css("z-index", "1");       // 修改 Z 值，籌碼移動時才不會 Z 軸低於撲克牌
    }, 5000);

    setTimeout(function(){
        $(".game-bet").addClass("is-start");        // 執行開始動畫
        $(".board-item").addClass("is-active");     // 移除下注板塊的閃現動畫
    }, 3500);
}
pokerThrow();


// 開始投注
function beginBet(){
    setTimeout('betChip()', 5000);    // 延遲 5 秒等前置動畫跑完後再開始下注
}
beginBet();


// 取消與重複的動態
$(function() {
    $(".game-btn .btn-repeat").click(function() {
        $(".game-btn").addClass("is-repeat");
        setTimeout('clearGameBtnStatus()', 500);
    });
    $(".game-btn .btn-cancel").click(function() {
        $(".game-btn").addClass("is-cancel");
        setTimeout('clearGameBtnStatus()', 500);
    });
});

function clearGameBtnStatus() {
    $(".game-btn").removeClass("is-repeat");
    $(".game-btn").removeClass("is-cancel");
}