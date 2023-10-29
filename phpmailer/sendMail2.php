<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//
//require_once('phpmailer/PHPMailer.php');
//require_once('phpmailer/SMTP.php');
//require_once('phpmailer/Exception.php');
//
//function sendmail($email, $subject, $message): void
//{
//    try
//    {
//        $mail = new PHPMailer(true);
//
//        // Server settings for SMTP2GO
//        $mail->SMTPDebug = 0;
//        $mail->isSMTP();
//        $mail->Host       = 'mail.smtp2go.com';
//        extracted($mail, $email, $subject, $message);
//        echo 'Message has been sent';
//    }
//    catch (Exception $e)
//    {
//        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//    }
//}
