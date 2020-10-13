// 大小單雙全
$(function() {
    // 大
    $("#g1_no1_r1").click(function() {
        if($(this).is(":checked") === true) {
            checkDefault();
            $(this).prop({'checked':true, 'disabled':true});
            // $(".lt-bet-selector").append("<div class='block'><h3 /><ul /></div>");
            // checkSelector("第五名：");
            // 選擇號碼
            for(i=1; i<=5; i++){
                $("#g1_no1_n" + i).prop('checked', false);
            }
            for(i=6; i<=10; i++){
                $("#g1_no1_n" + i).prop('checked', true);
                // $(".lt-bet-selector ul").append('<li>'+ i +'</li>');
            }
        }
        else {
            $(this).prop({'checked':false, 'disabled':false});
        }
    });
    // 小
    $("#g1_no1_r2").click(function() {
        if($(this).is(":checked") === true) {
            checkDefault();
            $(this).prop({'checked':true, 'disabled':true});
            // $(".lt-bet-selector").append("<div class='block'><h3 /><ul /></div>");
            // checkSelector("第五名：");
            // 選擇號碼
            for(i=1; i<=5; i++){
                $("#g1_no1_n" + i).prop('checked', true);
                // $(".lt-bet-selector ul").append('<li>'+ i +'</li>');
            }
            for(i=6; i<=10; i++){
                $("#g1_no1_n" + i).prop('checked', false);
            }
        }
        else {
            $(this).prop({'checked':false, 'disabled':false});
        }
    });
    // 雙
    $("#g1_no1_r3").click(function() {
        if($(this).is(":checked") === true) {
            checkDefault();
            $(this).prop({'checked':true, 'disabled':true});
            // 選擇號碼
            for(i=0; i<=10; i+=2){
                $("#g1_no1_n" + i).prop('checked', true);
            }
            for(i=1; i<=10; i+=2){
                $("#g1_no1_n" + i).prop('checked', false);
            }
        }
        else {
            $(this).prop({'checked':false, 'disabled':false});
        }
    });
    // 單
    $("#g1_no1_r4").click(function() {
        if($(this).is(":checked") === true) {
            checkDefault();
            $(this).prop({'checked':true, 'disabled':true});
            // 選擇號碼
            for(i=0; i<=10; i+=2){
                $("#g1_no1_n" + i).prop('checked', false);
            }
            for(i=1; i<=10; i+=2){
                $("#g1_no1_n" + i).prop('checked', true);
            }
        }
        else {
            $(this).prop({'checked':false, 'disabled':false});
        }
    });
    // 全
    $("#g1_no1_r5").click(function() {
        if($(this).is(":checked") === true) {
            checkDefault();
            $(this).prop({'checked':true, 'disabled':true});
            // 選擇號碼
            for(i=1; i<=10; i++){
                $("#g1_no1_n" + i).prop('checked', true);
            }
        }
        else {
            $(this).prop({'checked':false, 'disabled':false});
        }
    });
    // 清
    $("#g1_no1_r6").click(function() {
        if($(this).is(":checked") === true) {
            checkDefault();
            $(this).prop({'checked':true, 'disabled':true});
            // $(".lt-bet-selector").empty();
            // 選擇號碼
            for(i=1; i<=10; i++){
                $("#g1_no1_n" + i).prop('checked', false);
            }
        }
        else {
            $(this).prop({'checked':true, 'disabled':true});
        }
    });
});

function checkSelector(e){
    $(".lt-bet-selector h3").text(e);
    $(".lt-bet-selector ul").empty();
}

function checkDefault(){
    $(".game01 input[name=rr]").prop({'checked':false, 'disabled':false});
}