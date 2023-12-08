<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">New Hazard from SDA</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body" id="tablediv">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Details</th>
						<th>Transfer</th>
					</tr>
				</thead>
				<tbody>

					<?php
					include '../../dbconfig.php';
					$query = "SELECT * FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='0' AND QASO='$pageuser'";
					mysqli_query($db, $query) or die('Error querying database.');
					$result = mysqli_query($db, $query);


					while ($row = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>" . $row['HAZID'] . "</td>";


						echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' 
								data-id='" . $row['HAZID'] . "'  data-hid='" . $row['HID'] . "'		
								data-dreported='" . $row['DREPORTED'] . "' data-airport='" . $row['AIRPORT'] . "'data-riskowner='" . $row['RISKOWNER'] . "'>
								View </button></td>";
						echo "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#exampleModalTransfer' 
								data-id='" . $row['HAZID'] . "'  data-hid='" . $row['HID'] . "'	data-airport='" . $row['AIRPORT'] . "'>
								Tranfers... </button></td>";
						echo "</tr>";
					}
					mysqli_close($db);
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
		</div>
	</div>
</div>


<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Manager Hazard Closure Submissions</h3>
	</div>

	<div class="box-body" id="tablediv">
		<div class="table-responsive">
			<table id="example2" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>HItype</th>
						<th>PCtype</th>
						<th>ECtype</th>
						<th>Closed Date</th>
						<th>Review</th>
					</tr>
				</thead>
				<tbody>

					<?php

					include '../../dbconfig.php';
					$query = "SELECT * FROM hazardreport WHERE CLOSEDRO='CLOSED' AND STATUS='OPEN'AND QASO='$pageuser'";
					mysqli_query($db, $query) or die('Error querying database.');
					$result = mysqli_query($db, $query);


					while ($row = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>" . $row['HAZID'] . "</td>";
						echo "<td>" . $row['HITYPE'] . "</td>";
						echo "<td>" . $row['CAUSETYPE'] . "</td>";
						echo "<td>" . $row['EFFECTTYPE'] . "</td>";
						echo "<td>" . $row['LASTUPDATE'] . "</td>";

						echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myMODALTHREE' 
								data-id='" . $row['HAZID'] . "' data-hitype='" . $row['HITYPE'] . "' data-hid='" . $row['HID'] . "' data-causetype='" . $row['CAUSETYPE'] . "'
								data-cd='" . $row['CD'] . "' data-effecttype='" . $row['EFFECTTYPE'] . "' data-ed='" . $row['ED'] . "' data-deventoccurance='" . $row['DEVENTOCCURANCE'] . "'
								data-dreported='" . $row['DREPORTED'] . "' data-userreported='" . $row['USERREPORTED'] . "'data-riskowner='" . $row['RISKOWNER'] . "' 
								data-qaso='" . $row['QASO'] . "'data-riskcontext='" . $row['RISKCONTEXT'] . "'data-riskconsequence='" . $row['RISKCONSEQUENCE'] . "'
								data-riskhood='" . $row['RISKHOOD'] . "'data-risklevel='" . $row['RISKLEVEL'] . "'data-response='" . $row['RESPONSE'] . "'
								data-recommendeda='" . $row['RECOMMENDEDA'] . "'data-ohsref='" . $row['OHSREF'] . "'data-tg='" . $row['TARGETDATE'] . "' >View </button></td>";
						echo "</tr>";
					}
					mysqli_close($db);

					?>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>HItype</th>
						<th>PCtype</th>
						<th>ECtype</th>
						<th>Closed Date</th>
						<th>Review</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Manager MOR Closure Submissions</h3>
	</div>

	<div class="box-body" id="tablediv">
		<div class="table-responsive">
			<table id="example3" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>CAAFID</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include '../../dbconfig.php';
						$query = "SELECT * FROM mor WHERE CLOSEDRO='CLOSED' AND STATUS='OPEN' AND QASO='$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);


						while ($row = mysqli_fetch_array($result)) {

							echo "<tr>";
							echo "<td>" . $row['MORID'] . "</td>";

							echo "<td>" . $row['CAAFID'] . "</td>";

							echo "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#MORMODALQASO' 
										data-id='" . $row['MORID'] . "'data-caafid='" . $row['CAAFID'] . "'data-catofoc='" . $row['CATOFOC'] . "'data-actype='" . $row['ACTYPE'] . "'data-reg='" . $row['REG'] . "'data-operator='" . $row['OPERATOR'] . "'
										data-date='" . $row['DATE'] . "'data-time='" . $row['TIME'] . "'data-timetype='" . $row['TIMETYPE'] . "'data-loc_pos_rwy='" . $row['LOC_POS_RWY'] . "'data-fcr_flightno='" . $row['FCR_FLIGHTNO'] . "'
										data-fcr_rf='" . $row['FCR_RF'] . "'data-fcr_rt='" . $row['FCR_RT'] . "'data-fcr_ias='" . $row['FCR_IAS'] . "' 
										data-fcr_ft='" . $row['FCR_FT'] . "'data-fcr_clearance='" . $row['FCR_CLEARANCE'] . "'data-etops='" . $row['ETOPS'] . "'
										data-nature_flight='" . $row['NATURE_FLIGHT'] . "'data-flight_phase='" . $row['FLIGHT_PHASE'] . "'data-env_w_kts='" . $row['ENV_W_KTS'] . "'
										data-env_w_oc='" . $row['ENV_W_OC'] . "'data-env_c_type='" . $row['ENV_C_TYPE'] . "'data-env_c_ft='" . $row['ENV_C_FT'] . "'
										data-env_c_th='" . $row['ENV_C_TH'] . "'data-env_p_w='" . $row['ENV_P_W'] . "'data-env_p_l='" . $row['ENV_P_L'] . "'
										data-omc_v='" . $row['OMC_V'] . "'data-omc_icing='" . $row['OMC_ICING'] . "'data-omc_turb='" . $row['OMC_TURB'] . "'
										data-rs_status='" . $row['RS_STATUS'] . "'data-rs_cat='" . $row['RS_CAT'] . "'data-airport='" . $row['AIRPORT'] . "'
										data-relatedto='" . $row['RELATEDTO'] . "'data-title='" . $row['TITLE'] . "'data-narrative='" . $row['NARRATIVE'] . "'
										data-reporter_org='" . $row['REPORTER_ORG'] . "'data-reporter_name='" . $row['REPORTER_NAME'] . "'data-reporter_position='" . $row['REPORTER_POSITION'] . "'
										data-lastupdate='" . $row['LASTUPDATE'] . "'data-receiveddate='" . $row['RECEIVEDDATE'] . "'data-riskowner='" . $row['RISKOWNER'] . "'>View </button></td>";

							echo "</tr>";
						}
						mysqli_close($db);
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>CAAFID</th>
						<th>Details</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

