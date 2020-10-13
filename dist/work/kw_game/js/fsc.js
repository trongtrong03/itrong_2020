// DEMO: 聊天室自動拉到最底
$(function() {
    $('.chat-content').scrollTop($('.chat-content')[0].scrollHeight);
});


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
        $(".game-bet").removeClass("is-start").addClass("is-end");
        $("#countdown").remove();
        $(".game-bet").css("z-index", "");
        $(".game-btn").find("button").prop('disabled', true);      // 將右側按鈕設為失效
        $(".gb-chip .chip-item").prop("disabled", true).removeClass("is-active");

        setTimeout('dicecupShowDemo()', 3000);    // 倒數結束3秒後執行開獎模擬函數

        clearTimeout(countdownid);
    }
    else {
        countdownnumber--;
        $(".game-bet").css("z-index", "0");
        $(".gb-chip .chip-item").prop("disabled", false);
        if(countdownid){
            clearTimeout(countdownid);
        }
        countdownid = setTimeout(countdownfunc, 1000);
    }
}

// DEMO: 模擬開獎
function dicecupShowDemo(){
    $(".result-wrap").fadeIn();
    setTimeout(function(){                      // 5秒後關閉開獎視窗(含3.5秒動畫)
        $(".result-wrap").fadeOut();
        setTimeout('amountDemo()', 1000);    // 跑總注加減
    }, 7000);
}

// 給予開獎紀錄的總寬值與各項目定位值
$(function() {
    var recordItemWidth = $(".gb-record").find("li").outerWidth();
    $(".gb-record").find("ul").css("width", recordItemWidth * 8);
    $(".gb-record li").each(function(index) {
        $(".gb-record li").eq(index).css("left", recordItemWidth * index);
    });
});

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
    $(".board-item.is-small, .board-item.is-pt9").addClass("is-active");
    $(".gb-record").find("li:last").remove();  // 移除記錄的最後一筆
    $(".gb-record").find("li").addClass("is-move");
    $(".gb-record").find("ul").prepend("<li class='is-latest'><div><span class='is-fish'></span><span class='is-shrimp'></span><span class='is-gourd'></span><b class='is-small'><i>9</i><i>小</i></b></div></li>");   // 新增最新記錄

    setTimeout('gamesetDemo()', 2000);    // 2秒後執行籌碼回收
}


// DEMO: 模擬籌碼回收
function gamesetDemo(){
    $(".bet-area").find(".chip-item").animate({
        left: "49%",
        top:  "0%",
        opacity: "0",
    }, 300,"swing");

    setTimeout(function(){
        $(".bet-area").find(".chip-item").remove();
        $(".bet-count").hide().text("0");
        $(".bet-amount").hide().text("0");
        $(".board-item").removeClass("is-active");
    }, 1000);
}


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
    if ($('.cc-item input[type=checkbox]:checked').length > 4) {
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
            $(this).append(cloneChip);                                                  // 新增複製的籌碼到板區上
            cloneChip.css({"left": bottomOffset.left, "top": bottomOffset.top});        // 給予籌碼定位值

            cloneChip.animate({
                left: relX + "%",
                top:  relY + "%",
                width: chipNewSize,
                height: chipNewSize,
            }, 300,"swing");


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
            var TotalAmount = $(".gb-amount").text();
            var newTotalAmount = parseInt(chipVal) + parseInt(TotalAmount);
            $(".gb-amount").find("b").text(newTotalAmount);
            setTimeout(function(){
                $(".gb-amount").find("span").removeClass().text("");
            }, 3000);
        }
    });
}

// 開始投注
function beginBet(){
    setTimeout('betChip()', 3000);    // 延遲 3 秒等前置動畫跑完後再開始下注
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