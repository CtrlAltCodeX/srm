<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$updatecontent = mysqli_real_escape_string($db,$_POST['updatecontent']);
$updateuser = mysqli_real_escape_string($db,$_POST['updateuser']);
$status = mysqli_real_escape_string($db,$_POST['status']);


        

		
$query = "update mor set LASTUPDATE=now(),CLOSEDRO='$status',STATUS='$status'		  
		  WHERE MORID='$id';
		  INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
		  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
          mysqli_multi_query($db, $query) or die('error');
?>