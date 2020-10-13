<!DOCTYPE html>
<html class="dragontiger">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>遊戲大廳</title>
    <link href="image/favico.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <script src="js/jquery-2.2.0.min.js"></script>
</head>
<body>
    <article id="wrap">
        <div class="hall-wrap">
            <!-- logo -->
            <div class="hall-logo">
                <a href="###">
                    <img src="image/example/logo.png">
                </a>
            </div>
            <!-- 頭像 -->
            <div class="hall-photo">
                <figure>
                    <span style="background-image: url('image/example/photo.jpg')"></span>
                </figure>
                <h2>海盗船长</h2>
            </div>
            <!-- 右上 -->
            <div class="hall-right">
                <div class="hall-amount">192,841.00</div>
                <button class="btn-exit"></button>
            </div>
            <!-- Game -->
            <div class="hall-game">
                <div class="hall-slider">
                    <div>
                        <a href="DragonTiger.php">
                            <img src="image/hall/game_01.png">
                        </a>
                    </div>
                    <div>
                        <a href="FSC.php">
                            <img src="image/hall/game_02.png">
                        </a>
                    </div>
                    <div>
                        <a href="PK.php">
                            <img src="image/hall/game_03.png">
                        </a>
                    </div>
                    <div>
                        <a href="Bab.php">
                            <img src="image/hall/game_04.png">
                        </a>
                    </div>
                    <div>
                        <a href="Baccarat.php">
                            <img src="image/hall/game_05.png">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="image/hall/game_06.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 利用CSS預先載入圖片 -->
        <span class="preload-images"></span>
    </article>
    <!-- JS -->
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(document).on('ready', function() {
            $(".hall-slider").slick({
                dots: false,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 1
            });
        });
    </script>
</body>
</html>
