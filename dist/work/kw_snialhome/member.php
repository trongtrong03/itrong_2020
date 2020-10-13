<!DOCTYPE html>
<html class="member logon">
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
                <div class="member-content">
                    <div class="member-tabs">
                        <div class="tabs-main clearfix">
                            <div class="tabs-title">
                                <h2>會員中心</h2>
                                <div class="tabs-group">
                                    <ul class="removeTextNodes">
                                        <li class="active">
                                            <a href="member.php">會員中心</a>
                                        </li>
                                        <li>
                                            <a href="mem_order.php">訂單查詢</a>
                                        </li>
                                        <li>
                                            <a href="#0">會員基本資料</a>
                                        </li>
                                        <li>
                                            <a href="#0">修改密碼</a>
                                        </li>
                                        <li>
                                            <a href="#0">會員隱私權 / 權益說明</a>
                                        </li>
                                    </ul>
                                    <button class="tabs-close">關閉</button>
                                </div>
                            </div>
                            <div class="tabs-content active" >
                                <section class="content default">
                                    <div class="member-default-wrap">
                                        <div class="member-default-top">
                                            <p><span>Julia</span>您好，歡迎光臨</p>
                                            <hgroup>
                                                <h2>累積消費金額<span>$1280</span>元</h2>
                                                <h3>最後更新：2018/12/03</h3>
                                            </hgroup>
                                        </div>
                                        <div class="member-order-history">
                                            <h2>最近訂單記錄<span>（顯示近三個月，至多五筆）</span></h2>
                                            <div class="member-order-wrap">
                                                <div class="member-order-itemtitle removeTextNodes">
                                                    <span>訂單日期</span>
                                                    <span>訂單編號</span>
                                                    <span>訂單內容</span>
                                                    <span>付款金額</span>
                                                    <span>訂單狀態</span>
                                                </div>
                                                <ul class="member-order-itemlist">
                                                    <li class="removeTextNodes">
                                                        <span>2018-12-12</span>
                                                        <span>A123456789</span>
                                                        <span><a href="products_view.php" target="_blank">高級冷凝膠氣泡工學枕</a></span>
                                                        <span>$1,000</span>
                                                        <span><b style="color: #b01111;">訂單成立</b></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tabs-overlay"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include '_footer.php'; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $(".tabs-title h2").click(function (){
                $('.tabs-group').addClass('active');
                $('.tabs-overlay').addClass('active');
                $('html, body').addClass('no-scroll');
            });
            $(".tabs-close").click(function (){
                $('.tabs-group').removeClass('active');
                $('.tabs-overlay').removeClass('active');
                $('html, body').removeClass('no-scroll');
            });
        });
    </script>
</body>
</html>
