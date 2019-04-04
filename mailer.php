<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$Name_WebForm    = $_POST['Name_WebForm'];
$Email_WebForm   = $_POST['Email_WebForm'];
$Message_WebForm = $_POST['Message_WebForm'];
$Phone_WebForm = $_POST['Phone_WebForm'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dustale@gmail.com';                 // SMTP username
    $mail->Password = 'l@n5yd18';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('dustale@gmail.com', 'Dustin');
    $mail->addAddress('nicolai@theoht.com', 'Nicolai');     // Add a recipient
    $mail->addAddress('dustin@theoht.com', 'Dustin');     // Add a recipient
    $mail->addAddress('davidmaidinamerica@gmail.com', 'David');     // Add a recipient
    $mail->addReplyTo($Email_WebForm, $Name_WebForm);
    //$mail->addCC('');
    //$mail->addBCC('');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'MaidInAmerica | Webform';
    $mail->Body    = '<div style="text-align:center;"><img src="http://theoht.com/mina/assets/img/mia-logo.png" alt="mia-logo" width="300px" height="" /></div><br />'.$Message_WebForm.'<br /> Call me Back Here : <a href="tel:'.$Phone_WebForm.'">'.$Phone_WebForm.'</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<h2 class="text-center">Message has been sent</h2><hr><h4>Thank you for reaching out, we will get back to you very soon.</h4><br> <p class="text-center"> To send another message click <a href=".#contact">here</a></p>';
} catch (Exception $e) {
    echo '<h3>Message could not be sent. Mailer Error: </h3>', $mail->ErrorInfo;
}