<?php

$to = "emberashdown@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$subject = "Message from" .$name;
mail($to, $subject, $message);