<?php
// Fetching Values From URL
 $doo = $_POST['doo'];
 $dateoccurtwo = DateTime::createFromFormat('m/d/Y',$doo);
 $dateoccur= $dateoccurtwo->format("Y-m-d");
 
 $morid = $_POST['morid'];
 $pieces = explode("/", $morid); 
 $msomething = $pieces[0]; // piece1
 $yearlyincrements = preg_replace('/[^0-9]/', '', $msomething); 
 $curyear =  $pieces[1]; // piece2
 
 $caafid = $_POST['caafid']; 
 $coo = $_POST['coo'];
 $actypeseries = $_POST['actypeseries'];
 $registration = $_POST['registration'];
 $operator = $_POST['operator'];
 $timeoc = $_POST['timeoc'];
 $dtn = $_POST['dtn']; 
 
 $lastupdatedate = $_POST['lastupdatedate'];
 $lastupdatedatetwo = DateTime::createFromFormat('m/d/Y',$lastupdatedate);
 $lastupdate= $lastupdatedatetwo->format("Y-m-d");
 
 $receiveddate = $_POST['receiveddate'];
 $receiveddatetwo = DateTime::createFromFormat('m/d/Y',$receiveddate);
 $receivedd= $receiveddatetwo->format("Y-m-d");
 
 $lpr = $_POST['lpr']; 
 $fno = $_POST['fno'];
 $routefrom = $_POST['routefrom'];
 $routeto = $_POST['routeto'];
 $ias = $_POST['ias'];
 $fah = $_POST['fah'];
 $iv = $_POST['iv'];
 $err = $_POST['err'];
 
 $nof = $_POST['nof'];
 $fp = $_POST['fp'];
 $ds = $_POST['ds'];
 $oat = $_POST['oat'];
 $ctype = $_POST['ctype']; 
 
 $currentdate = date('Y-m-d H:i:s');
 

 
$cht = $_POST['cht'];
$cth = $_POST['cth'];
$pw = $_POST['pw'];
$pt = $_POST['pt'];

$vk = $_POST['vk'];
$icing = $_POST['icing'];
$turbulance = $_POST['turbulance'];

$rst = $_POST['rst'];
$rsc = $_POST['rsc'];
$airport = $_POST['airport'];
$hitype = $_POST['hitype'];
$bt = $_POST['bt'];
/* $qaso = $_POST['qaso']; */

$riskowner = $_POST['riskowner'];

$updatedetails = $_POST['updatedetails'];
$status = $_POST['status'];
$narrative = $_POST['narrative'];
$organisation = $_POST['organisation'];

$name = $_POST['name'];
$position = $_POST['position'];
$myFileName = $_POST['myFileName'];
$myFileSize = $_POST['myFileSize'];
$myFileType = $_POST['myFileType'];
$extension = $_POST['extension'];

include '../../dbconfig.php';

		$query = "INSERT INTO mor (YEARLYINCREMENTS,CURYEAR,MORID,CAAFID,CATOFOC,ACTYPE, REG, OPERATOR, DATE, TIME, TIMETYPE, LOC_POS_RWY,FCR_FLIGHTNO,FCR_RF, FCR_RT, 
		FCR_IAS, FCR_FT , FCR_CLEARANCE ,ETOPS, NATURE_FLIGHT,FLIGHT_PHASE,ENV_W_KTS,ENV_W_OC,ENV_C_TYPE,ENV_C_FT ,
		ENV_C_TH,ENV_P_W,ENV_P_L,OMC_V,OMC_ICING,OMC_TURB,RS_STATUS,RS_CAT,AIRPORT,RELATEDTO,
		TITLE, NARRATIVE,REPORTER_ORG,REPORTER_NAME,REPORTER_POSITION,LASTUPDATE,RECEIVEDDATE,SDCCHECK,RISKOWNERCHECK,CLOSEDRO,STATUS,RISKOWNER) 
		VALUES('$yearlyincrements','$curyear','$morid','$caafid','$coo', '$actypeseries','$registration','$operator', '$dateoccur', '$timeoc', '$dtn' ,'$lpr', '$fno','$routefrom', '$routeto',
		'$ias', '$fah','$iv', '$err', '$nof', '$fp', '$ds', '$oat','$ctype','$cht',
		'$cth','$pw','$pt','$vk','$icing','$turbulance','$rst ','$rsc ','$airport','$hitype',
		'$bt','$narrative','$organisation','$name','$position','$lastupdate','$receivedd','1','0','$status','$status','$riskowner');
		INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
		VALUES('$morid','$lastupdate','$updatedetails', 'SDA','OPEN','$myFileName', '$myFileSize','$myFileType','$extension')";
       
         mysqli_multi_query($db, $query) or die('Error Man');  
		
		
?>