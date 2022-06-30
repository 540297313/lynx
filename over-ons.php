<?php
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Hoe is La Spezia ontstaan en hoe gaan we tegenwoordig te werk? Meer hierover vind u hier.">
    <meta name="keywords" content="La Spezia, Ittaliaans, Restaurant, ijs salon">
    <meta name="author" content="La Spezia">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="tPrzUXFeOnWKv46bzJlikqXG1e8-2LBfXLvCUM6P9oY" />
    <link rel="icon" href="/lynx/img/la-spezia-logo.png" type="image/png" sizes="16x16">
    <script src="https://kit.fontawesome.com/e505cd4c6f.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/lynx/css/style.css">

    <title>La Spezia | Over Ons</title>
</head>

<body>

<!-- TO TOP BUTTON -->
<button onclick="topFunction()" id="myBtn" title="Terug naar boven">
    <i class="fa fa-chevron-up"></i>
</button>

<!--HEADER-->
<header>
    <!-- Include burger menu-->
    <?php
    $current_file_path = dirname(__FILE__);
    ?>
</header>

<!--MAIN-->
<main id="container menu-achtergrond">

    <!-- GALERIJ -->
    <div class="row home-info">
        <div class="col-xs-12 col-lg-5"></div>
        <div class="col-xs-12 col-lg-7 home-info-content">
            <div class="row page-section">
                <h3>Galerij</h3>
                <?php
                include $current_file_path . DIRECTORY_SEPARATOR . 'static' . DIRECTORY_SEPARATOR . 'mini-gallery.php';
                ?>
            </div>
        </div>
    </div>

    <!-- TIMELINE -->
    <div class="row home-info">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 home-info-content">
            <?php
            include $current_file_path . DIRECTORY_SEPARATOR . 'static' . DIRECTORY_SEPARATOR . 'timeline.php';
            ?>
        </div>
        <div class="col-lg-2"></div>
    </div>
</main>

<!--FOOTER-->
<?php
include $current_file_path . DIRECTORY_SEPARATOR . 'static' . DIRECTORY_SEPARATOR . 'footer.php';
?>
<script src="static/js/function.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- OVERLAY & HAMBURGER ICON SCRIPT -->
<script>
    var nav = false

    function toggleNav() {
        nav ? closeNav() : openNav();
    }

    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
        nav = true;
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        nav = false;
    }

    $(document).ready(function () {
        $('#hamburger-icon').click(function () {
            $(this).toggleClass('open');
        });
    });
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71772435-24"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-71772435-24');
</script>

</body>
</html>