<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $medicine = htmlspecialchars($_POST['medicine']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $address = htmlspecialchars($_POST['address']);

    // Here you can add code to save the order to a database or send a confirmation email, etc.

    // After processing the order, display the success message
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hospital Management System - Order Submitted</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <header>
            <h1>Order Submitted</h1>
        </header>
        <main>
            <p>Thank you for your order. Your medicine will be delivered to the address provided.</p>
        </main>
        <footer>
            <p>&copy; 2024 Hospital Management System</p>
        </footer>
    </body>
    </html>";
}
?>
