<?php
// Fetching Values From URL

$id = $_POST['id'];



include '../../dbconfig.php';

        $query = "update hazardreport set SDCCHECKTWO='1',SDCSUBMITDATE=now(),LASTUPDATE=now() WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON)VALUES('$id',CURDATE(),'SUBMITTED TO RISK OWNER', 'SDA')";
        mysqli_multi_query($db, $query) or die('error');
?>