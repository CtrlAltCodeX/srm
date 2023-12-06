<?php


$id = $_POST['id'];
include '../../dbconfig.php';


$result = mysqli_query($db, "SELECT QASO FROM hazardreport WHERE HAZID='$id'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysqli_fetch_row($result);

$qaso = $row[0];



$emailistqaso = "../components/emailistqaso.php";

include($emailistqaso);

require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Hazard with QASO";
$content = "<b>Bula QASO " . $qaso . " </br><br>You have a closed Hazard Id: " . $id . ", Please conduct review for closure by logging in at: http://10.99.100.29/srm/index.html</b>";
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
$mail->Host     = "fijiairports.com.fj";
$mail->Mailer   = "smtp";
$mail->SetFrom("safety@fijiairports.com.fj", "Mr Safety");
$mail->AddReplyTo("safety@fijiairports.com.fj", "PHPPot");
if ($qaso == "ATSP") {
    $mail->AddAddress($qasoemail);
    $mail->AddAddress($qasoemailtwo);
} else {
    $mail->AddAddress($qasoemail);
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
