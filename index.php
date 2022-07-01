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
                    <p> Deze website is gemaakt door projectgroep 2. Dit product is deel van een bedachte casus. Alle
                        resultaten en conclusies zijn niet echt in opdracht van de Duitse regering.
                        <br><br>
                        Deze opdracht wordt uitgevoerd namens HAS Hogeschool te ’s-Hertogenbosch en valt binnen de
                        beoordelingseenheid van de opleiding Applied Geo-Information Science.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-4 home-info-content" id="intro">
                <div class="spacer"></div> <!---SPACER--->
                <div class="row page-section intro-div">
                    <h3>De Klant</h3>
                    <p> De doelgroep bestaat uit wetgevers in de omgeving van de Oder Delta met een ruimtelijke planning
                        functie. De doelgroep behoort rekening te houden met verschillende stakeholders. Hierdoor wil de
                        klant een ruimtelijk beslissingsmodel.
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
                    Het doel van dit project is het bevorderen van de economie in het Duitse gedeelte van de Oder Delta
                    zonder dat dit ten koste gaat van de biodiversiteit. Dit wil men bereiken door het stimuleren van
                    ecotoerisme wat zorgt voor meer werkgelegenheid. Dit ecotoerisme heeft baat bij de uitvoer van dit
                    project. Want het introduceren van de lynx zou meer toeristen naar het gebied moeten trekken.
                    <br><br>
                    Het ruimtelijk beslissing model moet meer inzicht bieden in de belangen van de verschillende
                    stakeholders.
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
                    <p> De Oder Delta is een belangrijk natuurgebied aan de Duits Poolse grens. Rewilding Europe is een
                        organisatie die bezig is met het verder ontwikkelen van de natuur binnen de Oder Delta. Zij zien
                        het gebied als een belangrijk kruispunt binnen de Europese natuur.
                    </p>
                    <br><br>
                    <h4>Natura 2000</h4>
                    <p>
                        Delen van de Oder Delta vallen onder het Natura 2000 netwerk. Beide het habitat- en de
                        vogelrichtlijnen gelden voor dit gebied. Omdat de Oder Delta een belangrijk natuurgebied is
                        zorgt Natura 2000 ervoor dat de natuur gewaarborgd wordt en biodiversiteit versterkt wordt.
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
                    <p> De delta bestaat uit verschillende landschapstypen. Er is bos en boerenland te vinden, maar ook
                        moeras en bebouwd gebied. Vanwege de locatie op ecologische kruispunten is er
                        een goede biodiversiteit in het gebied. 7 diersoorten zijn gekozen als iconische soorten en
                        worden beschreven als ‘De Grote 7 van de Oder Delta’. Dit zijn de wisent, bever, Europese
                        zeearend, eland, wolf, Atlantische steur en grijze zeehond
                        <i><a href="#nav-bronnen" class="bron-link">(Rewilding Europe, z.d.)</a></i>.
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
                    Natuurgebieden hebben roofdieren nodig om de balans in stand te houden. In de Oder Delta zijn deze
                    niet veel aanwezig. De lynx kan deze rol vervullen. Deze middelgrote kat weegt rond de 20 kilo. Door
                    predatie zorgt ervoor de lynx ervoor dat de prooidieren zich beter door het landschap verspreiden
                    waardoor deze in een natuurlijker patroon het gebied begrazen. De voornaamste prooi van de lynx in
                    de ree <i><a href="#nav-bronnen" class="bron-link">(ARK Natuurontwikkeling, 2014)</a></i>.
                    <br><br>
                    Naar schatting zijn er nog zo’n 32.000 in het wild levende lynxen. Het gootste deel hiervan bevindt
                    zich in Rusland. In Europa zijn het er zo’n 9500. De populatie wordt beschouwd als stabiel.
                    Centraal-Europa valt onder het historisch bereik van dit dier, maar momenteel zijn de populaties
                    hier klein <i><a href="#nav-bronnen" class="bron-link">(Breitenmoser-Würsten et al., 2014)</a></i>.
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
            <br><br>
            <!-- Tekst -->

            <h4>Bewoning</h4>
            <p>
                Vanwege verstoringen door de mens blijft de lynx minimaal 200 meter bebouwde gebieden af. Ook wegen
                worden vermeden. Gebied binnen 100 meter van een weg wordt als ongeschikt beschouwd voor een lynx
                <i><a href="#nav-bronnen" class="bron-link">(Rüdisser & Martys, 2002)</a></i>.
            </p>
            <h4>Bossen</h4>
            <p>
                Bossen zijn ruim het belangrijkste habitat van de lynx. Omdat er gejaagd wordt door prooien te besluipen
                is er voldoende beschutting nodig. Ook struikrijke bosranden zijn zeer geschikt als habitat. De lynx
                blijft veelal binnen 200m van een bosrand <i><a href="#nav-bronnen" class="bron-link">(Rüdisser &
                        Martys, 2002)</a></i>.
            </p>
            <h4>Water</h4>
            <p>
                Een delta heeft uiteraard een overvloed aan water. Lynxen zijn uitstekende zwemmers. Koud water wordt
                waar mogelijk vermeden en kleine beekjes worden overgestoken door natuurlijke bruggen. Er is echter
                voldoende beeldmateriaal dat laat zien dat lynxen ook grotere afstanden afleggen in koudere wateren
                <i><a href="#nav-bronnen" class="bron-link">(Sidorovich, 2021)</a></i>.
            </p>
            <h4>Overig landschap</h4>
            <p>
                Open velden worden niet geheel vermeden. Een onderzoek toonde zelfs aan dat de lynx zich aan kan passen
                aan de omgeving bij en gebrek aan bossen. Helaas is dit voor boeren slechter nieuws. Schapen zijn soms
                ook het slachtoffer <i><a href="#nav-bronnen" class="bron-link">(Nagl et al., 2022)</a></i>.
            </p>
            <div class="small-spacer"></div> <!---SPACER--->
            <div class="col-xs-1 col-lg-4">
            </div>
        </div>
    </div>

    <!-- Kaart & tekstvakken -->
    <div class="row justify-content-left">
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
                <button class="habitat-tekstvak text-left" id="habitat_stad">
                    <h4><i class="fas fa-city habitat-icon"></i>Bewoning</h4>
                    <p>
                        De lynx moet op afstand kunnen blijven van bebouwde gebieden. Dit zijn de grotere bewoonde
                        gebieden in de regio, zonder de kleine dorpjes.
                    </p>
                </button>
                <button class="habitat-tekstvak text-left" id="habitat_bos">
                    <h4><i class="fas fa-tree habitat-icon"></i>Bossen</h4>
                    <p>
                        De bossen zijn het belangrijkste leefgebied voor de lynx. Deze bosrijke gebieden zijn dus ideaal
                        om de lynx in uit te zetten.
                    </p>
                </button>
                <button class="habitat-tekstvak text-left" id="habitat_water">
                    <h4><i class="fas fa-umbrella-beach habitat-icon"></i>Water</h4>
                    <p>
                        Lynxen kunen prima grotere afstanden afleggen door het water zelf of via natuurlijke bruggen.
                        Hoewel dit dus geen leefgebied is voor de lynx zou je ze er zeker kunnen aantreffen.
                    </p>
                </button>
                <button class="habitat-tekstvak text-left" id="habitat_overig">
                    <h4><i class="fas fa-tractor habitat-icon"></i>Overig</h4>
                    <p>
                        Hoewel het geen ideaal habitat is, zou de lynx in deze gebieden kunnen voorkomen. Vooral voor
                        veeboeren is dit slechter nieuws.
                    </p>
                </button>
                <button class="habitat-tekstvak text-left" id="habitat_reset">
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
                <div class="row page-section stakeholder-div" id="stakeholder-2">
                    <h3>Habitat</h3>
                    <p> Dit criterium gaat over welke gebieden geschikt zijn voor de lynx. De subcriteria zijn bos,
                        voedsel, klimaat en rust. Er wordt hier rekening mee gehouden om de veiligheid en kwaliteit van
                        de natuur te waarborgen.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5">
                <div class="row page-section stakeholder-div" id="stakeholder-1">
                    <h3>Omwonenden & industrie</h3>
                    <p> Dit criterium gaat over de Duitse bevolking die binnen het gebied wonen en werken. Aangezien er
                        veel mensen in het gebied wonen en er industrieterreinen binnen het gebied liggen wordt dit
                        criterium toegevoegd. Dit is berekend op basis van aanwezigheid industrie en bebouwing.
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
                    <h3>Toerisme</h3>
                    <p> Dit criterium gaat over het potentieel van het gebied om toeristen aan te trekken. Aangezien dit
                        het achterliggende doel van het project is wordt dit criterium toegevoegd. Dit is berekend op
                        basis van bereikbaarheid van natuurgebieden.
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5">
                <div class="row page-section stakeholder-div" id="stakeholder-4">
                    <h3>Landbouw</h3>
                    <p> Dit criterium gaat over de landbouwsector in het gebied. In het gebied worden er gewassen
                        geteeld en vee gehouden. Aangezien de lynx een predator is wordt vee een belangrijke factor. Dit
                        is berekend op basis van de aanwezigheid van veehouderijen.
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
                Hieronder wordt een interactieve kaart weergegeven. Doormiddel van de knoppen aan de linkerkant van het
                scherm kunt u zelf bepalen welk criterium u wilt bekijken. Er zijn vier opties: habitat, omwonende,
                toerisme en veehouderijen.
                <br><br>
                Daarnaast heeft de keuze uit 2 modellen. Model 1 (het neutrale model) bevat de resulterende locaties om
                de lynx te introduceren bij het gelijk samenvoegen van de 4 criteria. Model 2 (investeringsmodel) bevat
                de resulterende locaties om de lynx te introduceren wanneer er meer geld wordt vrijgesteld om de
                gecombineerde criteria te verbeteren.
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
                <p class="mapButtonText">
                    Zie hier de beste en slechtst ontwikkelde habitat regio’s voor de lynx.
                </p>
            </div>
            <div id="buttonOmwonenden" class="mapButton" onclick="changemapOmwonenden()">
                <h6 class="mapButtonTitle">Omwonenden</h6>
                <p class="mapButtonText">
                    Zie hier de beste en slechtste locaties voor de lynx in vergelijking met afstand tot bebouwing.
                </p>
            </div>
            <div id="buttonToerisme" class="mapButton" onclick="changemapToerisme()">
                <h6 class="mapButtonTitle">Toerisme</h6>
                <p class="mapButtonText">
                    Zie hier de beste en slechtste verbindingen voor de connecties met betrekking tot toerisme.
                </p>
            </div>
            <div id="buttonLandbouw" class="mapButton" onclick="changemapLandbouw()">
                <h6 class="mapButtonTitle">Veehouderij</h6>
                <p class="mapButtonText">
                    Zie hier de beste en slechtste locaties voor de lynx in vergelijking met afstand tot veehouderijen.
                </p>
            </div>
            <div class="seperator"></div>
            <div id="button1111" class="mapButton" onclick="changemap1111()">
                <h6 class="mapButtonTitle">Neutraal model</h6>
                <p class="mapButtonText">
                    Zie hier het model waar uit alle criteria de beste en slechtste locaties voor het introduceren van
                    de lynx zijn.
                </p>
            </div>
            <div id="button5311" class="mapButton" onclick="changemap5311()">
                <h6 class="mapButtonTitle">Investeringsmodel</h6>
                <p class="mapButtonText">
                    Zie hier het model waar met extra investeringen in habitat verrijking de beste en slechtste locaties
                    voor het introduceren van de lynx zijn.
                </p>
            </div>
            </ul>
        </div>

        <!-- Kaart -->
        <div class="col-8 kaart">
            <img src="img/legenda.jpg" class="legenda">
            <div id="kaart" class="kaart"></div>
        </div>
    </div> <!-- Eind kaart & knoppen -->
    <div class="spacer"></div> <!---SPACER--->


    <!-- RESULTATEN -->
    <div class="row justify-content-center resultaten-dia">
        <div class="col-xs-8 col-lg-4">
            <div class="spacer"></div> <!---SPACER--->
            <div class="row page-section result-div">
                <h4>Beste locatie</h4>
                <p> Uit de analyse is gebleken dat er twee optimale gebieden zijn om de lynx te introduceren. Een gebied
                    is Brohmer Bergen dit ligt ten noord oosten van het gebied. Het andere gebied is Biosfeerreservaat
                    Schorfheide-Chorin en ligt ten zuid oosten van het gebied.
                </p>
                <br><br>
                <h4>Ontevreden stakeholders</h4>
                <p>
                    Wanneer de belangen van de omwonende en veehouders sterk worden betrokken blijven er echter weing
                    gebieden over (zoals weergegeven in het neutrale model). Dit ontstaat omdat bewoners bang kunnen
                    zijn van de nieuwe predator en veehouders willen geen vee verliezen.
                </p>
                <h4>Oplossing</h4>
                <p>
                    Als er meer geld kan worden geïnvesteerd in dit gebied kunnen de stakeholders omwonenden en
                    veehouders tevreden gesteld worden. Door educatie of inlichting kunnen bewoners leren leven met de
                    lynx. Hiernaast kunnen veehouders van subsidie gebruik maken om waakhonden of betere omheining aan
                    te schaffen. Bij succesvol toepassen zorgt het resultaat voor het kaartbeeld investeringsmodel.
                </p>
            </div>
            <div class="spacer"></div> <!---SPACER--->
        </div>
        <div class="col-xs-1 col-lg-1">
        </div>
        <div class="col-xs-8 col-lg-6">
            <div class="spacer"></div> <!---SPACER--->
            <img src="img/gebieden.jpeg" class="grafieken">
            <br><br>
            <img src="img/grafiek-1.png" class="grafieken">
            <br><br>
            <img src="img/grafiek-2.png" class="grafieken">
            <div class="spacer"></div> <!---SPACER--->
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
                    De beleidsvoerders hebben de keuze uit de volgende mogelijkheden:
                    <br>
                </p>
                <ol>
                    <li><strong>De lynx niet uitzetten in de Oder Delta.</strong> Zonder extra maatregelen is er geen
                        plek voor de lynx in de Oder Delta zonder mogelijke conflict met belanghebbenden. Als de
                        beleidsvoerders met een beperkt budget werken, zou het onverstandig zijn om de lynx uitzetten in
                        de Oder Delta.
                    </li>
                    <li><strong>De lynx uitzetten in de Oder Delta zonder extra maatregelen.</strong> Als er vanuit
                        habitatgeschiktheid wordt gekeken zijn er geschikte gebieden in de Oder Delta. De lynx zou in
                        deze gebieden geherintroduceerd kunnen worden. Echter bestaat er een grote kans dat er veel
                        weerstand zou komen vanuit de omwonende en de veehouders in het gebied.
                    </li>
                    <li><strong>De lynx uitzetten in de Oder Delta met extra maatregelen.</strong> Door extra
                        maatregelen te nemen om de weerstand van belanghebbenden te verminderen, zou de lynx
                        geherintroduceerd kunnen worden in het gebied zonder negatieve gevolgen. Deze mogelijkheid zou
                        wel meer geld kosten.
                    </li>
                </ol>
                <br>
                <p>
                    Verder zijn er twee gebieden waar de lynx het beste herintroduceert kan worden. De gebieden zijn:
                </p>
                <ol>
                    <li><strong>Biosfeerreservaat Schorfheide-Chorin.</strong> Dit is de grootste geschikte gebied in
                        het onderzoeksgebied, wat de kansen van de lynx verbetert. Dit gebied bevat relatief minder
                        veehouderijen, waardoor de kans op conflict tussen veehouders en de lynx kleiner is.
                    </li>
                    <li><strong>Brohmer Bergen. Dit gebied is kleiner en bevat relatief meer veehouderijen.</strong>
                        Het gebied is wel dichterbij de Oderdelta, wat toerisme naar het gebied zal bevorderen.
                    </li>
                </ol>
                <br><br>
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
                <div class="small-spacer"></div> <!---SPACER--->

            </div>
            <div class="col-xs-1 col-lg-5">
            </div>
        </div>

        <!-- Bronnen rij  1 -->
        <div class="row home-info justify-content-center">
            <div class="col-xs-1 col-lg-1">
            </div>
            <div class="col-xs-10 col-lg-5 home-info-content">
                <div class="row page-section intro-div bron-vak">
                    <h5>ARK Natuurontwikkeling. (2014, april 23).</h5>
                    <p><i>Lynx.</i> ARK Natuurontwikkeling.
                        <br>
                        <a href="https://www.ark.eu/natuurontwikkeling/natuurlijke-processen/predatie/lynx"
                           class="bron-link">
                            https://www.ark.eu/natuurontwikkeling/natuurlijke-processen/predatie/lynx
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5 home-info-content">
                <div class="row page-section intro-div bron-vak">
                    <h5>Breitenmoser-Würsten, C., Breitenmoser, U., Avgan, B., Lanz, T., von Arx, M., Antonevich, A., &
                        Dong Bao, W. (2014).</h5>
                    <p> IUCN Red List of Threatened Species: Lynx lynx. <i>IUCN Red List of Threatened Species.</i>
                        <br>
                        <a href="https://www.iucnredlist.org/en"
                           class="bron-link">
                            https://www.iucnredlist.org/en
                        </a>
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
            <div class="col-xs-10 col-lg-5 home-info-content">
                <div class="row page-section intro-div bron-vak">
                    <h5>Nagl, D., Breitenmoser, U., Hackländer, K., Ryser, A., Zimmermann, F., Signer, S., Haller, H.,
                        Breitenmoser, C., & Vogt, K. (2022).
                    </h5>
                    <p>Long‐term changes in habitat selection and prey spectrum in a reintroduced Eurasian lynx (Lynx
                        lynx) population in Switzerland.
                        <i>Ecology and Evolution, 12.</i>
                        <br>
                        <a href="https://doi.org/10.1002/ece3.8614"
                           class="bron-link">
                            https://doi.org/10.1002/ece3.8614
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5 home-info-content">
                <div class="row page-section intro-div bron-vak">
                    <h5>Rüdisser, J., & Martys, M. (2002).
                    </h5>
                    <p>
                        <i>
                            Spatial analysis of potential Lynx (Lynx lynx) distribution in Western Austria considering
                            ecological and anthropological conflicts. (pp. 248–254).
                        </i>
                        <br>
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
            <div class="col-xs-10 col-lg-5 home-info-content">
                <div class="row page-section intro-div bron-vak">
                    <h5>
                        Sidorovich, V. (2021, maart 10).
                    </h5>
                    <p>
                        Does the Eurasian lynx avoid strictly cold water?
                        <i>Zoology by Vadim Sidorovich.</i>
                        <br>
                        <a href="https://sidorovich.blog/2021/03/10/does-the-eurasian-lynx-avoid-strictly-cold-water/"
                           class="bron-link">
                            https://sidorovich.blog/2021/03/10/does-the-eurasian-lynx-avoid-strictly-cold-water/
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-xs-10 col-lg-5 home-info-content">
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