<?php
// Fetching Values From URL
 $id = $_POST['id'];
 $pieces = explode("/", $id);
 
 $hsomething = $pieces[0]; // piece1
 $yearlyincrements = preg_replace('/[^0-9]/', '', $hsomething);
  
 $curyear =  $pieces[1]; // piece2
 
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
 
 $source = $_POST['source'];
  $hazorinc = $_POST['hazorinc'];
   $timeoc = $_POST['timeoc'];

 $FileName = $_POST['FileName'];
$FileSize = $_POST['FileSize'];
$FileType = $_POST['FileType'];
$extension = $_POST['extension'];
 
 
 if(empty($_POST['username']))
 {
	 $username="ANON";
 }else
 {
	 $username = $_POST['username'];
 }
 
 
 if(empty($_POST['useremail']))
 {
	 $useremail="anona@anon.anon";
 }else
 {
	 $useremail = $_POST['useremail'];
 }
 
 
 if(empty($_POST['userphone']))
 {
	 $userphone="0000000";
 }else
 {
	 $userphone = $_POST['userphone'];
 } 
 
 
 $currentdate = date('Y-m-d H:i:s');
      
		
		
		include '../../dbconfig.php';

        $query = "Update hazardreport set HITYPE='$hitype',HAZORINC='$hazorinc',AIRPORT='$airport', HID='$hid', CAUSETYPE='$potcausetype', CD='$potcaused', EFFECTTYPE='$effecttype', ED='$effectd', 
		DEVENTOCCURANCE='$dateoccur', TIMEOC='$timeoc', DREPORTED='$currentdate', USERREPORTED='$username', USERREPORTEDPHONE='$userphone', USERREPORTEDEMAIL='$useremail', SDCCHECK='0', QASOCHECK='0',
		SDCCHECKTWO='0',RISKOWNERCHECK='0', QASOCHECKTWO='0',SDCCHECKTHREE='0',STATUS='OPEN', Reporter_Updated='0',SOURCE='$source' WHERE HAZID='$id'; 
		
		INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
				  VALUES('$id',CURDATE(),'Initial Report', 'Reporter','OPEN','$FileName', '$FileSize','$FileType','$extension')";
        
        
		
         mysqli_multi_query($db, $query) or die('Error Inserting to HAZARD.'); 
		
		
?>