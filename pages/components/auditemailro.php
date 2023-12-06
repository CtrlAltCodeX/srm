<?php

$id = $_POST['id'];
include '../../dbconfig.php';
$query = "SELECT DISTINCT(RISKOWNER) FROM recommendations  WHERE ID='$id' AND STATUS='OPEN'";
mysqli_query($db, $query) or die(mysqli_error($db));
$result = mysqli_query($db, $query);

$riskowners = array();
while ($row = mysqli_fetch_array($result)) {
	$riskowners2[] = $row['RISKOWNER'];
}
foreach ($riskowners2 as $riskowners2) {
	switch ($riskowners2) {
		case "MAO":
			$emaillist[] = "isaiar@fijiairports.com.fj";
			break;
		case "MNOS":
			$emaillist[] = "vulas@fijiairports.com.fj";
			break;
		case "MBCW":
			$emaillist[] = "manils@fijiairports.com.fj";
			break;
		case "HOP":
			$emaillist[] = "ivanw@fijiairports.com.fj";
			$roemailtwo = "amits@afl.com.fj";
			break;
		case "EXECUTIVE":
			$emaillist[] = "faizk@afl.com.fj";
			$emaillist[] = "iseit@afl.com.fj";
			break;
		case "MALOCS":
			$emaillist[] = "pritir@fijiairports.com.fj";
			break;
		case "MANES":
			$emaillist[] = "williamr@fijiairports.com.fj";
			break;
		case "MARFFS":
			$emaillist[] = "losefoq@fijiairports.com.fj";
			break;
		case "MASS":
			$emaillist[] = "mosesel@fijiairports.com.fj";
			break;
		case "MC":
			$emaillist[] = "shalend@afl.com.fj";
			break;
		case "MEMS":
			$emaillist[] = "waqat@fijiairports.com.fj";
			break;
		case "MFS":
			$emaillist[] = "patrickm@fijiairports.com.fj";
			break;
		case "MPODC":
			$emaillist[] = "sumeets@fijiairports.com.fj";
			break;
		case "MSRM":
			$emaillist[] = "suniak@fijiairports.com.fj";
			break;
		case "OMOIA":
			$emaillist[] = "vulas@afl.com.fj";
			break;
		case "OPS COORDINATOR":
			$emaillist[] = "sumeets@fijiairports.com.fj";
			break;
		case "PAAE":
			$emaillist[] = "ashleyk@afl.com.fj";
			break;
		case "SENIOR FINANCIAL ACCOUNTANT":
			$emaillist[] = "rohitp@fijiairports.com.fj";
	}
}

require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Audit Issue";
$content = "<b>Bula </br><br>You have a new Audit issue with the ID " . $id . " for your perusal, please login to view the Issue and the recommendations.</b>";
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
$mail->Port     = 25;
$mail->Username = "safety";
$mail->Password = "safety18";
$mail->Host     = "fijiairports.com.fj";
$mail->Mailer   = "smtp";
$mail->SetFrom("safety@fijiairports.com.fj", "Mr Safety");
$mail->AddReplyTo("safety@fijiairports.com.fj", "PHPPot");
foreach ($emaillist as $emaillist) {
	$mail->AddAddress($emaillist);
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
