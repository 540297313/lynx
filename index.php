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
                    <li class="nav-item"><a class="nav-link" href="#nav-habitat">Habitat</a></li>
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
            <div class="small-spacer"></div> <!---SPACER--->
            <h4 style="color: white;">Auteurs:</h4>
            <h4 style="color: white;">
                <i>Coen Hijmans, Tomer Peled, David Pellikaan, Thijs van der Poel, Ivar van Rijt</i>
            </h4>
            <div class="spacer"></div> <!---SPACER--->
            <a class="intro-link" href="#nav-project"><i class="fas fa-chevron-down"></i></a>
        </div>
    </div>

</header>

<!-- CONTENT -->
<main>

    <!-- INTRO -->
    <div class="home-info " id="nav-project">
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
            <div class="col-xs-1 col-lg-2">
            </div>
            <div class="col-xs-10 col-lg-4 home-info-content">
                <div class="row page-section intro-div">
                    <h3>De Projectgroep</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-4 home-info-content" id="intro">
                <div class="spacer"></div> <!---SPACER--->
                <div class="row page-section intro-div">
                    <h3>De klant</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi
                        ut
                        aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="col-xs-1 col-lg-2">
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
        <div class="col-xs-1 col-lg-6">
        </div>
        <div class="col-lg-5 col-sm-10 justify-content-left">
            <div class="doel-div">
                <div class="spacer"></div> <!---SPACER--->
                <h2>Over de Lynx</h2>
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

    <!-- Titel & tekst -->
    <div class="row" id="nav-habitat">
        <div class="col-xs-1 col-lg-1">
        </div>
        <div class="col-xs-8 col-lg-7">
            <div class="spacer"></div> <!---SPACER--->
            <!-- Titel -->
            <h3>Het Habitat</h3>
            <!-- Tekst -->
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
            <div class="small-spacer"></div> <!---SPACER--->
            <div class="col-xs-1 col-lg-4">
            </div>
        </div>
    </div>

    <!-- Kaart & tekstvakken -->
    <div class="row justify-content-center">
        <div class="col-xs-1 col-lg-1">
        </div>
        <!-- Kaart -->
        <div class="col-xs-8 col-lg-5">
            <div class="row page-section">
                <!-- Steden -->
                <img src="img/oder-vector-map/vector_stad.svg" class="vector_laag_stad hide_stad"/>
                <!-- Bossen -->
                <img src="img/oder-vector-map/vector_bos.svg" class="vector_laag_bos hide_bos"/>
                <!-- Water & zee -->
                <img src="img/oder-vector-map/vector_water.svg" class="vector_laag_water hide_water"/>
                <!-- Overig -->
                <img src="img/oder-vector-map/vector_overig.svg" class="vector_laag_overig hide_overig"/>
                <!-- Zwart-wit -->
                <img src="img/oder-vector-map/vector_oderdelta_bw.svg"
                     alt="SVG Kaart van Oder Delta landgebruikstypes" class="vector_laag_bw"/>
            </div>
        </div>
        <!-- Tekstvakken -->
        <div class="col-xs-8 col-lg-5">
            <div class="row page-section habitat-div">
                <button class="habitat-tekstvak" id="habitat_stad">
                    <h4><i class="fas fa-city habitat-icon"></i>Bewoning</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        <br>
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </button>
                <button class="habitat-tekstvak" id="habitat_bos">
                    <h4><i class="fas fa-tree habitat-icon"></i>Bossen</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        <br>
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </button>
                <button class="habitat-tekstvak" id="habitat_water">
                    <h4><i class="fas fa-umbrella-beach habitat-icon"></i>Water</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        <br>
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </button>
                <button class="habitat-tekstvak" id="habitat_overig">
                    <h4><i class="fas fa-tractor habitat-icon"></i>Overig</h4>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                        <br>
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </button>
                <button class="habitat-tekstvak" id="habitat_reset">
                    <h5><i class="fas fa-backward habitat-icon"></i></h5>
                </button>

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

    <!-- Kaart tekst -->
    <div class="row justify-content-center" id="nav-result">
        <div class="col-xs-10 col-lg-6">
            <div class="spacer"></div> <!---SPACER--->
            <!--Titel-->
            <h2>Resultaten</h2>
            <!--Tekst-->
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
            <div class="small-spacer"></div> <!---SPACER--->
        </div>
        <div class="col-xs-2 col-lg-5">
        </div>
    </div>

    <!-- Kaart & knoppen -->
    <div class="row justify-content-center" id="nav-result">

        <!--Buttons-->
        <div class="col-lg-3 kaartknoppen">
            <div id="buttonNatuur" class="mapButton" onclick="changemapNatuur()">
                <h6 class="mapButtonTitle">Habitat</h6>
                <br>
                <p class="mapButtonText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>
            <div id="buttonOmwonenden" class="mapButton" onclick="changemapOmwonenden()">
                <h6 class="mapButtonTitle">Omwonenden</h6>
                <br>
                <p class="mapButtonText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>
            <div id="buttonToerisme" class="mapButton" onclick="changemapToerisme()">
                <h6 class="mapButtonTitle">Toerisme</h6>
                <br>
                <p class="mapButtonText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>
            <div id="buttonLandbouw" class="mapButton" onclick="changemapLandbouw()">
                <h6 class="mapButtonTitle">Landbouw</h6>
                <br>
                <p class="mapButtonText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>
            <div class="seperator"></div>
            <div id="button1111" class="mapButton" onclick="changemap1111()">
                <h6 class="mapButtonTitle">Optimum1111</h6>
                <br>
                <p class="mapButtonText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>
            <div id="button5311" class="mapButton" onclick="changemap5311()">
                <h6 class="mapButtonTitle">Optimum5311</h6>
                <br>
                <p class="mapButtonText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>
            </ul>
        </div>

        <!-- Kaart -->
        <div class="col-8 kaart">
            <div id="kaart" class=""></div>
        </div>
    </div> <!-- Eind kaart & knoppen -->
    <div class="spacer"></div> <!---SPACER--->


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

        <!-- Titel -->
        <div class="row justify-content-center">
            <div class="col-xs-1 col-lg-5">
            </div>
            <div class="col-xs-1 col-lg-2">
                <h2>Bronnen</h2>
            </div>
            <div class="col-xs-1 col-lg-5">
            </div>
        </div>

        <!-- Bronnen rij  1 -->
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

        <!-- Bronnen rij  2 -->
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

        <!-- Bronnen rij  3 -->
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


