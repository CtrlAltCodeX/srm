<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db, $_POST['id']);
$pieces = explode("/", $id);

$hsomething = $pieces[0]; // piece1
$yearlyincrements = preg_replace('/[^0-9]/', '', $hsomething);

$curyear =  $pieces[1]; // piece2

/* $dateoccurone = $_POST['dateoccur'];
 $dateoccurtwo = DateTime::createFromFormat('m/d/Y',$dateoccurone);
 $dateoccur= $dateoccurtwo->format("Y-m-d"); */
/* $hitype = $_POST['hitype'];  */
$hid = mysqli_real_escape_string($db, $_POST['hid']);
/* $potcausetype = $_POST['potcausetype'];
 $potcaused = $_POST['potcaused'];
 $effecttype = $_POST['effecttype'];
 $effectd = $_POST['effectd']; */
$airport = mysqli_real_escape_string($db, $_POST['airport']);

$source = mysqli_real_escape_string($db, $_POST['source']);
/*  $hazorinc = $_POST['hazorinc'];
   $timeoc = $_POST['timeoc']; */

$FileName = mysqli_real_escape_string($db, $_POST['FileName']);
// $FileSize = mysqli_real_escape_string($db,$_POST['FileSize']);
// $FileType = mysqli_real_escape_string($db,$_POST['FileType']);
// $extension = mysqli_real_escape_string($db,$_POST['extension']);


if (empty(mysqli_real_escape_string($db, $_POST['username']))) {
	$username = "ANON";
} else {
	$username = mysqli_real_escape_string($db, $_POST['username']);
}


if (empty(mysqli_real_escape_string($db, $_POST['useremail']))) {
	$useremail = "anona@anon.anon";
} else {
	$useremail = mysqli_real_escape_string($db, $_POST['useremail']);
}


if (empty(mysqli_real_escape_string($db, $_POST['userphone']))) {
	$userphone = "0000000";
} else {
	$userphone = mysqli_real_escape_string($db, $_POST['userphone']);
}


$currentdate = date('Y-m-d H:i:s');





$query = "Update hazardreport set AIRPORT='$airport', HID='$hid', DREPORTED='$currentdate', USERREPORTED='$username', USERREPORTEDPHONE='$userphone', USERREPORTEDEMAIL='$useremail', SDCCHECK='0', QASOCHECK='0',
		SDCCHECKTWO='0',RISKOWNERCHECK='0', QASOCHECKTWO='0',SDCCHECKTHREE='0',STATUS='OPEN', Reporter_Updated='0',SOURCE='$source' WHERE HAZID='$id'; 
		
		INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
				  VALUES('$id',CURDATE(),'Initial Report', 'Reporter','OPEN','$FileName', 'NOT NEEDED','NOT NEEDED','$FileName')";

mysqli_multi_query($db, $query) or die(mysqli_error($db));
