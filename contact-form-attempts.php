<?php
    $msg = '';
    
    if(isset($_POST["submit"])){
        require "../PHPMailerAutoload.php";
        $mail = new PHPMailer;

        $mail->Host="a2plcpnl0717.prod.iad2.secureserver.net";
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure="tls";
        $mail->Username="info@brad-dunham.com";
        $mail->Password="GoatSkull666!";

        $mail->setFrom("bdunham484@gmail.com");
        $mail->addAddress("bdunham484@gmail.com");
        $mail->addReplyTo($_POST["email"],$_POST["name"]);

        $mail->isHTML(true);
        $mail->Subject="Form Submission: ".$_POST["subject"];
        $mail->Body="<h1 align=center>Name :".$_POST["name"]."<br>Email: ".$_POST["email"]."<br>Message: ".$_POST["message"]."</h1>";

        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
       
    }
?>

<?php

 

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'a2plcpnl0717.prod.iad2.secureserver.net';
    $mail->Port = 587;

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('from@example.com', 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('whoto@example.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?>
