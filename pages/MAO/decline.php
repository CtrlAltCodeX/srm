<?php
// Fetching Values From URL

$id = $_POST['id'];
$updatecontent = $_POST['updatecontent'];
$roq = $_POST['roq'];





        include '../../dbconfig.php';

        $query = "update hazardreport set LASTUPDATE=now(),RISKOWNER='$roq',NEWRISKOWNER=NULL WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'$updatecontent', 'MAO','OPEN')";
        mysqli_multi_query($db, $query) or die('error');
?>