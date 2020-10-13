// 裝置手持方向判定
$(window).on("deviceorientation resize", function( event ) {
    var screen_width;
    if (window.matchMedia("(orientation: portrait)").matches) {
        $('.alert-overlay').addClass('active');
        $('html, body').addClass('no-scroll');
    }
    if (window.matchMedia("(orientation: landscape)").matches) {
        $('.alert-overlay').removeClass('active');
        $('html, body').removeClass('no-scroll');
    }
});


// iOS 裝置隱藏全螢幕功能
if (/(iPhone|iPad|iPod)/i.test(navigator.userAgent)) {   
    $('.fullscreen-wrap').addClass('none');
    $('html').addClass('ios');
    $('.record-wrap .record-items').addClass('ios');
};


// 按鈕HOVER
function undoOverImage() {
    document.getElementById("undoBtn").src = "image/btn_undo_h.png";
}
function undoOutImage() {
    document.getElementById("undoBtn").src = "image/btn_undo.png";
}

function setOverImage() {
    document.getElementById("setBtn").src = "image/btn_set_h.png";
}
function setOutImage() {
    document.getElementById("setBtn").src = "image/btn_set.png";
}

function clearOverImage() {
    document.getElementById("clearBtn").src = "image/btn_clear_h.png";
}
function clearOutImage() {
    document.getElementById("clearBtn").src = "image/btn_clear.png";
}


// Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();


// 選擇語系
$('#langBtn').click(function() {
    $('.lang-wrap').slideToggle();
    $('.custom-wrap').fadeOut();
});


// 點擊籌碼
var $chip10 = $('#chips10');
var $chip50 = $('#chips50');
var $chip100 = $('#chips100');
var $chip500 = $('#chips500');

function chipClick() {
    $('.ctrl-nav').find('.ctrl-btn-chips').removeClass("active");
    $(this).addClass('active');
    $('.custom-wrap').fadeOut();
    $('.lang-wrap').slideUp();
}

$chip10.click(chipClick);
$chip50.click(chipClick);
$chip100.click(chipClick);
$chip500.click(chipClick);

// 籌碼下注
function chipsSet1() {
    var posY = $(this).data('posY') || 0;
    var topVal = 'style="top: calc(40% - ' + posY + 'px);">';
    var chipImg = '<img src="image/chips_f.png"></span>';
    posY += 5;
    $(this).data('posY', posY)
    if($chip10.hasClass('active')) {
        $(this).append('<span class="chips chips10" ' + topVal +  chipImg);
    }
    else if($chip50.hasClass('active')) {
        $(this).append('<span class="chips chips50" ' + topVal + chipImg);
    }
    else if($chip100.hasClass('active')) {
        $(this).append('<span class="chips chips100" ' + topVal + chipImg);
    }
    else if($chip500.hasClass('active')) {
        $(this).append('<span class="chips chips500" ' + topVal + chipImg);
    }
    $('.custom-wrap').fadeOut();
    $('.lang-wrap').slideUp();
}

function chipsSet2() {
    var posY = $(this).data('posY') || 0;
    var topVal = 'style="top: calc(-10px - ' + posY + 'px);">';
    var chipImg = '<img src="image/chips_f.png"></span>';
    posY += 5;
    $(this).data('posY', posY)
    if($chip10.hasClass('active')) {
        $(this).append('<span class="chips chips10" ' + topVal +  chipImg);
    }
    else if($chip50.hasClass('active')) {
        $(this).append('<span class="chips chips50" ' + topVal + chipImg);
    }
    else if($chip100.hasClass('active')) {
        $(this).append('<span class="chips chips100" ' + topVal + chipImg);
    }
    else if($chip500.hasClass('active')) {
        $(this).append('<span class="chips chips500" ' + topVal + chipImg);
    }
    $('.custom-wrap').fadeOut();
    $('.lang-wrap').slideUp();
}

