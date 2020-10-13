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
                                        <a href="m_finance03.php">點數提款</a>
                                        <a href="m_finance04.php" class="active">綁定帳戶</a>
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
                            <h1 class="member-head"><span>綁定帳戶</span></h1>
                            <div class="member-center">
                                <div class="fi-content">
                                    <div class="fi-form">
                                        <h2>绑定银行帐户资料范例</h2>
                                        <div class="fi-example">
                                            <p>编号：○○○○</p>
                                            <p>银行名称：○○银行</p>
                                            <p>银行户名：○○○</p>
                                            <p>开户网点：○○○○○○支行</p>
                                            <p>省/银行帐号：○○○○○○○○○○○○○○○</p>
                                        </div>
                                        <div class="member-table">
                                            <h2>已綁定的銀行卡</h2>
                                            <div class="table">
                                                <table>
                                                    <tr>
                                                        <th>编号</th>
                                                        <th>银行名称</th>
                                                        <th>开户网点</th>
                                                        <th>银行卡号</th>
                                                        <th>开户姓名</th>
                                                        <th>状态</th>
                                                        <th>操作</th>
                                                    </tr>
                                                    <tr>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                        <td>N/A</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="12" class="null">并无绑定银行卡</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <form action="">
                                                <div class="member-center-input">
                                                    <p><br>银行卡资料(请输入您要绑定的银行卡信息：一旦绑定，所有提款将自动汇至此银行卡)</p>
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
                                                        <span>银行户名</span>
                                                        <input type="text" value="金城" style="cursor: not-allowed;" readonly>
                                                    </div>
                                                    <div>
                                                        <span>开户网点</span>
                                                        <input type="text" placeholder="XX省XX市XX分行XX支行XX分理处XX营运厅">
                                                    </div>
                                                    <div>
                                                        <span>银行帐号</span>
                                                        <input type="text">
                                                    </div>
                                                    <div>
                                                        <span>确认银行帐号</span>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <p>注意事项：<br>银行卡绑定主要用于会员兑换使用，一个会员最多可绑定五张银行卡。 为了您的兑换能处理派发，请准确填写办理银行卡时的开户信息。 除工行外跨行汇款，须详细填写开户网点，否责将无法办理。 如果您需要任何协助，请随时联系我们的客服人员，您的个人资料将被保密。</p>
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
