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
                        <div class="m-receive-wrap">
                            <button class="m-data-btn"><i class="fas fa-bars"></i></button>
                            <div class="m-data-aside">
                                <a href="m_data.php">更新個人訊息<i class="fas fa-chevron-right"></i></a>
                                <a href="#0">更改密碼<i class="fas fa-chevron-right"></i></a>
                                <a href="m_receive.php" class="active">收件地址管理<i class="fas fa-chevron-right"></i></a>
                                <a href="m_points.php">點數查詢<i class="fas fa-chevron-right"></i></a>
                                <button class="btn-close"></button>
                            </div>
                            <div class="m-receive-main">
                                <ul class="m-receive-list">
                                    <li>
                                        <h3>王小美</h3>
                                        <p>0921-234567</p>
                                        <p>台灣,407,台中市,西屯區,弘孝路100號</p>
                                    </li>
                                    <!-- example start -->
                                    <!-- example end -->
                                    <li>
                                        <button class="add-adress"><span>新添加地址</span></button>
                                        <div class="m-receive-form">
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
                                                <div class="input phone">
                                                    <label for="i1">聯繫電話</label>
                                                    <span>+</span>
                                                    <input type="text" id="i1">
                                                    <hr>
                                                    <input type="text">
                                                </div>
                                                <span class="note">我們重視您的隱私，<a href="#0" target="_blank">了解更多</a></span>
                                                <div class="btn">
                                                    <button class="btn-cancel">取消</button>
                                                    <button class="btn-submit">確認</button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
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
    <script>
        $(function() {
            $(".add-adress").click(function() {
                $("html, body").addClass("no-scroll");
                $(".m-receive-form").addClass("active");
                $(".overlay").addClass("active");
            });
        });
    </script>
</body>
</html>
