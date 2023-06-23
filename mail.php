<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$telefon= $_POST['telefon'];
$website= $_POST['website'];
$message= $_POST['message'];
$to = "info@sharkcybertech.com";
$subject = "Mail From sharkcybertech";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."telefon = ". $telefon . "\r\n "\r\n "Website = " . $website . "\r\n Message =" . $message;
$headers = "From: noreply@sharkcybertech.com" . "\r\n" .
"CC: info@sharkcybertech.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>