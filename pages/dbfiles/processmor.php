<?php
// Fetching Values From URL
 $id = $_POST['id'];
 include '../../dbconfig.php'; 
	  
 $data = array();
 $query = "SELECT * FROM mor where MORID='$id'";
 $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
		{   
					        $morid = $row['MORID'];
							$airport = $row['AIRPORT'];								
							$narrative = $row['NARRATIVE'];						
							
						
							
							$return_arr[] = array("morid" => $morid,
							"airport" => $airport,	
							"narrative" => $narrative,
								
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>