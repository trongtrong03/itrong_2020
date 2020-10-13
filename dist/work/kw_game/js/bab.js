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
        $(".game-bet").css("z-index", "");
        $(".gb-chip .chip-item").removeClass("is-active").prop("disabled", true);   // 移除籌碼按鈕可選狀態以停止下注
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


// DEMO: 模擬小瑪莉開獎
var numDiv = 0;
var stopPlay = 0;
var runTimes = 0;
var sec = 50;

init();
function play() {
    numDiv++;
    runTimes++;
    if (numDiv >= 25) {
        numDiv = 1;
    }
    if (runTimes > stopPlay) {}
    else if (runTimes + 10 > stopPlay) {
        $(".run-n" + numDiv)
            .addClass("is-active")
            .siblings()
            .removeClass("is-active");
        setTimeout(play, (sec = sec * 1.4));
    }
    else {
        $(".run-n" + numDiv)
            .addClass("is-active")
            .siblings()
            .removeClass("is-active");
        setTimeout(play, sec);
    }
}
function init() {
    runTimes = 0;
    sec = 50;
    numDiv = numDiv - 1;
}

setTimeout(function(){
    if (runTimes > 0) return;
    stopPlay = Math.floor(Math.random() * (48 - 0) + 48);
    play();
    setTimeout('winDemo()', 8000); 
}, 35000); // 載入頁面後3秒開始跑動畫 + 倒數時間30秒 + 1.5秒倒數計時結束動畫 + .5秒間隔


// DEMO: 模擬中獎畫面
function winDemo(){
    $('.run-item div').each(function(){
        if($(this).parent().hasClass('is-active')) {
            var newResult = $(this).attr("class");
            var bonus = $(".bet-board").find("." + newResult).find(".bet-count").text().replace(/\d+?(?=(?:\d{3})+$)/img, "$&,");
            $(".winning-wrap").fadeIn("fast");
            $(".winning-content").addClass(newResult + " is-animation").text("+" + bonus);
            tick();  // 執行粒子特效函式
            setTimeout('overDemo()', 5000);  // 執行開獎後續
        } 
    });
}


// DEMO: 開獎後續
function overDemo(){
    var getLatest = $(".r-latest").find("div").attr("class");
    $(".winning-wrap").fadeOut("fast");
    $(".r-history ul").prepend("<li class='r-item'><div class='" + getLatest + "'></div></li>");
    $('.run-item div').each(function(){
        if($(this).parent().hasClass('is-active')) {
            var newResult = $(this).attr("class");
            $(".r-latest").find("div").removeClass().addClass(newResult + " is-animation");
        } 
    });
    setTimeout('gamesetDemo()', 2000);  // 執行開獎後續
    
}

// DEMO: 籌碼回收
function gamesetDemo(){
    $(".bet-count").text("0");
    $(".bet-chips").find(".chip-item").animate({
        left: "49%",
        top:  "0%",
        opacity: "0",
    }, 300,"swing");
    setTimeout(function(){
        $(".bet-chips").find(".chip-item").remove();
    }, 300);
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
        checkChip("1k");
        checkChip("5k");
        checkChip("10k");
        checkChip("50k");
        checkChip("100k");
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

        // var wdWidth = $(".game-wrap").width();
        var wdWidth = $(window).width();
        var wdHeight = $(window).height();
        var relX = (e.pageX - chipSize) / wdWidth * 100;                                // 計算 left 值並換算成比例值
        var relY = (e.pageY - chipSize) / wdHeight * 100;                               // 計算 top 值並換算成比例值
        var chipVal = $(".gb-chip .chip-item.is-active").val();                         // 取得目前選擇籌碼的參數值
        var chipItem = $(".gb-chip .chip-item.chip-" + chipVal);
        var cloneChip = chipItem.clone().removeClass("is-active");                      // 複製所選的籌碼並移除 .is-active
        var bottomOffset = chipItem.offset();                                           // 取得底部籌碼的位置

        var chipNewSize = $(".gb-chip .chip-item").width() / 3;


        if (chipItem.hasClass("is-active")) {
            $(this).next(".bet-chips").append(cloneChip);                                                  // 新增複製的籌碼到板區上
            cloneChip.css({"left": bottomOffset.left, "top": bottomOffset.top});        // 給予籌碼定位值

            cloneChip.animate({
                left: relX + "%",
                top:  relY + "%",
                width: chipNewSize,
                height: chipNewSize,
            }, 300,"swing");

            // 計算金額
            var sofarBetCount = $(this).parent().prev(".bet-count").text();
            var newBetCount = parseInt(chipVal) + parseInt(sofarBetCount);
            $(this).parent().prev(".bet-count").text(newBetCount);

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
                $(".bet-count").text("0");
            });

        }
    });
}


// 開始投注
function beginBet(){
    setTimeout('betChip()', 3000);    // 延遲 3 秒等前置動畫跑完後再開始下注
}
beginBet();


// 光點特效
var getV = function() {
    return 5 * (Math.random() - .5);
}
var getP = function() {
    return 5 * (Math.random() - .5);
}
// flake class
function Flake() {
    this._node = document.createElement('div');
    this._node.className = 'w-flake';
    this._vec = {x:getV(),y:getV()};
    // this._pos = {x:this._vec.x * 40,y:this._vec.y * 40 - 10};
    this._pos = {x:this._vec.x * 80,y:this._vec.y * 80};
    this._scale = 2 + Math.random();
    this._scale = Math.max(0,this._scale - (.03 * 60));
    if ((this._pos.x * this._pos.x + this._pos.y *  this._pos.y) < 8000) {
        this._render();
    }
};
Flake.prototype = {
    getNode:function() {
        return this._node;
    },
    update:function() {
        if (!this._pos) {
            this._pos = {x:0, y:0};
            this._vec = {x:getV(), y:getV()};
            this._scale = 2 + Math.random();
        }
        // this._vec.y += .05;
        this._pos.x += this._vec.x;
        this._pos.y += this._vec.y;
        this._scale = Math.max(0, this._scale - .03);
        this._render();

        if ((this._pos.x * this._pos.x + this._pos.y *  this._pos.y) > 100000) {
            this._pos = null;
        }
    },
    _render:function() {
        var transform = 'translate3d(' + this._pos.x + 'px,' + this._pos.y +'px, 0) scale('+ this._scale +')';
        this._node.style['msTransform'] = transform;
        this._node.style['webkitTransform'] = transform;
        this._node.style['MozTransform'] = transform;
        this._node.style['OTransform'] = transform;
        this._node.style['transform'] = transform;
    }
};
// the flakes
var MAX_FLAKES = 50;
var orb = document.querySelector('.winning-bg');
var flakes = new Array(MAX_FLAKES);
var flake;
var i=0;
// setup flakes
for (;i<MAX_FLAKES;i++) {
    flake = new Flake();
    var node = flake.getNode();
    orb.appendChild(node);
    flakes[i] = flake;
}
// the flake creator
var tick = function() {
    // update flakes
    for (i=0;i<MAX_FLAKES;i++) {
        flake = flakes[i];
        flake.update();
    }
    // next tick
    requestAnimationFrame(function(){
        tick();
    })
}
// start ticking
// setTimeout(function(){
//     tick();
// }, 250);


// 按鈕觸發效果
$(function() {
    $(".btn-repeat, .btn-cancel").click(function() {
        $(".game-btn button").removeClass("is-active");
        $(this).addClass("is-active");
        setTimeout('cleanBtnActive()', 300);
    });
});

function cleanBtnActive(){
    $(".game-btn button").removeClass("is-active");
}