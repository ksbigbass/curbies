<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $package = htmlspecialchars($_POST['package']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "ksbigbass+curbies@gmail.com";
    $subject = "New Curbies.net Inquiry from $name";
    $body    = "Name: $name\nEmail: $email\nAddress: $address\nPackage: $package\nMessage: $message";

    mail($to, $subject, $body);
    echo "Thank you for contacting us!";
} else {
    echo "Something went wrong.";
}
?>
