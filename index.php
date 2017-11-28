<?php
require "vendor/autoload.php";

$m = new Mustache_Engine(array(
'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
));


$location="Crowborough";

$defaultpage["site_name"] = "Diana Beaven Physiotherapy - BETA";
$defaultpage["navbutton"][0]["title"] = "Home";
$defaultpage["navbutton"][0]["url"] = "/home";
$defaultpage["navbutton"][1]["title"] = "About Me";
$defaultpage["navbutton"][1]["url"] = "/about";
$defaultpage["navbutton"][2]["title"] = "Physiotherapy";
$defaultpage["navbutton"][2]["url"] = "/physio";
$defaultpage["navbutton"][3]["title"] = "Aquatic Therapy";
$defaultpage["navbutton"][3]["url"] = "/aquatic";
$defaultpage["navbutton"][4]["title"] = "Contact";
$defaultpage["navbutton"][4]["url"] = "/contact";
$defaultpage["navbutton"][5]["title"] = "Articles";
$defaultpage["navbutton"][5]["url"] = "/articles";
$defaultpage["footer"][0]["website_name"] = "Diana Beaven Physiotherapy";



$home["title"] = "Home";
$home = array_merge($defaultpage, $home);
$home["navbutton"][0]["is_active"] = "active";
$home["navbutton"][0]["raisin"] = "(current)";
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
$home["card"][2]["card_title"] = "Contact";
$home["card"][2]["card_text0"] = "You can contact us on:";
$home["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$home["card"][2]["list"][1]["list_content"] = "07000 000001";
$home["card"][2]["list"][2]["list_content"] = "Or contact us through the form on this site.";
$home["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$home["card"][2]["button"][0]["button_name"] = "Contact Form";


$about["title"] = "About Me";
$about = array_merge($defaultpage, $about);
$about["navbutton"][1]["is_active"] = "active";
$about["navbutton"][1]["raisin"] = "(current)";
$about["content"][0]["bs"] = "About Me";
$about["content"][0]["bs_text"] = "I enjoy working with people with long term health conditions which in addition to the physical challenges can be accompanied by low mood and a sense of hopelessness. Pain may increase fear and tension. I am able to help people by working with the body and mind together and working in partnership with them to help develop skills to manage their condition better. I incorporate approaches from the Alexander technique to influence postural habits, biomechanics and movement patterns. I have a diploma in dance and movement therapy so may, where appropriate, use creative movement. I have qualifications in Aquatic Therapy and experience treating a wide range of conditions in the water.";
$about["content"][0]["bs_text2"] = "[Information about qualifications]";
$about["content"][0]["content1"][0]["bs_smaller"] = "Conditions Treated include:";
$about["content"][0]["content1"][0]["bs_smaller_text"] = "
<ul>
<li>Chronic Pain</li>
<li>Chronic Fatigue</li>
<li>Osteoarthritis</li>
<li>Tension</li>
<li>Physical and sexual abuse trauma</li>
<li>Overbreathing and panic attacks</li>
<li>Back Pain</li>
<li>Fibromyalgia</li>
<li>Hypermobility</li>
</ul>";
$about["content"][0]["content1"][1]["bs_smaller"] = "Professional registration information";
$about["content"][0]["content1"][1]["bs_smaller_text"] = "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
$about["content"][0]["visualcontent"][0]["title"] = "Image";
$about["content"][0]["visualcontent"][0]["prettything"] = '<iframe width="400" height="260" src="https://www.youtube.com/embed/sTSA_sWGM44" frameborder="0" allowfullscreen></iframe>';
$about["content"][0]["visualcontent"][0]["text"] = "Lorem ipsum...";
$about["card"][0]["card_title"] = "Treatment";
$about["card"][0]["card_text0"] = "Conditions treated include:";
$about["card"][0]["list"][0]["list_content"] = "Chronic pain & fatigue";
$about["card"][0]["list"][1]["list_content"] = "Fibromyalgia";
$about["card"][0]["list"][2]["list_content"] = "Overbreathing & panic attacks";
$about["card"][0]["list"][3]["list_content"] = "Osteoarthritis";
$about["card"][0]["list"][4]["list_content"] = "Tension";
$about["card"][0]["list"][5]["list_content"] = "Trauma from abuse";
$about["card"][0]["list"][6]["list_content"] = "Hypermobility";
$about["card"][1]["card_title"] = "Chartered Physio";
$about["card"][1]["card_text"] = "Professional registration information";
$about["card"][1]["button"][0]["button_name"] = "About Me";
$about["card"][2]["card_title"] = "Contact us";
$about["card"][2]["card_text0"] = "You can contact us on:";
$about["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$about["card"][2]["list"][1]["list_content"] = "07000 000001";
$about["card"][2]["list"][2]["list_content"] = "Or contact me through the form on this site.";
$about["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$about["card"][2]["button"][0]["button_name"] = "Contact Form";

$physio["title"] = "Physiotherapy";
$physio = array_merge($defaultpage, $physio);
$physio["content"][0]["bs"] = "Physiotherapy";
$physio["content"][0]["bs_text"] = "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
$physio["content"][0]["content1"][0]["bs_smaller"] = "Lorem ipsum";
$physio["content"][0]["content1"][0]["bs_smaller_text"] = "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequphysio";
$physio["content"][0]["visualcontent"][0]["title"] = "Image";
$physio["content"][0]["visualcontent"][0]["prettything"] = '<iframe width="400" height="260" src="https://www.youtube.com/embed/sTSA_sWGM44" frameborder="0" allowfullscreen></iframe>';
$physio["content"][0]["visualcontent"][0]["text"] = "Lorem ipsum...";
$physio["card"][0]["card_title"] = "Treatment";
$physio["card"][0]["card_text0"] = "Conditions treated include:";
$physio["card"][0]["list"][0]["list_content"] = "Chronic pain & fatigue";
$physio["card"][0]["list"][1]["list_content"] = "Fibromyalgia";
$physio["card"][0]["list"][2]["list_content"] = "Overbreathing & panic attacks";
$physio["card"][0]["list"][3]["list_content"] = "Osteoarthritis";
$physio["card"][0]["list"][4]["list_content"] = "Tension";
$physio["card"][0]["list"][5]["list_content"] = "Trauma from abuse";
$physio["card"][0]["list"][6]["list_content"] = "Hypermobility";
$physio["card"][1]["card_title"] = "Chartered Physio";
$physio["card"][1]["card_text"] = "Professional registration information";
$physio["card"][1]["button"][0]["button_name"] = "About Me";
$physio["card"][2]["card_title"] = "Contact us";
$physio["card"][2]["card_text0"] = "You can contact us on:";
$physio["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$physio["card"][2]["list"][1]["list_content"] = "07000 000001";
$physio["card"][2]["list"][2]["list_content"] = "Or contact me through the form on this site.";
$physio["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$physio["card"][2]["button"][0]["button_name"] = "Contact Form";

$aquatic["title"] = "Aquatic";
$aquatic = array_merge($defaultpage, $aquatic);
$aquatic["content"][0]["bs"] = "Aquatic Therapy";
$aquatic["content"][0]["bs_text"] = "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?";
$aquatic["content"][0]["content1"][0]["bs_smaller"] = "Lorem ipsum";
$aquatic["content"][0]["content1"][0]["bs_smaller_text"] = "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequphysio";
$aquatic["content"][0]["visualcontent"][0]["title"] = "Image";
$aquatic["content"][0]["visualcontent"][0]["prettything"] = '<iframe width="400" height="260" src="https://www.youtube.com/embed/sTSA_sWGM44" frameborder="0" allowfullscreen></iframe>';
$aquatic["content"][0]["visualcontent"][0]["text"] = "Lorem ipsum...";
$aquatic["card"][0]["card_title"] = "Treatment";
$aquatic["card"][0]["card_text0"] = "Conditions treated include:";
$aquatic["card"][0]["list"][0]["list_content"] = "Chronic pain & fatigue";
$aquatic["card"][0]["list"][1]["list_content"] = "Fibromyalgia";
$aquatic["card"][0]["list"][2]["list_content"] = "Overbreathing & panic attacks";
$aquatic["card"][0]["list"][3]["list_content"] = "Osteoarthritis";
$aquatic["card"][0]["list"][4]["list_content"] = "Tension";
$aquatic["card"][0]["list"][5]["list_content"] = "Trauma from abuse";
$aquatic["card"][0]["list"][6]["list_content"] = "Hypermobility";
$aquatic["card"][1]["card_title"] = "Chartered Physio";
$aquatic["card"][1]["card_text"] = "Professional registration information";
$aquatic["card"][1]["button"][0]["button_name"] = "About Me";
$aquatic["card"][2]["card_title"] = "Contact us";
$aquatic["card"][2]["card_text0"] = "You can contact us on:";
$aquatic["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$aquatic["card"][2]["list"][1]["list_content"] = "07000 000001";
$aquatic["card"][2]["list"][2]["list_content"] = "Or contact us through the form on this site.";
$aquatic["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$aquatic["card"][2]["button"][0]["button_name"] = "Contact Form";

$contact["title"] = "Contact";
$contact = array_merge($defaultpage, $contact);



$error["title"] = "Error";
$error = array_merge($defaultpage, $error);
$error["card"][0]["card_title"] = "404 Error";
$error["card"][0]["card_text"] = "The page you are looking for is currently undergoing treatment and will recover shortly. Please use the menu to find what you are looking for.";

$articles["article"][0]["url"] = "bees-cancer";
$articles["article"][0]["title"] = "Bees give you cancer.";
$articles["article"][0]["content"] = "A study at the university of Toronto, Mexico has suggested that bee stings delivered to jam sandwiches could be the cause of ALL cancer in humans and kittens.";
$articles["article"][0]["url"] = "/hetero-swans";
$articles["article"][1]["title"] = "Some swans are heteros";
$articles["article"][1]["content"] = "A survey of swans in North Wales has suggested that Swans are not - as we originally believed - entirely a homosexual species.";

$currentpage = $_SERVER['REQUEST_URI'];


if($currentpage=="/home" || $currentpage == "/"){
	$bodyModel = $home;
} elseif ($currentpage=="/about"){
	$bodyModel = $about;
} elseif ($currentpage=="/physio"){
	$bodyModel = $physio;
} elseif ($currentpage=="/aquatic"){
	$bodyModel = $aquatic;
} elseif ($currentpage=="/contact"){
	$bodyModel = $contact;
} elseif (preg_match("/\/article\/.+/",$currentpage)){
	$bodyModel = "sdklfjdkfjdlkfj";
	echo("IT WORKS.");
} else {
	$bodyModel = $error;
}


$template = "home";
$page = $m->loadTemplate($template);
echo $page->render($bodyModel);

