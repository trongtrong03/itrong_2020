<!DOCTYPE html>
<html class="index">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>國立交通大學機械工程學系</title>
    <link href="image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include '_header.php'; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="index-slider">
                <li style="background-image: url(image/example/banner_01.jpg);">
                    <img src="image/example/banner_01.jpg" alt="">
                </li>
                <li style="background-image: url(image/example/banner_02.jpg);">
                    <img src="image/example/banner_02.jpg" alt="">
                </li>
            </section>
            <section class="index-news-wrap">
                <div class="index-news-main">
                    <ul class="index-news-slider rslides">
                        <li>
                            <a href="#0">
                                <h2>2018-08-17</h2>
                                <h3>機械系106學年(下)工程認證資料蒐集(教師及助教注意事項)公告</h3>
                                <h4>敬請各位老師務必督促助教務須陸續蒐存及編輯本學期任教科目之工程認證課程資料敬請各位老師務必督促助教務須陸續蒐存及編輯本學期任教科目之工程認證課程資料敬請各位老師務必督促助教務須陸續蒐存及編輯本學期任教科目之工程認證課程資料...</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <h2>2018-08-22</h2>
                                <h3>標題2</h3>
                                <h4>簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述</h4>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <h2>2018-08-30</h2>
                                <h3>標題3</h3>
                                <h4>簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述簡述</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="index-intro-wrap">
                <hgroup class="index-intro-main">
                    <h2>Group Philosophy</h2>
                    <p>We are building up multi-rotor UAV systems. The objective is to develop controllers for enabling autonomous flight and navigation with the capability to avoid obstacles and maintaining network connectivity , cooperative control of multi-agent networked systems using distributed control architectures. The applications include dynamic wireless sensor networks (DWSN), mapping, surveillance, entertainments, etc.</p>
                </hgroup>
            </section>
            <section class="index-research-wrap">
                <div class="index-research-main">
                    <h2>RESEARCH</h2>
                    <h3>研究方向</h3>
                    <ul class="removeTextNodes">
                        <li>
                            <a href="https://www.youtube.com/embed/dNriS02fH3M" target="_blank">
                                <figure>
                                    <img src="image/example/viedo_cover01.jpg">
                                    <figcaption>分散式控制無人機系統</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/embed/dNriS02fH3M" target="_blank">
                                <figure>
                                    <img src="image/example/viedo_cover02.jpg">
                                    <figcaption>自主機器人系統之控制</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/embed/dNriS02fH3M" target="_blank">
                                <figure>
                                    <img src="image/example/viedo_cover03.jpg">
                                    <figcaption>非線性控制系統</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/embed/dNriS02fH3M" target="_blank">
                                <figure>
                                    <img src="image/example/viedo_cover04.jpg">
                                    <figcaption>非線性控制系統</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/embed/dNriS02fH3M" target="_blank">
                                <figure>
                                    <img src="image/example/viedo_cover05.jpg">
                                    <figcaption>虛實整合CYBER-PHYSICAL SYSTEMS</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="research.php" target="_blank">
                                <figure>
                                    <img src="image/index_viedo_default.jpg">
                                </figure>
                                <span>觀看更多研究影片</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include '_footer.php'; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <script>
        $(function() {
            $('.index-slider').bxSlider({
                mode: 'horizontal',
                adaptiveHeight: true,
                adaptiveHeightSpeed: 500,
                touchEnabled: true,
                pager: true,
                controls: false,
                auto: true,
                pause: 6000,
                moveSlides: 1,
                infiniteLoop: true,
                speed: 1200,
            });
        });
    </script>
    <script src="js/responsiveslides.js"></script>
    <script>
        $(function () {
            $(".index-news-slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                timeout: 12000
            });
        });
    </script>
</body>
</html>
