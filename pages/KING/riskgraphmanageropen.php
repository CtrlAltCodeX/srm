<?php



 include '../../dbconfig.php'; 
	  
	  
	  $query = "SELECT RISKOWNER,STATUS,
				SUM(IF(RISKLEVEL = 'High Risk',1,0)) AS High_Risk,
				SUM(IF(RISKLEVEL = 'Medium Risk',1,0)) AS Medium_Risk,
				SUM(IF(RISKLEVEL = 'Low Risk',1,0)) AS Low_Risk
				FROM hazardreport WHERE STATUS = 'OPEN' AND RISKOWNER IS NOT NULL 
				GROUP BY RISKOWNER
				ORDER BY High_Risk DESC";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		
		$result->close();

		
	  
           
    
	print json_encode($data);
 
		
?>