<?php
// Fetching Values From URL
 

        include '../../dbconfig.php';
		
		$curyear = date("Y");
		$queryONE = "SELECT MAX(YEARLYINCREMENTS) AS NUMBER FROM hazardreport WHERE CURYEAR = '$curyear'";
		$resultONE = mysqli_query($db, $queryONE)  or die('error'); 
		while ($rowONE = mysqli_fetch_array($resultONE)) 
						{   
					        $number = $rowONE['NUMBER']+1;
							
						}
		$ha = "H";
		$id = $ha.$number.'/'.$curyear;
		$queryTWO = "INSERT INTO hazardreport(YEARLYINCREMENTS,CURYEAR,HAZID)
		VALUES('$number','$curyear','$id')";
		$resultTWO = mysqli_query($db, $queryTWO)  or die('error');
		echo $id;
		
		
?>