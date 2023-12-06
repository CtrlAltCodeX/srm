<?php


$id = $_POST['id'];

include '../../dbconfig.php';
$query = "SELECT * FROM hazardreport  WHERE HAZID='$id'";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) 
{
	$useremail = $row['USERREPORTEDEMAIL'];	
	$relatedto = $row['HITYPE'];		
}
require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "Hazard with Risk Owner";
$content = "<b>Bula Reporter</br><br>Your Hazard related to, ".$relatedto." is currently with the Risk Owner pending mitigation";
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