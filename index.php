<?php
require "vendor/autoload.php";

$m = new Mustache_Engine(array(
'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
));

$location="Crowborough";

$home["title"] = "Home";
$home["site_name"] = "Diana Beaven Physiotherapy - BETA";
$home["navbutton"][0]["title"] = "Home";
$home["navbutton"][0]["is_active"] = "active";
$home["navbutton"][0]["raisin"] = "(current)";
$home["navbutton"][1]["title"] = "About Me";
$home["navbutton"][2]["title"] = "Physiotherapy";
$home["navbutton"][3]["title"] = "Aquatic Therapy";
$home["navbutton"][4]["title"] = "Contact";
$home["navbutton"][5]["title"] = "Articles";
$home["heading_row"][0]["bs"] = "What We Do";
$home["card"][0]["card_title"] = "Treatment";
$home["card"][0]["card_text0"] = "Conditions treated include:";
$home["card"][0]["list"][0]["list_content"] = "Chronic pain & fatigue";
$home["card"][0]["list"][1]["list_content"] = "Fibromyalgia";
$home["card"][0]["list"][2]["list_content"] = "Overbreathing & panic attacks";
$home["card"][0]["list"][3]["list_content"] = "Osteoarthritis";
$home["card"][0]["list"][4]["list_content"] = "Tension";
$home["card"][0]["list"][5]["list_content"] = "Trauma from abuse";
$home["card"][0]["list"][6]["list_content"] = "Hypermobility";
$home["card"][1]["card_title"] = "Chartered Physio";
$home["card"][1]["card_text"] = "Professional registration information";
$home["card"][1]["button"][0]["button_name"] = "About Me";
$home["card"][2]["card_title"] = "Contact us";
$home["card"][2]["card_text0"] = "You can contact us on:";
$home["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$home["card"][2]["list"][1]["list_content"] = "07000 000001";
$home["card"][2]["list"][2]["list_content"] = "Or contact us through the form on this site.";
$home["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$home["card"][2]["button"][0]["button_name"] = "Contact Form";
$home["footer"][0]["website_name"] = "Diana Beaven Physiotherapy";

$bodyModel = $home;

$template = "home";
$page = $m->loadTemplate($template);
echo $page->render($bodyModel);

