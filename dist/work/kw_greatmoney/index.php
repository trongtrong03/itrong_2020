<!DOCTYPE html>
<html class="index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>閎捷科技</title>
    <link href="image/favicon.ico" rel="shortcut icon">
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
                <li style="background-image: url(image/slider_01.jpg);">
                    <a href="###">
                        <img src="image/slider_01.jpg">
                        <img src="image/slider_01_m.jpg">
                    </a>
                </li>
                <li style="background-image: url(image/slider_02.jpg);">
                    <a href="###">
                        <img src="image/slider_02.jpg">
                        <img src="image/slider_02_m.jpg">
                    </a>
                </li>
            </section>
            <section class="index-link-wrap">
                <div class="index-link-main">
                    <ul class="index-link-list removeTextNodes">
                        <li class="is-card">
                            <a href="###">
                                <figure>
                                    <img src="image/id_img01.jpg">
                                </figure>
                                <span>線上刷卡服務</span>
                            </a>
                        </li>
                        <li class="is-atm">
                            <a href="###">
                                <figure>
                                    <img src="image/id_img02.jpg">
                                </figure>
                                <span>ATM / 網路ATM</span>
                            </a>
                        </li>
                        <li class="is-store">
                            <a href="###">
                                <figure>
                                    <img src="image/id_img03.jpg">
                                </figure>
                                <span>超商代收</span>
                            </a>
                        </li>
                        <li class="is-fee">
                            <a href="###">
                                <figure>
                                    <img src="image/id_img04.jpg">
                                </figure>
                                <span>手續費一覽表</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="index-about-wrap">
                <div class="index-about-main">
                    <h2>關於閎捷科技</h2>
                    <p>閎捷提供最全面與便捷的金流整合式服務．微型商家或是企業型商戶，都能一站滿足金流需求．</p>
                    <p>我們先後取得多家信用卡收單作業、四大超商代收代碼繳費服務，</p>
                    <p>建立含信用卡刷卡、超商代收付、ATM、手機條碼…等完整的線上金流機制，</p>
                    <p>致力於解決商家及消費者網路購物的各種問題，提升商家收款的便利性、消費者付款的資料安全及便利。</p>
                </div>
            </section>
            <section class="index-contact-wrap">
                <div class="index-contact-main">
                    <hgroup>
                        <h2><span>Contact</span><span>Great Money</span></h2>
                        <h3>聯絡閎捷</h3>
                    </hgroup>
                    <ul>
                        <li>
                            <h2>客服電話</h2>
                            <p><span>07-215-8009</span><span>0926-533-073</span></p>
                        </li>
                        <li>
                            <h2>電子信箱</h2>
                            <p>greatmoney166@gmail.com</p>
                        </li>
                        <li>
                            <h2>地　　址</h2>
                            <p>高雄市前金區市一路166號6樓</p>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <h2>LINE帳號</h2>
                            <p>@gmt166</p>
                        </li>
                        <li>
                            <h2>營業時間</h2>
                            <p><span>周一至周五</span><span>AM09:00-PM18:00</span></p>
                        </li>
                    </ul>
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
