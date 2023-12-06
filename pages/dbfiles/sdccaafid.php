<?php
// Fetching Values From URL

$id = $_POST['id'];
$caafid = $_POST['caafid'];




        include '../../dbconfig.php';

        $query = "update mor set LASTUPDATE=now(),CAAFID='$caafid' WHERE MORID='$id';
		          INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'UPDATED CAAF ID', 'SDA','AB')";
        mysqli_multi_query($db, $query) or die('error');
?>