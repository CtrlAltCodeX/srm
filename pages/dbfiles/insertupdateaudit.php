<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db, $_POST['id']);
$ro = mysqli_real_escape_string($db, $_POST['ro']);
$updatecontent = mysqli_real_escape_string($db, $_POST['updatecontent']);
$audititemno = mysqli_real_escape_string($db, $_POST['audititemno']);
$updateuser = mysqli_real_escape_string($db, $_POST['updateuser']);
$status = mysqli_real_escape_string($db, $_POST['status']);
$FileName = mysqli_real_escape_string($db, $_POST['FileName']);

$extension = mysqli_real_escape_string($db, $_POST['extension']);

$query = "update audit set LASTUPDATE=now(), CLOSEDRO='$status' WHERE AID='$id';
				  
		          INSERT INTO auditweeklyupdate(AID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION,ITEM,RISKOWNER)
				  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status','$FileName.$extension', 'NOT NEEDED','NOT NEEDED','$extension','$audititemno','$ro')";
mysqli_multi_query($db, $query) or die(mysqli_error($db));
