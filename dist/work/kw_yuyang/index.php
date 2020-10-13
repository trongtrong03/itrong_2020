<!DOCTYPE html>
<html class="index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>昱洋企業社</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <header class="header-wrap">
            <section class="header-center">
                <div class="logo-wrap">
                    <a href="index.php">
                        <img src="image/logo.png">
                    </a>
                </div>
                <nav class="nav-wrap">
                    <a id="navAbout" href="##">關於我們</a>
                    <a href="products.php">產品資訊</a>
                    <a id="navContact" href="##">聯絡我們</a>
                </nav>
            </section>
            <div class="slider-wrap">
                <div>
                    <img src="image/example/slider01.jpg">
                    <img src="image/example/slider01_m.jpg">
                </div>
                <div>
                    <img src="image/example/slider01.jpg">
                    <img src="image/example/slider01_m.jpg">
                </div>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="main-wrap">
            <section class="main-center">
                <div id="themeProducts" class="pd-wrap">
                    <div class="pd-center">
                        <div class="pd-title">
                            <h2>人氣商品</h2>
                        </div>
                        <div class="pd-list">
                            <div class="pd-item">
                                <a href="products_view.php">
                                    <figure style="background-image: url('image/example/bb01.jpg')"></figure>
                                    <hgroup>
                                        <h2>認證樟芝王60粒</h2>
                                        <h3>建議售價：<b>1,350</b></h3>
                                        <button>我要購買</button>
                                    </hgroup>
                                </a>
                            </div>
                            <!-- example start -->
                            <div class="pd-item">
                                <a href="products_view.php">
                                    <figure style="background-image: url('image/example/bb02.jpg')"></figure>
                                    <hgroup>
                                        <h2>CHENGLIN 澄霖-牛樟芝膠囊(90粒)</h2>
                                        <h3>建議售價：<b>3,250</b></h3>
                                        <button>我要購買</button>
                                    </hgroup>
                                </a>
                            </div>
                            <div class="pd-item">
                                <a href="products_view.php">
                                    <figure style="background-image: url('image/example/bb03.jpg')"></figure>
                                    <hgroup>
                                        <h2>CAC101牛樟芝子實體天級膠囊</h2>
                                        <h3>建議售價：<b>9,850</b></h3>
                                        <button>我要購買</button>
                                    </hgroup>
                                </a>
                            </div>
                            <div class="pd-item">
                                <a href="products_view.php">
                                    <figure style="background-image: url('image/example/bb04.jpg')"></figure>
                                    <hgroup>
                                        <h2>《永信HAC》子實牛樟芝膠囊(60粒)</h2>
                                        <h3>建議售價：<b>1,900</b></h3>
                                        <button>我要購買</button>
                                    </hgroup>
                                </a>
                            </div>
                            <!-- example end -->
                        </div>
                    </div>
                </div>
                <div id="themeAbout" class="about-wrap">
                    <div class="about-center">
                        <hgroup>
                            <h2>關於昱洋 About us</h2>
                            <p>以『安全、品質、專業』為訴求，透過產官學研合作計畫致力於生產技術的研發，提升企業競爭優勢；根據科學數據 (動物實驗) 與專業技術，以嚴謹態度不斷創新研發「最安全、高品質、有功效」產品，並承諾給予消費者真實的健康希望。</p>
                            <p><br></p>
                            <p>公司於「國家中部科學園區」成立牛樟芝生技研發培育中心，並透過產學合作，完成台灣特有「國寶級牛樟芝」之功效成分純化與認證工作，希冀對於人類未來之疾病預防有所貢獻，並期許成牛樟專家為食用菇菌食品及其他保健食品之研發與供應中心，打造台灣生技的先鋒，為全球人類健康努力，邁入國際化的使命與願景!</p>
                        </hgroup>
                        <figure></figure>
                    </div>
                </div>
                <div id="themeContact" class="contact-wrap">
                    <div class="contact-center">
                        <h2><b>聯絡我們</b></h2>
                        <form action="">
                            <div class="contact-form">
                                <div class="contact-row">
                                    <div class="contact-input">
                                        <input type="text" placeholder="姓名">
                                    </div>
                                    <div class="contact-input">
                                        <input type="text" placeholder="電話">
                                    </div>
                                </div>
                                <div class="contact-row">
                                    <div class="contact-input">
                                        <input type="text" placeholder="信箱">
                                    </div>
                                </div>
                                <div class="contact-row">
                                    <div class="contact-input">
                                        <textarea placeholder="留言訊息"></textarea>
                                    </div>
                                </div>
                                <button>確認送出</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(".slider-wrap").slick({
            dots: true,
            arrows: false,
        });
        $(".pd-slider").slick({
            dots: false,
            arrows: true,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    </script>
</body>
</html>
