<?php
require "vendor/autoload.php";
require "vendor/redbean/rb.php";
require "secure.php";
# Login
$user_id = "dianabeaven";
# Database
R::setup('mysql:host=databoose.db;dbname=physio',
        $database_username, $database_password);
$dynamicsitecontent = R::load("dynamicsitecontent", 7);

# Mustache
$m = new Mustache_Engine(array(
'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')));


$defaultpage["site_name"] = "Diana Beaven Physiotherapy";
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
$defaultpage["footer"][0]["website_name"] = "Diana Beaven Physiotherapy";

$defaultinternalpage["site_name"] = "Diana Beaven Physiotherapy";
$defaultinternalpage["navbutton"][0]["title"] = "Home";
$defaultinternalpage["navbutton"][0]["url"] = "/home";
$defaultinternalpage["navbutton"][1]["title"] = "Details";
$defaultinternalpage["navbutton"][1]["url"] = "/control/details";
$defaultinternalpage["navbutton"][2]["title"] = "Articles";
$defaultinternalpage["navbutton"][2]["url"] = "/control/articles";
$defaultinternalpage["footer"][0]["website_name"] = "Diana Beaven Physiotherapy";



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
$home["card"][1]["card_text"] = "Diana Beaven is a licensed to practice physiotherapy by the Chartered Society of Physiotherapists (registration number 039058) and by the The Council for Professions Supplementary to Medicine (registration number PH27644).";
$home["card"][1]["button"][0]["button_name"] = "About Me";
$home["card"][2]["card_title"] = "Contact";
$home["card"][2]["card_text0"] = "You can contact us on:";
$home["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$home["card"][2]["list"][1]["list_content"] = $dynamicsitecontent["phonenumber"];
$home["card"][2]["list"][2]["list_content"] = "Or contact us through the form on this site.";
$home["card"][2]["card_text"] = "We are currently located in ". $dynamicsitecontent["location"]. ".";
$home["card"][2]["button"][0]["button_name"] = "Contact Form";


$about["title"] = "About Me";
$about = array_merge($defaultpage, $about);
$about["navbutton"][1]["is_active"] = "active";
$about["navbutton"][1]["raisin"] = "(current)";
$about["content"][0]["bs"] = "About Me";
$about["content"][0]["bs_text"] = "I enjoy working with people with long term health conditions which in addition to the physical challenges can be accompanied by low mood and a sense of hopelessness. Pain may increase fear and tension. I have qualifications in Aquatic Therapy and experience treating a wide range of conditions in the water.";
$about["content"][0]["bs_text2"] = "After gaining my physiotherapy qualifications at Addenbrookes Hospital, Cambridge, my first job was in Cape Town where patients often walked barefoot to Groote Schuur hospital. Although most of my practice has been in England, I have also worked in Spain. With 30 years experience across different fields, and a specialism in mental health and more recently aquatic therapy, I am at my best working with the body and mind together.";
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
$about["content"][0]["content1"][1]["bs_smaller_text"] = "
You do not need a referral by a doctor to receive treatment. However, if you are seeking reimbursement from private health insurance companies you need to check if your insurer needs a GP/consultant referral. I maintain a close relationship with my patient's doctors — both GPs and consultants — and unless requested not to, will write to them outlining the condition, progress etc.";
$about["content"][0]["content1"][2]["bs_smaller"] = "Professional registration information";
$about["content"][0]["content1"][2]["bs_smaller_text"] = "Diana Beaven is a licensed to practice physiotherapy by the Chartered Society of Physiotherapists (registration number 039058) and by the The Council for Professions Supplementary to Medicine (registration number PH27644).";
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
$about["card"][1]["card_text"] = "Diana Beaven is a licensed to practice physiotherapy by the Chartered Society of Physiotherapists (registration number 039058) and by the The Council for Professions Supplementary to Medicine (registration number PH27644).";
$about["card"][1]["button"][0]["button_name"] = "About Me";
$about["card"][2]["card_title"] = "Contact us";
$about["card"][2]["card_text0"] = "You can contact us on:";
$about["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$about["card"][2]["list"][1]["list_content"] = $dynamicsitecontent["phonenumber"];
$about["card"][2]["list"][2]["list_content"] = "Or contact me through the form on this site.";
$about["card"][2]["card_text"] = "We are currently located in ". $dynamicsitecontent["location"]. ".";
$about["card"][2]["button"][0]["button_name"] = "Contact Form";

$physio["title"] = "Physiotherapy";
$physio = array_merge($defaultpage, $physio);
$physio["content"][0]["bs"] = "Physiotherapy";
$physio["content"][0]["bs_text"] = "I am able to help people by working with the body and mind together and working in partnership with them to help develop skills to manage their condition better. I incorporate approaches from the Alexander technique to influence postural habits, biomechanics and movement patterns. I have a diploma in dance and movement therapy so may, where appropriate, use creative movement.";
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
$physio["card"][1]["card_text"] = "Diana Beaven is a licensed to practice physiotherapy by the Chartered Society of Physiotherapists (registration number 039058) and by the The Council for Professions Supplementary to Medicine (registration number PH27644).";
$physio["card"][1]["button"][0]["button_name"] = "About Me";
$physio["card"][2]["card_title"] = "Contact us";
$physio["card"][2]["card_text0"] = "You can contact us on:";
$physio["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$physio["card"][2]["list"][1]["list_content"] = $dynamicsitecontent["phonenumber"];
$physio["card"][2]["list"][2]["list_content"] = "Or contact me through the form on this site.";
$physio["card"][2]["card_text"] = "We are currently located in ". $dynamicsitecontent["location"]. ".";
$physio["card"][2]["button"][0]["button_name"] = "Contact Form";

$aquatic["title"] = "Aquatic";
$aquatic = array_merge($defaultpage, $aquatic);
$aquatic["content"][0]["bs"] = "Aquatic Therapy";
$aquatic["content"][0]["bs_text"] = "I have qualifications in Aquatic Therapy and experience treating a wide range of conditions in the water.";
$aquatic["content"][0]["content1"][0]["bs_smaller"] = "Aquatic Therapy can be effective in treating:";
$aquatic["content"][0]["content1"][0]["bs_smaller_text"] = "<ul>
<li>Back pain</li>
<li>Arthritis</li>
<li>Joint stiffness</li>
<li>Multiple joint problems</li>
<li>Post-operative weakness</li>
<li>Neurological weakness and muscle shortening</li>
</ul>

<h3>It carries several advantages over land based physiotherapy</h3>
<ul>
<li>Water provides a low-gravity, stress free environment in which to excercise. Treatment following fracture is hence started much earlier than on land.</li>
<li>Water assists movement, so even the weakest of muscles can be encouraged to work.</li>
<li>More than one joint can be treated at the same time which provides a comprehensive approach to arthritic and neurological management.</li>
<li>Return to sport and work is accelerated as exercise tolerance and general fitness is integrated into treatment regimes.</li>
<li>Balance re-education in the elderly is facilitated without fear of injury from falling.</li>
</ul>
<h3>Prevention and Maintenance</h3>
<ul>
<li>Conditions such as Osteoporosis benefit from hydrotherapy as an environment in which to exercise safely, strengthen bones and muscles hence reducing the likelihood of fractures.</li>
<li>Exercise programmes are usually individualised to promote continued exercise after treatment has finished. This maximises the benefits gained from treatment. Groups including Ai Chi are available to facilitate this.</li>
</ul>
<h3>Water Confidence</h3>
<p>It is not necessary to be able to swim to gain the benefits of Hydrotherapy. The treatment is usually in a warm water pool (31-35 degrees). Access is by steps, or when available chair or bed hoist, allowing people with  all degrees of disability to enter/exit the pool. Sometimes exercises can be given in a cooler pool if a person can maintain their temperature through intermittent swimming and enter via the means available.</p>
<h3>Other water-based therapies</h3>
<p>I may include two other therapies conducted in quiet hydrotherapy pools, watsu and craniosacral therapy which use the lightness of the body in water to free spinal vertebra, and elongate muscles in ways not possible on land. Watsu is a method suited to people comfortable lying in water and being held by the therapist.</p>
<p>The aquatic therapist moves a person gently and rhythmically through flowing patterns of  movement  which mobilise tight soft tissues, stretching, massaging and relieving pain. These rhythmic, dance-like movements of watsu are performed in harmony with the breath which can have a calming and unifying effect on the body and mind. A range of emotions can be released in this process of continuous flow. Experiencing watsu can leave people feeling freer, more flexible and calmer.</p>
<p>During craniosacral therapy, there is a release of tight connective tissues (fascia) and a balancing of craniosacral rhythms. This may help in conditions which effect the spine, migraines, whip lash, birth and spinal cord injury, autism, sinus pain, sleep dysfunction and trauma to the head, chronic fatigue, fibromyalgia, ADHD and post traumatic stress disorder. These approaches can be combined together or incorporated into an aquatic session along side active exercise.</p>";
$aquatic["content"][0]["visualcontent"][0]["title"] = "Watsu in Video";
$aquatic["content"][0]["visualcontent"][0]["prettything"] = '<iframe width="400" height="260" src="https://www.youtube.com/embed/NQ_M1ZWopTA" frameborder="0" allowfullscreen></iframe>';
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
$aquatic["card"][1]["card_text"] = "Diana Beaven is a licensed to practice physiotherapy by the Chartered Society of Physiotherapists (registration number 039058) and by the The Council for Professions Supplementary to Medicine (registration number PH27644).";
$aquatic["card"][1]["button"][0]["button_name"] = "About Me";
$aquatic["card"][2]["card_title"] = "Contact us";
$aquatic["card"][2]["card_text0"] = "You can contact us on:";
$aquatic["card"][2]["list"][0]["list_content"] = "<a href='contact@dianabeavenphysiotherapy.com'>Email</a>";
$aquatic["card"][2]["list"][1]["list_content"] = $dynamicsitecontent["phonenumber"];
$aquatic["card"][2]["list"][2]["list_content"] = "Or contact us through the form on this site.";
$aquatic["card"][2]["card_text"] = "We are currently located in ". $dynamicsitecontent["location"]. ".";
$aquatic["card"][2]["button"][0]["button_name"] = "Contact Form";

$contact["title"] = "Contact";
$contact = array_merge($defaultpage, $contact);
$contact["content"][0]["bs"] = "Contact Me";
$contact["content"][0]["bs_text"] = "You can contact me by phone, email, or using the webform below. I work from ". $dynamicsitecontent["location"]. ". Find me at:\n". $dynamicsitecontent["address1"]. "\n ". $dynamicsitecontent["address2"];
$contact["card"][0]["card_title"] = "Contact Form";
$contact["card"][0]["button"][0]["button_name"] = "Submit";

$login["title"] = "Login";
$login = array_merge($defaultpage, $login);
$login["card"][0]["card_title"] = "Login";
$login["card"][0]["card_subtitle"] = "Enter your password to log in to the admin area of the site";
$login["card"][0]["button"][0]["button_name"] = "Submit";

$logging["title"] = "Logging on";
$logging = array_merge($defaultpage, $logging);
$logging["content"][0]["bs_text"] = "You are being logged on";

$control["title"] = "Control Panel";
$control = array_merge($defaultinternalpage, $control);
$control["content"][0]["bs"] = "Welcome to the Control Panel";
$control["content"][0]["bs_text"] = "You can edit your location, address, phone number and other contact information <a href='/control/details'>here</a>";
$control["content"][0]["content1"][0]["bs_smaller_text"] = "Or, you can add articles to the articles section <a href='/control/articles'>here</a>";

$details["title"] = "Edit Details";
$details = array_merge($defaultinternalpage, $details);
$details["content"][0]["bs"] = "Details";
$details["content"][0]["bs_text"] = "You can edit your location, address, phone number and other contact information using the forms below, and then clicking submit. Click <a target='_blank' href='/contact'>here</a> to see the original.";
$details["card"][0]["card_title"] = "Please enter changes:";
$details["button"][0]["button_name"] = "Submit";



$error["title"] = "Error";
$error = array_merge($defaultpage, $error);
$error["card"][0]["card_title"] = "404 Error";
$error["card"][0]["card_text"] = "The page you are looking for is currently undergoing treatment and will recover shortly. Please use the menu to find what you are looking for.";




$currentpage = $_SERVER['REQUEST_URI'];

if($currentpage=="/home" || $currentpage == "/"){
	if(isset($_POST["name"])&& isset($_POST["email"])&& isset($_POST["message"])){
		$to = "email1";
		$name = $_POST["name"];
		$email = $_POST["email"];
		$headers = 'From: contact@dianabeavenphysiotherapy.com' . "\r\n" .
    		"Reply-To:".$_POST["email"];
		$message = "Message from " .$email. "\n" .$_POST["message"];
		$subject = "Message from " .$name;
		mail($to, $subject, $message, $headers);
		$to = "email2";
		mail($to, $subject, $message, $headers);
		$to = "email3";
		mail($to, $subject, $message, $headers);
		$to = "email3";
		mail($to, $subject, $message, $headers);
		$home["email_sent"][0]["type"] = "alert";
		$home["email_sent"][0]["message"] = "Your message has been sent. Diana Beaven Physiotherapist will get back to you shortly.";
	}
	$bodyModel = $home;
	$template = "home";
} elseif ($currentpage=="/about"){
	$bodyModel = $about;
	$template = "home";
} elseif ($currentpage=="/physio"){
	$bodyModel = $physio;
	$template = "home";
} elseif ($currentpage=="/aquatic"){
	$bodyModel = $aquatic;
	$template = "home";
} elseif ($currentpage=="/contact"){
	$bodyModel = $contact;
	$template = "form";
} elseif (preg_match("/\/article\/.+/",$currentpage)){
	$bodyModel = $articles;
	echo("IT WORKS.");
} elseif ($currentpage=="/login"){
  if(isset($_POST["password"])){
    $login = R::load("login", 1);
    if(password_verify ($_POST["password"], $login["phash"])){
      session_start(['cookie_lifetime' => 3600]);
      header("Location: /logging");
    } else {
      header("Location: /login");
    }
  }
  $bodyModel = $login;
  $template = "login";
} elseif ($currentpage=="/logging"){
	$bodyModel = $logging;
	$template = "home";
  $user = R::load("user", 1);
  $user["sessionid"] = $_COOKIE["PHPSESSID"];
  R::store($user);
  header("Location: control");
} elseif ($currentpage=="/control"){
  $user = R::load("user", 1);
  if($_COOKIE["PHPSESSID"]==$user["sessionid"]){
    $bodyModel = $control;
    $template = "control";
  } else {
    echo "You are not logged in.";
    $bodyModel = $login;
    $template = "login";
  }
} elseif ($currentpage=="/control/details"){
  $user = R::load("user", 1);
  if(isset($_COOKIE["PHPSESSID"])){
    if($_COOKIE["PHPSESSID"]==$user["sessionid"]){
      if(isset($_POST["location"])|| isset($_POST["phonenumber"])){
        $dynamicsitecontent = R::load("dynamicsitecontent", 7);
        $dynamicsitecontent["location"] = $_POST["location"];
        $dynamicsitecontent["phonenumber"] = $_POST["phonenumber"];
        $dynamicsitecontent["address1"] = $_POST["address1"];
        $dynamicsitecontent["address2"] = $_POST["address2"];
        $dynamicsitecontent["address_city"] = $_POST["address_city"];
        $dynamicsitecontent["address_postcode"] = $_POST["address_postcode"];
        R::store($dynamicsitecontent);
        $details["database_updated"][0]["type"] = "alert";
    		$details["database_updated"][0]["message"] = "The database has been updated.";
        $bodyModel = $details;
        $template = "control";
      } else {
        $bodyModel = $details;
        $template = "control";
      }
    }
  } else {
    echo "You are not logged in.";
    $bodyModel = $login;
    $template = "login";
  }
} else {
	$bodyModel = $error;
	$template = "home";
}


$page = $m->loadTemplate($template);
echo $page->render($bodyModel);
