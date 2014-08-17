<?php

$first_name = "";
$surname_name = "";
$email = "";
$contact_number = "";
$contact = "";
$medicalaid = "";
$when = "";
$reason = "";

if (isset($_POST)) {
    if (array_key_exists('first_name', $_POST)) {
        $first_name = $_POST['first_name'];
    }
    if (array_key_exists('surname_name', $_POST)) {
        $surname_name = $_POST['surname_name'];
    }
    if (array_key_exists('email', $_POST)) {
        $email = $_POST['email'];
    }
    if (array_key_exists('contact_number', $_POST)) {
        $contact_number = $_POST['contact_number'];
    }
    if (array_key_exists('contact', $_POST)) {
        $contact = $_POST['contact'];
    }
    if (array_key_exists('medicalaid', $_POST)) {
        $medicalaid = $_POST['medicalaid'];
    }
    if (array_key_exists('when', $_POST)) {
        $when = $_POST['when'];
    }
    if (array_key_exists('reason', $_POST)) {
        $reason = $_POST['reason'];
    }
}


$to = "pieter.roodt@gmail.com";
$from = "dentist@smitwinkel.com";
$subject = "Nuwe Afspraak";
$message = " 
    Naam: $first_name 
    Van: $surname_name
    Email adres: $email
    Kontak nommer: $contact_number
    Kontak metode: $contact
    Mediese vonds: $medicalaid
    Datum: $when
    Rede: $reason    
";

$headers = 'From: dentist@smitwinkel.com' . "\r\n" .
        'Reply-To: dentist@smitwinkel.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


try {
    mail($to, $subject, $message, $headers);
    header('Location: ../success.php');
    die();
} catch (Exception $e) {
    header('Location: ../error.php');
    die();
}
?>