<!--MODAL FOR MORE ON THIS-->
<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Manager Audit Closure Submissions</h3>
	</div>

	<div class="box-body" id="tablediv">
		<div class="table-responsive">
			<table id="example2" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Audit Type</th>
						<th>Date of Audit</th>
						<th>View</th>
						<th>Update</th>
					</tr>
				</thead>
				<tbody>
					<?php
						include '../../dbconfig.php';
						$query = "SELECT DISTINCT(AID),AUDIT_TYPE, DATE
								FROM audit,recommendations  WHERE  audit.AID=recommendations.ID  AND audit.QASO='$pageuser' AND recommendations.STATUS='CLOSED' AND audit.STATUS='OPEN' GROUP BY AID";
						mysqli_query($db, $query) or die(mysqli_error($db));
						$result = mysqli_query($db, $query);

						while ($row = mysqli_fetch_array($result)) {

							echo "<tr>";
							echo "<td>" . $row['AID'] . "</td>";
							echo "<td>" . $row['AUDIT_TYPE'] . "</td>";
							echo "<td>" . $row['DATE'] . "</td>";
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#AUDITMODAL' data-id='" . $row['AID'] . "'data-ro='" . $pageuser . "'>View </button></td>";

							echo "<td><button type='button' class='btn btn-success approve' data-toggle='modal' data-target='#UPDATEAUDIT' data-id='" . $row['AID'] . "'data-ro='" . $pageuser . "'>Update</button></td>";

							echo "</tr>";
						}
						mysqli_close($db);
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Risk Level</th>
						<th>Completion</th>
						<th>Details</th>
						<th>Update</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>

<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Manage Audits</h3>
	</div>

	<div class="box-body" id="tablediv">
		<div class="table-responsive">
			<table id="example66" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Risk Level</th>
						<th>Completion</th>
						<th>Details</th>
						<th>Update</th>
						<th>Update Status</th>
					</tr>
				</thead>
				<tbody>

					<?php

					include '../../dbconfig.php';
					$query = "SELECT DISTINCT(AID),RISK_LEVEL, DATEDIFF(recommendations.TARGETDATE,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),audit.LASTUPDATE) as LastUpdateDiff
						FROM audit,recommendations  WHERE  audit.AID=recommendations.ID  AND audit.QASO='$pageuser' AND recommendations.STATUS='OPEN'GROUP BY AID";
					mysqli_query($db, $query) or die(mysqli_error($db));
					$result = mysqli_query($db, $query);


					while ($row = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>" . $row['AID'] . "</td>";
						$risk = $row['RISK_LEVEL'];

						if ($risk == "High Risk") {
							echo "<td bgcolor='#F03434'></td>";
						} else if ($risk == "Medium Risk") {
							echo "<td bgcolor='#FABE58'></td>";
						} else {
							echo "<td bgcolor='#00E640'></td>";
						}

						if ($row['DiffDate'] < 0) {
							echo "<td bgcolor='#F03434'>Overdue by " . abs($row['DiffDate']) . " days</td>";
						} else if ($row['DiffDate'] > 0 && $row['DiffDate'] < 30) {
							echo "<td bgcolor='#FABE58'>" . $row['DiffDate'] . " days remaining</td>";
						} else {
							echo "<td bgcolor='#00E640'>" . $row['DiffDate'] . " days remaining</td>";
						}

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
								data-id='" . $row['AID'] . "'data-ro='" . $pageuser . "'>View </button></td>";

						echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#AUDITMODALUPDATE' 
								data-id='" . $row['AID'] . "'data-ro='" . $pageuser . "'>Update</button></td>";

						$AUDITID = $row['AID'];

						$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];

						if ($LastUpdateDiffDate < 0) {
							echo "<td bgcolor='#F03434'></td>";
						} else {
							echo "<td bgcolor='#00E640'></td>";
						}


						echo "</tr>";
					}
					mysqli_close($db);

					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
		</div>
	</div>
</div>


