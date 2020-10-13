<!DOCTYPE html>
<html class="register">
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
        <?php include "_header.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="layout-wrap">
                <div class="layout-main">
                    <div class="mem-register-wrap">
                        <div class="mem-register-main">
                            <h1>會員註冊</h1>
                            <div class="mem-register-content">
                                <div class="mem-register-account">
                                    <div>
                                        <div class="input">
                                            <span>姓名</span>
                                            <input type="text" placeholder="請輸入您的姓名">
                                        </div>
                                        <div class="input">
                                            <span>電子郵件</span>
                                            <input type="text" placeholder="請輸入您的e-mail">
                                        </div>
                                        <div class="input">
                                            <span>生日</span>
                                            <input type="text" placeholder="請輸入您的生日">
                                        </div>
                                        <div class="input">
                                            <span>密碼</span>
                                            <input type="text" placeholder="請輸入您的密碼">
                                        </div>
                                        <div class="input">
                                            <span>密碼確認</span>
                                            <input type="text" placeholder="請再輸入一次密碼">
                                        </div>
                                        <button>確認送出</button>
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
