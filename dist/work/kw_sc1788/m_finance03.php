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
                                    <h2 class="m-money active"><span>遊戲帳務</span></h2>
                                    <div class="sub" style="display: block;">
                                        <a href="m_finance01.php">點數儲值</a>
                                        <a href="m_finance02.php">點數交換</a>
                                        <a href="m_finance03.php" class="active">點數提款</a>
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
                                    <h2 class="m-account"><span>用戶中心</span></h2>
                                    <div class="sub">
                                        <a href="m_account.php">個人資訊</a>
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
                            <h1 class="member-head"><span>點數提款</span></h1>
                            <div class="member-center">
                                <div class="fi-content">
                                    <div class="fi-form">
                                        <p><b style="color: #bb9008;">仅限银行卡充值使用，微信、支付宝不须另外通知</b><br><br>银行转账存款-接受所有银行存款，各种银行转账，ATM存款转账，银行柜台转账和手机转账。使用此种方式，需要您首先转账至丸久娱乐城最新银行中，然后填写存款表格。通常到账时间约为10分钟内，若有任何疑问请咨询在线客服</p>
                                        <hr>
                                        <form action="">
                                            <div class="member-center-input">
                                                <div>
                                                    <span>钱包余额</span>
                                                    <strong>L币 0.00</strong>
                                                </div>
                                                <div>
                                                    <span>充值金额</span>
                                                    <input type="text" placeholder="最低充值金额为L币100.00">
                                                </div>
                                                <div>
                                                    <span>可兑换L币</span>
                                                    <input type="text">
                                                </div>
                                                <div>
                                                    <span>充值方式</span>
                                                    <select>
                                                        <option>网银存款</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <span>充值时间</span>
                                                    <div>
                                                        <input type="text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span>银行名称</span>
                                                    <select>
                                                        <option>招商银行</option>
                                                        <option>工商银行</option>
                                                        <option>建设银行</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <span>银行帐号</span>
                                                    <input type="text" placeholder="请输入银行帐号">
                                                </div>
                                                <div>
                                                    <span>汇款人姓名</span>
                                                    <input type="text">
                                                </div>
                                                <div>
                                                    <span>流水单号</span>
                                                    <input type="text" placeholder="请输入流水单号后五码">
                                                </div>
                                                <div>
                                                    <span>優惠代碼</span>
                                                    <input type="text">
                                                </div>
                                                <p>温馨提示：神棋Online会尽快为阁下办理存款到账，请使用您的本地银行账号进行转账存款。我们不接受阁下通过各种“支票”或“银行汇票”（公司或个人支票）存款。一旦您已经成功提交了存款信息，我们的团队会尽快处理您的存款，如果时间超过10分钟没有处理，请您联系我们客服，谢谢。</p>
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
