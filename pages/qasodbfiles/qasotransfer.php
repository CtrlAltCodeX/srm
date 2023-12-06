<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$qasoransfer = mysqli_real_escape_string($db,$_POST['qasoransfer']);
$reasonqaso = mysqli_real_escape_string($db,$_POST['reasonqaso']);
$pqaso = mysqli_real_escape_string($db,$_POST['pqaso']);


        

        $query = "update hazardreport set LASTUPDATE=now(), QASO='$qasoransfer' WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON)
				  VALUES('$id',CURDATE(),'$reasonqaso', '$pqaso')";
        mysqli_multi_query($db, $query) or die('error');
?>