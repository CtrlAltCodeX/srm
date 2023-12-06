<?php
// Fetching Values From URL
 $id = $_POST['id'];

 include '../../dbconfig.php'; 
	  
	  $data = array();
	  $query = "SELECT * FROM weeklyupdate where HAZID='$id'";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        $hazid = $row['HAZID'];
							$updatedate = $row['UPDATEDATE'];
							$updatecontent = $row['UPDATECONTENT'];
							$person = $row['PERSON'];
							if ((!(($row['FILENAME'])=='undefined')) && (!(empty($row['FILENAME'])) ) )
							{
								$link = "<a href=../uploads/".$row['FILENAME']." download=".$row['FILENAME'].">Download File</a>";
							}else
							{
								$link = "No File ";
							}
							
							
							
							$return_arr[] = array("hazid" => $hazid,
							"updatedate" => $updatedate,
							"updatecontent" => $updatecontent,
							"person" => $person,
							"link" => $link,);
                    
						}

	  
           
      echo json_encode($return_arr);
 
     
	  
	  
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
      
	  
	 
		
		
?>