<!DOCTYPE html>
<html class="payment">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>昱洋企業社</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <article id="wrap">
        <!-- Header -->
        <?php include "_header.php"; ?>
        <!-- Main -->
        <main class="main-wrap">
            <div class="title-wrap">
                <h2>付款資訊</h2>
            </div>
            <section class="banner-wrap"></section>
            <div class="payment-wrap">
                <div class="payment-center">
                    <div class="payment-content">
                        <div class="payment-info">
                            <div class="payment-row is-number">
                                <h2>訂單編號</h2>
                                <span>1585125842</span>
                            </div>
                            <div class="payment-row is-price">
                                <h2>付款金額</h2>
                                <span>1000</span>
                            </div>
                            <div class="payment-row is-account">
                                <h2>轉入帳號</h2>
                                <span>013國泰世華銀行-12568121248436904</span>
                            </div>
                        </div>
                        <button class="payment-print" onclick="window.print()">列　　印</button>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>