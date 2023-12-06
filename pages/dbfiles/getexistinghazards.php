<?php
// Fetching Values From URL
 $department = $_POST['department'];

 include '../../dbconfig.php'; 
	  
	  $data = array();
	  $query = "SELECT * FROM hazardreport where RISKOWNER='$department'";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $hid = $row['HAZID'];
							$status = $row['STATUS'];
							$hdesc = $row['HID'];
							$htype = $row['HITYPE'];
							
							
							$return_arr[] = array("hid" => $hid,
							"status" => $status,
							"htype" => $htype,
							"hdesc" => $hdesc,
							
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>