<?php
// Fetching Values From URL

$id = $_POST['id'];
$rotransfer = $_POST['rotransfer'];
$reasonriskowner = $_POST['reasonriskowner'];



        include '../../dbconfig.php';

        $query = "update hazardreport set LASTUPDATE=now(), NEWRISKOWNER='$rotransfer' WHERE HAZID='$id';
		          INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON)
				  VALUES('$id',CURDATE(),'$reasonriskowner', 'MAO')";
        mysqli_multi_query($db, $query) or die('error');
?>