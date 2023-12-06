<?php
// Fetching Values From URL
include '../../dbconfig.php';
$compid = mysqli_real_escape_string($db,$_POST['compid']);
$comprotransfer = mysqli_real_escape_string($db,$_POST['comprotransfer']);
$compreasonriskowner = mysqli_real_escape_string($db,$_POST['compreasonriskowner']);
$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);

$query = "update compliance set LASTUPDATE=now(), NEWRISKOWNER='$comprotransfer' WHERE COMP_ID='$compid';
			INSERT INTO complianceweeklyupdate(COMP_ID,UPDATEDATE,UPDATECONTENT,PERSON)
			VALUES('$compid',CURDATE(),'$compreasonriskowner', '$riskowner')";
mysqli_multi_query($db, $query) or die('error');
?>