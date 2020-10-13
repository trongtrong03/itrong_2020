<!DOCTYPE html>
<html class="promotions">
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
            <section class="banner-wrap"><img src="image/banner_promotions_m.jpg"></section>
            <?php include "_marquee.php"; ?>
            <?php include "_nav.php"; ?>
            <div class="container-main">
                <div class="container-content">
                    <div class="theme-content">
                        <ul class="promotions-list">
                            <li>
                                <figure class="promotions-title removeTextNodes">
                                    <img src="image/example/promotions_img01.jpg">
                                    <figcaption>
                                        <hgroup>
                                            <time>期始：2018-01-27 17<span>00：00：00</span></time>
                                            <time>結束：2018-02-17 27<span>00：00：00</span></time>
                                            <button>详细资讯</button>
                                        </hgroup>
                                    </figcaption>
                                </figure>
                                <div class="promotions-content">
                                    <div class="promotions-editor">
                                        <p>內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</p>
                                    </div>
                                    <button class="promotions-close">
                                        <i class="fas fa-chevron-up"></i>
                                    </button>
                                </div>
                            </li>
                            <li>
                                <figure class="promotions-title removeTextNodes">
                                    <img src="image/example/promotions_img02.jpg">
                                    <figcaption>
                                        <hgroup>
                                            <time>期始：2018-01-27 17<span>00：00：00</span></time>
                                            <time>結束：2018-02-17 27<span>00：00：00</span></time>
                                            <button>详细资讯</button>
                                        </hgroup>
                                    </figcaption>
                                </figure>
                                <div class="promotions-content">
                                    <div class="promotions-editor">
                                        <p>內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</p>
                                    </div>
                                    <button class="promotions-close">
                                        <i class="fas fa-chevron-up"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
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
        $(".promotions-title").on("click", function(e){
            if($(this).parent().has(".promotions-content")) {
                e.preventDefault();
            }
            if(!$(this).hasClass("active")) {
                $(".promotions-content").slideUp();
                $(".promotions-title").removeClass("active");
                $(this).next(".promotions-content").slideDown();
                $(this).addClass("active");
            }
            else if($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next(".promotions-content").slideUp();
            }
        });

        $('.promotions-close').click(function() {
            $('.promotions-content').slideUp();
            $(".promotions-title").removeClass("active");
        });
    </script>
</body>
</html>
