<?php


 
 include '../../dbconfig.php'; 
	  
	
  $select = "
    SELECT RELATEDTO,COUNT(*) as count FROM mor WHERE CERT='Nausori AD' AND  YEAR(DATE) = YEAR(CURDATE()) GROUP BY RELATEDTO ORDER BY count DESC;
  ";
  $result = mysqli_query($db, $select)  or die(mysqli_error($db)); 
  
	
				
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  
	 
		
		
?>