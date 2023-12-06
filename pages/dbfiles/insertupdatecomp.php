<?php
// Fetching Values From URL
include '../../dbconfig.php';
$id = mysqli_real_escape_string($db,$_POST['id']);
$updatecontent = mysqli_real_escape_string($db,$_POST['updatecontent']);
$updateuser = mysqli_real_escape_string($db,$_POST['updateuser']);
$status = mysqli_real_escape_string($db,$_POST['status']); 
$FileName = mysqli_real_escape_string($db,$_POST['FileName']);

$extension = mysqli_real_escape_string($db,$_POST['extension']); 



        

        $query = "update compliance set LASTUPDATE=now(),CLOSEDRO='$status' WHERE COMP_ID='$id';
		          INSERT INTO complianceweeklyupdate(COMP_ID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
				  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status','$FileName.$extension', 'NOT NEEDED','NOT NEEDED','$extension')";
        mysqli_multi_query($db, $query) or die(mysqli_error($db));
?>