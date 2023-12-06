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
					<div class="col-md-12">

						<input type="hidden" class="form-control" id="IDq" disabled="">
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Hazard Description</h3>

							</div>

							<div class="box-body table-responsive no-padding" id="hazardoutputmoreonthis">
								<table class="table table-bordered table-hover" id="hazardmoreonthistable">
								</table>
							</div>
							<!-- /.box-body -->
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

								<div class="col-sm-12">
									<div id="audit_image_galery"></div>
									<div id="audit_image_galery_listed"></div>
									<small class="info help-block">
										<b>Extension file must</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
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
							<select class="form-control select2" style="width: 100%; " id="morriskowner" disabled="">
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
							<div class="form-group">
								<label for="exampleInputFile">Evidence Upload</label>
								<input type="file" id="exampleInputFilecomp" class='dummy'>
								<p class="help-block">Upload evidence here. File formats supported : jpg, Word, Excel, PDF.</p>
							</div>

							<!-- <div class="col-sm-12">
								<div id="audit_image_galery"></div>
								<div id="audit_image_galery_listed"></div>
								<small class="info help-block">
									<b>Extension file must</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
							</div> -->


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



<div class="modal fade bs-example-modal-lg" id="AUDITMODALUPDATE" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
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
						<div id="PrintFiveUpdate">
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
									<table class="table table-bordered table-hover" id="updateupdateaudit">
									</table>
								</div>
								<!-- /.box-body -->
							</div>
						</div>
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">Insert your update here...</h3>
							</div>

							<div class="box-body" id="updateresetaudit">
								<!-- <label>Update Content</label> -->
								<div class="form-group">
									<label>Item Number</label>
									<select class="form-control select2" style="width: 100%; " id="audititemno">
										<option selected disabled> Choose Recommendation</option>
										<?php

										include '../../dbconfig.php';
										$query = "SELECT * FROM recommendations WHERE RISKOWNER='$pageuser' AND STATUS='OPEN'";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);

										while ($row = mysqli_fetch_array($result)) {
											echo "<option value='$row[IDWA]'>" . $row['IDWA'] . ' - ' . $row['ID'] . '(' . $row['QASO'] . ')' .  "</option>";
										}
										mysqli_close($db);

										?>
									</select>
								</div>
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
									<p class="help-block">Upload evidence here. </p>
								</div>

								<!-- <div class="col-sm-12">
									<div id="audit_image_galery"></div>
									<div id="audit_image_galery_listed"></div>
									<small class="info help-block">
										<b>Extension file must</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
								</div> -->


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
						<div id="printThisFive">
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



					</div>

				</form>
				<div class="modal-footer">

					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					<button type="button" id="PrintFiveAll" class="btn btn-danger">Print</button>

				</div>
			</div>
		</div>
	</div>