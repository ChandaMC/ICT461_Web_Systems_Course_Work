<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Course Work\vendor\autoload.php'; // Make sure to include the PHPMailer library

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $fullName = $_POST["fullName"];
    $contactNumber = $_POST["contactNumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Generate a verification token (you can use any method you prefer)
    try {
        $verificationToken = bin2hex(random_bytes(16));
    } catch (Exception $e) {
        // Handle token generation error
        $verificationToken = ""; // For example, generate a token using sha1(time())
    } catch (\Exception $e) {
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Set up the SMTP configuration
    $smtpUsername = "chandamartin187@gmail.com";
    $smtpPassword = "";
    $smtpHost = "smtp.gmail.com";
    $smtpPort = 587;

    // Create connection
    $conn = new mysqli("localhost", "chanda", "Chanda@187.", "ict461");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO Users (Username, Password, Email, FullName, ContactNumber, VerificationToken) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $hashedPassword, $email, $fullName, $contactNumber, $verificationToken);

    if ($stmt->execute()) {
        // Use PHPMailer to send the email
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Username = $smtpUsername;
            $mail->Password = $smtpPassword;
            $mail->SMTPSecure = 'tls';
            $mail->Host = $smtpHost;
            $mail->Port = $smtpPort;

            $mail->setFrom($smtpUsername);
            $mail->addAddress($email);
            $mail->Subject = "Account Verification";
            $mail->Body = "Click the following link to verify your account: http://yourwebsite.com/verify.php?token=$verificationToken";

            if ($mail->send()) {
                echo "Registration successful. Please check your email for verification.";
            } else {
                echo "Error sending verification email. " . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            echo "Mailer Error: " . $e->getMessage();
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
