<?php
// Fetching Values From URL

$id = $_POST['id'];
$updatecontent = $_POST['updatecontent'];
$updateuser = $_POST['updateuser'];
$status = $_POST['status']; 
$FileName = $_POST['FileName'];
$FileSize = $_POST['FileSize'];
$FileType = $_POST['FileType'];
$extension = $_POST['extension']; 



        include '../../dbconfig.php';

        $query = "update hazardreport set LASTUPDATE=now(),CLOSEDRO='$status' WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS,FILENAME,FILESIZE,FILETYPE,EXTENSION)
				  VALUES('$id',CURDATE(),'$updatecontent', '$updateuser','$status','$FileName', '$FileSize','$FileType','$extension')";
        mysqli_multi_query($db, $query) or die('error');
?>