<?php
// Redirection automatique vers la partie front
header("Location: ../php/front/eco_ride_front.php");
exit;

?>

/*
//Mail
require 'php/include/phpMailer/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP
    $mail->SMTPDebug=4;
    $mail->isSMTP();
    $mail->Host = 'mail';  // Serveur SMTP
    //$mail->SMTPAuth = true;
    //$mail->Username = 'your_email@example.com';  // Votre email
    //$mail->Password = 'your_password';  // Votre mot de passe
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 1025;  // Port SMTP

    $mail->CharSet = 'UTF-8';  // CharSet recommandé pour les caractères spéciaux

    // Définir l'encodage du message (par défaut base64 ou quoted printable)
    $mail->Encoding = 'base64';  // Encoding des pièces jointes et du corps

    // Expéditeur
    $mail->setFrom('from@example.com', 'Mailer');

    // Destinataire
    $mail->addAddress('recipient@example.com', 'Joe User');

    // Sujet et corps du message
    $mail->Subject = 'Here is the subjectéèà';
    $mail->Body    = 'This is the HTML message body éèà<b>in bold!</b>';

    // Envoi de l'email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: $mail->ErrorInfo";
}

