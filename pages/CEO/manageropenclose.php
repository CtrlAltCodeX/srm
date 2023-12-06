<?php



 include '../../dbconfig.php'; 
	  
	  
	  $query = "SELECT RISKOWNER,
				SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
				SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
				COUNT(STATUS) AS 'TOTAL'
				FROM hazardreport WHERE RISKOWNER IS NOT NULL
				GROUP BY RISKOWNER
				ORDER BY total DESC";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		//free memory associated with result
		$result->close();

		//close connection
		
		
           
    print json_encode($data);
 
     
	
		
?>