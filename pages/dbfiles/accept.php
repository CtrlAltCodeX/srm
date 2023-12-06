<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$updatecontent = mysqli_real_escape_string($db,$_POST['updatecontent']);
$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);





        

        $query = "update hazardreport set LASTUPDATE=now(),RISKOWNER='$riskowner',NEWRISKOWNER=NULL WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'$updatecontent', '$riskowner','OPEN')";
        mysqli_multi_query($db, $query) or die('error');
?>