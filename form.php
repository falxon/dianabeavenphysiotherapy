<?php

$to = "emberashdown@gmail.com";
$name = $_GET["name"];
$email = $_GET["email"];
$message = $_GET["message"];
$subject = "Message from" .$name;
mail($to, $subject, $message);