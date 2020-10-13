<!DOCTYPE html>
<html class="search">
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
                        <li>Search Result</li>
                    </ul>
                </div>
                <!-- search result -->
                <div class="search-wrap">
                    <div class="search-input">
                        <input type="text" placeholder="Search">
                        <button onclick="javascript:location.href='search.php'"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="search-count"></div>
                    <div class="search-list">
                        <div class="items-list">
                            <ul>
                                <li>
                                    <a href="lvxing_view.php">
                                        <figure style="background-image: url('image/example/img09.jpg')"></figure>
                                        <hgroup>
                                            <h2>Wash  - face cleanser</h2>
                                            <h3>we know that, in addition to daily sunscreen, washing your face...</h3>
                                            <h4>NT$890</h4>
                                        </hgroup>
                                    </a>
                                    <div class="items-btn">
                                        <button class="btn-cart">
                                            <i class="fas fa-cart-plus"></i>
                                        </button>
                                        <button class="btn-wish">
                                            <i class="far fa-heart"></i>
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                </li>
                                <!-- example start -->
                                <li>
                                    <a href="lvxing_view.php">
                                        <figure style="background-image: url('image/example/img10.jpg')"></figure>
                                        <hgroup>
                                            <h2>Wash  - face cleanserWash  - face cleanserWash  - face cleanserWash  - face cleanser</h2>
                                            <h3>we know that, in addition to daily sunscreen, washing your face...</h3>
                                            <h4>NT$1,890</h4>
                                        </hgroup>
                                    </a>
                                    <div class="items-btn">
                                        <button class="btn-cart">
                                            <i class="fas fa-cart-plus"></i>
                                        </button>
                                        <button class="btn-wish is-checked">
                                            <i class="far fa-heart"></i>
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div>
                                </li>
                                <!-- example end -->
                            </ul>
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
    <script>
        $(function(){
            var $Count = $(".items-list li").length;
            $(".search-count").append( "<b>" + $Count + "</b>" );
        });
    </script>
</body>
</html>
