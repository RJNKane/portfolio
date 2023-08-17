<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["demo-name"];
    $email = $_POST["demo-email"];
    $category = $_POST["demo-category"];
    $priority = $_POST["demo-priority"];
    $copy = isset($_POST["demo-copy"]) ? "Yes" : "No";
    $message = $_POST["demo-message"];

    $to = "kane_rachel_89@hotmail.co.uk"; // Your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email";

    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Category: $category\n";
    $messageBody .= "Priority: $priority\n";
    $messageBody .= "Copy of Email: $copy\n\n";
    $messageBody .= "Message:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>