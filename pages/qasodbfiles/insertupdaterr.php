<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$updatecontent = mysqli_real_escape_string($db,$_POST['updatecontent']);
$updateuser = mysqli_real_escape_string($db,$_POST['updateuser']);
$status = mysqli_real_escape_string($db,$_POST['status']);

$resriskconsequenceq = mysqli_real_escape_string($db,$_POST['resriskconsequenceq']);
$resrhoodq = mysqli_real_escape_string($db,$_POST['resrhoodq']);
$resrlq = mysqli_real_escape_string($db,$_POST['resrlq']);
$resrating = mysqli_real_escape_string($db,$_POST['resrating']);
        

		
$query = "update hazardreport set LASTUPDATE=now(),CLOSEDRO='$status',QASOCHECKTWO='1',STATUS='$status',
		  RRISKCONSEQUENCE='$resriskconsequenceq',RRISKHOOD='$resrhoodq', RRISKLEVEL='$resrlq',RRATING='$resrating' 
		  WHERE HAZID='$id';
		  INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
		  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
          mysqli_multi_query($db, $query) or die('error');
?>