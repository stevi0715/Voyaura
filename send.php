<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email
    $to = "louissa@loufindstravel.co.uk"; 
    $subject = "New Travel Enquiry";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $body);

    // Store email in mailing list
    $file = fopen("mailinglist.txt", "a");
    fwrite($file, $email . "\n");
    fclose($file);

    header("Location: thankyou.html");
    exit();
}
?>
