<!DOCTYPE html>
<html class="index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Lottery</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/slick.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <header class="header-wrap">
            <div class="header-main">
                <div class="logo">
                    <a href="index.php">
                        <img src="image/logo.png">
                    </a>
                </div>
                <a href="index.php" class="home-btn"></a>
                <!-- nav -->
                <button class="nav-btn"></button>
                <nav class="nav-wrap clearfix">
                    <span class="n-record">
                        <b>投注紀錄</b>
                    </span>
                    <span class="n-result">
                        <b>开奖结果</b>
                    </span>
                    <span class="n-info">
                        <b>投注资讯</b>
                        <i class="fas fa-chevron-down"></i>
                        <ul>
                            <li class="n-limit">投注限额</li>
                            <li class="n-odds">参考赔率</li>
                            <li class="n-rule">规则说明</li>
                        </ul>
                    </span>
                    <span class="n-service">
                        <b>在线客服</b>
                    </span>
                </nav>
                <!-- signin -->
                <!-- <div class="signin-wrap">
                    <div class="signin-head">会员登入
                        <button class="signin-close"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="signin-main">
                        <div class="signin-input">
                            <input type="text" placeholder="帐号">
                        </div>
                        <div class="signin-input">
                            <input type="text" placeholder="密码">
                        </div>
                        <div class="signin-input">
                            <input type="text" placeholder="验证码">
                        </div>
                        <div class="signin-code">
                            <img src="image/example/code.jpg">
                        </div>
                        <div class="signin-btn">
                            <button class="btn-signup">
                                <i class="far fa-user"></i>
                                <b>登入</b>
                            </button>
                            <button class="btn-regist">
                                <i class="fas fa-user-plus"></i>
                                <b>立即注册</b>
                            </button>
                        </div>
                    </div>
                </div> -->
                <!-- memberbar -->
                <div class="member-bar">
                    <div class="m-bar-user">
                        <span><i class="far fa-smile"></i>您好</span>
                        <b>julia</b>
                    </div>
                    <div class="m-bar-balance">
                        <span>帐户余额 RMB</span>
                        <b>0.0000</b>
                        <button><i class="fas fa-sync"></i></button>
                    </div>
                    <div class="m-bar-msg">
                        <span><i class="far fa-envelope"></i></span>
                        <b><a href="#0">信息(0)</a></b>
                    </div>
                    <div class="m-bar-btn">
                        <button class="btn-recharge">
                            <i class="fas fa-dollar-sign"></i>
                            <b>充值</b>
                        </button>
                        <button class="btn-withdrawal">
                            <i class="fas fa-share"></i>
                            <b>提款</b>
                        </button>
                    </div>
                    <div class="m-bar-signout">
                        <b><a href="index.php">登出</a></b>
                    </div>
                </div>
                <!-- 行動裝置會員登入 / 狀態區 -->
                <div class="device-member">
                    <!-- 登入前 -->
                    <!-- <div class="left">Welcome!</div>
                    <div class="right">
                        <button class="signin-btn">登入</button>
                    </div> -->
                    <!-- 登入後 -->
                    <div class="left">
                        <div class="account">
                            <figure style="background-color: #7f7f7f">J</figure>
                            <span>Julia922</span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="balance">
                            <i class="fas fa-dollar-sign"></i>
                            <span>帐户余额<b>5000</b></span>
                        </div>
                    </div>
                </div>
                <!-- marquee -->
                <div class="marquee-wrap">
                    <i class="fas fa-bullhorn"></i>
                    <marquee scrollamount="3" scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();">
                        <a href="#0" class="link-news">丸久分分彩全新玩法～！重庆时时彩上线啦！！ 澳門首家線上賭場上線囉！</a>
                    </marquee>
                </div>
                <!-- device 遊戲下注資訊 -->
                <div class="device-gameinfo">
                    <div class="game">第20191017060期 重庆时时彩</div>
                    <div class="time">开奖时间：06:09:46</div>
                    <div class="btn"><button><i class="far fa-comment-dots"></i></button></div>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="container-wrap">
            <!-- slider -->
            <div class="container-main">
                <!-- 左側選單 -->
                <aside class="lottery-menu">
                    <div class="lt-menu-head">彩票选择</div>
                    <div id="lotteryMenu" class="lt-menu-main">
                        <ul>
                            <li>
                                <section>
                                    <div class="title is-live active">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_01.png">
                                        </span>
                                        <b>重庆时时彩</b>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="content" style="display: block;">
                                        <h2>重庆时时彩</h2>
                                        <ul>
                                            <li><a href="" class="active">时时彩A館<time>05:52</time></a></li>
                                            <li><a href="">时时彩B館<time>15:32</time></a></li>
                                            <li><a href="">时时彩C館<time>06:45</time></a></li>
                                        </ul>
                                        <button class="btn-close"><i class="fas fa-times"></i></button>
                                    </div>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link is-live">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_02.png">
                                        </span>
                                        <b>阿里分分彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_03.png">
                                        </span>
                                        <b>阿里五分彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_04.png">
                                        </span>
                                        <b>河内一分彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_05.png">
                                        </span>
                                        <b>腾讯分分彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_06.png">
                                        </span>
                                        <b>天津时时彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_07.png">
                                        </span>
                                        <b>新疆时时彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_08.png">
                                        </span>
                                        <b>黑龙江时彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_09.png">
                                        </span>
                                        <b>快乐彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_10.png">
                                        </span>
                                        <b>幸运28</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <div class="title">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_11.png">
                                        </span>
                                        <b>香港六合彩</b>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="content">
                                        <h2>香港六合彩</h2>
                                        <ul>
                                            <li><a href="">六合彩A館<time>05:52</time></a></li>
                                            <li><a href="">六合彩B館<time>15:32</time></a></li>
                                            <li><a href="">六合彩C館<time>06:45</time></a></li>
                                        </ul>
                                        <button class="btn-close"><i class="fas fa-times"></i></button>
                                    </div>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_12.png">
                                        </span>
                                        <b>基諾彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_13.png">
                                        </span>
                                        <b>分分彩</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_14.png">
                                        </span>
                                        <b>PC 28</b>
                                    </a>
                                </section>
                            </li>
                            <li>
                                <section>
                                    <a href="#0" class="link">
                                        <span>
                                            <figure style="background-image: url('image/example/001.png')"></figure>
                                            <img src="image/example/b_15.png">
                                        </span>
                                        <b>北京賽車</b>
                                    </a>
                                </section>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- 主內容 -->
                <div class="lottery-wrap">
                    <!-- 資訊區塊 -->
                    <div class="lt-main-wrap">
                        <!-- 視頻 -->
                        <div class="lt-view-wrap">
                            <div class="lt-view-main">
                                <div class="lt-view-video">
                                    <time>25</time>
                                    <div class="video-frame">
                                        <span style="background-image: url('image/example/b01.jpg');"></span>
                                        <!-- <img src="image/example/b01.jpg"> -->
                                    </div>
                                </div>
                                <div class="lt-view-ctrl">
                                    <h2>切换视频</h2>
                                    <button>1</button>
                                    <button class="active">2</button>
                                    <button>3</button>
                                    <button>4</button>
                                    <button>5</button>
                                </div>
                                <div class="lt-view-info">
                                    <div class="lt-info-logo">
                                        <img src="image/example/aa02.png">
                                    </div>
                                    <div class="lt-info-blk">
                                        <h2>北京快三 第144785期</h2>
                                        <div class="lt-flip-counter">
                                            <div class="js-flipcounter">
                                                <div class="counter counter-analog" data-direction="down">5:00:00</div>
                                            </div>
                                            <span class="status">下注中</span>
                                        </div>
                                    </div>
                                    <div class="lt-info-blk blk-result">
                                        <h2>第144784期开奖结果</h2>
                                        <ul class="removeTextNodes">
                                            <li class="dice-num1"></li>
                                            <li class="dice-num2"></li>
                                            <li class="dice-num3"></li>
                                            <li class="dice-num4"></li>
                                            <li class="dice-num5"></li>
                                            <li class="dice-num6"></li>
                                            <li class="circle-big"></li>
                                            <li class="circle-small"></li>
                                            <li class="circle-single"></li>
                                            <li class="circle-double"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 購注區 -->
                        <div class="lt-bet-wrap">
                            <div class="lt-bet-head">
                                <h2><i></i><b>购注区</b></h2>
                                <h3>
                                    <span>北京快三</span>
                                    <span><b>144784</b>期</span>
                                </h3>
                                <button class="btn-bet-close"><i class="fas fa-times"></i></button>
                            </div>
                            <div class="lt-bet-main">
                                <div class="lt-bet-gameboard">
                                    <h3>名次-定位</h3>
                                    <h2>投注清单：</h2>
                                    <div class="lt-bet-selector">
                                        <div class="block">
                                            <ul>
                                                <li class="dice-num1"></li>
                                                <li class="dice-num3"></li>
                                                <li class="dice-num5"></li>
                                                <li class="circle-single"></li>
                                                <li class="circle-small"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="lt-btn-rebtn">
                                    <button>重复上一局投注</button>
                                </div>
                                <div class="lt-bet-amount">
                                    <div class="amount">
                                        <h2>下注金额</h2>
                                        <input id="inputAmout" type="number" onkeyup="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}" onafterpaste="if(this.value.length==1){this.value=this.value.replace(/[^1-9]/g,'')}else{this.value=this.value.replace(/\D/g,'')}">
                                    </div>
                                    <div class="continue">
                                        <h2>连续期数</h2>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="lt-bet-content">
                                    <div class="lt-bet-chip removeTextNodes">
                                        <button class="chip_10" value="10">
                                            <img src="image/chip_10_h.png">
                                        </button>
                                        <button class="chip_20" value="20">
                                            <img src="image/chip_20_h.png">
                                        </button>
                                        <button class="chip_50" value="50">
                                            <img src="image/chip_50_h.png">
                                        </button>
                                        <button class="chip_100" value="100">
                                            <img src="image/chip_100_h.png">
                                        </button>
                                        <button class="chip_500" value="500">
                                            <img src="image/chip_500_h.png">
                                        </button>
                                        <button class="chip_1000" value="1000">
                                            <img src="image/chip_1000_h.png">
                                        </button>
                                    </div>
                                    <div class="lt-bet-st">
                                        <span>投注总数：<b id="betCount">0</b></span>
                                        <span>投注总额：<b id="betAmount">0</b></span>
                                    </div>
                                    <div class="lt-bet-btn">
                                        <button class="bet-cancel">取 消</button>
                                        <button class="bet-submit" disabled>确认下注</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 盤口 -->
                        <div class="lt-game-wrap">
                            <div class="lt-game-tabs">
                                <div class="lt-game-nav">
                                    <div class="tabs-title"><span>大小单双</span></div>
                                    <div class="tabs-title"><span>三軍</span></div>
                                    <div class="tabs-title"><span>短牌</span></div>
                                    <div class="tabs-title"><span>長牌</span></div>
                                    <div class="tabs-title"><span>豹子</span></div>
                                    <div class="tabs-title"><span>和值</span></div>
                                </div>
                                <!-- 大小单双 -->
                                <div class="tabs-content active">
                                    <div class="lt-game-content">
                                        <div class="game-description">
                                            <p>玩法說明：开出1骰1赔1 两骰1赔2 三骰1赔3。</p>
                                        </div>
                                        <div class="game-wrap dicegame01">
                                            <div class="game-row">
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame01_board">
                                                        <input type="checkbox" :id="'d1_' + item.id" name="bb" />
                                                        <label :for="'d1_' + item.id">
                                                            <span>
                                                                <b class="words">{{ item.words }}</b>
                                                                <b class="odds">{{ item.odds }}</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 三軍 -->
                                <div class="tabs-content">
                                    <div class="lt-game-content">
                                        <div class="game-description">
                                            <p>玩法說明：开出1骰1赔1 两骰1赔2 三骰1赔3。</p>
                                        </div>
                                        <div class="game-wrap dicegame02">
                                            <div class="game-row">
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame02_board">
                                                        <input type="checkbox" :id="'d2_' + item.id" name="bb" />
                                                        <label :for="'d2_' + item.id">
                                                            <span>
                                                                <b :class="'dice-num' + item.id"></b>
                                                                <b class="odds">2</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 短牌 -->
                                <div class="tabs-content">
                                    <div class="lt-game-content">
                                        <div class="game-description">
                                            <p>玩法說明：开出1骰1赔1 两骰1赔2 三骰1赔3。</p>
                                        </div>
                                        <div class="game-wrap dicegame02">
                                            <div class="game-row">
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame02_board">
                                                        <input type="checkbox" :id="'d3_' + item.id" name="bb" />
                                                        <label :for="'d3_' + item.id">
                                                            <span>
                                                                <b :class="'dice-num' + item.id"></b>
                                                                <b :class="'dice-num' + item.id"></b>
                                                                <b class="odds">2</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 長牌 -->
                                <div class="tabs-content">
                                    <div class="lt-game-content">
                                        <div class="game-description">
                                            <p>玩法說明：开出1骰1赔1 两骰1赔2 三骰1赔3。</p>
                                        </div>
                                        <div class="game-wrap dicegame03">
                                            <div class="game-row">
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame03_board">
                                                        <input type="checkbox" :id="'d4_' + item.id" name="bb" />
                                                        <label :for="'d4_' + item.id">
                                                            <span>
                                                                <b :class="'dice-num' + item.num1"></b>
                                                                <b :class="'dice-num' + item.num2"></b>
                                                                <b class="odds">6.98</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 豹子 -->
                                <div class="tabs-content">
                                    <div class="lt-game-content">
                                        <div class="game-description">
                                            <p>玩法說明：开出1骰1赔1 两骰1赔2 三骰1赔3。</p>
                                        </div>
                                        <div class="game-wrap dicegame04">
                                            <div class="game-row">
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame02_board">
                                                        <input type="checkbox" :id="'d5_' + item.id" name="bb" />
                                                        <label :for="'d5_' + item.id">
                                                            <span>
                                                                <b :class="'dice-num' + item.id"></b>
                                                                <b :class="'dice-num' + item.id"></b>
                                                                <b :class="'dice-num' + item.id"></b>
                                                                <b class="odds">209.52</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="allin">
                                                        <input type="checkbox" id="d5_all" name="bb" />
                                                        <label for="d5_all">
                                                            <span>
                                                                <b class="words">全骰</b>
                                                                <b class="odds">34.92</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 和值 -->
                                <div class="tabs-content">
                                    <div class="lt-game-content">
                                        <div class="game-description">
                                            <p>玩法說明：开出1骰1赔1 两骰1赔2 三骰1赔3。</p>
                                        </div>
                                        <div class="game-wrap dicegame05">
                                            <div class="game-row">
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame04_board">
                                                        <input type="checkbox" :id="'d6_' + item.id" name="bb" />
                                                        <label :for="'d6_' + item.id">
                                                            <span>
                                                                <b>{{ item.num }}点</b>
                                                                <b class="odds">69.84</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="game-board">
                                                    <div class="board" v-for="item in dicegame04_board2">
                                                        <input type="checkbox" :id="'g2_' + item.id" name="bb" />
                                                        <label :for="'g2_' + item.id">
                                                            <span>
                                                                <b class="words">{{ item.words }}</b>
                                                                <b class="range">{{ item.range }}</b>
                                                                <b class="odds">2</b>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- device select -->
                        <div class="lt-game-select">
                            <button class="bet-clean">清空选取</button>
                            <button class="bet-buy">共选了<b>1</b>注 <b>确认送出</b></button>
                        </div>
                    </div>
                    <!-- 聊天室 -->
                    <div class="lt-chat-wrap">
                        <div class="lt-chat-head">
                            <h2><i></i><b>聊天室</b></h2>
                            <h3>快三</h3>
                             <button class="btn-chat-close"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="lt-chat-list">
                            <div class="lt-chat-item">
                                <figure style="background-color: #a24885">J</figure>
                                <hgroup>
                                    <h2 class="userName">Julia</h2>
                                    <time>15:30</time>
                                </hgroup>
                                <p>丸久分分彩快乐彩上线啰！</p>
                            </div>
                            <!-- example start -->
                            <div class="lt-chat-item">
                                <figure style="background-color: #d91b3b">J</figure>
                                <hgroup>
                                    <h2 class="userName">Jack</h2>
                                    <time>15:30</time>
                                </hgroup>
                                <p>好期待喔~~</p>
                            </div>
                            <div class="lt-chat-item">
                                <figure style="background-color: #60bf1a">P</figure>
                                <hgroup>
                                    <h2 class="userName">Patty</h2>
                                    <time>15:30</time>
                                </hgroup>
                                <p>人生短短幾個秋</p>
                            </div>
                            <div class="lt-chat-item">
                                <figure style="background-color: #5f5f5f">安</figure>
                                <hgroup>
                                    <h2 class="userName">安安</h2>
                                    <time>15:30</time>
                                </hgroup>
                                <p>不醉不歸不罷休</p>
                            </div>
                            <div class="lt-chat-item">
                                <figure style="background-color: #a24885">J</figure>
                                <hgroup>
                                    <h2 class="userName">Julia</h2>
                                    <time>15:30</time>
                                </hgroup>
                                <p>北京賽車多種玩法</p>
                            </div>
                            <!-- example end -->
                        </div>
                        <div class="lt-chat-type">
                            <i class="fas fa-gift"></i>
                            <input id="chatInput" type="text" placeholder="存款三次.方能发言">
                            <button id="chatSbmit" disabled>送出</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="footer-wrap">
            <p>Copyrights by OOO Bet 2019. All Rights Reserved.</p>
        </footer>
        <!-- Side -->
        <div class="side-bar">
            <button id="sideTran" class="side-tran"><i>转</i>快速转帐</button>
            <button id="sideDepo" class="side-depo"><i>存</i>存款专区</button>
            <button id="sideNews" class="side-news"><i class="fas fa-bullhorn"></i>公告专区</button>
            <button id="sideChat" class="side-chat"><i class="far fa-comment-dots"></i>聊天室</button>
            <button id="sideUser" class="side-user"><i class="far fa-user"></i>会员中心</button>
        </div>
        <!-- 快速轉帳 -->
        <div class="transfer-wrap">
            <div class="transfer-head">快速转帐
                <button class="transfer-close"><i class="fas fa-times"></i></button>
            </div>
            <div class="transfer-main">
                <div class="transfer-input">
                    <div class="account">
                        <label>主帳戶</label>
                        <input type="text" value="5000">
                    </div>
                    <div class="game">
                        <label>天津时时彩</label>
                        <input type="text" value="0">
                    </div>
                </div>
                <div class="transfer-input is-amount">
                    <label>转帐金额</label>
                    <input type="text" placeholder="请输入整数金额">
                    <button>全转</button>
                </div>
                <div class="transfer-keyboard">
                    <div class="number">
                        <button>1</button>
                        <button>2</button>
                        <button>3</button>
                        <button>4</button>
                        <button>5</button>
                        <button>6</button>
                        <button>7</button>
                        <button>8</button>
                        <button>9</button>
                        <button>0</button>
                    </div>
                    <div class="backspace">
                        <button>←</button>
                    </div>
                </div>
                <div class="transfer-btn">
                    <button>全部转回主帐户</button>
                    <button>确定送出</button>
                </div>
            </div>
        </div>
        <!-- 彈窗 -->
        <div class="popup-wrap"></div>
        <div class="overlay"></div>
    </article>
    <!-- JS -->
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.counter.js"></script>
    <script src="js/vue.min.js"></script>
    <script src="js/vue-app.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $("#lotteryMenu .title").on("click", function(e){
                if($(this).parent().has(".content")) {
                    e.preventDefault();
                }
                if(!$(this).hasClass("active") && $(window).width() > 1024) {
                    $("#lotteryMenu .content").slideUp();
                    $("#lotteryMenu .title").removeClass("active");
                    $(this).next(".content").slideDown();
                    $(this).addClass("active");
                }
                else if(!$(this).hasClass("active") && $(window).width() < 1024) {
                    $("#lotteryMenu .content").fadeOut();
                    $("#lotteryMenu .title").removeClass("active");
                    $(this).next(".content").fadeIn();
                    $(this).addClass("active");
                    $(".overlay").addClass("active");
                }
                else if($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this).next(".content").slideUp();
                }
                $(".nav-wrap").removeClass("active");
            });
            $("#lotteryMenu .btn-close").on("click", function(e){
                $("#lotteryMenu .title").removeClass("active");
                if ($(window).width() < 1025) {
                    $(".overlay").removeClass("active");
                    $("#lotteryMenu .content").fadeOut();
                }
                else {
                    $("#lotteryMenu .content").slideUp();
                }
            });

            // demo: 行動裝置移除active狀態
            if ($(window).width() < 1025) {
                $("#lotteryMenu .title").removeClass("active");
                $("#lotteryMenu .content").css("display", "");
                $("#lotteryMenu .content li a").removeClass("active");
            }
        });
        $('.counter').counter();
    </script>
    <script src="js/game.js"></script>
</body>
</html>
