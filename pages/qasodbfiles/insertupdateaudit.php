<?php
// Fetching Values From URL
include '../../dbconfig.php';

$id = mysqli_real_escape_string($db, $_POST['id']);
$updatecontent = mysqli_real_escape_string($db, $_POST['updatecontent']);
$updateuser = mysqli_real_escape_string($db, $_POST['updateuser']);
$status = mysqli_real_escape_string($db, $_POST['status']);


if ($_POST['closure']) {
	$query = "update audit set LASTUPDATE=now(),CLOSEDRO='$status', STATUS='$status' WHERE AID='$id';
				update recommendations set STATUS='$status' WHERE ID='$id';
					  INSERT INTO auditweeklyupdate(AID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
					  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
} else {
	$query = "update audit set LASTUPDATE=now(),CLOSEDRO='$status', STATUS='$status' WHERE AID='$id';
				update recommendations set STATUS='$status' WHERE ID='$id';
					  INSERT INTO auditweeklyupdate(AID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
					  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status')";
}

mysqli_multi_query($db, $query) or die('error');
