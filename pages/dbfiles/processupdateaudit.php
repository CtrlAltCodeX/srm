<?php
// Fetching Values From URL
$id = $_POST['id'];
$ro = $_POST['ro'];
include '../../dbconfig.php';

$data = array();
$query = "SELECT * FROM auditweeklyupdate where AID='$id'";
$result = mysqli_query($db, $query)  or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
	$aid = $row['AID'];
	$item = $row['ITEM'];
	$updatedate = $row['UPDATEDATE'];
	$updatecontent = $row['UPDATECONTENT'];
	$person = $row['PERSON'];
	if ((!(($row['FILENAME']) == 'undefined')) && (!(empty($row['FILENAME']))) && (!(($row['FILENAME']) == 'undefinedundefined')) && (!(($row['FILENAME']) == '.'))) {
		$link = $row['FILENAME'];
	} else {
		$link = "No File ";
	}

	$return_arr[] = array(
		"aid" => $aid,
		"item" => $item,
		"updatedate" => $updatedate,
		"updatecontent" => $updatecontent,
		"person" => $person,
		"link" => $link,
	);
}

echo json_encode($return_arr);
/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
