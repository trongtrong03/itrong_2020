<!DOCTYPE html>
<html class="member">
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
        <?php include "_h_logon.php"; ?>
        <!-- Main -->
        <main class="container-wrap">
            <section class="layout-wrap">
                <div class="layout-trail">
                    <span><a href="index.php">首頁</a></span>
                    <span><a href="member.php">會員中心</a></span>
                    <span>問答記錄</span>
                </div>
                <div class="layout-main">
                    <div class="member-wrap">
                        <div class="member-main">
                            <div class="member-container">
                                <aside class="member-menu">
                                    <button class="member-menu-btn">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <nav>
                                        <a href="member.php">更新個人訊息</a>
                                        <a href="mem_pw.php">更改密碼</a>
                                        <a href="mem_trade.php">交易查詢</a>
                                        <a href="mem_address.php">收件地址管理</a>
                                        <a href="mem_faq.php" class="active">問答記錄</a>
                                        <a href="mem_link.php">連線記錄</a>
                                    </nav>
                                </aside>
                                <div class="member-content">
                                    <h1><span>問答記錄</span></h1>
                                    <div class="member-faq-wrap">
                                        <ul>
                                            <li>
                                                <h2 class="faq-title">
                                                    <i class="fas fa-arrow-right"></i>
                                                    <span>訂單目前配送進度到哪?</span>
                                                </h2>
                                                <div class="faq-content">
                                                    <p>【超商取貨付款】<br>商品預計為出貨隔日配達指定門市，如為偏遠地區，實際到店日須請您依照收到的簡訊、MAIL或會員中心通知為主。</p>
                                                </div>
                                            </li>
                                            <!-- example start -->
                                            <li>
                                                <h2 class="faq-title">
                                                    <i class="fas fa-arrow-right"></i>
                                                    <span>為什麼商品已送達超商，卻都沒有收到取件通知?</span>
                                                </h2>
                                                <div class="faq-content">
                                                    <p>內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</p>
                                                </div>
                                            </li>
                                            <li>
                                                <h2 class="faq-title">
                                                    <i class="fas fa-arrow-right"></i>
                                                    <span>我急需商品，如何加速出貨時間?</span>
                                                </h2>
                                                <div class="faq-content">
                                                    <p>內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</p>
                                                </div>
                                            </li>
                                            <!-- example end -->
                                        </ul>
                                    </div>
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
    <script>
        $(".faq-title").on("click", function(e){
            if($(this).parent().has(".faq-content")) {
                e.preventDefault();
            }
            if(!$(this).hasClass("active")) {
                $(".faq-content").slideUp();
                $(".faq-title").removeClass("active");
                $(this).next(".faq-content").slideDown();
                $(this).addClass("active");
            }
            else if($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next(".faq-content").slideUp();
            }
        });
    </script>
</body>
</html>
