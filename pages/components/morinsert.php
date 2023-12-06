<?php
// Fetching Values From URL
 include '../../dbconfig.php';
$doo = mysqli_real_escape_string($db,$_POST['doo']);
 $dateoccurtwo = DateTime::createFromFormat('m/d/Y',$doo);
 $dateoccur= $dateoccurtwo->format("Y-m-d");
 
 $morid = mysqli_real_escape_string($db,$_POST['morid']);
 $pieces = explode("/", $morid); 
 $msomething = $pieces[0]; // piece1
 $yearlyincrements = preg_replace('/[^0-9]/', '', $msomething); 
 $curyear =  $pieces[1]; // piece2
 
 $caafid = mysqli_real_escape_string($db,$_POST['caafid']); 
 $coo = mysqli_real_escape_string($db,$_POST['coo']);
 $actypeseries = mysqli_real_escape_string($db,$_POST['actypeseries']);
 $registration = mysqli_real_escape_string($db,$_POST['registration']);
 $operator = mysqli_real_escape_string($db,$_POST['operator']);
 $timeoc = mysqli_real_escape_string($db,$_POST['timeoc']);
 $dtn = mysqli_real_escape_string($db,$_POST['dtn']); 
 
 $lastupdatedate = mysqli_real_escape_string($db,$_POST['lastupdatedate']);
 $lastupdatedatetwo = DateTime::createFromFormat('m/d/Y',$lastupdatedate);
 $lastupdate= $lastupdatedatetwo->format("Y-m-d");
 
 $receiveddate = mysqli_real_escape_string($db,$_POST['receiveddate']);
 $receiveddatetwo = DateTime::createFromFormat('m/d/Y',$receiveddate);
 $receivedd= $receiveddatetwo->format("Y-m-d");
 
 $lpr = mysqli_real_escape_string($db,$_POST['lpr']); 
 $fno = mysqli_real_escape_string($db,$_POST['fno']);
 $routefrom = mysqli_real_escape_string($db,$_POST['routefrom']);
 $routeto = mysqli_real_escape_string($db,$_POST['routeto']);
 $ias = mysqli_real_escape_string($db,$_POST['ias']);
 $fah = mysqli_real_escape_string($db,$_POST['fah']);
 $iv = mysqli_real_escape_string($db,$_POST['iv']);
 $err = mysqli_real_escape_string($db,$_POST['err']);
 
 $nof = mysqli_real_escape_string($db,$_POST['nof']);
 $fp = mysqli_real_escape_string($db,$_POST['fp']);
 $ds = mysqli_real_escape_string($db,$_POST['ds']);
 $oat = mysqli_real_escape_string($db,$_POST['oat']);
 $ctype = mysqli_real_escape_string($db,$_POST['ctype']); 
 
 $currentdate = date('Y-m-d H:i:s');
 

 
$cht = mysqli_real_escape_string($db,$_POST['cht']);
$cth = mysqli_real_escape_string($db,$_POST['cth']);
$pw = mysqli_real_escape_string($db,$_POST['pw']);
$pt = mysqli_real_escape_string($db,$_POST['pt']);

$vk = mysqli_real_escape_string($db,$_POST['vk']);
$icing = mysqli_real_escape_string($db,$_POST['icing']);
$turbulance = mysqli_real_escape_string($db,$_POST['turbulance']);

$rst = mysqli_real_escape_string($db,$_POST['rst']);
$rsc = mysqli_real_escape_string($db,$_POST['rsc']);
$airport = mysqli_real_escape_string($db,$_POST['airport']);
$hitype = mysqli_real_escape_string($db,$_POST['hitype']);
$bt = mysqli_real_escape_string($db,$_POST['bt']);
 $morcert = mysqli_real_escape_string($db,$_POST['morcert']); 

$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);

$updatedetails = mysqli_real_escape_string($db,$_POST['updatedetails']);
$status = mysqli_real_escape_string($db,$_POST['status']);
$morqaso = mysqli_real_escape_string($db,$_POST['morqaso']);
$narrative = mysqli_real_escape_string($db,$_POST['narrative']);
$organisation = mysqli_real_escape_string($db,$_POST['organisation']);

$name = mysqli_real_escape_string($db,$_POST['name']);
$position = mysqli_real_escape_string($db,$_POST['position']);
$myFileName = mysqli_real_escape_string($db,$_POST['myFileName']).mysqli_real_escape_string($db,$_POST['extension']);
$myFileSize = mysqli_real_escape_string($db,$_POST['myFileSize']);
$myFileType = mysqli_real_escape_string($db,$_POST['myFileType']);
$extension = mysqli_real_escape_string($db,$_POST['extension']);


		$query = "INSERT INTO mor (YEARLYINCREMENTS,CURYEAR,MORID,CAAFID,CATOFOC,ACTYPE, REG, OPERATOR, DATE, TIME, TIMETYPE, LOC_POS_RWY,FCR_FLIGHTNO,FCR_RF, FCR_RT, 
		FCR_IAS, FCR_FT , FCR_CLEARANCE ,ETOPS, NATURE_FLIGHT,FLIGHT_PHASE,ENV_W_KTS,ENV_W_OC,ENV_C_TYPE,ENV_C_FT ,
		ENV_C_TH,ENV_P_W,ENV_P_L,OMC_V,OMC_ICING,OMC_TURB,RS_STATUS,RS_CAT,AIRPORT,RELATEDTO,
		TITLE, NARRATIVE,REPORTER_ORG,REPORTER_NAME,REPORTER_POSITION,LASTUPDATE,RECEIVEDDATE,SDCCHECK,RISKOWNERCHECK,CLOSEDRO,STATUS,RISKOWNER,QASO,CERT) 
		VALUES('$yearlyincrements','$curyear','$morid','$caafid','$coo', '$actypeseries','$registration','$operator', '$dateoccur', '$timeoc', '$dtn' ,'$lpr', '$fno','$routefrom', '$routeto',
		'$ias', '$fah','$iv', '$err', '$nof', '$fp', '$ds', '$oat','$ctype','$cht',
		'$cth','$pw','$pt','$vk','$icing','$turbulance','$rst ','$rsc ','$airport','$hitype',
		'$bt','$narrative','$organisation','$name','$position','$lastupdate','$receivedd','1','0','$status','$status','$riskowner','$morqaso','$morcert');
		INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
		VALUES('$morid','$lastupdate','$updatedetails', 'SDA','$status','$myFileName', '$myFileSize','$myFileType','$extension')";
       
         mysqli_multi_query($db, $query) or die(mysqli_error($db));  
		
		
?>