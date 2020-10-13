$(function(){

    //條件篩選
    var $MixItUpAdap = $('#MixItUpAdap').isotope({
        itemSelector: '.page-items',
        masonry: {gutter: 0}
    });
    $('#adaptiveCont .nav-main').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $MixItUpAdap.isotope({ filter: filterValue });
    });
    var $MixItUpRwd = $('#MixItUpRwd').isotope({
        itemSelector: '.page-items',
        masonry: {gutter: 0}
    });
    $('#rwdCont .nav-main').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $MixItUpRwd.isotope({ filter: filterValue });
    });


    //篩選按鈕的選取狀態
    $('.nav-main').each( function( i, navfilter ) {
        var $navfilter = $( navfilter );
            $navfilter.on( 'click', 'button', function() {
            $navfilter.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
    });


    //雙版型頁籤-檢視模式切換
    $(".nav-view").click(function(){
        if($(".nav-view").hasClass("nav-view-list")) {
            $(".nav-view").addClass("nav-view-grid").removeClass("nav-view-list");
            $(".page-view-list").removeClass("page-view-list").addClass("page-view-grid");
        }
        else if($(".nav-view").hasClass("nav-view-grid")) {
            $(".nav-view").addClass("nav-view-list").removeClass("nav-view-grid");
            $(".page-view-grid").removeClass("page-view-grid").addClass("page-view-list");
        }
        $MixItUpAdap.isotope('layout');     //重新執行瀑布流排序
        $MixItUpRwd.isotope('layout');      //重新執行瀑布流排序
    });

    var $html = $("html, body");
    var $wrap = $(".index-wrap");
    var $aboutOpen = $("#aboutOpen");
    var $adaptiveActive = $("#adaptiveCont, .nav-back, .mask-bg");
    var $rwdActive = $("#rwdCont, .nav-back, .mask-bg");
    var $pageMain = $(".page-main");
    var $pageItems = $(".page-view-grid .page-items, .page-view-list .page-items");


    //ABOUT-展開
    $aboutOpen.click(function(){
        $(this).addClass("active");
        $("#about").addClass("active");
        $html.addClass("no-scroll");
    });
    $(".about-back-btn").click(function(){
        $aboutOpen.removeClass("active");
        $("#about").removeClass("active");
        $html.removeClass("no-scroll");
    });


    //ABOUT螢幕+撲克牌視差移動
    $(window).parallaxmouse({
        invert: true,
        range: 200,
        elms: [
            {el: $('.about-bg-line'), rate: 0.2},
            {el: $('.about-bg-screen .screen'), rate: 0.1},
            {el: $('.about-bg-screen .poker01'), rate: 0.2},
            {el: $('.about-bg-screen .poker02'), rate: 0.2},
            {el: $('.about-bg-screen .poker03'), rate: 0.2}
        ]
    });


    //ADAPTIVE頁籤-展開
    $(".btnAdaptive").click(function(){
        $adaptiveActive.addClass("active");
        $wrap.addClass("move-adaptive");
        $aboutOpen.addClass("move");
        $html.addClass("no-scroll");
        $pageMain.animate({
            scrollTop: 0
        },0);
        $pageMain.removeClass("no-scroll");     //解除卷軸鎖定
    });
    

    //RWD頁籤-展開
    $(".btnRwd").click(function(){
        $rwdActive.addClass("active");
        $(".mask-bg").addClass("rwd-bgcolor");
        $wrap.addClass("move-rwd");
        $aboutOpen.addClass("move");
        $html.addClass("no-scroll");
        $pageMain.animate({
            scrollTop: 0
        },0);
        $pageMain.removeClass("no-scroll");     //解除卷軸鎖定
    });
    

    //雙版型頁籤-切換
    $("#navSwitchRWD").click(function(){
        $("#adaptiveCont").removeClass("active");
        $wrap.removeClass("move-adaptive");
        $aboutOpen.removeClass("move");
        $("#rwdCont").addClass("active");
    });
    $("#navSwitchAdaptive").click(function(){
        $("#rwdCont").removeClass("active");
        $wrap.removeClass("move-rwd");
        $aboutOpen.removeClass("move");
        $("#adaptiveCont").addClass("active");
    });


    //版型頁MOBILE版本-回頂部
    $(".btn-top").click(function(){
        $(".page-main").animate({
            scrollTop: 0
        },1000);
    });
    $("#adaptiveCont .page-main").scroll(function() {
        if ( $(this).scrollTop() > 240){
            $(".btn-top-adaptive").fadeIn("fast");
        } else {
            $(".btn-top-adaptive").stop().fadeOut("fast");
        }
    });
    $("#rwdCont .page-main").scroll(function() {
        if ( $(this).scrollTop() > 240){
            $(".btn-top-rwd").fadeIn("fast");
        } else {
            $(".btn-top-rwd").stop().fadeOut("fast");
        }
    });


    //雙版型頁籤-返回上一頁
    $(".nav-back").click(function(){
        $adaptiveActive.removeClass("active");
        $rwdActive.removeClass("active");
        $wrap.removeClass("move-adaptive move-rwd");
        $aboutOpen.removeClass("move");
        $html.removeClass("no-scroll");
        $pageMain.addClass("no-scroll").animate({
            scrollTop: 0
        },0);;    //防止瞬間出現雙卷軸 + 返回頂部以消除TOP鈕
    });


    //遮罩移除
    $(".mask-bg").click(function(){
        $(this).removeClass("active rwd-bgcolor");
        $html.removeClass("no-scroll");
        $("#adaptiveCont, #rwdCont, .nav-back").removeClass("active");
        $wrap.removeClass("move-adaptive").removeClass("move-rwd");
        $aboutOpen.removeClass("move");
        $pageMain.addClass("no-scroll");    //防止瞬間出現雙卷軸
    });


    //雙版型頁籤-篩選列的子選單
    $(".subtouch").on("click", function(e){
        if($(this).parent().has(".submenu")) {
            e.preventDefault();
        }
        if(!$(this).hasClass("active")) {
            $(".submenu").slideUp();
            $(".subtouch").removeClass("active");
            $(this).next(".submenu").slideDown();
            $(this).addClass("active");
            $(".nav-filter").addClass("active");
        }
        else if($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).next(".submenu").slideUp();
            $(".nav-filter").removeClass("active");
        }
    });


    //雙版型頁籤-選取篩選項目後關閉篩選列
    $(document).on("click", function(e) {
        if ($(e.target).is(".submenu, .submenu li button, .subtouch") === false) {
            $(".submenu").slideUp();
            $(".subtouch").removeClass("active");
            $(".nav-filter").removeClass("active");
        }
    });     
    $(".submenu").click(function(){
        $(".submenu").slideUp();
        $(".subtouch").removeClass("active");
        $(".nav-filter").removeClass("active");
    });


    //讓區域回到頂部
    $(".submenu li button, .nav-filter-hot, .nav-switch, .nav-view").click(function(){
        $pageMain.animate({
            scrollTop: 0
        },0);
    });


    //條件篩選統計-ADAPTIVE
    var $adapLa = $("#MixItUpAdap dd.L-a").size();
    var $adapLb = $("#MixItUpAdap dd.L-b").size();
    var $adapLc = $("#MixItUpAdap dd.L-c").size();
    var $adapLd = $("#MixItUpAdap dd.L-d").size();
    var $adapLe = $("#MixItUpAdap dd.L-e").size();

    $("#adapNumLa").append( "<b>(" + $adapLa + ")</b>" );
    $("#adapNumLb").append( "<b>(" + $adapLb + ")</b>" );
    $("#adapNumLc").append( "<b>(" + $adapLc + ")</b>" );
    $("#adapNumLd").append( "<b>(" + $adapLd + ")</b>" );
    $("#adapNumLe").append( "<b>(" + $adapLe + ")</b>" );

    var $adapFashion = $("#MixItUpAdap dd.S-fashion").size();
    var $adapClassical = $("#MixItUpAdap dd.S-classical").size();
    var $adapGorgeous = $("#MixItUpAdap dd.S-gorgeous").size();
    var $adapSimple = $("#MixItUpAdap dd.S-simple").size();

    $("#adapNumF").append( "<b>(" + $adapFashion + ")</b>" );
    $("#adapNumC").append( "<b>(" + $adapClassical + ")</b>" );
    $("#adapNumG").append( "<b>(" + $adapGorgeous + ")</b>" );
    $("#adapNumS").append( "<b>(" + $adapSimple + ")</b>" );

    //條件篩選統計-RWD
    var $rwdLa = $("#MixItUpRwd dd.L-a").size();
    var $rwdLb = $("#MixItUpRwd dd.L-b").size();
    var $rwdLc = $("#MixItUpRwd dd.L-c").size();
    var $rwdLd = $("#MixItUpRwd dd.L-d").size();
    var $rwdLe = $("#MixItUpRwd dd.L-e").size();

    $("#rwdNumLa").append( "<b>(" + $rwdLa + ")</b>" );
    $("#rwdNumLb").append( "<b>(" + $rwdLb + ")</b>" );
    $("#rwdNumLc").append( "<b>(" + $rwdLc + ")</b>" );
    $("#rwdNumLd").append( "<b>(" + $rwdLd + ")</b>" );
    $("#rwdNumLe").append( "<b>(" + $rwdLe + ")</b>" );

    var $rwdFashion = $("#MixItUpRwd dd.S-fashion").size();
    var $rwdClassical = $("#MixItUpRwd dd.S-classical").size();
    var $rwdGorgeous = $("#MixItUpRwd dd.S-gorgeous").size();
    var $rwdSimple = $("#MixItUpRwd dd.S-simple").size();

    $("#rwdNumF").append( "<b>(" + $rwdFashion + ")</b>" );
    $("#rwdNumC").append( "<b>(" + $rwdClassical + ")</b>" );
    $("#rwdNumG").append( "<b>(" + $rwdGorgeous + ")</b>" );
    $("#rwdNumS").append( "<b>(" + $rwdSimple + ")</b>" );

});