<!-- SCRIPTS -->
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

<!-- Script voor vector kaart -->
<script>
    // Declaring the buttons
    const btn_stad = document.getElementById('habitat_stad');
    const btn_bos = document.getElementById('habitat_bos');
    const btn_water = document.getElementById('habitat_water');
    const btn_overig = document.getElementById('habitat_overig');
    const btn_reset = document.getElementById('habitat_reset');

    // Declaring the vector layers to hide
    const hide_stad = document.getElementsByClassName('hide_stad')[0];
    const hide_bos = document.getElementsByClassName('hide_bos')[0];
    const hide_water = document.getElementsByClassName('hide_water')[0];
    const hide_overig = document.getElementsByClassName('hide_overig')[0];

    // Hiding the rest when clicking STAD button
    btn_stad.addEventListener('click', () => {

        // 👇️ hides element (still takes up space on page)
        hide_stad.style.visibility = 'visible';
        hide_bos.style.visibility = 'hidden';
        hide_water.style.visibility = 'hidden';
        hide_overig.style.visibility = 'hidden';
    });

    // Hiding the rest when clicking BOS button
    btn_bos.addEventListener('click', () => {

        // 👇️ hides element (still takes up space on page)
        hide_stad.style.visibility = 'hidden';
        hide_bos.style.visibility = 'visible';
        hide_water.style.visibility = 'hidden';
        hide_overig.style.visibility = 'hidden';
    });

    // Hiding the rest when clicking WATER button
    btn_water.addEventListener('click', () => {

        // 👇️ hides element (still takes up space on page)
        hide_stad.style.visibility = 'hidden';
        hide_bos.style.visibility = 'hidden';
        hide_water.style.visibility = 'visible';
        hide_overig.style.visibility = 'hidden';
    });

    // Hiding the rest when clicking OVERIG button
    btn_overig.addEventListener('click', () => {

        // 👇️ hides element (still takes up space on page)
        hide_stad.style.visibility = 'hidden';
        hide_bos.style.visibility = 'hidden';
        hide_water.style.visibility = 'hidden';
        hide_overig.style.visibility = 'visible';
    });

    // Showing everything when clicking RESET button
    btn_reset.addEventListener('click', () => {

        // 👇️ hides element (still takes up space on page)
        hide_stad.style.visibility = 'visible';
        hide_bos.style.visibility = 'visible';
        hide_water.style.visibility = 'visible';
        hide_overig.style.visibility = 'visible';
    });
</script>

<!-- Kaart Script -->
<script src="kaart/map.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>-->
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</body>
</html>