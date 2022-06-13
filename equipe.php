<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez l'équipe de notre micro-crèche, une équipe professionnelles attentives aux besoins des enfants.">
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Au pays des comptines - Micro-crèche de Beuvry-la-forêt" />
    <meta property="og:description" content="Micro-crèche de Beuvry-la-forêt" />
    <meta property="og:url" content="https://www.aupaysdescomptines.fr/" />
    <meta property="og:site_name" content="Au pays des comptines" />
    <meta property="og:image" content="https://www.aupaysdescomptines.fr/media/images/logolarge.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <link href="fonts.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="./media/favicon/apdc_favicon.ico" />
    <script src="https://kit.fontawesome.com/49dbd7732f.js" crossorigin="anonymous"></script>
    <title>Au Pays des comptines - Equipe</title>
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
        <section class="profile-card boxContainer">
            <h1 class="blue-title">Dirigeants</h1>
            <div class="management">
                <div class="card-profile"><img src="./media/profiles/NotAvailable.webp" srcset="./media/profiles/NotAvailable-915.webp 915w, ./media/profiles/NotAvailable-600.webp 600w, ./media/profiles/NotAvailable-400.webp 400w, ./media/profiles/NotAvailable-200.webp 200w" width="1344px" height="896px" alt="Photo de profil" draggable="false">
                    <p>Alice <span>Co-gérante et directrice administrative</span></p>
                </div>
                <div class="card-profile"><img src="./media/profiles/NotAvailable.webp" srcset="./media/profiles/NotAvailable-915.webp 915w, ./media/profiles/NotAvailable-600.webp 600w, ./media/profiles/NotAvailable-400.webp 400w, ./media/profiles/NotAvailable-200.webp 200w" width="1344px" height="896px" alt="Photo de profil" draggable="false">
                    <p>Stéphanie <span>Co-gérante et directrice technique</span></p>
                </div>
            </div>
            <h1 class="pink-title">Employées</h1>
            <div>
                <div class="card-profile"><img src="./media/profiles/NotAvailable.webp" srcset="./media/profiles/NotAvailable-915.webp 915w, ./media/profiles/NotAvailable-600.webp 600w, ./media/profiles/NotAvailable-400.webp 400w, ./media/profiles/NotAvailable-200.webp 200w" width="1344px" height="896px" alt="Photo de profil" draggable="false">
                    <p>Céline <span>Animatrice d'éveil</span></p>
                </div>
                <div class="card-profile"><img src="./media/profiles/NotAvailable.webp" srcset="./media/profiles/NotAvailable-915.webp 915w, ./media/profiles/NotAvailable-600.webp 600w, ./media/profiles/NotAvailable-400.webp 400w, ./media/profiles/NotAvailable-200.webp 200w" width="1344px" height="896px" alt="Photo de profil" draggable="false">
                    <p>Sabine <span>Animatrice d'éveil</span></p>
                </div>
                <div class="card-profile"><img src="./media/profiles/NotAvailable.webp" srcset="./media/profiles/NotAvailable-915.webp 915w, ./media/profiles/NotAvailable-600.webp 600w, ./media/profiles/NotAvailable-400.webp 400w, ./media/profiles/NotAvailable-200.webp 200w" width="1344px" height="896px" alt="Photo de profil" draggable="false">
                    <p>Christelle <span>Animatrice d'éveil</span></p>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-content boxContainer">
            <p>Au Pays des comptines – © Copyright 2022, Tous droits réservés.</p>
            <p><a href="./mentions-legales">Mentions Légales</a></p>
        </div>
    </footer>
    <script src="./script/script-navbar.js"></script>
    <script src="./script/script-scroll.js"></script>
</body>

</html>