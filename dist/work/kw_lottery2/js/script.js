window.onorientationchange = function() {
    window.location.reload();
}

//Remove inline-block node
$('.removeTextNodes').contents().filter(function() {
    return this.nodeType === 3;
}).remove();

// Form placeholder
$(function() {
    $("input[type='text'] , input[type='password'] , textarea").each(function() {
        $(this).focus(function() {
            $(this).addClass("placeholder");
        });
        $(this).blur(function() {
            $(this).removeClass("placeholder");
        });
    });
});

// chip
$(function() {
    var count = 0;
    var total = 0;
    $(".lt-bet-chip button").click(function() {
        count += 1;
        total += parseInt($(this).val(), 10);
        $("#betCount").text(count);
        $("#betAmount").text(total);
        $("#inputAmout").val('');
        if(total > 0){
            $(".bet-submit").prop('disabled', false);
        }
        else {
            $(".bet-submit").prop('disabled', true);
        }
    });
    $(".bet-cancel").click(function() {
        count = 0;
        total = 0;
        $("#betCount").text('0');
        $("#betAmount").text('0');
        $(".bet-submit").prop('disabled', true);
        $("#inputAmout").val('');
    });
    $("#inputAmout").keyup(function() {
        var typeAmount = $(this).val();
        var length = typeAmount.length;
        count = 0;
        total = 0;
        $("#betCount").text('0');
        $("#betAmount").text(typeAmount);
        if(length < 1){
            $("#betAmount").text('0');
            $(".bet-submit").prop('disabled', true);
        }
        else {
            $("#betAmount").text(typeAmount);
            $(".bet-submit").prop('disabled', false);
        }
    });
});

// 使聊天室區域在最底部
$('.lt-chat-list').scrollTop($('.lt-chat-list')[0].scrollHeight);

// 發言
$(function() {
    $("#chatInput").keyup(function() {
        var chatMsg = $(this).val();
        var length = chatMsg.length;
        if(length < 1){
            $("#chatSbmit").prop('disabled', true);
        }
        else {
            $("#chatSbmit").prop('disabled', false);
        }
    });
    $("#chatSbmit").click(function() {
        var chatMsg = $('#chatInput').val();
        $('.lt-chat-list').append('<div class="lt-chat-item">'
            + '<figure style="background-color: #999">J</figure>'
            + '<hgroup>'
            + '<h2 class="userName">Julia</h2>'
            + '<time>15:30</time>'
            + '</hgroup>'
            + '<p>'
            + chatMsg
            + '</p>'
            +'</div>');
        $('.lt-chat-list').scrollTop($('.lt-chat-list')[0].scrollHeight);
        $('#chatInput').val('');
    });
});

// 彈窗
$(function() {
    $(".n-record").click(function() {
        openPopup();
        $(".popup-wrap").load("_record.php");
    });
    $(".n-result").click(function() {
        openPopup();
        $(".popup-wrap").load("_result.php");
    });
    $(".n-rule").click(function() {
        openPopup();
        $(".popup-wrap").load("_rule.php");
    });
    $(".n-odds").click(function() {
        openPopup();
        $(".popup-wrap").load("_odds.php");
    });
    $(".n-limit").click(function() {
        openPopup();
        $(".popup-wrap").load("_limit.php");
    });
    $(".link-news").click(function() {
        openPopup();
        $(".popup-wrap").load("_news.php");
    });
    $(".popup-close").click(function() {
        closePopup();
    });
});

// Overlay
$(function() {
    $(".overlay").click(function() {
        closePopup();
        $(".transfer-wrap").fadeOut();
        $(".lt-bet-wrap").fadeOut();
    });
});

function openPopup(){
    $("html, body").addClass("no-scroll");
    $(".popup-wrap").fadeIn();
    $(".overlay").addClass("active");
    $(".nav-wrap").removeClass("active");
}

function closePopup(){
    $("html, body").removeClass("no-scroll");
    $(".popup-wrap").fadeOut();
    $(".overlay").removeClass("active");
    $(".nav-wrap").removeClass("active");
    $(".popup-wrap").load("_null");
    if ($(window).width() < 1025) {
        $(".overlay").removeClass("active");
        $("#lotteryMenu .title").removeClass("active");
        $("#lotteryMenu .content").fadeOut();
    }
    else {
        $("#lotteryMenu .content").slideUp();
    }
}

