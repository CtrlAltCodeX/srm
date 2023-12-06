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



        

        $query = "update compliance set LASTUPDATE=now(),CLOSEDRO='$status',STATUS='$status',TARGETDATE='$targetdatewa' WHERE COMP_ID='$id';
		          INSERT INTO complianceweeklyupdate(COMP_ID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
        mysqli_multi_query($db, $query) or die('error');
?>