<div class="modal fade bs-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuff">

					<div class="col-md-12">


						<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>


							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="output">
								<table class="table table-bordered table-hover" id="updatetablee">


								</table>
							</div>
							<!-- /.box-body -->
						</div>
					</div>

					<div class="col-md-6">

						<div class="form-group">

							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="ID" disabled="">
						</div>

						<div class="form-group"><label for="message-text" class="control-label">Airport:</label>
							<input type="text" class="form-control" id="airport" disabled="">
						</div>

						<div class="form-group"><label>Hazard / Incident</label>
							<select class="form-control select2" style="width: 100%;" id="hazorinc">
								<option></option>
								<option>HAZARD</option>
								<option>INCIDENT</option>


							</select>
						</div>

						<div class="form-group">
							<label>Related to: </label>
							<select class="form-control" id="hitype">
								<option></option>
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM related";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['focusarea'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>
						</div>


						<div class="form-group">
							<label for="message-text" class="control-label">Hazard/Incident Description</label>
							<textarea class="form-control" id="hid" disabled=""></textarea>
						</div>

						<div class="form-group">
							<label>Select Potential Cause Type</label>
							<select class="form-control" id="pct">
								<option></option>
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM potcause";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['CAUSEtype'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>

						</div>

						<div class="form-group">
							<label for="message-text" class="control-label">Potential Cause Description</label>
							<textarea class="form-control" id="pcd"></textarea>
						</div>

						<div class="form-group">
							<label>Select Effect Type</label>
							<select class="form-control" id="ect">
								<option></option>
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM effect";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['EFFECTtype'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>

						</div>

						<div class="form-group">
							<label for="message-text" class="control-label">Effect/Consequence Description</label>
							<textarea class="form-control" id="ecd"></textarea>
						</div>

						<div class="form-group">
							<label for="message-text" class="control-label"> Date/Time of Report</label>
							<input type="label" class="form-control" id="dr" disabled="">
						</div>

						<div class="form-group">
							<label>Assign Risk Owner</label>
							<select class="form-control select2" style="width: 100%; " id="riskowner" disabled="">
								<option></option>
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM riskowners";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['RISKOWNER'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>
						</div>

						<div class="form-group">
							<label>Assign Certificate</label>

							<select class="form-control select2" style="width: 100%; " id="certificatehazard">
								<option></option> <?php

													include '../../dbconfig.php';
													$query = "SELECT * FROM certificate";
													mysqli_query($db, $query) or die('Error querying database.');
													$result = mysqli_query($db, $query);

													while ($row = mysqli_fetch_array($result)) {
														echo "<option>" . $row['cert'] . "</option>";
													}
													mysqli_close($db);

													?>
							</select>

						</div>


					</div>

					<div class="col-md-6">






						<h3>Risk Treatment Plan</h3>
						<div class="form-group">
							<label>Risk Context(Effect/How it can happen?):</label>
							<textarea class="form-control" rows="3" placeholder="Enter ..." id="riskcontext"></textarea>
						</div>

						<h4>Initial Risk Rating</h4>
						<img src="../../dist/img/tables.png" alt="Risk Table" style="width:100%;height:100%;">
						<div class="form-group">
							<label>Risk Consequence</label>
							<select class="form-control select2" style="width: 100%; " id="riskconsequence">
								<option></option>
								<option>A - Catastrophic</option>
								<option>B - Hazardous</option>
								<option>C - Major</option>
								<option>D - Minor</option>
								<option>E - Negligence</option>
							</select>
						</div>
						<div class="form-group">
							<label>Risk Likelihood</label>
							<select class="form-control select2" style="width: 100%; " id="rhood">
								<option></option>
								<option>5 - Frequent</option>
								<option>4 - Occasional</option>
								<option>3 - Remote</option>
								<option>2 - Improbable</option>
								<option>1 - Extremely Improbable</option>
							</select>
						</div>
						<div class="form-group">
							<label>Risk Level</label>
							<select class="form-control select2" style="width: 100%; " id="rl" disabled="">
								<option>High Risk</option>
								<option>Medium Risk</option>
								<option>Low Risk</option>
							</select>
						</div>

						<div class="form-group">
							<label>Response Expected Within</label>
							<select class="form-control select2" style="width: 100%; " id="rew" disabled="">
								<option>1 Week</option>
								<option>2 Weeks</option>
							</select>
						</div>
						<div class="form-group">
							<label>Recommended Actions</label>
							<textarea class="form-control" rows="3" placeholder="Enter ..." id="recommendeda"></textarea>
						</div>
						<div class="form-group">
							<label>REFERENCE IF ANY</label>
							<textarea class="form-control" rows="3" placeholder="Enter ..." id="ohsref"></textarea>
						</div>
				</form>
			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()">Send to Risk Owner</button>
			</div>
		</div>
	</div>
</div>
</div>

<div class="modal fade bs-example-modal-lg" id="exampleModalTransfer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuff">
					<div class="col-md-12">

						<div class="form-group">

							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="IDT" disabled="">
							<label for="message-text" class="control-label">Airport:</label>
							<input type="text" class="form-control" id="airportT" disabled="">
						</div>

						<label for="message-text" class="control-label">Hazard/Incident Description</label>
						<textarea class="form-control" id="hidT" disabled=""></textarea>

						<div>
							<h3>QASO Transfer</h3>
							<label>QASO's</label>
							<select class="form-control select2" style="width: 100%; " id="qasoransfer">
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM qaso";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['QASO'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>
							<label>Reason for Transfer</label>
							<textarea class="form-control" rows="3" placeholder="Enter ..." id="reasonqaso"></textarea>

						</div>

					</div>


			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn bg-orange btn-flat" onclick="qasotransfer()">Transfer</button>

			</div>
		</div>
	</div>
</div>
</div>


