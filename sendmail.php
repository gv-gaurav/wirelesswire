<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $to = "gauravdhangar12@gmail.com";  // <-- mail submission
    $subject = "New Form Submission";
    
    $message = "
    Name: $name
    Phone: $phone
    Address: $address
    ";

    $headers = "From: no-reply@yourwebsite.com";

    if(mail($to, $subject, $message, $headers)){
        echo "success";
    } else {
        echo "error";
    }
}

?>
