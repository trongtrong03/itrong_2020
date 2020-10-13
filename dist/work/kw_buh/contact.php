<!DOCTYPE html>
<html class="contact">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>BUH</title>
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
            <section class="banner-wrap"></section>
            <?php include "_tool.php"; ?>
            <section class="layout-wrap">
                <div class="layout-main">
                    <div class="contact-main">
                        <div class="contact-info-wrap">
                            <div class="contact-info-main">
                                <hgroup>
                                    <p>
                                        <span>No.3, Ln. 8, Zhonghu Rd., Dali Dist., </span>
                                        <span>Taichung City 41267, Taiwan</span>
                                    </p>
                                    <p>TEL: +886-4-2496-3225</p>
                                    <p>FAX: +886-4-2496-3901</p>
                                    <p>sales@builduphardware.com</p>
                                    <p><a href="www.builduphardware.com" target="_blank">www.builduphardware.com</a><br>
                                        <a href="http://stainlesssteeltube.en.taiwantrade.com" target="_blank">http://stainlesssteeltube.en.taiwantrade.com</a><br>
                                        VAT Number 53067232
                                    </p>
                                    <p>
                                        <em>Hours of Operation</em>
                                        <span>Monday to Friday</span>
                                        <span>9:00am – 5:30pm</span>
                                    </p>
                                    <p style="line-height: 28px;"><em>We are located in the middle of Taiwan; you could take HSR to our company from Taipei airport, it takes about 40 minutes to arrival Taichung City.</em></p>
                                </hgroup>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d910.5977183636776!2d120.69435747299748!3d24.08774602454739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d8eca1a88fd%3A0x52223d60d37c0c81!2sBUILD+UP+HARDWARE+CO.%2C+LTD.!5e0!3m2!1sen!2stw!4v1556173913549!5m2!1sen!2stw" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="contact-form-wrap">
                            <div class="contact-form-main">
                                <div class="f-contact-input">
                                    <input type="text" id="name" name="name">
                                    <label for="name">Name</label>
                                </div>
                                <div class="f-contact-input">
                                    <input type="text" id="company" name="company">
                                    <label for="company">Compamy</label>
                                </div>
                                <div class="f-contact-input">
                                    <input type="text" id="subject" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                                <div class="f-contact-input">
                                    <input type="text" id="mail" name="mail">
                                    <label for="mail">E-mail</label>
                                </div>
                                <div class="f-contact-input">
                                    <input type="text" id="tel" name="tel">
                                    <label for="tel">Telephone</label>
                                </div>
                                <div class="f-contact-input">
                                    <textarea id="msg" name="msg"></textarea>
                                    <label for="msg">Message</label>
                                </div>
                            </div>
                            <div class="contact-form-tool">
                                <hgroup>
                                    <p><input type="checkbox"><span>Send Copy To Self</span></p>
                                    <div class="upload">
                                        <label for="fileUpload" class="custom-file-upload">Attach A File</label>
                                        <input id="fileUpload" type="file"/>
                                    </div>
                                </hgroup>
                                <button>SEND MESSAGE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Float -->
        <?php include "_float.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
