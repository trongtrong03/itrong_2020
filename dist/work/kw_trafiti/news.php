<!DOCTYPE html>
<html class="news">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Trafiti</title>
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
            <!-- content -->
            <section class="container-main">
                <!-- breadcrumb trail -->
                <div class="trail-wrap">
                    <ul class="removeTextNodes">
                        <li>
                            <i class="fas fa-home"></i>
                            <a href="index.php">Home</a>
                        </li>
                        <li>What’s news</li>
                    </ul>
                </div>
                <!-- news -->
                <div class="news-wrap">
                    <div class="news-main">
                        <div class="news-item">
                            <div class="news-date">
                                <time>
                                    <span><b>25</b><b>Dec</b><b>2018</b></span>
                                </time>
                            </div>
                            <div class="news-content">
                                <figure style="background-image: url('image/example/new_01.jpg')">
                                    <img src="image/example/new_01.jpg">
                                </figure>
                                <hgroup>
                                    <h2>2019 Happy new year</h2>
                                    <p>Fans~ Happy New Year! iTARA does not fight during the Spring Festival, so you will receive it within 24 hours! Remind fans ~~~<br>There is a cold current coming over the weekend! </p>
                                    <a href="news_view.php">more</a>
                                </hgroup>
                            </div>
                        </div>
                        <!-- example start -->
                        <div class="news-item">
                            <div class="news-date">
                                <time>
                                    <span><b>25</b><b>Dec</b><b>2018</b></span>
                                </time>
                            </div>
                            <div class="news-content">
                                <figure style="background-image: url('image/example/new_02.jpg')">
                                    <img src="image/example/new_02.jpg">
                                </figure>
                                <hgroup>
                                    <h2>2019 Happy new year</h2>
                                    <p>Fans~ Happy New Year! iTARA does not fight during the Spring Festival, so you will receive it within 24 hours! Remind fans ~~~<br>There is a cold current coming over the weekend! </p>
                                    <a href="news_view.php">more</a>
                                </hgroup>
                            </div>
                        </div>
                        <div class="news-item">
                            <div class="news-date">
                                <time>
                                    <span><b>25</b><b>Dec</b><b>2018</b></span>
                                </time>
                            </div>
                            <div class="news-content">
                                <figure style="background-image: url('image/example/new_03.jpg')">
                                    <img src="image/example/new_03.jpg">
                                </figure>
                                <hgroup>
                                    <h2>2019 Happy new year2019 Happy new year2019 Happy new year2019 Happy new year</h2>
                                    <p>Fans~ Happy New Year! iTARA does not fight during the Spring Festival, so you will receive it within 24 hours! Remind fans ~~~<br>There is a cold current coming over the weekend! </p>
                                    <a href="news_view.php">more</a>
                                </hgroup>
                            </div>
                        </div>
                        <!-- example end -->
                    </div>
                    <!-- pages -->
                    <div class="pages-wrap">
                        <div class="pages-main removeTextNodes">
                            <button class="fisrt"></button>
                            <button class="prev"></button>
                            <div class="pages-num removeTextNodes">
                                <b>1</b>
                                <a href="#0">2</a>
                                <a href="#0">3</a>
                            </div>
                            <button class="next"></button>
                            <button class="last"></button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Login -->
        <?php include "_login.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
