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
                                    <h2 class="m-account"><span>用戶中心</span></h2>
                                    <div class="sub">
                                        <a href="m_account.php">個人資訊</a>
                                        <a href="m_account02.php">更換密碼</a>
                                    </div>
                                </li>
                                <li>
                                    <h2 class="m-mail active"><span>站內信箱(1)</span></h2>
                                    <div class="sub" style="display: block;">
                                        <a href="m_mail01.php" class="active">全部郵件</a>
                                        <a href="m_mail02.php">未讀郵件</a>
                                        <a href="m_mail03.php">已讀郵件</a>
                                    </div>
                                </li>
                            </ul>
                            <button class="btn-close"></button>
                        </aside>
                        <div class="member-content">
                            <h1 class="member-head"><span>全部邮件</span></h1>
                            <div class="member-center">
                                <div class="mail-content">
                                    <div class="mail-form">
                                        <div class="member-table">
                                            <div class="table">
                                                <table>
                                                    <tr>
                                                        <th>编号</th>
                                                        <th>标题</th>
                                                        <th>日期/时间</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td class="mail-detial">001</td>
                                                        <td class="mail-detial">标题标题标题标题标题标题标题标题标题标题标题</td>
                                                        <td class="mail-detial">2017-11-21 10:18:53</td>
                                                        <td>
                                                            <button class="mail-del"><i class="far fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="mail-detial">002</td>
                                                        <td class="mail-detial">标题标题标题标题标题标题标题标题标题标题标题</td>
                                                        <td class="mail-detial">2017-11-21 10:18:53</td>
                                                        <td>
                                                            <button class="mail-del"><i class="far fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="mail-detial">003</td>
                                                        <td class="mail-detial">标题标题标题标题标题标题标题标题标题标题标题</td>
                                                        <td class="mail-detial">2017-11-21 10:18:53</td>
                                                        <td>
                                                            <button class="mail-del"><i class="far fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="member-popup is-mail">
                                <button class="member-btn-close"><i class="fas fa-times-circle"></i></button>
                                <div>
                                    <div class="mail-box-wrap">
                                        <div class="mail-box-top">
                                            <h2><span>01</span>标题标题标题标题标题标题标题标题标题标题标题</h2>
                                            <h3><i class="far fa-calendar-alt"></i>2019-10-08 16:24:30 </h3>
                                        </div>
                                        <div class="mail-box-content">
                                            <p>測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試</p>
                                        </div>
                                        <button class="mail-box-close">Close</button>
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
