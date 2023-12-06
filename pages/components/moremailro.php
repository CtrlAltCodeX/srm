<?php


$ro = $_POST['riskowner'];
$id = $_POST['morid'];


switch ($ro) {
    case "MAO":
        $roemail = "isaiar@fijiairports.com.fj";
        break;
    case "MNOS":
        $roemail = "vulas@fijiairports.com.fj";
        break;
    case "MBCW":
        $roemail = "manils@fijiairports.com.fj";
        break;
    case "HOP":
        $roemail = "ivanw@fijiairports.com.fj";
        $roemailtwo = "amits@afl.com.fj";
        break;
    case "EXECUTIVE":
        $roemail = "faizk@afl.com.fj";
        $roemailtwo = "iseit@afl.com.fj";
        break;
    case "MALOCS":
        $roemail = "pritir@fijiairports.com.fj";
        break;
    case "MANES":
        $roemail = "williamr@fijiairports.com.fj";
        break;
    case "MARFFS":
        $roemail = "losefoq@fijiairports.com.fj";
        break;
    case "MASS":
        $roemail = "mosesel@fijiairports.com.fj";
        break;
    case "MC":
        $roemail = "shalend@afl.com.fj";
        break;
    case "MEMS":
        $roemail = "waqat@fijiairports.com.fj";
        break;
    case "MFS":
        $roemail = "patrickm@fijiairports.com.fj";
        break;
    case "MPODC":
        $roemail = "rennya@afl.com.fj";
        break;
    case "MSRM":
        $roemail = "suniak@fijiairports.com.fj";
        break;
    case "OMOIA":
        $roemail = "vulas@afl.com.fj";
        break;
    case "OPS COORDINATOR":
        $roemail = "sumeets@fijiairports.com.fj";
        break;
    case "PAAE":
        $roemail = "ashleyk@afl.com.fj";
        break;
    case "SENIOR FINANCIAL ACCOUNTANT":
        $roemail = "rohitp@fijiairports.com.fj";
}



require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New MOR";
$content = "<b>Bula " . $ro . "</br><br>You have a new MOR with the ID " . $id . " for your perusal, please login to view the MOR</b>";
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
if ($ro == "HOP") {
    $mail->AddAddress($roemail);
    $mail->AddAddress($roemailtwo);
} else if ($ro == "EXECUTIVE") {
    $mail->AddAddress($roemail);
    $mail->AddAddress($roemailtwo);
    $mail->AddAddress("suniak@afl.com.fj");
} else {
    $mail->AddAddress($roemail);
}
$mail->AddAddress("sumeets@afl.com.fj");
$mail->AddAddress("safety@afl.com.fj");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if (!$mail->Send())
    echo "Problem on sending mail";
else
    echo "Mail sent";
