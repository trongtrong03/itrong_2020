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
        <!-- Main -->
        <main class="container-wrap">
            <div style="height: 1500px;"></div>
        </main>
        <!-- Footer -->
        <button class="btn-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </article>
    <!-- JS -->
    <script>
        $(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 240) {
            $(".btn-top").addClass("test");
        } else {
            $(".btn-top").removeClass("test");
        }
    });
    $(".btn-top").click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
    });
});
    </script>
</body>
</html>
