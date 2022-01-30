<?php require 'functions.php'; 
date_default_timezone_set('Europe/Paris');
require 'horaires.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49dbd7732f.js" crossorigin="anonymous"></script>
    <script src="script-navbar.js"></script>
    <title>Au Pays des comptines</title>
</head>
<body>
    <header>
        <img src="image/logolarge.jpg" alt="Logo Au Pays des comptines" class="logo">
            <ul class="nav-menu">
                <?= nav_menu(); ?>
            </ul>
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
                <a class="ButtonForMore" href="#InfoEtablissement">En savoir plus... <i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>
    <section class="InfoEtablissement" id="InfoEtablissement">
        <div class="SliderAndContent">
            <div class="Content">
                <h1 class="blue-title">Notre établissement</h1>
                <p><em>Notre micro-crèche</em> peut accueillir jusqu'a <em>10 enfants</em> à partir de l'âge de 
                <em>2 mois et demi</em> et jusqu'a l'age de <em>6 ans</em>.</p>

                <p>Sa capacité d'accueil limitée permet de créer un véritable <em>cocon</em> et un encadrement des enfants plus
                <em>personnalisée</em> et <em>familial</em>.</p>

                <p>Sa surface est de <em>...m²</em>, elle est composée d'un dortoir, d'une salle de jeu, d'une terrasse et d'un jardin afin que chaque enfant puisse 
                <em>s'épanouir</em> au sein de notre <em>crèche.</em></p>

                <h2 class="blue-subtitle">Accueil :</h2>
                <p>A la journée <em>-</em> Plusieurs jours pas semaine <em>-</em> À la demi-journée <em>-</em> Entre 12h et 14h. </p>
            </div>   
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="slide first">
                        <img src="image/slides/1slide.jpeg" alt="Vue Exterieur Crèche">
                    </div>
                    <div class="slide second">
                        <img src="image/slides/2slide.jpg" alt="Vue Intérieur Crèche">
                    </div>
                    <div class="slide third">
                        <img src="image/slides/3slide.jpg" alt="Vue Intérieur Crèche">
                    </div>
                    <div class="slide fourth">
                        <img src="image/slides/4slide.jpg" alt="Vue Intérieur Crèche">
                    </div>
                    <!-- automatic navigation start -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>              
                    </div>
                </div>
                <!-- manual naviation start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </div>           
    </section>
    <section class="FurtherInformation">
        <h1 class="pink-title">Informations Complémentaires</h1>
        <div class="LocationAndSchedules">
            <div class="location">
                <h2 class="subtitle"><i class="fas fa-map-marker-alt"></i> Adresse</h2>
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
                            <?php foreach(JOURS as $key => $jour): ?>
                            <tr <?php if($key + 1 === (int)date('N')): ?> class="active" <?php endif; ?> > 
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
                <h2 class="subtitle"><i class="far fa-calendar-alt"></i> Periodes de Fermeture : </h2>
                <p>1 semaine entre Noël, Nouvel an et les 3 dernières semaines de Aout.</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <p>Au Pays des comptines – © Copyright 2021, Tous droits réservés.</p><a href="">Mentions Légales</p>
        </div>
    </footer>
    <script src="script-slider.js"></script>
</body>
</html>