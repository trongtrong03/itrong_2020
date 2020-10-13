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
                <div class="sign-content regist">
                    <hgroup class="title-wrap">
                        <h1>會員註冊</h1>
                    </hgroup>
                    <div class="sign-form">
                        <div class="sign-input">
                            <h2>姓名</h2>
                            <input type="text" placeholder="請輸入您的真實姓名">
                        </div>
                        <div class="sign-input">
                            <h2>手機</h2>
                            <input type="text" placeholder="請輸入您的手機號碼">
                        </div>
                        <div class="sign-input pw">
                            <h2>密碼</h2>
                            <input type="text" placeholder="請輸入您的密碼">
                            <input type="text" placeholder="請再次輸入您的密碼">
                        </div>
                        <div class="sign-input">
                            <h2>信箱</h2>
                            <input type="text" placeholder="請輸入您的電子信箱">
                        </div>
                        <button class="sign-submit">立即加入</button>
                    </div>
                </div>
            </section>
            <div class="sign-popup-wrap">
                <div class="sign-popup-content">
                    <hgroup>
                        <h2>會員註冊成功</h2>
                        <p>謝謝您的註冊</p>
                    </hgroup>
                </div>
                <div class="sign-popup-link removeTextNodes">
                    <a href="index.php" class="home">回首頁</a>
                    <a href="login.php" class="login">登入</a>
                </div>
                <button class="sign-popup-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="sign-popup-overlay"></div>
        </main>
        <!-- Footer -->
        <?php include '_footer.php'; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $(".sign-submit").click(function (){
                $('.sign-popup-wrap').addClass('active');
                $('.sign-popup-overlay').addClass('active');
                $('html, body').addClass('no-scroll');
            });

            $(".sign-popup-close").click(function (){
                $('.sign-popup-wrap').removeClass('active');
                $('html, body').removeClass('no-scroll');
                $('.sign-popup-overlay').removeClass('active');
            });

            $(".sign-popup-overlay").click(function (){
                $(this).removeClass('active');
                $('.sign-popup-wrap').removeClass('active');
                $('html, body').removeClass('no-scroll');
            });
        });
    </script>
</body>
</html>
