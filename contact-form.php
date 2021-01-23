<?php
    $name = $_POST["name"];
    $visitor_email = $_POST["email"];
    $visitor_website = $_POST["website"];
    $start_date = $_POST["start"];
    $end_date = $_POST["end"];
    $budget = $_POST["budget"];
    $services_needed = $_POST["services"];
    $message = $_POST["message"];

    $email_from = "bdunham484@gmail.com";

    $email_subject = "Web Dev Inquiry";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".                      
                        "User Website: $visitor_website.\n". 
                        "Start Date: $start_date.\n". 
                        "End Date: $end_date.\n". 
                        "Budget: $budget.\n". 
                        "Services Needed: $services_needed.\n". 
                        "User Message: $message.\n"; 
    

     $to = "bdunham484@gmail.com";
     
     $headers = "From: $email_from \r\n";

     $headers .= "Reply-To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);

     header("Location: home.html");


?>
