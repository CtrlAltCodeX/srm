<?php
// Fetching Values From URL
 $riskconsequence = $_POST['riskconsequence'];
 $rhood = $_POST['rhood'];
	switch ($riskconsequence) 
	{
    case "A - Catastrophic":
        $conseq = 'A';
        break;
    case "B - Hazardous":
        $conseq = 'B';
        break;
    case "C - Major":
        $conseq = 'C';
        break;
	case "D - Minor":
        $conseq = 'D';
        break;
	case "E - Negligence":
        $conseq = 'E';
        
	}
	switch ($rhood) 
	{
    case "5 - Frequent":
        $like = '5';
        break;
    case "4 - Occasional":
        $like = '4';
        break;
    case "3 - Remote":
        $like = '3';
        break;
	case "2 - Improbable":
        $like = '2';
        break;
	case "1 - Extremely Improbable":
        $like = '1';
        
	}
 include '../../dbconfig.php'; 
	  $risklevel = $like.$conseq;
	  $data = array();
	  $query = "SELECT * FROM risktable where value='$risklevel'";
	  $result = mysqli_query($db, $query)  or die('error'); 
	  
	  while ($row = mysqli_fetch_array($result)) 
						{   
					        echo $row['risklevel'];
							
						}

	  
		
		
?>