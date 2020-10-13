// slider
new Vue({
    el: '#mainBody',
    data: {
        isActive: 1,
        isQuery: '',
        currentFilter: 'is-all',
        teamList: [
            {
                status: 'is-passed',
                tname: '先拿個冠軍亞季軍',
                player1: '韓舜宇',
                player2: 'Wayne Kuo',
                player3: 'Edison Shiu',
                player4: 'Kko',
            },
            {
                status: 'is-passed',
                tname: '衝一點別太龜',
                player1: 'Jason Lam',
                player2: 'ck',
                player3: 'kai',
                player4: 'Raymond',
            },
            {
                status: 'is-refused',
                tname: '達拉崩巴',
                player1: 'Tigers Child',
                player2: 'Wayne Kuo',
                player3: 'Raymond',
                player4: 'kko',
            },
            {
                status: 'is-unreviewed',
                tname: '灌水高手',
                player1: 'Lok Kwing',
                player2: 'Angelo Woo',
                player3: 'Edison Shiu',
                player4: '翰祥',
            },
            {
                status: 'is-unreviewed',
                tname: '灌水高手',
                player1: 'Lok Kwing',
                player2: 'Angelo Woo',
                player3: 'Edison Shiu',
                player4: '翰祥',
            },
            {
                status: 'is-unreviewed',
                tname: '灌水高手',
                player1: 'Lok Kwing',
                player2: 'Angelo Woo',
                player3: 'Edison Shiu',
                player4: '翰祥',
            },
            {
                status: false,
                tname: '',
                player1: '',
                player2: '',
                player3: '',
                player4: '',
            },
            {
                status: false,
                tname: '',
                player1: '',
                player2: '',
                player3: '',
                player4: '',
            },
            {
                status: false,
                tname: '',
                player1: '',
                player2: '',
                player3: '',
                player4: '',
            },
            {
                status: false,
                tname: '',
                player1: '',
                player2: '',
                player3: '',
                player4: '',
            },
            {
                status: false,
                tname: '',
                player1: '',
                player2: '',
                player3: '',
                player4: '',
            },
            {
                status: false,
                tname: '',
                player1: '',
                player2: '',
                player3: '',
                player4: '',
            },
        ]
    },
    computed: {
        // 參賽隊伍搜尋
        filterSearch: function() {
            var search = this;
                return this.teamList.filter(function(item) {
                return item.tname.toLowerCase().indexOf(search.isQuery.toLowerCase()) !== -1;
            });
        },
    },
    methods: {
        // 清除 inline-block 空白
        removeTextNodes() {
            $('.removeTextNodes').contents().filter(function() {
                return this.nodeType === 3;
            }).remove();
        },
        // 導覽列
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
        // 移動到頂部
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
        // 規則頁籤
        ruleTabs() {
            $(".rule-tabs-title button:first").addClass("is-active");
            $(".rule-tabs-content:first").addClass("is-active");
            $(".rule-tabs-title button").click(function(){
                $(this).addClass("is-active");
                $(this).siblings().removeClass("is-active");
                $(".rule-tabs-content").siblings().removeClass("is-active");  
                $(".rule-tabs-content").eq($(this).index()).addClass("is-active");
            });

            $(".rule-slide-title:first").addClass("is-active");
            $(".rule-slide-title").on("click", function(e){
                if($(this).parent().has(".rule-tabs-content")) {
                    e.preventDefault();
                }
                if(!$(this).hasClass("is-active")) {
                    $(".rule-tabs-content").slideUp();
                    $(".rule-slide-title").removeClass("is-active");
                    $(this).next(".rule-tabs-content").slideDown(500);
                    $(this).addClass("is-active");
                }
                else if($(this).hasClass("is-active")) {
                    $(this).removeClass("is-active");
                    $(this).next(".rule-tabs-content").slideUp(500);
                }
            });
        },
        // 篩選
        setFilter: function(filter) {
            this.currentFilter = filter;
        }
    },
    mounted(){
        this.removeTextNodes();
        this.nav();
        this.goTop();
        this.ruleTabs();
    }
})