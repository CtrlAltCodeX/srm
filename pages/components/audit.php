<!-- Fine Upload for Gallery -->
<link rel="stylesheet" href="../../plugins/fine-upload/fine-uploader-gallery.min.css">
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-warning">

				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-group">
						<h1>AUDIT FORM</h1>
						<form role="form" method="POST" action="" id="hazardform">

							<div class="form-group">
								<label style="margin-left:15px;">
									<input type="radio" name="r2" class="minimal-red" value="noncomp">Non Compliance
								</label>
								<label style="margin-left:15px;">
									<input type="radio" name="r2" class="minimal-red" value="comp">Compliance
								</label>
								<label style="margin-left:15px;">
									<input type="radio" name="r2" class="minimal-red" value="nonconf">Non Conformance
								</label>
								<label style="margin-left:15px;">
									<input type="radio" name="r2" class="minimal-red" value="conf">Conformance
								</label>
								<label style="margin-left:15px;">
									<input type="radio" name="r2" class=" minimal-red" id="sc" value="sc">Safety Related Concern
								</label>
								<label style="margin-left:15px;">
									<input type="radio" name="r2" class=" minimal-red" id="qrc" value="qrc">Quality Related Concern
								</label>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label>Audit Type</label>
									<select class="form-control select2" style="width: 100%;" id="at">
										<option>Internal</option>
										<option>External</option>
										<!-- <option>Manual/SOP Review</option>
						<option>National Legislation Review</option>
						<option>On-site Inspection</option>
						<option>Interview </option> 
						<option>Group discussion</option> 
						<option>Observation</option> 
						<option>Assessment of Department logs/records/reports</option> -->

									</select>
								</div>
								<div class="form-group">
									<label>Risk Level</label>
									<select class="form-control select2" style="width: 100%; " id="rl">
										<option>High Risk</option>
										<option>Medium Risk</option>
										<option>Low Risk</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Date of Audit :</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepicker">
									</div>
									<!-- /.input group -->
								</div>
								<div class="form-group">
									<label>Classification</label>
									<select class="form-control select2" style="width: 100%; " id="classification">
										<option>Documentation Review</option>
										<option>Environment</option>
										<option>Equipment</option>
										<option>Facilities</option>
										<option>Manning Level</option>
										<option>Not Adhering to Procedure</option>
										<option>OHS</option>
										<option>Quality Assurance</option>
										<option>Training</option>
										<option>Wildlife</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Select Airport Involved</label>
									<select class="form-control" id="airport">
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
								<div class="form-group"><label>Assign Certificate</label>
									<select class="form-control select2" style="width: 100%; " id="auditcert">
										<?php

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

							<div class="col-md-12">
								<!-- Hazard icident description-->
								<div class="form-group">
									<label>Finding Description</label>
									<textarea class="form-control" rows="5" placeholder="Enter ..." id="findingdescription"></textarea>
								</div>
								<div class="form-group">
									<label>Criteria (What should be ?)</label>
									<textarea class="form-control" rows="3" placeholder="Enter ..." id="criteria"></textarea>
								</div>
								<div class="form-group">
									<label>Effect (So what?/Consequences/result)</label>
									<textarea class="form-control" rows="3" placeholder="Enter ..." id="effect"></textarea>
								</div>
								<div class="form-group">
									<label> Root Cause </label>
									<textarea class="form-control" rows="3" placeholder="Enter ..." id="cause"></textarea>
								</div>


								<!-- /* <div class="form-group">
                  <label>Enter the following details</label>
                  <input class="form-control"  placeholder="Name of auditor..." id="username" type="text" ></input>
				  <input class="form-control"  placeholder="Auditor Email ..." id="useremail" type="text"></input>
				  <input class="form-control"  placeholder="Auditor Phone ..." id="userphone" type="text"></input>
                </div> */ -->

								<div class="row">
									<div class="form-group ">
										<label for="exampleInputFile">Evidence Upload(if available)</label>

										<div class="col-sm-12">
											<div id="audit_image_galery"></div>
											<div id="audit_image_galery_listed"></div>
											<small class="info help-block">
												<b>Extension file must</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
										</div>
									</div>
								</div>

								<div id="printThisTwo" class="box box-info">
									<div class="box-header">
										<h3 class="box-title">Recommendation Lists</h3>

									</div>
									<!-- /.box-header -->

									<div class="box-body table-responsive no-padding" id="output">
										<table class="table table-bordered table-hover" id="recommendationtable">
										</table>
									</div>
									<!-- /.box-body -->
								</div>
								<div class="form-group">
									<h2>RECOMMENDATION(How to make it better?)</h2>
									<textarea class="form-control" rows="3" placeholder="Enter ..." id="recommendation"></textarea>
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control select2" style="width: 100%; " id="status">
										<option>OPEN</option>
										<option>CLOSED</option>
									</select>
								</div>

								<div class="form-group">
									<label>Target Date:</label>

									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="datepickerTWO">
									</div>
									<!-- /.input group -->
								</div>
								<div class="form-group">
									<label>Manager Responsible</label>
									<select class="form-control select2" style="width: 100%; " id="riskowner">
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

						</form>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<button type="button" id="submit2" class="btn btn-danger" onclick="recommend('<?php echo $pageuser ?>')">Add Recommendation</button>
						</div>
						<div class="form-group">
							<button type="button" id="submit2" class="btn btn-primary" onclick="auditkaro('<?php echo $pageuser ?>')">Submit</button>
						</div>
					</div>
				</div>


				<!-- /.box-body -->
			</div>


		</div>
		<!--/.col (left) -->
		<!-- right column -->
	</div>
	<!--/.col (right) -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Fine Uploader Gallery template
  ====================================================================== -->
