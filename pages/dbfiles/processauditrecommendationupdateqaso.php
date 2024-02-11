<?php
// Fetching Values From URL
$id = $_POST['id'];

include '../../dbconfig.php';

$data = array();
$query = "SELECT * FROM recommendations where ID='$id'";
$result = mysqli_query($db, $query)  or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
	$idwa = $row['IDWA'];
	$recommendation = $row['RECOMMENDATION'];
	$status = $row['STATUS'];
	$targetdate = $row['TARGETDATE'];
	$riskowner = $row['RISKOWNER'];
	$qaso = $row['QASO'];


	$return_arr[] = array(
		"idwa" => $idwa,
		"recommendation" => $recommendation,
		"status" => $status,
		"targetdate" => $targetdate,
		"riskowner" => $riskowner,
		"qaso" => $qaso,

	);
}



echo json_encode($return_arr);








/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
