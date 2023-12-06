<?php
// Fetching Values From URL
 $dateoccurone = $_POST['dateoccur'];
 $dateoccurtwo = DateTime::createFromFormat('m/d/Y',$dateoccurone);
 $dateoccur= $dateoccurtwo->format("Y-m-d");
 $hitype = $_POST['hitype']; 
 $hid = $_POST['hid'];
 $potcausetype = $_POST['potcausetype'];
 $potcaused = $_POST['potcaused'];
 $effecttype = $_POST['effecttype'];
 $effectd = $_POST['effectd'];
 $airport = $_POST['airport'];
 
 $id = $_POST['id'];
 $pieces = explode("/", $id); 
 $hsomething = $pieces[0]; // piece1
 $yearlyincrements = preg_replace('/[^0-9]/', '', $hsomething); 
 $curyear =  $pieces[1]; // piece2
 
 $lastupdatedate = $_POST['lastupdatedate'];
 $lastupdatedatetwo = DateTime::createFromFormat('m/d/Y',$lastupdatedate);
 $lastupdate= $lastupdatedatetwo->format("Y-m-d");
 
 $receiveddate = $_POST['receiveddate'];
 $receiveddatetwo = DateTime::createFromFormat('m/d/Y',$receiveddate);
 $receivedd= $receiveddatetwo->format("Y-m-d");
 
 $riskcontext = $_POST['riskcontext']; 
 $riskconsequence = $_POST['riskconsequence'];
 $riskhood = $_POST['riskhood'];
 $risklevel = $_POST['risklevel'];
 $responseexpected = $_POST['responseexpected'];
 $recommendedaction = $_POST['recommendedaction'];
 $ohsref = $_POST['ohsref'];
 $userreported = $_POST['userreported'];
 
 $qaso = $_POST['qaso'];
 $riskowner = $_POST['riskowner'];
 $lastupdatedate = $_POST['lastupdatedate'];
 $updatedetails = $_POST['updatedetails'];
 $status = $_POST['status']; 
 
 $currentdate = date('Y-m-d H:i:s');
 
 $userphone = "DDDDDD";
 $useremail = "DDDDD";
 
$resriskconsequenceq = $_POST['resriskconsequenceq'];
$resrhoodq = $_POST['resrhoodq'];
$resrlq = $_POST['resrlq'];
$resrating = $_POST['resrating'];

$source = $_POST['source'];

  $hazorinc = $_POST['hazorinc'];
   $timeoc = $_POST['timeoc'];

  


        include '../../dbconfig.php';
		
		
		if($status == 'OPEN')
		{
		$query = "INSERT INTO hazardreport (YEARLYINCREMENTS,CURYEAR,HAZID,HAZORINC,AIRPORT,HITYPE, HID, CAUSETYPE, CD, EFFECTTYPE, ED, DEVENTOCCURANCE,TIMEOC,DREPORTED, USERREPORTED, 
		USERREPORTEDPHONE, USERREPORTEDEMAIL, SDCCHECK,RISKOWNER, QASO,RISKCONTEXT,RISKCONSEQUENCE,RISKHOOD,RISKLEVEL,RESPONSE,
		RECOMMENDEDA,OHSREF,QASOCHECK,SDCCHECKTWO,SDCSUBMITDATE,LASTUPDATE,RISKOWNERCHECK,CLOSEDRO,QASOCHECKTWO,SDCCHECKTHREE,
		STATUS, Reporter_Updated,RRISKCONSEQUENCE,RRISKHOOD,RRISKLEVEL,RRATING,SOURCE) 
		VALUES('$yearlyincrements','$curyear','$id','$hazorinc','$airport', '$hitype','$hid','$potcausetype', '$potcaused', '$effecttype', '$effectd' ,'$dateoccur', '$timeoc','$receivedd', '$userreported',
		'$userphone', '$useremail','1', '$riskowner', '$qaso', '$riskcontext', '$riskconsequence', '$riskhood','$risklevel','$responseexpected',
		'$recommendedaction','$ohsref','1','1',CURDATE(),'$lastupdate','0','OPEN','0','0',
		'OPEN','0','$resriskconsequenceq','$resrhoodq','$resrlq','$resrating','$source');
		INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
		VALUES('$id','$lastupdate','$updatedetails', 'SDA','OPEN')";
       
         mysqli_multi_query($db, $query) or die('Error Man');  
		}else 
		{
			$query = "INSERT INTO hazardreport (YEARLYINCREMENTS,CURYEAR,HAZID,HAZORINC,AIRPORT,HITYPE, HID, CAUSETYPE, CD, EFFECTTYPE, ED, DEVENTOCCURANCE,TIMEOC, DREPORTED, USERREPORTED, 
		USERREPORTEDPHONE, USERREPORTEDEMAIL, SDCCHECK,RISKOWNER, QASO,RISKCONTEXT,RISKCONSEQUENCE,RISKHOOD,RISKLEVEL,RESPONSE,
		RECOMMENDEDA,OHSREF,QASOCHECK,SDCCHECKTWO,SDCSUBMITDATE,LASTUPDATE,RISKOWNERCHECK,CLOSEDRO,QASOCHECKTWO,SDCCHECKTHREE,
		STATUS, Reporter_Updated) 
		VALUES('$yearlyincrements','$curyear','$id','$hazorinc','$airport', '$hitype','$hid','$potcausetype', '$potcaused', '$effecttype', '$effectd' ,'$dateoccur', '$timeoc','$receivedd', '$userreported',
		'$userphone', '$useremail','1', '$riskowner', '$qaso', '$riskcontext', '$riskconsequence', '$riskhood','$risklevel','$responseexpected',
		'$recommendedaction','$ohsref','1','1',CURDATE(),'$lastupdate','1','CLOSED','1','1',
		'CLOSED','1');
		INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
		VALUES('$id','$lastupdate','$updatedetails', 'SDA','CLOSED')";
       
         mysqli_multi_query($db, $query) or die('Error Man');  
		}

     
		
		
?>