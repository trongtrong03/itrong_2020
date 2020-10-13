<!DOCTYPE html>
<html class="regist">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>神棋Online</title>
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
            <div class="container-main">
                <div class="register-wrap">
                    <hgroup>
                        <h2>歡迎註冊 神棋ONLINE</h2>
                        <h3>(請詳細填寫以下表格，帶<b>*</b>項目為必填項目)</h3>
                    </hgroup>
                    <div class="register-form">
                        <span>註冊帳戶</span>
                        <form action="">
                            <div class="register-input is-require">
                                <label for="userName">用户姓名</label>
                                <input id="userName" type="text">
                                <p class="is-warning">
                                    <span>用户名不能为空！(4位以上英文字母以及数字的组合)</span>
                                </p>
                            </div>
                            <div class="register-input is-require">
                                <label for="userAcc">用戶帳號</label>
                                <input id="userAcc" type="text">
                                <p>
                                    <span>請輸入4-10各字符，可輸入英文字母以及數字的組合</span>
                                    <button class="check-btn">檢查帳號</button>
                                </p>
                            </div>
                            <div class="register-input is-require">
                                <label for="userPW">用户密碼</label>
                                <input id="userPW" type="password">
                                <p>
                                    <span>密碼長度為6-16個字符，以及必須含有字母和數字的結合</span>
                                </p>
                            </div>
                            <div class="register-input is-require">
                                <label for="userPW2">確認密碼</label>
                                <input id="userPW2" type="password">
                                <p>
                                    <span>請再次輸入您的用戶密碼</span>
                                </p>
                            </div>
                            <div class="register-input is-require">
                                <label for="pointSwitch">點數交換</label>
                                <input id="pointSwitch" type="text">
                                <p>
                                    <span>請輸入4碼數字的兌換密碼</span>
                                </p>
                            </div>
                            <div class="register-btn">
                                <button class="is-reset">重填</button>
                                <button class="is-confirm">送出</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include "_footer.php"; ?>
        </main>
        <!-- Bottom bar -->
        <?php include "_bottom.php"; ?>
        <!-- Float bar -->
        <?php include "_float.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
