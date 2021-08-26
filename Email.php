<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['comments'];
$to = "Hariharans22@gmail.com";
$subject = $_POST['subject'];
$bdytxt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: AsthraGfx@asthragfx.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$bdytxt,$headers);
}
//redirect
header("Location:thankyou.html");
?>