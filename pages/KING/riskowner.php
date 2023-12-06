<?php

 $yearfrom = $_POST['yearfrom'];
 $yearto = $_POST['yearto']; 

 include '../../dbconfig.php'; 
	  
	  $data = array();
	  $query = "SELECT DISTINCT RISKOWNER FROM hazardreport WHERE CURYEAR BETWEEN $yearfrom AND $yearto";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $riskowner = $row['RISKOWNER'];
											
							
							
							$return_arr[] = array("riskowner" => $riskowner,
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
	 
		
		
?>