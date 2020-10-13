<!DOCTYPE html>
<html class="index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>神棋Online</title>
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
            <div class="container-main">
                <div class="index-main">
                    <!-- slider -->
                    <section class="index-slider-wrap">
                        <div class="index-slider-main">
                            <div class="index-slider-carousel">
                                <div class="index-slider-item is-hot">
                                    <a href="">
                                        <figure>
                                            <img src="image/example/c01.png">
                                        </figure>
                                    </a>
                                </div>
                                <!-- example start -->
                                <div class="index-slider-item">
                                    <a href="">
                                        <figure>
                                            <img src="image/example/c02.png">
                                        </figure>
                                    </a>
                                </div>
                                <div class="index-slider-item">
                                    <a href="">
                                        <figure>
                                            <img src="image/example/c03.png">
                                        </figure>
                                    </a>
                                </div>
                                <div class="index-slider-item">
                                    <a href="">
                                        <figure>
                                            <img src="image/example/c04.png">
                                        </figure>
                                    </a>
                                </div>
                                <div class="index-slider-item">
                                    <a href="">
                                        <figure>
                                            <img src="image/example/c03.png">
                                        </figure>
                                    </a>
                                </div>
                                <!-- example end -->
                            </div>
                        </div>
                    </section>
                    <!-- game -->
                    <section class="index-game-wrap">
                        <div class="index-game-main">
                            <figure class="index-game-item">
                                <a href="">
                                    <img src="image/example/banner_01.jpg">
                                </a>
                            </figure>
                            <figure class="index-game-item">
                                <a href="">
                                    <img src="image/example/banner_02.jpg">
                                </a>
                            </figure>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Footer -->
            <?php include "_footer.php"; ?>
        </main>
        <!-- Bottom bar -->
        <?php include "_bottom.php"; ?>
        <!-- Float bar -->
        <?php include "_float.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <script>
        // Slick
        $(function() {
            $('.index-slider-carousel').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 1500,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>
</body>
</html>
