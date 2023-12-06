<?php



 include '../../dbconfig.php'; 
	  
	  
	  $query = "SELECT RISKLEVEL,
				SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN
				FROM hazardreport WHERE RISKLEVEL IS NOT NULL
				GROUP BY RISKLEVEL
				ORDER BY OPEN DESC";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		//free memory associated with result
		$result->close();

		
	  
           
    print json_encode($data);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>