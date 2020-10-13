<!DOCTYPE html>
<html class="cart is-login">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Trafiti</title>
    <link href="image/favico.ico" rel="shortcut icon">
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
            <!-- content -->
            <section class="container-main">
                <!-- cart -->
                <div class="cart-wrap">
                    <div class="cart-main">
                        <div class="cart-step">
                            <ul class="removeTextNodes">
                                <li><b>My Luggage</b></li>
                                <li class="active"><b>Payment</b></li>
                                <li><b>Review & Submit</b></li>
                            </ul>
                        </div>
                        <div class="cart-form">
                            <div class="cart-payment-wrap">
                                <div class="cart-payment-form">
                                    <div class="form-receive">
                                        <h2 class="title">送貨地址</h2>
                                        <div>
                                            <div class="input">
                                                <span>姓名</span>
                                                <input type="text">
                                            </div>
                                            <div class="input">
                                                <span>地址</span>
                                                <input type="text">
                                            </div>
                                            <div class="input">
                                                <span>電話</span>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-itemlist">
                                        <h2 class="title">配送選項</h2>
                                        <ul>
                                            <li>
                                                <div class="img">
                                                    <figure style="background-image: url('image/example/img09.jpg')"></figure>
                                                </div>
                                                <div class="info">
                                                    <h2>乳油木保濕凝霜</h2>
                                                    <span>商品規格：15ml</span>
                                                    <span>數量：1</span>
                                                </div>
                                                <div class="amount">NT$1,300</div>
                                            </li>
                                            <!-- example start -->
                                            <li>
                                                <div class="img">
                                                    <figure style="background-image: url('image/example/img09.jpg')"></figure>
                                                </div>
                                                <div class="info">
                                                    <h2>乳油木保濕凝霜</h2>
                                                    <span>商品規格：15ml</span>
                                                    <span>數量：1</span>
                                                </div>
                                                <div class="amount">NT$1,300</div>
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <figure style="background-image: url('image/example/img09.jpg')"></figure>
                                                </div>
                                                <div class="info">
                                                    <h2>乳油木保濕凝霜</h2>
                                                    <span>商品規格：15ml</span>
                                                    <span>數量：1</span>
                                                </div>
                                                <div class="amount">NT$1,300</div>
                                            </li>
                                            <li>
                                                <div class="img">
                                                    <figure style="background-image: url('image/example/img09.jpg')"></figure>
                                                </div>
                                                <div class="info">
                                                    <h2>乳油木保濕凝霜</h2>
                                                    <span>商品規格：15ml</span>
                                                    <span>數量：1</span>
                                                </div>
                                                <div class="amount">NT$1,300</div>
                                            </li>
                                            <!-- example end -->
                                        </ul>
                                    </div>
                                    <div class="form-dellvery">
                                        <h2 class="title">運送方式</h2>
                                        <div class="option">
                                            <input type="radio" name="group" id="r1" checked>
                                            <label for="r1">
                                                <span></span>
                                                <p class="dellvery">Standard Dellvery</p>
                                                <p class="freight">FREE</p>
                                                <p class="days">Delivered within 6-10 working days</p>
                                            </label>
                                        </div>
                                        <div class="option">
                                            <input type="radio" name="group" id="r2">
                                            <label for="r2">
                                                <span></span>
                                                <p class="dellvery">Tracked Delivery</p>
                                                <p class="freight">NT $60</p>
                                                <p class="days">Delivered within 6-10 working days</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-payment-info">
                                    <div class="info">
                                        <h2>訂單摘要</h2>
                                        <ul>
                                            <li>
                                                <span>結帳金額：</span>
                                                <b>$5,200</b>
                                            </li>
                                            <li class="discount">
                                                <span>商品折扣：</span>
                                                <b>- $180</b>
                                            </li>
                                            <li class="offer">
                                                <span>優惠代碼：</span>
                                                <b>$0</b>
                                            </li>
                                            <li class="offer">
                                                <span>點數折抵：</span>
                                                <b>$0</b>
                                            </li>
                                            <li>
                                                <span>運費金額：</span>
                                                <b>$0</b>
                                            </li>
                                        </ul>
                                        <h3>
                                            <span>結帳金額：</span>
                                            <b>$5,020</b>
                                        </h3>
                                    </div>
                                    <div class="input">
                                        <input type="text" placeholder="請輸入折扣碼">
                                        <button>添加</button>
                                    </div>
                                    <div class="points">
                                        <input type="checkbox" name="c1" id="c1">
                                        <label for="c1"><span>點數折抵</span> <b>(點數餘額：30點 )</b></label>
                                    </div>
                                    <div class="payment">
                                        <button class="btn-back" onclick="javascript:location.href='cart_1.php'">返回修改</button>
                                        <button class="btn-paypal" onclick="javascript:location.href='cart_3.php'"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Login -->
        <?php include "_login.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>
