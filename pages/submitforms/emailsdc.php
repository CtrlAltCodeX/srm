<?php


$useremail = $_POST['useremail'];

require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Hazard";
$content = "<b>Bula Reporter</br><br>Your Hazard has been received. We thank you for your submission and assure you that your name will be confidential throughout the mitigation process. Do continue to submit more hazards.";
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

$mail->AddAddress($useremail);
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