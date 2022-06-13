<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez l'équipe de notre micro-crèche, une équipe professionnelles attentives aux besoins des enfants.">
    <link href="fonts.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="./media/favicon/apdc_favicon.ico" />
    <script src="https://kit.fontawesome.com/49dbd7732f.js" crossorigin="anonymous"></script>
    <title>Au Pays des comptines</title>
</head>

<body>
    <div class="content">
        <header>
            <div class="container" id="menu-container">
                <img draggable="false" src="./media/images/logolarge.JPG" alt="Logo Au Pays des comptines" class="logo" width="195px" height="94.36px">
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
                <div class="card-profile"><img src="./media/profiles/NotAvailableB.png" alt="Photo de profil">
                    <p>Stephanie Dusautoir <span>Directrice</span></p>
                </div>
                <div class="card-profile"><img src="./media/profiles/NotAvailableB.png" alt="Photo de profil">
                    <p>Stephanie Dusautoir <span>Directrice</span></p>
                </div>
            </div>
            <h1 class="pink-title">Employées</h1>
            <div>
                <div class="card-profile"><img src="./media/profiles/NotAvailableB.png" alt="Photo de profil">
                    <p>Stephanie Dusautoir <span>Directrice</span></p>
                </div>
                <div class="card-profile"><img src="./media/profiles/NotAvailableB.png" alt="Photo de profil">
                    <p>Stephanie Dusautoir <span>Directrice</span></p>
                </div>
                <div class="card-profile"><img src="./media/profiles/NotAvailableB.png" alt="Photo de profil">
                    <p>Stephanie Dusautoir <span>Directrice</span></p>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-content boxContainer">
            <p>Au Pays des comptines – © Copyright 2022, Tous droits réservés.</p>
            <p><a href="./legal-mentions.php">Mentions Légales</a></p>
        </div>
    </footer>
    <script src="./script/script-navbar.js"></script>
    <script src="./script/script-scroll.js"></script>
</body>

</html>