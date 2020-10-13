<!DOCTYPE html>
<html class="sign">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>蝸牛居家</title>
    <link href="image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include '_header.php'; ?>
        <!-- Main -->
        <main class="sign-wrap">
            <section class="sign-main">
                <div class="sign-content">
                    <hgroup class="title-wrap">
                        <h1>會員登入</h1>
                    </hgroup>
                    <div class="sign-form">
                        <div class="sign-input">
                            <input type="text" placeholder="輸入您的E-mail">
                        </div>
                        <div class="sign-input">
                            <input type="text" placeholder="輸入您的密碼">
                        </div>
                        <div class="sign-input code">
                            <input type="text" placeholder="輸入驗證碼">
                        </div>
                        <div class="sign-link">
                            <a href="#0">忘記密碼</a>
                            <a href="regist.php">加入會員</a>
                        </div>
                        <button class="sign-submit" onclick="javascript:location.href='member.php'">登　入</button>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include '_footer.php'; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
