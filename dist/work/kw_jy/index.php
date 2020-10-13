<!DOCTYPE html>
<html class="index zh-tw">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>久益數位科技</title>
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
            <section class="index-slider">
                <li style="background-image: url(image/lang/zh-tw/slider_01.jpg);">
                    <img src="image/lang/zh-tw/slider_01.jpg">
                    <img src="image/lang/zh-tw/slider_01_t.jpg">
                    <img src="image/lang/zh-tw/slider_01_m.jpg">
                </li>
                <li style="background-image: url(image/lang/zh-tw/slider_02.jpg);">
                    <img src="image/lang/zh-tw/slider_02.jpg">
                    <img src="image/lang/zh-tw/slider_02_t.jpg">
                    <img src="image/lang/zh-tw/slider_02_m.jpg">
                </li>
            </section>
            <section class="index-service-wrap">
                <div class="index-service-main">
                    <a href="service03.php">
                        <figure>
                            <img src="image/index_service01.png">
                            <figcaption>第三方支付</figcaption>
                        </figure>
                    </a>
                    <a href="service02.php">
                        <figure>
                            <img src="image/index_service02.png">
                            <figcaption>娛樂平台系統包網</figcaption>
                        </figure>
                    </a>
                    <a href="service.php">
                        <figure>
                            <img src="image/index_service03.png">
                            <figcaption>遊戲產品</figcaption>
                        </figure>
                    </a>
                    <a href="#0">
                        <figure>
                            <img src="image/index_service04.png">
                            <figcaption>廣告合作專案</figcaption>
                        </figure>
                    </a>
                </div>
            </section>
            <section class="index-product-wrap">
                <div class="index-product-main">
                    <a href="service.php#proLive">
                        <figure>
                            <img src="image/index_product01.png">
                            <figcaption>真人視訊</figcaption>
                            <p>在線美女荷官，提供高清晰高準度直播畫面能讓您親臨其境感受前所未有的真實體驗，</p>
                        </figure>
                    </a>
                    <a href="service.php#proCasino">
                        <figure>
                            <img src="image/index_product02.png">
                            <figcaption>電子遊戲</figcaption>
                            <p>玩法簡單多樣，最高不計輸贏返水，特碼業界最高賠率，祝君狂中大獎，一夜致富！</p>
                        </figure>
                    </a>
                    <a href="service.php#proLottery">
                        <figure>
                            <img src="image/index_product03.png">
                            <figcaption>彩票娛樂</figcaption>
                            <p>提供超高賠率彩票、所有開獎結果官方同步。多種組合為您呈現全新型態的彩票娛樂新感受。</p>
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
                        <button type="submit">確認送出</button>
                    </form>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
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
