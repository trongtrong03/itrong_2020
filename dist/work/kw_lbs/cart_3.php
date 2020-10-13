<!DOCTYPE html>
<html class="cart">
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
        <?php include "_h_logon.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="layout-wrap">
                <div class="layout-main cart-bg">
                    <div class="cart-outer">
                        <div class="cart-wrap">
                            <div class="cart-main">
                                <h1><span>購物車</span></h1>
                                <div class="cart-container">
                                    <!-- 主內容 -->
                                    <div class="cart-form-wrap">
                                        <div class="cart-form-step">
                                            <span><b>輸入資料</b></span>
                                            <span><b>確認訂單內容</b></span>
                                            <span class="active"><b>訂單完成</b></span>
                                        </div>
                                        <div class="cart-form-main">
                                            <p>訂單已送出！我們將盡速為您安排出貨相關事宜。</p>
                                            <div class="cart-form-buyer cart2 locked">
                                                <div class="status">
                                                    <p>
                                                        <span>黃大銘</span></p>
                                                    <p>
                                                        <span>407</span>
                                                        <span>台中市漢翔路335號15-2</span>
                                                    </p>
                                                    <p>
                                                        <span>0922171922</span>
                                                    </p>
                                                    <p>
                                                        <span>jerry@kiwigo.tw</span>
                                                    </p>
                                                    <p>
                                                        <span>男性</span>
                                                    </p>
                                                    <p>
                                                        <span>生年月日　　1993年2月26日</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="cart-form-address locked">
                                                <div class="status">
                                                    <p>
                                                        <span>黃大銘</span></p>
                                                    <p>
                                                        <span>407</span>
                                                        <span>台中市漢翔路335號15-2</span>
                                                    </p>
                                                    <p>
                                                        <span>0922171922</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="cart-form-pay locked">
                                                <div class="status">
                                                    <p>
                                                        <span>貨到付款</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="cart-form-btn">
                                                <a href="spots.php" class="done"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 側欄 -->
                                    <aside class="cart-side">
                                        <div class="cart-side-order">
                                            <div class="cart-side-list">
                                                <div class="cart-side-item">
                                                    <figure>
                                                        <img src="image/example/b01.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2><a href="spots_view.php">CAPUCINES MM經典手拿包</a></h2>
                                                        <p>
                                                            <span class="c-color">SAND BROWN</span>
                                                            <span class="c-size">XS</span>
                                                            <span class="c-no">WM315Q</span>
                                                            <span class="c-num">1</span>
                                                        </p>
                                                        <strong class="price">NTD 5,100</strong>
                                                    </hgroup>
                                                </div>
                                                <!-- example start -->
                                                <!-- example end -->
                                            </div>
                                            <div class="cart-side-fee">
                                                <div class="commodity">NTD 2,100</div>
                                                <div class="shipping">NTD 120</div>
                                            </div>
                                        </div>
                                        <div class="cart-side-total">
                                            <span>NTD 2,220</span>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_float.php"; ?>
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script>
        $(".btn-edit").click(function () {
            $(this).parent().removeClass("locked");
            $(this).hide();
            $(this).next(".btn-submit").show();
        });
        $(".btn-submit").click(function () {
            $(this).parent().addClass("locked");
            $(this).hide();
            $(this).prev(".btn-edit").show();
        });
        $("#r1").change(function () {
            $(".radio .address").hide();
        });
        $("#r2").change(function () {
            $(".radio .address").show();
        });
    </script>
</body>
</html>
