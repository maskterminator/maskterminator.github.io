<?php
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $emailForm = $_POST["email"];
    $subject = $_POST ['subject'];
    $message = $_POST["message"];

    $mailTo = "johnbalen13@gmail.com";
    $headers = "From:" .$emailForm;
    $txt = "You have a message " . $name . ".\n\n" . $message;

    mail($mailTo,$name,$txt,$headers);

    header("Location: index.html?MessageSent");  
}
?>