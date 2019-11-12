<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// sanitize
$firstname = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$subject = $_POST['subject'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

$errors = [];


// validation

if ($firstname == "") {
    $errors['firstname'] = 'Veuillez remplir votre prénom';
}
if ($lastname == "") {
    $errors['lastname'] = 'Veuillez remplir votre nom';
}
if ($email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Veuillez remplir un email valide';
}

if ($message == "") {
    $errors['message'] = 'Veuillez remplir votre message';
}

session_start();

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    
    header('Location: contact.php');
} else {
    $_SESSION['success'] = 1;
    header('Location: contact.php');


    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'henrottayamaury@gmail.com';                     // SMTP username
        $mail->Password   = 'hackerpoulette';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('henrottayamaury@gmail.com', 'amaury henrottay');
        $mail->addAddress($email, $firstname . ' ' . $lastname);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}