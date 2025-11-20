

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars($_POST['name']);
    $practice = htmlspecialchars($_POST['practice']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $message  = htmlspecialchars($_POST['message']);

    $to = "zain.ali231453@gmail.com"; 
    $subject = "VA Landing Page  Form Submission";
    $body = "Name: $name\nPractice Name: $practice\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
}
?>

