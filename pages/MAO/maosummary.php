<?php
// Fetching Values From URL

        include '../../dbconfig.php';

        $query = "SELECT SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
		          SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
				  COUNT(STATUS) AS 'TOTAL'
				  FROM hazardreport WHERE RISKOWNER = 'MAO'";
				  
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $open = $row['OPEN'];
							$closed = $row['CLOSED'];
							$total = $row['TOTAL'];
							
													
							
							$return_arr[] = array("open" => $open,
							"closed" => $closed,
							"total" => $total,
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
       
?>