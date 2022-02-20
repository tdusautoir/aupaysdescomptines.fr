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
    <section class="main-content">
        <div class="content-container">
            <p>Pour tous renseignements ou toutes demandes particulières, utilisez ce formulaire ou contactez-nous via : </p>
            <ul>
                <li><i class="fas fa-phone-square-alt"></i><span>03 20 59 34 35</span></li>
                <li><i class="fas fa-envelope-square"></i><span>aupaysdescomptines@gmail.com</span></li>
                <li><i class="fas fa-map-marker-alt"></i><span>185 Rue de l'Ancienne Poste, 59310 Beuvry-la-Forêt</span></li>
            </ul>
        </div>
        <div class="form-container">
            <h1 class="blue-title titleform">Formulaire de contact</h1>
            <form action="contact.php" method="POST" id="contact">
                <div class="input-bloc">
                    <label for="name">Nom et prénom</label>
                    <input type="text" name="firstname">
                    <span class="msg-error" id="MsgError0">Les caractères spéciaux sont intérdits.</span>
                </div>
                <div class="input-bloc">
                    <label for="sujet">Sujet</label>
                    <input type="text" name="object">
                    <span class="msg-error" id="MsgError1">Les caractères spéciaux sont intérdits.</span>
                </div>

                <div class="input-bloc">
                    <label for="emailAddress">Email</label>
                    <input type="email" name="email" required>
                    <span class="msg-error" id="MsgError2">Les caractères spéciaux sont intérdits.</span>
                </div>

                <div class="input-msg-bloc">
                    <label for="message">Message</label>
                    <textarea name="message"></textarea>
                    <span class="msg-error" id="MsgError3">Les caractères spéciaux sont intérdits.</span>
                </div>

                <div class="submit-bloc">
                    <button type="submit" name="submit" id="submit">Envoyer <i class="fas fa-chevron-right send-arrow" id="send-arrow"></i></button>
                </div>
            </form>
        </div>
    </section>
    <script src="script-contact.js"></script>
    <footer class="footer-contact">
        <div class="footer-content">
            <p>Au Pays des comptines – © Copyright 2021, Tous droits réservés.</p><a href="">Mentions Légales</p>
        </div>
    </footer>
</body>
</html>

<?php
if(isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $to = "tdnet59@gmail.com";
    $subject = $_POST['object'];
    $mailContent = '
    <html>
        <head>
            <title>email reçu de votre site web</title>
        </head>
        <body>
            <div align="center" margin-bottom="30px">
                <img src="https://hoodspot.fr/uploads/801/091/80109161200029/logo.jpg" alt="Logo aupaysdescomptines.fr" width="200px">
                <h1 align="center">Vous avez reçu un message depuis votre site web</h1>
            </div>
            <h2 style="font-size: 1.8em;">De la part de : </h2>
            <ul style="list-style: none; font-size: 1.3em; margin: 0; padding: 0;">
                <li style="margin: 0 0 10px 0;"><b>Nom et prénom</b> : '.$name.'</li>
                <li style="margin: 0;"><b>Email</b> : '.$email.'</li>
            </ul>

            <h2 style="font-size: 1.8em;">Message : </h2>
                <p style="font-size: 1.3em;">'.$message.'</p>
        </body>
    </html>
    ';
    
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = "From: $email";

    mail($to, $subject, $mailContent, implode("\r\n", $headers));
    echo 'TEST';
};
?>