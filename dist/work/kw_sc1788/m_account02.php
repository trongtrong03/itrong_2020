<!DOCTYPE html>
<html class="is-login member">
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
        <?php include "_header_member.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <div class="container-main">
                <div class="member-wrap">
                    <div class="member-main">
                        <button class="member-btn"><i class="fas fa-chevron-down"></i></button>
                        <aside class="member-aside">
                            <hgroup>
                                <span>會員中心</span>
                                <span>Member Center</span>
                            </hgroup>
                            <ul class="member-nav">
                                <li>
                                    <h2 class="m-wallet"><span>遊戲點數</span></h2>
                                    <div class="sub">
                                        <a href="m_finance_change.php">點數查詢</a>
                                        <a href="m_promotion_apply.php">優惠兌換</a>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="m-money"><span>遊戲帳務</span></h2>
                                    <div class="sub">
                                        <a href="m_finance01.php">點數儲值</a>
                                        <a href="m_finance02.php">點數交換</a>
                                        <a href="m_finance03.php">點數提款</a>
                                        <a href="m_finance04.php">綁定帳戶</a>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="m-history"><span>歷史資料</span></h2>
                                    <div class="sub">
                                        <a href="m_record01.php">查詢記錄</a>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="m-account active"><span>用戶中心</span></h2>
                                    <div class="sub" style="display: block;">
                                        <a href="m_account.php">個人資訊</a>
                                        <a href="m_account02.php" class="active">更換密碼</a>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="m-mail"><span>站內信箱(1)</span></h2>
                                    <div class="sub">
                                        <a href="m_mail01.php">全部郵件</a>
                                        <a href="m_mail02.php">未讀郵件</a>
                                        <a href="m_mail03.php">已讀郵件</a>
                                    </div>
                                </li>
                            </ul>
                            <button class="btn-close"></button>
                        </aside>
                        <div class="member-content">
                            <h1 class="member-head"><span>我的帳戶-更換密碼</span></h1>
                            <div class="member-center">
                                <div class="acc-content">
                                    <div class="acc-form">
                                        <br>
                                        <div class="acc-group">
                                            <form action="">
                                                <div class="member-center-input">
                                                    <div>
                                                        <span>登陆密码</span>
                                                        <input type="text" placeholder="请输入您当前的登陆密码">
                                                    </div>
                                                    <div>
                                                        <span>新的登陆密码</span>
                                                        <input type="text" placeholder="请输入您新的登陆密码">
                                                    </div>
                                                    <div>
                                                        <span>确认登陆密码</span>
                                                        <input type="text" placeholder="请再次输入新的登陆密码">
                                                    </div>
                                                </div>
                                                <div class="member-center-btn">
                                                    <button class="is-submit" type="submit">提交</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="acc-group">
                                            <form action="">
                                                <div class="member-center-input">
                                                    <div>
                                                        <span>兑换密码</span>
                                                        <input type="text" placeholder="请输入您当前的兑换密码">
                                                    </div>
                                                    <div>
                                                        <span>新的兑换密码</span>
                                                        <input type="text" placeholder="请输入您新的兑换密码">
                                                    </div>
                                                    <div>
                                                        <span>确认兑换密码</span>
                                                        <input type="text" placeholder="请再次输入新的兑换密码">
                                                    </div>
                                                </div>
                                                <div class="member-center-btn">
                                                    <button class="is-submit" type="submit">提交</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/member.js"></script>
</body>
</html>
