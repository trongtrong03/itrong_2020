<!DOCTYPE html>
<html class="index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>巷仔內</title>
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
                <li style="background-image: url(image/example/slider_01.jpg);">
                    <img src="image/example/slider_01.jpg">
                    <img src="image/example/slider_01_t.jpg">
                    <img src="image/example/slider_01_m.jpg">
                </li>
                <li style="background-image: url(image/example/slider_02.jpg);">
                    <img src="image/example/slider_02.jpg">
                    <img src="image/example/slider_02_t.jpg">
                    <img src="image/example/slider_02_m.jpg">
                </li>
            </section>
            <section class="index-preorder-wrap">
                <div class="index-preorder-main">
                    <h2><span>商品預購</span></h2>
                    <ul>
                        <li>
                            <a href="#0">
                                <figure>
                                    <img src="image/example/b01.jpg">
                                </figure>
                                <hgroup>
                                    <h2>LV經典手拿包</h2>
                                    <h3>LV M40780 METIS系列經典Monogram手提包</h3>
                                    <h4>$7,300</h4>
                                    <button>立即購買</button>
                                </hgroup>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <figure>
                                    <img src="image/example/b02.jpg">
                                </figure>
                                <hgroup>
                                    <h2>GUCCI 古馳男錶</h2>
                                    <h3>咖啡色PVD錶殼配咖啡色旭日紋錶面，搭配咖啡色皮革錶帶</h3>
                                    <h4>$13,780</h4>
                                    <button>立即購買</button>
                                </hgroup>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <figure>
                                    <img src="image/example/b03.jpg">
                                </figure>
                                <hgroup>
                                    <h2>Vividventure 亞帝芬奇鑽戒 </h2>
                                    <h3>1克拉鑽戒將堅定承諾幻化為指間永恆</h3>
                                    <h4>$180,000</h4>
                                    <button>立即購買</button>
                                </hgroup>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="index-about-wrap">
                <div class="index-about-main">
                    <hgroup>
                        <p>巷仔內為專業美國代購MasterBuy 美國購物通，提供您easy、smart、friendly、fast 的美國代購服務及特價活動優惠資訊，超低國際運費。2012年成立至今，以高度透明化費用、完善的 ... 您值得信賴的海外代買代購第一品牌! ...
您將會被導引至美國原始網站！</p>
                    </hgroup>
                    <span></span>
                </div>
            </section>
            <section class="index-spot-wrap">
                <div class="index-spot-main">
                    <h2><span>現貨區</span></h2>
                    <div class="carousel-wrap">
                        <div class="carousel-container">
                            <ul>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c01.jpg">
                                        </figure>
                                        <h2>FENDI</h2>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c02.jpg">
                                        </figure>
                                        <h2>BALENCIAGA</h2>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c03.jpg">
                                        </figure>
                                        <h2>BOTTEGA VENETA</h2>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c04.jpg">
                                        </figure>
                                        <h2>LOUIS VUITTON</h2>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c05.jpg">
                                        </figure>
                                        <h2>GUCCI</h2>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c06.jpg">
                                        </figure>
                                        <h2>GAP</h2>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <figure>
                                            <img src="image/example/c03.jpg">
                                        </figure>
                                        <h2>GAP</h2>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="carousel-ctrl">
                            <button class='carousel-prev'></button>   
                            <button class='carousel-next'></button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="index-ad-wrap">
                <a href="#0">
                    <img src="image/example/ad01.jpg" class="origin">
                    <img src="image/example/ad02.jpg" class="hover">
                </a>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_float.php"; ?>
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/script.js"></script>
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
    <script>
        $(function() {
            $('.carousel-container').iosSlider({
                infiniteSlider: true,
                snapToChildren: true,
                desktopClickDrag: true,
                keyboardControls: true,
                navNextSelector: $('.carousel-next'),
                navPrevSelector: $('.carousel-prev'),
            });
        });
    </script>
</body>
</html>
