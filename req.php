<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                          // Send using SMTP
    $mail->Host       = 'smtp-relay.brevo.com';               // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                // Enable SMTP authentication
    $mail->Username   = 'milindvkumar31@gmail.com';          // SMTP username
    $mail->Password   = 'cSOR0FWpysIwtkZn'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                 // TCP port to connect to

    // Recipients
    $mail->setFrom('milindvkumar31@gmail.com', 'admin');
    $mail->addAddress('blackopsthyran@gmail.com', 'Joe User');        // Add a recipient
    $mail->addReplyTo('blackopsthyran@gmail.com', 'admin');

    // Content
    $mail->isHTML(true);                                     // Set email format to HTML
    $mail->Subject = 'REQUEST FOR BLOOD';
    $mail->Body    = 'Someone requested for your blood <b>please sign in !</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // Enable verbose debug output for troubleshooting
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Send the email
    $mail->send();
    echo '<script>alert("request has bees sent to the donor user");</script>';
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
