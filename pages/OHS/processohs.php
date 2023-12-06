<?php
// Fetching Values From URL
 $id = $_POST['id'];
 $riskcontext = $_POST['riskcontext']; 
 $riskconsequence = $_POST['riskconsequence'];
 $riskowner = $_POST['riskowner']; 
 $rhood = $_POST['rhood'];
 $rl = $_POST['rl'];
 $rew = $_POST['rew'];
 $recommendeda = $_POST['recommendeda'];
 $ohsref = $_POST['ohsref'];



      include '../../dbconfig.php'; 

     
	  
	  $query = "update hazardreport set RISKCONTEXT='$riskcontext',RISKCONSEQUENCE='$riskconsequence',RISKHOOD='$rhood',
	  RISKOWNER='$riskowner',RISKLEVEL='$rl',RESPONSE='$rew',RECOMMENDEDA='$recommendeda',OHSREF='$ohsref', QASOCHECK='1',CLOSEDRO='OPEN', 
	  SDCCHECKTWO='1',CLOSEDRO='OPEN', SDCSUBMITDATE=now(),LASTUPDATE=now() WHERE HAZID='$id';
      INSERT INTO weeklyupdate(HAZID,UPDATEDATE,UPDATECONTENT,PERSON)VALUES('$id',CURDATE(),'SUBMITTED TO RISK OWNER', 
	  'SDA')";
        
			 
			
        
	/* $query = "update hazardreport set QASOCHECK='1' WHERE HAZID='$id'";  */
     mysqli_multi_query($db, $query) or die('error');
	  
	 
		
		
?>