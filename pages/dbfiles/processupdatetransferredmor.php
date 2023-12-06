<?php
// Fetching Values From URL
 $id = $_POST['id'];

 include '../../dbconfig.php'; 
	  
	  $data = array();
	  $query = "SELECT * FROM morweeklyupdate where MORID='$id'";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $morid = $row['MORID'];
							$updatedate = $row['UPDATEDATE'];
							$updatecontent = $row['UPDATECONTENT'];
							$person = $row['PERSON'];
							$status = $row['STATUS'];
							if ((!(($row['FILENAME'])=='undefined')) && (!(empty($row['FILENAME'])) ) && (!(($row['FILENAME'])=='undefinedundefined')) &&(!(($row['FILENAME'])=='.')))
							{
								$link = "<a href=../uploads/".$row['FILENAME']." download=".$row['FILENAME'].">Download File</a>";
							}else
							{
								$link = "No File ";
							}
							
							
							
							$return_arr[] = array("morid" => $morid,
							"updatedate" => $updatedate,
							"updatecontent" => $updatecontent,
							"person" => $person,
							"status" => $status,
							"link" => $link,);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>