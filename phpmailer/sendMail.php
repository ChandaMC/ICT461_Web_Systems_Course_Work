<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require_once('PHPMailer.php');
	require_once('SMTP.php');
    require_once('Exception.php');
	
	
function sendmail($email,$subject,$message): void
{
	try 
	{
		//Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug =  0;//SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.smtp2go.com';                     //Set the SMTP server to send through
        extracted($mail, $email, $subject, $message);

        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

/**
 * @param PHPMailer $mail
 * @param $email
 * @param $subject
 * @param $message
 * @return void
 * @throws Exception
 */
function extracted(PHPMailer $mail, $email, $subject, $message): void
{
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'Chanda';                     //SMTP username
    $mail->Password = '4826TstNn00LMLJX';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('202001198@mu.edu.zm', 'Apple Heaven');
    //$mail->addAddress('joe@example.net', 'CBU');     //Add a recipient
    $mail->addAddress($email);               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    //$mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;//'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
}