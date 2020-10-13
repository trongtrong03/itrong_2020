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
                        <div class="m-data-wrap">
                            <button class="m-data-btn"><i class="fas fa-bars"></i></button>
                            <div class="m-data-aside">
                                <a href="m_data.php" class="active">更新個人訊息<i class="fas fa-chevron-right"></i></a>
                                <a href="#0">更改密碼<i class="fas fa-chevron-right"></i></a>
                                <a href="m_receive.php">收件地址管理<i class="fas fa-chevron-right"></i></a>
                                <a href="m_points.php">點數查詢<i class="fas fa-chevron-right"></i></a>
                                <button class="btn-close"></button>
                            </div>
                            <div class="m-data-form">
                                <form action="">
                                    <div class="m-input name">
                                        <h2>姓　名</h2>
                                        <div>
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Middle Name">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="m-input phone">
                                        <h2>聯繫電話</h2>
                                        <div>
                                            <span>
                                                <input type="text">
                                            </span>
                                            <span>
                                                <input type="text">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-input address">
                                        <h2>住址</h2>
                                        <div>
                                            <select>
                                                <option>國家</option>
                                                <option>XXX</option>
                                                <option>XXX</option>
                                                <option>XXX</option>
                                            </select>
                                        </div>
                                        <div>
                                            <input id="addr" type="text">
                                            <label for="addr">城市</label>
                                        </div>
                                        <div>
                                            <input type="text" placeholder="郵遞區號">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="請輸入詳細地址">
                                        </div>
                                    </div>
                                    <div class="m-input">
                                        <h2>電子郵件</h2>
                                        <div>
                                            <input type="text" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="m-input born">
                                        <h2>生日</h2>
                                        <div>
                                            <select>
                                                <option>年份</option>
                                                <option>2019</option>
                                                <option>...</option>
                                                <option>1911</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select>
                                                <option>月份</option>
                                                <option>1</option>
                                                <option>...</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select>
                                                <option>日</option>
                                                <option>1</option>
                                                <option>...</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="m-input gender">
                                        <h2>性別</h2>
                                        <div>
                                            <input type="radio" name="group" id="r1">
                                            <label for="r1">男</label>
                                            <input type="radio" name="group" id="r2">
                                            <label for="r2">女</label>
                                        </div>
                                    </div>
                                    <div class="m-submit">
                                        <button type="reset">重新填寫</button>
                                        <button>確定修改</button>
                                    </div>
                                </form>
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
