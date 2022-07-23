<?php
if(isset()$_POST['submit-button w-button']){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $nameFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "kontakt@ruschke-stefan.de";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an E-Mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}