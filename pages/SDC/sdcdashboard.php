<?php

session_start();

if (!isset($_SESSION['USER'])) {
	header("Location: ../../");
} else if (!($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE") && !($_SESSION['USER'] == "CEO")) {
	header("Location: ../../");
}
// Echo session variables that were set on previous page
/* echo "Favorite color is " . $_SESSION["USER"] . ".<br>"; */

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SRM PORTAL | SDA</title>
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

	<!-- Select2 -->
	<link rel="stylesheet" href="../../plugins/select2/select2.min.css">
	<link rel="stylesheet" href="../../plugins/select2/select2.css">

	<link rel="stylesheet" href="../../dist/css/custom.css">

	<link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="../../plugins/fine-upload/fine-uploader-gallery.min.css" />

</head>

<body class="hold-transition skin-blue sidebar-mini">


	<div class="wrapper">

		<header class="main-header">

			<?php
			if (is_file('../../assets/logo/FA_logo-srm_nobg.png')) {
				$logo = '../../assets/logo/FA_logo-srm_nobg.png';
			}
			?>


			<!-- Logo -->
			<a href="../../index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b></b><?php echo $_SESSION["USER"]; ?></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Welcome </b><?php echo $_SESSION["USER"]; ?></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top"><img src="<?= $logo  ?>" height="50px">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<!-- Notifications: style can be found in dropdown.less -->
						<!-- Tasks: style can be found in dropdown.less -->

						<li><a type="button" class="btn btn-flat" onclick="logout()">Sign out</a></li>
						<!-- User Account: style can be found in dropdown.less -->

						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<!-- search form -->
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<!-- <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->

					<li class="treeview active">
						<a href="#">
							<i class="fa fa-laptop"></i>
							<span>SDA</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="active"><a href="sdcdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
							<li><a href="datadumping.php"><i class="fa fa-circle-o"></i> DATA DUMPING</a></li>
							<li><a href="sdcmorform.php"><i class="fa fa-circle-o"></i> MOR FORM</a></li>
							<li><a href="sdcomplianceform.php"><i class="fa fa-circle-o"></i> COMPLIANCE FORM</a></li>

						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-dashboard"></i> CEO
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../CEO/ceodashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-dashboard"></i> GMAI
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../GMAI/gmaidashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-dashboard"></i> GMATM
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../GM/gmdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-share"></i> <span>QASO</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li>
								<a href=".#"><i class="fa fa-circle-o"></i> AERODOME
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/AERODOME/aerodashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> AMO
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/AMO/amodashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> ATSP
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/ATSP/atspdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> ENVIRONMENT
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/ENVIRONMENT/envdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> FIRE
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/FIRE/firedashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> OHS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/OHS/ohsdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

								</ul>
							</li>
						</ul>

					</li>


					<li class="treeview">
						<a href="#">
							<i class="fa fa-share"></i> <span>MANAGER</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>

						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MNOS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/APMNA/apmnadashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MBCW
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/BCW/bcwdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> HOP
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/CHOP/chopdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> GMATM
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/GM/gmdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MALOCS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MALOCS/malocsdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MANES
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MANES/manesdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MAO
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MAO/airsidedashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MARFFS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MARFFS/marffsdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MASS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MASS/massdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MC
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MC/mcdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MEMS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MEMS/memsdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>

						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MFS
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MFS/mfsdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MPODC
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MHR/mhrdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> MSRM
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/MSRM/msrmdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>

						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> SFA
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/SFA/sfadashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>


					</li>


					<li><a href="../../pages/submitforms/hazardreport.php"><i class="fa fa-dashboard"></i> <span>Hazard Form</span></a></li>


				</ul>


			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="loader"></div>
			<section class="content-header">
				<h1>
					Safety Data Analyst Dashboard

				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">SRM</a></li>
					<li><a href="#">SDA</a></li>
					<li class="active">DASHBOARD</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- left column -->
					<div class="col-xs-12">


						<div class="box box-warning" id="submitting">
							<div class="box-header">
								<h3 class="box-title">Submitting</h3>
							</div>
							<div class="box-body">
								Please Wait while your form is submitted
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
							There were no issues in assignign risk owners and Qaso.
						</div>


						<div class="alert alert-danger alert-dismissible" id="verybadmodel">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-ban"></i> Failed!</h4>
							Something went wrong. Please contact developer.
						</div>

						<button type="button" class="btn btn-danger" onclick="alerts()">SEND ALERTS MATE</button>

						<div class="box">
							<div class="box-header">
								<h3 class="box-title">New Hazard Submissions</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body" id="tablediv">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Airport</th>
											<th>User Reported</th>
											<th>Date Reported</th>
											<th>Details</th>
										</tr>
									</thead>
									<tbody>

										<?php

										include '../../dbconfig.php';
										$query = "SELECT * FROM hazardreport  WHERE SDCCHECK=0";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);


										while ($row = mysqli_fetch_array($result)) {

											echo "<tr>";
											echo "<td>" . $row['HAZID'] . "</td>";
											echo "<td>" . $row['AIRPORT'] . "</td>";
											echo "<td>" . $row['USERREPORTED'] . "</td>";
											echo "<td>" . $row['DREPORTED'] . "</td>";
											echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' 
							data-id='" . $row['HAZID'] . "'  data-hid='" . $row['HID'] . "' data-dreported='" . $row['DREPORTED'] . "' data-userreported='" . $row['USERREPORTED'] . "'data-airport='" . $row['AIRPORT'] . "' >View </button></td>";
											echo "</tr>";
										}

										?>
									</tbody>
									<tfoot>

									</tfoot>
								</table>
							</div>
							<!-- /.box-body -->
						</div>

						<!-- BLOCK COMPLIANCE CLOSURE -->
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Compliance Closure Submissions</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body" id="tablediv">
								<table id="example12" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Level</th>
											<th>Closure Expected:</th>
											<th>Weekly Update Due In:</th>
											<th>Details</th>


										</tr>
									</thead>
									<tbody>

										<?php

										include '../../dbconfig.php';
										$query = "SELECT *, DATEDIFF(CURDATE(),TARGETDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM compliance  WHERE CLOSEDRO='CLOSED' AND STATUS ='OPEN'";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);


										while ($row = mysqli_fetch_array($result)) {

											echo "<tr>";
											echo "<td>" . $row['COMP_ID'] . "</td>";
											echo "<td>" . $row['MITIGATIONLEVEL'] . "</td>";



											if ($row['DiffDate'] < 0) {
												echo "<td>Overdue by " . abs($row['DiffDate']) . " days</td>";
											} else {
												echo "<td>" . $row['DiffDate'] . " days remaining</td>";
											}



											$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];

											if ($LastUpdateDiffDate < 0) {
												echo "<td>Overdue by " . abs($LastUpdateDiffDate) . " days</td>";
											} else {
												echo "<td>" . $LastUpdateDiffDate . " days remaining</td>";
											}

											/* echo "<td>".$row['DREPORTED']."</td>"; */
											echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#COMPMODALWA' 
								data-id='" . $row['COMP_ID'] . "'data-yearaudit='" . $row['YEAR_AUDIT'] . "' data-desc='" . $row['DESCRIPTION'] . "' data-ml='" . $row['MITIGATIONLEVEL'] . "' data-tg='" . $row['TARGETDATE'] . "' data-ro='" . $row['RISKOWNER'] . "'
								data-rt='" . $row['RELATEDTO'] . "'data-airport='" . $row['AIRPORT'] . "'data-lu='" . $row['LASTUPDATE'] . "' data-closedro='" . $row['CLOSEDRO'] . "' data-status='" . $row['STATUS'] . "' >View </button></td>";





											echo "</tr>";
										}
										mysqli_close($db);

										?>
									</tbody>

								</table>
							</div>
							<!-- /.box-body -->
						</div>


						<!-- BLOCK ALL OPEN HAZARDS -->
						<div class="box">


							<div class="box-header">
								<h3 class="box-title">All Open Hazards</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body" id="tablediv">
								<table id="example3" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>


											<th>Closure Expected:</th>
											<th>Weekly Update Due in:</th>
											<th>Title</th>
											<th>Risk Owner</th>
											<th>Risk Level</th>

											<th>Details</th>
											<th>Update</th>

										</tr>
									</thead>
									<tbody>

										<?php

										include '../../dbconfig.php';
										$query = "SELECT *, DATEDIFF(CURDATE(),SDCSUBMITDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='1' AND SDCCHECKTWO='1' AND CLOSEDRO='OPEN'";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);


										while ($row = mysqli_fetch_array($result)) {

											echo "<tr>";
											echo "<td>" . $row['HAZID'] . "</td>";



											$diffdateone = 7 - $row['DiffDate'];
											$diffdatetwo = 14 - $row['DiffDate'];
											if ($row['RESPONSE'] === "1 Week") {
												if ($diffdateone < 0) {
													echo "<td>Overdue by " . abs($diffdateone) . " days</td>";
												} else {
													echo "<td>" . $diffdateone . " days remaining</td>";
												}
											} else if ($row['RESPONSE'] === "2 Weeks") {
												if ($diffdatetwo < 0) {
													echo "<td>Overdue by " . abs($diffdatetwo) . " days</td>";
												} else {
													echo "<td>" . $diffdatetwo . " days remaining</td>";
												}
											}


											$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];

											if ($LastUpdateDiffDate < 0) {
												echo "<td>Overdue by " . abs($LastUpdateDiffDate) . " days</td>";
											} else {
												echo "<td>" . $LastUpdateDiffDate . " days</td>";
											}
											echo "<td>" . $row['HITYPE'] . "</td>";
											echo "<td>" . $row['RISKOWNER'] . "</td>";
											echo "<td>" . $row['RISKLEVEL'] . "</td>";
											echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myMODAL' 
								data-id='" . $row['HAZID'] . "'data-hazorinc='" . $row['HAZORINC'] . "' data-airport='" . $row['AIRPORT'] . "' data-hitype='" . $row['HITYPE'] . "' data-hid='" . $row['HID'] . "' data-causetype='" . $row['CAUSETYPE'] . "'
								data-cd='" . $row['CD'] . "' data-effecttype='" . $row['EFFECTTYPE'] . "' data-ed='" . $row['ED'] . "' data-deventoccurance='" . $row['DEVENTOCCURANCE'] . "'data-timeoc='" . $row['TIMEOC'] . "'
								data-dreported='" . $row['DREPORTED'] . "' data-userreported='" . $row['USERREPORTED'] . "'data-riskowner='" . $row['RISKOWNER'] . "' 
								data-qaso='" . $row['QASO'] . "'data-riskcontext='" . $row['RISKCONTEXT'] . "'data-riskconsequence='" . $row['RISKCONSEQUENCE'] . "'
								data-riskhood='" . $row['RISKHOOD'] . "'data-risklevel='" . $row['RISKLEVEL'] . "'data-response='" . $row['RESPONSE'] . "'
								data-recommendeda='" . $row['RECOMMENDEDA'] . "'data-ohsref='" . $row['OHSREF'] . "'>View </button></td>";



											echo "<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myMODALTWO' 
								data-id='" . $row['HAZID'] . "'>Update</button></td>";



											echo "</tr>";
										}
										mysqli_close($db);

										?>
									</tbody>

								</table>
							</div>
							<!-- /.box-body -->
						</div>

						<!-- BLOCK ALL OPEN MOR'S -->
						<div class="box box-primary">
							<div class="box-header">
								<h3 class="box-title">All Open MOR's</h3>
							</div>

							<div class="box-body" id="tablediv">
								<table id="example33" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>CAAFID</th>
											<th>Weekly Update Due in:</th>
											<th>Title</th>
											<th>Manager</th>

											<th>Details</th>
											<th>Update</th>

										</tr>
									</thead>
									<tbody>

										<?php

										include '../../dbconfig.php';
										$query = "SELECT *, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM mor  WHERE  CLOSEDRO='OPEN'";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);


										while ($row = mysqli_fetch_array($result)) {

											echo "<tr>";
											echo "<td>" . $row['MORID'] . "</td>";

											echo "<td>" . $row['CAAFID'] . "</td>";


											$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];

											if ($LastUpdateDiffDate < 0) {
												echo "<td>Overdue by " . abs($LastUpdateDiffDate) . " days</td>";
											} else {
												echo "<td>" . $LastUpdateDiffDate . " days</td>";
											}
											echo "<td>" . $row['TITLE'] . "</td>";
											echo "<td>" . $row['RISKOWNER'] . "</td>";
											echo "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#MORMODAL' 
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



											echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#MORMODALTWO' 
								data-id='" . $row['MORID'] . "'>Update</button></td>";



											echo "</tr>";
										}
										mysqli_close($db);

										?>
									</tbody>

								</table>
							</div>


						</div>

						<!-- BLOCK ALL OPEN COMPLIANCE -->
						<div class="box box-primary">


							<div class="box-header">
								<h3 class="box-title">All open Compliance Issues</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body" id="tablediv">
								<table id="example77" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Level</th>
											<th>Closure Expected:</th>
											<th>Weekly Update Due In:</th>
											<th>Risk Owner:</th>
											<th>Details</th>
											<th>Update</th>

										</tr>
									</thead>
									<tbody>

										<?php

										include '../../dbconfig.php';
										$query = "SELECT *, DATEDIFF(TARGETDATE ,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM compliance  WHERE CLOSEDRO='OPEN'";
										mysqli_query($db, $query) or die('Error querying database.');
										$result = mysqli_query($db, $query);


										while ($row = mysqli_fetch_array($result)) {

											echo "<tr>";
											echo "<td>" . $row['COMP_ID'] . "</td>";
											echo "<td>" . $row['MITIGATIONLEVEL'] . "</td>";



											if ($row['DiffDate'] < 0) {
												echo "<td>Overdue by " . abs($row['DiffDate']) . " days</td>";
											} else {
												echo "<td>" . $row['DiffDate'] . " days remaining</td>";
											}



											$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];

											if ($LastUpdateDiffDate < 0) {
												echo "<td>Overdue by " . abs($LastUpdateDiffDate) . " days</td>";
											} else {
												echo "<td>" . $LastUpdateDiffDate . " days</td>";
											}

											echo "<td>" . $row['RISKOWNER'] . "</td>";
											echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#COMPMODAL' 
								data-id='" . $row['COMP_ID'] . "'data-yearaudit='" . $row['YEAR_AUDIT'] . "' data-desc='" . $row['DESCRIPTION'] . "' data-ml='" . $row['MITIGATIONLEVEL'] . "' data-tg='" . $row['TARGETDATE'] . "' data-ro='" . $row['RISKOWNER'] . "'
								data-rt='" . $row['RELATEDTO'] . "'data-airport='" . $row['AIRPORT'] . "'data-lu='" . $row['LASTUPDATE'] . "' data-closedro='" . $row['CLOSEDRO'] . "' data-status='" . $row['STATUS'] . "' >View </button></td>";



											echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#COMPMODALTWO' 
								data-id='" . $row['COMP_ID'] . "'>Update</button></td>";



											echo "</tr>";
										}
										mysqli_close($db);

										?>
									</tbody>

								</table>
							</div>
							<!-- /.box-body -->
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
											<div class="col-md-6">

												<div class="form-group">

													<label for="recipient-name" class="control-label">ID:</label>
													<input type="text" class="form-control" id="ID" disabled="">
													<label for="message-text" class="control-label">Airport:</label>
													<input type="text" class="form-control" id="airport" disabled="">
													<!-- <label for="message-text" class="control-label">Hazard/Incident Type:</label>
							<input type="text" class="form-control" id="hitype" disabled=""> -->
													<label for="message-text" class="control-label">Hazard/Incident Description</label>
													<textarea class="form-control" id="hid" disabled=""></textarea>
													<!-- <label for="message-text" class="control-label">Potential Cause Type:</label>
							<input type="text" class="form-control" id="pct" disabled="">
							<label for="message-text" class="control-label">Potential Cause Description</label>
							<textarea class="form-control" id="pcd" disabled=""></textarea>
							<label for="message-text" class="control-label">Effect/Consequence Type:</label>
							<input type="text" class="form-control" id="ect" disabled="">
							<label for="message-text" class="control-label">Effect/Consequence Description</label>
							<textarea class="form-control" id="ecd" disabled=""></textarea>							
							<label for="message-text" class="control-label" > Date Event Occured</label>
							<input type="label" class="form-control" id="dvo" disabled=""> -->
													<label for="message-text" class="control-label"> Date/Time of Report</label>
													<input type="label" class="form-control" id="dr" disabled="">



												</div>


											</div>

											<div class="col-md-6">

												<div class="form-group">


													<label>Assign QASO</label>
													<select class="form-control select2" style="width: 100%; " id="qaso">
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

												<div class="form-group">


													<label>Assign Risk Owner</label>
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
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()">Send to QASO</button>
									</div>
								</div>


							</div>
						</div>




						<!--/.col (right) -->
					</div>


					<!-- MODAL ALL MOR'S UPDATE -->
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
											<div class="box box-info">
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

													<textarea class="form-control" rows="3" placeholder="Enter Update..." id="updatecontentmor"></textarea>
													<input class="form-control" type="text" placeholder="Name" id="updateusermor">
													<div><label><input type="checkbox" class="flat-red" id="statusmor">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
													<div class="form-group">
														<label for="exampleInputFile">Evidence Upload</label>
														<input type="file" id="exampleInputFilemor">
														<p class="help-block">Upload evidence here. Ensure filename does not have spaces</p>
													</div>


												</div>


											</div>


									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" onclick="updatemor()">Update</button>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="modal fade bs-example-modal-lg" id="COMPMODALWA" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="COMPMODALWALabel"></h4>
							</div>
							<div class="modal-body">
								<form role="form" method="POST" action="" id="compstuffwa">
									<div class="col-md-12">

										<div class="box box-warning">

											<!-- /.box-header -->
											<div class="box-body">
												<form role="form" method="POST" action="" id="compform">
													<div class="form-group">
														<label>COMPLIANCE ID:</label>
														<input class="form-control" placeholder="COMPLIANCE ID" id="compidwa" type="text" disabled=""></input>
														<label>YEAR OF AUDIT:</label>
														<input class="form-control" placeholder="YEAR" id="yearauditwa" type="text" disabled=""></input>

														<label>DESCRIPTION</label>
														<textarea class="form-control" rows="10" placeholder="Enter ..." id="descriptionwa" disabled=""></textarea>




														<label>MITIGATION LEVEL</label>
														<textarea class="form-control" rows="1" placeholder="Enter ..." id="mitigationwa" disabled=""></textarea>




														<label>TARGET DATE :</label>
														<input class="form-control" placeholder="YEAR" id="targetdatewa" type="text" disabled=""></input>


														<!-- /.input group -->



														<label>Risk Owner</label>
														<select class="form-control select2" style="width: 100%; " id="riskownercompwa" disabled="">
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
														<select class="form-control" id="hitypecompwa" disabled="">
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
														<select class="form-control" id="airportcompwa" disabled="">
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

														<input class="form-control" placeholder="YEAR" id="lastupdatecompwa" type="text" disabled=""></input>

														<!-- /.input group -->




														<label>Status</label>
														<select class="form-control select2" style="width: 100%; " id="statuscompwa" disabled="">
															<option>OPEN</option>
															<option>CLOSED</option>

														</select>

														<div class="form-group">
															<label>Set New Target Date: (If requested by Risk Owner, otherwise leave it as it is)</label>
															<div class="form-group">
																<div class="input-group date">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar"></i>
																	</div>
																	<input type="text" class="form-control pull-right" id="datepickerfidywa">
																</div>
															</div>
															<!-- /.input group -->
														</div>

													</div>

													<!-- Date Picker-->


												</form>


											</div>


										</div>


										<div class="form-group">
											<div class="box box-info">
												<div class="box-header">
													<h3 class="box-title">Update History</h3>
													<input type="hidden" class="form-control" id="IDCOMPwa" disabled="">
												</div>
												<!-- /.box-header -->
												<div class="box-body table-responsive no-padding" id="outputupdatecompwa">
													<table class="table table-bordered table-hover" id="updateupdatecompwa">
													</table>
												</div>
												<!-- /.box-body -->
											</div>
										</div>

									</div>

								</form>

								<div class="modal-footer">
									<div class="form-group">
										<form id="qasoad">

											<textarea class="form-control" rows="3" placeholder="Enter Feedback..." id="qasoupdatecontentcompwa"></textarea>
											<input class="form-control" type="text" placeholder="Name" id="qasoupdateusercompwa">
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
									<button type="button" class="btn btn-primary" onclick="updatecompwa()">Update</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
				</div>



				<div class="row">
					<?php

					$Modal = "../components/moreonthis.php";

					include($Modal);
					?>
				</div>



		</div>
		<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 2.3.8
		</div>
		<strong>Copyright &copy; 2014-2023 <a href="http://www.airportsfiji.com">Fiji Airports</a>.</strong> All rights
		reserved.
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Create the tabs -->
		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
			<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
			<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Home tab content -->
			<div class="tab-pane" id="control-sidebar-home-tab">
				<h3 class="control-sidebar-heading">Recent Activity</h3>
				<ul class="control-sidebar-menu">
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-birthday-cake bg-red"></i>

							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

								<p>Will be 23 on April 24th</p>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-user bg-yellow"></i>

							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

								<p>New phone +1(800)555-1234</p>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

								<p>nora@example.com</p>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<i class="menu-icon fa fa-file-code-o bg-green"></i>

							<div class="menu-info">
								<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

								<p>Execution time 5 seconds</p>
							</div>
						</a>
					</li>
				</ul>
				<!-- /.control-sidebar-menu -->

				<h3 class="control-sidebar-heading">Tasks Progress</h3>
				<ul class="control-sidebar-menu">
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Custom Template Design
								<span class="label label-danger pull-right">70%</span>
							</h4>

							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Update Resume
								<span class="label label-success pull-right">95%</span>
							</h4>

							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-success" style="width: 95%"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Laravel Integration
								<span class="label label-warning pull-right">50%</span>
							</h4>

							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<h4 class="control-sidebar-subheading">
								Back End Framework
								<span class="label label-primary pull-right">68%</span>
							</h4>

							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
							</div>
						</a>
					</li>
				</ul>
				<!-- /.control-sidebar-menu -->

			</div>
			<!-- /.tab-pane -->
			<!-- Stats tab content -->
			<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
			<!-- /.tab-pane -->
			<!-- Settings tab content -->
			<div class="tab-pane" id="control-sidebar-settings-tab">
				<form method="post">
					<h3 class="control-sidebar-heading">General Settings</h3>

					<div class="form-group">
						<label class="control-sidebar-subheading">
							Report panel usage
							<input type="checkbox" class="pull-right" checked>
						</label>

						<p>
							Some information about this general settings option
						</p>
					</div>
					<!-- /.form-group -->

					<div class="form-group">
						<label class="control-sidebar-subheading">
							Allow mail redirect
							<input type="checkbox" class="pull-right" checked>
						</label>

						<p>
							Other sets of options are available
						</p>
					</div>
					<!-- /.form-group -->

					<div class="form-group">
						<label class="control-sidebar-subheading">
							Expose author name in posts
							<input type="checkbox" class="pull-right" checked>
						</label>

						<p>
							Allow the user to show his name in blog posts
						</p>
					</div>
					<!-- /.form-group -->

					<h3 class="control-sidebar-heading">Chat Settings</h3>

					<div class="form-group">
						<label class="control-sidebar-subheading">
							Show me as online
							<input type="checkbox" class="pull-right" checked>
						</label>
					</div>
					<!-- /.form-group -->

					<div class="form-group">
						<label class="control-sidebar-subheading">
							Turn off notifications
							<input type="checkbox" class="pull-right">
						</label>
					</div>
					<!-- /.form-group -->

					<div class="form-group">
						<label class="control-sidebar-subheading">
							Delete chat history
							<a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
						</label>
					</div>
					<!-- /.form-group -->
				</form>
			</div>
			<!-- /.tab-pane -->
		</div>
	</aside>
	<!-- /.control-sidebar -->
	<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
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
	<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>

	<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="../components/qasomodalqeuries.js"></script>
	<script src="../components/modalqeuries.js"></script>
	<script src="../components/morfunctions.js"></script>

	<script language="javascript" type="text/javascript">
		$(window).load(function() {
			$(".loader").fadeOut("slow");
			$('#successmodel').hide();

			$('#verybadmodel').hide();
			$('#submitting').hide();
			$('#allsubmissionsdiv').css('visibility', 'hidden');
			$('#datepicker').datepicker({
				autoclose: true
			});
			$('#datepickerfidywa').datepicker({
				autoclose: true
			});

			$("#example1").DataTable();
			$("#example11").DataTable();
			$("#example3").DataTable();
			$("#example33").DataTable();
			$("#example10").DataTable();
			$("#example12").DataTable();
			$("#example77").DataTable();

		});
	</script>

	<script>
		function myFunction() {
			$('#submitting').show();
			setTimeout(function() {
				$('#exampleModal').modal('hide')
			}, 3)
			var ro = document.getElementById("riskowner").value;
			var qaso = document.getElementById("qaso").value;
			var id = document.getElementById("ID").value;

			/* 
				var hitype = document.getElementById("hitype").value;
				var pct = document.getElementById("pct").value;
				var ect = document.getElementById("ect").value;
				var cert = document.getElementById("hazcert").value; 
			*/

			// Returns successful data submission message when the entered information is stored in database.
			var dataString = {
				ro: ro,
				qaso: qaso,
				id: id
			};
			if (qaso == '' || ro == '') {
				alert("Please Fill All Fields");
			} else {
				// AJAX code to submit form.
				$.ajax({
					type: "POST",
					url: "process.php",
					data: dataString,
					cache: false,


					success: function(html) {
						$.ajax({
							type: "POST",
							url: "emailqaso.php",
							data: dataString,
							cache: false,
							success: function(html) {
								console.log(html);
								$.ajax({
									type: "POST",
									url: "emailreporterwithqaso.php",
									data: dataString,
									cache: false,
									success: function(htmltwo) {
										console.log(htmltwo);
										$("#submitting").fadeOut(500);
										$('#successmodel').fadeIn(500);
										setTimeout(function() {
											location.reload();
										}, 7150);

									},
									error: function(htmltwo) {
										console.log(htmltwo);
									}



								});


							},
							error: function(html) {
								console.log(html);
								alert("data processed but email failed");
							}



						});


					},
					error: function(html) {
						console.log(htmltwo);
						$("#submitting").fadeOut(500);
						$('#verybadmodel').fadeIn(500);
					}



				});
			}
			return false;
		}

		function updatemorsdc() {

			setTimeout(function() {
				$('#MORMODALQASO').modal('hide')
			}, 3)
			$('#submitting').show();

			var caafid = document.getElementById("caafid").value;
			var id = document.getElementById("morid").value;



			var dataStringro = 'id=' + id + '&caafid=' + caafid;
			$.ajax({
				type: "POST",
				url: "../dbfiles/sdccaafid.php",
				data: dataStringro,
				cache: false,
				success: function(html) {


					$("#submitting").fadeOut(500);
					$('#successmodel').fadeIn(500);
					setTimeout(function() {
						location.reload();
					}, 7150);




				},
				error: function(html) {
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



			// AJAX code to submit form.


			return false;



		}
	</script>
	<script>
		function sendtoriskowner() {
			setTimeout(function() {
				$('#myMODAL').modal('hide')
			}, 3)

			var id = document.getElementById("IDq").value;

			// Returns successful data submission message when the entered information is stored in database.
			var dataStringro = 'id=' + id;


			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "sendtoriskowner.php",
				data: dataStringro,
				cache: false,


				success: function(html) {



					$('html').scrollTop(0);

					setTimeout(function() {
						$('#submitting').modal('hide')
					}, 3)
					$('#submitting').show();
					$("#submitting").fadeTo(3000, 500).slideUp(500, function() {
						$("#submitting").alert('close');
					});

					/*  setTimeout(function(){$('#exampleModal').modal('hide')}, 6)  */
					$('#successmodel').delay(3200).fadeIn(500);
					$('#successmodel').delay(3000).fadeOut(500);
					/* $("#successmodel").fadeTo(3000, 500).slideUp(500, function()
					{
						$("#successmodel").alert('close'); 
					}); 
					 */
					setTimeout(function() {
						location.reload();
					}, 7150);
					/* setTimeout(function(){$('#exampleModal').modal('hide')}, 3)
					$('#successmodel').show();
					$("#successmodel").fadeTo(3000, 500).slideUp(500, function()
					{
						$("#successmodel").alert('close'); 
					});
					setTimeout(function(){location.reload();}, 4000); */


				},
				error: function(html) {
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



				/* var dataTable = $('#example1').dataTable();
				var oSettings = dataTable.fnSettings();
				dataTable.fnClearTable(this);
				for (var i=0; i<json.aaData.length; i++)
				{
					dataTable.oApi._fnAddData(oSettings, json.aaData[i]);
				}
				oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
				dataTable.fnDraw(); */


			});

			return false;
		}


		function alerts() {
			$.ajax({
				type: "POST",
				url: "alerts.php",

				cache: false,


				success: function(html) {

					console.log("here you go" + html);
					$("#submitting").fadeOut(500);
					$('#successmodel').fadeIn(500);
					/* setTimeout(function(){location.reload();}, 7150); 	  */





				},
				error: function(html) {

				}

			});

		}
	</script>

	<script>
		// NEW HAZARD SUBMITTED 
		$('#exampleModal').on('show.bs.modal', function(event) {
			var button = $(event.relatedTarget)
			// Button that triggered the modal
			var ID = button.data('id')
			var hid = button.data('hid')
			/* 	var hitype = button.data('hitype') 
				var causetype = button.data('causetype')
				var cd = button.data('cd') -->
				var effecttype = button.data('effecttype') 
				var ed = button.data('ed')   
				var usr = button.data('userreported') 
				var dvo = button.data('deventoccurance')  
			*/
			var dr = button.data('dreported')
			var airport = button.data('airport')

			var modal = $(this)
			modal.find('.modal-title').text('More details for Hazard/Incident Report for ID : ' + ID)
			modal.find('.modal-body #ID').val(ID)

			modal.find('.modal-body #hid').val(hid)

			// modal.find('.modal-body #usr').val(usr) 

			modal.find('.modal-body #dr').val(dr)
			modal.find('.modal-body #airport').val(airport)




		})


		$('#COMPMODALWA').on('show.bs.modal', function(event) {
			/* if (event.relatedTarget === undefined) return; */

			if (event.relatedTarget === undefined) return;
			$('#updateupdatecomp').empty();
			var button = $(event.relatedTarget) // Button that triggered the modal
			var ID = button.data('id')
			var yearaudit = button.data('yearaudit')
			var desc = button.data('desc')
			var ml = button.data('ml')
			var tg = button.data('tg')
			var ro = button.data('ro')
			var rt = button.data('rt')
			var airport = button.data('airport')
			var lu = button.data('lu')
			var closedro = button.data('closedro')
			var status = button.data('status')

			var modal = $(this)
			modal.find('.modal-title').text('More details for compliance ID : ' + ID)
			modal.find('.modal-body #compidwa').val(ID)
			modal.find('.modal-body #yearauditwa').val(yearaudit)
			modal.find('.modal-body #descriptionwa').val(desc)
			modal.find('.modal-body #mitigationwa').val(ml)
			modal.find('.modal-body #targetdatewa').val(tg)
			modal.find('.modal-body #riskownerwa').val(ro)
			modal.find('.modal-body #hitypewa').val(rt)
			modal.find('.modal-body #airportwa').val(airport)

			modal.find('.modal-body #lastupdatewa').val(lu)
			modal.find('.modal-body #statuswa').val(status)

			var dateAr = tg.split('-');
			var newDate = dateAr[1] + '/' + dateAr[2] + '/' + dateAr[0];

			modal.find('.modal-body #datepickerfidywa').val(newDate)
			var button = $(event.relatedTarget) // Button that triggered the modal
			var ID = button.data('id')
			/* var ID = button.data('id') */

			var modal = $(this)
			modal.find('.modal-title').text('Update Details for ID : ' + ID)
			modal.find('.modal-body #IDCOMPwa').val(ID)


			// Returns successful data submission message when the entered information is stored in database.
			var dataString = 'id=' + ID;

			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "../dbfiles/processupdatecomp.php",
				data: dataString,
				cache: false,
				dataType: 'json',

				success: function(html) {

					console.log(html);
					/* var title=html[0]; */

					var len = html.length;

					var tr_strone = "<thead> <tr> " +
						"<th>ID</th>" +
						"<th> <nobr > Update Date </nobr> </th > " +
						"<th>Update Content</th>" +
						"<th>Person</th>" +
						"<th>Evidence</th>" +
						"</tr> </thead > <tbody> ";

					$("#updateupdatecompwa").append(tr_strone);
					for (var i = 0; i < len; i++) {
						var compid = html[i].compid;
						var updatedate = html[i].updatedate;
						var updatecontent = html[i].updatecontent;
						var person = html[i].person;
						var link = html[i].link;
						var tr_str = "<tr>" + "<td >" + compid + "</td>" + "<td >" + updatedate + "</td>" + "<td >" + updatecontent + "</td>" + "<td >" + person + "</td>" + "<td >" + link + "</td>" + "</tr>";
						$("#updateupdatecompwa").append(tr_str);
					}
					var tr_strqw = "</tbody><tfoot><tr>" + "<th >ID</th>" + "<th >Update Date</th>" + "<th>Update Content</th>" + "<th>Person</th>" + "<th>Evidence</th>" + "</tr></tfoot><tbody>";
					$("#updateupdatecompwa").append(tr_strqw);
				},
				error: function(html) {
					console.log(html);
				}
			});
		})
	</script>

	<script>
		$(document).ajaxSend(function(event, request, settings) {
			$('#loading-indicator').show();
		});

		$(document).ajaxComplete(function(event, request, settings) {
			$('#loading-indicator').hide();
		});

		function update() {
			setTimeout(function() {
				$('#myMODALTWO').modal('hide')
			}, 3)
			$('#submitting').show();
			var updatecontent = document.getElementById("updatecontent").value;
			var updateuser = document.getElementById("updateuser").value;
			var IDU = document.getElementById("IDu").value;

			if (document.getElementById('status').checked) {
				var status = "CLOSED";
			} else {
				var status = "OPEN";
			}
			var myFileList = document.getElementById('exampleInputFile').files;



			// Grab the first File Object from the FileList
			var myFile = myFileList[0];
			if (!(myFile == null)) {
				// Set some variables containing the three attributes of the file
				var myFileName = myFile.name;
				var myFileSize = myFile.size;
				var myFileType = myFile.type;

				switch (myFileType) {
					case 'image/jpeg':
						var extension = 'jpg';
						break;
					case 'image/png':
						var extension = 'png';
						break;
					case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
						var extension = '.xlsx';
						break;
					case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
						var extension = '.docx';
						break;
					case 'application/pdf':
						var extension = '.pdf';
				}


				// Let's upload the complete file object
				uploadFile(myFile);




				var dataStringro = 'id=' + IDU + '&updatecontent=' + updatecontent + '&updateuser=' + updateuser + '&status=' + status + '&FileName=' + myFileName + '&FileSize=' + myFileSize + '&FileType=' + myFileType + '&extension=' + extension;
			} else {

				var dataStringro = 'id=' + IDU + '&updatecontent=' + updatecontent + '&updateuser=' + updateuser + '&status=' + status + '&FileName=' + myFileName + '&FileSize=' + myFileSize + '&FileType=' + myFileType + '&extension=' + extension;

			}
			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "../dbfiles/insertupdate.php",
				data: dataStringro,
				cache: false,


				success: function(html) {


					$("#submitting").hide();
					$('#successmodel').show();
					setTimeout(function() {
						location.reload();
					}, 7150);

				},
				error: function(html) {
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

			return false;



		}


		function updatecompwa() {

			setTimeout(function() {
				$('#COMPMODALWA').modal('hide')
			}, 3)
			$('#submitting').show();
			var updatecontent = document.getElementById("qasoupdatecontentcompwa").value;
			var updateuser = document.getElementById("qasoupdateusercompwa").value;
			var id = document.getElementById("compidwa").value;
			var targetdate = document.getElementById("datepickerfidywa").value;

			var radio = $('input[name=r3]:radio:checked').val();
			if (radio === "1") {
				var status = "CLOSED";
				var dataStringro = {
					id: id,
					updatecontent: updatecontent,
					updateuser: updateuser,
					status: status,
					targetdate: targetdate
				};
				$.ajax({
					type: "POST",
					url: "../dbfiles/insertupdatecompsdc.php",
					data: dataStringro,
					cache: false,
					success: function(html) {
						$('html,body').animate({
							scrollTop: 0
						}, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function() {
							location.reload();
						}, 1001);
					},
					error: function(html) {
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
			} else {

				var status = "OPEN";
				var dataStringro = {
					id: id,
					updatecontent: updatecontent,
					updateuser: updateuser,
					status: status,
					targetdate: targetdate
				};
				$.ajax({
					type: "POST",
					url: "../dbfiles/insertupdatecompsdc.php",
					data: dataStringro,
					cache: false,
					success: function(html) {
						$('html,body').animate({
							scrollTop: 0
						}, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function() {
							location.reload();
						}, 1001);


					},
					error: function(html) {
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



			// AJAX code to submit form.


			return false;



		}
	</script>

	<script src="../../plugins/fine-upload/jquery.fine-uploader.min.js"></script>

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

			$(".audit_image_galery").fineUploader({
				template: "qq-template-gallery",
				request: {
					endpoint: "../dbfiles/upload.php",
					params: params,
				},
				deleteFile: {
					enabled: true,
					endpoint: "../components/delete_image_file",
				},
				thumbnails: {
					placeholders: {
						waitingPath: "../../plugins/fine-upload/placeholders/waiting-generic.png",
						notAvailablePath: "../../plugins/fine-upload/placeholders/not_available-generic.png",
					},
				},
				validation: {
					allowedExtensions: ["jpg", "jpeg", "png", "csv", "xlsx", "doc", "pdf"],
					sizeLimit: 0,
				},
				showMessage: function(msg) {
					toastr["error"](msg);
				},
				callbacks: {
					onComplete: function(id, name, xhr) {
						if (xhr.success) {
							var uuid = $(".audit_image_galery").fineUploader("getUuid", id);
							$(".audit_image_galery_listed").append(
								'<input type="text" hidden class="listed_file_uuid" name="audit_image_uuid[]" value="' +
								uuid +
								'" /><input type="text" hidden class="listed_file_name" name="audit_image_name[]" value="' +
								xhr.uploadName +
								'" />'
							);
							// $('#audit_image_galery_listed').append('<input type="text" class="listed_file_uuid" name="audit_image_uuid[' + id + ']" value="' + uuid + '" /><input type="text" class="listed_file_name" name="audit_image_name[' + id + ']" value="' + xhr.uploadName + '" />');
						} else {
							toastr["error"](xhr.error);
						}
					},
					onDeleteComplete: function(id, xhr, isError) {
						if (isError == false) {
							$(".audit_image_galery_listed")
								.find('.listed_file_uuid[name="audit_image_uuid[' + id + ']"]')
								.remove();
							$(".audit_image_galery_listed")
								.find('.listed_file_name[name="audit_image_name[' + id + ']"]')
								.remove();
						}
					},
				},
			}); /*end image galery*/
		});
	</script>
</body>

</html>