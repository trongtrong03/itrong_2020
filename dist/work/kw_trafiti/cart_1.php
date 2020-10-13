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
                                <li class="active"><b>My Luggage</b></li>
                                <li><b>Payment</b></li>
                                <li><b>Review & Submit</b></li>
                            </ul>
                        </div>
                        <div class="cart-null">
                            <i class="fas fa-shopping-bag"></i>
                            <p>你的購物車是空的</p>
                            <a href="index.php">返回首頁</a>
                        </div>
                        <div class="cart-form">
                            <div class="cart-list">
                                <div class="cart-head">
                                    <div class="img">品項</div>
                                    <div class="info">商品詳細資訊</div>
                                    <div class="price">單價</div>
                                    <div class="qty">數量</div>
                                    <div class="amount">總金額</div>
                                    <div class="del"></div>
                                </div>
                                <div class="cart-item">
                                    <div class="img">
                                        <figure style="background-image: url('image/example/img04.jpg');"></figure>
                                    </div>
                                    <div class="info">
                                        <h2>乳油木保濕凝霜</h2>
                                        <h3>編號:000125785<br>商品規格：15ml</h3>
                                        <p>母親節全站單品9折，部分組合恕不再折扣</p>
                                    </div>
                                    <div class="price">NT$1,300</div>
                                    <div class="qty">
                                        <div class="removeTextNodes">
                                            <button class="btn-down">-</button>
                                            <input type="number" min="1" step="1" value="1">
                                            <button class="btn-up">+</button>
                                        </div>
                                    </div>
                                    <div class="amount">NT$1,300</div>
                                    <div class="del">
                                        <button class="cart-btn-del"></button>
                                    </div>
                                </div>
                                <!-- example start -->
                                <div class="cart-item">
                                    <div class="img">
                                        <figure style="background-image: url('image/example/img04.jpg');"></figure>
                                    </div>
                                    <div class="info">
                                        <h2>乳油木保濕凝霜</h2>
                                        <h3>編號:000125785<br>商品規格：15ml</h3>
                                        <p>母親節全站單品9折，部分組合恕不再折扣</p>
                                    </div>
                                    <div class="price">NT$1,300</div>
                                    <div class="qty">
                                        <div class="removeTextNodes">
                                            <button class="btn-down">-</button>
                                            <input type="number" min="1" step="1" value="1">
                                            <button class="btn-up">+</button>
                                        </div>
                                    </div>
                                    <div class="amount">NT$1,300</div>
                                    <div class="del">
                                        <button class="cart-btn-del"></button>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="img">
                                        <figure style="background-image: url('image/example/img04.jpg');"></figure>
                                    </div>
                                    <div class="info">
                                        <h2>乳油木保濕凝霜</h2>
                                        <h3>編號:000125785<br>商品規格：15ml</h3>
                                        <p>母親節全站單品9折，部分組合恕不再折扣</p>
                                    </div>
                                    <div class="price">NT$1,300</div>
                                    <div class="qty">
                                        <div class="removeTextNodes">
                                            <button class="btn-down">-</button>
                                            <input type="number" min="1" step="1" value="1">
                                            <button class="btn-up">+</button>
                                        </div>
                                    </div>
                                    <div class="amount">NT$1,300</div>
                                    <div class="del">
                                        <button class="cart-btn-del"></button>
                                    </div>
                                </div>
                                <!-- example end -->
                            </div>
                            <div class="cart-count">
                                <div>
                                    <span>總金額：</span>
                                    <span>$5,200</span>
                                </div>
                            </div>
                            <div class="cart-btn removeTextNodes">
                                <button class="btn-shopping" onclick="javascript:location.href='index.php'">繼續購物</button>
                                <button class="btn-checkout" onclick="javascript:location.href='cart_2.php'">前往結帳</button>
                            </div>
                        </div>
                        <!-- 最近瀏覽商品 -->
                        <div class="cart-itemview">
                            <h2>最近瀏覽商品</h2>
                            <div class="items-list">
                                <ul>
                                    <li>
                                        <a href="lvxing_view.php">
                                            <figure style="background-image: url('image/example/img09.jpg')"></figure>
                                            <hgroup>
                                                <h2>Wash  - face cleanser</h2>
                                                <h3>we know that, in addition to daily sunscreen, washing your face...</h3>
                                                <h4>NT$890</h4>
                                            </hgroup>
                                        </a>
                                        <div class="items-btn">
                                            <button class="btn-cart">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                            <button class="btn-wish">
                                                <i class="far fa-heart"></i>
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <!-- example start -->
                                    <li>
                                        <a href="lvxing_view.php">
                                            <figure style="background-image: url('image/example/img10.jpg')"></figure>
                                            <hgroup>
                                                <h2>Wash  - face cleanserWash  - face cleanserWash  - face cleanserWash  - face cleanser</h2>
                                                <h3>we know that, in addition to daily sunscreen, washing your face...</h3>
                                                <h4>NT$1,890</h4>
                                            </hgroup>
                                        </a>
                                        <div class="items-btn">
                                            <button class="btn-cart">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                            <button class="btn-wish">
                                                <i class="far fa-heart"></i>
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="lvxing_view.php">
                                            <figure style="background-image: url('image/example/img11.jpg')"></figure>
                                            <hgroup>
                                                <h2>Wash  - face cleanser</h2>
                                                <h3>we know that, in addition to daily sunscreen, washing your face...</h3>
                                                <h4>NT$890</h4>
                                            </hgroup>
                                        </a>
                                        <div class="items-btn">
                                            <button class="btn-cart">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                            <button class="btn-wish">
                                                <i class="far fa-heart"></i>
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="lvxing_view.php">
                                            <figure style="background-image: url('image/example/img12.jpg')"></figure>
                                            <hgroup>
                                                <h2>Wash  - face cleanser</h2>
                                                <h3>we know that, in addition to daily sunscreen, washing your face...</h3>
                                                <h4>NT$890</h4>
                                            </hgroup>
                                        </a>
                                        <div class="items-btn">
                                            <button class="btn-cart">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                            <button class="btn-wish">
                                                <i class="far fa-heart"></i>
                                                <i class="fas fa-heart"></i>
                                            </button>
                                        </div>
                                    </li>
                                    <!-- example end -->
                                </ul>
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
    <script>
        // quantity
        $('.qty').each(function() {
            var spinner = $(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.btn-up'),
            btnDown = spinner.find('.btn-down'),
            min = input.attr('min'),
            max = input.attr('max');

            btnUp.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
        });

        // del
        $(".cart-btn-del").click(function () {
            $(this).parents(".cart-item").remove();
            var num = $(".cart-item").length;
            if (num == 0) {
                $(".cart-form").hide();
                $(".cart-null").addClass("active");
            }
            else {
                $(".cart-form").show();
                $(".cart-null").removeClass("active");
            }
        });
    </script>
</body>
</html>
