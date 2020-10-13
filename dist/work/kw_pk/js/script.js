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
};


// 按鈕HOVER
function recordOverImage() {
    document.getElementById("recordBtn").src = "image/record_btn_h.png";
}
function recordOutImage() {
    document.getElementById("recordBtn").src = "image/record_btn.png";
}

function setOverImage() {
    document.getElementById("setBtn").src = "image/set_btn_h.png";
}
function setOutImage() {
    document.getElementById("setBtn").src = "image/set_btn.png";
}


// Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();


// 點擊籌碼
var $chip10 = $('#chips10');
var $chip50 = $('#chips50');
var $chip100 = $('#chips100');
var $chip500 = $('#chips500');

function chipClick() {
    $('.ctrl-nav').find('.chips').removeClass("active");
    $(this).addClass('active');
    $('.custom-wrap').fadeOut();
}

$chip10.click(chipClick);
$chip50.click(chipClick);
$chip100.click(chipClick);
$chip500.click(chipClick);

// 籌碼下注
function chipsSet() {
    var posY = $(this).data('posY') || 0;
    var topVal = 'style="top: calc(25% - ' + posY + 'px);">';
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
}

$('#item-board1 .chips-area').click(chipsSet);
$('#item-board2 .chips-area').click(chipsSet);
$('#item-board3 .chips-area').click(chipsSet);
$('#item-board4 .chips-area').click(chipsSet);
$('#item-board5 .chips-area').click(chipsSet);

// 清除籌碼與重置Y值
$('.ctrl-nav .cancel').on('click', function() {
    $('.chips-area').data('posY', 0);
    $('.item-board').find('.chips').remove();
    $('.ctrl-nav').find('.chips').removeClass('active');
    $('.custom-wrap').fadeOut();
    posY = 0;
});


// 自訂籌碼
$('#customSet').click(function() {
    $('.fullscreen-wrap').fadeToggle();
    $('.custom-wrap').fadeToggle();
    $('.ctrl-nav').find('.chips').removeClass('active');
});

$('.custom-close, #customCancel').click(function() {
    $('.fullscreen-wrap').fadeIn();
    $('.custom-wrap').fadeOut();
});