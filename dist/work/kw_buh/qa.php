<!DOCTYPE html>
<html class="qa">
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
                    <div class="trail-wrap">
                        <ul class="removeTextNodes">
                            <li><a href="index.php">Home</a></li>
                            <li>Q&A</li>
                        </ul>
                    </div>
                    <div class="qa-head">Q&A</div>
                    <div class="qa-main">
                        <div class="qa-note">
                            <p>Here we give answer to any questions as complete as possible. If you find your question or answer not listed below please contact us by e-mail. We try to provide you with information as soon as possible.</p>
                        </div>
                        <div class="qa-list">
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        <p>Yes, we can offer standard sample for free, only the freight fee on buyer. <br>
                                        If our standard sample doesn’t match your demand, please send us your detailed request, <br>
                                        we can produce it according to your detailed order as soon as possible. <br>
                                        Please contact us in Email or Skype: emilylin12345, thank you!</p>
                                    </div>
                                    <div class="qa-gallery removeTextNodes">
                                        <img src="image/example/qa01.jpg">
                                        <img src="image/example/qa02.jpg">
                                        <img src="image/example/qa03.jpg">
                                    </div>
                                </div>
                            </div>
                            <!-- example start -->
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">What kind of payment method that you offer? What kind of payment method that you offer? What kind of payment method that you offer? What kind of payment method that you offer? </span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <div class="qa-item">
                                <span class="qa-title">Can I get some samples for free?</span>
                                <div class="qa-content">
                                    <div class="qa-editor">
                                        content
                                    </div>
                                    <div class="qa-gallery removeTextNodes"></div>
                                </div>
                            </div>
                            <!-- example end -->
                        </div>
                        <div class="qa-page-wrap">
                            <div class="qa-page-main removeTextNodes">
                                <a href="#0">&laquo;</a>
                                <a href="#0">2</a>
                                <a href="#0">3</a>
                                <a href="#0" class="active">4</a>
                                <a href="#0" class="disabled">&raquo;</a>
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
    <script>
        $(".qa-title").on("click", function(e){
            if($(this).parent().has(".qa-content")) {
                e.preventDefault();
            }
            if(!$(this).hasClass("active")) {
                $(".qa-content").slideUp();
                $(".qa-title").removeClass("active");
                $(this).next(".qa-content").slideDown();
                $(this).addClass("active");
            }
            else if($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next(".qa-content").slideUp();
            }
        });
    </script>
</body>
</html>
