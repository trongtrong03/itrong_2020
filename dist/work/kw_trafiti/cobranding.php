<!DOCTYPE html>
<html class="cobranding">
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
            <!-- banner -->
            <section class="banner-wrap">
                <img src="image/banner_cobranding_m.jpg">
            </section>
            <!-- content -->
            <section class="container-main">
                <!-- breadcrumb trail -->
                <div class="trail-wrap">
                    <ul class="removeTextNodes">
                        <li>
                            <i class="fas fa-home"></i>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Co-Branding</li>
                    </ul>
                </div>
                <!-- cobranding -->
                <div class="cobranding-wrap">
                    <ul class="cobranding-list removeTextNodes">
                        <li>
                            <a href="cobranding_view.php" style="background-color: #654961;">
                                <hgroup>
                                    <h2>ITARA</h2>
                                    <hr>
                                    <p>透過精量選物的概念 , 與itara聯名創作旅行外出時的必備商品,共同開發新市場</p>
                                    <button>詳細內容</button>
                                </hgroup>
                                <figure style="background-image: url('image/example/a01.jpg')">
                                    <img src="image/example/a01.jpg">
                                </figure>
                            </a>
                        </li>
                        <!-- example start -->
                        <li>
                            <a href="cobranding_view.php" style="background-color: #5b9da6;">
                                <hgroup>
                                    <h2>Hotel exclusive</h2>
                                    <hr>
                                    <p>酒店洗沐用品系列：與精選酒店品牌聯名推出草本 spa  系列洗沐用品， 提供旅行者身心放鬆時光</p>
                                    <button>詳細內容</button>
                                </hgroup>
                                <figure style="background-image: url('image/example/a02.jpg')">
                                    <img src="image/example/a02.jpg">
                                </figure>
                            </a>
                        </li>
                        <!-- example end -->
                    </ul>
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
