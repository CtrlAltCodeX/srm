<?php
// Fetching Values From URL
include '../../dbconfig.php';
$morid = mysqli_real_escape_string($db,$_POST['morid']);
$morrotransfer = mysqli_real_escape_string($db,$_POST['morrotransfer']);
$morreasonriskowner = mysqli_real_escape_string($db,$_POST['morreasonriskowner']);
$riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);



        

        $query = "update mor set LASTUPDATE=now(), NEWRISKOWNER='$morrotransfer' WHERE MORID='$morid';
		          INSERT INTO morweeklyupdate(MORID,UPDATEDATE,UPDATECONTENT,PERSON)
				  VALUES('$morid',CURDATE(),'$morreasonriskowner', '$riskowner')";
        mysqli_multi_query($db, $query) or die('error');
?>