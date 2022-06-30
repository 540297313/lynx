<?php
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="description" content="Heeft u interesse in ons menu? Hier kunt u vinden welke Ittaliaanse gerechten er voor u zijn.">
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

	<title>La Spezia | Menu</title>
</head>

<body>

    <button onclick="topFunction()" id="myBtn" title="Terug naar boven">
        <i class="fa fa-chevron-up"></i>
    </button>

    <!--HEADER-->
    <header id="menu-header">
        <!-- Include burger menu-->
        <?php
        $current_file_path = dirname(__FILE__);
        include $current_file_path . DIRECTORY_SEPARATOR . 'static' . DIRECTORY_SEPARATOR . 'burger-menu.php';
        ?>
        <div class="row" style="padding: 25px;">
            <div class="col-6">
                <div id="hamburger-icon" onclick="toggleNav()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="col-6">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/lynx/de/menu.php" title="ins Deutsche übersetzen">
                    <img src="/lynx/img/lang-flag.png" alt="Wissel van taal" id="header-lang-button"
                         style="float:right;">
                </a>
            </div>
        </div>
    </header>


    <!--MAIN-->
    <main id="menu-achtergrond">
        <div class="accordion" id="accordionExample">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="welkom-bericht">Ons menu - Ristorante Gelateria - La Spezia</h1>
                </div>
            </div><!--row-->

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    Bij La Spezia kunt u terecht voor traditioneel Italiaans eten. Wij bieden diverse lunch, voor-en
                    hoofdgerechten aan op onze kaart. Ook hebben we een ruime keuze aan pizza’s, pasta’s en salades.
                </div>
                <div class="col-md-4">
                    Zowel voor gezellig bij ons op te eten of voor mee te nemen naar huis. Bekijk hieronder wat u zoal kunt verwachten bij ons.
                </div>
                <div class="col-md-2">
                </div>
            </div><!--row-->
        <br><br>

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 text-center">
                    <h2><em>"De smaak van Italië, gewoon aan de Zeeuwse kust"</em></h2>
                </div>
                <div class="col-md-2">
                </div>
            </div><!--row-->
        <br><br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn buttonmenu-licht " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseExample">
                        Dranken
                    </button>
                    <button class="btn buttonmenu-donker" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseExample2">
                        Gebak & Lunch
                    </button>
                    <button class="btn buttonmenu-licht btn-top" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseExample">
                        Maaltijden
                    </button>
                </div>
            </div><!--row-->

        <br><br>
        <!-- -------------------------------------------------DRANKEN------------------------------------------------------- -->
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="accordion-box">
                    <div class="row" id="dranken">
                        <div class="col-md-12 text-center">
                            <h1>Dranken</h1>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Frisdrank per fles</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Coca-Cola</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>

                                <tr>
                                    <td><span>Coca-Cola Light</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                                <tr>
                                    <td><span>Coca-Cola Zero</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                                <tr>
                                    <td><span>Fanta</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sprite</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                                <tr>
                                    <td><span>Fuze tea / green</span></td>
                                    <td><span>€2,85</span></td>
                                </tr>
                                <tr>
                                    <td><span>Apfelschorle</span></td>
                                    <td><span>€3,10</span></td>
                                </tr>
                                <tr>
                                    <td><span>Cassis</span></td>
                                    <td><span>€2,95</span></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><span>Bitter lemon</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>

                                <tr>
                                    <td><span>Tonic</span></td>
                                    <td><span>€3,10</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelaere</span></td>
                                    <td><span>€3,10</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sinaas - Appelaere</span></td>
                                    <td><span>€3,10</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tomatensap</span></td>
                                    <td><span>€3,10</span></td>
                                </tr>
                                <tr>
                                    <td><span>Fristi</span></td>
                                    <td><span>€3,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Chocomel</span></td>
                                    <td><span>€3,00</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Waters</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Chaudfontaine Rood (0.25 cl)</span></td>
                                    <td><span>€2,50</span></td>
                                </tr>

                                <tr>
                                    <td><span>Chaudfontaine Blauw (0.25 cl)</span></td>
                                    <td><span>€2,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Chaudfontaine Rood (½ liter)</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Chaudfontaine Blauw (½ liter)</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Bieren van het vat</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Heineken 0.25 cl</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>

                                <tr>
                                    <td><span>Heineken 0.50 cl</span></td>
                                    <td><span>€5,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>*Affligem dubbel van het vat</span></td>
                                    <td><span>€4,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>*Affligem blond van het vat</span></td>
                                    <td><span>€4,20</span></td>
                                </tr>
                                <p>
                                    <em>* Alleen tijdens het zomerseizoen</em>
                                </p>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Bier per fles</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Jupiler</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>

                                <tr>
                                    <td><span>Radler</span></td>
                                    <td><span>€2,85</span></td>
                                </tr>
                                <tr>
                                    <td><span>Palm</span></td>
                                    <td><span>€4,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Hoegaarden</span></td>
                                    <td><span>€4,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Kriek</span></td>
                                    <td><span>€4,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Duvel</span></td>
                                    <td><span>€4,95</span></td>
                                </tr>
                                <tr>
                                    <td><span>Heiniken (alc vrij)</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Huiswijnen</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Glas Rood (Caleo Primitivo Salento)</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>

                                <tr>
                                    <td><span>Glas Wit (Terre de Noce Chardonnay)</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Glas Rose (Pasqua Pinot Grigio)</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Flesje Cava (Jaume Serra) 0,187L</span></td>
                                    <td><span>€8,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Karaf Huiswijn 0,5L</span></td>
                                    <td><span>€15,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Karaf Huiswijn 1L</span></td>
                                    <td><span>€29,50</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Wijnen per fles</h3>
                            <hr>
                            <table>
                                <tr>
                                    <th><h2>Rood</h2></th>
                                </tr>
                                <tr>
                                    <td><span>Caleo Salento Primitivi Italie</span></td>
                                    <td><span>€24,50</span></td>
                                </tr>

                                <tr>
                                    <td><span>Festivo Malbec Bodegas Monteviejo, Argentina</span></td>
                                    <td><span>€31,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Els Pics Bodegas Mas Alta, Spanje</span></td>
                                    <td><span>€37,50</span></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <th><h2>Wit</h2></th>
                                </tr>
                                <tr>
                                    <td><span>Terre del noce chardonnay, Italie</span></td>
                                    <td><span>€24,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pinot gris Alsace, Frankrijk</span></td>
                                    <td><span>€31,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sancerre loire, Frankrijk</span></td>
                                    <td><span>€35,50</span></td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <th><h2>Rose</h2></th>
                                </tr>
                                <tr>
                                    <td><span>Pasque Pinot Girgio, Italie</span></td>
                                    <td><span>€4,95</span></td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <th><h2>Cava</h2></th>
                                </tr>
                                <tr>
                                    <td><span>Jaume Serra, Spanje</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Sterke Dranken</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Jonge Jenever</span></td>
                                    <td><span>€2,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Oude Jenever</span></td>
                                    <td><span>€2,90</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bessenjenever</span></td>
                                    <td><span>€3,15</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vieux</span></td>
                                    <td><span>€3,15</span></td>
                                </tr>
                                <tr>
                                    <td><span>Fernet Branca</span></td>
                                    <td><span>€3,15</span></td>
                                </tr>
                                <tr>
                                    <td><span>Cointreau</span></td>
                                    <td><span>€5,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Limoncello</span></td>
                                    <td><span>€5,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Amaretto</span></td>
                                    <td><span>€5,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tiamaria</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sambuca</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3>Sterke Dranken</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Grappa (wit of bruin)</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Grand Marnier</span></td>
                                    <td><span>€6,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Calvados</span></td>
                                    <td><span>€6,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Franse Cognac vs (Josepf guy)</span></td>
                                    <td><span>€6,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Franse Cognac vsop (Remy Martin)</span></td>
                                    <td><span>€7,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>J&B Wisky</span></td>
                                    <td><span>€6,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>J&B Wisky - Cola</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bruine Rum</span></td>
                                    <td><span>€5,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Armagnac</span></td>
                                    <td><span>€6,75</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Sangria</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Sangria met vers fruit</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Karaf 1L Sangria met vers fruit</span></td>
                                    <td><span>€29,50</span></td>
                                </tr>
                            </table>
                        </div>


                        <div class="col-md-6">
                            <h3>Gin</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Gordons Gin-Tonic</span></td>
                                    <td><span>€8,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bombay Gin-Tonic</span></td>
                                    <td><span>€8,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Hendrik's Gin-Tonic</span></td>
                                    <td><span>€12,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Ginmare-Tonic</span></td>
                                    <td><span>€12,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Monkey47 Gin-Tonic</span></td>
                                    <td><span>€14,75</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Aperitieven</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Cava, Flesje 18 cl</span></td>
                                    <td><span>€8,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Aperol/Spritz </span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Port rood of wit</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sherry dry of medium</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Martini rood of wit</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Hugo</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Kirr</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Ricard</span></td>
                                    <td><span>€5,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Picon met witte wijn</span></td>
                                    <td><span>€7,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pineau des charantes</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Mojito</span></td>
                                    <td><span>€7,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Mojito Royal</span></td>
                                    <td><span>€8,00</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Aperitieven</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Liquer 43</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Liquer 43 – Orange</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Campari</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Campari - Orange</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bacardi</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bacardi - Cola</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vodka</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vodka - Orange</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pisang ambon</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pisang - Orange</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Passoa</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Passoa - Orange</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                        <h3>Borrelgarnituur</h3>
                        <hr>
                        <table>
                            <tr>
                                <td><span>Portie Kaas</span></td>
                                <td><span>€5,75</span></td>
                            </tr>
                            <tr>
                                <td><span>Portie Salami </span></td>
                                <td><span>€5,75</span></td>
                            </tr>
                            <tr>
                                <td><span>Portie Olijven</span></td>
                                <td><span>€4,75</span></td>
                            </tr>
                            <tr>
                                <td><span>Portie Kaas-Salami-Olijven</span></td>
                                <td><span>€8,00</span></td>
                            </tr>
                            <tr>
                                <td><span>Portie Bitterballen (Kwekkeboom 8 stuks)</span></td>
                                <td><span>€8,00</span></td>
                            </tr>
                            <tr>
                                <td><span>Stokbrood met Kruidenboter</span></td>
                                <td><span>€4,25</span></td>
                            </tr>
                            <tr>
                                <td><span>Tapas plank</span></td>
                                <td><span>€18,75</span></td>
                            </tr>
                        </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Warme Dranken</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Kleine Espresso (Mokka)</span></td>
                                    <td><span>€2,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Grote Espresso (Koffie) </span></td>
                                    <td><span>€2,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Dubbele Espresso</span></td>
                                    <td><span>€3,90</span></td>
                                </tr>
                                <tr>
                                    <td><span>Cappucino</span></td>
                                    <td><span>€2,70</span></td>
                                </tr>
                                <tr>
                                    <td><span>Koffie Slagroom</span></td>
                                    <td><span>€2,80</span></td>
                                </tr>
                                <tr>
                                    <td><span>Koffie verkeerd</span></td>
                                    <td><span>€2,80</span></td>
                                </tr>
                                <tr>
                                    <td><span>Latte Macchiatto</span></td>
                                    <td><span>€3,05</span></td>
                                </tr>
                                <tr>
                                    <td><span>Warme Chocomelk</span></td>
                                    <td><span>€3,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Thee Natuur</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                                <tr>
                                    <td><span>Thee Citroen</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3>Warme Dranken</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Thee Melk</span></td>
                                    <td><span>€2,60</span></td>
                                </tr>
                                <tr>
                                    <td><span>Verse munt thee </span></td>
                                    <td><span>€3,10</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vruchtenthee</span></td>
                                    <td><span>€2,65</span></td>
                                </tr>
                                <tr>
                                    <td><span>Irish Coffee (wisky)</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>French Coffee (grand marnier)</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Café Orientaal (tia maria)</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Café Italiano (amaretto)</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vlaamse koffie (jenever)</span></td>
                                    <td><span>€5,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Café Normande (calvados)</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Spaanse coffee (liquer 43)</span></td>
                                    <td><span>€7,00</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->
                </div><!--accordion-box-->
            </div><!--collapseOne-->

            <!-- ----------------------------------------------GEBAK & LUNCH---------------------------------------------------- -->
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="accordion-box">
                    <div class="row" id="gebak&lunch">
                        <div class="col-md-12 text-center">
                            <h1>Gebak & Lunch</h1>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Huisgemaakte Appelbollen</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Warme appelbol</span></td>
                                    <td><span>€5,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelbol met slagroom </span></td>
                                    <td><span>€5,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelbol met caramel-ijs</span></td>
                                    <td><span>€6,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelbol met ijs & slagroom</span></td>
                                    <td><span>€6,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelbol met calvados, ijs & slagroom</span></td>
                                    <td><span>€8,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sangria met vers fruit</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Mojito</span></td>
                                    <td><span>€7,00</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Gebak</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Appelgebak</span></td>
                                    <td><span>€3,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelgebak slagroom </span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelgebak ijs</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Appelgebak ijs & slagroom</span></td>
                                    <td><span>€6,50</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Poffertjes</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Poffertjes suiker & boter</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Poffertjes slagroom </span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Poffertjes ijs</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Poffertjes ijs & slagroom</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Pannenkoeken / Wafels</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Poedersuiker</span></td>
                                    <td><span>€4,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Poedersuiker & boter</span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bruine suiker</span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bruine suiker & boter</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Stroop</span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Confituur</span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Slagroom</span></td>
                                    <td><span>€4,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vanille-ijs</span></td>
                                    <td><span>€5,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Milkado <sub>(Vanille-ijs, chocoladesaus, slagroom)</sub></span></td>
                                    <td><span>€6,70</span></td>
                                </tr>
                            </table>

                            <table>
                                <tr>
                                    <td><span>Aardbeien</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Aardbeien & slagroom</span></td>
                                    <td><span>€4,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Aardbeien & vanille-ijs</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Aardbeien, vanille-ijs & slagroom</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vers fruit</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vers fruit & slagroom </span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vers fruit & vanille-ijs</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Vers fruit, vanille-ijs & slagroom-ijs</span></td>
                                    <td><span>€4,75</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-4">
                            <h3>Tosti's</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Ham</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Kaas</span></td>
                                    <td><span>€7,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Ham - Kaas</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Hawaï</span></td>
                                    <td><span>€8,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Madame</span></td>
                                    <td><span>€8,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>La Spezia</span></td>
                                    <td><span>€9,75</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-4">
                            <h3>Stokbroodjes</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Ham</span></td>
                                    <td><span>€6,90</span></td>
                                </tr>
                                <tr>
                                    <td><span>Kaas</span></td>
                                    <td><span>€6,90</span></td>
                                </tr>
                                <tr>
                                    <td><span>Ham - Kaas</span></td>
                                    <td><span>€7,40</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salami</span></td>
                                    <td><span>€7,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bressiaanse Garnalen</span></td>
                                    <td><span>€11,95</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tonno <sub>(Tonijn)</sub></span></td>
                                    <td><span>€9,95</span></td>
                                </tr>
                                <tr>
                                    <td><span>Parmaham</span></td>
                                    <td><span>€10,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Gerookte Zalm</span></td>
                                    <td><span>€11,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Gezond <sub>(Kaas, ham, tomaat, komkommer, ei, mayo)</sub></span></td>
                                    <td><span>€8,95</span></td>
                                </tr>
                                <p>
                                    <em>De tosti ‘s, stokbroodjes en uitsmijters zijn tijdens het hoogseizoen na 17.00 uur niet altijd mogelijk</em>
                                </p>
                            </table>
                        </div>

                        <div class="col-md-2">
                            <h3>Uitsmijters</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Uitsmijter Ham</span></td>
                                    <td><span>€8,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Uitsmijter Kaas</span></td>
                                    <td><span>€8,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Uitsmijter Ham - Kaas</span></td>
                                    <td><span>€9,50</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->
                </div><!--accordion-box-->
            </div><!--collapseTwo-->

            <!-- ------------------------------------------------MAALTIJDEN----------------------------------------------------- -->
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="accordion-box">
                    <div class="row" id="maaltijden">
                        <div class="col-md-12 text-center">
                            <h1>Maaltijden</h1>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-4">
                            <h3>Koude voorgerechten</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Gemengde Salade</span></td>
                                    <td><span>€9,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Parmaham met meloen</span></td>
                                    <td><span>€14,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Flinterdunne gerookte zalm</span></td>
                                    <td><span>€14,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Garnalen Cocktail</span></td>
                                    <td><span>€15,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Carpaccio</span></td>
                                    <td><span>€15,75</span></td>
                                </tr>
                                <p>
                                    <em>Onze voorgerechten worden geserveerd met stokbrood en boter</em>
                                </p>
                            </table>
                        </div>

                        <div class="col-md-4">
                            <h3>Warme voorgerechten</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Huisbereide Kaaskroketten</span></td>
                                    <td><span>€11,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Huisbereide Garnalenkroketten</span></td>
                                    <td><span>€14,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Scampi's met knoflook (6 stuks)</span></td>
                                    <td><span>€14,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Scampi's met knoflooksaus (6 stuks)</span></td>
                                    <td><span>€14,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Gefrituurde inktvisringen met knoflooksaus</span></td>
                                    <td><span>€10,75</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-4">
                            <h3>Soepen</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Italiaanse Tomatensoep</span></td>
                                    <td><span>€5,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Italiaanse Uiensoep</span></td>
                                    <td><span>€6,75</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">

                        <div class="col-md-4">
                            <h3>Vleesgerechten</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Wienerschnitzel</span></td>
                                    <td><span>€14,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Varkenshaasje</span></td>
                                    <td><span>€15,95</span></td>
                                </tr>
                                <tr>
                                    <td><span>Zigeunersschnitzel</span></td>
                                    <td><span>€15,95</span></td>
                                </tr>
                                <tr>
                                    <td><span>Kogelbiefstuk</span></td>
                                    <td><span>€16,25</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-4">
                            <h3>Sauzen</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Peperroomsaus</span></td>
                                    <td><span>€3,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Champignonroomsaus</span></td>
                                    <td><span>€3,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Picante</span></td>
                                    <td><span>€3,00</span></td>
                                </tr>
                                <p>
                                    <em>Deze gerechten worden geserveerd met frites, salade en mayonaise</em>
                                </p>
                            </table>
                        </div>

                        <div class="col-md-4">
                            <h3>Visgerechten</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Gegratineerd vispannetje</span></td>
                                    <td><span>€20,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Kabeljauwhaas wittewijnsaus en garnaaltjes</span></td>
                                    <td><span>€20,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Scampi's in room (9 stuks)</span></td>
                                    <td><span>€18,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Scampi's in de knoflook (9 stuks)</span></td>
                                    <td><span>€18,75</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Pasta's</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Spaghetti Bolognese <sub>Bolognesesaus, gehakt, kruiden, groenten</sub></span></td>
                                    <td><span>€11,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Spaghetti Carbonara <sub>Roomsaus, spek, champignons</sub></span></td>
                                    <td><span>€12,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Spaghetti Marinara <sub>Tomatensaus, zeevruchten</sub></span></td>
                                    <td><span>€13,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Spaghetti Salmone <sub>Zalm</sub></span></td>
                                    <td><span>€14,00</span></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><span>Tagliatelle Bolognese <sub>Bolognesesaus, gehakt, kruiden, groenten</sub></span></td>
                                    <td><span>€11,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tagliatelle Carbonara <sub>Roomsaus, spek, champignons</sub></span></td>
                                    <td><span>€12,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tagliatelle Marinara <sub>Tomatensaus, zeevruchten</sub></span></td>
                                    <td><span>€13,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tagliatelle Salmone <sub>Zalm</sub></span></td>
                                    <td><span>€14,20</span></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><span>Lasagne Bolognese <sub>Bolognesesaus, gehakt, kruiden, groenten</sub></span></td>
                                    <td><span>€12,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Lasagne á La Créme <sub>Bolognesesaus, gehakt, kruiden, room, kaas</sub></span></td>
                                    <td><span>€13,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Lasagne La Spezia <sub>Spinazie, gehakt, kruiden, room, kaas</sub></span></td>
                                    <td><span>€13,00</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Maaltijdsalades</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Salade La Spezia <sub>Salade, parmaham, mozzarella, tomaten, olijven, artisjok</sub></span></td>
                                    <td><span>€13,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salade Scampi <sub>Salade, scampi's, grijze garnalen, balsamico</sub></span></td>
                                    <td><span>€12,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salade Garnalen <sub>Salade, grijze garnalen, cocktailsaus</sub></span></td>
                                    <td><span>€14,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salade Geitenkaas <sub>Salade, 2 geitenkaasjes met spek, honing, pijnboompitjes</sub></span></td>
                                    <td><span>€12,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salade Calamaris <sub>Salade, gefrituurde inktvisringen, knoflooksaus</sub></span></td>
                                    <td><span>€11,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salade Tonijn <sub>Salade, tonijn en dressing</sub></span></td>
                                    <td><span>€12,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Griekse Salade <sub>Salade, fetakaas en dressing</sub></span></td>
                                    <td><span>€14,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Italiaanse Salade <sub>Salade, mozzarella en dressing</sub></span></td>
                                    <td><span>€11,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salade Pollo <sub>Salade, kipfilet en dressing</sub> <em></span></td>
                                    <td><span>€13,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Gemengde salade <sub>Salade, groentjes en dressing</sub></span></td>
                                    <td><span>€13,00</span></td>
                                </tr>
                                <p>
                                    <em>Deze gerechten worden geserveerd met brood suplementen en frites. €2,50</em>
                                </p>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Pizza's</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Margherita* <sub>Tomatensaus, mozzerella en tomaten</sub></span></td>
                                    <td><span>€9,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Napolitana <sub>Tomatensaus, olijven, artisjok, ansjovis, mozzarella</sub></span></td>
                                    <td><span>€12,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Peperoni (vegetarisch)* <sub>Tomatensaus, ui, paprika, champignons, pepers, artisjok, mozzarella</sub></span></td>
                                    <td><span>€12,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Funghi* <sub>Tomatensaus, ui, champignons, mozzarella</sub></span></td>
                                    <td><span>€11,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Verdura* <sub>Tomatensaus, ui, paprika, champignons, olijven, artisjok, kappertjes, mozzarella</sub></span></td>
                                    <td><span>€13,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salami <sub>Tomatensaus, salami, mozzarella</sub></span></td>
                                    <td><span>€11,20</span></td>
                                </tr>
                                <tr>
                                    <td><span>Bolognese <sub>Tomatensaus, bolognesesaus, mozzarella</sub></span></td>
                                    <td><span>€11,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Hawaï <sub>Tomatensaus, ham, ananas, mozzarella</sub></span></td>
                                    <td><span>€12,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Mafiosi <sub>Tomatensaus, ui, champignons, paprika, ham, mozzarella</sub></span></td>
                                    <td><span>€13,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Prosciutto <sub>Tomatensaus, ham, champignons, mozzarella</sub></span></td>
                                    <td><span>€12,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Quattro Stagioni <sub>Tomatensaus, pizzapunt hawaii, salami, funghi, peperoni</sub></span></td>
                                    <td><span>€13,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Sophia Loren <sub>Tomatensaus, ui, spek, mozzarella, ei</sub></span></td>
                                    <td><span>€12,75</span></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6">
                            <h3>Pizza's</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Prosciutto di parma <sub>Tomatensaus, ui, parmaham, olijven, knoflook, mozzarella</sub></span></td>
                                    <td><span>€13,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Calzone <sub>Dichtgeklapte pizza met tomatensaus, ui, champignons, paprika, ham, salami, mozzarella</sub></span></td>
                                    <td><span>€15,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>La Spezia <sub>Tomatensaus, ham, salami, ui, champignons, olijven, artisjok, mozzarella</sub></span></td>
                                    <td><span>€13,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Quattro Formaggi* <sub>Tomatensaus, vier soorten kaas</sub></span></td>
                                    <td><span>€14,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Salmone <sub>Tomatensaus, ui, gerookte zalm, kappertjes, mozzarella</sub></span></td>
                                    <td><span>€15,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Scampi <sub>Tomatensaus, ui, scampi's, olijven, knoflook, mozzarella</sub></span></td>
                                    <td><span>€15,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tonno <sub>Tomatensaus, ui, tonijn, olijven, artisjok, mozzarella</sub></span></td>
                                    <td><span>€14,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Frutti di mare <sub>Tomatensaus, zeevruchten, knoflook mozzarella</sub></span></td>
                                    <td><span>€15,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pizza Gorgonzola* <sub>Tomatensaus, gorgonzola, mozzarella</sub></span></td>
                                    <td><span>€15,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pizza Shoarma <sub>Tomatensaus, ui, champignons, paprika, shoarmavlees, mozzarella</sub></span></td>
                                    <td><span>€15,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pizza Pollo <sub>Tomatensaus, kip, ui, champignons, mozzarella</sub></span></td>
                                    <td><span>€15,75</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pizza Peperoni <sub>Tomatensaus, peperoni worst, ui, champignons, paprika, pepers, artisjok, mozzarella</sub></span></td>
                                    <td><span>€13,50</span></td>
                                </tr>
                                <h4>
                                    <em>*Vegetarische Pizza</em>
                                </h4>
                            </table>
                        </div>
                    </div><!--row-->

                <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <h3>Kindergerechten</h3>
                            <hr>
                            <table>
                                <tr>
                                    <td><span>Pizza Poco <sub>Tomatensaus, mozzarella</sub></span></td>
                                    <td><span>€7,50</span></td>
                                </tr>
                                <tr>
                                    <td><span>Pizza Picolo <sub>Tomatensaus, ham, ananas, mozzarella</sub></span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Spaghetti Bolognese</span></td>
                                    <td><span>€8,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Lasagne Bolognese</span></td>
                                    <td><span>€8,25</span></td>
                                </tr>
                                <tr>
                                    <td><span>Friet met kroket, appelmoes en mayo</span></td>
                                    <td><span>€9,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Friet met frikandel, appelmoes en mayo</span></td>
                                    <td><span>€9,00</span></td>
                                </tr>
                                <tr>
                                    <td><span>Friet met kipnuggets, appelmoes en mayo</span></td>
                                    <td><span>€9,00</span></td>
                                </tr>
                            </table>
                        </div>
                    </div><!--row-->
                </div><!--accordion-box-->
            </div><!--collapseThree-->
        </div><!--accordion-->
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

        function toggleNav(){
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

        $(document).ready(function(){
            $('#hamburger-icon').click(function(){
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