<?php
// Fetching Values From URL
include '../../dbconfig.php';
$compid = mysqli_real_escape_string($db,$_POST['compid']);
$compreason = mysqli_real_escape_string($db,$_POST['compreason']);
$compro = mysqli_real_escape_string($db,$_POST['compro']);/* PAGE USER */
$compriskowner = mysqli_real_escape_string($db,$_POST['compriskowner']);



$query = "update compliance set LASTUPDATE=now(),RISKOWNER='$compriskowner',NEWRISKOWNER=NULL WHERE COMP_ID='$compid';
		  INSERT INTO complianceweeklyupdate(COMP_ID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
		VALUES('$compid',CURDATE(),'$updatecontent', '$compro','OPEN')";
mysqli_multi_query($db, $query) or die('error');
?>