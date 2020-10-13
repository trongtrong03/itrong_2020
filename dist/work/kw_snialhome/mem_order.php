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
                                <h2>訂單查詢</h2>
                                <div class="tabs-group">
                                    <ul class="removeTextNodes">
                                        <li>
                                            <a href="member.php">會員中心</a>
                                        </li>
                                        <li class="active">
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
                            <div class="tabs-content">
                                <section class="content order">
                                    <div class="member-order-search-top">
                                        <h2>訂單詳細記錄</h2>
                                        <a href="#0">
                                            <i class="fas fa-undo-alt"></i>
                                            <b>返回列表</b>
                                        </a>
                                    </div>
                                    <div class="member-order-info clearfix">
                                        <section class="member-order-status">
                                            <h2 class="member-order-title">訂單狀態</h2>
                                            <div class="member-order-form">
                                                <ul>
                                                    <li>
                                                        <h2>訂單編號</h2>
                                                        <p>A123456789</p>
                                                    </li>
                                                    <li>
                                                        <h2>訂單日期</h2>
                                                        <p>2018-12-05  14:28:14</p>
                                                    </li>
                                                    <li>
                                                        <h2>訂單狀態</h2>
                                                        <p>
                                                            <b style="color: #b01111;">訂單成立</b>
                                                            <a href="#0" class="btn-cancel">取消訂單</a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>付款方式</h2>
                                                        <p>貨到付款</p>
                                                    </li>
                                                    <li>
                                                        <h2>配送方式</h2>
                                                        <p>宅配</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                        <section class="member-order-receiver">
                                            <h2 class="member-order-title">收件人資訊</h2>
                                            <div class="member-order-form">
                                                <ul>
                                                    <li>
                                                        <h2>收件姓名</h2>
                                                        <p>瀉腹安</p>
                                                    </li>
                                                    <li>
                                                        <h2>手機號碼</h2>
                                                        <p>09221234567</p>
                                                    </li>
                                                    <li>
                                                        <h2>電子信箱</h2>
                                                        <p>jerry@kiwigo</p>
                                                    </li>
                                                    <li>
                                                        <h2>收貨地址</h2>
                                                        <p>台中市大里區屠城路217號</p>
                                                    </li>
                                                    <li>
                                                        <h2>備　　註</h2>
                                                        <p>無</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="member-order-list">
                                        <h2 class="member-order-title">訂購商品</h2>
                                        <div class="member-order-wrap">
                                            <div class="member-order-itemtitle removeTextNodes">
                                                <span>產品</span>
                                                <span>單價</span>
                                                <span>折扣價</span>
                                                <span>數量</span>
                                                <span>小計</span>
                                            </div>
                                            <ul class="member-order-itemlist">
                                                <li class="removeTextNodes">
                                                    <span class="removeTextNodes">
                                                        <img src="image/example/p01.jpg">
                                                        <a href="products_view.php" target="_blank">高級冷凝膠氣泡工學枕</a>
                                                    </span>
                                                    <span>NT$1,080</span>
                                                    <span>NT$80</span>
                                                    <span>10</span>
                                                    <span>NT$<i>8,000</i></span>
                                                </li>
                                                <li class="removeTextNodes">
                                                    <span class="removeTextNodes">
                                                        <img src="image/example/p02.jpg">
                                                        <a href="products_view.php" target="_blank">高級冷凝膠氣泡工學枕</a>
                                                    </span>
                                                    <span>NT$1,080</span>
                                                    <span>NT$80</span>
                                                    <span>10</span>
                                                    <span>NT$<i>8,000</i></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="count-wrap">
                                            <div class="count-main">
                                                <div class="count">
                                                    <div class="removeTextNodes">
                                                        <h3 class="title clearfix">
                                                            <i>共 <strong>1</strong> 件商品</i>
                                                            <i>商品金額</i>
                                                        </h3>
                                                        <div class="price">$16,000</div>
                                                    </div>
                                                    <div class="removeTextNodes">
                                                        <h3 class="title">運費小計</h3>
                                                        <div class="price">$0</div>
                                                    </div>
                                                </div>
                                                <div class="total removeTextNodes">
                                                    <h3 class="title">總計</h3>
                                                    <div class="price">NT$<i>16,000</i></div>
                                                </div>
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
