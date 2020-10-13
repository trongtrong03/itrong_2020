<!DOCTYPE html>
<html class="brochure">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>BUH</title>
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
            <section class="banner-wrap"></section>
            <?php include "_tool.php"; ?>
            <section class="layout-wrap">
                <div class="layout-main">
                    <div class="trail-wrap">
                        <ul class="removeTextNodes">
                            <li><a href="index.php">Home</a></li>
                            <li>Brochure</li>
                        </ul>
                    </div>
                    <button class="sub-btn"><i class="fa fa-ellipsis-h"></i></button>
                    <div class="brochure-main">
                        <div class="brochure-aside sub-aside">
                            <button class="sub-close"></button>
                            <div class="sub-menu">
                                <div class="brochure-group">
                                    <div class="brochure-head">Stainless Steel Product</div>
                                    <div class="brochure-list">
                                        <span class="brochure-title active">Stainless Steel Ornamental Tube Products</span>
                                        <div class="brochure-content" style="display: block;">
                                            <ul>
                                                <li class="active"><a href="brochure.php">Round Tube</a></li>
                                                <li><a href="brochure.php">Square Tube</a></li>
                                                <li><a href="brochure.php">Rectangular Tube</a></li>
                                                <li><a href="brochure.php">Oval Tube</a></li>
                                                <li><a href="brochure.php">Hexagon Tube</a></li>
                                                <li><a href="brochure.php">Custom Shape</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="brochure-list">
                                        <span class="brochure-title">Stainless Steel Pipe Products</span>
                                        <div class="brochure-content">
                                            <ul>
                                                <li><a href="brochure.php">Name A</a></li>
                                                <li><a href="brochure.php">Name B</a></li>
                                                <li><a href="brochure.php">Name C</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="brochure-list">
                                        <span class="brochure-title">Stainless Steel Flat Products</span>
                                        <div class="brochure-content">
                                            <ul>
                                                <li><a href="brochure.php">Name A</a></li>
                                                <li><a href="brochure.php">Name B</a></li>
                                                <li><a href="brochure.php">Name C</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="brochure-list">
                                        <span class="brochure-title">Stainless Steel Solid Bar Products Stainless Steel Solid Bar Products</span>
                                        <div class="brochure-content">
                                            <ul>
                                                <li><a href="brochure.php">Name A Name A Name A Name A Name A Name A Name A Name A Name A</a></li>
                                                <li><a href="brochure.php">Name B</a></li>
                                                <li><a href="brochure.php">Name C</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- example start -->
                                <div class="brochure-group">
                                    <div class="brochure-head">Steel Products</div>
                                    <div class="brochure-list">
                                        <span class="brochure-title">Stainless Steel Ornamental Tube Products</span>
                                        <div class="brochure-content">
                                            <ul>
                                                <li><a href="brochure.php">Round Tube</a></li>
                                                <li><a href="brochure.php">Square Tube</a></li>
                                                <li><a href="brochure.php">Rectangular Tube</a></li>
                                                <li><a href="brochure.php">Oval Tube</a></li>
                                                <li><a href="brochure.php">Hexagon Tube</a></li>
                                                <li><a href="brochure.php">Custom Shape</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="brochure-list">
                                        <span class="brochure-title">Stainless Steel Pipe Products</span>
                                        <div class="brochure-content">
                                            <ul>
                                                <li><a href="brochure.php">Name A</a></li>
                                                <li><a href="brochure.php">Name B</a></li>
                                                <li><a href="brochure.php">Name C</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- example end -->
                            </div>
                        </div>
                        <div class="brochure-text">
                            <div class="brochure-editor">
                                <img src="image/example/bro01.jpg">
                                <br><br>
                                <p style="font-size: 35px; color: #016f91;">Round Tube</p>
                                <p style="font-size: 20px;">For full details on available lengths, sizes and technical specifications for all of our stainless steel products, download our catalogue.Alternately, if you have a specific interest, download the portion of catalogue you require using the links below. Details of which stainless steel products are in which category are listed.Be sure to download our full product catalogue for all the technical specifications. You can also contact us to discuss any requirements you may have.</p>
                            </div>
                            <div class="btn-download">
                                <a href="#0" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <?php include "_footer.php"; ?>
        <!-- Float -->
        <?php include "_float.php"; ?>
    </article>
    <!-- JS -->
    <script src="js/script.js"></script>
    <script>
        $(".brochure-title").on("click", function(e){
            if($(this).parent().has(".brochure-content")) {
                e.preventDefault();
            }
            if(!$(this).hasClass("active")) {
                $(".brochure-content").slideUp();
                $(".brochure-title").removeClass("active");
                $(this).next(".brochure-content").slideDown();
                $(this).addClass("active");
            }
            else if($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this).next(".brochure-content").slideUp();
            }
        });
    </script>
</body>
</html>
