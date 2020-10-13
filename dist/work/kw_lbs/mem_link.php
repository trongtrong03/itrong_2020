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
                    <span>連線記錄</span>
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
                                        <a href="mem_trade.php">交易查詢</a>
                                        <a href="mem_address.php">收件地址管理</a>
                                        <a href="mem_faq.php">問答記錄</a>
                                        <a href="mem_link.php" class="active">連線記錄</a>
                                    </nav>
                                </aside>
                                <div class="member-content">
                                    <h1><span>連線記錄</span></h1>
                                    <div class="member-link-wrap">
                                        <div class="member-link-row">
                                            <span>活動名稱</span>
                                            <span>活動開始日</span>
                                            <span>總下標數量</span>
                                            <span>活動狀態</span>
                                        </div>
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <!-- example start -->
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線15網路特賣連線15網路特賣連線15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <div class="member-link-row">
                                            <span>10/15網路特賣連線</span>
                                            <span>2018/10/15</span>
                                            <span>22件商品</span>
                                            <span>已轉單</span>
                                        </div>
                                        <!-- example end -->
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
