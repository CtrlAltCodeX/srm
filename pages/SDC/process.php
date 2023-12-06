<?php
// Fetching Values From URL
$ro = $_POST['ro'];
$qaso = $_POST['qaso'];
$id = $_POST['id'];
/* $hitype = $_POST['hitype']; */
/* $pct = $_POST['pct']; */
/* $ect = $_POST['ect']; */
/* $cert = $_POST['cert']; */

/* HITYPE='$hitype',CAUSETYPE='$pct',EFFECTTYPE='$ect', */
include '../../dbconfig.php';

$query = "update hazardreport set SDCCHECK='1',QASO='$qaso',RISKOWNER ='$ro' WHERE HAZID='$id'";
mysqli_query($db, $query) or die('error');
?>