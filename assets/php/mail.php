<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$email = $receive_email = $subject = $message = "";
$email_error = $receive_email_error = $subject_error = $message_error = "";


if (isset($_POST['send'])) {
    // Email
    if (empty($_POST["email"])) {
        $email_error = "Email is required!";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format!";
        }
    }

    // Receiver's mail

    if (empty($_POST["receive_email"])) {
        $receive_email_error = "Email is required!";
    } else {
        $receive_email = test_input($_POST["receive_email"]);
        $email_arr = explode(',',$receive_email);
        foreach($email_arr as $r_email):
        if (!filter_var($r_email, FILTER_VALIDATE_EMAIL)) {
            $receive_email_error = "Invalid receiver's mails!";
        }
        endforeach;
    }

    // Subject
    if (empty($_POST["subject"])) {
        $subject_error = "Subject is required!";
    } else {
        $subject = test_input($_POST["subject"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $subject)) {
            $subject_error = "Only letters and white space allowed";
        }
    }

    // Message
    if (empty($_POST['message'])) {
        $message = "";
    } else {
        $message = $_POST['message'];
    }

    $error = $email_error . $receive_email_error . $subject_error . $message_error;
    
    if (empty($error)) {
            //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'abiodunyusuf4@gmail.com'; //SMTP username
$mail->Password = 'clyzvxmdshpldrsd'; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
$mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom($email);
$email_arr = explode(',',$receive_email);
foreach($email_arr as $receive_email):
    $mail->addAddress($receive_email, 'Dahud Yusuf'); //Add a recipient
endforeach;

// $mail->addAddress('ellen@example.com'); //Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Attachments
// $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = ($email ." (".$subject.")");
$mail->Body = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

header("Location:  ./assets/php/response.php");
    }

}

// try {
//     echo 'Message has been sent';
// } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }