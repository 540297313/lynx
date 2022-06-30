<?php $current_file_path = dirname(__FILE__); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description"
          content="Website voor een nep project over de Lynx in de Oder Delta, inhoud is niet betrouwbaar.">
    <meta name="author" content="HAS Hogeschool">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--    <link rel="icon" href="/lynx/img/" type="image/png" sizes="16x16">-->
    <script src="https://kit.fontawesome.com/e505cd4c6f.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/lynx/css/style.css">

    <!-- Interactieve kaart -->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"-->
<!--          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
          integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
          crossorigin=""/>

    <title>MCA - Lynx in de Oder Delta</title>
</head>

<body class="scroller">

<!-- Back to top button-->
<button onclick="topFunction()" id="myBtn" title="Terug naar boven">
    <i class="fa fa-chevron-up"></i>
</button>

<!--HEADER-->
<header id="home-header">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-none fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#page-top"><i class="fas fa-home"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-project">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-delta">Oder Delta</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-lynx">De Lynx</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-stakeholders">Stakeholders</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-result">Resultaten</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-conclusie">Conclusie</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nav-bronnen">Bronnen</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row" id="page-top">
        <div class="col-md-12 text-center">
            <div class="spacer"></div> <!---SPACER--->
            <h2 style="color: white;">De <i>Lynx lynx,</i> links van de Oder Delta</h2>
            <br><br>
            <h3 style="color: white;">Juli 2022</h3>
            <br>
            <h3 style="color: white;">Auteurs:</h3>
            <h4 style="color: white;">
                <i>Coen Hijmans, Tomer Peled, David Pellikaan, Thijs van der Poel, Ivar van Rijt</i>
            </h4>
            <div class="spacer"></div> <!---SPACER--->
            <a class="intro-link" href="#intro"><i class="fas fa-chevron-down"></i></a>
        </div>
    </div>

</header>