<div class="modal fade bs-example-modal-lg" id="myMODALTHREE" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myMODALTHREELabel">New message</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<div class="col-md-6">
							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="IDq" disabled="">

							<label for="message-text" class="control-label">Hazard/Incident Type:</label>
							<select class="form-control" id="hitypeq" disabled="">
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM related";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['focusarea'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>


							<label for="message-text" class="control-label">Hazard/Incident Description</label>
							<textarea class="form-control" id="hidq" disabled=""></textarea>

							<label for="message-text" class="control-label">Potential Cause Type:</label>
							<select class="form-control" id="pctq" disabled="">
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM potcause";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['CAUSEtype'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>


							<label for="message-text" class="control-label">Potential Cause Description</label>
							<textarea class="form-control" id="pcdq" disabled=""></textarea>

							<label for="message-text" class="control-label">Effect/Consequence Type:</label>
							<select class="form-control" id="ectq" disabled="">
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM effect";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['EFFECTtype'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>

							<label for="message-text" class="control-label">Effect/Consequence Description</label>
							<textarea class="form-control" id="ecdq" disabled=""></textarea>
						</div>

						<div class="col-md-6">

							<div class="form-group">


								<label for="message-text" class="control-label"> Date Event Occured</label>
								<input type="label" class="form-control" id="dvoq" disabled="">

								<label for="message-text" class="control-label"> Date of Report</label>
								<input type="label" class="form-control" id="drq" disabled="">

								<label>Risk Owner</label>
								<select class="form-control select2" style="width: 100%; " id="roq" disabled="">
									<?php

									include '../../dbconfig.php';
									$query = "SELECT * FROM riskowners";
									mysqli_query($db, $query) or die('Error querying database.');
									$result = mysqli_query($db, $query);

									while ($row = mysqli_fetch_array($result)) {
										echo "<option>" . $row['RISKOWNER'] . "</option>";
									}
									mysqli_close($db);

									?>
								</select>

								<label>QASO</label>
								<select class="form-control select2" style="width: 100%; " id="qasoq" disabled="">
									<?php

									include '../../dbconfig.php';
									$query = "SELECT * FROM qaso";
									mysqli_query($db, $query) or die('Error querying database.');
									$result = mysqli_query($db, $query);

									while ($row = mysqli_fetch_array($result)) {
										echo "<option>" . $row['QASO'] . "</option>";
									}
									mysqli_close($db);

									?>
								</select>

								<h3>Risk Treatment Plan</h3>
								<label>Risk Context(Effect/How it can happen?):</label>
								<textarea class="form-control" rows="3" placeholder="Enter ..." id="riskcontextq" disabled=""></textarea>

								<h4>Initial Risk Rating</h4>
								<label>Risk Consequence</label>
								<select class="form-control select2" style="width: 100%; " id="riskconsequenceq" disabled="">
									<option>A - Catastrophic</option>
									<option>B - Hazardous </option>
									<option>C - Major</option>
									<option>D - Minor</option>
									<option>E - Negligence</option>
								</select>
								<label>Risk Likelihood</label>
								<select class="form-control select2" style="width: 100%; " id="rhoodq" disabled="">
									<option>5 - Frequent</option>
									<option>4 - Occasional</option>
									<option>3 - Remote</option>
									<option>2 - Improbable</option>
									<option>1 - Extremely Improbable</option>
								</select>
								<label>Risk Level</label>
								<select class="form-control select2" style="width: 100%; " id="rlq" disabled="">
									<option>High Risk</option>
									<option>Medium Risk</option>
									<option>Low Risk</option>
								</select>
								<label>Response Expected Within</label>
								<select class="form-control select2" style="width: 100%; " id="rewq" disabled="">
									<option>1 Week</option>
									<option>2 Weeks</option>

								</select>

								<label>Recommended Actions</label>
								<textarea class="form-control" rows="3" placeholder="Enter ..." id="recommendedaq" disabled=""></textarea>

								<label>Other reference</label>
								<textarea class="form-control" rows="3" placeholder="Enter ..." id="ohsrefq" disabled=""></textarea>



							</div>


						</div>


						<div class="col-md-12">


							<div class="box box-info">
								<div class="box-header">
									<h3 class="box-title">Update History</h3>


								</div>
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding" id="output">
									<table class="table table-bordered table-hover" id="updatetable">


									</table>
								</div>
								<!-- /.box-body -->
							</div>

							<div class="box box-primary">
								<div class="box-header">
									<h3 class="box-title">QASO feedback here...</h3>
								</div>
								<div class="box box-danger">
									<div class="box-header">
										<h3 class="box-title">Residual Risk Rating (Enter if hazard approved for closure)</h3>
									</div>
									<img src="../../dist/img/tables.png" alt="Risk Table" style="width:100%;height:100%;">
									<div class="col-md-6">
										<div class="form-group">
											<label>Residual Risk Consequence</label>
											<select class="form-control select2" style="width: 100%; " id="resriskconsequenceq">
												<option></option>
												<option>A - Catastrophic</option>
												<option>B - Hazardous </option>
												<option>C - Major</option>
												<option>D - Minor</option>
												<option>E - Negligence</option>
											</select>
										</div>
										<div class="form-group">
											<label>Residual Risk Likelihood</label>
											<select class="form-control select2" style="width: 100%; " id="resrhoodq">
												<option></option>
												<option>5 - Frequent</option>
												<option>4 - Occasional</option>
												<option>3 - Remote</option>
												<option>2 - Improbable</option>
												<option>1 - Extremely Improbable</option>
											</select>
										</div>
									</div>
									<label></label>
									<div class="col-md-6">
										<div class="form-group">
											<label>Residual Risk Level</label>
											<select class="form-control select2" style="width: 100%; " id="resrlq">
												<option></option>
												<option>High Risk</option>
												<option>Medium Risk</option>
												<option>Low Risk</option>
											</select>
										</div>
										<label></label>
										<div class="form-group">
											<input class="form-control" placeholder="Resdidual risk rating" id="resrating"></input>
										</div>
									</div>
									<label></label>

									<div class="box-body">
										<!-- <label>Update Content</label> -->
										<div class="form-group">
											<textarea class="form-control" rows="3" placeholder="Enter Feedback..." id="updatecontent"></textarea>
										</div>
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Name" id="updateuser">
										</div>
										<div class="form-group">
											<label>Set New Target Date: (If requested by Risk Owner, otherwise leave it as it is)</label>
											<div class="form-group">
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control pull-right" id="datepickerfidy">
												</div>
											</div>
											<!-- /.input group -->
										</div>
										<div class="form-group">
											<form id="closed">
												<label>
													<input type="radio" name="r1" class="minimal" value="1" checked>
													Approve Closure
												</label>
												<label>
													<input type="radio" name="r1" class="minimal" value="2">
													Disapprove Closure
												</label>
											</form>

										</div>

									</div>


								</div>


				</form>



			</div>

			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary" onclick="update()">Update</button>
		</div>
	</div>
