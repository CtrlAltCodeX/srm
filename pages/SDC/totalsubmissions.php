<?php


 include '../../dbconfig.php'; 
	  
	  $data = array();
	  $query = "SELECT * FROM hazardreport";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $hazid = $row['HAZID'];
							$airport = $row['AIRPORT'];
							
									
							$return_arr[] = array(
							"hazid" => $hazid,
							"airport" => $airport,
						);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>