<!DOCTYPE html>
<html class="member">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>巷仔內</title>
    <link href="image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include "_h_logon.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="layout-wrap">
                <div class="layout-trail">
                    <span><a href="index.php">首頁</a></span>
                    <span><a href="member.php">會員中心</a></span>
                    <span>收件地址管理</span>
                </div>
                <div class="layout-main">
                    <div class="member-wrap">
                        <div class="member-main">
                            <div class="member-container">
                                <aside class="member-menu">
                                    <button class="member-menu-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <nav>
                                        <a href="member.php">更新個人訊息</a>
                                        <a href="mem_pw.php">更改密碼</a>
                                        <a href="mem_trade.php">交易查詢</a>
                                        <a href="mem_address.php" class="active">收件地址管理</a>
                                        <a href="mem_faq.php">問答記錄</a>
                                        <a href="mem_link.php">連線記錄</a>
                                    </nav>
                                </aside>
                                <div class="member-content">
                                    <h1><span>收件地址管理</span></h1>
                                    <div class="member-address-wrap">
                                        <h2>地址管理</h2>
                                    </div>
                                    <ul class="member-address-list">
                                        <li>
                                            <h3>王小美</h3>
                                            <p>0921-234567</p>
                                            <p>台灣,407,台中市,西屯區,弘孝路100號</p>
                                        </li>
                                        <!-- example start -->
                                        <!-- example end -->
                                        <li>
                                            <button class="add-adress"><span>新添加地址</span></button>
                                            <div class="address-form">
                                                <form action="">
                                                    <div class="input">
                                                        <input type="text" placeholder="真實姓名">
                                                    </div>
                                                    <div class="input">
                                                        <select>
                                                            <option>城市/地區</option>
                                                        </select>
                                                        <select>
                                                            <option>區/縣</option>
                                                        </select>
                                                    </div>
                                                    <span class="note">請您務必填寫正確的配送及聯絡資訊，一經確認不可修改。</span>
                                                    <div class="input">
                                                        <input type="text" placeholder="路名或街道地址，門牌號">
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" placeholder="郵遞區號">
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" placeholder="聯繫電話">
                                                    </div>
                                                    <span class="note">我們重視您的隱私，<a href="statement.php" target="_blank">了解更多</a></span>
                                                    <div class="btn">
                                                        <button class="btn-cancel">取消</button>
                                                        <button class="btn-submit">確認</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <span class="address-overlay"></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_float.php"; ?>
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $(".add-adress").click(function() {
                $("html, body").addClass("no-scroll");
                $(".address-form").addClass("active");
                $(".address-overlay").addClass("active");
            });
            $(".address-overlay").click(function() {
                $("html, body").removeClass("no-scroll");
                $(".address-form").removeClass("active");
                $(".address-overlay").removeClass("active");
            });
        });
    </script>
</body>
</html>
