<?php

require 'functions.php';

$sendmail = false;
$success_send = false;
$error_send = false;

const NAME = 0;
const OBJET = 1;
const EMAIL = 2;
const MESSAGE = 3;


if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        if (isset($_POST['object']) && !empty($_POST['object'])) {
            if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                if (isset($_POST['message']) && !empty($_POST['message'])) {
                    $name = $_POST['name'];
                    $object = $_POST['object'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];

                    $pattern = '/[`#$%\^&*+=\[\]\;\/{}|\\"<>]/';

                    if (preg_match($pattern, $name)) {
                        $alert[NAME] = true;
                        $alert_msg = "Les caractères spéciaux sont intérdits.";
                    } else if (preg_match($pattern, $object)) {
                        $alert[OBJET] = true;
                        $alert_msg = "Les caractères spéciaux sont intérdits.";
                    } else if (preg_match($pattern, $email)) {
                        $alert[EMAIL] = true;
                        $alert_msg = "Les caractères spéciaux sont intérdits.";
                    } else if (preg_match($pattern, $message)) {
                        $alert[MESSAGE] = true;
                        $alert_msg = "Les caractères spéciaux sont intérdits.";
                    } else {
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
                                            <li style="margin: 0 0 10px 0;"><b>Nom et prénom</b> : ' . $name . '</li>
                                            <li style="margin: 0;"><b>Email</b> : ' . $email . '</li>
                                        </ul>

                                        <h2 style="font-size: 1.8em;">Message : </h2>
                                            <p style="font-size: 1.3em;">' . $message . '</p>
                                    </body>
                                </html>
                                ';

                        $headers[] = 'Content-type: text/html; charset=UTF-8';
                        $headers[] = "From: $email";

                        $sendmail = mail($to, $subject, $mailContent, implode("\r\n", $headers));

                        if ($sendmail) {
                            $success_send = true;
                        } else {
                            $error_send = true;
                        }
                    }
                } else {
                    $alert[MESSAGE] = true;
                    $alert_msg = "Veuillez saisir votre message.";
                }
            } else {
                $alert[EMAIL] = true;
                $alert_msg = "Veuillez saisir une adresse email valide.";
            }
        } else {
            $alert[OBJET] = true;
            $alert_msg = "Veuillez remplir ce champ";
        }
    } else {
        $alert[NAME] = true;
        $alert_msg = "Veuillez indiquer votre nom et prénom.";
    }
};

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Retrouvez les différentes informations sur notre établissement et contactez-nous pour toutes demandes.">
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
    <title>Au Pays des comptines - Contactez-nous</title>
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
        <section class="main-content boxContainer">
            <div class="contact-container">
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
                        <input type="text" name="name" <?php if (isset($alert[NAME]) && $alert[NAME]) {
                                                            echo "class = 'error'";
                                                        } ?>>
                        <span class="msg-error <?php if (isset($alert[NAME]) && $alert[NAME]) {
                                                    echo "visible";
                                                } ?>" id="MsgError0"><?php if (isset($alert_msg)) {
                                                                            echo $alert_msg;
                                                                        } ?></span>
                    </div>
                    <div class="input-bloc">
                        <label for="sujet">Sujet</label>
                        <input type="text" name="object" <?php if (isset($alert[OBJET]) && $alert[OBJET]) {
                                                                echo "class = 'error'";
                                                            } ?>>
                        <span class="msg-error <?php if (isset($alert[OBJET]) && $alert[OBJET]) {
                                                    echo "visible";
                                                } ?>" id="MsgError1"><?php if (isset($alert_msg)) {
                                                                            echo $alert_msg;
                                                                        } ?></span>
                    </div>

                    <div class="input-bloc">
                        <label for="emailAddress">Email</label>
                        <input type="text" name="email" <?php if (isset($alert[EMAIL]) && $alert[EMAIL]) {
                                                            echo "class = 'error'";
                                                        } ?>>
                        <span class="msg-error <?php if (isset($alert[EMAIL]) && $alert[EMAIL]) {
                                                    echo "visible";
                                                } ?>" id="MsgError2"><?php if (isset($alert_msg)) {
                                                                            echo $alert_msg;
                                                                        } ?></span>
                    </div>

                    <div class="input-msg-bloc">
                        <label for="message">Message</label>
                        <textarea name="message" <?php if (isset($alert[MESSAGE]) && $alert[MESSAGE]) {
                                                        echo "class = 'error'";
                                                    } ?>></textarea>
                        <span class="msg-error <?php if (isset($alert[MESSAGE]) && $alert[MESSAGE]) {
                                                    echo "visible";
                                                } ?>" id="MsgError3"><?php if (isset($alert_msg)) {
                                                                            echo $alert_msg;
                                                                        } ?></span>
                    </div>
                    <div class="submit-bloc">
                        <?php if ($success_send) : ?>
                            <p class="mail-success">Mail envoyé !</p>
                        <?php elseif ($error_send) : ?>
                            <p class="mail-error">Une erreur est survenue.<br />Veuillez réessayer.</p>
                        <?php else : ?>
                            <button type="submit" name="submit" id="submit">Envoyer <i class="fas fa-chevron-right send-arrow" id="send-arrow"></i></button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="footer-content boxContainer">
            <p>Au Pays des comptines – © Copyright 2022, Tous droits réservés.</p>
            <p><a href="./mentions-legales">Mentions Légales</a></p>
        </div>
    </footer>
    <script src="./script/script-contact.js"></script>
    <script src="./script/script-navbar.js"></script>
    <script src="./script/script-scroll.js"></script>
</body>

</html>