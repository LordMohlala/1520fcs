<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'kamogelomohlala66@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Message: $message.\n";
    
                      
    $to = "kamogelomohlala66@outlook.com";
    
    $headers = "From: $email_from \n";

    $headers = "Reply-To: $visitor_email \n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>