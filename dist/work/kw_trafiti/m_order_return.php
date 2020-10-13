<!DOCTYPE html>
<html class="member is-login">
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
                        <li><a href="m_data.php">會員帳戶</a></li>
                        <li><a href="m_order.php">訂單中心</a></li>
                        <li><a href="m_order.php">抵達目的地</a></li>
                        <li>訂單詳情</li>
                    </ul>
                </div>
                <!-- member -->
                <div class="member-wrap">
                    <div class="member-main">
                        <div class="member-link">
                            <a href="m_order.php" class="active">訂單中心</a>
                            <a href="m_data.php">個人中心</a>
                            <a href="m_contact.php">聯絡塔台</a>
                        </div>
                        <div class="m-order-wrap">
                            <div class="m-order-main">
                                <div class="m-order-item">
                                    <div class="info">
                                        <input type="checkbox">
                                        <hgroup>
                                            <span>2019-08-20 14:12:34</span>
                                            <span>訂單編號:518225145582148</span>
                                            <span>NT$<b>3,800</b></span>
                                        </hgroup>
                                    </div>
                                    <hr>
                                    <div class="list">
                                        <ul>
                                            <li class="removeTextNodes">
                                                <figure>
                                                    <img src="image/example/img09.jpg">
                                                </figure>
                                                <h2>LvXing 洗面乳</h2>
                                                <h3>NT$900</h3>
                                            </li>
                                            <li class="removeTextNodes">
                                                <figure>
                                                    <img src="image/example/img10.jpg">
                                                </figure>
                                                <h2>LvXing 洗面乳</h2>
                                                <h3>NT$900</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="btn-return">我要退貨</button>
                            </div>
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
