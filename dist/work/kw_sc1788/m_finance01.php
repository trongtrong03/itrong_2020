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
                                        <a href="m_finance01.php" class="active">點數儲值</a>
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
                            <h1 class="member-head"><span>點數儲值</span></h1>
                            <div class="member-center">
                                <div class="fi-content">
                                    <div class="fi-accordin">
                                        <div class="accordin-item">
                                            <div class="title">
                                                <figure style="background-image: url('image/pay2.jpg')"><img src="image/pay2.jpg"></figure>
                                                <hgroup>
                                                    <h2>网银存款</h2>
                                                    <h3>充值完成，請至充值通知填寫表單以供審核。</h3>
                                                    <button>详细内容</button>
                                                </hgroup>
                                            </div>
                                            <div class="content">
                                                <hr>
                                                <ul>
                                                    <li>账  号：484744141587445</li>
                                                    <li>银行名称：中国邮政银行</li>
                                                    <li>银行户名：黃天霸</li>
                                                    <li>开户网点：台中工商大樓</li>
                                                </ul>
                                                <figure>
                                                    <img src="image/example/qr.png" alt="">
                                                </figure>
                                                <p class="note">充值完成，請至充值通知填寫表單以供審核。</p>
                                            </div>
                                        </div>
                                        <div class="accordin-item">
                                            <div class="title">
                                                <figure style="background-image: url('image/pay3.jpg')"><img src="image/pay3.jpg"></figure>
                                                <hgroup>
                                                    <h2>在线支付</h2>
                                                    <h3>本充值方式将自动储值点数，无须填写充值通知。</h3>
                                                    <button>详细内容</button>
                                                </hgroup>
                                            </div>
                                            <div class="content">
                                                <hr>
                                                <form action="">
                                                    <div class="member-center-input">
                                                        <div>
                                                            <span>剩馀点数</span>
                                                            <strong>0.00</strong>
                                                        </div>
                                                        <div>
                                                            <span>银行名称</span>
                                                            <select>
                                                                <option>招商银行(借记卡)</option>
                                                                <option>工商银行(借记卡)</option>
                                                                <option>建设银行(借记卡)</option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <span>充值点数</span>
                                                            <input type="text" placeholder="最低充值点数为L币100">
                                                        </div>
                                                        <div>
                                                            <span>验证码</span>
                                                            <div class="vercode">
                                                                <input type="text" placeholder="请输入验证码">
                                                                <span><p>7549</p></span>
                                                            </div>
                                                        </div>
                                                        <p class="note">温馨提示：<br>待银行付款完成，尚未返回支付成功页面时，请勿关闭页面避免打款失败。如有任何问题，请和我们客服联系，客服服务是7天24小时全年无休为您服务，谢谢。本充值方式将自动储值点数，无须填写充值通知。</p>
                                                    </div>

                                                    <div class="member-center-btn">
                                                        <button class="is-reset" type="reset">重填</button>
                                                        <button class="is-submit" type="submit">送出</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="accordin-item">
                                            <div class="title">
                                                <figure style="background-image: url('image/pay8_2.jpg')"><img src="image/pay8_2.jpg"></figure>
                                                <hgroup>
                                                    <h2>二维码存款</h2>
                                                    <h3>充值完成，請至充值通知填寫表單以供審核。</h3>
                                                    <button>详细内容</button>
                                                </hgroup>
                                            </div>
                                            <div class="content">
                                                <hr>
                                                <figure>
                                                    <img src="image/example/finance01.png" alt="">
                                                </figure>
                                                <p class="note">充值完成，請至充值通知填寫表單以供審核。</p>
                                            </div>
                                        </div>
                                        <div class="accordin-item">
                                            <div class="title">
                                                <figure style="background-image: url('image/pay4.jpg')"><img src="image/pay4.jpg"></figure>
                                                <hgroup>
                                                    <h2>微信支付</h2>
                                                    <h3>填写充值订单信息，并扫描二维码完成付款。</h3>
                                                    <button>详细内容</button>
                                                </hgroup>
                                            </div>
                                            <div class="content">
                                                <hr>
                                                <form action="">
                                                    <div class="member-center-input">
                                                        <div>
                                                            <span>充值点数</span>
                                                            <input type="text" placeholder="最低充值点数为L币100">
                                                        </div>
                                                        <div>
                                                            <span>充值姓名</span>
                                                            <input type="text" placeholder="支付真实姓名">
                                                        </div>
                                                    </div>
                                                    <div class="member-center-btn">
                                                        <button class="is-reset" type="reset">重填</button>
                                                        <button class="is-submit" type="submit">送出</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="accordin-item">
                                            <div class="title">
                                                <figure style="background-image: url('image/pay1.jpg')"><img src="image/pay1.jpg"></figure>
                                                <hgroup>
                                                    <h2>支付宝</h2>
                                                    <h3>填写充值订单信息，并扫描二维码完成付款。</h3>
                                                    <button>详细内容</button>
                                                </hgroup>
                                            </div>
                                            <div class="content">
                                                <hr>
                                                <form action="">
                                                    <div class="member-center-input">
                                                        <div>
                                                            <span>充值点数</span>
                                                            <input type="text" placeholder="最低充值点数为L币100">
                                                        </div>
                                                        <div>
                                                            <span>充值姓名</span>
                                                            <input type="text" placeholder="支付真实姓名">
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
    <script>
        $(".fi-accordin .title").on("click", function(e){
            if($(this).parent().has(".content")) {
                e.preventDefault();
            }
            if(!$(this).hasClass("active")) {
                $(".content").slideUp();
                $(".fi-accordin .title").removeClass("active");
                $(this).next(".content").slideDown();
                $(this).addClass("active");
            }
            else if($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next(".content").slideUp();
            }
        });
    </script>
</body>
</html>
