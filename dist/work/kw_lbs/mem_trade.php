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
                                        <div class="member-trade-row">
                                            <span>購買日期</span>
                                            <span>訂單編號</span>
                                            <span>付款方式</span>
                                            <span>處理狀態</span>
                                            <span>交易金額</span>
                                            <span>購買明細</span>
                                        </div>
                                        <div class="member-trade-row">
                                            <span>11-28 10:48</span>
                                            <span>10047871</span>
                                            <span>ATM轉帳</span>
                                            <span>已出貨</span>
                                            <span>NT$11040元</span>
                                            <span><a href="mem_trade_view.php">瀏覽明細</a></span>
                                        </div>
                                        <!-- example start -->
                                        <div class="member-trade-row">
                                            <span>11-28 10:48</span>
                                            <span>10047871</span>
                                            <span>全家貨到付款</span>
                                            <span>已出貨</span>
                                            <span>NT$8030元</span>
                                            <span><a href="mem_trade_view.php">瀏覽明細</a></span>
                                        </div>
                                        <div class="member-trade-row">
                                            <span>11-28 10:48</span>
                                            <span>10047871</span>
                                            <span>ATM轉帳</span>
                                            <span>已出貨</span>
                                            <span>NT$11040元</span>
                                            <span><a href="mem_trade_view.php">瀏覽明細</a></span>
                                        </div>
                                        <div class="member-trade-row">
                                            <span>11-28 10:48</span>
                                            <span>10047871</span>
                                            <span>ATM轉帳</span>
                                            <span>已出貨</span>
                                            <span>NT$11040元</span>
                                            <span><a href="mem_trade_view.php">瀏覽明細</a></span>
                                        </div>
                                        <div class="member-trade-row">
                                            <span>11-28 10:48</span>
                                            <span>10047871</span>
                                            <span>ATM轉帳</span>
                                            <span>已出貨</span>
                                            <span>NT$11040元</span>
                                            <span><a href="mem_trade_view.php">瀏覽明細</a></span>
                                        </div>
                                        <!-- example end -->
                                        <div class="member-trade-count">總共5筆訂單</div>
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
