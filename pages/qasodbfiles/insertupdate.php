<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$updatecontent = mysqli_real_escape_string($db,$_POST['updatecontent']);
$updateuser = mysqli_real_escape_string($db,$_POST['updateuser']);
$status = mysqli_real_escape_string($db,$_POST['status']);
$targetdate = mysqli_real_escape_string($db,$_POST['targetdate']);
 $targetdatetwo = DateTime::createFromFormat('m/d/Y',$targetdate);
 $targetdatewa= $targetdatetwo->format("Y-m-d");



        
		
        $query = "update hazardreport set LASTUPDATE=now(),CLOSEDRO='$status',QASOCHECKTWO='1',STATUS='$status',TARGETDATE='$targetdatewa' WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
        mysqli_multi_query($db, $query) or die('error');
?>