<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'functions.php';
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
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
                        $to = "equipe@aupaysdescomptines.fr";
                        $subject = $_POST['object'];
                        $mailContent = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
                        <head>
                            <!--[if gte mso 9]>
                            <xml>
                                <o:OfficeDocumentSettings>
                                <o:AllowPNG/>
                                <o:PixelsPerInch>96</o:PixelsPerInch>
                                </o:OfficeDocumentSettings>
                            </xml>
                            <![endif]-->
                            <meta http-equiv='Content-type' content='text/html; charset=utf-8' />
                            <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
                            <meta http-equiv='X-UA-Compatible' content='IE=edge' />
                            <meta name='format-detection' content='date=no' />
                            <meta name='format-detection' content='address=no' />
                            <meta name='format-detection' content='telephone=no' />
                            <meta name='x-apple-disable-message-reformatting' />
                            <!--[if !mso]><!-->
                            <link href='https://fonts.googleapis.com/css?family=Yantramanav:300,400,500,700' rel='stylesheet' />
                            <!--<![endif]-->
                            <title>Mot de pas oublié</title>
                            <!--[if gte mso 9]>
                            <style type='text/css' media='all'>
                                sup { font-size: 100% !important; }
                            </style>
                            <![endif]-->
                            
    
                            <style type='text/css' media='screen'>
                                /* Linked Styles */
                                body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none }
                                a { color:#2f774a; text-decoration:none }
                                p { padding:0 !important; margin:0 !important } 
                                img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
                                .mcnPreviewText { display: none !important; }
    
                                        
                                /* Mobile styles */
                                @media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
                                    u + .body .gwfw { width:100% !important; width:100vw !important; }
    
                                    .m-shell { width: 100% !important; min-width: 100% !important; }
                                    
                                    .m-center { text-align: center !important; }
                                    
                                    .center { margin: 0 auto !important; }
                                    .nav { text-align: center !important; }
                                    .text-top { line-height: 22px !important; }
                                    
                                    .td { width: 100% !important; min-width: 100% !important; }
                                    .bg { height: auto !important; -webkit-background-size: cover !important; background-size: cover !important; }
    
                                    .m-br-15 { height: 15px !important; }
                                    .p30-15 { padding: 30px 15px !important; }
                                    .p0-15-30 { padding: 0px 15px 30px 15px !important; }
                                    .pb40 { padding-bottom: 40px !important; }
                                    .pb0 { padding-bottom: 0px !important; }
                                    .pb20 { padding-bottom: 20px !important; }
    
                                    .m-td,
                                    .m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }
    
                                    .m-height { height: auto !important; }
    
                                    .m-block { display: block !important; }
    
                                    .fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }
    
                                    .column,
                                    .column-top,
                                    .column-dir,
                                    .column-bottom,
                                    .column-dir-top,
                                    .column-dir-bottom { float: left !important; width: 100% !important; display: block !important; }
    
                                    .content-spacing { width: 15px !important; }
                                }
                            </style>
                        </head>
                        <body class='body' style='padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none;'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#f4f4f4' class='gwfw'>
                                <tr>
                                    <td align='center' valign='top'>
                                        <!-- Main -->
                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                            <tr>
                                                <td align='center' style='padding-bottom: 40px;' class='pb0'>
                                                    <!-- Shell -->
                                                    <table width='650' border='0' cellspacing='0' cellpadding='0' class='m-shell'>
                                                        <tr>
                                                            <td class='td' style='width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;'>
                                                                <!-- Top Bar -->
                                                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                    <tr>
                                                                        <td style='padding: 60px 40px 35px 40px;' class='p30-15'>
                                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                <tr>
                                                                                    <th class='column-top' width='204' style='font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;'>
                                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                        </table>
                                                                                    </th>
                                                                                    <th style='padding-bottom: 20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;' class='column' width='1'></th>
                                                                                    <th class='column' style='font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;'>
                                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- END Top Bar -->
    
                                                                <!-- Header -->
                                                                <table width='100%' border='0' cellspacing='0' cellpadding='40' bgcolor='#ffffff' style='border-radius: 6px 6px 0px 0px;'>
                                                                    <tr>
                                                                        <td style=''>
                                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                <tr>
                                                                                    <center>
                                                                                        <th class='column' width='118' style='font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;'>
                                                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                                <tr>
                                                                                                    <td class='img m-center' style='font-size:0pt; line-height:0pt; text-align:right;'><a href='#' target='_blank'><img src='https://www.aupaysdescomptines.fr/media/images/logo.jpg' width='120' height='58' border='0' alt='' /></a></td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </th>
                                                                                    </center>
                                                                                    <th class='column' style='font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;'>
                                                                                        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                            <tr>
                                                                                                <td align='center'>
                                                                                                    <table border='0' cellspacing='0' cellpadding='0' class='center' style='text-align:center;'>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </th>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                                <!-- END Header -->
                                                                
                                                                <!-- Article Image On The Left -->
                                                                <div mc:repeatable='Select' mc:variant='Article Image On The Left'>
                                                                    <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#ffffff'>
                                                                        <tr>
                                                                            <td style='padding: 0px 40px 40px 40px;' class='p0-15-30'>
                                                                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                    <tr>
                                                                                        <th class='column' style='font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;'>
                                                                                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                                                <tr>
                                                                                                    <td class='h2' style='padding-bottom: 20px; color:#444444; font-family:Yantramanav, Arial, sans-serif; font-size:40px; line-height:46px; text-align:center; font-weight:300;'>Message reçu <span class='m-hide'><br /></span>depuis votre site web</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class='text' style='padding-bottom: 5px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:center; min-width:auto !important;'>Nom et prénom : $name</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class='text' style='padding-bottom: 25px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:center; min-width:auto !important;'>Mail : $email</td>
                                                                                                </tr>
                                                                                                
                                                                                                <tr>
                                                                                                    <td class='text' style='padding-bottom: 25px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:center; min-width:auto !important;'>Message : $message</td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <!-- END Article Image On The Left -->
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- END Shell -->
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- END Main -->
                                    </td>
                                </tr>
                            </table>
                        </body>
                        </html>";


                        try {
                            //Server settings


                            // for debug -> $mail->SMTPDebug = SMTP::DEBUG_SERVER;                
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'mail.aupaysdescomptines.fr';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'equipe@aupaysdescomptines.fr';                     //SMTP username
                            $mail->Password   = '';                               //SMTP password
                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom($email);
                            $mail->addAddress($to);
                            $mail->AddCC("tdnet59@gmail.com");

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = $_POST['object'];
                            $mail->Body    = $mailContent;
                            $mail->AltBody = "Email recu de votre site web de la part de $name via le mail, $email. Voici le message : $message";

                            $mail->send();
                            $success_send = true;
                        } catch (Exception $e) {
                            //Mailer Error : $mail->ErrorInfo
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