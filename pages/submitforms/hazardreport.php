<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SRM PORTAL | HAZARD FORM</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">

	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="../../plugins/iCheck/all.css">
	<link rel="stylesheet" href="../../dist/css/custom.css">

	<link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="../../plugins/fine-upload/fine-uploader-gallery.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->

			<?php
			if (is_file('../../assets/logo/FA_logo-srm_nobg.png')) {
				$logo = '../../assets/logo/FA_logo-srm_nobg.png';
			}
			?>

			<div class="loader"></div>
			<section class="content-header">
				<h1>
					<img src="<?= $logo  ?>" height="50px">Hazard / Incident Report Form

				</h1>
				<ol class="breadcrumb">
					<li class="active"><a href="#"><i class="fa fa-dashboard"></i> Hazard Form</a></li>

				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="box box-warning" id="submitting">
						<div class="box-header">
							<h3 class="box-title">Submitting</h3>
						</div>
						<div class="box-body">
							Please Wait ........
						</div>
						<!-- /.box-body -->
						<!-- Loading (remove the following to stop the loading)-->
						<div class="overlay">
							<i class="fa fa-refresh fa-spin"></i>
						</div>
						<!-- end loading -->
					</div>
					<div class="alert alert-success alert-dismissible" id="successmodel">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i> Success!</h4>
						There were no issues submitting your form. Please wait while the page refreshes.
					</div>

					<div class="alert alert-danger alert-dismissible" id="verybadmodel">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-ban"></i> Failed!</h4>
						Something went very wrong. Try the following to troubleshoot:
						1. Check Internet Connection
					</div>


					<!-- left column -->
					<div class="col-md-6">


						<!-- general form elements -->
						<div class="box box-warning">

							<!-- /.box-header -->
							<div class="box-body">
								<form role="form" method="POST" action="" id="hazardform">

									<div class="form-group">





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


										<!-- Hazard incident description-->
										<div class="form-group">
											<label>Hazard / Incident Description (Describe the hazard in your own words, effects, consequences and corrective actions if possible, include as much detail as possible)</label>
											<textarea class="form-control" rows="3" placeholder="Enter ..." id="hid"></textarea>
										</div>
										<!-- <div class="form-group">
											<label for="exampleInputFile">Evidence Upload (if available)</label>
											<input type="file" id="exampleInputFilei">
											<p class="help-block">Upload evidence here. Files Supported: Jpeg/Word (2013 onwards)/Excel(2013 onwards)/PDF</p>
										</div> -->

										<div class="form-group ">
											<label for="exampleInputFile">Evidence Upload(if available)</label>

											<div class="col-sm-12">
												<div id="audit_image_galery"></div>
												<div id="audit_image_galery_listed"></div>
												<small class="info help-block">
													<b>Files Supported:</b> jpg, jpeg, png, csv, xlsx, doc, pdf</small>
											</div>
										</div>

										<div class="form-group">
											<label>Reporter Details</label>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Name ..." id="username" type="text"></input>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Email ..." id="useremail" type="text"></input>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Phone ..." id="userphone" type="text"></input>
										</div>





								</form>

								<div class="form-group">
									<button type="button" id="submit2" class="btn btn-primary" onclick="bhejo()">Submit</button>
								</div>

							</div>


							<!-- /.box-body -->
						</div>


					</div>
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">
					<div class="box box-info">
						<div class="box-body">
							<h3>Penalty-Free Safety Reporting Policy</h3>
							<h4>Non-punitive reporting of incidents, accidents and error is an essential element of our Safety Management System (SMS). <h4>It is therefore essential that all information affecting safety
									is freely available within AFL. All personnel can feel confident that they can disclose any such information without fear of retribution.</h4>
								<h4> As such we fully endorse non-punitive incident/accident
									and error reporting within AFL. This will develop and foster a culture of mutual trust, in which we adopt a team approach to resolve problems and prevent recurrances.</h4>
								<h4> However this does not imply that AFL
									will tolerate negligence or willful violations of standard operating procedures, policies or regulations. </h4>
								<h5>Signed by the Chairman & Accountable Executive Mr. Faiz Khan in the SMS manual. </h5>

						</div>

					</div>

					<!-- Horizontal Form -->
					<!-- /.box -->
					<!-- general form elements disabled -->
					<!-- /.box -->
				</div>
				<!--/.col (right) -->
				<div class="col-md-12">
					<div class="box box-danger">


						<div class="box-header"><img src="<?= $logo  ?>" height="50px">
							<h3 class="box-title">View Existing Hazards</h3>
						</div>

						<!-- /.box-header -->
						<div class="box-body" id="tablediv">
							<div class="table-responsive">
								<table id="example777" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Status</th>
											<th>Airport</th>
											<th>Description</th>
											<th>Reported Date</th>
											<th>Progress</th>


										</tr>
									</thead>
									<tbody>

										<?php

										include '../../dbconfig.php';
										$query = "SELECT * FROM hazardreport ORDER BY DREPORTED DESC";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);


										while ($row = mysqli_fetch_array($result)) {

											echo "<tr>";
											echo "<td>" . $row['HAZID'] . "</td>";
											echo "<td>" . $row['STATUS'] . "</td>";
											echo "<td>" . $row['AIRPORT'] . "</td>";
											echo "<td>" . $row['HID'] . "</td>";
											echo "<td>" . $row['DREPORTED'] . "</td>";
											echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#myMODALTWO' 
								data-id='" . $row['HAZID'] . "'>Progress</button></td>";

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


					<div class="modal fade bs-example-modal-lg" id="myMODALTWO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myMODALTWOLabel"></h4>
								</div>
								<div class="modal-body">
									<form role="form" method="POST" action="" id="stuffthree">
										<div id="printThisTwo" class="col-md-12">
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
											<div class="box box-info">
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




									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" id="PrintTwo" class="btn btn-danger">Print</button>

								</div>
							</div>

						</div>
					</div>
				</div>

		</div>
	</div>
	<!-- /.row -->
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php
	$footer = "../components/footer.php";
	include($footer);

	?>

	<!-- Control Sidebar -->

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.3 -->
	<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="../../plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="../../dist/js/app.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../../dist/js/demo.js"></script>

	<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>

	<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>

	<script src="../../plugins/fine-upload/jquery.fine-uploader.min.js"></script>
	<script src="../../plugins/toastr/toastr.js"></script>

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

	<script>
		function bhejo() {
			var uniquevar = jQuery.now();
			var hid = document.getElementById("hid").value;
			var username = document.getElementById("username").value;
			var userphone = document.getElementById("userphone").value;
			var useremail = document.getElementById("useremail").value;

			var focusSet = false;
			if (!$('#hid').val()) {
				if ($("#hid").parent().next(".validation").length == 0) // only add if not added
				{
					$("#hid").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Hazard Description</div>");
				}

				$('#hid').focus();
				focusSet = true;
			} else {
				$("#hid").parent().next(".validation").remove(); // remove it
			}
			if (!$('#username').val()) {
				if ($("#username").parent().next(".validation").length == 0) // only add if not added
				{
					$("#username").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter your name</div>");
				}

				if (!focusSet) {
					$("#username").focus();
				}
			} else {
				$("#username").parent().next(".validation").remove(); // remove it
			}

			if (!$('#useremail').val()) {
				if ($("#useremail").parent().next(".validation").length == 0) // only add if not added
				{
					$("#useremail").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter your email</div>");
				}

				$('#useremail').focus();
				focusSet = true;
			} else {
				$("#useremail").parent().next(".validation").remove(); // remove it
			}
			if (!$('#userphone').val()) {
				if ($("#userphone").parent().next(".validation").length == 0) // only add if not added
				{
					$("#userphone").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter your phone contact</div>");
				}

				$('#userphone').focus();
				focusSet = true;
			} else {
				$("#userphone").parent().next(".validation").remove(); // remove it
			}
			if (!(hid == '') && !(username == '') && !(userphone == '') && !(useremail == '')) {

				$('html, body').animate({
					scrollTop: 0
				}, 'slow');
				$('#submitting').show();

				// AJAX code to submit form.
				$.ajax({
					type: "POST",
					url: "hazardreportmysql.php",

					cache: false,
					success: function(html) {

						console.log(html);
						var airport = document.getElementById("airport").value;
						var hid = document.getElementById("hid").value;
						var id = $.trim(html);
						var source = "USER REPORTED";

						var files = $("input[name='audit_image_name[]']").map(function() {
							return this.value; // $(this).val()
						}).get().join(",");

						if (files != null) {


							var dataString = {
								id: id,
								hid: hid,
								username: username,
								useremail: useremail,
								userphone: userphone,
								airport: airport,
								source: source,
								FileName: files
							};
						} else {

							var dataString = {
								id: id,
								hid: hid,
								username: username,
								useremail: useremail,
								userphone: userphone,
								airport: airport,
								source: source,
								FileName: "",
								extension: ""
							};

						}
						$.ajax({
							type: "POST",
							url: "hazardinsert.php",
							data: dataString,
							cache: false,
							success: function(htmltwo) {
								var emailstring = 'useremail=' + useremail;
								$.ajax({
									type: "POST",
									url: "emailsdc.php",
									data: emailstring,
									cache: false,
									success: function(htmlthree) {

										$('html,body').animate({
											scrollTop: 0
										}, 50);
										$("#submitting").hide();
										$('#successmodel').show();
										setTimeout(function() {
											location.reload();
										}, 1001);

									},
									error: function(htmlthree) {
										$('html,body').animate({
											scrollTop: 0
										}, 500);
										$("#submitting").hide();
										$('#verybadmodel').show();

									}
								});



							},
							error: function(htmltwo) {
								console.log(htmltwo);
								$('#verybadmodel').show();

							}
						});


					},


					error: function(html) {
						/* document.getElementById('hazardform').reset(); */
						console.log(html);
						$('html').scrollTop(0);
						setTimeout(function() {
							$('#submitting').modal('hide')
						}, 3)
						$('#submitting').show();
						$("#submitting").fadeTo(3000, 500).slideUp(500, function() {
							$("#submitting").alert('close');
						});

						$('#verybadmodel').delay(3200).fadeIn(500);
						$('#verybadmodel').delay(3000).fadeOut(500);

					}
				});
			}
			return false;
		}

		function uploadFile(myFileObject, uniquevar, extension) {
			// Open Our formData Object
			var formData = new FormData();

			// Append our file to the formData object
			// Notice the first argument "file" and keep it in mind
			formData.append('my_uploaded_file', myFileObject);
			formData.append('uniquevar', uniquevar);
			formData.append('extension', extension);

			// Create our XMLHttpRequest Object
			var xhr = new XMLHttpRequest();

			// Open our connection using the POST method
			xhr.open("POST", '../dbfiles/upload.php');

			// Send the file
			xhr.send(formData);
		}


		$('#myMODALTWO').on('show.bs.modal', function(event) {
			$('#updatetable').empty();
			$('#hazardtable').empty();
			var button = $(event.relatedTarget) // Button that triggered the modal
			var ID = button.data('id')
			/* var ID = button.data('id')  */

			var modal = $(this)
			modal.find('.modal-title').text('Update Details for ID : ' + ID)
			modal.find('.modal-body #IDu').val(ID)


			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'id=' + ID;

			$.ajax({
				type: "POST",
				url: "../dbfiles/processhazard.php",
				data: dataString,
				cache: false,
				dataType: 'json',

				success: function(html) {

					console.log(html);
					/* var title=html[0];  */

					var len = html.length;

					var tr_strone = "<thead><tr>" +
						"<th>Item</th>" +
						"<th > <nobr>Description</nobr></th>" +

						"</tr></thead><tbody>";

					$("#hazardtable").append(tr_strone);
					for (var i = 0; i < len; i++) {
						var hazid = html[i].hazid;
						var airport = html[i].airport;
						var hid = html[i].hid;
						var recommendeda = html[i].recommendeda;



						var tr_str = "<tr>" +
							"<td style='font-weight:bold'>ID</td>" +
							"<td >" + hazid + "</td>" + "</tr>" + "<tr>" +
							"<td style='font-weight:bold'>Airport</td>" +
							"<td >" + airport + "</td>" + "</tr>" + "<tr>" +
							"<td style='font-weight:bold'>Hazard Description</td>" +
							"<td >" + hid + "</td>" + "</tr>" + "<tr>" +
							"<td style='font-weight:bold'>Recommended Action</td>" +
							"<td >" + recommendeda + "</td>" +
							"</tr>";

						$("#hazardtable").append(tr_str);
					}
					var tr_strqw = "</tbody><tfoot><tr>" +
						"<th>Item</th>" +
						"<th > <nobr>Description</nobr></th>" +

						"</tr></tfoot><tbody>";

					$("#hazardtable").append(tr_strqw);







				},
				error: function(html) {
					console.log(html);

				}
			});


			$.ajax({
				type: "POST",
				url: "../dbfiles/processupdate.php",
				data: dataString,
				cache: false,
				dataType: 'json',

				success: function(html) {

					console.log(html);
					/* var title=html[0];  */

					var len = html.length;

					var tr_strone = "<thead><tr>" +
						"<th>ID</th>" +
						"<th > <nobr>Update Date</nobr></th>" +
						"<th>Update Content</th>" +
						"<th>Person</th>" +
						"<th>Evidence</th>" +
						"</tr></thead><tbody>";

					$("#updatetable").append(tr_strone);
					for (var i = 0; i < len; i++) {
						var hazid = html[i].hazid;
						var updatedate = html[i].updatedate;
						var updatecontent = html[i].updatecontent;
						var person = html[i].person;
						var link = html[i].link;


						var tr_str = "<tr>" +
							"<td >" + hazid + "</td>" +
							"<td >" + updatedate + "</td>" +
							"<td >" + updatecontent + "</td>" +
							"<td >" + person + "</td>" +
							"<td >" + link + "</td>" +
							"</tr>";

						$("#updatetable").append(tr_str);
					}
					var tr_strqw = "</tbody><tfoot><tr>" +
						"<th >ID</th>" +
						"<th >Update Date</th>" +
						"<th>Update Content</th>" +
						"<th>Person</th>" +
						"<th>Evidence</th>" +
						"</tr></tfoot><tbody>";

					$("#updatetable").append(tr_strqw);







				},
				error: function(html) {
					console.log(html);

				}
			});




		})

		document.getElementById("PrintTwo").onclick = function() {
			printElement(document.getElementById("printThisTwo"));
		}

		function printElement(elem) {
			var domClone = elem.cloneNode(true);

			var $printSection = document.getElementById("printSection");

			if (!$printSection) {
				var $printSection = document.createElement("div");
				$printSection.id = "printSection";
				document.body.appendChild($printSection);
			}

			$printSection.innerHTML = "";
			$printSection.appendChild(domClone);
			window.print();
		}
	</script>
	<script language="javascript" type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut("slow");
			$('#successmodel').hide();

			$('#verybadmodel').hide();
			$('#submitting').hide();
			$("#example777").DataTable({
				order: [
					[5, 'desc']
				]
			});

			document.getElementById('hazardform').reset();




		});

		$(document).ready(function() {

			$("#departments").change(function() {

				$('#example1').empty();

				var value = $(this).val();
				var dataString = 'department=' + value;
				$.ajax({
					type: "POST",
					url: "../dbfiles/getexistinghazards.php",
					data: dataString,
					cache: false,
					dataType: 'json',

					success: function(html) {

						console.log(html);
						/* var title=html[0];  */

						var len = html.length;

						var tr_strone = "<thead><tr>" +
							"<th>ID</th>" +
							"<th>Status</th>" +
							"<th > <nobr>Related To</nobr></th>" +
							"<th>Hazard Description</th>" +

							"</tr></thead><tbody>";

						$("#example1").append(tr_strone);
						for (var i = 0; i < len; i++) {
							var hid = html[i].hid;
							var status = html[i].status;
							var htype = html[i].htype;
							var hdesc = html[i].hdesc;



							var tr_str = "<tr>" +
								"<td >" + hid + "</td>" +
								"<td >" + status + "</td>" +
								"<td >" + htype + "</td>" +
								"<td >" + hdesc + "</td>" +

								"</tr>";

							$("#example1").append(tr_str);
						}
						var tr_strqw = "</tbody><tfoot><tr>" +
							"<th>ID</th>" +
							"<th>Status</th>" +
							"<th > <nobr>Related To</nobr></th>" +
							"<th>Hazard Description</th>" +
							"</tr></tfoot><tbody>";

						$("#example1").append(tr_strqw);









					},
					error: function(html) {
						console.log(html);

					}
				});


			});


		});
	</script>

	<script type="text/javascript">
		function run() {

			$('#successmodel').show();
			$("#successmodel").fadeTo(3000, 500).slideUp(500, function() {
				$("#successmodel").alert('close');
			});
			setTimeout(function() {
				location.reload();
			}, 4000);

		}
		/* var sortSelect = function (select, attr, order) {
    if(attr === 'text'){
        if(order === 'asc'){
            $(select).html($(select).children('option').sort(function (x, y) {
                return $(x).text().toUpperCase() < $(y).text().toUpperCase() ? -1 : 1;
            }));
            $(select).get(0).selectedIndex = 0;
           
        }// end asc
        if(order === 'desc'){
            $(select).html($(select).children('option').sort(function (y, x) {
                return $(x).text().toUpperCase() < $(y).text().toUpperCase() ? -1 : 1;
            }));
            $(select).get(0).selectedIndex = 0;
            
        }// end desc
    }

}; */
	</script>

	<script>
		//iCheck for checkbox and radio inputs



		//Flat red color scheme for iCheck
	</script>
</body>

</html>