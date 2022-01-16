<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$mobile= $_POST['mobilenumber'];
$company= $_POST['companyname'];
$message= $_POST['enquiry'];


$to = "kedarnathpandya@gmail.com";
$subject = "Mail From portfolio website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Mobile = " . $mobile . "\r\n  Company Name = " . $company .   "\r\n Enquirey =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
// header("Location:thankyou.html");
?>