<?php


$message = $_POST['message'];


$emailist = "../components/emailist.php";
 
include($emailist);
  

require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Hazard with completed risk Assesment";
$content = "<b>Bula ".$ro."</br><br>You have a new hazard for your perusal, please login at : http://10.99.100.29/srm/index.html to view the hazard</b>";
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
$mail->Username = "Shuyaibh";
$mail->Password = "safety60";
$mail->Host     = "10.99.101.23";
$mail->Mailer   = "smtp";
$mail->SetFrom("shuyaibh@afl.com.fj", "Shuyaib Hamid");
$mail->AddReplyTo("shuyaibh@afl.com.fj", "PHPPot");
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
$mail->AddAddress("shuyaibh@afl.com.fj");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) 
	echo "Problem on sending mail";
else 
echo "Mail sent";
?>