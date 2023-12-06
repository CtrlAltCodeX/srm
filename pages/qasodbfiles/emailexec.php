<?php



require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "High Risk Hazard with completed risk Assesment ";
$content = "<b>Bula Executives,</br><br>There is a new Hazard with High Risk in the system for your information. Please log in at : http://10.99.100.29/srm/index.html to view the hazard.</b>";
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
$mail->AddAddress("faizk@afl.com.fj");
$mail->AddAddress("iseit@afl.com.fj");
$mail->AddAddress("suniak@afl.com.fj");
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