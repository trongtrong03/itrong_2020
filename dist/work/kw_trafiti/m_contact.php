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
                        <li>聯絡塔台</li>
                    </ul>
                </div>
                <!-- member -->
                <div class="member-wrap">
                    <div class="member-main">
                        <div class="member-link">
                            <a href="m_order.php">訂單中心</a>
                            <a href="m_data.php">個人中心</a>
                            <a href="m_contact.php" class="active">聯絡塔台</a>
                        </div>
                        <div class="m-contact-wrap">
                            <div class="m-contact-main">
                                <form action="">
                                    <div class="m-input">
                                        <div>
                                            <input type="text" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="m-input name">
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
                                        <div>
                                            <label for="i1">Phone</label>
                                            <span>
                                                <input id="i1" type="text">
                                            </span>
                                            <span>
                                                <input type="text">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-input">
                                        <div>
                                            <input type="text" placeholder="Order number">
                                        </div>
                                    </div>
                                    <div class="m-input">
                                        <div>
                                            <input type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="m-input">
                                        <div>
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="m-submit">
                                        <button type="reset">重新填寫</button>
                                        <button>確定送出</button>
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
</body>
</html>