<script type="text/template" id="qq-template-gallery">
	<div class="qq-new-skin shadow qq-upload-image-placeholder  qq-uploader-selector qq-uploader qq-gallery " qq-drop-area-text="Drop files here">
      <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
        <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
      </div>
      <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
        <span class="qq-upload-drop-area-text-selector"></span>
      </div>
       <div class="qq-upload-button-selector qq-upload-button">
        <div> Select</div>
      </div>
     
      <span class="qq-drop-processing-selector qq-drop-processing">
        <span>Processing dropped files...</span>
        <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
      </span>
      <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
        <li>
          <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
          <div class="qq-progress-bar-container-selector qq-progress-bar-container">
            <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
          </div>
          <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
          <div class="qq-thumbnail-wrapper">
            <img class="qq-thumbnail-selector" id="picture" qq-max-size="120" qq-server-scale>
          </div>
          <button type="button" class="qq-upload-cancel-selector qq-upload-cancel btn btn-flat btn-warning">X</button>
          <button type="button" class="qq-upload-retry-selector qq-upload-retry btn btn-flat">
            <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
            Retry
          </button>

          <div class="qq-file-info">
            <div class="qq-file-name">
              <span class="qq-upload-file-selector qq-upload-file"></span>
              <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
            </div>
            <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
            <span class="qq-upload-size-selector qq-upload-size"></span>
            <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete btn btn-flat">
              <span class="fa fa-close"></span>
            </button>
            <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause btn btn-flat">
              <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
            </button>
            <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue btn btn-flat">
              <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
            </button>
          </div>
        </li>
      </ul>

      <dialog class="qq-alert-dialog-selector">
        <div class="qq-dialog-message-selector"></div>
        <div class="qq-dialog-buttons">
          <button type="button" class="qq-cancel-button-selector">Close</button>
        </div>
      </dialog>

      <dialog class="qq-confirm-dialog-selector">
        <div class="qq-dialog-message-selector"></div>
        <div class="qq-dialog-buttons">
          <button type="button" class="qq-cancel-button-selector">No</button>
          <button type="button" class="qq-ok-button-selector">Yes</button>
        </div>
      </dialog>

      <dialog class="qq-prompt-dialog-selector">
        <div class="qq-dialog-message-selector"></div>
        <input type="text">
        <div class="qq-dialog-buttons">
          <button type="button" class="qq-cancel-button-selector">Cancel</button>
          <button type="button" class="qq-ok-button-selector">Ok</button>
        </div>
      </dialog>
    </div>
  </script>


<script type="text/javascript">
	$(document).ready(function() {

		var params = {};
		// params[csrf] = token;S

		$('#audit_image_galery').fineUploader({
			template: 'qq-template-gallery',
			request: {
				endpoint: '../dbfiles/upload.php',
				params: params
			},
			deleteFile: {
				enabled: true,
				endpoint: '../components/delete_image_file',
			},
			thumbnails: {
				placeholders: {
					waitingPath: '../../plugins/fine-upload/placeholders/waiting-generic.png',
					notAvailablePath: '../../plugins/fine-upload/placeholders/not_available-generic.png'
				}
			},
			validation: {
				allowedExtensions: ["jpg", "jpeg", "png", "csv", "xlsx", "doc", "pdf"],
				sizeLimit: 0,

			},
			showMessage: function(msg) {
				toastr['error'](msg);
			},
			callbacks: {
				onComplete: function(id, name, xhr) {
					if (xhr.success) {
						var uuid = $('#audit_image_galery').fineUploader('getUuid', id);
						$('#audit_image_galery_listed').append('<input type="text" hidden class="listed_file_uuid" name="audit_image_uuid[]" value="' + uuid + '" /><input type="text" hidden class="listed_file_name" name="audit_image_name[]" value="' + xhr.uploadName + '" />');
						// $('#audit_image_galery_listed').append('<input type="text" class="listed_file_uuid" name="audit_image_uuid[' + id + ']" value="' + uuid + '" /><input type="text" class="listed_file_name" name="audit_image_name[' + id + ']" value="' + xhr.uploadName + '" />');

					} else {
						toastr['error'](xhr.error);
					}
				},
				onDeleteComplete: function(id, xhr, isError) {
					if (isError == false) {
						$('#audit_image_galery_listed').find('.listed_file_uuid[name="audit_image_uuid[' + id + ']"]').remove();
						$('#audit_image_galery_listed').find('.listed_file_name[name="audit_image_name[' + id + ']"]').remove();
					}
				}
			}
		}); /*end image galery*/
	});
</script>