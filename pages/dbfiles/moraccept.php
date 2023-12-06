<?php
// Fetching Values From URL
include '../../dbconfig.php';
$morid = mysqli_real_escape_string($db,$_POST['morid']);
$morreason = mysqli_real_escape_string($db,$_POST['morreason']);
$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);





        

        $query = "update mor set LASTUPDATE=now(),RISKOWNER='$riskowner',NEWRISKOWNER=NULL WHERE MORID='$morid';
		          INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$morid',CURDATE(),'$morreason', '$riskowner','OPEN')";
        mysqli_multi_query($db, $query) or die('error');
?>