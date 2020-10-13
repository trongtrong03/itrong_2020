<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>BBIN TEMPLATE</title>
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
</head>
<body>
    <div class="livedemo-wrap livedemo-rwd">
        <header class="livedemo-header">
            <div class="livedemo-top">
                <h1>A16040102</h1>
                <div class="livedemo-top-close">
                    <a href="javascript:window.close();"></a>
                </div>
                <div class="livedemo-top-qrcode">
                    <button>QRcode</button>
                    <figure>
                        <figcaption>使用行动装置浏览</figcaption>
                        <img src="image/not-use/qrcode.png">
                    </figure>
                </div>
            </div>
            <div class="livedemo-top-bar">
                <ul id="breakpoint-wrap" class="fullscreen">
                    <li class="breakpoint-full active">
                        <span><i>Full Screen</i><i>Full Screen</i></span>
                    </li>
                    <li class="breakpoint-1024 incolor">
                        <span><i>1024px</i><i>1024px</i></span>
                    </li>
                    <li class="breakpoint-768 incolor">
                        <span><i>768px</i><i>768px</i></span>
                    </li>
                    <li class="breakpoint-480 incolor">
                        <span><i>480px</i><i>480px</i></span>
                    </li>
                    <li class="breakpoint-320 incolor">
                        <span><i>320px</i><i>320px</i></span>
                    </li>
                </ul>
                <div id="breakpoint-icon" class="breakpoint-icon-full"></div>
                <div id="breakpoint-tips" class="breakpoint-tips">請點選瀏覽尺寸</div>
            </div>
        </header>
        <main class="livedemo-main">
            <div id="livedemo-iframe" class="iframe-full">
                <!-- 嵌入 START -->
                <iframe src="_template/RA01/index.php"></iframe>
                <!-- 嵌入 END -->
            </div>
        </main>
    </div>
    <script src="js/livedemo.js"></script>
    
</body>
</html>
