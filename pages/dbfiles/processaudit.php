<?php
// Fetching Values From URL
$id = $_POST['id'];
include '../../dbconfig.php';

$data = array();
$query = "SELECT * FROM audit where AID='$id'";
$result = mysqli_query($db, $query)  or die(mysqli_error($db));

while ($row = mysqli_fetch_array($result)) {
	$aid = $row['AID'];
	$compliance = $row['COMPLIANCE'];
	$noncompliance = $row['NON_COMPLIANCE'];
	$conformance = $row['CONFORMANCE'];
	$nonconformance = $row['NON_CONFORMANCE'];
	$safetyconcern = $row['SAFETY_CONCERN'];
	$audittype = $row['AUDIT_TYPE'];
	$date = $row['DATE'];
	$airport = $row['AIRPORT'];
	$risklevel = $row['RISK_LEVEL'];
	$finding = $row['FINDING'];
	$classification = $row['CLASSIFICATION'];
	$criteria = $row['CRITERIA'];
	$effect = $row['EFFECT'];
	$cause = $row['CAUSE'];
	$recommendation = $row['RECOMMENDATION'];
	$dreported = $row['DREPORTED'];
	$qaso = $row['QASO'];
	$cert = $row['CERT'];
	/* $ref=$row['OHSREF'];
							$status = $row['STATUS'];
							$cert = $row['CERT'];								
							$tg = $row['TARGETDATE'];		 */


	$return_arr[] = array(
		"aid" => $aid,
		"compliance" => $compliance,
		"noncompliance" => $noncompliance,
		"conformance" => $conformance,
		"nonconformance" => $nonconformance,
		"safetyconcern" => $safetyconcern,
		"audittype" => $audittype,
		"date" => $date,
		"airport" => $airport,
		"risklevel" => $risklevel,
		"finding" => $finding,
		"classification" => $classification,
		"criteria" => $criteria,
		"effect" => $effect,
		"cause" => $cause,
		/* "recommendation" => $recommendation, */
		"dreported" => $dreported,
		"qaso" => $qaso,
		"cert" => $cert,


	);
}



echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
