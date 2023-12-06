<?php
// Fetching Values From URL

$id = $_POST['id'];
$updatecontent = $_POST['updatecontent'];
$updateuser = $_POST['updateuser'];
$status = $_POST['status'];



        include '../../dbconfig.php';
		
        $query = "update hazardreport set LASTUPDATE=now(),CLOSEDRO='$status',QASOCHECKTWO='1',STATUS='$status' WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
        mysqli_multi_query($db, $query) or die('error');
?>