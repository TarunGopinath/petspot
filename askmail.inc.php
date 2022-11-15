<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';

if(isset($_POST['send'])) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'saltandpeppercuisine6@gmail.com';
    $mail->Password = 'coqxfpzkjzdkqbvl';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 490;

    $mail->setFrom('saltandpeppercuisine6@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = "Thank you for your query";
    $mail->Body = "Thank you for your interest in PetSpot! We'll get back to you shortly!";
    $mail->send();

    echo '
    <script>
    alert("Sent Successfully");

    </script>
    ';
}