function chipsSet3() {
    var posY = $(this).data('posY') || 0;
    var topVal = 'style="top: calc(1px - ' + posY + 'px);">';
    var chipImg = '<img src="image/chips_f.png"></span>';
    posY += 5;
    $(this).data('posY', posY)
    if($chip10.hasClass('active')) {
        $(this).append('<span class="chips chips10" ' + topVal +  chipImg);
    }
    else if($chip50.hasClass('active')) {
        $(this).append('<span class="chips chips50" ' + topVal + chipImg);
    }
    else if($chip100.hasClass('active')) {
        $(this).append('<span class="chips chips100" ' + topVal + chipImg);
    }
    else if($chip500.hasClass('active')) {
        $(this).append('<span class="chips chips500" ' + topVal + chipImg);
    }
    $('.custom-wrap').fadeOut();
    $('.lang-wrap').slideUp();
}

$('#Num0 .chips-area').click(chipsSet1);
$('#Num00 .chips-area').click(chipsSet1);
$('#Num01 .chips-area').click(chipsSet1);
$('#Num02 .chips-area').click(chipsSet1);
$('#Num03 .chips-area').click(chipsSet1);
$('#Num04 .chips-area').click(chipsSet1);
$('#Num05 .chips-area').click(chipsSet1);
$('#Num06 .chips-area').click(chipsSet1);
$('#Num07 .chips-area').click(chipsSet1);
$('#Num08 .chips-area').click(chipsSet1);
$('#Num09 .chips-area').click(chipsSet1);
$('#Num10 .chips-area').click(chipsSet1);
$('#Num11 .chips-area').click(chipsSet1);
$('#Num12 .chips-area').click(chipsSet1);
$('#Num13 .chips-area').click(chipsSet1);
$('#Num14 .chips-area').click(chipsSet1);
$('#Num15 .chips-area').click(chipsSet1);
$('#Num16 .chips-area').click(chipsSet1);
$('#Num17 .chips-area').click(chipsSet1);
$('#Num18 .chips-area').click(chipsSet1);
$('#Num19 .chips-area').click(chipsSet1);
$('#Num20 .chips-area').click(chipsSet1);
$('#Num21 .chips-area').click(chipsSet1);
$('#Num22 .chips-area').click(chipsSet1);
$('#Num23 .chips-area').click(chipsSet1);
$('#Num24 .chips-area').click(chipsSet1);
$('#Num25 .chips-area').click(chipsSet1);
$('#Num26 .chips-area').click(chipsSet1);
$('#Num27 .chips-area').click(chipsSet1);
$('#Num28 .chips-area').click(chipsSet1);
$('#Num29 .chips-area').click(chipsSet1);
$('#Num30 .chips-area').click(chipsSet1);
$('#Num31 .chips-area').click(chipsSet1);
$('#Num32 .chips-area').click(chipsSet1);
$('#Num33 .chips-area').click(chipsSet1);
$('#Num34 .chips-area').click(chipsSet1);
$('#Num35 .chips-area').click(chipsSet1);
$('#Num36 .chips-area').click(chipsSet1);

// 打
$('#Dozen01 .chips-area').click(chipsSet1);
$('#Dozen02 .chips-area').click(chipsSet1);
$('#Dozen03 .chips-area').click(chipsSet1);

// 單雙
$('#Evenbet .chips-area').click(chipsSet1);
$('#oddBet .chips-area').click(chipsSet1);

// 大小
$('#Lowbet .chips-area').click(chipsSet1);
$('#Highbet .chips-area').click(chipsSet1);

// 雙色
$('#Redbet .chips-area').click(chipsSet1);
$('#Blackbet .chips-area').click(chipsSet1);

// 列注
$('#Column1to34 .chips-area').click(chipsSet1);
$('#Column2to35 .chips-area').click(chipsSet1);
$('#Column3to36 .chips-area').click(chipsSet1);

