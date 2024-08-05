<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can add code to save the data to a database or send an email, etc.

    // After processing the form, display the success message
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hospital Management System - Feedback</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <header>
            <h1>Feedback Submitted</h1>
        </header>
        <main>
            <p>Thank you for your feedback, $name. Your message has been successfully submitted.</p>
        </main>
        <footer>
            <p>&copy; 2024 Hospital Management System</p>
        </footer>
    </body>
    </html>";
}
?>
