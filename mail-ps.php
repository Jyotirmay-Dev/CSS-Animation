<?php

//get data from form

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "jyotirmay.dev2016@gmail.com";

$subject = "Mail From Personal Website [JD]"
$txt = "First Name = ".$firstname."\r\nLast Name = ".$lastname."\r\nEmail = ".$email."\r\nPhone = ".$phone."\r\nSubject = ".$subject."\r\nMessage = ".$message;

$headers = "From: noreply@jyotirmaydev.com";

if($email!=NULL){
    mail($to,$subject,$txt,$header);
    header("location:thankyou.html");
}

//redirect


?>
