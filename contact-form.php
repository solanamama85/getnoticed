<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email where the form submissions will be sent
    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email;

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "There was an error, please try again.";
    }
}
?>
