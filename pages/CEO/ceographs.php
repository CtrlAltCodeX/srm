<?php

session_start();

if (!isset($_SESSION['USER'])) {
	header("Location: ../../");
} else if (!($_SESSION['USER'] == "EXECUTIVE") && !($_SESSION['USER'] == "CEO")) {
	header("Location: ../../");
}
// Echo session variables that were set on previous page
/* echo "Favorite color is " . $_SESSION["USER"] . ".<br>"; */
$pageuser = "CEO";
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





	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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


				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<!-- Notifications: style can be found in dropdown.less -->
						<!-- Tasks: style can be found in dropdown.less -->

						<li><a type="button" class="btn btn-flat" onclick="logout()">Sign out</a></li>
						<!-- User Account: style can be found in dropdown.less -->

						<!-- Control Sidebar Toggle Button -->

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

						<a href="#"><i class="fa fa-dashboard"></i> <span>CEO</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="../../pages/CEO/ceodashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
							<li class="active"><a href="../../pages/CEO/ceographs.php"><i class="fa fa-circle-o"></i> GRAPHS</a></li>
							<li><a href="../../pages/CEO/ceodatatables.php"><i class="fa fa-circle-o"></i> DATA TABLES - OPEN</a></li>
							<li><a href="../../pages/CEO/ceodatatables2.php"><i class="fa fa-circle-o"></i> DATA TABLES - CLOSED</a></li>

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
									<li><a href="../../pages/MNOS/apmnadashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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
									<li><a href="../../pages/MBCW/bcwdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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
									<li><a href="../../pages/HOP/chopdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> GM
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/GM/gmdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MALOCS/malocshboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MANES/manesdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MAO/airsidedashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MARFFS/marffsdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MASS/massdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MC/mcdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MEMS/dashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MFS/mfsdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MPODC/mhrdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/MSRM/msrmdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

								</ul>
							</li>
						</ul>
						<ul class="treeview-menu">
							<li>
								<a href="#"><i class="fa fa-circle-o"></i> OMOIA
									<span class="pull-right-container">
										<i class="fa fa-angle-left pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="../../pages/OMOIA/omoiadashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
									<li><a href="../../pages/SFA/sfadashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
			<img src="../../dist/img/19-1.gif" id="loading-indicator" style="display:none" />
			<section class="content-header">
				<h1>
					<label id="startro"><?PHP echo $pageuser; ?></label> Dashboard

				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

					<li class="active">DATA GRAPHS</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="box box-warning" id="submitting">
							<div class="box-header">
								<h3 class="box-title">Processing</h3>
							</div>
							<div class="box-body">
								Please Wait while your request is processed
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
							Done. Wait for page refresh.
						</div>

						<div class="alert alert-danger alert-dismissible" id="verybadmodel">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<h4><i class="icon fa fa-ban"></i> Failed!</h4>
							Something went wrong. Please contact developer.
						</div>


					</div>
				</div>
				<div class="row">

					<div class="col-md-6">
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">RISK GRAPH DERIVED FROM HAZARD REPORTS</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="riskgraphcontainer">
									<div class="box box-danger" id="submittingfive">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="riskgraph"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<div class="box box-success">

							<div class="box-header with-border">
								<h3 class="box-title">FOD EVENTS DERIVED FROM HAZARD REPORTS AND MOR'S</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="piechartcontainer">
									<div class="box box-danger" id="submittingnine">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="piechartincidentvsrelatedto"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>
					<div class="col-md-6">
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">MANAGER GRAPH BY RISK LEVEL DERIVED FROM HAZARD REPORTS</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="managergrapthreehcontainer">
									<div class="box box-danger" id="submittingeight">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="managergraphtwo"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>


						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">MANAGER GRAPH BY OPEN-CLOSED DERIEVD FROM HAZARD REPORTS</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="managergraphcontainer">
									<div class="box box-danger" id="submittingseven">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="managergraph"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>

					<div class="col-md-12">
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">MANAGER GRAPH BY OPEN-CLOSED DERIEVD FROM COMPLIANCE ISSUES</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="managergraphcompcontainer">
									<div class="box box-danger" id="submittingten">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="managergraphcomp"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="box box-default">
							<div class="box-header with-border">
								<h3 class="box-title">BELOW IS FILTER OPTIONS FOR GRAPH GENERATION FROM HAZARD REPORTS</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<div class="row">
									<div class="col-xs-4">
										<div class="form-group">
											<label>Year From:</label>
											<select class="form-control select2" style="width: 100%;" id="yearfrom">
												<option>Year From</option>

											</select><!-- /.navbar-collapse -->
										</div>
										<div class="form-group">
											<label>Month From:</label>
											<select class="form-control select2" id="monthfrom">

												<option selected="selected">January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>

											</select>
										</div>

									</div><!-- /.col -->




									<div class="col-xs-4">
										<div class="form-group">
											<label>Year to:</label>
											<select class="form-control select2" style="width: 100%; " id="yearto">
												<option>Year To</option>
											</select>
										</div>
										<div class="form-group">
											<label>Month To:</label>
											<select class="form-control select2" id="monthto">

												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option selected="selected">December</option>

											</select><!-- /.navbar-collapse --><!-- /.navbar-collapse -->
										</div>

									</div>




									<div class="col-xs-4">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control select2" style="width: 100%; " id="status">
												<option>OPEN</option>
												<option>CLOSED</option>
												<option>BOTH</option>
											</select><!-- /.navbar-collapse -->
										</div>
										<div class="form-group">
											<label>Risk Level</label>
											<select class="form-control" id="risklevel">
												<option>High Risk</option>
												<option>Medium Risk</option>
												<option>Low Risk</option>
											</select>




										</div>
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.box-body -->

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- AREA CHART -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">RELATED TO HAZARD GRAPH (OPEN/CLOSED/TOTAL)</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="box box-danger" id="submittingone">
									<div class="box-header">
										<h3 class="box-title">Loading</h3>
									</div>
									<div class="box-body">
										Please Wait while your table loads
									</div>
									<!-- /.box-body -->
									<!-- Loading (remove the following to stop the loading)-->
									<div class="overlay">
										<i class="fa fa-refresh fa-spin"></i>
									</div>
									<!-- end loading -->
								</div>
								<div class="chart" id="focuscontainer">
									<canvas id="focusareachart"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

						<!-- DONUT CHART -->
						<div class="box box-danger">
							<div class="box-header with-border">
								<h3 class="box-title">AIRPORT HAZARD GRAPH (OPEN/CLOSED/TOTAL)</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body" id="airportgraphcontainer">
								<div class="box box-danger" id="submittingtwo">
									<div class="box-header">
										<h3 class="box-title">Loading</h3>
									</div>
									<div class="box-body">
										Please Wait while your table loads
									</div>
									<!-- /.box-body -->
									<!-- Loading (remove the following to stop the loading)-->
									<div class="overlay">
										<i class="fa fa-refresh fa-spin"></i>
									</div>
									<!-- end loading -->
								</div>

								<canvas id="airportgraph"></canvas>
							</div>
							<!-- /.box-body -->
						</div>

						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">EFFECT HAZARD GRAPH (OPEN/CLOSED/TOTAL)</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body" id="effectgraphcontainer">
								<div class="box box-danger" id="submittingthree">
									<div class="box-header">
										<h3 class="box-title">Loading</h3>
									</div>
									<div class="box-body">
										Please Wait while your table loads
									</div>
									<!-- /.box-body -->
									<!-- Loading (remove the following to stop the loading)-->
									<div class="overlay">
										<i class="fa fa-refresh fa-spin"></i>
									</div>
									<!-- end loading -->
								</div>

								<canvas id="effecttypegraph"></canvas>
							</div>
							<!-- /.box-body -->
						</div>

						<!-- /.box -->

					</div>
					<!-- /.col (LEFT) -->
					<div class="col-md-12">
						<!-- LINE CHART -->
						<div class="box box-info">
							<div class="box-header with-border">
								<h3 class="box-title">HAZARD MANAGER GRAPH (OPEN/CLOSED/TOTAL)</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="managergraphcontainer2">
									<div class="box box-danger" id="submittingfour">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="managergraph2"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

						<!-- BAR CHART -->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">HAZARD CAUSE GRAPH (OPEN/CLOSED/TOTAL)</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart" id="causetypegraphcontainer">
									<div class="box box-danger" id="submittingsix">
										<div class="box-header">
											<h3 class="box-title">Loading</h3>
										</div>
										<div class="box-body">
											Please Wait while your table loads
										</div>
										<!-- /.box-body -->
										<!-- Loading (remove the following to stop the loading)-->
										<div class="overlay">
											<i class="fa fa-refresh fa-spin"></i>
										</div>
										<!-- end loading -->
									</div>

									<canvas id="causetypegraph"></canvas>
								</div>
							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box -->

					</div>
					<!-- /.col (RIGHT) -->
				</div>


			</section>
			<!-- /.content -->


		</div>
		<!-- /.content-wrapper -->
		<?php
		$footer = "../components/footer.php";

		include($footer);

		?>

		<!-- Control Sidebar -->
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

	<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/pie.js"></script>

	<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>

	<script src="../components/modalqeuries.js"></script>
	<script src="../components/morfunctions.js"></script>
	<script language="javascript" type="text/javascript">
		$(window).load(function() {



			$(".loader").fadeOut("slow");
			$('#successmodel').hide();

			$('#verybadmodel').hide();
			$('#submitting').hide();
			$('#submittingone').hide();
			$('#submittingtwo').hide();
			$('#submittingthree').hide();
			$('#submittingfour').hide();
			$('#submittingfive').hide();
			$('#submittingsix').hide();
			$("#status").prop("disabled", true);
			$("#risklevel").prop("disabled", true);
			makeriskgraphgraph();
			makepiechart();
			makemanagergraphthree();
			makemanagergraphcomp();
			makemanagergraphtwo();


			$.ajax({
				type: "POST",
				url: "yearfrom.php",
				cache: false,
				dataType: 'json',

				success: function(html) {

					console.log(html);
					/* var title=html[0];  */

					var len = html.length;

					for (var i = 0; i < len; i++) {
						var yearfrom = html[i].yearfrom;


						var tr_str = "<option>" + yearfrom + "</option>";

						$("#yearfrom").append(tr_str);

						$("#yearto").append(tr_str);
					}


				},
				error: function(html) {
					console.log(html);

				}
			});

			$("#yearfrom").change(function() {
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;
				if (yearfromajax > yeartoajax) {
					alert("Select Year to value lower or equal than Year from");
				} else if (yearfromajax == "Year From" || yearfromajax == "Year To") {
					alert("Select a Value from Year To and Year from");
				}
			});
			$("#yearto").change(function() {
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;

				if (yearfromajax > yeartoajax) {
					alert("Select Year to value lower or equal than Year from");
				} else if (yearfromajax == "Year From" || yearfromajax == "Year To") {
					alert("Select a Value from Year To and Year from");
				} else {
					$("#status").prop("disabled", false);
					$("#risklevel").prop("disabled", false);
				}
			});

			$("#risklevel").change(function() {

				cleargraph();
				makefocusareagraph();
				makeairportgraph();
				makeeffectgraph();
				makemanagergraph();
				makecausegraph();
				/* makeriskgraphgraph(); */

			});

			$("#status").change(function() {
				cleargraph();
				makefocusareagraph();
				makeairportgraph();
				makeeffectgraph();
				makemanagergraph();
				makecausegraph();
				/* makeriskgraphgraph(); */

			});

			function makefocusareagraph() {
				$('#submittingone').show();
				var status = document.getElementById("status").value;
				var monthf = document.getElementById("monthfrom").value;
				var montht = document.getElementById("monthto").value;
				var risklevel = document.getElementById("risklevel").value;
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;

				switch (monthf) {
					case "January":
						monthfrom = "01";
						break;
					case "February":
						monthfrom = 02;
						break;
					case "March":
						monthfrom = 03;
						break;
					case "April":
						monthfrom = 04;
						break;
					case "May":
						monthfrom = 05;
						break;
					case "June":
						monthfrom = 06;
						break;
					case "July":
						monthfrom = 07;
						break;
					case "August":
						monthfrom = 08;
						break;
					case "September":
						monthfrom = 09;
						break;
					case "October":
						monthfrom = 10;
						break;
					case "November":
						monthfrom = 11;
						break;
					case "December":
						monthfrom = 12;
				}
				switch (montht) {
					case "January":
						monthto = 01;
						break;
					case "February":
						monthto = 02;
						break;
					case "March":
						monthto = 03;
						break;
					case "April":
						monthto = 04;
						break;
					case "May":
						monthto = 5;
						break;
					case "June":
						monthto = 06;
						break;
					case "July":
						monthto = 07;
						break;
					case "August":
						monthto = 08;
						break;
					case "September":
						monthto = 09;
						break;
					case "October":
						monthto = 10;
						break;
					case "November":
						monthto = 11;
						break;
					case "December":
						monthto = 12;
				}
				var dataString = 'yearfromajax=' + yearfromajax + '&yeartoajax=' + yeartoajax + '&monthfrom=' + monthfrom + '&monthto=' + monthto + '&status=' + status + '&risklevel=' + risklevel;
				$.ajax({
					type: "POST",
					data: dataString,
					url: "focusarea.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						$('#submittingone').hide();
						console.log(html);
						switch (status) {
							case "BOTH":
								var focusarea = [];
								var open = [];
								var closed = [];
								var total = [];

								var len = html.length;
								for (var i = 0; i < len; i++) {
									focusarea.push(html[i].HITYPE);
									open.push(html[i].OPEN);
									closed.push(html[i].CLOSED);
									total.push(html[i].TOTAL);
								}
								var chartdata = {
									labels: focusarea,

									datasets: [{
											label: 'OPEN',


											backgroundColor: "rgba(52, 152, 219,1.0)",
											borderColor: "rgba(41, 128, 185,1.0)",
											pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
											pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

											data: open
										},
										{
											label: 'CLOSED',

											backgroundColor: "rgba(230, 126, 34,1.0)",
											borderColor: "rgba(211, 84, 0,1.0)",
											pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
											pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
											data: closed
										},
										{
											label: 'TOTAL',

											backgroundColor: "rgba(52, 73, 94,1.0)",
											borderColor: "rgba(44, 62, 80,1.0)",
											pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
											pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
											data: total
										}
									]
								};
								var ctx = $("#focusareachart");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});


								break;
							case "OPEN":
								var focusarea = [];
								var open = [];

								var len = html.length;

								for (var i = 0; i < len; i++) {
									focusarea.push(html[i].HITYPE);
									open.push(html[i].OPEN);
								}
								var chartdata = {
									labels: focusarea,
									datasets: [{
										label: 'OPEN',


										backgroundColor: "rgba(52, 152, 219,1.0)",
										borderColor: "rgba(41, 128, 185,1.0)",
										pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
										pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

										data: open
									}]
								};
								var ctx = $("#focusareachart");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});

								break;
							case "CLOSED":
								var focusarea = [];
								var closed = [];
								var len = html.length;
								for (var i = 0; i < len; i++) {
									focusarea.push(html[i].HITYPE);
									closed.push(html[i].CLOSED);

								}
								var chartdata = {
									labels: focusarea,

									datasets: [{
										label: 'CLOSED',

										backgroundColor: "rgba(0,100,0, 0.75)",
										borderColor: "rgba(0,100,0, 1)",
										pointHoverBackgroundColor: "rgba(0,100,0, 1)",
										pointHoverBorderColor: "rgba(0,100,0, 1)",

										data: closed
									}]
								};
								var ctx = $("#focusareachart");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});
						}



					},
					error: function(html) {
						console.log(html);

					}
				});
			}

			function makeairportgraph() {
				$('#submittingtwo').show();
				var status = document.getElementById("status").value;
				var monthf = document.getElementById("monthfrom").value;
				var montht = document.getElementById("monthto").value;
				var risklevel = document.getElementById("risklevel").value;
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;

				switch (monthf) {
					case "January":
						monthfrom = "01";
						break;
					case "February":
						monthfrom = 02;
						break;
					case "March":
						monthfrom = 03;
						break;
					case "April":
						monthfrom = 04;
						break;
					case "May":
						monthfrom = 05;
						break;
					case "June":
						monthfrom = 06;
						break;
					case "July":
						monthfrom = 07;
						break;
					case "August":
						monthfrom = 08;
						break;
					case "September":
						monthfrom = 09;
						break;
					case "October":
						monthfrom = 10;
						break;
					case "November":
						monthfrom = 11;
						break;
					case "December":
						monthfrom = 12;
				}
				switch (montht) {
					case "January":
						monthto = 01;
						break;
					case "February":
						monthto = 02;
						break;
					case "March":
						monthto = 03;
						break;
					case "April":
						monthto = 04;
						break;
					case "May":
						monthto = 5;
						break;
					case "June":
						monthto = 06;
						break;
					case "July":
						monthto = 07;
						break;
					case "August":
						monthto = 08;
						break;
					case "September":
						monthto = 09;
						break;
					case "October":
						monthto = 10;
						break;
					case "November":
						monthto = 11;
						break;
					case "December":
						monthto = 12;
				}
				var dataString = 'yearfromajax=' + yearfromajax + '&yeartoajax=' + yeartoajax + '&monthfrom=' + monthfrom + '&monthto=' + monthto + '&status=' + status + '&risklevel=' + risklevel;
				$.ajax({
					type: "POST",
					data: dataString,
					url: "airportgraph.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingtwo').hide();
						switch (status) {
							case "BOTH":
								var airport = [];
								var open = [];
								var closed = [];
								var total = [];

								var len = html.length;
								for (var i = 0; i < len; i++) {
									airport.push(html[i].AIRPORT);
									open.push(html[i].OPEN);
									closed.push(html[i].CLOSED);
									total.push(html[i].TOTAL);
								}
								var chartdata = {
									labels: airport,

									datasets: [{
											label: 'OPEN',


											backgroundColor: "rgba(52, 152, 219,1.0)",
											borderColor: "rgba(41, 128, 185,1.0)",
											pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
											pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

											data: open
										},
										{
											label: 'CLOSED',

											backgroundColor: "rgba(230, 126, 34,1.0)",
											borderColor: "rgba(211, 84, 0,1.0)",
											pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
											pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
											data: closed
										},
										{
											label: 'TOTAL',

											backgroundColor: "rgba(52, 73, 94,1.0)",
											borderColor: "rgba(44, 62, 80,1.0)",
											pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
											pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
											data: total
										}
									]
								};
								var ctx = $("#airportgraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});


								break;
							case "OPEN":
								var airport = [];
								var open = [];

								var len = html.length;

								for (var i = 0; i < len; i++) {
									airport.push(html[i].AIRPORT);
									open.push(html[i].OPEN);
								}
								var chartdata = {
									labels: airport,
									datasets: [{
										label: 'OPEN',


										backgroundColor: "rgba(52, 152, 219,1.0)",
										borderColor: "rgba(41, 128, 185,1.0)",
										pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
										pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

										data: open
									}]
								};
								var ctx = $("#airportgraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});

								break;
							case "CLOSED":
								var airport = [];
								var closed = [];
								var len = html.length;
								for (var i = 0; i < len; i++) {
									airport.push(html[i].AIRPORT);
									closed.push(html[i].CLOSED);

								}
								var chartdata = {
									labels: airport,

									datasets: [{
										label: 'CLOSED',

										backgroundColor: "rgba(0,100,0, 0.75)",
										borderColor: "rgba(0,100,0, 1)",
										pointHoverBackgroundColor: "rgba(0,100,0, 1)",
										pointHoverBorderColor: "rgba(0,100,0, 1)",

										data: closed
									}]
								};
								var ctx = $("#airportgraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});
						}



					},
					error: function(html) {
						console.log(html);

					}
				});
			}

			function makepiechart() {

				$('#submittingnine').show();
				$.ajax({
					type: "POST",
					url: "piechart.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingnine').hide();

						var hightype = [];
						var count = [];
						var rgb = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							hightype.push(html[i].HITYPE);
							count.push(html[i].count);

						}
						var chartdata = {
							labels: hightype,
							pieceLabel: {
								mode: 'percentage'
							},
							datasets: [

								{
									label: 'count',

									backgroundColor: ["#C91F37", "#95A5A6", "#875F9A", "#4D8FAC", "#7A942E", "#2ABB9B"],


									data: count
								}
							]
						};
						var ctx = $("#piechartincidentvsrelatedto");

						var barGraph = new Chart(ctx, {
							type: 'pie',

							data: chartdata
						});









					},
					error: function(html) {
						console.log(html);

					}
				});
			}



			function makeeffectgraph() {
				$('#submittingthree').show();
				var status = document.getElementById("status").value;
				var monthf = document.getElementById("monthfrom").value;
				var montht = document.getElementById("monthto").value;
				var risklevel = document.getElementById("risklevel").value;
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;

				switch (monthf) {
					case "January":
						monthfrom = "01";
						break;
					case "February":
						monthfrom = 02;
						break;
					case "March":
						monthfrom = 03;
						break;
					case "April":
						monthfrom = 04;
						break;
					case "May":
						monthfrom = 05;
						break;
					case "June":
						monthfrom = 06;
						break;
					case "July":
						monthfrom = 07;
						break;
					case "August":
						monthfrom = 08;
						break;
					case "September":
						monthfrom = 09;
						break;
					case "October":
						monthfrom = 10;
						break;
					case "November":
						monthfrom = 11;
						break;
					case "December":
						monthfrom = 12;
				}
				switch (montht) {
					case "January":
						monthto = 01;
						break;
					case "February":
						monthto = 02;
						break;
					case "March":
						monthto = 03;
						break;
					case "April":
						monthto = 04;
						break;
					case "May":
						monthto = 5;
						break;
					case "June":
						monthto = 06;
						break;
					case "July":
						monthto = 07;
						break;
					case "August":
						monthto = 08;
						break;
					case "September":
						monthto = 09;
						break;
					case "October":
						monthto = 10;
						break;
					case "November":
						monthto = 11;
						break;
					case "December":
						monthto = 12;
				}
				var dataString = 'yearfromajax=' + yearfromajax + '&yeartoajax=' + yeartoajax + '&monthfrom=' + monthfrom + '&monthto=' + monthto + '&status=' + status + '&risklevel=' + risklevel;
				$.ajax({
					type: "POST",
					data: dataString,
					url: "effecttypegraph.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingthree').hide();
						switch (status) {
							case "BOTH":
								var effect = [];
								var open = [];
								var closed = [];
								var total = [];

								var len = html.length;
								for (var i = 0; i < len; i++) {
									effect.push(html[i].EFFECTTYPE);
									open.push(html[i].OPEN);
									closed.push(html[i].CLOSED);
									total.push(html[i].TOTAL);
								}
								var chartdata = {
									labels: effect,

									datasets: [{
											label: 'OPEN',


											backgroundColor: "rgba(52, 152, 219,1.0)",
											borderColor: "rgba(41, 128, 185,1.0)",
											pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
											pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

											data: open
										},
										{
											label: 'CLOSED',

											backgroundColor: "rgba(230, 126, 34,1.0)",
											borderColor: "rgba(211, 84, 0,1.0)",
											pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
											pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
											data: closed
										},
										{
											label: 'TOTAL',

											backgroundColor: "rgba(52, 73, 94,1.0)",
											borderColor: "rgba(44, 62, 80,1.0)",
											pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
											pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
											data: total
										}
									]
								};
								var ctx = $("#effecttypegraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});


								break;
							case "OPEN":
								var effect = [];
								var open = [];

								var len = html.length;

								for (var i = 0; i < len; i++) {
									effect.push(html[i].EFFECTTYPE);
									open.push(html[i].OPEN);
								}
								var chartdata = {
									labels: effect,
									datasets: [{
										label: 'OPEN',


										backgroundColor: "rgba(52, 152, 219,1.0)",
										borderColor: "rgba(41, 128, 185,1.0)",
										pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
										pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

										data: open
									}]
								};
								var ctx = $("#effecttypegraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});

								break;
							case "CLOSED":
								var effect = [];
								var closed = [];
								var len = html.length;
								for (var i = 0; i < len; i++) {
									effect.push(html[i].EFFECTTYPE);
									closed.push(html[i].CLOSED);

								}
								var chartdata = {
									labels: effect,

									datasets: [{
										label: 'CLOSED',

										backgroundColor: "rgba(0,100,0, 0.75)",
										borderColor: "rgba(0,100,0, 1)",
										pointHoverBackgroundColor: "rgba(0,100,0, 1)",
										pointHoverBorderColor: "rgba(0,100,0, 1)",

										data: closed
									}]
								};
								var ctx = $("#effecttypegraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});
						}



					},
					error: function(html) {
						console.log(html);

					}
				});
			}

			function makemanagergraph() {
				$('#submittingfour').show();
				var status = document.getElementById("status").value;
				var monthf = document.getElementById("monthfrom").value;
				var montht = document.getElementById("monthto").value;
				var risklevel = document.getElementById("risklevel").value;
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;

				switch (monthf) {
					case "January":
						monthfrom = "01";
						break;
					case "February":
						monthfrom = 02;
						break;
					case "March":
						monthfrom = 03;
						break;
					case "April":
						monthfrom = 04;
						break;
					case "May":
						monthfrom = 05;
						break;
					case "June":
						monthfrom = 06;
						break;
					case "July":
						monthfrom = 07;
						break;
					case "August":
						monthfrom = 08;
						break;
					case "September":
						monthfrom = 09;
						break;
					case "October":
						monthfrom = 10;
						break;
					case "November":
						monthfrom = 11;
						break;
					case "December":
						monthfrom = 12;
				}
				switch (montht) {
					case "January":
						monthto = 01;
						break;
					case "February":
						monthto = 02;
						break;
					case "March":
						monthto = 03;
						break;
					case "April":
						monthto = 04;
						break;
					case "May":
						monthto = 5;
						break;
					case "June":
						monthto = 06;
						break;
					case "July":
						monthto = 07;
						break;
					case "August":
						monthto = 08;
						break;
					case "September":
						monthto = 09;
						break;
					case "October":
						monthto = 10;
						break;
					case "November":
						monthto = 11;
						break;
					case "December":
						monthto = 12;
				}
				var dataString = 'yearfromajax=' + yearfromajax + '&yeartoajax=' + yeartoajax + '&monthfrom=' + monthfrom + '&monthto=' + monthto + '&status=' + status + '&risklevel=' + risklevel;
				$.ajax({
					type: "POST",
					data: dataString,
					url: "managergraph.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingfour').hide();
						switch (status) {
							case "BOTH":
								var riskowner = [];
								var open = [];
								var closed = [];
								var total = [];

								var len = html.length;
								for (var i = 0; i < len; i++) {
									riskowner.push(html[i].RISKOWNER);
									open.push(html[i].OPEN);
									closed.push(html[i].CLOSED);
									total.push(html[i].TOTAL);
								}
								var chartdata = {
									labels: riskowner,

									datasets: [{
											label: 'OPEN',


											backgroundColor: "rgba(52, 152, 219,1.0)",
											borderColor: "rgba(41, 128, 185,1.0)",
											pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
											pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

											data: open
										},
										{
											label: 'CLOSED',

											backgroundColor: "rgba(230, 126, 34,1.0)",
											borderColor: "rgba(211, 84, 0,1.0)",
											pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
											pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
											data: closed
										},
										{
											label: 'TOTAL',

											backgroundColor: "rgba(52, 73, 94,1.0)",
											borderColor: "rgba(44, 62, 80,1.0)",
											pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
											pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
											data: total
										}
									]
								};
								var ctx = $("#managergraph2");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});


								break;
							case "OPEN":
								var riskowner = [];
								var open = [];

								var len = html.length;

								for (var i = 0; i < len; i++) {
									riskowner.push(html[i].RISKOWNER);
									open.push(html[i].OPEN);
								}
								var chartdata = {
									labels: riskowner,
									datasets: [{
										label: 'OPEN',


										backgroundColor: "rgba(52, 152, 219,1.0)",
										borderColor: "rgba(41, 128, 185,1.0)",
										pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
										pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

										data: open
									}]
								};
								var ctx = $("#managergraph2");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});

								break;
							case "CLOSED":
								var riskowner = [];
								var closed = [];
								var len = html.length;
								for (var i = 0; i < len; i++) {
									riskowner.push(html[i].RISKOWNER);
									closed.push(html[i].CLOSED);

								}
								var chartdata = {
									labels: riskowner,

									datasets: [{
										label: 'CLOSED',

										backgroundColor: "rgba(0,100,0, 0.75)",
										borderColor: "rgba(0,100,0, 1)",
										pointHoverBackgroundColor: "rgba(0,100,0, 1)",
										pointHoverBorderColor: "rgba(0,100,0, 1)",

										data: closed
									}]
								};
								var ctx = $("#managergraph2");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});
						}



					},
					error: function(html) {
						console.log(html);

					}
				});
			}
			/* FOURTH GRAPH ON RIGHT */
			function makemanagergraphthree() {
				$('#submittingseven').show();
				$.ajax({
					type: "POST",

					url: "managergraph.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingseven').hide();

						var riskowner = [];
						var open = [];
						var closed = [];
						var total = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							riskowner.push(html[i].RISKOWNER);
							open.push(html[i].OPEN);
							closed.push(html[i].CLOSED);
							total.push(html[i].TOTAL);
						}
						var chartdata = {
							labels: riskowner,

							datasets: [{
									label: 'OPEN',


									backgroundColor: "rgba(52, 152, 219,1.0)",
									borderColor: "rgba(41, 128, 185,1.0)",
									pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
									pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

									data: open
								},
								{
									label: 'CLOSED',

									backgroundColor: "rgba(230, 126, 34,1.0)",
									borderColor: "rgba(211, 84, 0,1.0)",
									pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
									pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
									data: closed
								},
								{
									label: 'TOTAL',

									backgroundColor: "rgba(52, 73, 94,1.0)",
									borderColor: "rgba(44, 62, 80,1.0)",
									pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
									pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
									data: total
								}
							]
						};
						var ctx = $("#managergraph");

						var barGraph = new Chart(ctx, {
							type: 'bar',

							data: chartdata
						});








					},
					error: function(html) {
						console.log(html);

					}
				});
			}

			/* SECOND GRAPH ON RIGHT */
			function makemanagergraphtwo() {
				$('#submittingeight').show();
				$.ajax({
					type: "POST",
					url: "managergraphtwo.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingeight').hide();

						var riskowner = [];
						var hrisk = [];
						var mrisk = [];
						var lrisk = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							riskowner.push(html[i].RISKOWNER);
							hrisk.push(html[i].HRISK);
							mrisk.push(html[i].MRISK);
							lrisk.push(html[i].LRISK);
						}
						var chartdata = {
							labels: riskowner,

							datasets: [{
									label: 'High Risk',


									backgroundColor: "rgba(231, 76, 60,1.0)",
									borderColor: "rgba(192, 57, 43,1.0)",
									pointHoverBackgroundColor: "rgba(192, 57, 43,1.0)",
									pointHoverBorderColor: "rgba(231, 76, 60,1.0)",

									data: hrisk
								},
								{
									label: 'Medium Risk',

									backgroundColor: "rgba(241, 196, 15,1.0)",
									borderColor: "rgba(243, 156, 18,1.0)",
									pointHoverBackgroundColor: "rgba(243, 156, 18,1.0)",
									pointHoverBorderColor: "rgba(241, 196, 15,1.0)",
									data: mrisk
								},
								{
									label: 'Low Risk',

									backgroundColor: "rgba(46, 204, 113,1.0)",
									borderColor: "rgba(39, 174, 96,1.0)",
									pointHoverBackgroundColor: "rgba(39, 174, 96,1.0)",
									pointHoverBorderColor: "rgba(46, 204, 113,1.0)",
									data: lrisk
								}
							]
						};
						var ctx = $("#managergraphtwo");

						var barGraph = new Chart(ctx, {
							type: 'bar',

							data: chartdata
						});








					},
					error: function(html) {
						console.log(html);

					}
				});
			}


			function makecausegraph() {
				$('#submittingfive').show();
				var status = document.getElementById("status").value;
				var monthf = document.getElementById("monthfrom").value;
				var montht = document.getElementById("monthto").value;
				var risklevel = document.getElementById("risklevel").value;
				var yearfromajax = document.getElementById("yearfrom").value;
				var yeartoajax = document.getElementById("yearto").value;

				switch (monthf) {
					case "January":
						monthfrom = "01";
						break;
					case "February":
						monthfrom = 02;
						break;
					case "March":
						monthfrom = 03;
						break;
					case "April":
						monthfrom = 04;
						break;
					case "May":
						monthfrom = 05;
						break;
					case "June":
						monthfrom = 06;
						break;
					case "July":
						monthfrom = 07;
						break;
					case "August":
						monthfrom = 08;
						break;
					case "September":
						monthfrom = 09;
						break;
					case "October":
						monthfrom = 10;
						break;
					case "November":
						monthfrom = 11;
						break;
					case "December":
						monthfrom = 12;
				}
				switch (montht) {
					case "January":
						monthto = 01;
						break;
					case "February":
						monthto = 02;
						break;
					case "March":
						monthto = 03;
						break;
					case "April":
						monthto = 04;
						break;
					case "May":
						monthto = 5;
						break;
					case "June":
						monthto = 06;
						break;
					case "July":
						monthto = 07;
						break;
					case "August":
						monthto = 08;
						break;
					case "September":
						monthto = 09;
						break;
					case "October":
						monthto = 10;
						break;
					case "November":
						monthto = 11;
						break;
					case "December":
						monthto = 12;
				}
				var dataString = 'yearfromajax=' + yearfromajax + '&yeartoajax=' + yeartoajax + '&monthfrom=' + monthfrom + '&monthto=' + monthto + '&status=' + status + '&risklevel=' + risklevel;
				$.ajax({
					type: "POST",
					data: dataString,
					url: "causegraph.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingfive').hide();
						switch (status) {
							case "BOTH":
								var causetype = [];
								var open = [];
								var closed = [];
								var total = [];

								var len = html.length;
								for (var i = 0; i < len; i++) {
									causetype.push(html[i].CAUSETYPE);
									open.push(html[i].OPEN);
									closed.push(html[i].CLOSED);
									total.push(html[i].TOTAL);
								}
								var chartdata = {
									labels: causetype,

									datasets: [{
											label: 'OPEN',


											backgroundColor: "rgba(52, 152, 219,1.0)",
											borderColor: "rgba(41, 128, 185,1.0)",
											pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
											pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

											data: open
										},
										{
											label: 'CLOSED',

											backgroundColor: "rgba(230, 126, 34,1.0)",
											borderColor: "rgba(211, 84, 0,1.0)",
											pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
											pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
											data: closed
										},
										{
											label: 'TOTAL',

											backgroundColor: "rgba(52, 73, 94,1.0)",
											borderColor: "rgba(44, 62, 80,1.0)",
											pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
											pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
											data: total
										}
									]
								};
								var ctx = $("#causetypegraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});


								break;
							case "OPEN":
								var causetype = [];
								var open = [];

								var len = html.length;

								for (var i = 0; i < len; i++) {
									causetype.push(html[i].CAUSETYPE);
									open.push(html[i].OPEN);
								}
								var chartdata = {
									labels: causetype,
									datasets: [{
										label: 'OPEN',


										backgroundColor: "rgba(52, 152, 219,1.0)",
										borderColor: "rgba(41, 128, 185,1.0)",
										pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
										pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

										data: open
									}]
								};
								var ctx = $("#causetypegraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});

								break;
							case "CLOSED":
								var causetype = [];
								var closed = [];
								var len = html.length;
								for (var i = 0; i < len; i++) {
									causetype.push(html[i].CAUSETYPE);
									closed.push(html[i].CLOSED);

								}
								var chartdata = {
									labels: causetype,

									datasets: [{
										label: 'CLOSED',

										backgroundColor: "rgba(0,100,0, 0.75)",
										borderColor: "rgba(0,100,0, 1)",
										pointHoverBackgroundColor: "rgba(0,100,0, 1)",
										pointHoverBorderColor: "rgba(0,100,0, 1)",

										data: closed
									}]
								};
								var ctx = $("#causetypegraph");

								var barGraph = new Chart(ctx, {
									type: 'bar',

									data: chartdata
								});
						}



					},
					error: function(html) {
						console.log(html);

					}
				});
			}
			/* FIRST GRAPH */
			function makeriskgraphgraph() {
				$('#submittingsix').show();
				$.ajax({
					type: "POST",

					url: "riskgraph.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingsix').hide();

						var risklevel = [];
						var open = [];
						var closed = [];
						var total = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							risklevel.push(html[i].RISKLEVEL);
							open.push(html[i].OPEN);
							closed.push(html[i].CLOSED);
							total.push(html[i].TOTAL);
						}
						var chartdata = {
							labels: risklevel,

							datasets: [{
									label: 'OPEN',


									backgroundColor: "rgba(52, 152, 219,1.0)",
									borderColor: "rgba(41, 128, 185,1.0)",
									pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
									pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

									data: open
								},
								{
									label: 'CLOSED',

									backgroundColor: "rgba(230, 126, 34,1.0)",
									borderColor: "rgba(211, 84, 0,1.0)",
									pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
									pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
									data: closed
								},
								{
									label: 'TOTAL',

									backgroundColor: "rgba(52, 73, 94,1.0)",
									borderColor: "rgba(44, 62, 80,1.0)",
									pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
									pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
									data: total
								}
							]
						};
						var ctx = $("#riskgraph");

						var barGraph = new Chart(ctx, {
							type: 'bar',

							data: chartdata
						});








					},
					error: function(html) {
						console.log(html);

					}
				});

			}

			function makemanagergraphcomp() {
				$('#submittingten').show();
				$.ajax({
					type: "POST",

					url: "managergraphcomp.php",
					cache: false,
					dataType: 'json',


					success: function(html) {
						console.log(html);
						$('#submittingten').hide();

						var riskowner = [];
						var open = [];
						var closed = [];
						var total = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							riskowner.push(html[i].RISKOWNER);
							open.push(html[i].OPEN);
							closed.push(html[i].CLOSED);
							total.push(html[i].TOTAL);
						}
						var chartdata = {
							labels: riskowner,

							datasets: [{
									label: 'OPEN',


									backgroundColor: "rgba(52, 152, 219,1.0)",
									borderColor: "rgba(41, 128, 185,1.0)",
									pointHoverBackgroundColor: "rgba(41, 128, 185,1.0)",
									pointHoverBorderColor: "rgba(52, 152, 219,1.0)",

									data: open
								},
								{
									label: 'CLOSED',

									backgroundColor: "rgba(230, 126, 34,1.0)",
									borderColor: "rgba(211, 84, 0,1.0)",
									pointHoverBackgroundColor: "rgba(211, 84, 0,1.0)",
									pointHoverBorderColor: "rgba(230, 126, 34,1.0)",
									data: closed
								},
								{
									label: 'TOTAL',

									backgroundColor: "rgba(52, 73, 94,1.0)",
									borderColor: "rgba(44, 62, 80,1.0)",
									pointHoverBackgroundColor: "rgba(44, 62, 80,1.0)",
									pointHoverBorderColor: "rgba(52, 73, 94,1.0)",
									data: total
								}
							]
						};
						var ctx = $("#managergraphcomp");

						var barGraph = new Chart(ctx, {
							type: 'bar',

							data: chartdata
						});








					},
					error: function(html) {
						console.log(html);

					}
				});
			}


			function cleargraph() {
				$('#focusareachart').remove();
				$('#focuscontainer').append('<canvas id="focusareachart" ></canvas>');
				$('#airportgraph').remove();
				$('#airportgraphcontainer').append('<canvas id="airportgraph" ></canvas>');
				$('#effecttypegraph').remove();
				$('#effectgraphcontainer').append('<canvas id="effecttypegraph" ></canvas>');
				$('#managergraph2').remove();
				$('#managergraphcontainer2').append('<canvas id="managergraph2" ></canvas>');
				$('#causetypegraph').remove();
				$('#causetypegraphcontainer').append('<canvas id="causetypegraph" ></canvas>');
				/* $('#riskgraph').remove();$('#riskgraphcontainer').append('<canvas id="riskgraph" ></canvas>');	
				 */


			}


		});
	</script>
	<script>
		$('#datepicker').datepicker({
			autoclose: true
		});

		$("#example1").DataTable();
		$("#example2").DataTable();
		$("#example3").DataTable();
	</script>


	<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="../../plugins/chartjs/Chart.min.js"></script>
	<!-- FastClick -->
	<script src="../../plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="../../dist/js/app.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../../dist/js/demo.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>







</body>

</html>