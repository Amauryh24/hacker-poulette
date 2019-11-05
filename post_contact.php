<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$errors = [];


if ($firstname == "") {
    $errors['firstname'] = 'Veuillez remplir votre prénom';
}
if ($lastname == "") {
    $errors['lastname'] = 'Veuillez remplir votre nom';
}
if ($email == "") {
    $errors['email'] = 'Veuillez remplir votre email';
}

if (!empty($errors)) {
    session_start();
    $_SESSION['errors'] = $errors;
    header('Location: contact.php');
} else {
    echo('ça fonctionne');
}

var_dump($errors);
die();


// //Create a new PHPMailer instance
// $mail = new PHPMailer(true);


// $mail->IsSMTP();
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls';
// $mail->Host = "smtp.gmail.com";
// $mail->Port = 587;
// $mail->IsHTML(true);

// //Username to use for SMTP authentication
// $mail->Username = "henrottayamaury@gmail.com";
// $mail->Password = "jenaimarre";

// //Set who the message is to be sent from
// $mail->setFrom($email, $firstname . ' ' . $lastname);

// //Set who the message is to be sent to
// $mail->addAddress($email, 'amaury henrottay');
// //Set the subject line
// $mail->Subject = $subject;

// //convert HTML into a basic plain-text alternative body
// $mail->msgHTML($message);

// //Replace the plain text body with one created manually
// $mail->AltBody = 'This is a plain-text message body';

// //send the message, check for errors
// if (!$mail->send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;

// } else {
//     echo "Message sent!";
// }