// slick
$(function() {
    $(".lt-game-nav").slick({
        dots: false,
        infinite: false,
        variableWidth: true,
        // slidesToShow: 6,
        slidesToScroll: 1
    });
});

// tabs
$(function(){
    $(".tabs-title:first").addClass("active");
    $(".tabs-content:first").addClass("active");
    $(".tabs-title").click(function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        $(".tabs-content").siblings().removeClass("active");  
        $(".tabs-content").eq($(this).index()).addClass("active");
        getHeight();
    });
});

// 起始計算高度
$(function(){
    getHeight();
    betHeight();
});

$(window).resize(function() {
    location.reload();
    getHeight();
    betHeight();
});

function getHeight(){
    if ($(window).width() > 1025) {
        var gameH = $(".lt-main-wrap").outerHeight();
        var chatHeadH = $(".lt-chat-head").outerHeight();
        var chatTypeH = $(".lt-chat-type").outerHeight();
        var chatMain = gameH - chatHeadH - chatTypeH;
        $(".lt-chat-list").css("height", chatMain);
        var menuH = gameH - 40;
        $(".lt-menu-main").css("height", menuH);
    }
}

function betHeight(){
    if ($(window).width() > 1025) {
        var videoH = $(".lt-view-wrap").outerHeight();
        console.log(videoH);
        $(".lt-bet-wrap").css("height", videoH);
    }
}


// bet close
$(function(){
    $("#sideChat").click(function(){
        $(".lt-chat-wrap").addClass("active");
        $(".side-bar").addClass("move");
        $(".device-gameinfo .btn button").addClass("off");
    });
    $(".btn-bet-close").click(function(){
        $(".lt-bet-wrap").fadeOut();
        $(".overlay").removeClass("active");
        if ($(window).width() < 481) {
            $("#wrap").removeClass("no-padding");
            $(".header-wrap").show();
        }
    });
});


// chat open / close
$(function(){
    $("#sideChat").click(function(){
        $(".lt-chat-wrap").addClass("active");
        $(".side-bar").addClass("move");
        $(".device-gameinfo .btn button").addClass("off");
    });
    $(".btn-chat-close").click(function(){
        $(".lt-chat-wrap").removeClass("active");
        $(".side-bar").removeClass("move");
        if ($(window).width() < 1025) {
            $(".device-gameinfo .btn button").removeClass("off");
            $(".side-bar").hide();
        }
    });
});

// other bottom side button
$(function(){
    $("#sideNews").click(function(){
        openPopup();
        $(".popup-wrap").load("_news.php");
        $(".transfer-wrap").fadeOut();
    });
    $("#sideTran").click(function(){
        $("html, body").addClass("no-scroll");
        $(".transfer-wrap").fadeIn();
        $(".popup-wrap").fadeOut();
        $(".overlay").addClass("active");
        $(".popup-wrap").load("_null");
    });
});

// nav btn
$(function() {
    $(".nav-btn").click(function() {
        $(".nav-wrap").toggleClass("active");
    });

    $(".nav-wrap span").click(function() {
        $(".nav-wrap span").removeClass("active");
        $(this).addClass("active");
        if ($(window).width() < 1025) {
            $(".side-bar").show();
        }
    });
});

// device btn
$(function() {
    $(".device-member .signin-btn").click(function() {
        $("html, body").addClass("no-scroll");
        $(".signin-wrap").fadeIn();
        $(".header-main").append("<div class='overlay active'></div>");
    });
    $(".signin-close").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".signin-wrap").fadeOut();
        $(".header-main .overlay").remove();
    });
});

// transfer close
$(function() {
    $(".transfer-close").click(function() {
        $("html, body").removeClass("no-scroll");
        $(".transfer-wrap").fadeOut();
        $(".overlay").removeClass("active");
    });
});




// demo
$(function() {
    $("#lotteryMenu li").click(function() {
        if ($(window).width() < 1025) {
            $(".lottery-wrap").addClass("active");
            $(".lottery-menu").hide();
            $(".device-gameinfo").addClass("active");
            $(".side-bar").hide();
        }
    });
    $(".device-gameinfo .btn button").click(function() {
        $(this).toggleClass("off");
        $(".lt-chat-wrap").toggleClass("active");
        $(".side-bar").toggle();
    });
    $(".bet-buy").click(function() {
        $(".lt-bet-wrap").fadeIn();
        $(".overlay").addClass("active");
        if ($(window).width() < 481) {
            $("#wrap").addClass("no-padding");
            $(".header-wrap").hide();
        }
    });
});