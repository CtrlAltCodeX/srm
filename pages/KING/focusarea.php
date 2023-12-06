<?php

 $yearfromajax = $_POST['yearfromajax'];
 $monthfrom = $_POST['monthfrom'];
 $yeartoajax = $_POST['yeartoajax'];
 $monthto = $_POST['monthto'];
 $status = $_POST['status'];
 $risklevel = $_POST['risklevel'];
 $dateone = $yearfromajax.'-'.$monthfrom.'-'.'01';
 $datetwo = $yeartoajax.'-'.$monthto.'-'.'31';

 
 include '../../dbconfig.php'; 
	  
	  $data = array();
	  if($status=="BOTH")
	  {
		  
				$query = "SELECT DISTINCT HITYPE,
				SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
				SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
				COUNT(STATUS) AS 'TOTAL'
				FROM hazardreport WHERE HITYPE IS NOT NULL AND RISKLEVEL='$risklevel' AND DATE(DREPORTED) BETWEEN '$dateone' AND 
				'$datetwo'
				GROUP BY HITYPE
				ORDER BY TOTAL DESC";
		  $result = mysqli_query($db, $query)  or die('error'); 	  
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  }
	  else if($status=="OPEN")
	  {
		  $query = "SELECT DISTINCT HITYPE,SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN FROM hazardreport WHERE (RISKLEVEL='$risklevel')AND (RISKLEVEL IS NOT NULL) AND (STATUS='$status') AND  DATE(DREPORTED) BETWEEN '$dateone' AND 
				'$datetwo'GROUP BY HITYPE
				ORDER BY OPEN DESC";
		  $result = mysqli_query($db, $query)  or die('error'); 	  
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  }
	  else
	  {
		  $query = "SELECT DISTINCT HITYPE,SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED FROM hazardreport WHERE (RISKLEVEL='$risklevel')AND (RISKLEVEL IS NOT NULL) AND (STATUS='$status') AND  DATE(DREPORTED) BETWEEN '$dateone' AND 
				'$datetwo'GROUP BY HITYPE
				ORDER BY CLOSED DESC";
		  $result = mysqli_query($db, $query)  or die('error'); 	  
	       $data = array();
		foreach ($result as $row) 
		{
			$data[] = $row;
		}

		print json_encode($data);
	  }
	  
 
	  
           
    
 
	 
		
		
?>