<?php
require "vendor/redbean/rb.php";
require "secure.php";

# Database
R::setup('mysql:host=%;dbname=physio',
        $database_username, $database_password);


$dynamicsitecontent = R::dispense("dynamicsitecontent");
$dynamicsitecontent["location"] = "Crowbar";
$dynamicsitecontent["phonenumber"] = "07000 000000";
$dynamicsitecontent["address1"] = "00 hghghghg st";
$dynamicsitecontent["address2"] = "ddhajbbh";
$dynamicsitecontent["address_city"] = "city";
$dynamicsitecontent["address_postcode"] = "AA00 0AB";

$id = R::store($dynamicsitecontent);


$login = R::dispense("login");
$login["phash"] = "$2y$10$3svhflKo4Sm8a5aEpQ3spe9EUiJTKRvPuMhJJjVEESqpRVs9k2fO6";
$loginid = R::store($login);



$login = R::load("login", 1);
echo password_verify ("", $login["phash"]);
