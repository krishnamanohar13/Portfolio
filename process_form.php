<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "sativillimanohar26@gmail.com"; // Your email address
    $subject = "Contact Form Submission";
    $body = "Email: $email\nPhone Number: $phone\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "<script>alert('Thank you for your message. We will get back to you soon.');</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
    }
}
?>
