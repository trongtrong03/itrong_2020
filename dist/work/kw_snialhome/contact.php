<!DOCTYPE html>
<html class="contact">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>蝸牛居家</title>
    <link href="image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include '_header.php'; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="container-main">
                <div class="contact-content">
                    <hgroup class="title-wrap">
                        <h1>聯絡我們</h1>
                    </hgroup>
                    <div class="contact-form">
                        <div class="contact-input">
                            <h2>姓名</h2>
                            <input type="text" placeholder="姓名">
                        </div>
                        <div class="contact-input">
                            <h2>聯絡電話</h2>
                            <input type="text" placeholder="聯絡電話">
                        </div>
                        <div class="contact-input">
                            <h2>電子郵件</h2>
                            <input type="text" placeholder="abc@gmail.com">
                        </div>
                        <div class="contact-input">
                            <h2>問題類型</h2>
                            <select>
                                <option>購物相關</option>
                                <option>類型B</option>
                                <option>類型C</option>
                            </select>
                        </div>
                        <div class="contact-input">
                            <h2>問題描述</h2>
                            <textarea placeholder="問題描述"></textarea>
                        </div>
                        <button class="contact-submit">送　出</button>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include '_footer.php'; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
