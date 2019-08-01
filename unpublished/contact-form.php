<?php
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $email_from = "Python Pro";
    $email_subject = "You have a new form submission from Python Pro";
    $email_body = "Name: $name.\n".
                    "Comapny: $company.\n".
                    "Email Address: $email.\n".
                    "Telephone number: $number\n".
                    "Message: $message.\n";
    
    $to = "info@pythonpro.co.uk";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("location: thankscontact");

?>