<!DOCTYPE html>
<html class="index zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>久益数位科技</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="../js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include "_header.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="index-slider">
                <li style="background-image: url(../image/lang/zh-cn/slider_01.jpg);">
                    <img src="../image/lang/zh-cn/slider_01.jpg">
                    <img src="../image/lang/zh-cn/slider_01_t.jpg">
                    <img src="../image/lang/zh-cn/slider_01_m.jpg">
                </li>
                <li style="background-image: url(../image/lang/zh-cn/slider_02.jpg);">
                    <img src="../image/lang/zh-cn/slider_02.jpg">
                    <img src="../image/lang/zh-cn/slider_02_t.jpg">
                    <img src="../image/lang/zh-cn/slider_02_m.jpg">
                </li>
            </section>
            <section class="index-service-wrap">
                <div class="index-service-main">
                    <a href="service03.php">
                        <figure>
                            <img src="../image/index_service01.png">
                            <figcaption>第三方支付</figcaption>
                        </figure>
                    </a>
                    <a href="service02.php">
                        <figure>
                            <img src="../image/index_service02.png">
                            <figcaption>娱乐平台系统包网</figcaption>
                        </figure>
                    </a>
                    <a href="service.php">
                        <figure>
                            <img src="../image/index_service03.png">
                            <figcaption>游戏产品</figcaption>
                        </figure>
                    </a>
                    <a href="#0">
                        <figure>
                            <img src="../image/index_service04.png">
                            <figcaption>广告合作专案</figcaption>
                        </figure>
                    </a>
                </div>
            </section>
            <section class="index-product-wrap">
                <div class="index-product-main">
                    <a href="service.php#proLive">
                        <figure>
                            <img src="../image/index_product01.png">
                            <figcaption>真人视讯</figcaption>
                            <p>在线美女荷官，提供高清晰高准度直播画面能让您亲临其境感受前所未有的真实体验，</p>
                        </figure>
                    </a>
                    <a href="service.php#proCasino">
                        <figure>
                            <img src="../image/index_product02.png">
                            <figcaption>电子游戏</figcaption>
                            <p>玩法简单多样，最高不计输赢返水，特码业界最高赔率，祝君狂中大奖，一夜致富！</p>
                        </figure>
                    </a>
                    <a href="service.php#proLottery">
                        <figure>
                            <img src="../image/index_product03.png">
                            <figcaption>彩票娱乐</figcaption>
                            <p>提供超高赔率彩票、所有开奖结果官方同步。多种组合为您呈现全新型态的彩票娱乐新感受。</p>
                        </figure>
                    </a>
                </div>
            </section>
            <section id="contactForm" class="index-contact-wrap">
                <div class="index-contact-main">
                    <form>
                        <div>
                            <input type="text" placeholder="Name">
                        </div>
                        <div>
                            <input type="text" placeholder="Email">
                        </div>
                        <div>
                            <textarea type="text" placeholder="Message"></textarea>
                        </div>
                        <button type="submit">确认送出</button>
                    </form>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="../js/script.js"></script>
    <script src="../js/slider.js"></script>
    <script>
        $(function() {
            $('.index-slider').bxSlider({
                mode: 'fade',
                adaptiveHeight: true,
                adaptiveHeightSpeed: 500,
                touchEnabled: false,
                pager: true,
                controls: true,
                auto: true,
                pause: 6000,
                moveSlides: 1,
                infiniteLoop: true,
                speed: 1200,
            });
        });
    </script>
</body>
</html>