<!-- CONTENT -->
<main>

    <!-- INTRO -->
    <div class="home-info" id="nav-project">
        <div class="spacer"></div> <!---SPACER--->

        <div class="row justify-content-right">
            <div class="col-xs-1 col-lg-8">
            </div>
            <div class="col-xs-1 col-lg-3">
                <h2>Introductie</h2>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div>

        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h3>De Projectgroep</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-0">
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="spacer"></div> <!---SPACER--->
                <div class="row page-section intro-div">
                    <h3>HAS Hogeschool</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-0">
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="small-spacer"></div> <!---SPACER--->
                <div class="row page-section intro-div">
                    <h3>De klant</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div><!--row-->
        <div class="spacer"></div> <!---SPACER--->
    </div>

    <!-- DOEL - PARALAX -->
    <div class="row col-12 doel-paralax">
        <div class="col-xs-1 col-lg-2">
        </div>
        <div class="col-lg-6 col-sm-10 justify-content-left">

            <div class="spacer"></div> <!---SPACER--->

            <div class="doel-div">
                <h3>Het Doel</h3>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi
                    ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <div class="spacer"></div> <!---SPACER--->

        </div>
        <div class="col-xs-1 col-lg-4">
        </div>
    </div>

    <!-- ODER DELTA -->
    <div class="oder-delta" id="nav-delta">
        <div class="spacer"></div> <!---SPACER--->

        <div class="row justify-content-center">
            <div class="col-xs-8 col-lg-4 home-info-content" id="intro">
                <h2>Oder Delta</h2>
                <div class="small-spacer"></div> <!---SPACER--->

                <!-- ACHTERGROND -->
                <div class="row page-section intro-div">
                    <h3>Achtergrond</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                    <br><br>
                    <h4>Hoofdstukkie</h4>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-xs-8 col-lg-7" id="intro">
                <div class="spacer"></div> <!---SPACER--->
                <div style="margin-top: 1em"></div> <!---SPACER--->
                <div class="row page-section">
                    <img src="img/oder-border-map.jpg" class="img-fluid">
                </div>
            </div>
        </div><!--row-->
        <div class="spacer"></div> <!---SPACER--->

        <!-- DE DELTA -->
        <div class="row justify-content-center">
            <div class="col-xs-8 col-lg-7">
                <div class="row page-section">
                    <?php
                    include $current_file_path . DIRECTORY_SEPARATOR . 'static' . DIRECTORY_SEPARATOR . 'mini-gallery.php';
                    ?>
                </div>
            </div>
            <div class="col-xs-8 col-lg-4 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h3>De Delta</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi
                        ut aliquip ex ea commodo consequat.</p>
                    <br><br>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit
                        esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div><!--row-->
        <div class="spacer"></div> <!---SPACER--->

    </div>

    <!-- OVER DE LYNX - PARALAX -->
    <div class="row col-12 doel-paralax" id="nav-lynx">
        <div class="col-xs-1 col-lg-7">
        </div>
        <div class="col-lg-4 col-sm-10 justify-content-left">
            <div class="doel-div">
                <div class="spacer"></div> <!---SPACER--->
                <h3>Over de Lynx</h3>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi
                    ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="spacer"></div> <!---SPACER--->
                <div class="col-xs-1 col-lg-1">
                </div>
            </div>
        </div>

    </div>

    <!-- HET HABITAT -->
    <div class="row justify-content-center">
        <div class="col-xs-1 col-lg-1">
        </div>
        <div class="col-xs-8 col-lg-5">
            <div class="spacer"></div> <!---SPACER--->

            <h2>Het Habitat</h2>
            <div class="small-spacer"></div> <!---SPACER--->

            <div class="row page-section">
                <img src="img/oder-vector-map/vector_oderdelta_omtrek.svg"
                     alt="SVG Kaart van Oder Delta landgebruikstypes"/>
            </div>
        </div>
        <div class="col-xs-8 col-lg-5 home-info-content" id="intro">
            <div class="spacer"></div> <!---SPACER--->
            <div class="small-spacer"></div> <!---SPACER--->
            <div class="row page-section intro-div">

                <div class="habitat-tekstvak" id="habitat-stad">
                    <h4><i class="fas fa-city habitat-icon"></i>Bewoning</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
                <div class="habitat-tekstvak" id="habitat-bos">
                    <h4><i class="fas fa-tree habitat-icon"></i>Bossen</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
                <div class="habitat-tekstvak" id="habitat-water">
                    <h4><i class="fas fa-umbrella-beach habitat-icon"></i>Water</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
                <div class="habitat-tekstvak" id="habitat-land">
                    <h4><i class="fas fa-tractor habitat-icon"></i>Platteland</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>

            </div>
        </div>
        <div class="col-xs-1 col-lg-1">
        </div>
    </div><!--row-->
    <div class="spacer"></div> <!---SPACER--->


    <!-- STAKEHOLDERS -->
    <div class="home-info" id="nav-stakeholders">
        <div class="spacer"></div> <!---SPACER--->

        <div class="row justify-content-center">
            <div class="col-xs-1 col-lg-7">
            </div>
            <div class="col-xs-1 col-lg-3">
                <h2>Stakeholders</h2>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div>

        <div class="small-spacer"></div> <!---SPACER--->

        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-5">
                <div class="row page-section stakeholder-div" id="stakeholder-1">
                    <h3>Stakeholder 1</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5">
                <div class="row page-section stakeholder-div" id="stakeholder-2">
                    <h3>Stakeholder 2</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div><!--row-->

        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-5">
                <div class="row page-section stakeholder-div" id="stakeholder-3">
                    <h3>Stakeholder 3</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5">
                <div class="row page-section stakeholder-div" id="stakeholder-4">
                    <h3>Stakeholder 4</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div><!--row-->
        <div class="spacer"></div> <!---SPACER--->
    </div> <!-- Stakeholders -->

    <!-- INTERACTIEVE KAART  -->
        <div class="row" id="nav-result">
        <div class="col-lg-3 kaartknoppen">
            <!--Content-->
            <h2>Resultaten</h2>
            <!--Tekst-->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae dui dolor. Etiam faucibus tortor eget sapien congue efficitur eget.</p>
            <!--Buttons-->
            <div id="buttonNatuur" class="mapButton" onclick="changemapNatuur()">
                <h5 class="mapButtonTitle">Habitat</h5>
                <p class="mapButtonText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <div id="buttonOmwonenden" class="mapButton" onclick="changemapOmwonenden()">
                <h5 class="mapButtonTitle">Omwonenden</h5>
                <p class="mapButtonText">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div id="buttonToerisme" class="mapButton" onclick="changemapToerisme()">
                <h5 class="mapButtonTitle">Toerisme</h5>
                <p class="mapButtonText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div id="buttonLandbouw" class="mapButton" onclick="changemapLandbouw()">
                <h5 class="mapButtonTitle">Landbouw</h5>
                <p class="mapButtonText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="seperator"></div>
            <div id="button1111" class="mapButton" onclick="changemap1111()">
                <h5 class="mapButtonTitle">Optimum1111</h5>
                <p class="mapButtonText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div id="button5311" class="mapButton" onclick="changemap5311()">
                <h5 class="mapButtonTitle">Optimum5311</h5>
                <p class="mapButtonText">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            </ul>
        </div>

        <div class="col-9 padding3R">
            <!--Kaart-->
            <div id="kaart" class=""></div>
        </div>
    </div>

    <!-- RESULTATEN -->
    <div class="row justify-content-center resultaten-dia">
        <div class="col-xs-8 col-lg-4">
            <div class="spacer"></div> <!---SPACER--->
            <div class="row page-section result-div">
                <h3>Verdere resultaten</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi
                    ut aliquip ex ea commodo consequat.</p>
                <br><br>
                <h4>Kopje</h4>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h4>Kopje</h4>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="spacer"></div> <!---SPACER--->
        </div>
        <div class="col-xs-0 col-lg-2"></div>
        <div class="col-xs-8 col-lg-5">
            <div class="big-spacer"></div> <!---SPACER--->
            <h2>Grafieken <br>enzo</h2>
        </div>
    </div><!--row-->

    <!-- CONCLUSIE - PARALAX -->
    <div class="row col-12 conclusie-paralax" id="nav-conclusie">
        <div class="col-xs-1 col-lg-3">
        </div>
        <div class="col-lg-6 col-sm-10 justify-content-center">

            <div class="spacer"></div> <!---SPACER--->

            <div class="doel-div">
                <h3>Conclusie</h3>
                <br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi
                    ut aliquip ex ea commodo consequat.
                    <br><br>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <h4>Kopje ofzo</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi
                    ut aliquip ex ea commodo consequat.

                </p>
            </div>

            <div class="spacer"></div> <!---SPACER--->

        </div>
        <div class="col-xs-1 col-lg-3">
        </div>
    </div>

    <!-- BRONNEN -->
    <div class="home-info" id="nav-bronnen">
        <div class="spacer"></div> <!---SPACER--->

        <div class="row justify-content-center">
            <div class="col-xs-1 col-lg-5">
            </div>
            <div class="col-xs-1 col-lg-2">
                <h2>Bronnen</h2>
            </div>
            <div class="col-xs-1 col-lg-5">
            </div>
        </div>

        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div><!--row-->

        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div><!--row-->

        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-3 home-info-content" id="intro">
                <div class="row page-section intro-div">
                    <h4>Bron</h4>
                    <p> Duis aute irure dolor in reprehenderit <br> in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-1">
            </div>
        </div><!--row-->
        <div class="spacer"></div> <!---SPACER--->
    </div>

    <!-- SPACER -->
    <div class="d-md-none" style="height:50px;"></div>

</main> <!-- That's all, folks! -->


<!-- FOOTER -->
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

<!-- Kaart Script -->
<script src="kaart/map.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>-->
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</body>
</html>