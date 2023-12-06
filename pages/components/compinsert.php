<?php
// Fetching Values From URL
 include '../../dbconfig.php';
 $compid = mysqli_real_escape_string($db,$_POST['compid']); 
 $yearaudit = mysqli_real_escape_string($db,$_POST['yearaudit']); 
 $description = mysqli_real_escape_string($db,$_POST['description']); 
 $mitigation = mysqli_real_escape_string($db,$_POST['mitigation']);
 $compcert = mysqli_real_escape_string($db,$_POST['compcert']);
 $riskowner = mysqli_real_escape_string($db,$_POST['riskowner']);
 $hitype = mysqli_real_escape_string($db,$_POST['hitype']);
 $airport = mysqli_real_escape_string($db,$_POST['airport']); 
 $updatedetails = mysqli_real_escape_string($db,$_POST['updatedetails']); 
 
 $lastupdatedate = mysqli_real_escape_string($db,$_POST['lastupdatedate']); 
 $lastupdatedatetwo = DateTime::createFromFormat('m/d/Y',$lastupdatedate);
 $lastupdate= $lastupdatedatetwo->format("Y-m-d"); 
 
 $targetdate = mysqli_real_escape_string($db,$_POST['targetdate']); 
 $targetdatetwo = DateTime::createFromFormat('m/d/Y',$targetdate);
 $targetdatethree= $targetdatetwo->format("Y-m-d"); 
 $status = mysqli_real_escape_string($db,$_POST['status']);  
 $currentdate = date('Y-m-d'); 
 
 $query = "INSERT INTO compliance (COMP_ID,YEAR_AUDIT,DESCRIPTION,MITIGATIONLEVEL,TARGETDATE,RISKOWNER,LASTUPDATE,CLOSEDRO,STATUS,RELATEDTO,AIRPORT,CERT,SUBMITDATE) 
		VALUES('$compid','$yearaudit','$description','$mitigation','$targetdatethree', '$riskowner','$lastupdate','$status','$status','$hitype','$airport','$compcert','$currentdate');
		INSERT INTO complianceweeklyupdate(COMP_ID,UPDATEDATE,UPDATECONTENT,PERSON,STATUS)
		VALUES('$compid','$lastupdate','$updatedetails', 'SDA','$status')";
       
         mysqli_multi_query($db, $query) or die(mysqli_error($db));  
		
		
?>