<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49dbd7732f.js" crossorigin="anonymous"></script>
    <script src="script-navbar.js"></script>
    <script src="script-slider.js"></script>
    <title>Au Pays des comptines</title>
</head>
<body>
    <header>
        <img src="image/logo.jpg" alt="Logo Au Pays des comptines" class="logo">
            <ul class="nav-menu">
                <?= nav_menu(); ?>
            </ul>
    </header>
</body>
</html>