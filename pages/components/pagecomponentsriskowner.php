<div class="box box-danger">
			
			
			<div class="box-header">
              <h3 class="box-title">Transferred Items</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
			 <div class="table-responsive">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>Item</th>
				  <th>ID</th>
				  
                  
				  <th>From</th>   
                       
				  <th>Details</th>
                 
				 
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(CURDATE(),SDCSUBMITDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='1' AND SDCCHECKTWO='1' AND NEWRISKOWNER='$pageuser' AND CLOSEDRO='OPEN'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>HAZARD</td>";
							echo "<td>".$row['HAZID']."</td>";
							echo "<td>".$row['RISKOWNER']."</td>";
								
							
							
							
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myMODALmyMODAL' 
								data-id='".$row['HAZID']."'data-hazorinc='".$row['HAZORINC']."' data-airport='".$row['AIRPORT']."' data-hitype='".$row['HITYPE']."' data-hid='".$row['HID']."' data-causetype='".$row['CAUSETYPE']."'
								data-cd='".$row['CD']."' data-effecttype='".$row['EFFECTTYPE']."' data-ed='".$row['ED']."' data-deventoccurance='".$row['DEVENTOCCURANCE']."'data-timeoc='".$row['TIMEOC']."'
								data-dreported='".$row['DREPORTED']."' data-userreported='".$row['USERREPORTED']."'data-riskowner='".$row['RISKOWNER']."' 
								data-qaso='".$row['QASO']."'data-riskcontext='".$row['RISKCONTEXT']."'data-riskconsequence='".$row['RISKCONSEQUENCE']."'
								data-riskhood='".$row['RISKHOOD']."'data-risklevel='".$row['RISKLEVEL']."'data-response='".$row['RESPONSE']."'
								data-recommendeda='".$row['RECOMMENDEDA']."'data-ohsref='".$row['OHSREF']."'>View </button></td>";
							
							echo "</tr>";	
							
					    }
						
						$queryt = "SELECT * FROM mor  WHERE SDCCHECK='1' AND NEWRISKOWNER='$pageuser' AND CLOSEDRO='OPEN'";
						mysqli_query($db, $queryt) or die('Error querying database.');
						$resultt = mysqli_query($db, $queryt);
						
						
						while ($row = mysqli_fetch_array($resultt)) 
						{
							echo "<tr>";
							echo "<td>MOR</td>";
							echo "<td>".$row['MORID']."</td>";
							echo "<td>".$row['RISKOWNER']."</td>";
							
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#MORMODALTRANSFER' 
								data-id='".$row['MORID']."'data-caafid='".$row['CAAFID']."'data-catofoc='".$row['CATOFOC']."'data-actype='".$row['ACTYPE']."'data-reg='".$row['REG']."'data-operator='".$row['OPERATOR']."'
								data-date='".$row['DATE']."'data-time='".$row['TIME']."'data-timetype='".$row['TIMETYPE']."'data-loc_pos_rwy='".$row['LOC_POS_RWY']."'data-fcr_flightno='".$row['FCR_FLIGHTNO']."'
								data-fcr_rf='".$row['FCR_RF']."'data-fcr_rt='".$row['FCR_RT']."'data-fcr_ias='".$row['FCR_IAS']."' 
								data-fcr_ft='".$row['FCR_FT']."'data-fcr_clearance='".$row['FCR_CLEARANCE']."'data-etops='".$row['ETOPS']."'
								data-nature_flight='".$row['NATURE_FLIGHT']."'data-flight_phase='".$row['FLIGHT_PHASE']."'data-env_w_kts='".$row['ENV_W_KTS']."'
								data-env_w_oc='".$row['ENV_W_OC']."'data-env_c_type='".$row['ENV_C_TYPE']."'data-env_c_ft='".$row['ENV_C_FT']."'
								data-env_c_th='".$row['ENV_C_TH']."'data-env_p_w='".$row['ENV_P_W']."'data-env_p_l='".$row['ENV_P_L']."'
								data-omc_v='".$row['OMC_V']."'data-omc_icing='".$row['OMC_ICING']."'data-omc_turb='".$row['OMC_TURB']."'
								data-rs_status='".$row['RS_STATUS']."'data-rs_cat='".$row['RS_CAT']."'data-airport='".$row['AIRPORT']."'
								data-relatedto='".$row['RELATEDTO']."'data-title='".$row['TITLE']."'data-narrative='".$row['NARRATIVE']."'
								data-reporter_org='".$row['REPORTER_ORG']."'data-reporter_name='".$row['REPORTER_NAME']."'data-reporter_position='".$row['REPORTER_POSITION']."'
								data-lastupdate='".$row['LASTUPDATE']."'data-receiveddate='".$row['RECEIVEDDATE']."'data-riskowner='".$row['RISKOWNER']."'>View </button></td>";
							
								
													  
														
								
								echo "</tr>";
						   
								
														
							
							
					    }
						
						$queryc = "SELECT * FROM compliance  WHERE  NEWRISKOWNER='$pageuser' AND CLOSEDRO='OPEN'";
						mysqli_query($db, $queryc) or die('Error querying database.');
						$resultc = mysqli_query($db, $queryc);
						
						
						while ($row = mysqli_fetch_array($resultc)) 
						{
							echo "<tr>";
							echo "<td>COMPLIANCE</td>";
							echo "<td>".$row['COMP_ID']."</td>";
							echo "<td>".$row['RISKOWNER']."</td>";
							
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#COMPMODALTRANSFER' 
								data-id='".$row['COMP_ID']."'data-yearaudit='".$row['YEAR_AUDIT']."' data-desc='".$row['DESCRIPTION']."' data-ml='".$row['MITIGATIONLEVEL']."' data-tg='".$row['TARGETDATE']."' data-ro='".$row['RISKOWNER']."'
								data-rt='".$row['RELATEDTO']."'data-airport='".$row['AIRPORT']."'data-lu='".$row['LASTUPDATE']."' data-closedro='".$row['CLOSEDRO']."' data-status='".$row['STATUS']."' >View </button></td>";
							
								
													  
														
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
              </div></div>
            <!-- /.box-body -->
            </div>
 
<div class="box box-primary">
			
			
			<div class="box-header">
              <h3 class="box-title">Your pending Hazards</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
			 <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
				  <th>RISK LEVEL</th>
                  
				  <th>Closure Expected:</th>   
                        
				  <th>Details</th>
                  <th>Update</th>
				   <th>Update Status</th>
				 
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(TARGETDATE ,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='1' AND SDCCHECKTWO='1' AND RISKOWNER='$pageuser' AND CLOSEDRO='OPEN'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['HAZID']."</td>";
							$risk = $row['RISKLEVEL'];
							
							if($risk == "High Risk")
							{
								echo "<td bgcolor='#F03434'></td>";
							}else if ($risk == "Medium Risk")
							{
								echo "<td bgcolor='#FABE58'></td>";
							}else
							{
								echo "<td bgcolor='#00E640'></td>";
							}
							
							if($row['DiffDate']<0)
								{
									echo "<td bgcolor='#F03434'>Overdue by ".abs($row['DiffDate'])." days</td>";
								}else if($row['DiffDate']>0 && $row['DiffDate']< 30 )
								{
									echo "<td bgcolor='#FABE58'>".$row['DiffDate']." days remaining</td>";
								}else{echo "<td bgcolor='#00E640'>".$row['DiffDate']." days remaining</td>";}			
							
							
							
							
							/*if($LastUpdateDiffDate<0)
							{
									echo "<td>Overdue by ".abs($LastUpdateDiffDate)." days</td>";
							}
							else
							{
								echo "<td>".$LastUpdateDiffDate." days</td>";
							}	 */
							
							/* echo "<td>".$row['DREPORTED']."</td>"; */
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myMODAL' 
								data-id='".$row['HAZID']."'data-hazorinc='".$row['HAZORINC']."' data-airport='".$row['AIRPORT']."' data-hitype='".$row['HITYPE']."' data-hid='".$row['HID']."' data-causetype='".$row['CAUSETYPE']."'
								data-cd='".$row['CD']."' data-effecttype='".$row['EFFECTTYPE']."' data-ed='".$row['ED']."' data-deventoccurance='".$row['DEVENTOCCURANCE']."'data-timeoc='".$row['TIMEOC']."'
								data-dreported='".$row['DREPORTED']."' data-userreported='".$row['USERREPORTED']."'data-riskowner='".$row['RISKOWNER']."' 
								data-qaso='".$row['QASO']."'data-riskcontext='".$row['RISKCONTEXT']."'data-riskconsequence='".$row['RISKCONSEQUENCE']."'
								data-riskhood='".$row['RISKHOOD']."'data-risklevel='".$row['RISKLEVEL']."'data-response='".$row['RESPONSE']."'
								data-recommendeda='".$row['RECOMMENDEDA']."'data-ohsref='".$row['OHSREF']."'data-newro='".$row['NEWRISKOWNER']."'>View </button></td>";
							
								
													  
							echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#myMODALTWO' 
								data-id='".$row['HAZID']."'>Update</button></td>";
								
							 $LastUpdateDiffDate = 7 - $row['LastUpdateDiff'] ;
							
							if($LastUpdateDiffDate<0)
							{
									echo "<td bgcolor='#F03434'></td>";
							}
							else
							{
								echo "<td bgcolor='#00E640'></td>";
							}	
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
            </div> </div>
            <!-- /.box-body -->
</div>
          
			
			
         
		  
<div class="box box-primary">
			
			
			<div class="box-header">
              <h3 class="box-title">Current MOR Listing</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
			<div class="table-responsive">
              <table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th> 
				  <th>CAAFID</th>			  
                 		                                 
				  <th>Details</th>
                  <th>Update</th>
				  <th>Update Status</th>
				 
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM mor  WHERE SDCCHECK='1'  AND RISKOWNER='$pageuser' AND CLOSEDRO='OPEN'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['MORID']."</td>";
							
							echo "<td>".$row['CAAFID']."</td>";
							
							
							
							
							/*if($LastUpdateDiffDate<0)
							{
									echo "<td>Overdue by ".abs($LastUpdateDiffDate)." days</td>";
							}
							else
							{
								echo "<td>".$LastUpdateDiffDate." days</td>";
							}	 */
							
							/* echo "<td>".$row['DREPORTED']."</td>"; */
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#MORMODAL' 
								data-id='".$row['MORID']."'data-caafid='".$row['CAAFID']."'data-catofoc='".$row['CATOFOC']."'data-actype='".$row['ACTYPE']."'data-reg='".$row['REG']."'data-operator='".$row['OPERATOR']."'
								data-date='".$row['DATE']."'data-time='".$row['TIME']."'data-timetype='".$row['TIMETYPE']."'data-loc_pos_rwy='".$row['LOC_POS_RWY']."'data-fcr_flightno='".$row['FCR_FLIGHTNO']."'
								data-fcr_rf='".$row['FCR_RF']."'data-fcr_rt='".$row['FCR_RT']."'data-fcr_ias='".$row['FCR_IAS']."' 
								data-fcr_ft='".$row['FCR_FT']."'data-fcr_clearance='".$row['FCR_CLEARANCE']."'data-etops='".$row['ETOPS']."'
								data-nature_flight='".$row['NATURE_FLIGHT']."'data-flight_phase='".$row['FLIGHT_PHASE']."'data-env_w_kts='".$row['ENV_W_KTS']."'
								data-env_w_oc='".$row['ENV_W_OC']."'data-env_c_type='".$row['ENV_C_TYPE']."'data-env_c_ft='".$row['ENV_C_FT']."'
								data-env_c_th='".$row['ENV_C_TH']."'data-env_p_w='".$row['ENV_P_W']."'data-env_p_l='".$row['ENV_P_L']."'
								data-omc_v='".$row['OMC_V']."'data-omc_icing='".$row['OMC_ICING']."'data-omc_turb='".$row['OMC_TURB']."'
								data-rs_status='".$row['RS_STATUS']."'data-rs_cat='".$row['RS_CAT']."'data-airport='".$row['AIRPORT']."'
								data-relatedto='".$row['RELATEDTO']."'data-title='".$row['TITLE']."'data-narrative='".$row['NARRATIVE']."'
								data-reporter_org='".$row['REPORTER_ORG']."'data-reporter_name='".$row['REPORTER_NAME']."'data-reporter_position='".$row['REPORTER_POSITION']."'
								data-lastupdate='".$row['LASTUPDATE']."'data-receiveddate='".$row['RECEIVEDDATE']."'data-riskowner='".$row['RISKOWNER']."'data-newro='".$row['NEWRISKOWNER']."'>View </button></td>";
							
								
													  
							echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#MORMODALTWO' 
								data-id='".$row['MORID']."'>Update</button></td>";
								 $LastUpdateDiffDate = 7 - $row['LastUpdateDiff'] ;
								if($LastUpdateDiffDate<0)
							{
									echo "<td bgcolor='#F03434'></td>";
							}
							else
							{
								echo "<td bgcolor='#00E640'></td>";
							}	
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
            </div>  </div>
            <!-- /.box-body -->
            </div>
          

<div class="box box-primary">
			
			
			<div class="box-header">
              <h3 class="box-title">Current COMPLIANCE Listing</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
			<div class="table-responsive">
              <table id="example7" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
				  <th>Level</th>
				  <th>Closure Expected:</th>   
                           
				  <th>Details</th>
                  <th>Update</th>
				   <th>Update Status</th>
				 
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(TARGETDATE ,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM compliance  WHERE RISKOWNER='$pageuser' AND CLOSEDRO='OPEN'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['COMP_ID']."</td>";
							echo "<td>".$row['MITIGATIONLEVEL']."</td>";
							
							
							
								if($row['DiffDate']<0)
								{
									echo "<td bgcolor='#F03434'>Overdue by ".abs($row['DiffDate'])." days</td>";
								}else if($row['DiffDate']>0 && $row['DiffDate']< 30 )
								{
									echo "<td bgcolor='#FABE58'>".$row['DiffDate']." days remaining</td>";
								}else{echo "<td bgcolor='#00E640'>".$row['DiffDate']." days remaining</td>";}						
								
							
							
							 
							/*
							if($LastUpdateDiffDate<0)
							{
									echo "<td>Overdue by ".abs($LastUpdateDiffDate)." days</td>";
							}
							else
							{
								echo "<td>".$LastUpdateDiffDate." days</td>";
							}	 */
							
							/* echo "<td>".$row['DREPORTED']."</td>"; */
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#COMPMODAL' 
								data-id='".$row['COMP_ID']."'data-yearaudit='".$row['YEAR_AUDIT']."' data-desc='".$row['DESCRIPTION']."' data-ml='".$row['MITIGATIONLEVEL']."' data-tg='".$row['TARGETDATE']."' data-ro='".$row['RISKOWNER']."'
								data-rt='".$row['RELATEDTO']."'data-airport='".$row['AIRPORT']."'data-lu='".$row['LASTUPDATE']."' data-closedro='".$row['CLOSEDRO']."' data-status='".$row['STATUS']."' data-newro='".$row['NEWRISKOWNER']."'>View </button></td>";
							
								
													  
							echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#COMPMODALTWO' 
								data-id='".$row['COMP_ID']."'>Update</button></td>";
								$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'] ;
									if($LastUpdateDiffDate<0)
							{
									echo "<td bgcolor='#F03434'></td>";
							}
							else
							{
								echo "<td bgcolor='#00E640'></td>";
							}	
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
            </div></div>
            <!-- /.box-body -->
            </div>
 
<div class="box box-primary">
			
			
			<div class="box-header">
              <h3 class="box-title">Current AUDIT Listing</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
			<div class="table-responsive">
              <table id="example17" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
				  <th>Risk Level</th>
				  <th>Closure Expected:</th>                               
				  <th>Details</th>
				  <th>Update</th>
				  <th>Update Status</th>
                  
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT DISTINCT(AID),RISK_LEVEL, DATEDIFF(recommendations.TARGETDATE,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),audit.LASTUPDATE) as LastUpdateDiff
						FROM audit,recommendations  WHERE recommendations.RISKOWNER='$pageuser' AND audit.AID=recommendations.ID AND audit.CLOSEDRO='OPEN' AND recommendations.STATUS='OPEN' GROUP BY AID";
						mysqli_query($db, $query) or die(mysqli_error($db));
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['AID']."</td>";
							$risk = $row['RISK_LEVEL'];
							
							if($risk == "High Risk")
							{
								echo "<td bgcolor='#F03434'></td>";
							}else if ($risk == "Medium Risk")
							{
								echo "<td bgcolor='#FABE58'></td>";
							}else
							{
								echo "<td bgcolor='#00E640'></td>";
							}
							
							
							
								if($row['DiffDate']<0)
								{
									echo "<td bgcolor='#F03434'>Overdue by ".abs($row['DiffDate'])." days</td>";
								}else if($row['DiffDate']>0 && $row['DiffDate']< 30 )
								{
									echo "<td bgcolor='#FABE58'>".$row['DiffDate']." days remaining</td>";
								}else{echo "<td bgcolor='#00E640'>".$row['DiffDate']." days remaining</td>";}						
												
								
							
							
							
							/*
							if($LastUpdateDiffDate<0)
							{
									echo "<td>Overdue by ".abs($LastUpdateDiffDate)." days</td>";
							}
							else
							{
								echo "<td>".$LastUpdateDiffDate." days remaining</td>";
							}	 */
							
							/* echo "<td>".$row['DREPORTED']."</td>"; */
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#AUDITMODAL' 
								data-id='".$row['AID']."'data-ro='".$pageuser."'>View </button></td>";
							 
							 echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#AUDITMODALUPDATE' 
								data-id='".$row['AID']."'data-ro='".$pageuser."'>Update</button></td>";
								
								/* $AUDITID=$row['AID'];  TAKES THE LAST ID*/
							 
							 $LastUpdateDiffDate = 7 - $row['LastUpdateDiff'] ;
								
											if($LastUpdateDiffDate<0)
							{
									echo "<td bgcolor='#F03434'></td>";
							}
							else
							{
								echo "<td bgcolor='#00E640'></td>";
							}			  
						
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
             </div></div>
            <!-- /.box-body -->
            </div>
 