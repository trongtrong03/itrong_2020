<!DOCTYPE html>
<html class="help">
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
        <?php include "_header.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="layout-wrap">
                <div class="layout-banner" style="background-image: url(image/help_banner.jpg);">
                    <img src="image/help_banner.jpg">
                    <img src="image/help_banner_t.jpg">
                    <img src="image/help_banner_m.jpg">
                </div>
                <div class="layout-main">
                    <div class="help-wrap">
                        <div class="help-main">
                            <div class="help-container">
                                <div class="help-link">
                                    <a href="shipping.php">購物說明</a>
                                    <a href="statement.php">網站聲明</a>
                                    <a href="contact.php" class="active">聯絡我們</a>
                                </div>
                                <div class="contact-form">
                                    <form action="">
                                        <div class="contact-input">
                                            <input type="text" placeholder="Name">
                                        </div>
                                        <div class="contact-input">
                                            <input type="text" placeholder="E-mail">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                        <div class="contact-input">
                                            <input type="text" placeholder="Order Number">
                                        </div>
                                        <div class="contact-input">
                                            <input type="text" placeholder="Subject">
                                        </div>
                                        <div class="contact-input">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                        <button>SEND</button>
                                    </form>
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
</body>
</html>