// 分注:直
$('#Split3a6 .chips-area').click(chipsSet1);
$('#Split6a9 .chips-area').click(chipsSet1);
$('#Split9a12 .chips-area').click(chipsSet1);
$('#Split12a15 .chips-area').click(chipsSet1);
$('#Split15a18 .chips-area').click(chipsSet1);
$('#Split18a21 .chips-area').click(chipsSet1);
$('#Split21a24 .chips-area').click(chipsSet1);
$('#Split24a27 .chips-area').click(chipsSet1);
$('#Split27a30 .chips-area').click(chipsSet1);
$('#Split30a33 .chips-area').click(chipsSet1);
$('#Split33a36 .chips-area').click(chipsSet1);
$('#Split2a5 .chips-area').click(chipsSet1);
$('#Split5a8 .chips-area').click(chipsSet1);
$('#Split8a11 .chips-area').click(chipsSet1);
$('#Split11a14 .chips-area').click(chipsSet1);
$('#Split14a17 .chips-area').click(chipsSet1);
$('#Split17a20 .chips-area').click(chipsSet1);
$('#Split20a23 .chips-area').click(chipsSet1);
$('#Split23a26 .chips-area').click(chipsSet1);
$('#Split26a29 .chips-area').click(chipsSet1);
$('#Split29a32 .chips-area').click(chipsSet1);
$('#Split32a35 .chips-area').click(chipsSet1);
$('#Split1a4 .chips-area').click(chipsSet1);
$('#Split4a7 .chips-area').click(chipsSet1);
$('#Split7a10 .chips-area').click(chipsSet1);
$('#Split10a13 .chips-area').click(chipsSet1);
$('#Split13a16 .chips-area').click(chipsSet1);
$('#Split16a19 .chips-area').click(chipsSet1);
$('#Split19a22 .chips-area').click(chipsSet1);
$('#Split22a25 .chips-area').click(chipsSet1);
$('#Split25a28 .chips-area').click(chipsSet1);
$('#Split28a31 .chips-area').click(chipsSet1);
$('#Split31a34 .chips-area').click(chipsSet1);

// 分注:橫
$('#Split0a00 .chips-area').click(chipsSet3);
$('#Split2a3 .chips-area').click(chipsSet3);
$('#Split5a6 .chips-area').click(chipsSet3);
$('#Split8a9 .chips-area').click(chipsSet3);
$('#Split11a12 .chips-area').click(chipsSet3);
$('#Split14a15 .chips-area').click(chipsSet3);
$('#Split17a18 .chips-area').click(chipsSet3);
$('#Split20a21 .chips-area').click(chipsSet3);
$('#Split23a24 .chips-area').click(chipsSet3);
$('#Split26a27 .chips-area').click(chipsSet3);
$('#Split29a30 .chips-area').click(chipsSet3);
$('#Split32a33 .chips-area').click(chipsSet3);
$('#Split35a36 .chips-area').click(chipsSet3);
$('#Split1a2 .chips-area').click(chipsSet3);
$('#Split4a5 .chips-area').click(chipsSet3);
$('#Split7a8 .chips-area').click(chipsSet3);
$('#Split10a11 .chips-area').click(chipsSet3);
$('#Split13a14 .chips-area').click(chipsSet3);
$('#Split16a17 .chips-area').click(chipsSet3);
$('#Split19a20 .chips-area').click(chipsSet3);
$('#Split22a23 .chips-area').click(chipsSet3);
$('#Split25a26 .chips-area').click(chipsSet3);
$('#Split28a29 .chips-area').click(chipsSet3);
$('#Split31a32 .chips-area').click(chipsSet3);
$('#Split34a35 .chips-area').click(chipsSet3);

