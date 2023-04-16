<?php
require 'phpmailer/PHPMailerAutoload.php';

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $mail = new PHPMailer;

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';  // Specify SMTP server
  $mail->SMTPAuth = true;
  $mail->Username = '';  // SMTP username
  $mail->Password = '';  // SMTP password
  $mail->SMTPSecure = 'tls';   // Encryption protocol
  $mail->Port = 587;

  $mail->setFrom($email, $name);
  $mail->addAddress('');  // Replace with your own email address
  $mail->Subject = 'New message from ' . $name;
  $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message sent successfully!';
  }
}
?>
