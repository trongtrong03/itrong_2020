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
                                <div class="m-order-view">
                                    <h2 class="status">抵達目的地</h2>
                                    <div class="info">
                                        <p>姓名：王小美</p>
                                        <p>地址：台灣 台中市西屯區弘孝路100號</p>
                                        <p>電話：0912-3456789</p>
                                    </div>
                                    <hr>
                                    <div class="item">
                                        <div class="info">
                                            <span>2019-08-20 14:12:34</span>
                                            <span>訂單編號:518225145582148</span>
                                        </div>
                                        <ul>
                                            <li class="removeTextNodes">
                                                <figure>
                                                    <img src="image/example/img09.jpg">
                                                </figure>
                                                <hgroup>
                                                    <h2>乳油木保濕凝霜</h2>
                                                    <h3>商品規格：15ml</h3>
                                                    <span>NT$1,024  X  1</span>
                                                </hgroup>
                                            </li>
                                            <li class="removeTextNodes">
                                                <figure>
                                                    <img src="image/example/img09.jpg">
                                                </figure>
                                                <hgroup>
                                                    <h2>乳油木保濕凝霜</h2>
                                                    <h3>商品規格：15ml</h3>
                                                    <span>NT$1,024  X  1</span>
                                                </hgroup>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom">
                                        <hgroup>
                                            <h3>
                                                <span>結帳金額</span>
                                                <b>$5,200</b>
                                            </h3>
                                            <h3 class="discount">
                                                <span>商品折扣</span>
                                                <b>- $180</b>
                                            </h3>
                                            <h3 class="offer">
                                                <span>優惠代碼</span>
                                                <b>$0</b>
                                            </h3>
                                            <h3 class="offer">
                                                <span>點數折抵</span>
                                                <b>$0</b>
                                            </h3>
                                            <h3>
                                                <span>運費金額</span>
                                                <b>$0</b>
                                            </h3>
                                            <h4>
                                                <span>結帳金額</span>
                                                <b>$5,020</b>
                                            </h4>
                                        </hgroup>
                                        <button onclick="javascript:location.href='m_order_return.php'">退貨申請</button>
                                    </div>
                                </div>
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
