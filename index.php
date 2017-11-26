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
$home["card"][2]["card_title"] = "Contact us";
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
$about["content"][0]["bs_text"] = "Information about Diana Beaven";
$about["content"][0]["content1"][0]["bs_smaller"] = "Conditions Treated";
$about["content"][0]["content1"][0]["bs_smaller_text"] = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.";
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
$about["card"][2]["list"][2]["list_content"] = "Or contact us through the form on this site.";
$about["card"][2]["card_text"] = "We are currently located in ". $location. ".";
$about["card"][2]["button"][0]["button_name"] = "Contact Form";

$physio["title"] = "Physiotherapy";
$physio = array_merge($defaultpage, $physio);
$physio["content"][0]["bs"] = "Physio";

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
} elseif (preg_match("/\/article\/.+/",$currentpage)){
	$bodyModel = "sdklfjdkfjdlkfj";
	echo("IT WORKS.");
} else {
	$bodyModel = $error;
}


$template = "home";
$page = $m->loadTemplate($template);
echo $page->render($bodyModel);

