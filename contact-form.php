<?php

    // $result="";
    if(isset($_POST["submit"])){
        require "phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        $mail->Host="a2plcpnl0717.prod.iad2.secureserver.net";
        $mail->Port=465;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure="ssl";
        $mail->Username="_mainaccount@brad-dunham.com";
        $mail->Password="iambraddunham666";

        $mail->setFrom($_POST["email"],$_POST["name"]);
        $mail->addAddress("bdunham484@gmail.com");
        $mail->addReplyTo($_POST["email"],$_POST["name"]);

        $mail->isHTML(true);
        $mail->Subject="Form Submission: ".$_POST["subject"];
        $mail->Body="<h1 align=center>Name :".$_POST["name"]."<br>Email: ".$_POST["email"]."<br>Message: ".$_POST["message"]."</h1>";

        // if(!$mail->send()){
        //     $result="Something went wrong. Please try again.";
        // }
        // else{
        //     $result="Thanks ".$-POST["name"]." for contacting us. We'll get back to you soon!";
        // }
    }
?>
