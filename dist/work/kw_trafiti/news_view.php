<!DOCTYPE html>
<html class="news">
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
                <!-- breadcrumb trail -->
                <div class="trail-wrap">
                    <ul class="removeTextNodes">
                        <li>
                            <i class="fas fa-home"></i>
                            <a href="index.php">Home</a>
                        </li>
                        <li>What’s news</li>
                    </ul>
                </div>
                <!-- news -->
                <div class="news-wrap">
                    <div class="news-view">
                        <time class="news-view-time">
                            <span><b>25</b><b>Dec</b><b>2018</b></span>
                        </time>
                        <div class="news-view-photo">
                            <img src="image/example/new_big.jpg">
                        </div>
                        <div class="news-view-content">
                            <h2>Summer whitening series specials</h2>
                            <div class="news-view-editor">
                                <p>Peptide expert PEZRI has launched a new high-efficiency liquid essence and liquid mask, breaking through the black, opening the key to whitening, and brightening the skin instantly! Exclusive research and development of 21 peptide whitening essence, so that Amy's cockroaches...Peptide expert PEZRI has launched a new high-efficiency liquid essence and liquid mask, breaking through the black, opening the key to whitening, and brightening the skin instantly! Exclusive research and development of 21 peptide whitening essence, so that Amy's cockroaches...Peptide expert PEZRI has launched a new high-efficiency liquid essence and liquid mask, breaking through the black, opening the key to whitening, and brightening the skin instantly! Exclusive research and development of 21 peptide whitening essence, so that Amy's cockroaches...</p>
                            </div>
                            <div class="news-view-btn removeTextNodes">
                                <button class="btn-prev"></button>
                                <button class="btn-list" onclick="javascript:location.href='news.php'"></button>
                                <button class="btn-next"></button>
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
