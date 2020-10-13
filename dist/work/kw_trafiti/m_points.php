<!DOCTYPE html>
<html class="member is-login">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Trafiti</title>
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
            <!-- content -->
            <section class="container-main">
                <!-- breadcrumb trail -->
                <div class="trail-wrap">
                    <ul class="removeTextNodes">
                        <li>
                            <i class="fas fa-home"></i>
                            <a href="index.php">Home</a>
                        </li>
                        <li><a href="m_data.php">會員帳戶</a></li>
                        <li>個人中心</li>
                    </ul>
                </div>
                <!-- member -->
                <div class="member-wrap">
                    <div class="member-main">
                        <div class="member-link">
                            <a href="m_order.php">訂單中心</a>
                            <a href="m_data.php" class="active">個人中心</a>
                            <a href="m_contact.php">聯絡塔台</a>
                        </div>
                        <div class="m-point-wrap">
                            <button class="m-data-btn"><i class="fas fa-bars"></i></button>
                            <div class="m-data-aside">
                                <a href="m_data.php">更新個人訊息<i class="fas fa-chevron-right"></i></a>
                                <a href="#0">更改密碼<i class="fas fa-chevron-right"></i></a>
                                <a href="m_receive.php">收件地址管理<i class="fas fa-chevron-right"></i></a>
                                <a href="m_points.php" class="active">點數查詢<i class="fas fa-chevron-right"></i></a>
                                <button class="btn-close"></button>
                            </div>
                            <div class="m-point-main">
                                <h2>優惠點數查詢</h2>
                                <div class="m-point-flex">
                                    <div>
                                        <h3>年度紅利</h3>
                                        <span>2019</span>
                                    </div>
                                    <div>
                                        <h3>可用點數</h3>
                                        <span>217</span>
                                    </div>
                                </div>
                                <div class="m-point-text">
                                    <hgroup>
                                        <h3>加入會員優惠</h3>
                                        <p>1. 逢會員生日月份, 可享消費金額的七折優惠 "</p>
                                        <p>2. 凡會員實際消費達100元美金（在抵掉點數之後） 可享免運費"</p>
                                        <p>3. 凡會員在第一次消費之後的三個月（60天）  再回購商品 可自動將點數變為雙倍 ．若超過60 天 則維持原點數 </p>
                                    </hgroup>
                                    <hgroup>
                                        <h3>會員產生點數方法</h3>
                                        <p>會員權益 花費每10 美元 ＝one point , one point 可抵一美元 不可抵用運費 美好的消費經驗 如果此次客人買了58 美金 另加運費9.9美金 可以即有五點 （五美金）可抵扣他可以選擇當次抵扣 58-5 =53+9.9 (total payment) 或是 留住點數 在三個月之內回購 可以將點數變兩倍（10點 ）10 美金</p>
                                    </hgroup>
                                    <hgroup>
                                        <h3>會員現金點數設定 </h3>
                                        <p>1.會員每次實際消費達100 美金， 可享有 八五折優惠碼於下次消費使用（ 有效期限3個月） </p>
                                        <p>2.會員自第一次登入起六個月內在官網購物，可享不限金額八五折優惠一次</p>
                                    </hgroup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Login -->
        <?php include "_login.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $(".m-data-btn").click(function() {
                $(".m-data-aside").addClass("active");
            });
        });
    </script>
</body>
</html>