</div>
</div>
</section>

<div class="modal fade bs-example-modal-lg" id="MORMODALQASO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="MORMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="morstuff">
					<div class="col-md-6">

						<div class="form-group">

							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="morid" disabled="">

							<label for="recipient-name" class="control-label">CAAF ID:</label>
							<input type="text" class="form-control" id="caafid" disabled="">

							<label for="recipient-name" class="control-label">RECEIVED DATE:</label>
							<input type="text" class="form-control" id="rd" disabled="">
							<label for="message-text" class="control-label">Hazard/Incident Type:</label>
							<select class="form-control" id="hitypeq" disabled="">
								<?php

								include '../../dbconfig.php';
								$query = "SELECT * FROM related";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);

								while ($row = mysqli_fetch_array($result)) {
									echo "<option>" . $row['focusarea'] . "</option>";
								}
								mysqli_close($db);

								?>
							</select>
							<div class="form-group">
								<label>CATEGORY OF OCCURANCE</label>
								<select class="form-control select2" style="width: 100%;" id="coo" disabled="">
									<option>ACCIDENT</option>
									<option>INCIDENT</option>
									<option>APHAZ</option>
									<option>FAILURE</option>
									<option>PROCEDURAL</option>
									<option>BIRDSTRIKE</option>
									<option>GENERAL</option>
								</select>
							</div>

							<div class="form-group">
								<label>AIRCRAFT TYPE & SERIES</label>
								<input class="form-control" id="actypeseries" type="text" disabled=""></input>
								<label>REGISTRATION</label>
								<input class="form-control" id="registration" type="text" disabled=""></input>
								<label>OPERATOR</label>
								<input class="form-control" id="operator" type="text" disabled=""></input>


								<label>Date :</label>
								<input type="text" class="form-control" id="date" disabled="">

								<label>Time:</label>
								<input type="text" class="form-control" id="timeoc" disabled="">

							</div>

							<div class="form-group">
								<label>Time Type:</label>
								<select class="form-control select2" style="width: 100%;" id="dtn" disabled="">
									<option>N/A</option>
									<option>DAY</option>
									<option>TWILIGHT</option>
									<option>NIGHT</option>

								</select>
							</div>
							<label>LOCATION/POSITION/RWY:</label>
							<input class="form-control" id="lpr" type="text" disabled=""></input>

							<label>
								<h2>FLIGHT/CABIN CREW REPORT</h2>
							</label>
							<label>FLIGHT NO:</label>
							<input class="form-control" id="fno" type="text" disabled=""></input>
							<label>ROUTE FROM:</label>
							<input class="form-control" id="routefrom" type="text" disabled=""></input>
							<label>ROUTE TO:</label>
							<input class="form-control" id="routeto" type="text" disabled=""></input>
							<label>IAS (kts):</label>
							<input class="form-control" id="ias" type="text" disabled=""></input>
							<label>FL/ALT/HT (ft):</label>
							<input class="form-control" id="fah" type="text" disabled=""></input>

							<label>FCR Clearance:</label>
							<select class="form-control select2" style="width: 100%;" id="iv" disabled="">
								<option>N/A</option>
								<option>IFR</option>
								<option>VFR</option>

							</select>
							<label>ETOPS/RVSM/RNP 4/10</label>
							<select class="form-control select2" style="width: 100%;" id="err" disabled="">
								<option>N/A</option>
								<option>YES</option>
								<option>NO</option>
							</select>

							<div class="form-group">
								<label>Nature of Flight</label>
								<select class="form-control select2" style="width: 100%;" id="nof" disabled="">
									<option>N/A</option>
									<option>PAX</option>
									<option>FREIGHT</option>
									<option>POSITIONING</option>
									<option>FERRY</option>
									<option>TEST</option>
									<option>TRAINING</option>
									<option>BUSINESS</option>
									<option>AGRICULTURAL</option>
									<option>SURVEY</option>
									<option>PLEASURE</option>
									<option>CLUB/GROUP</option>
									<option>PRIVATE</option>
									<option>PARACHUTING</option>
									<option>TOWING</option>

								</select>
							</div>

							<div class="form-group">
								<label>Flight Phase</label>
								<select class="form-control select2" style="width: 100%;" id="fp" disabled="">
									<option>N/A</option>
									<option>PARKED</option>
									<option>TAXYING</option>
									<option>TAKE-OFF</option>
									<option>INIT CLIMB</option>
									<option>CLIMB</option>
									<option>CRUISE</option>
									<option>DESCENT</option>
									<option>HOLDING</option>
									<option>APPROACH</option>
									<option>LANDING</option>
									<option>CLUB/GROUP</option>
									<option>CIRCUIT</option>
									<option>AEROBATICS</option>
									<option>HOVER</option>

								</select>
							</div>


						</div>
					</div>




					<div class="col-md-6">

						<div class="form-group">





							<label>
								<h2>ENVIRONMENT</h2>
							</label>
							<label>
								<h3>WIND</h3>
							</label>
							<div class="form-group">
								<label>DRIN SPEED (kts)</label>
								<input class="form-control" id="ds" type="text" disabled=""></input>
								<label>OAT(oC)</label>
								<input class="form-control" id="oat" type="text" disabled=""></input>
							</div>
							<div class="form-group">
								<label>
									<h3>CLOUD</h3>
								</label>
								<div class="form-group">
									<label>Type</label>
									<input class="form-control" id="ctype" type="text" disabled=""></input>
									<label>Height (ft)</label>
									<input class="form-control" id="cht" type="text" disabled=""></input>
									<label>8th</label>
									<input class="form-control" id="cth" type="text" disabled=""></input>

								</div>

							</div>

							<div class="form-group">
								<label>
									<h3>PRECIPITATION</h3>
								</label>


								<div class="form-group">
									<label>Weather</label>
									<select class="form-control select2" style="width: 100%;" id="pw" disabled="">
										<option>N/A</option>
										<option>RAIN</option>
										<option>SNOW</option>
										<option>SLEET</option>
										<option>HAIL</option>


									</select>
									<label>Level</label>
									<select class="form-control select2" style="width: 100%;" id="pt" disabled="">
										<option>N/A</option>
										<option>LIGHT</option>
										<option>MOD</option>
										<option>HEAVY</option>



									</select>

								</div>

							</div>
							<div class="form-group">
								<label>
									<h3>OTHER METEOROLOGICAL CONDITIONS</h3>
								</label>


								<div class="form-group">
									<label>VISIBILITY</label>
									<input class="form-control" id="vk" type="text" disabled=""></input>

								</div>
								<div class="form-group">
									<label>ICING</label>
									<select class="form-control select2" style="width: 100%;" id="icing" disabled="">
										<option>N/A</option>
										<option>LIGHT</option>
										<option>MOD</option>
										<option>SEVERE</option>



									</select>
								</div>
								<div class="form-group">
									<label>TURBULANCE</label>
									<select class="form-control select2" style="width: 100%;" id="turbulance" disabled="">
										<option>N/A</option>
										<option>LIGHT</option>
										<option>MOD</option>
										<option>SEVERE</option>



									</select>
								</div>

							</div>

							<div class="form-group">
								<label>
									<h3>RUNWAY STATE</h3>
								</label>


								<div class="form-group">
									<label>Status</label>
									<select class="form-control select2" style="width: 100%;" id="rst" disabled="">
										<option>N/A</option>
										<option>DRY</option>
										<option>WET</option>
										<option>ICE</option>
										<option>SNOW</option>
										<option>SLUSH</option>


									</select>
									<label>Category</label>
									<select class="form-control select2" style="width: 100%;" id="rsc" disabled="">
										<option>N/A</option>
										<option>CATEGORY I</option>
										<option>CATEGORY II</option>
										<option>CATEGORY III</option>



									</select>

								</div>

							</div>

							<div class="form-group">
								<label>Select Airport Involved</label>
								<select class="form-control" id="airport" disabled="">
									<?php

									include '../../dbconfig.php';
									$query = "SELECT * FROM airport";
									mysqli_query($db, $query) or die('Error querying database.');
									$result = mysqli_query($db, $query);

									while ($row = mysqli_fetch_array($result)) {
										echo "<option>" . $row['airport'] . "</option>";
									}
									mysqli_close($db);

									?>

								</select>

							</div>

							<div class="form-group">
								<label>Related to: </label>
								<select class="form-control" id="hitype" disabled="">
									<?php

									include '../../dbconfig.php';
									$query = "SELECT * FROM related";
									mysqli_query($db, $query) or die('Error querying database.');
									$result = mysqli_query($db, $query);

									while ($row = mysqli_fetch_array($result)) {
										echo "<option>" . $row['focusarea'] . "</option>";
									}
									mysqli_close($db);

									?>
								</select>
							</div>

							<div class="form-group">

								<label>Risk Owner</label>
								<select class="form-control select2" style="width: 100%; " id="riskowner" disabled="">
									<?php

									include '../../dbconfig.php';
									$query = "SELECT * FROM riskowners";
									mysqli_query($db, $query) or die('Error querying database.');
									$result = mysqli_query($db, $query);

									while ($row = mysqli_fetch_array($result)) {
										echo "<option>" . $row['RISKOWNER'] . "</option>";
									}
									mysqli_close($db);

									?>
								</select>

								<label>Date of Last Update :</label>
								<input type="text" class="form-control" id="lastupdate" disabled="" disabled="">


							</div>

						</div>

					</div>

					<div class="col-md-12">
						<div class="box box-ptimary">
							<div class="box-body">
								<div class="form-group">
									<label>BRIEF TITLE</label>
									<input class="form-control" id="bt" type="text" disabled=""></input>

								</div>

								<div class="form-group">
									<label>NARRATIVE</label>
									<textarea class="form-control" rows="10" id="narrative" disabled=""></textarea>

								</div>
								<div class="form-group">
									<label>
										<h3>REPORTER DETAILS</h3>
									</label>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>ORGANISATION</label>
										<input class="form-control" id="organisation" type="text" disabled=""></input>

									</div>

								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>NAME</label>
										<input class="form-control" id="name" type="text" disabled=""></input>

									</div>


								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>POSITION</label>
										<input class="form-control" id="position" type="text" disabled=""></input>

									</div>

								</div>
								<div class="col-md-12">
									<div class="box box-info">
										<div class="box-header">
											<h3 class="box-title">Update History</h3>


										</div>
										<!-- /.box-header -->
										<div class="box-body table-responsive no-padding" id="output">
											<table class="table table-bordered table-hover" id="qasomorupdatetable">


											</table>
										</div>
										<!-- /.box-body -->
									</div>

									<div class="box box-primary">
										<div class="box-header">
											<h3 class="box-title">QASO feedback here...</h3>
										</div>


										<div class="box-body">
											<!-- <label>Update Content</label> -->

											<textarea class="form-control" rows="3" id="qasoupdatecontent"></textarea>
											<input class="form-control" type="text" id="qasoupdateuser">

											<div class="form-group">
												<form id="qasoad">
													<label>
														<input type="radio" name="r2" class="minimal" value="1" checked>
														Approve Closure
													</label>
													<label>
														<input type="radio" name="r2" class="minimal" value="2">
														Disapprove Closure
													</label>
												</form>

											</div>

										</div>


									</div>


				</form>
			</div>


		</div>
	</div>
