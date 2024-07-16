<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Message from Portfolio Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Message sending failed. Please try again later.');</script>";
    }
}
?>
