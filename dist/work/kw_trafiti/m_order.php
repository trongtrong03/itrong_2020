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
                        <li>訂單中心</li>
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
                                <div class="m-order-link">
                                    <a href="#0">訂單成立<b>(0)</b></a>
                                    <a href="#0">付款成功<b>(0)</b></a>
                                    <a href="#0">處理中<b>(1)</b></a>
                                    <a href="#0">飛行中<b>(0)</b></a>
                                    <a href="#0" class="active">抵達目的地<b>(3)</b></a>
                                </div>
                                <div class="m-order-list">
                                    <div class="m-order-item">
                                        <h2 class="status">抵達目的地</h2>
                                        <div class="info">
                                            <span>2019-08-20 14:12:34</span>
                                            <span>訂單編號:518225145582148</span>
                                            <span>NT$<b>3,800</b></span>
                                        </div>
                                        <hr>
                                        <div class="item">
                                            <ul>
                                                <li class="removeTextNodes">
                                                    <figure>
                                                        <img src="image/example/img09.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2>乳油木保濕凝霜</h2>
                                                        <h3>NT$1,024  X  2</h3>
                                                    </hgroup>
                                                </li>
                                            </ul>
                                            <a href="m_order_view.php" class="detail">訂單詳情</a>
                                        </div>
                                    </div>
                                    <!-- example start -->
                                    <div class="m-order-item">
                                        <h2 class="status">抵達目的地</h2>
                                        <div class="info">
                                            <span>2019-08-20 14:12:34</span>
                                            <span>訂單編號:518225145582148</span>
                                            <span>NT$<b>3,800</b></span>
                                        </div>
                                        <hr>
                                        <div class="item">
                                            <ul>
                                                <li class="removeTextNodes">
                                                    <figure>
                                                        <img src="image/example/img09.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2>乳油木保濕凝霜</h2>
                                                        <h3>NT$1,024  X  2</h3>
                                                    </hgroup>
                                                </li>
                                            </ul>
                                            <a href="m_order_view.php" class="detail">訂單詳情</a>
                                        </div>
                                    </div>
                                    <div class="m-order-item">
                                        <h2 class="status">抵達目的地</h2>
                                        <div class="info">
                                            <span>2019-08-20 14:12:34</span>
                                            <span>訂單編號:518225145582148</span>
                                            <span>NT$<b>4,500</b></span>
                                        </div>
                                        <hr>
                                        <div class="item">
                                            <ul>
                                                <li class="removeTextNodes">
                                                    <figure>
                                                        <img src="image/example/img11.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2>LvXing 洗面乳</h2>
                                                        <h3>NT$900  X  1</h3>
                                                    </hgroup>
                                                </li>
                                                <li class="removeTextNodes">
                                                    <figure>
                                                        <img src="image/example/img10.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2>LvXing 洗面乳</h2>
                                                        <h3>NT$900  X  3</h3>
                                                    </hgroup>
                                                </li>
                                            </ul>
                                            <a href="m_order_view.php" class="detail">訂單詳情</a>
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
