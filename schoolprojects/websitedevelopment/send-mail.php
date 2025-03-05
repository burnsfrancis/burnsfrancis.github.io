<?php

// Form script that collects data and sends an email, incase I decide to start hosting on private server.
// 
// Aware it's not very secure I am.
//
// Currently not used by anything.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comment = htmlspecialchars($_POST['text']);

    // Config
    $to = "temp@mail.com";
    $subject = "Mail from El Tio project";
    $message = "Name: $name\nEmail: $email\n\nComment:\n$comment";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your feedback has been sent successfully!";
    } else {
        echo "There was an error sending your feedback. Please try again later.";
    }
}
?>
