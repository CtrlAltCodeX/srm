<?php
// Fetching Values From URL
include '../../dbconfig.php';
$moridt = mysqli_real_escape_string($db,$_POST['moridt']);
$morreason = mysqli_real_escape_string($db,$_POST['morreason']);
$riskownert = mysqli_real_escape_string($db,$_POST['riskownert']);
$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);





        

        $query = "update mor set LASTUPDATE=now(),RISKOWNER='$riskownert',NEWRISKOWNER=NULL WHERE MORID='$moridt';
		          INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$moridt',CURDATE(),'$updatecontent', '$riskowner','OPEN')";
        mysqli_multi_query($db, $query) or die('error');
?>