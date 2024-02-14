<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hack.jerry26@gmail.com';
        $mail->Password = 'etapijvdmncrsfav';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $dest=$_SESSION['mail'];
        // Sender and recipient details
        $mail->setFrom('hack.jerry26@gmail.com', 'Fuzail Raza');
        $mail->addAddress($dest);
        $msg='Customer Name' . $_SESSION['username'] .'<br>' . 'Phone Number : ' . $_SESSION['phone'] . '<br>'.'Address' . $_SESSION['address'] . '<br>' . 'Products Quantity : ' . $_SESSION['product'];  
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Order Confirmation';
        $mail->Body = $msg;

        // Send the email
        $mail->send();
        
        echo "<script>alert('ORDER DETAILS SENT'); window.location.href = 'shop.php';</script>";

    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }

?>
