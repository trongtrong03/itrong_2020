<!DOCTYPE html>
<html class="member">
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
                <div class="layout-trail">
                    <span><a href="index.php">首頁</a></span>
                    <span><a href="member.php">會員中心</a></span>
                    <span>交易查詢</span>
                </div>
                <div class="layout-main">
                    <div class="member-wrap">
                        <div class="member-main">
                            <div class="member-container">
                                <aside class="member-menu">
                                    <button class="member-menu-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <nav>
                                        <a href="member.php">更新個人訊息</a>
                                        <a href="mem_pw.php">更改密碼</a>
                                        <a href="mem_trade.php" class="active">交易查詢</a>
                                        <a href="mem_address.php">收件地址管理</a>
                                        <a href="mem_faq.php">問答記錄</a>
                                        <a href="mem_link.php">連線記錄</a>
                                    </nav>
                                </aside>
                                <div class="member-content">
                                    <h1><span>交易查詢</span></h1>
                                    <div class="member-trade-wrap">
                                        <div class="cart-content">
                                            <div class="cart-list">
                                                <div class="cart-item">
                                                    <figure>
                                                        <img src="image/example/b01.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2><a href="spots_view.php">CAPUCINES MM經典手拿包</a></h2>
                                                        <p>
                                                            <span class="c-color">SAND BROWN</span>
                                                            <span class="c-size">XS</span>
                                                            <span class="c-no">WD612Q</span>
                                                        </p>
                                                        <strong class="price">NTD 5,100</strong>
                                                    </hgroup>
                                                </div>
                                                <!-- example start -->
                                                <div class="cart-item">
                                                    <figure>
                                                        <img src="image/example/b02.jpg">
                                                    </figure>
                                                    <hgroup>
                                                        <h2><a href="spots_view.php">CAPUCINES MM經典手拿包</a></h2>
                                                        <p>
                                                            <span class="c-color">SAND BROWN</span>
                                                            <span class="c-size">XS</span>
                                                            <span class="c-no">WD612Q</span>
                                                        </p>
                                                        <strong class="price">NTD 8,200</strong>
                                                    </hgroup>
                                                </div>
                                                <!-- example end -->
                                            </div>
                                            <div class="cart-fee">
                                                <div>
                                                    <div class="commodity">NTD 13,300</div>
                                                    <div class="shipping">NTD 0</div>
                                                </div>
                                            </div>
                                            <div class="cart-total">
                                                <div>
                                                    <span>NTD 13,300</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="member-trade-back">
                                            <a href="javascript:history.back()">返回上一頁</a>
                                        </div>
                                    </div>
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
</body>
</html>
