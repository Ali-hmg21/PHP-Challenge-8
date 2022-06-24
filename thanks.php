<?php
$Sujets = array( "Choix1" => "Choix N°1", "Choix2" => "Choix N°2", "Choix3" => "Choix N°3");

$user_name = $_POST['user_name'];
$user_firstname = $_POST['user_firstname'];
$Sujet = $_POST['choix'];
$user_email = $_POST['user_email']; //filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL);
$user_phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$err = '';

if (empty($user_name)) {
    $err .= "name is required. ";
}
if (empty($user_firstname)) {
    $err .= "Firstname is required. ";
}
if (empty($user_email)) {
    $err .= "Email is required. ";
} elseif (filter_var($user_email, FILTER_VALIDATE_EMAIL) === false) {
    $err .= "Email is not valid. ";
}
if (empty($user_phone)) {
    $err .= "Telephone is required. ";
}
if (empty($message)) {
    $err .= "Message is required. ";
}

if (empty($err)) {
    echo 'Merci ', $user_name, ' ', $user_firstname, ' de nous avoir contacté à propos de ', $Sujet,'.<br>Un de nos conseillers vous contactera soit à l’adresse ', $user_email, ' ou par téléphone au ', $user_phone, ' dans les plus brefs délais pour traiter votre demande: <br>', $message;
} else {
    echo $err;
}

?>