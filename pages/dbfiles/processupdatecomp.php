<?php
// Fetching Values From URL
$id = $_POST['id'];

include '../../dbconfig.php';

$data = array();
$query = "SELECT * FROM complianceweeklyupdate where COMP_ID='$id'";
$result = mysqli_query($db, $query)  or die('error');

while ($row = mysqli_fetch_array($result)) {
	$compid = $row['COMP_ID'];
	$updatedate = $row['UPDATEDATE'];
	$updatecontent = $row['UPDATECONTENT'];
	$person = $row['PERSON'];
	if ((!(($row['FILENAME']) == 'undefined')) && (!(empty($row['FILENAME']))) && (!(($row['FILENAME']) == 'undefinedundefined')) && (!(($row['FILENAME']) == '.'))) {

		$link = "<a href=../uploads/" . $row['FILENAME'] . " download=" . $row['FILENAME'] . ">Download File</a>";
	} else {
		$link = "No File ";
	}



	$return_arr[] = array(
		"compid" => $compid,
		"updatedate" => $updatedate,
		"updatecontent" => $updatecontent,
		"person" => $person,
		"link" => $link,
	);
}



echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
