<?php
    $name = $_Post["name"];
    $visitor_email = $_Post["email"];
    $message = $_Post["message"];

    $email_from = "bdunham484@gmail.com";

    $email_subject = "Web Dev Inquiry";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    

     $to = "bdunham484@gmail.com";
     
     $headers = "From: $email_from \r\n";

     $headers .= "Reply-To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);

     header("Location: home.html");



?>