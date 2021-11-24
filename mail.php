<?php
//get data from form  

$name = $_POST['name'];
$num = $_POST['num'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$post = $_POST['post'];

$to = "wafi15072000@gmail.com";
$subject = "Mail From client";
$txt ="Name = ". $name . 
      "\r\n  Num = " . $num . 
      "\r\n Address =" . $address 
      "\r\n  State = " . $state .
      "\r\n  City = " . $city .
      "\r\n  Post = " . $post .
       ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank.html");
?>