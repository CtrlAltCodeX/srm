<?php

 include '../../dbconfig.php'; 
	  
	  $data = array();
	  $query = "SELECT DISTINCT CURYEAR FROM hazardreport";;
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $yearfrom = $row['CURYEAR'];
											
							
							
							$return_arr[] = array("yearfrom" => $yearfrom,
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
	 
		
		
?>