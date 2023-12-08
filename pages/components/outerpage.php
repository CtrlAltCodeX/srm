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
					$query = "SELECT *, DATEDIFF(CURDATE(),SDCSUBMITDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='1' AND SDCCHECKTWO='1' AND AIRPORT='$pageuser' AND CLOSEDRO='OPEN'";
					mysqli_query($db, $query) or die('Error querying database.');
					$result = mysqli_query($db, $query);


					while ($row = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>" . $row['HAZID'] . "</td>";
						$risk = $row['RISKLEVEL'];

						if ($risk == "High Risk") {
							echo "<td bgcolor='#F03434'></td>";
						} else if ($risk == "Medium Risk") {
							echo "<td bgcolor='#FABE58'></td>";
						} else {
							echo "<td bgcolor='#00E640'></td>";
						}

						$diffdateone = 7 - $row['DiffDate'];
						$diffdatetwo = 14 - $row['DiffDate'];
						if ($row['RESPONSE'] === "1 Week") {
							if ($diffdateone < 0) {
								echo "<td bgcolor='#F03434'>Overdue by " . abs($diffdateone) . " days</td>";
							} else {
								echo "<td bgcolor='#00E640'>" . $diffdateone . " days remaining</td>";
							}
						} else if ($row['RESPONSE'] === "2 Weeks") {
							if ($diffdatetwo < 0) {
								echo "<td bgcolor='#F03434'>Overdue by " . abs($diffdatetwo) . " days</td>";
							} else {
								echo "<td bgcolor='#00E640'>" . $diffdatetwo . " days remaining</td>";
							}
						}




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
								data-id='" . $row['HAZID'] . "'data-hazorinc='" . $row['HAZORINC'] . "' data-airport='" . $row['AIRPORT'] . "' data-hitype='" . $row['HITYPE'] . "' data-hid='" . $row['HID'] . "' data-causetype='" . $row['CAUSETYPE'] . "'
								data-cd='" . $row['CD'] . "' data-effecttype='" . $row['EFFECTTYPE'] . "' data-ed='" . $row['ED'] . "' data-deventoccurance='" . $row['DEVENTOCCURANCE'] . "'data-timeoc='" . $row['TIMEOC'] . "'
								data-dreported='" . $row['DREPORTED'] . "' data-userreported='" . $row['USERREPORTED'] . "'data-riskowner='" . $row['RISKOWNER'] . "' 
								data-qaso='" . $row['QASO'] . "'data-riskcontext='" . $row['RISKCONTEXT'] . "'data-riskconsequence='" . $row['RISKCONSEQUENCE'] . "'
								data-riskhood='" . $row['RISKHOOD'] . "'data-risklevel='" . $row['RISKLEVEL'] . "'data-response='" . $row['RESPONSE'] . "'
								data-recommendeda='" . $row['RECOMMENDEDA'] . "'data-ohsref='" . $row['OHSREF'] . "'data-newro='" . $row['NEWRISKOWNER'] . "'>View </button></td>";



						echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#myMODALTWO' 
								data-id='" . $row['HAZID'] . "'>Update</button></td>";

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

			</table>
		</div>
	</div>
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
						FROM mor  WHERE SDCCHECK='1'  AND AIRPORT='$pageuser' AND CLOSEDRO='OPEN'";
					mysqli_query($db, $query) or die('Error querying database.');
					$result = mysqli_query($db, $query);


					while ($row = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>" . $row['MORID'] . "</td>";

						echo "<td>" . $row['CAAFID'] . "</td>";




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
								data-lastupdate='" . $row['LASTUPDATE'] . "'data-receiveddate='" . $row['RECEIVEDDATE'] . "'data-riskowner='" . $row['RISKOWNER'] . "'data-newro='" . $row['NEWRISKOWNER'] . "'>View </button></td>";



						echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#MORMODALTWO' 
								data-id='" . $row['MORID'] . "'>Update</button></td>";
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

			</table>
		</div>
	</div>
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
						FROM compliance  WHERE AIRPORT='$pageuser' AND CLOSEDRO='OPEN'";
					mysqli_query($db, $query) or die('Error querying database.');
					$result = mysqli_query($db, $query);


					while ($row = mysqli_fetch_array($result)) {

						echo "<tr>";
						echo "<td>" . $row['COMP_ID'] . "</td>";
						echo "<td>" . $row['MITIGATIONLEVEL'] . "</td>";



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
								echo "<td>".$LastUpdateDiffDate." days</td>";
							}	 */

						/* echo "<td>".$row['DREPORTED']."</td>"; */
						echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#COMPMODAL' 
								data-id='" . $row['COMP_ID'] . "'data-yearaudit='" . $row['YEAR_AUDIT'] . "' data-desc='" . $row['DESCRIPTION'] . "' data-ml='" . $row['MITIGATIONLEVEL'] . "' data-tg='" . $row['TARGETDATE'] . "' data-ro='" . $row['RISKOWNER'] . "'
								data-rt='" . $row['RELATEDTO'] . "'data-airport='" . $row['AIRPORT'] . "'data-lu='" . $row['LASTUPDATE'] . "' data-closedro='" . $row['CLOSEDRO'] . "' data-status='" . $row['STATUS'] . "' data-newro='" . $row['NEWRISKOWNER'] . "'>View </button></td>";



						echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#COMPMODALTWO' 
								data-id='" . $row['COMP_ID'] . "'>Update</button></td>";
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

			</table>
		</div>
	</div>
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

						<th>Details/Update</th>
						<th>Update Status</th>

					</tr>
				</thead>
				<tbody>

					<?php

					include '../../dbconfig.php';
					$query = "SELECT *, DATEDIFF(TARGETDATE,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM audit  WHERE AIRPORT='$pageuser' AND CLOSEDRO='OPEN'";
					mysqli_query($db, $query) or die('Error querying database.');
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
								data-id='" . $row['AID'] . "'data-comp='" . $row['COMPLIANCE'] . "' data-noncomp='" . $row['NON_COMPLIANCE'] . "' data-conf='" . $row['CONFORMANCE'] . "' data-nonconf='" . $row['NON_CONFORMANCE'] . "' data-sc='" . $row['SAFETY_CONCERN'] . "'
								data-at='" . $row['AUDIT_TYPE'] . "'data-date='" . $row['DATE'] . "'data-airport='" . $row['AIRPORT'] . "' data-risklevel='" . $row['RISK_LEVEL'] . "' data-auditobj='" . $row['AUDIT_OBJ'] . "' 
								data-ts='" . $row['TEST_STEP'] . "'data-sd='" . $row['SOURCE_DATA'] . "'data-cp='" . $row['CONDITION_PLACE'] . "' data-criteria='" . $row['CRITERIA'] . "' data-effect='" . $row['EFFECT'] . "'
								data-cause='" . $row['CAUSE'] . "'data-rec='" . $row['RECOMMENDATION'] . "'data-ro='" . $row['RISKOWNER'] . "' data-auditor='" . $row['AUDITOR'] . "' data-auditore='" . $row['AUDITOR_EMAIL'] . "'
								data-auditorp='" . $row['AUDITOR_PHONE'] . "'data-dr='" . $row['DREPORTED'] . "'data-tg='" . $row['TARGETDATE'] . "' data-lu='" . $row['LASTUPDATE'] . "'data-qaso='" . $row['QASO'] . "'>View </button></td>";
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

			</table>
		</div>
	</div>
	<!-- /.box-body -->
</div>




<!--MODAL FOR MORE ON THIS-->
<div class="modal fade bs-example-modal-lg" id="myMODAL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuff">
					<div class="col-md-6">

						<div class="form-group">

							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="IDq" disabled="">

							<label for="recipient-name" class="control-label">Hazard/Incident:</label>
							<select class="form-control" id="hazorincq" disabled="">
								<option>HAZARD</option>
								<option>INCIDENT</option>
							</select>

							<label for="recipient-name" class="control-label">Airport:</label>
							<input type="text" class="form-control" id="air" disabled="">

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
							<textarea class="form-control" rows="5" id="hidq" disabled=""></textarea>

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
							<textarea class="form-control" rows="5" id="pcdq" disabled=""></textarea>

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
							<textarea class="form-control" rows="5" id="ecdq" disabled=""></textarea>
							<label for="message-text" class="control-label"> Date Event Occured</label>
							<input type="label" class="form-control" id="dvoq" disabled="">
							<label for="message-text" class="control-label"> Time Occured</label>
							<input type="label" class="form-control" id="timeocq" disabled="">

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

						</div>


					</div>

					<div class="col-md-6">

						<div class="form-group">





							<h3>Risk Treatment Plan</h3>
							<label>Risk Context(Effect/How it can happen?):</label>
							<textarea class="form-control" rows="5" id="riskcontextq" disabled=""></textarea>

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
							<textarea class="form-control" rows="5" placeholder="Enter ..." id="recommendedaq" disabled=""></textarea>

							<label>Reference</label>
							<textarea class="form-control" rows="5" placeholder="Enter ..." id="ohsrefq" disabled=""></textarea>




						</div>
						<div>
							<h3>Risk Owner Transfer</h3>
							<div class="form-group">
								<label>Risk Owner</label>
								<select class="form-control select2" style="width: 100%; " id="rotransfer">
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
								<label>Reason for Transfer</label>
								<textarea class="form-control" rows="5" placeholder="Enter ..." id="reasonriskowner"></textarea>
							</div>
							<button id="hazardtransfer" type="button" class="btn bg-orange btn-flat" onclick="transfer()">Transfer</button>
						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

				<button id="io" type="button" onclick="pio()" class="btn btn-danger">Print</button>
			</div>
		</div>

	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="myMODALTWO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myMODALTWOLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuffthree">
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Hazard Description</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="hazardoutput">
								<table class="table table-bordered table-hover" id="hazardtable">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div id="printThisTwo" class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>
								<input type="hidden" class="form-control" id="IDu" disabled="">

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
								<h3 class="box-title">Insert your update here...</h3>
							</div>

							<div class="box-body" id="updatereset">
								<!-- <label>Update Content</label> -->
								<div class="form-group">
									<textarea class="form-control" rows="5" placeholder="Enter Update..." id="updatecontent"></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name" id="updateuser">
								</div>
								<div><label><input type="checkbox" class="flat-red" id="status">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
								<!-- <div class="form-group">
									<label for="exampleInputFile">Evidence Upload</label>
									<input type="file" id="exampleInputFile">
									<p class="help-block">Upload evidence here. File formats supported : jpg, Word, Excel, PDF.</p>
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
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="update()">Update</button>
				<button type="button" id="PrintTwo" class="btn btn-danger">Print</button>

			</div>
		</div>

	</div>
</div>
</div>

<div class="modal fade bs-example-modal-lg" id="myMODALmyMODAL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stufftwo">
					<div class="col-md-6">

						<div class="form-group">

							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="IDar" disabled="">
							<label for="recipient-name" class="control-label">Hazard/Incident:</label>
							<select class="form-control" id="hazorincar" disabled="">
								<option>HAZARD</option>
								<option>INCIDENT</option>
							</select>

							<label for="recipient-name" class="control-label">Airport:</label>
							<input type="text" class="form-control" id="airth" disabled="">

							<label for="message-text" class="control-label">Hazard/Incident Type:</label>
							<select class="form-control" id="hitypeqar" disabled="">
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
							<textarea class="form-control" id="hidqar" disabled=""></textarea>

							<label for="message-text" class="control-label">Potential Cause Type:</label>
							<select class="form-control" id="pctqar" disabled="">
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
							<textarea class="form-control" id="pcdqar" disabled=""></textarea>

							<label for="message-text" class="control-label">Effect/Consequence Type:</label>
							<select class="form-control" id="ectqar" disabled="">
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
							<textarea class="form-control" id="ecdqar" disabled=""></textarea>
							<label for="message-text" class="control-label"> Date Event Occured</label>
							<input type="label" class="form-control" id="dvoqar" disabled="">

							<label for="message-text" class="control-label"> Time Occured</label>
							<input type="label" class="form-control" id="timeocar" disabled="">

							<label for="message-text" class="control-label"> Date of Report</label>
							<input type="label" class="form-control" id="drqar" disabled="">

							<label>Risk Owner</label>
							<select class="form-control select2" style="width: 100%; " id="roqar" disabled="">
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
							<select class="form-control select2" style="width: 100%; " id="qasoqar" disabled="">
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

						</div>


					</div>

					<div class="col-md-6">

						<div class="form-group">





							<h3>Risk Treatment Plan</h3>
							<label>Risk Context(Effect/How it can happen?):</label>
							<textarea class="form-control" rows="5" placeholder="Enter ..." id="riskcontextqar" disabled=""></textarea>

							<h4>Initial Risk Rating</h4>
							<label>Risk Consequence</label>
							<select class="form-control select2" style="width: 100%; " id="riskconsequenceqar" disabled="">
								<option>A - Catastrophic</option>
								<option>B - Hazardous </option>
								<option>C - Major</option>
								<option>D - Minor</option>
								<option>E - Negligence</option>
							</select>
							<label>Risk Likelihood</label>
							<select class="form-control select2" style="width: 100%; " id="rhoodqar" disabled="">
								<option>5 - Frequent</option>
								<option>4 - Occasional</option>
								<option>3 - Remote</option>
								<option>2 - Improbable</option>
								<option>1 - Extremely Improbable</option>
							</select>
							<label>Risk Level</label>
							<select class="form-control select2" style="width: 100%; " id="rlqar" disabled="">
								<option>High Risk</option>
								<option>Medium Risk</option>
								<option>Low Risk</option>
							</select>
							<label>Response Expected Within</label>
							<select class="form-control select2" style="width: 100%; " id="rewqar" disabled="">
								<option>1 Week</option>
								<option>2 Weeks</option>

							</select>

							<label>Recommended Actions</label>
							<textarea class="form-control" rows="5" placeholder="Enter ..." id="recommendedaqar" disabled=""></textarea>

							<label>OHS reference</label>
							<textarea class="form-control" rows="5" placeholder="Enter ..." id="ohsrefqar" disabled=""></textarea>




						</div>
					</div>


					<div class="col-md-12">
						<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>
								<input type="hidden" class="form-control" id="IDuar" disabled="">
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="outputar">
								<table class="table table-bordered table-hover" id="updatetabletwo">
								</table>
							</div>
							<!-- /.box-body -->
						</div>

						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Accept or Decline Transfer</h3>
							</div>

							<div class="box-body" id="updateresetaceptdecline">
								<!-- <label>Update Content</label> -->

								<textarea class="form-control" rows="5" placeholder="Enter Reason for decline or accept if any..." id="reason"></textarea>


							</div>


						</div>


					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type='button' class='btn bg-green' onclick="accept()">Accept</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type='button' class='btn bg-red' onclick="decline()">Decline</button>
			</div>
		</div>

	</div>
</div>



<div class="modal fade bs-example-modal-lg" id="MORMODAL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
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
									<input class="form-control" type="text" disabled=""></input>

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


					<div class="col-md-12">
						<div class="box box-ptimary">
							<div class="box-body">
								<div class="form-group">
									<label>BRIEF TITLE</label>
									<input class="form-control" id="bt" type="text" disabled=""></input>

								</div>

								<div class="form-group">
									<label>NARRATIVE</label>
									<textarea class="form-control" rows="5" id="narrative" disabled=""></textarea>

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
									<div class="form-group">
										<div>
											<h3>Risk Owner Transfer</h3>
											<div class="form-group">
												<label>Risk Owner</label>
												<select class="form-control select2" style="width: 100%; " id="morrotransfer">
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
												<label>Reason for Transfer</label>
												<textarea class="form-control" rows="5" placeholder="Enter ..." id="morreasonriskowner"></textarea>
											</div>
											<button id="mortransferbutton" type="button" class="btn bg-orange btn-flat" onclick="mortransfer()">Transfer</button>
										</div>
									</div>
								</div>


							</div>
						</div>

					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button id="printmor" type="button" class="btn btn-danger" onclick="printmor()">Print</button>
			</div>
		</div>

	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="MORMODALTWO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myMODALTWOLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuffthree">
					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">MOR Description</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="moroutput">
								<table class="table table-bordered table-hover" id="mortable">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
						<div id="printThisThree" class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>
								<input type="hidden" class="form-control" id="IDum" disabled="">
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="outputupdatemor">
								<table class="table table-bordered table-hover" id="updateupdatemor">
								</table>
							</div>
							<!-- /.box-body -->
						</div>

						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Insert your update here...</h3>
							</div>

							<div class="box-body" id="updateresetmor">
								<!-- <label>Update Content</label> -->
								<div class="form-group">
									<textarea class="form-control" rows="5" placeholder="Enter Update..." id="updatecontentmor"></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name" id="updateusermor">
								</div>
								<div><label><input type="checkbox" class="flat-red" id="statusmor">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
								<div class="form-group">
									<label for="exampleInputFile">Evidence Upload</label>
									<input type="file" id="exampleInputFilemor">
									<p class="help-block">Upload evidence here. File formats supported : jpg, Word, Excel, PDF.</p>
								</div>


							</div>


						</div>


				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="updatemor()">Update</button>
				<button type="button" id="PrintThree" class="btn btn-danger">Print</button>
			</div>
		</div>

	</div>
</div>
</div>

<!-- /.row -->



<div class="modal fade bs-example-modal-lg" id="MORMODALTRANSFER" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="MORMODALTRANSFERLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stufffive">
					<div class="col-md-6">
						<div class="form-group">

							<label for="recipient-name" class="control-label">ID:</label>
							<input type="text" class="form-control" id="moridt" disabled="">

							<label for="recipient-name" class="control-label">CAAF ID:</label>
							<input type="text" class="form-control" id="caafidt" disabled="">

							<label for="recipient-name" class="control-label">RECEIVED DATE:</label>
							<input type="text" class="form-control" id="rdt" disabled="">
							<label for="message-text" class="control-label">Hazard/Incident Type:</label>
							<select class="form-control" id="hitypeqt" disabled="">
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
								<select class="form-control select2" style="width: 100%;" id="coot" disabled="">
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
								<input class="form-control" placeholder="AIRCRAFT TYPE & SERIES" id="actypeseriest" type="text" disabled=""></input>
								<label>REGISTRATION</label>
								<input class="form-control" placeholder="REGISTRATION" id="registrationt" type="text" disabled=""></input>
								<label>OPERATOR</label>
								<input class="form-control" placeholder="OPERATOR" id="operatort" type="text" disabled=""></input>


								<label>Date :</label>
								<input type="text" class="form-control" id="datet" disabled="">

								<label>Time:</label>
								<input type="text" class="form-control" id="timeoct" disabled="">

							</div>

							<div class="form-group">
								<label>Time Type:</label>
								<select class="form-control select2" style="width: 100%;" id="dtnt" disabled="">
									<option>N/A</option>
									<option>DAY</option>
									<option>TWILIGHT</option>
									<option>NIGHT</option>

								</select>
							</div>
							<label>LOCATION/POSITION/RWY:</label>
							<input class="form-control" placeholder="LOCATION/POSITION/RWY" id="lprt" type="text" disabled=""></input>

							<label>
								<h2>FLIGHT/CABIN CREW REPORT</h2>
							</label>
							<label>FLIGHT NO:</label>
							<input class="form-control" placeholder="FLIGHT NO" id="fnot" type="text" disabled=""></input>
							<label>ROUTE FROM:</label>
							<input class="form-control" placeholder="ROUTE FROM" id="routefromt" type="text" disabled=""></input>
							<label>ROUTE TO:</label>
							<input class="form-control" placeholder="ROUTE TO" id="routetot" type="text" disabled=""></input>
							<label>IAS (kts):</label>
							<input class="form-control" placeholder="IAS (kts)" id="iast" type="text" disabled=""></input>
							<label>FL/ALT/HT (ft):</label>
							<input class="form-control" placeholder="FL/ALT/HT (ft)" id="faht" type="text" disabled=""></input>

							<label>FCR Clearance:</label>
							<select class="form-control select2" style="width: 100%;" id="ivt" disabled="">
								<option>N/A</option>
								<option>IFR</option>
								<option>VFR</option>

							</select>
							<label>ETOPS/RVSM/RNP 4/10</label>
							<select class="form-control select2" style="width: 100%;" id="errt" disabled="">
								<option>N/A</option>
								<option>YES</option>
								<option>NO</option>
							</select>

							<div class="form-group">
								<label>Nature of Flight</label>
								<select class="form-control select2" style="width: 100%;" id="noft" disabled="">
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
								<select class="form-control select2" style="width: 100%;" id="fpt" disabled="">
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
								<input class="form-control" placeholder="DRIN SPEED (kts)" id="dst" type="text" disabled=""></input>
								<label>OAT(oC)</label>
								<input class="form-control" placeholder="OAT(oC)" id="oatt" type="text" disabled=""></input>
							</div>
							<div class="form-group">
								<label>
									<h3>CLOUD</h3>
								</label>
								<div class="form-group">
									<label>Type</label>
									<input class="form-control" placeholder="Type" id="ctypet" type="text" disabled=""></input>
									<label>Height (ft)</label>
									<input class="form-control" placeholder="Height (ft)" id="chtt" type="text" disabled=""></input>
									<label>8th</label>
									<input class="form-control" placeholder="8th" id="ctht" type="text" disabled=""></input>

								</div>

							</div>

							<div class="form-group">
								<label>
									<h3>PRECIPITATION</h3>
								</label>


								<div class="form-group">
									<label>Weather</label>
									<select class="form-control select2" style="width: 100%;" id="pwt" disabled="">
										<option>N/A</option>
										<option>RAIN</option>
										<option>SNOW</option>
										<option>SLEET</option>
										<option>HAIL</option>


									</select>
									<label>Level</label>
									<select class="form-control select2" style="width: 100%;" id="ptt" disabled="">
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
									<input class="form-control" placeholder="Km/m" id="vkt" type="text" disabled=""></input>

								</div>
								<div class="form-group">
									<label>ICING</label>
									<select class="form-control select2" style="width: 100%;" id="icingt" disabled="">
										<option>N/A</option>
										<option>LIGHT</option>
										<option>MOD</option>
										<option>SEVERE</option>



									</select>
								</div>
								<div class="form-group">
									<label>TURBULANCE</label>
									<select class="form-control select2" style="width: 100%;" id="turbulancet" disabled="">
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
									<select class="form-control select2" style="width: 100%;" id="rstt" disabled="">
										<option>N/A</option>
										<option>DRY</option>
										<option>WET</option>
										<option>ICE</option>
										<option>SNOW</option>
										<option>SLUSH</option>


									</select>
									<label>Category</label>
									<select class="form-control select2" style="width: 100%;" id="rsct" disabled="">
										<option>N/A</option>
										<option>CATEGORY I</option>
										<option>CATEGORY II</option>
										<option>CATEGORY III</option>



									</select>

								</div>

							</div>

							<div class="form-group">
								<label>Select Airport Involved</label>
								<select class="form-control" id="airportt" disabled="">
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
								<select class="form-control" id="hitypet" disabled="">
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

							<label>Risk Owner</label>
							<select class="form-control select2" style="width: 100%; " id="riskownert" disabled="">
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
							<input type="text" class="form-control" id="lastupdatet" disabled="" disabled="">


						</div>

					</div>


					<div class="col-md-12">
						<div class="box box-primary">
							<div class="box-body">
								<div class="form-group">
									<label>BRIEF TITLE</label>
									<input class="form-control" placeholder="Title" id="btt" type="text" disabled=""></input>

								</div>

								<div class="form-group">
									<label>NARRATIVE</label>
									<textarea class="form-control" rows="5" placeholder="Enter ..." id="narrativet" disabled=""></textarea>

								</div>
								<div class="form-group">
									<label>
										<h3>REPORTER DETAILS</h3>
									</label>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>ORGANISATION</label>
										<input class="form-control" placeholder="Enter..." id="organisationt" type="text" disabled=""></input>

									</div>

								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>NAME</label>
										<input class="form-control" placeholder="Enter..." id="namet" type="text" disabled=""></input>

									</div>


								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>POSITION</label>
										<input class="form-control" placeholder="Enter..." id="positiont" type="text" disabled=""></input>

									</div>

								</div>


							</div>
						</div>

						<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3>
								<input type="hidden" class="form-control" id="IDuar" disabled="">
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="morupdatehistory">
								<table class="table table-bordered table-hover" id="morupdatetable">
								</table>
							</div>
							<!-- /.box-body -->
						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">


				<div class="box-body" id="morupdateresetaceptdecline">
					<!-- <label>Update Content</label> -->

					<textarea class="form-control" rows="5" placeholder="Enter Reason for decline or accept if any..." id="morreason"></textarea>


				</div>
				<button type='button' class='btn bg-green' onclick="moraccept()">Accept</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type='button' class='btn bg-red' onclick="mordecline()">Decline</button>


			</div>
		</div>

	</div>
</div>



<div class="modal fade bs-example-modal-lg" id="COMPMODAL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="COMPMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="compstuff">
					<div class="col-md-12">

						<div class="box box-warning">

							<!-- /.box-header -->
							<div class="box-body">
								<form role="form" method="POST" action="" id="compform">
									<div class="form-group">
										<label>COMPLIANCE ID:</label>
										<input class="form-control" id="compid" type="text" disabled=""></input>
										<label>YEAR OF AUDIT:</label>
										<input class="form-control" id="yearaudit" type="text" disabled=""></input>

										<label>DESCRIPTION</label>
										<textarea class="form-control" rows="5" id="description" disabled=""></textarea>




										<label>MITIGATION LEVEL</label>
										<textarea class="form-control" rows="5" id="mitigation" disabled=""></textarea>




										<label>TARGET DATE :</label>
										<input class="form-control" id="targetdate" type="text" disabled=""></input>


										<!-- /.input group -->



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


										<label>Airport Involved</label>
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




										<label>Date of Last Update :</label>

										<input class="form-control" id="lastupdate" type="text" disabled=""></input>

										<!-- /.input group -->




										<label>Status</label>
										<select class="form-control select2" style="width: 100%; " id="status" disabled="">
											<option>OPEN</option>
											<option>CLOSED</option>

										</select>

									</div>

									<!-- Date Picker-->


								</form>


							</div>


						</div>


						<div class="form-group">
							<h3>Risk Owner Transfer</h3>
							<div class="form-group">
								<label>Risk Owner</label>
								<select class="form-control select2" style="width: 100%; " id="comprotransfer">
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
								<label>Reason for Transfer</label>
								<textarea class="form-control" rows="5" id="compreasonriskowner"></textarea>
							</div>
							<button id="comptransferbutton" type="button" class="btn bg-orange btn-flat" onclick="comptransfer()">Transfer</button>
						</div>

					</div>

				</form>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button id="printcomp" type="button" class="btn btn-danger" onclick="printcomp()">Print</button>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="modal fade bs-example-modal-lg" id="COMPMODALTRANSFER" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="COMPMODALLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="compstuff">
					<div class="col-md-12">

						<div class="box box-warning">

							<!-- /.box-header -->
							<div class="box-body">
								<form role="form" method="POST" action="" id="compform">
									<div class="form-group">
										<label>COMPLIANCE ID:</label>
										<input class="form-control" placeholder="COMPLIANCE ID" id="compidt" type="text" disabled=""></input>
										<label>YEAR OF AUDIT:</label>
										<input class="form-control" placeholder="YEAR" id="yearaudit" type="text" disabled=""></input>

										<label>DESCRIPTION</label>
										<textarea class="form-control" rows="5" placeholder="Enter ..." id="description" disabled=""></textarea>




										<label>MITIGATION LEVEL</label>
										<textarea class="form-control" rows="5" placeholder="Enter ..." id="mitigation" disabled=""></textarea>




										<label>TARGET DATE :</label>
										<input class="form-control" placeholder="YEAR" id="targetdate" type="text" disabled=""></input>


										<!-- /.input group -->



										<label>Risk Owner</label>
										<select class="form-control select2" style="width: 100%; " id="compriskowner" disabled="">
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


										<label>Airport Involved</label>
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




										<label>Date of Last Update :</label>

										<input class="form-control" placeholder="YEAR" id="lastupdate" type="text" disabled=""></input>

										<!-- /.input group -->




										<label>Status</label>
										<select class="form-control select2" style="width: 100%; " id="status" disabled="">
											<option>OPEN</option>
											<option>CLOSED</option>

										</select>

									</div>

									<!-- Date Picker-->


								</form>


							</div>


						</div>





						<div class="box box-info">

							<div class="box-header">
								<h3 class="box-title">Update History</h3>

							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="complupdatehistory">
								<table class="table table-bordered table-hover" id="compupdatetable">
								</table>
							</div>


						</div>
					</div>
				</form>

				<!-- /.box-body -->

				<div class="modal-footer">

					<div class="box-body" id="morupdateresetaceptdecline">
						<!-- <label>Update Content</label> -->

						<textarea class="form-control" rows="5" placeholder="Enter Reason for decline or accept if any..." id="compreason"></textarea>


					</div>

					<button type='button' class='btn bg-green' onclick="compaccept()">Accept</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type='button' class='btn bg-red' onclick="compdecline()">Decline</button>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="COMPMODALTWO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="COMPMODALTWOLabel"></h4>
			</div>
			<div class="modal-body">
				<form role="form" method="POST" action="" id="stuffnine>
						<div class=" col-md-12">
					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Compliance Description</h3>

						</div>

						<div class="box-body table-responsive no-padding" id="compoutput">
							<table class="table table-bordered table-hover" id="comptable">
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<div id="printThisFour" class="box box-info">
						<div class="box-header">
							<h3 class="box-title">Update History</h3>
							<input type="hidden" class="form-control" id="IDCOMP" disabled="">
						</div>
						<!-- /.box-header -->
						<div class="box-body table-responsive no-padding" id="outputupdatecomp">
							<table class="table table-bordered table-hover" id="updateupdatecomp">
							</table>
						</div>
						<!-- /.box-body -->
					</div>

					<div class="box box-primary">
						<div class="box-header">
							<h3 class="box-title">Insert your update here...</h3>
						</div>

						<div class="box-body" id="updateresetmor">
							<!-- <label>Update Content</label> -->
							<div class="form-group">
								<textarea class="form-control" rows="5" placeholder="Enter Update..." id="updatecontentcomp"></textarea>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="Name" id="updateusercomp">
							</div>
							<div><label><input type="checkbox" class="flat-red" id="statuscomp">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
							<!-- <div class="form-group">
								<label for="exampleInputFile">Evidence Upload</label>
								<input type="file" id="exampleInputFilecomp">
								<p class="help-block">Upload evidence here. File formats supported : jpg, Word, Excel, PDF.</p>
							</div> -->
							<div class="col-sm-12">
										<div id="audit_image_galery" class="audit_image_galery"></div>
										<div id="audit_image_galery_listed" class="audit_image_galery_listed"></div>
										<small class="info help-block">
											<b>Extension file must</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
									</div>

						</div>


					</div>



				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="updatecomp()">Update</button>
				<button type="button" id="PrintFour" class="btn btn-danger">Print</button>
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
				<form role="form" method="POST" action="" id="auditidform">
					<div class="form-group">
						<div id="printThisFive">
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
											<option>Internal</option>
											<option>External</option>

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
										<textarea class="form-control" rows="5" id="teststep" disabled=""></textarea>
									</div>
									<div class="form-group">
										<label>Source Data</label>
										<textarea class="form-control" rows="5" id="sourcedata" disabled=""></textarea>
									</div>

									<h2>FINDINGS</h2>
									<div class="form-group">
										<label>Condition (What is in place ?</label>
										<textarea class="form-control" rows="5" id="condition" disabled=""></textarea>
									</div>

									<div class="form-group">
										<label>Criteria (What should be ?)</label>
										<textarea class="form-control" rows="5" id="criteria" disabled=""></textarea>
									</div>

									<div class="form-group">
										<label>Effect (So what?/Consequences/result)</label>
										<textarea class="form-control" rows="5" id="effect" disabled=""></textarea>
									</div>

									<div class="form-group">
										<label>Cause (Why the condition exists?/Source?)</label>
										<textarea class="form-control" rows="5" id="cause" disabled=""></textarea>
									</div>

									<div class="form-group">
										<h2>RECOMMENDATION(How to make it better?)</h2>
										<textarea class="form-control" rows="5" id="recommendation" disabled=""></textarea>
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

							<div class="box box-danger">
								<div class="box-header">
									<h3 class="box-title">Target Date</h3>
								</div>

								<div class="box-body" id="updateresetaudit">
									<!-- <label>Update Content</label> -->

									<div class="form-group">


										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control pull-right" id="datepicker27" disabled="">
										</div>
										<!-- /.input group -->
									</div>

								</div>


							</div>
						</div>

						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Insert your update here...</h3>
							</div>

							<div class="box-body" id="updateresetaudit">
								<!-- <label>Update Content</label> -->
								<div class="form-group">
									<textarea class="form-control" rows="5" placeholder="Enter Update..." id="updatecontentaudit"></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name" id="updateuseraudit">
								</div>
								<div><label><input type="checkbox" class="flat-red" id="statusaudit">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
								<div class="form-group">
									<label for="exampleInputFile">Evidence Upload</label>
									<input type="file" id="exampleInputFileaudit">
									<p class="help-block">Upload evidence here. File formats supported : jpg, Word, Excel, PDF.</p>
								</div>


							</div>


						</div>




					</div>


				</form>


			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" onclick="updateaudit()">Update</button>
				<button type="button" id="PrintFive" class="btn btn-danger">Print</button>

			</div>
		</div>
	</div>
</div>