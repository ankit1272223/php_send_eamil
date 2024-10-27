<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Require autoload if using Composer (change path if required)
require 'vendor/autoload.php';

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';                 // Gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'ankitomprakashtiwari2001@gmail.com';  // Sender's email
    $mail->Password = 'plor ozyu wkru vjxi'; // Sender's email password or app-specific password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Sender and recipient settings
    $mail->setFrom('ankitomprakashtiwari2001@gmail.com', 'Ankit Tiwari');
    $mail->addAddress('ankittiwari77759@gmail.com', 'Ankit Tiwari'); // Receiver's email and name

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = '<h1>Hello, Ankit!</h1><p>This is a test email sent using PHPMailer.</p>';
    $mail->AltBody = 'This is the plain text version of the email content';

    // Send the email
    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
