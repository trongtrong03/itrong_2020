// scroll
$(function() {
    $(".scroll-pc").click(function (){
        $('html, body').animate({
            scrollTop: $(".index-list-wrap").offset().top
        }, 300);
    });
    $(".scroll-device").click(function (){
        $('html, body').animate({
            scrollTop: $(".index-list-wrap").offset().top - 80
        }, 300);
    });
});

// filter
$(function() {
    var $MixItUp = $('.index-list-main').isotope({
        itemSelector: '.index-list-item',
        masonry: {gutter: 0}
    });
    $MixItUp.imagesLoaded( function() {
        $MixItUp.isotope('layout');
    });
    $('.index-filter-link, .index-top-button').on( 'click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $MixItUp.isotope({ filter: filterValue });
    });

    // 篩選按鈕的選取狀態
    $('.index-filter-link').each( function( i, navfilter ) {
        var $navfilter = $( navfilter );
            $navfilter.on( 'click', 'button', function() {
            $navfilter.find('.is-active').removeClass('is-active');
            $(this).addClass('is-active');

            $("html, body").removeClass("no-scroll");
            $(".nav-filter-btn").removeClass("is-active");
            $(".index-filter-wrap").removeClass("is-active");
            $(".overlay").removeClass("is-active");
            $('html, body').animate({
                scrollTop: $(".index-list-wrap").offset().top - 80
            }, 500);
        });
    });

    $('.index-top-button').on( 'click', 'button', function() {
        $('.index-filter-link button').removeClass('is-active');
        $('html, body').animate({
            scrollTop: $(".index-list-wrap").offset().top - 80
        }, 500);
    });

    // 雙版型頁籤-檢視模式切換
    $(".is-masonry").click(function(){
        $(".index-filter-sort, .index-list-top").find("button").removeClass("is-active");
        $(".index-filter-sort, .index-list-top").find(".is-masonry").addClass("is-active");
        $(".index-list-main").addClass("is-masonry");
        $MixItUp.isotope('layout');     //重新執行瀑布流排序
    });
    $(".is-grid").click(function(){
        $(".index-filter-sort, .index-list-top").find("button").removeClass("is-active");
        $(".index-filter-sort, .index-list-top").find(".is-grid").addClass("is-active");
        $(".index-list-main").removeClass("is-masonry");
        $MixItUp.isotope('layout');     //重新執行瀑布流排序
    });

    // 取得篩選條件的文字
    $('.index-filter-btn').click(function (){
        var first = $(this).text();
        $(".index-list-top").find("h2").text(first);
        if(first == "所有款式" || first == "最新版型") {
            $(".index-list-top").find("h3").text("");
        }
    });
    $('.index-filter-option').click(function (){
        var second = $(this).text();
        $(".index-list-top").find("h3").text(second);
    });
    $('.index-top-button button').click(function (){
        var second = $(this).text();
        $(".index-list-top").find("h2").text("主题类型");
        $(".index-list-top").find("h3").text(second);
    });

});