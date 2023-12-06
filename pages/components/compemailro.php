<?php


$ro = $_POST['riskowner'];
$id = $_POST['compid'];


 switch ($ro) 
{
    case "MAO":
        $roemail = "apenisan@afl.com.fj";
        break;
    case "MNOS":
        $roemail = "vincentk@afl.com.fj";
        break;
    case "MBCW":
        $roemail = "shameerk@afl.com.fj";
        break;
    case "HOP":
        $roemail = "ivanw@afl.com.fj";
		$roemailtwo = "amits@afl.com.fj";
        break;
	case "EXECUTIVE":
       $roemail = "faizk@afl.com.fj";
		$roemailtwo = "iseit@afl.com.fj";
        break;
    case "MALOCS":
        $roemail = "joeg@afl.com.fj";
        break;
	case "MANES":
        $roemail = "kelepid@afl.com.fj";
        break;
    case "MARFFS":
        $roemail = "semib@afl.com.fj";
        break;
	case "MASS":
        $roemail = "josaial@afl.com.fj";
        break;
    case "MC":
        $roemail = "shalend@afl.com.fj";
        break;
	case "MEMS":
        $roemail = "wtaukei@afl.com.fj";
        break;
    case "MFS":
        $roemail = "dhanjayk@afl.com.fj";
        break;
	case "MPODC":
        $roemail = "rennya@afl.com.fj";
        break;
    case "MSRM":
        $roemail = "suniak@afl.com.fj";
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
        $roemail = "sanjanam@afl.com.fj";
       
  }
   
  

require('../SDA/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "New Compliance ";
$content = "<b>Bula ".$ro."</br><br>You have a new Compliance issue with the ID ".$id." for your perusal, please login to view the Compliance Issue</b>";
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
if($ro=="HOP")
{
	$mail->AddAddress($roemail);
	$mail->AddAddress($roemailtwo);
}
else if($ro=="EXECUTIVE" || $rl=="High Risk")
{
	$mail->AddAddress($roemail);
	$mail->AddAddress($roemailtwo);
	$mail->AddAddress("suniak@afl.com.fj");
}
else
{	
	$mail->AddAddress($roemail);
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
