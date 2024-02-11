<?php
// Fetching Values From URL
$user = $_POST['user'];
include '../../dbconfig.php';

$data = array();
$query = "SELECT * FROM RECOMMENDATIONS where ID='AUDIT' AND QASO='$user'";
$result = mysqli_query($db, $query)  or die('error');

while ($row = mysqli_fetch_array($result)) {
	$id = $row['ID'];
	$recommendation = $row['RECOMMENDATION'];
	$status = $row['STATUS'];
	$targetdate = $row['TARGETDATE'];
	$riskowner = $row['RISKOWNER'];
	$qaso = $row['QASO'];

	$return_arr[] = array(
		"id" => $id,
		"recommendation" => $recommendation,
		"status" => $status,
		"targetdate" => $targetdate,
		"riskowner" => $riskowner,
		"qaso" => $qaso,
	);
}

echo json_encode($return_arr);








/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
