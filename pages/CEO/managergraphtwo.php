<?php


 
 include '../../dbconfig.php'; 
	  
	  $data = array();
	
				$query = "SELECT DISTINCT RISKOWNER,
				SUM(IF(RISKLEVEL = 'High Risk',1,0)) AS HRISK,
				SUM(IF(RISKLEVEL = 'Medium Risk',1,0)) AS MRISK,
				SUM(IF(RISKLEVEL = 'Low Risk',1,0)) AS LRISK				
				FROM hazardreport WHERE RISKOWNER IS NOT NULL 
				GROUP BY RISKOWNER
				ORDER BY LRISK DESC";
		  $result = mysqli_query($db, $query)  or die('error'); 	  
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  
	 
		
		
?>