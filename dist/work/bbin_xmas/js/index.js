// slider
new Vue({
    el: '#mainBody',
    data: {
        slides: 7,
    },
    components: {
        'v-slider-wrap': Carousel3d.Carousel3d,
        'v-slider-item': Carousel3d.Slide,
    },
    methods: {
        nav() {
            $(".nav-btn").click(function() {
                $(this).toggleClass("is-active");
                $(".nav-wrap, .popup-overlay").toggleClass("is-active");
            });
            $(".is-info i").click(function() {
                $(".is-info").toggleClass("is-active");
                $(".is-info").children(".nav-sub").slideToggle();
            });
            $(".popup-overlay").click(function() {
                $(".nav-wrap, .popup-overlay, .nav-btn").removeClass("is-active");
            });
            $(window).resize(function() {
                var wdWidth = $(window).width();
                if(wdWidth > 768){
                    $(".nav-wrap, .popup-overlay, .nav-btn").removeClass("is-active");
                    $(".is-info").removeClass("is-active");
                    $(".nav-sub").css("display", "");
                }
            });
        },
        goTop() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 240) {
                    $(".btn-top").fadeIn();
                } else {
                    $(".btn-top").fadeOut();
                }
            });
            $(".btn-top").click(function() {
                $('body, html').animate({
                    scrollTop: 0
                }, 500);
            });
        },
        setAnimation() {
            setTimeout(function(){
                $(".index-top-player01").addClass("is-animation");
                $(".index-top-player02").addClass("is-animation");
            }, 1000);
        },
        parallaxTop() {
            var indexTopHeight = $(".index-top-wrap").outerHeight();
            $('.index-parallax-wrap').css("margin-top", indexTopHeight);
            $(window).resize(function() {
                var indexTopHeight = $(".index-top-wrap").outerHeight();
                $('.index-parallax-wrap').css("margin-top", indexTopHeight);
            });
        },
        parallaxScroll() {
            var scale = .2;
            function runParallax() {
                var scrollTop = $(window).scrollTop();
                $('.index-parallax-wrap').each(function() {
                    $(this).css('top', Math.round(((0 - scrollTop) * scale)) + 'px');
                });
            }
            $(window).bind( 'scroll', function() {
                runParallax();
            });
            runParallax();
        },
        dataAnimation() {
            $(window).scroll(function () {
                var scrollVal = $(this).scrollTop();
                var headerHeight = $("#page-header").outerHeight();
                var indexTopHeight = $(".index-top-wrap").outerHeight();
                var indexInfoHeight = $(".index-info-wrap").outerHeight();
                var indexDateHeight = $(".index-date-wrap").outerHeight();
                var wdHeight = $(window).height();
                var scrollCount = indexTopHeight + indexInfoHeight - headerHeight - indexDateHeight / 1.5;
                if(scrollVal > scrollCount){
                    $(".index-date-list").addClass("is-animation");
                }
                // else {
                //     $(".index-date-list").removeClass("is-animation");
                // }
            });
        }
    },
    mounted(){
        this.nav();
        this.goTop();
        this.setAnimation();
        this.parallaxTop();
        this.parallaxScroll();
        this.dataAnimation();
    }
})