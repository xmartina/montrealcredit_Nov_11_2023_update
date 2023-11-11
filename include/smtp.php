<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.montrealcredit.online"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@montrealcredit.online"; // Change Email Address
        $mail->Password = '@SECmontrealcredit1'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@montrealcredit.online','Montreal Credit Bank'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@montrealcredit.online", "Montreal Credit Bank"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>