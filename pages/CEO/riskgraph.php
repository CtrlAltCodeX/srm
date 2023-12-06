<?php

 

 
 include '../../dbconfig.php'; 
	  
	  $data = array();
	  
		  
				$query = "SELECT DISTINCT RISKLEVEL,
				SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
				SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
				COUNT(STATUS) AS 'TOTAL'
				FROM hazardreport WHERE RISKLEVEL IS NOT NULL AND RISKLEVEL != ' '			
				GROUP BY RISKLEVEL
				ORDER BY FIELD(RISKLEVEL,'High Risk','Medium Risk','Low Risk')";
		  $result = mysqli_query($db, $query)  or die('error'); 	  
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  
		
?>