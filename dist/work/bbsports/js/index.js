// 升級進度條
$(".first-game-counterbar").mouseover(function(){
    $(".first-game-level-info").fadeIn();
})
$(".first-game-counterbar").mouseout(function(){
    $(".first-game-level-info").fadeOut();
})


// 讓球轉吧!動畫
$(".select .first-game-btn-play, .confirm .first-game-btn-play, .play .first-game-btn-play").mouseover(function(){
    $(".first-game-ctrl-ball").addClass("active").removeClass("paused");
})
$(".select .first-game-btn-play, .confirm .first-game-btn-play, .play .first-game-btn-play").mouseout(function(){
    $(".first-game-ctrl-ball").addClass("paused");
})


// 選盤開踢
$(".select .first-game-btn-play").click(function(){
    $(".first-game-popup-wrap.select").fadeIn();
    $(".first-game-ctrl-ball").addClass("paused");
})


// 選盤開踢-暫不進行
$(".first-game-popup-wrap.select .back").click(function(){
    $(".first-game-popup-wrap.select").fadeOut();
})


// 選盤確認
$(".confirm .first-game-btn-play").click(function(){
    $(".first-game-popup-wrap.check").fadeIn();
    $(".first-game-ctrl-ball").addClass("paused");
})


// 選盤確認-返回
$(".first-game-popup-wrap.check .back").click(function(){
    $(".first-game-popup-wrap.check").fadeOut();
})


// 選盤彈窗關閉
$(".first-game-popup-close").click(function(){
    $(".first-game-popup-wrap").fadeOut();
})


// 連線成功彈窗關閉
$(".first-bingo-close").click(function(){
    $(".first-bingo-wrap").removeClass("active");
})