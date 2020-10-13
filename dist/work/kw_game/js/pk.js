// 倒數計時
var countdownnumber = 1;
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
        $(".bet-coin").prop('disabled', true).removeClass("active");      // 將按鈕設為失效

        setTimeout('pokerFlipDemo()', 3000);    // 倒數結束3秒後執行撲克牌開獎模擬函數

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

// DEMO: 模擬撲克牌開獎
function pokerFlipDemo(){
    $(".poker-cover").addClass("poker-filp-cover");
    $(".poker-result").addClass("poker-filp-result");
    $(".poker-light").addClass("run-animation");
    $(".starlight").addClass("active");
    $(".suitsItem").addClass("active");
    setTimeout('winDemo()', 2000);      // 開獎結果模擬
    setTimeout('cleanStar()', 2000);    // 把撲克牌的星星效果移除
}

function cleanStar(){
    $(".starlight").removeClass("active");
    $(".suitsItem").removeClass("active");
}

function winDemo(){
    $("#betSpade").addClass("is-win");
    setTimeout('pokerResetDemo()', 2000);      // 開獎結果模擬
}

function pokerResetDemo(){
    $(".poker-card").addClass("poker-reset");
}


// bet click
$(function() {
    $(".bet-coin").click(function() {
        $(".bet-coin").removeClass("active");
        $(this).addClass("active");
    });
});


// stakes
$(function() {
    $(".btn-clean, .btn-continue").click(function() {
        $(".stakes-btn button").removeClass("active");
        $(this).addClass("active");
        setTimeout('cleanStakesActive()', 300);
    });
});

function cleanStakesActive(){
    $(".stakes-btn button").removeClass("active");
}