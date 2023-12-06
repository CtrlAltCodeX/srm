<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db, $_POST['id']);
$pieces = explode("/", $id);

$hsomething = $pieces[0]; // piece1
$yearlyincrements = preg_replace('/[^0-9]/', '', $hsomething);

$curyear =  $pieces[1]; // piece2

$dateoccurone = mysqli_real_escape_string($db, $_POST['dateaudit']);
$dateoccurtwo = DateTime::createFromFormat('m/d/Y', $dateoccurone);
$dateoccur = $dateoccurtwo->format("Y-m-d");

/* $targetdate = mysqli_real_escape_string($db,$_POST['targetdate']);
 $targetdatetwo = DateTime::createFromFormat('m/d/Y',$targetdate);
 $tg= $targetdatetwo->format("Y-m-d"); */

$comp = mysqli_real_escape_string($db, $_POST['comp']);
$conf = mysqli_real_escape_string($db, $_POST['conf']);



if ($comp == "comp") {
	$com = "1";
	$noncom = "0";
} else if ($comp == "noncomp") {
	$com = "0";
	$noncom = "1";
} else {
	$com = "0";
	$noncom = "0";
}


if ($conf == "conf") {
	$con = "1";
	$noncon = "0";
} else if ($comp == "nonconf") {
	$con = "0";
	$noncon = "1";
} else {
	$con = "0";
	$noncon = "0";
}

$sc = $_POST['sc'];
if ($sc == "sc") {
	$c = "1";
} else {
	$c = "0";
}

$qrc = $_POST['qrc'] == "qrc" ? "1" : "0";
echo $comp . $com . $noncom . $conf . $con . $noncon . $c . $qrc;

$at = mysqli_real_escape_string($db, $_POST['at']);
$airport = mysqli_real_escape_string($db, $_POST['airport']);
$rl = mysqli_real_escape_string($db, $_POST['rl']);
$findingdescription = mysqli_real_escape_string($db, $_POST['findingdescription']);

$classification = mysqli_real_escape_string($db, $_POST['classification']);
/* $sourcedata = mysqli_real_escape_string($db,$_POST['sourcedata']);
   $condition = mysqli_real_escape_string($db,$_POST['condition']); */

$criteria = mysqli_real_escape_string($db, $_POST['criteria']);
$effect = mysqli_real_escape_string($db, $_POST['effect']);
$cause = mysqli_real_escape_string($db, $_POST['cause']);
$recommendation = mysqli_real_escape_string($db, $_POST['recommendation']);
$riskowner = mysqli_real_escape_string($db, $_POST['riskowner']);
$auditcert = mysqli_real_escape_string($db, $_POST['auditcert']);

/*  $username = mysqli_real_escape_string($db,$_POST['auditor']);
$useremail = mysqli_real_escape_string($db,$_POST['auditoremail']);
$userphone = mysqli_real_escape_string($db,$_POST['auditorphone']); */

$qaso = mysqli_real_escape_string($db, $_POST['qaso']);

$FileName = mysqli_real_escape_string($db, $_POST['FileName']);
/* $FileSize = mysqli_real_escape_string($db,$_POST['FileSize']);
$FileType = mysqli_real_escape_string($db,$_POST['FileType']); */





$currentdate = date('Y-m-d H:i:s');





$query = "Update audit set COMPLIANCE='$com',NON_COMPLIANCE='$noncom',CONFORMANCE='$con', NON_CONFORMANCE='$noncon', SAFETY_CONCERN='$c', AUDIT_TYPE='$at', DATE='$dateoccur', AIRPORT='$airport', 
		RISK_LEVEL='$rl', FINDING='$findingdescription', CLASSIFICATION='$classification', CRITERIA='$criteria', EFFECT='$effect',
		CAUSE='$cause',CERT='$auditcert',DREPORTED='$currentdate',LASTUPDATE=CURDATE(),CLOSEDRO='OPEN',STATUS='OPEN', QASO='$qaso' WHERE AID='$id'; 
		INSERT INTO auditweeklyupdate(AID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
				  VALUES('$id',CURDATE(),'Initial Report', 'Auditor','OPEN','$FileName',  'NOT NEEDED','NOT NEEDED','$FileName');
		update recommendations set ID='$id' WHERE ID='AUDIT' AND QASO='$qaso'";



mysqli_multi_query($db, $query) or die(mysqli_error($db));
