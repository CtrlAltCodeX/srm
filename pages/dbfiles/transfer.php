<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$rotransfer = mysqli_real_escape_string($db,$_POST['rotransfer']);
$reasonriskowner = mysqli_real_escape_string($db,$_POST['reasonriskowner']);
$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);



        

        $query = "update hazardreport set LASTUPDATE=now(), NEWRISKOWNER='$rotransfer' WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON)
				  VALUES('$id',CURDATE(),'$reasonriskowner', '$riskowner')";
        mysqli_multi_query($db, $query) or die('error');
?>