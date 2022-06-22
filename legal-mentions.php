<?php require 'functions.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez les mentions légales du site de notre micro-crèche.">
    <link href="fonts.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="./media/favicon/apdc_favicon.ico" />
    <title>Au Pays des comptines</title>
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
        <section class="legal-mentions boxContainer">
            <h1>Mentions Legales</h1>
            <h2>L'EDITEUR DU SITE</h2>
            <p>
                L’édition et la direction de la publication du Site est assurée par <strong>Thibaut Dusautoir.</strong><br />
                <strong>Adresse :</strong> 55 rue de l'ancienne poste, 59310 Beuvry-la-forêt <br />
                <strong>Téléphone :</strong> 07 81 68 60 58 <br />
                <strong>Adresse email :</strong> thibautdusautoir@gmail.com.
            </p>
            <h2>L'HEBERGEUR</h2>
            <p>
                L'hébergeur du Site est la société O2Switch. <br />
                <strong>Siège social :</strong> 222 Bd Gustave Flaubert, 63000 Clermont-Ferrand <br />
                <strong>Téléphone :</strong> 04 44 44 60 40 <br />
                <strong>Adresse mail :</strong> commercial@o2switch.fr <br />
            </p>
            <h2>ACCES AU SITE</h2>
            <p>
                Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
                programmée ou non et pouvant découlant d’une nécessité de maintenance.
                En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.
            </p>
            <h2>COLLECTE DES DONNEES</h2>
            <p>
                Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la
                mesure où il ne collecte aucune donnée concernant les utilisateurs.
                Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
                sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
                telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.
            </p>
        </section>
    </div>
    <script src="./script/script-navbar.js"></script>
</body>

</html>