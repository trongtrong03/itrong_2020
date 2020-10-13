<!DOCTYPE html>
<html class="news">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>丸久娱乐城</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include "_header.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="banner-wrap"><img src="image/banner_news_m.jpg"></section>
            <?php include "_marquee.php"; ?>
            <?php include "_nav.php"; ?>
            <div class="container-main">
                <div class="container-content">
                    <div class="news-list">
                        <ul>
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>在线支付、微支付及支付宝维护中</h2>
                                </a>
                            </li>
                            <!-- example start -->
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>棋牌优惠日领彩金8888</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>【系统公告】禁止重复申请账号</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>娱乐城固定维护时间为每周三早上09：30〜12：00</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>敬告嘉宾,電子遊戲新增GTI,KY</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>在线支付、微支付及支付宝维护中在线支付、微支付及支付宝维护中在线支付、微支付及支付宝维护中在线支付、微支付及支付宝维护中在线支付、微支付及支付宝维护中</h2>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <h2>在线支付、微支付及支付宝维护中</h2>
                                </a>
                            </li>
                            <!-- example end -->
                        </ul>
                    </div>
                    <!-- news view -->
                    <div class="news-view">
                        <div class="news-article">
                            <h2 class="news-title">老虎城禁止重复申请账号</h2>
                            <div class="news-edit">
                                <p style="font-size: 18px; color: #4c4c4c;">会员限用一个会员账号，若发现会员重复申请账号行为，或使用多组账号进行游戏，经风控部门发现，一律停权</p>
                                <p style="font-size: 18px; color: #4c4c4c;">同一姓名/帐户/电话号码/IP位置/共享计算机/网络环境，仅限申请一次。</p>
                                <p style="font-size: 18px; color: #4c4c4c;">在此请玩家多多留意,老虎城祝您游玩愉快!!</p>
                                <p>
                                    <img src="image/example/news_form.png">
                                </p>
                            </div>
                        </div>
                        <button class="news-close"></button>
                    </div>
                    <!-- page -->
                    <div class="page-wrap">
                        <button class="page-btn btn-prev">
                            <i></i><b>上一页</b>
                        </button>
                        <div class="page-num">
                            <a href="#0">01</a>
                            <a href="#0">02</a>
                            <a href="#0">03</a>
                            <a href="#0">04</a>
                            <a href="#0">05</a>
                        </div>
                        <div class="page-select">
                            <select>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                        </div>
                        <button class="page-btn btn-next">
                            <b>下一页</b><i></i>
                        </button>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Float bar -->
        <?php include "_float.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(function () {
            $(".news-list li").click(function() {
                $("html, body").addClass("no-scroll");
                $(".overlay").addClass("active");
                $(".news-view").fadeIn();
            });
            $(".news-close").click(function () {
                $("html, body").removeClass("no-scroll");
                $(".overlay").removeClass("active");
                $(".news-view").fadeOut();
            });
        });
    </script>
</body>
</html>
