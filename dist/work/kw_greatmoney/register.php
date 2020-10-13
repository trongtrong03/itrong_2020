<!DOCTYPE html>
<html class="register">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>閎捷科技</title>
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
            <section class="banner-wrap">
                <img src="image/banner_register.jpg">
                <img src="image/banner_register_m.jpg">
            </section>
            <section class="inside-wrap">
                <div class="inside-main">
                    <h1>Registered</h1>
                    <h2>請選擇您是公司 / 商號註冊，或是個人註冊</h2>
                    <div class="register-wrap removeTextNodes">
                        <div class="register-item is-company">
                            <a href="r_company.php">
                                <figure style="background-image: url('image/register_img01.jpg')">
                                    <img src="image/register_img01.jpg">
                                    <span>立即註冊<i>&gt;</i></span>
                                </figure>
                            </a>
                        </div>
                        <div class="register-item is-personal">
                            <a href="r_personal.php">
                                <figure style="background-image: url('image/register_img02.jpg')">
                                    <img src="image/register_img02.jpg">
                                    <span>立即註冊<i>&gt;</i></span>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
