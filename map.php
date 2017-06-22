<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Free Bootstrap Themes by Html5xCss3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="http://www.Html5xCss3.com">

    <title>Essential | Free Bootstrap Themes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/stylesEssen.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

    <!-- jQuery and Plugin-->
    <script src="js/jquery-3.2.1.min.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="index-page">
<div class="main-header">
    <iframe class="iframe-container"
            src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d60410.520300510056!2d98.9345840764953!3d18.85788991048936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x30da3a9439134c61%3A0x9595108d845e673f!2z4Lij4LmJ4Liy4LiZ4Lit4Liy4Lir4Liy4Lij4LiI4Li14LiZ4Lii4Li54LiZ4Liy4LiZIOC5gOC4iuC4teC4ouC4h-C5g-C4q-C4oeC5iCjguITguLTguKfguKPguJbguIrguYnguLLguIfguYDguJzguLfguK3guIEpIOC4leC4s-C4muC4pSDguKjguKPguLXguKDguLnguKHguLQg4Lit4Liz4LmA4Lig4Lit4LmA4Lih4Li34Lit4LiH4LmA4LiK4Li14Lii4LiH4LmD4Lir4Lih4LmIIOC5gOC4iuC4teC4ouC4h-C5g-C4q-C4oeC5iCA1MDIwMA!3m2!1d18.7998384!2d98.98710779999999!4m5!1s0x30da3c28fa4f3c3b%3A0xbdc17a2792b8d49f!2z4Liq4Lin4LiZ4LiB4Lil4LmJ4Lin4Lii4LmE4Lih4LmJ4LmB4Lil4Liw4Lif4Liy4Lij4LmM4Lih4Lic4Li14LmA4Liq4Li34LmJ4LitIOC4leC4s-C4muC4pSDguYHguKHguYjguYHguKPguKEg4Lit4Liz4LmA4Lig4LitIOC5geC4oeC5iOC4o-C4tOC4oSDguYDguIrguLXguKLguIfguYPguKvguKHguYg!3m2!1d18.9157164!2d98.9277513!5e0!3m2!1sth!2sth!4v1498064114215"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<footer>

    <div class="wrap-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>Copyright 20xx - <a href="http://www.Html5xCss3.com" target="_blank" rel="nofollow">Bootstrap
                            Themes</a> Designed by <a href="http://www.Html5xCss3.com" target="_blank" rel="nofollow">Html5xCss3</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline social-link">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/Html5xCss3"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->

<!-- JS -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async
        defer></script>

<!-- carousel -->
<script src="owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        var b2_box = $("#owl-slide");

        b2_box.owlCarousel({
            autoPlay: false,
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            itemsMobile: [479, 1],
            pagination: false
        });

        // Custom Navigation Events 1
        $(".next-b_2-slide").click(function () {
            b2_box.trigger('owl.next');
        });
        $(".prev-b_2-slide").click(function () {
            b2_box.trigger('owl.prev');
        });

    });
</script>

</body>
</html>