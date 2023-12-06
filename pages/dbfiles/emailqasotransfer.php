<?php


$id = $_POST['id'];
$qaso = $_POST['qasoransfer'];



  $emailistqaso = "../components/emailistqaso.php";
			
			include($emailistqaso);
 


require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "Transferred Hazard";
$content = "<b>Bula QASO ".$qaso." </br><br>You have a Transferred Hazard , Please login at : http://10.99.100.29/srm/index.html to view the hazard</b>";
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

if($qaso=="ATSP")
{
	$mail->AddAddress($qasoemail);
	$mail->AddAddress($qasoemailtwo);
}
else
{	
	$mail->AddAddress($qasoemail);
}
$mail->AddAddress("sumeets@fijiairports.com.fj");
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