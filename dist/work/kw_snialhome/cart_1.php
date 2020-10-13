<!DOCTYPE html>
<html class="cart logon">
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
                <div class="cart-content cart-step1">
                    <div class="cart-step">
                        <ul class="removeTextNodes">
                            <li class="active">
                                <hgroup>
                                    <span>01</span>
                                    <h2>清單確認</h2>
                                </hgroup>
                            </li>
                            <li>
                                <hgroup>
                                    <span>02</span>
                                    <h2>填寫資料</h2>
                                </hgroup>
                            </li>
                            <li>
                                <hgroup>
                                    <span>03</span>
                                    <h2>付款方式</h2>
                                </hgroup>
                            </li>
                            <li>
                                <hgroup>
                                    <span>04</span>
                                    <h2>完成訂購</h2>
                                </hgroup>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-wrap">
                        <div class="cart-list">
                            <hgroup class="removeTextNodes">
                                <span>商品圖</span>
                                <span>商品名稱</span>
                                <span>單價</span>
                                <span>數量</span>
                                <span>小計</span>
                                <span>刪除</span>
                            </hgroup>
                            <ul>
                                <li class="removeTextNodes">
                                    <span>
                                        <img src="image/example/p01.jpg" onerror="this.src='image/default.jpg'">
                                    </span>
                                    <span>
                                        <a href="products_view.php" target="_blank">3D透氣乳膠枕只鼾枕(2入組) (可機洗)</a>
                                    </span>
                                    <span>NT$1,080</span>
                                    <span>
                                        <div class="input">
                                            <input type="text" value="1">
                                        </div>
                                    </span>
                                    <span>NT$1,080</span>
                                    <span>
                                        <button class="del"></button>
                                    </span>
                                </li>
                                <li class="removeTextNodes">
                                    <span>
                                        <img src="image/example/p0x.jpg" onerror="this.src='image/default.jpg'">
                                    </span>
                                    <span>
                                        <a href="products_view.php" target="_blank">商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱</a>
                                    </span>
                                    <span>NT$1,080</span>
                                    <span>
                                        <div class="input">
                                            <input type="text" value="100">
                                        </div>
                                    </span>
                                    <span>NT$1,080,000,00</span>
                                    <span>
                                        <button class="del"></button>
                                    </span>
                                </li>
                                <li class="removeTextNodes">
                                    <span>
                                        <img src="image/example/p02.jpg" onerror="this.src='image/default.jpg'">
                                    </span>
                                    <span>
                                        <a href="products_view.php" target="_blank">3D透氣乳膠枕只鼾枕(2入組) (可機洗)</a>
                                    </span>
                                    <span>NT$9,999,999,999</span>
                                    <span>
                                        <div class="input">
                                            <input type="text" value="1">
                                        </div>
                                    </span>
                                    <span>NT$9,999,999,999</span>
                                    <span>
                                        <button class="del"></button>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-count">
                            <div class="main">
                                <div class="count">
                                    <div class="removeTextNodes">
                                        <h3 class="title">
                                            <i>共1件商品</i>
                                            <i>商品金額</i>
                                        </h3>
                                        <div class="price">$1,080</div>
                                    </div>
                                    <div class="removeTextNodes">
                                        <h3 class="title">運費小計</h3>
                                        <div class="price">$200</div>
                                    </div>
                                </div>
                                <div class="total removeTextNodes">
                                    <h3 class="title">總計</h3>
                                    <div class="price">NT$1,280</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-button">
                        <button>下一步</button>
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
