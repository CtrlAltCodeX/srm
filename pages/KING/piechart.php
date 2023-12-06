<?php


 
 include '../../dbconfig.php'; 
	  
	  $data = array();
	  
	   $maketemp = "
    CREATE TEMPORARY TABLE temp_table_2 (         
      `description` text,
      `count` int
      )
  "; 

mysqli_query($db, $maketemp)  or die(mysqli_error($db)); 	  

  $inserttemp = "
    INSERT INTO temp_table_2
      ( `description`, `count`)
   SELECT HITYPE, COUNT(*) as count FROM hazardreport WHERE HITYPE IN('FOD - Apron','FOD - RWY','FOD - TXWY') AND  YEAR(DEVENTOCCURANCE) = YEAR(CURDATE())GROUP BY HITYPE ORDER BY count DESC
  ";

mysqli_query($db, $inserttemp)  or die(mysqli_error($db)); 

$inserttemp2 = "
    INSERT INTO temp_table_2
      ( `description`, `count`)
   SELECT RELATEDTO, COUNT(*) as count FROM mor WHERE RELATEDTO IN('FOD - Apron','FOD - RWY','FOD - TXWY') AND  YEAR(DATE) = YEAR(CURDATE()) GROUP BY RELATEDTO ORDER BY count DESC
  ";

mysqli_query($db, $inserttemp2)  or die(mysqli_error($db));

  $select = "
    SELECT description AS HITYPE,SUM(count) AS count FROM temp_table_2 GROUP BY HITYPE ORDER BY count DESC;
  ";
  $result = mysqli_query($db, $select)  or die(mysqli_error($db)); 
  
	
				/* $query = "SELECT HITYPE,RELATEDTO, COUNT(*) as count 			
				FROM hazardreport,mor WHERE HITYPE IN('FOD - Apron','FOD - RWY','FOD - TXWY')
				GROUP BY HITYPE ORDER BY count DESC"; */
		 /*  $result = mysqli_query($db, $query)  or die(mysqli_error($db)); 	 */  
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  
	 
		
		
?>