// 角注
$('#Corner2_3_5_6 .chips-area').click(chipsSet3);
$('#Corner5_6_8_9 .chips-area').click(chipsSet3);
$('#Corner8_9_11_12 .chips-area').click(chipsSet3);
$('#Corner11_12_14_15 .chips-area').click(chipsSet3);
$('#Corner14_15_17_18 .chips-area').click(chipsSet3);
$('#Corner17_18_20_21 .chips-area').click(chipsSet3);
$('#Corner20_21_23_24 .chips-area').click(chipsSet3);
$('#Corner23_24_26_27 .chips-area').click(chipsSet3);
$('#Corner26_27_29_30 .chips-area').click(chipsSet3);
$('#Corner29_30_32_33 .chips-area').click(chipsSet3);
$('#Corner32_33_35_36 .chips-area').click(chipsSet3);
$('#Corner1_2_4_5 .chips-area').click(chipsSet3);
$('#Corner4_5_7_8 .chips-area').click(chipsSet3);
$('#Corner7_8_10_11 .chips-area').click(chipsSet3);
$('#Corner10_11_13_14 .chips-area').click(chipsSet3);
$('#Corner13_14_16_17 .chips-area').click(chipsSet3);
$('#Corner16_17_19_20 .chips-area').click(chipsSet3);
$('#Corner19_20_22_23 .chips-area').click(chipsSet3);
$('#Corner22_23_25_26 .chips-area').click(chipsSet3);
$('#Corner25_26_28_29 .chips-area').click(chipsSet3);
$('#Corner28_29_31_32 .chips-area').click(chipsSet3);
$('#Corner31_32_34_35 .chips-area').click(chipsSet3);

// 街注
$('#Street1to3 .chips-area').click(chipsSet2);
$('#Street4to6 .chips-area').click(chipsSet2);
$('#Street7to9 .chips-area').click(chipsSet2);
$('#Street10to12 .chips-area').click(chipsSet2);
$('#Street13to15 .chips-area').click(chipsSet2);
$('#Street16to18 .chips-area').click(chipsSet2);
$('#Street19to21 .chips-area').click(chipsSet2);
$('#Street22to24 .chips-area').click(chipsSet2);
$('#Street25to27 .chips-area').click(chipsSet2);
$('#Street28to30 .chips-area').click(chipsSet2);
$('#Street31to33 .chips-area').click(chipsSet2);
$('#Street34to36 .chips-area').click(chipsSet2);

// 線注
$('#Line1to6 .chips-area').click(chipsSet2);
$('#Line4to9 .chips-area').click(chipsSet2);
$('#Line7to12 .chips-area').click(chipsSet2);
$('#Line10to15 .chips-area').click(chipsSet2);
$('#Line13to18 .chips-area').click(chipsSet2);
$('#Line16to21 .chips-area').click(chipsSet2);
$('#Line19to24 .chips-area').click(chipsSet2);
$('#Line22to27 .chips-area').click(chipsSet2);
$('#Line25to30 .chips-area').click(chipsSet2);
$('#Line28to33 .chips-area').click(chipsSet2);
$('#Line31to36 .chips-area').click(chipsSet2);

// 三重
$('#Triple023 .chips-area').click(chipsSet3);
$('#Triple012 .chips-area').click(chipsSet3);

// 五數
$('#Five00123 .chips-area').click(chipsSet1);


// 清除籌碼與重置Y值
$('#clearBtn').on('click', function() {
    $('.chips-area').data('posY', 0);
    $('.gamebet').find('.chips').remove();
    $('.ctrl-nav').find('.chips').removeClass('active');
    $('.custom-wrap').fadeOut();
    posY = 0;
});


// 自訂籌碼
$('#customBtn').click(function() {
    $('.fullscreen-wrap').fadeToggle();
    $('.custom-wrap').fadeToggle();
    $('.ctrl-nav').find('.chips').removeClass('active');
    $('.lang-wrap').slideUp();
});

$('.custom-close, #customCancel').click(function() {
    $('.fullscreen-wrap').fadeIn();
    $('.custom-wrap').fadeOut();
});


// 遊戲規則
$('.btn-rule').click(function() {
    $('.rule-wrap').fadeToggle();
    $('.custom-wrap').fadeOut();
    $('.lang-wrap').slideUp();
    $('.ctrl-nav').find('.chips').removeClass('active');
});

$('.rule-close').click(function() {
    $('.rule-wrap').fadeOut();
});