<?php
    $emailTo = "chumomega@gmail.com";
    $subject = "This is a test email";
    $body = "You deserve to be loved and shown respect. Also this is coming from a PHP app.";
    $headers = "From: chuma.okoro76@chumaokoro.com";

    if(mail($emailTo, $subject, $body, $headers)){
        echo "The email you sent went through";
    }
    else{
        echo "There was an error with the email you tried to send";
    }

?>