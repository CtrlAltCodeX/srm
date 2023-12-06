<?php


$ro = $_POST['rotransfer'];
$id = $_POST['id'];

$emailist = "../components/emailist.php";

include($emailist);



require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Tranferred Item";
$content = "<b>Bula " . $ro . " </br><br>You have a new tranferred Item. Login at : http://10.200.36.29:8081/srm  to accept</b>";
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
$mail->Host     = "smtp.fijiairports.com.fj";
$mail->Mailer   = "smtp";
$mail->SetFrom("safety@fijiairports.com.fj", "Mr Safety");
$mail->AddReplyTo("safety@fijiairports.com.fj", "PHPPot");
if ($ro == "HOP" || $ro == "EXECUTIVE") {
    $mail->AddAddress($roemail);
    $mail->AddAddress($roemailtwo);
} else {
    $mail->AddAddress($roemail);
}
$mail->AddAddress("sumeets@fijiairports.com.fj");
$mail->AddAddress("safety@afl.com.fj");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if (!$mail->Send())
    echo "Problem on sending mail";
else
    echo "Mail sent";
