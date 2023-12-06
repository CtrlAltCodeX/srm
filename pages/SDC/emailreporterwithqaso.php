<?php


$id = $_POST['id'];

include '../../dbconfig.php';
$query = "SELECT * FROM hazardreport  WHERE HAZID='$id'";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) 
{
	$useremail = $row['USERREPORTEDEMAIL'];	
	
}
require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "Hazard with QASO";
$content = "<b>Bula Reporter</br><br>Your Hazard is currently with the QASO pending risk assessment";
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

$mail->AddAddress($useremail);
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