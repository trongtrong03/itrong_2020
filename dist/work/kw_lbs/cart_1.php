<!DOCTYPE html>
<html class="cart">
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
                <div class="layout-main">
                    <div class="cart-wrap cart_1">
                        <div class="cart-main">
                            <h1><span>購物車</span></h1>
                            <div class="cart-container">
                                <!-- 主內容 -->
                                <div class="cart-content">
                                    <div class="cart-form-step">
                                        <span class="active"><b>輸入資料</b></span>
                                        <span><b>確認訂單內容</b></span>
                                        <span><b>訂單完成</b></span>
                                    </div>
                                    <div class="cart-list">
                                        <div class="cart-item">
                                            <figure>
                                                <img src="image/example/b01.jpg">
                                            </figure>
                                            <hgroup>
                                                <h2><a href="spots_view.php">CAPUCINES MM經典手拿包</a></h2>
                                                <p>
                                                    <span class="c-color">SAND BROWN</span>
                                                    <span class="c-size">XS</span>
                                                    <span class="c-no">WD612Q</span>
                                                </p>
                                                <strong class="price">NTD 5,100</strong>
                                            </hgroup>
                                            <div class="cart-ctrl">
                                                <div class="select">
                                                    <select>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>...</option>
                                                        <option>N</option>
                                                    </select>
                                                </div>
                                                <div class="btn-del">
                                                    <button>刪除</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- example start -->
                                        <div class="cart-item">
                                            <figure>
                                                <img src="image/example/b02.jpg">
                                            </figure>
                                            <hgroup>
                                                <h2><a href="spots_view.php">CAPUCINES MM經典手拿包</a></h2>
                                                <p>
                                                    <span class="c-color">SAND BROWN</span>
                                                    <span class="c-size">XS</span>
                                                    <span class="c-no">WD612Q</span>
                                                </p>
                                                <strong class="price">NTD 8,200</strong>
                                            </hgroup>
                                            <div class="cart-ctrl">
                                                <div class="select">
                                                    <select>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>...</option>
                                                        <option>N</option>
                                                    </select>
                                                </div>
                                                <div class="btn-del">
                                                    <button>刪除</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- example end -->
                                    </div>
                                    <div class="cart-fee">
                                        <div>
                                            <div class="commodity">NTD 13,300</div>
                                            <div class="shipping">NTD 0</div>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <div>
                                            <span>NTD 13,300</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- 側欄 -->
                                <aside class="cart-side">
                                    <div class="cart-side-step">
                                        <span><b>輸入資料</b></span>
                                        <span><b>確認訂單內容</b></span>
                                        <span><b>訂單完成</b></span>
                                    </div>
                                    <div class="cart-side-area">
                                        <h2>首次購買</h2>
                                        <a href="#0">登入成為會員</a>
                                    </div>
                                    <div class="cart-side-area">
                                        <h2>已成為會員的客戶</h2>
                                        <div class="cart-side-login">
                                            <input type="text" placeholder="電子信箱">
                                            <input type="text" placeholder="密碼">
                                            <div class="checkbox">
                                                <input type="checkbox" id="c1">
                                                <label for="c1">下次自動登入</label>
                                            </div>
                                        </div>
                                        <a href="cart_1b.php">登入購買</a>
                                    </div>
                                </aside>
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
</body>
</html>
