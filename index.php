<?php
require "vendor/autoload.php";

$m = new Mustache_Engine(array(
'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
));

$location="Crowborough";

$home["title"] = "Home";
$home["site_name"] = "Diana Beaven Physiotherapy";
$home["navbutton"][0]["title"] = "Home";
$home["navbutton"][0]["is_active"] = "active";
$home["navbutton"][0]["raisin"] = "(current)";
$home["navbutton"][1]["title"] = "About Me";
$home["navbutton"][2]["title"] = "Physiotherapy";
$home["navbutton"][3]["title"] = "Aquatic Therapy";
$home["navbutton"][4]["title"] = "Contact";
$home["navbutton"][5]["title"] = "Articles";
$home["heading_row"][0]["bs"] = "What We Do";
$home["card"][0]["card_title"] = "some tony joke about fish";
$home["card"][0]["list"][0]["list_content"] = "strong and stable";
$home["card"][0]["list"][1]["list_content"] = "fascism";
$home["card"][0]["card_text"] = "things things things";
$home["card"][1]["card_title"] = "some tory joke";
$home["card"][1]["list"][0]["list_content"] = "strong and stable";
$home["card"][1]["list"][1]["list_content"] = "fascism";
$home["card"][1]["card_text"] = "things things things";
$home["card"][1]["button"][0]["button_name"] = "Tighten our belts!";
$home["card"][2]["card_title"] = "Contact us";
$home["card"][2]["card_text0"] = "You can contact us on:";
$home["card"][2]["list"][0]["list_content"] = "info@dianabeavenphysiotherapy.com";
$home["card"][2]["list"][1]["list_content"] = "07000 000001";
$home["card"][2]["list"][2]["list_content"] = "Or contact us through this site";
$home["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$home["card"][2]["button"][0]["button_name"] = "Contact us";
$home["footer"][0]["website_name"] = "Diana Beaven Physiotherapy";

$bodyModel = $home;

$template = "home";
$page = $m->loadTemplate($template);
echo $page->render($bodyModel);

