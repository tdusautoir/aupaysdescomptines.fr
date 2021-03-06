<?php require 'functions.php';
date_default_timezone_set('Europe/Paris');
require 'horaires.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Des espaces adaptés et conviviaux, un projet pédagogique de qualité, et une équipe professionnelles attentives aux besoins des enfants : Au pays des comptines est une micro-crèche de Beuvry-la-forêt.">
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Au pays des comptines - Micro-crèche de Beuvry-la-forêt" />
    <meta property="og:description" content="Micro-crèche de Beuvry-la-forêt" />
    <meta property="og:url" content="https://www.aupaysdescomptines.fr/" />
    <meta property="og:site_name" content="Au pays des comptines" />
    <meta property="og:image" content="https://www.aupaysdescomptines.fr/media/images/logolarge.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <link rel="canonical" href="https://www.aupaysdescomptines.fr/" />
    <link href="fonts.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="./media/favicon/apdc_favicon.ico" />
    <title>Au Pays des comptines - Micro-crèche de Beuvry-la-forêt</title>

    <!-- lib -->
    <script src="https://kit.fontawesome.com/49dbd7732f.js" crossorigin="anonymous"></script>

    <script src="./script/script-slider.js"></script>
</head>

<body>
    <div class="content">
        <header>
            <div class="container" id="menu-container">
                <img draggable="false" src="./media/images/logo.jpg" alt="Logo Au Pays des comptines" srcset="./media/images/logo-400.jpg 400w, ./media/images/logo-200.jpg 200w, ./media/images/logo-100.jpg 100w" class="logo" width="195px" height="94.36px">
                <ul class="nav-menu">
                    <?= nav_menu(); ?>
                </ul>
                <button class="burger-menu">
                    <span class="bar"></span>
                </button>
            </div>
        </header>
        <section class="landingPage">
            <div class="DefinitionAPDC">
                <h1>Au Pays des comptines c'est :</h1>
                <ul class="ListDefAPDC">
                    <li>Des espaces adaptés et conviviaux.</li>
                    <li>Un projet pédagogique de qualité.</li>
                    <li>Une équipe professionnelles attentives aux besoins des enfants.</li>
                    <li>Un mode de garde favorisant la vie en colléctivité</li>
                    <li>Un accueil adapté au rythme de l'enfant.</li>
                </ul>
                <div class="ForMore">
                    <a class="ButtonForMore" href="#InfoEstablishment">En savoir plus... <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </section>
        <section class="InfoEstablishment boxContainer" id="InfoEstablishment">
            <div class="SliderAndContent">
                <div class="Content">
                    <h1 class="blue-title">Notre établissement</h1>
                    <div>
                        <p>Notre micro-crèche peut accueillir<em>*</em> jusqu'a 10 enfants à partir de l'âge de
                            2 mois et demi et jusqu'a l'age de 4 ans.</p>

                        <p>Sa capacité d'accueil limitée permet de créer un véritable cocon et un encadrement des enfants plus
                            personnalisée et familial.</p>

                        <p>Sa surface est d'environ 100m², elle est composée de deux dortoirs, d'une salle de change, d'une salle de jeu, d'un coin repas, d'une terrasse et d'un jardin afin que chaque enfant puisse
                            s'épanouir au sein de notre crèche.</p>

                        <p class="blue-legend">* A la journée - Plusieurs jours pas semaine - À la demi-journée - Entre 12h et 14h.</p>
                    </div>
                </div>
                <div class="slider">
                    <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <input type="radio" name="radio-btn" id="radio5">

                        <div class="slide first">
                            <img src="./media/slides/slide-0.webp" srcset="./media/slides/slide-0-512.webp 512w, ./media/slides/slide-0-256.webp 256w" alt="Vue Exterieur Crèche">
                        </div>
                        <div class="slide second">
                            <img src="./media/slides/slide-1.webp" srcset="./media/slides/slide-1-512.webp 512w, ./media/slides/slide-1-256.webp 256w" alt="Vue Intérieur Crèche">
                        </div>
                        <div class="slide third">
                            <img src="./media/slides/slide-3.webp" srcset="./media/slides/slide-3-512.webp 512w, ./media/slides/slide-3-256.webp 256w" alt="Vue Intérieur Crèche">
                        </div>
                        <div class="slide fourth">
                            <img src="./media/slides/slide-4.webp" srcset="./media/slides/slide-4-512.webp 512w, ./media/slides/slide-4-256.webp 256w" alt="Vue Intérieur Crèche">
                        </div>
                        <div class="slide fifth">
                            <img src="./media/slides/slide-5.webp" srcset="./media/slides/slide-5-512.webp 512w, ./media/slides/slide-5-256.webp 256w" alt="Vue Intérieur Crèche">
                        </div>
                        <!-- automatic navigation start -->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                            <div class="auto-btn5"></div>
                        </div>
                    </div>
                    <!-- manual naviation start -->
                    <div class="navigation-manual">
                        <label for="radio1" tabindex="0" class="manual-btn" onclick="ResetTimer()"></label>
                        <label for="radio2" tabindex="0" class="manual-btn" onclick="ResetTimer()"></label>
                        <label for="radio3" tabindex="0" class="manual-btn" onclick="ResetTimer()"></label>
                        <label for="radio4" tabindex="0" class="manual-btn" onclick="ResetTimer()"></label>
                        <label for="radio5" tabindex="0" class="manual-btn" onclick="ResetTimer()"></label>
                    </div>
                </div>
            </div>
        </section>
        <div class="separator"></div>
        <div class="separator-pink"></div>
        <section class="FurtherInformation boxContainer">
            <h1 class="pink-title">Informations Complémentaires</h1>
            <div class="LocationAndSchedules">
                <div class="location">
                    <h2 class="pink-subtitle"><i class="fas fa-map-marker-alt"></i> Adresse</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6041.190270785799!2d3.287713461210869!3d50.45958276695241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2c34fe1f56469%3A0x3191989852010cf4!2s185%20Rue%20de%20l&#39;Ancienne%20Poste%2C%2059310%20Beuvry-la-For%C3%AAt!5e0!3m2!1sfr!2sfr!4v1633355852930!5m2!1sfr!2sfr" width="700" height="490" class="MapGoogle" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="schedules">
                    <div class="card-schedules">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Heures d'ouverture</h3>
                                <p>Aujourd'hui</p>
                            </div>
                            <i class="far fa-clock"></i>
                        </div>
                        <table>
                            <tbody>
                                <?php foreach (JOURS as $key => $jour) : ?>
                                    <tr <?php if ($key + 1 === (int)date('N')) : ?> class="active" <?php endif; ?>>
                                        <th>
                                            <?= $jour ?>
                                        </th>
                                        <td>
                                            <?= CRENEAUX[$key]; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <h2 class="pink-subtitle"><i class="far fa-calendar-alt"></i> Periodes de Fermeture : </h2>
                    <p>1 semaine entre Noël, Nouvel an et les 3 dernières semaines de Aout.</p>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="footer-content boxContainer">
            <p>Au Pays des comptines – © Copyright 2022, Tous droits réservés.</p>
            <p><a href="./mentions-legales">Mentions Légales</a></p>
        </div>
    </footer>
    <script src="./script/script-navbar.js"></script>
    <script src="./script/script-scroll.js"></script>
</body>

</html>