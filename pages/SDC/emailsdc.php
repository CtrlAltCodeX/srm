<?php


$ro = $_POST['ro'];
$qaso = $_POST['qaso'];
$id = $_POST['id'];
$hitype = $_POST['hitype'];

$emailist = "../components/emailist.php";
			
			include($emailist);
  $emailistqaso = "../components/emailistqaso.php";
			
			include($emailistqaso);

require('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Hazard with QASO";
$content = "<b>Bula QASO ".$qaso." and ".$ro." </br><br>You have a new Hazard Id: ".$id.", related to : ".$hitype." currently with ".$qaso." QASO pending risk Assessment</b>";
$mail->IsSMTP();
$mail->SMTPDebug = 3;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Port     = 587;  
$mail->Username = "safety";
$mail->Password = "safety18";
$mail->Host     = "10.99.101.23";
$mail->Mailer   = "smtp";
$mail->SetFrom("safety@fijiairports.com.fj", "Mr Safety");
$mail->AddReplyTo("safety@fijiairports.com.fj", "PHPPot");

if($ro=="HOP" || $ro=="EXECUTIVE" )
{
	$mail->AddAddress($roemail);
	$mail->AddAddress($roemailtwo);
	$mail->AddAddress("suniak@afl.com.fj");
}
else
{	
	$mail->AddAddress($roemail);
}
if($qaso=="ATSP")
{
	$mail->AddAddress($qasoemail);
	$mail->AddAddress($qasoemailtwo);
}
else
{	
	$mail->AddAddress($qasoemail);
}
$mail->AddAddress("shuyaibh@afl.com.fj");
$mail->AddAddress("safety@afl.com.fj");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>