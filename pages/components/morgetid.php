<?php
// Fetching Values From URL
 

        include '../../dbconfig.php';
		
		$curyear = date("Y");
		$queryONE = "SELECT MAX(YEARLYINCREMENTS) AS NUMBER FROM mor WHERE CURYEAR = '$curyear'";
		$resultONE = mysqli_query($db, $queryONE)  or die('error'); 
		while ($rowONE = mysqli_fetch_array($resultONE)) 
						{   
					        $number = $rowONE['NUMBER']+1;
							
						}
		$ha = "M";
		$id = $ha.$number.'/'.$curyear;
		
		echo $id;
		
		
?>