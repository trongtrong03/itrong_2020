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
                                        <a href="m_finance02.php" class="active">點數交換</a>
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
                            <h1 class="member-head"><span>點數交換</span></h1>
                            <div class="member-center">
                                <div class="fc-content">
                                    <div class="fc-refresh">
                                        <button><i class="fas fa-sync-alt"></i>刷新内容</button>
                                    </div>
                                    <div class="fc-list">
                                        <ul>
                                            <li class="active">
                                                <span>遊戲點數</span><span>50,000</span>
                                            </li>
                                            <li>
                                                <span>圖奕娛樂</span><span>25,000</span>
                                            </li>
                                            <li>
                                                <span>SA GAMING</span><span>15,000</span>
                                            </li>
                                            <li>
                                                <span>KA GAMING</span><span>10.00</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="fc-form">
                                        <p>點數轉換：進行各家遊戲需自中心錢包移轉L幣點數至各家遊戲錢包。</p>
                                        <form action="">
                                            <div class="member-center-input">
                                                <div>
                                                    <span>源自帳戶</span>
                                                    <select>
                                                        <option>主點數</option>
                                                        <option>項目二</option>
                                                        <option>項目三</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <span>目標帳戶</span>
                                                    <select>
                                                        <option>主點數</option>
                                                        <option>項目二</option>
                                                        <option>項目三</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <span>轉點點數</span>
                                                    <input type="text" placeholder="請輸入1至1,000.000間任意整數點數">
                                                </div>
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
