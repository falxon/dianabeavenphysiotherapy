<?php

$to = "emberashdown@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$message = "Message from " .$email. " \n" .$_POST["message"];
$subject = "Message from" .$name;
mail($to, $subject, $message);



echo($name."\n".$email."\n".$message);
