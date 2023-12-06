<?php

 include '../../dbconfig.php'; 

$id = mysqli_real_escape_string($db,$_POST['id']);
	  $data = array();
	  $query = "SELECT IDWA FROM recommendations WHERE ID='$id'";;
	  $result = mysqli_query($db, $query)  or die(mysqli_error($db)); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $idwa = $row['IDWA'];
											
							
							
							$return_arr[] = array("idwa" => $idwa,
							);
                    
						}

	  
           
      echo json_encode($return_arr);
