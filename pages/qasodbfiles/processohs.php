<?php
// Fetching Values From URL 
include '../../dbconfig.php'; 
 $id = mysqli_real_escape_string($db,$_POST['id']);
 $riskcontext = mysqli_real_escape_string($db,$_POST['riskcontext']); 
 $riskconsequence = mysqli_real_escape_string($db,$_POST['riskconsequence']);
 $riskowner = mysqli_real_escape_string($db,$_POST['riskowner']); 
 $rhood = mysqli_real_escape_string($db,$_POST['rhood']);
 $rl = mysqli_real_escape_string($db,$_POST['rl']);
 $rew = mysqli_real_escape_string($db,$_POST['rew']);
 $recommendeda = mysqli_real_escape_string($db,$_POST['recommendeda']);
 $ohsref = mysqli_real_escape_string($db,$_POST['ohsref']);
 $qaso = mysqli_real_escape_string($db,$_POST['qaso']);
 
 $hitype = mysqli_real_escape_string($db,$_POST['hitype']);
 $potcausetype = mysqli_real_escape_string($db,$_POST['potcausetype']);
 $potcaused = mysqli_real_escape_string($db,$_POST['potcaused']);
 $effecttype = mysqli_real_escape_string($db,$_POST['effecttype']);
 $effectd = mysqli_real_escape_string($db,$_POST['effectd']);
 $hazorinc = mysqli_real_escape_string($db,$_POST['hazorinc']);
 $certificatehazard = mysqli_real_escape_string($db,$_POST['certificatehazard']);
 
 if($rew==="1 Week")
{
	$td = date("Y-m-d", strtotime("+1 week"));													
								
}
else 
{
	$td = date("Y-m-d", strtotime("+2 week"));							
}
 



     

     
	  
	  $query = "update hazardreport set RISKCONTEXT='$riskcontext',RISKCONSEQUENCE='$riskconsequence',RISKHOOD='$rhood',
	  RISKOWNER='$riskowner',RISKLEVEL='$rl',RESPONSE='$rew',RECOMMENDEDA='$recommendeda',OHSREF='$ohsref', QASOCHECK='1',CLOSEDRO='OPEN', 
	  SDCCHECKTWO='1',CLOSEDRO='OPEN', SDCSUBMITDATE=now(),LASTUPDATE=now(),HITYPE='$hitype',CAUSETYPE='$potcausetype',CD=' $potcaused',
	  EFFECTTYPE='$effecttype',ED='$effectd',HAZORINC='$hazorinc',CERT='$certificatehazard', TARGETDATE='$td' WHERE HAZID='$id';
      INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON)VALUES('$id',CURDATE(),'SUBMITTED TO RISK OWNER', 
	  '$qaso')";
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
     mysqli_multi_query($db, $query) or die(mysqli_error($db));
	  
	 
		
		
?>