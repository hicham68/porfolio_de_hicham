<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hichampro68@gmail.com";
    $headers = "De: ".$mailFrom;
    $txt = "Tu as reçu un mail de ".$name.".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
?>