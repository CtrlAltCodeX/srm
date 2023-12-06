<?php
// Fetching Values From URL
 

        include '../../dbconfig.php';
		
		$curyear = date("Y");
		$queryONE = "SELECT MAX(YEARLYINCREMENTS) AS NUMBER FROM audit WHERE CURYEAR = '$curyear'";
		$resultONE = mysqli_query($db, $queryONE)  or die('error'); 
		while ($rowONE = mysqli_fetch_array($resultONE)) 
						{   
					        $number = $rowONE['NUMBER']+1;
							
						}
		$ha = "A";
		$id = $ha.$number.'/'.$curyear;
		$queryTWO = "INSERT INTO audit(YEARLYINCREMENTS,CURYEAR,AID)
		VALUES('$number','$curyear','$id')";
		$resultTWO = mysqli_query($db, $queryTWO)  or die('error');
		echo $id;
		
		
?>