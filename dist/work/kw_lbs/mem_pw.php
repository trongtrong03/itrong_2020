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
                    <span>更改密碼</span>
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
                                        <a href="mem_pw.php" class="active">更改密碼</a>
                                        <a href="mem_trade.php">交易查詢</a>
                                        <a href="mem_address.php">收件地址管理</a>
                                        <a href="mem_faq.php">問答記錄</a>
                                        <a href="mem_link.php">連線記錄</a>
                                    </nav>
                                </aside>
                                <div class="member-content">
                                    <h1><span>會員中心</span></h1>
                                    <div class="member-data-wrap">
                                        <form action="" class="member-data-form">
                                            <div class="member-data-input">
                                                <h2>舊密碼</h2>
                                                <input type="password" placeholder="請輸入目前密碼">
                                            </div>
                                            <br>
                                            <div class="member-data-input">
                                                <h2>新密碼</h2>
                                                <input type="password" placeholder="請輸入新密碼">
                                                <input type="password" placeholder="再次確認新密碼">
                                            </div>
                                            <div class="member-data-btn">
                                                <button>重新填寫</button>
                                                <button>確定修改</button>
                                            </div>
                                        </form>
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
