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
                                        <a href="m_account.php" class="active">個人資訊</a>
                                        <a href="m_account02.php">更換密碼</a>
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
                            <h1 class="member-head"><span>我的帳戶-個人資訊</span></h1>
                            <div class="member-center">
                                <div class="acc-content">
                                    <div class="acc-form">
                                        <div class="acc-userimg">
                                            <figure style="background-image: url('test.png');"></figure>
                                        </div>
                                        <form action="">
                                            <div class="member-center-input">
                                                <div>
                                                    <span><b>＊</b>帐号</span>
                                                    <input type="text" value="a9453" style="cursor: not-allowed;" readonly>
                                                    <p><b style="color: #1092de;">账号无法更改</b></p>
                                                </div>
                                                <div>
                                                    <span><b>＊</b>用户姓名</span>
                                                    <input type="text" placeholder="请输入姓名">
                                                    <p><b style="color: #fd393a;">请输入姓名</b></p>
                                                </div>
                                                <div>
                                                    <span>地址</span>
                                                    <input type="text">
                                                </div>
                                                <div>
                                                    <span><b>＊</b>邮箱</span>
                                                    <input type="text" placeholder="请输入邮件地址">
                                                    <p><b style="color: #fd393a;">请输入邮件地址</b></p>
                                                </div>
                                                <div>
                                                    <span>出生日期</span>
                                                    <div>
                                                        <input type="text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span>性别</span>
                                                    <input type="checkbox" id="c1" name="cc" checked />
                                                    <label for="c1">男</label>
                                                    <input type="checkbox" id="c2" name="cc" />
                                                    <label for="c2">女</label>
                                                </div>
                                                <div class="phone-verify">
                                                    <span><b>＊</b>联系电话</span>
                                                    <input type="text">
                                                    <button>电话验证</button>
                                                    <p><b style="color: #fd393a;">请输入联系电话</b></p>
                                                </div>
                                                <div>
                                                    <span>联系微信</span>
                                                    <input type="text" readonly>
                                                </div>
                                                <div>
                                                    <span>支付宝号</span>
                                                    <input type="text">
                                                </div>
                                                <div>
                                                    <span>联系QQ</span>
                                                    <input type="text">
                                                </div>
                                                <div>
                                                    <span>会员等级</span>
                                                    <input type="text" value="SVIP会员" disabled>
                                                </div>
                                                <div>
                                                    <span>图像上传</span>
                                                    <label class="btn btn-default choosefile">
                                                        选择档案
                                                        <input id="file" name="file" type="file" class="file_inp upl" placeholder="选择档案">
                                                    </label>
                                                </div>
                                                <p>温馨提示：如有相关问题，请联系我们的在线客服。</p>
                                            </div>
                                            <div class="member-center-btn">
                                                <button class="is-reset" type="reset">重填</button>
                                                <button class="is-submit" type="submit">送出</button>
                                            </div>
                                        </form>
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
