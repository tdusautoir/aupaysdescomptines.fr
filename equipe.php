<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/apdc_favicon.ico"/>
    <script src="https://kit.fontawesome.com/49dbd7732f.js" crossorigin="anonymous"></script>
    <title>Au Pays des comptines</title>
</head>
<body>
    <header>
        <img src="image/logolarge.jpg" alt="Logo Au Pays des comptines" class="logo">
            <ul class="nav-menu">
                <?= nav_menu(); ?>
            </ul>
    </header>
    <section class="section-profile-card">
        <div>
            <div class="card-profile"><img src="image/profiles/test.jpg"><p>Stephanie Dusautoir <span>Directrice</span></p></div>
            <div class="card-profile"><img src="image/profiles/test.jpg"><p>Stephanie Dusautoir <span>Directrice</span></p></div>
        </div>
        <div>
            <div class="card-profile"><img src="image/profiles/test.jpg"><p>Stephanie Dusautoir <span>Directrice</span></p></div>
            <div class="card-profile"><img src="image/profiles/test.jpg"><p>Stephanie Dusautoir <span>Directrice</span></p></div>
            <div class="card-profile"><img src="image/profiles/test.jpg"><p>Stephanie Dusautoir <span>Directrice</span></p></div>
        </div>
    </section>
</body>
</html>