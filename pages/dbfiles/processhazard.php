<?php
// Fetching Values From URL
 $id = $_POST['id'];
 include '../../dbconfig.php'; 
	  
 $data = array();
 $query = "SELECT * FROM hazardreport where HAZID='$id'";
 $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
		{   
					        $hazid = $row['HAZID'];
							$hazorinc = $row['HAZORINC'];								
							$airport = $row['AIRPORT'];						
							$hitype=$row['HITYPE'];
							$hid = $row['HID'];
							$ct = $row['CAUSETYPE'];								
							$cd = $row['CD'];						
							$et=$row['EFFECTTYPE'];
							$ed = $row['ED'];
							$deventoccurance = $row['DEVENTOCCURANCE'];								
							$timeoc = $row['TIMEOC'];						
							$dreported=$row['DREPORTED'];
							$riskowner = $row['RISKOWNER'];
							$qaso = $row['QASO'];								
							$riskcontext = $row['RISKCONTEXT'];						
							$riskconsequence=$row['RISKCONSEQUENCE'];
							$rhood = $row['RISKHOOD'];
							$risklevel = $row['RISKLEVEL'];								
							$recommendeda = $row['RECOMMENDEDA'];						
							$ref=$row['OHSREF'];
							$status = $row['STATUS'];
							$cert = $row['CERT'];								
							$tg = $row['TARGETDATE'];						
							
							
							$return_arr[] = array("hazid" => $hazid,
							"hazorinc"=> $hazorinc,
							"airport" => $airport,	
							"hitype" => $hitype,
							"hid" => $hid,
							"ct" => $ct,
							"cd" => $cd,		
							"et" => $et,	
							"ed" => $ed,
							"deventoccurance" => $deventoccurance,	
							"timeoc" => $timeoc,
							"dreported" => $dreported,	
							"riskowner" => $riskowner,
							"qaso" => $qaso,	
							"riskcontext" => $riskcontext,	
							"riskconsequence" => $riskconsequence,
							"rhood" => $rhood,	
							"risklevel" => $risklevel,
							"recommendeda" => $recommendeda,	
							"ref" => $ref,	
							"status" => $status,	
							"cert" => $cert,	
							"tg" => $tg,
							
							);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>