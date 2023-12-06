<?php
// Fetching Values From URL

$id = $_POST['id'];

 $dateoccurone = $_POST['date'];
 $dateoccurtwo = DateTime::createFromFormat('m/d/Y',$dateoccurone);
 $datewa= $dateoccurtwo->format("Y-m-d");



        include '../../dbconfig.php';

        $query = "update audit set LASTUPDATE=now(),TARGETDATE='$datewa' WHERE AID='$id';
		          INSERT INTO auditweeklyupdate(AID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
				  VALUES('$id',CURDATE(),'SET TARGET DATE', 'AUDIT ISSUE OWNER','OPEN')";
        mysqli_multi_query($db, $query) or die('error');
?>