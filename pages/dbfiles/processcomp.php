<?php
// Fetching Values From URL
 $id = $_POST['id'];
 include '../../dbconfig.php'; 
	  
 $data = array();
 $query = "SELECT * FROM compliance where COMP_ID='$id'";
 $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
		{   
					        $compid = $row['COMP_ID'];
							$airport = $row['AIRPORT'];								
							$description = $row['DESCRIPTION'];						
							$targetdate = $row['TARGETDATE'];	
						
							
							$return_arr[] = array("compid" => $compid,
							"airport" => $airport,	
							"description" => $description,
							"targetdate" => $targetdate,
								
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>