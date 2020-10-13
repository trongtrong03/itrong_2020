<!DOCTYPE html>
<html class="service">
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
                <img src="image/banner_service.jpg">
                <img src="image/banner_service_m.jpg">
            </section>
            <section class="inside-wrap">
                <div class="inside-main">
                    <h1>Service</h1>
                    <div class="link-wrap removeTextNodes">
                        <a href="service_1.php">常見問與答</a>
                        <a href="service_2.php">技術支援</a>
                        <a href="service_3.php" class="active">聯絡我們</a>
                    </div>
                    <div class="contact-form">
                        <div class="contact-head">
                            <p><span>感謝您瀏覽本網站，請詳細填寫以下表單。</span><span>我們收到留言將會以最快速的速度與您聯絡!</span></p>
                            <p><span>07-215-8009</span><span>0926-533-073</span></p>
                        </div>
                        <form action="">
                            <div class="contact-input">
                                <div class="input-item is-left">
                                    <label>詢問項目</label>
                                    <select>
                                        <option>option1</option>
                                        <option>option2</option>
                                        <option>option3</option>
                                    </select>
                                </div>
                                <div class="input-item">
                                    <label>E-mail</label>
                                    <input type="text">
                                </div>
                                <div class="input-item is-left">
                                    <label>訪客大名</label>
                                    <input type="text">
                                </div>
                                <div class="input-item">
                                    <label>聯絡電話</label>
                                    <input type="text">
                                </div>
                                <div class="input-item is-single">
                                    <label>內容</label>
                                    <textarea></textarea>
                                    <p>
                                        <span>以上使用者主動留下之個人資料主要使用於客戶服務方面，並不會轉使用於其他商業用途，</span>
                                        <span>此資料皆保存於閎捷客戶系統內五年，逾期後進行銷毀。</span>
                                    </p>
                                </div>
                                <div class="input-item is-single is-captcha">
                                    <label>驗證碼</label>
                                    <input type="text">
                                    <span>
                                        <img src="image/example/captcha_img.jpg">
                                    </span>
                                    <button>送出資料</button>
                                </div>
                            </div>
                        </form>
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
