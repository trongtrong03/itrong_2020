<!DOCTYPE html>
<html class="login">
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
                    <div class="mem-login-wrap">
                        <div class="mem-login-main">
                            <h1>會員登入</h1>
                            <div class="mem-login-content">
                                <div class="mem-login-social">
                                    <div>
                                        <button class="btn-login-fb"><span>FACEBOOK 快速登入</span></button>
                                        <button class="btn-login-google"><span>GOOGLE 快速登入</span></button>
                                    </div>
                                </div>
                                <div class="mem-login-account">
                                    <div>
                                        <div class="input">
                                            <span>電子郵件</span>
                                            <input type="text" placeholder="請輸入您的e-mail">
                                        </div>
                                        <div class="input">
                                            <span>密碼</span>
                                            <input type="text" placeholder="請輸入您的密碼">
                                        </div>
                                        <button>會員登入</button>
                                    </div>
                                </div>
                                <div class="mem-login-option">
                                    <a href="#0"><i class="fas fa-key"></i><span>忘記密碼嗎？</span></a>
                                    <a href="register.php"><i class="fas fa-user"></i><span>註冊新會員</span></a>
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