</div>
</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-primary" onclick="updatemor()">Update</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>


<div class="modal fade bs-example-modal-lg" id="QASOAUDITMODAL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="AUDITMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="auditidform">
					<div class="form-group">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Audit Details</h3>
							</div>
							<div class="box-body">
								<div class="form-group">
									<label>AUDIT ID:</label>
									<input class="form-control" id="auditid" type="text" disabled=""></input>
								</div>
								<div class="form-group">
									<label>
										<input type="radio" id="noncomp" value="noncomp" disabled="">Non Compliance
									</label>
									<label>
										<input type="radio" id="comp" value="comp" disabled="">Compliance
									</label>
									<label>
										<input type="radio" id="nonconf" value="nonconf" disabled="">
										Non Conformance
									</label>
									<label>
										<input type="radio" id="conf" value="conf" disabled="">
										Conformance
									</label>
									<label>
										<input type="checkbox" id="sc" value="sc" disabled="">
										Safety Concern
									</label>
								</div>
								<div class="form-group">
									<label>Audit Type</label>
									<select class="form-control select2" style="width: 100%;" id="at" disabled="">
										<option>Manual/SOP Review</option>
										<option>National Legislation Review</option>
										<option>On-site Inspection</option>
										<option>Interview </option>
										<option>Group discussion</option>
										<option>Observation</option>
										<option>Assessment of Department logs/records/reports</option>

									</select>
								</div>
								<div class="form-group">
									<label>Date of Audit :</label>


									<input type="text" id="dateofocc" disabled="">

									<!-- /.input group -->
								</div>
								<div class="form-group">
									<label>Select Airport Involved</label>
									<select class="form-control" id="airport" disabled="">
										<?php

										include '../../dbconfig.php';
										$query = "SELECT * FROM airport";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);

										while ($row = mysqli_fetch_array($result)) {
											echo "<option>" . $row['airport'] . "</option>";
										}
										mysqli_close($db);

										?>

									</select>

								</div>
								<div class="form-group">
									<label>Risk Level</label>
									<select class="form-control select2" style="width: 100%; " id="rl" disabled="">
										<option>High Risk</option>
										<option>Medium Risk</option>
										<option>Low Risk</option>
									</select>
								</div>
								<!-- Hazard icident description-->
								<div class="form-group">
									<label>Audit Objective</label>
									<textarea class="form-control" rows="5" id="auditobj" disabled=""></textarea>
								</div>

								<div class="form-group">
									<label>Test Step</label>
									<textarea class="form-control" rows="3" id="teststep" disabled=""></textarea>
								</div>
								<div class="form-group">
									<label>Source Data</label>
									<textarea class="form-control" rows="3" id="sourcedata" disabled=""></textarea>
								</div>

								<h2>FINDINGS</h2>
								<div class="form-group">
									<label>Condition (What is in place ?</label>
									<textarea class="form-control" rows="3" id="condition" disabled=""></textarea>
								</div>

								<div class="form-group">
									<label>Criteria (What should be ?)</label>
									<textarea class="form-control" rows="3" id="criteria" disabled=""></textarea>
								</div>

								<div class="form-group">
									<label>Effect (So what?/Consequences/result)</label>
									<textarea class="form-control" rows="3" id="effect" disabled=""></textarea>
								</div>

								<div class="form-group">
									<label>Cause (Why the condition exists?/Source?)</label>
									<textarea class="form-control" rows="3" id="cause" disabled=""></textarea>
								</div>

								<div class="form-group">
									<h2>RECOMMENDATION(How to make it better?)</h2>
									<textarea class="form-control" rows="3" id="recommendation" disabled=""></textarea>
								</div>
								<div class="form-group">
									<label>Manager responsible</label>
									<select class="form-control select2" style="width: 100%; " id="riskowner" disabled="">
										<?php

										include '../../dbconfig.php';
										$query = "SELECT * FROM riskowners";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);

										while ($row = mysqli_fetch_array($result)) {
											echo "<option>" . $row['RISKOWNER'] . "</option>";
										}
										mysqli_close($db);

										?>
									</select>
								</div>


								<div class="form-group">
									<label>Auditor Details</label>
									<input class="form-control" id="qaso" type="text" disabled=""></input>
									<input class="form-control" id="username" type="text" disabled=""></input>
									<input class="form-control" id="useremail" type="text" disabled=""></input>
									<input class="form-control" id="userphone" type="text" disabled=""></input>
								</div>
							</div>
						</div>
						<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>
								<input type="hidden" class="form-control" id="IDum" disabled="">
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="outputupdateaudit">
								<table class="table table-bordered table-hover" id="updateupdateaudit">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">QASO feedback here...</h3>
							</div>


							<div class="box-body">
								<!-- <label>Update Content</label> -->

								<textarea class="form-control" rows="3" placeholder="Enter Feedback..." id="qasoupdatecontentaudit"></textarea>
								<input class="form-control" type="text" placeholder="Name" id="qasoupdateuseraudit">

								<div class="form-group">
									<form id="qasoad">
										<label>
											<input type="radio" name="r3" class="minimal" value="1" checked>
											Approve Closure
										</label>
										<label>
											<input type="radio" name="r3" class="minimal" value="2">
											Disapprove Closure
										</label>
									</form>

								</div>

							</div>


						</div>
						<div class="box box-danger">
							<div class="box-header">
								<h3 class="box-title"> Target Date</h3>
							</div>

							<div class="box-body" id="updateresetaudit">
								<!-- <label>Update Content</label> -->

								<div class="form-group">
									<label>Date of Audit :</label>


									<input type="text" class="form-control pull-right" id="datepicker27">

									<!-- /.input group -->
								</div>

							</div>


						</div>
					</div>


				</form>


			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="updateaudit()">Update</button>

			</div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg	" id="AUDITMODALUPDATE" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="AUDITMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuff">
					<div class="col-md-12">

						<input name="auditid" type="hidden" class="form-control" id="auditidupdate" disabled="">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Audit Description</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="auditoutputupdate">
								<table class="table table-bordered table-hover" id="auditupdatetable">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Audit Recommendation</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="auditoutputupdaterecommendation">
								<table class="table table-bordered table-hover" id="auditupdatetablerecommendation">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>
								<input type="hidden" class="form-control" id="IDum" disabled="">
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="outputupdateaudit">
								<table class="table table-bordered table-hover" id="updateupdateauditupdate">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Insert your update here...</h3>
							</div>

							<div class="box-body" id="updateresetaudit">
								<!-- <label>Update Content</label> -->
								<div class="form-group">
									<label>Item Number:</label>
									<select class="form-control select2" style="width: 100%;" id="audititemno">

									</select>
								</div>

								<div class="form-group">
									<textarea class="form-control" rows="5" placeholder="Enter Update..." id="updatecontentaudit"></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name" id="updateuseraudit">
								</div>
								<div><label><input type="checkbox" class="flat-red" id="statusaudit">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
								<!-- <div class="form-group">
									<label for="exampleInputFile">Evidence Upload</label>
									<input type="file" id="exampleInputFileaudit">
									<p class="help-block">Upload evidence here. </p>
								</div> -->
								<div class="form-group ">
									<label for="exampleInputFile">Evidence Upload(if available)</label>

									<div class="col-sm-12">
										<div id="audit_image_galery" class="audit_image_galery"></div>
										<div id="audit_image_galery_listed" class="audit_image_galery_listed"></div>
										<small class="info help-block">
											<b>Extension file must</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
									</div>
								</div>


							</div>


						</div>
					</div>
				</form>
				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="updateaudit()">Update</button>
					<button type="button" id="PrintFive" class="btn btn-danger">Print</button>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg	" id="UPDATEAUDIT" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="AUDITMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuff">
					<div class="col-md-12">

						<input name="auditid" type="hidden" class="form-control" id="auditidApprove" disabled="">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Insert your update here...</h3>
							</div>

							<div class="box-body" id="updateresetaudit">
								<div class="form-group">
									<textarea class="form-control" rows="5" placeholder="Enter Update..." id="updateauditapprove"></textarea>
								</div>

								<input class="form-control" type="text" placeholder="Name" id="auditApprove">

								<form id="qasoad">
									<label>
										<input type="radio" name="r3" id='r3' class="minimal" value="1" checked>
										Approve Closure
									</label>
									<label>
										<input type="radio" name="r3" class="minimal" value="2">
										Disapprove Closure
									</label>
								</form>

							</div>
						</div>
					</div>
				</form>
				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="approveDisapprove()">Update</button>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="AUDITMODAL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="AUDITMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuff">
					<div class="col-md-12">

						<input name="auditid" type="hidden" class="form-control" id="auditid" disabled="">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Audit Description</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="auditoutputmoreonthis">
								<table class="table table-bordered table-hover" id="auditmoreonthistable">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Audit Recommendation</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="auditoutputmoreonthisrecommendation">
								<table class="table table-bordered table-hover" id="auditmoreonthistablerecommendation">
								</table>
							</div>
							<!-- /.box-body -->
						</div>




					</div>

				</form>
				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					<button type="button" id="PrintFive" class="btn btn-danger">Print</button>

				</div>
			</div>
		</div>
	</div>
</div>