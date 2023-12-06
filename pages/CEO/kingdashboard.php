<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SRM PORTAL | PUBLIC</title>
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
	<style>
		body {
			background-color: #D2D7D3;
		}
	</style>




	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>


	<div class="wrapper">


		<!-- Content Wrapper. Contains page content -->
		<div>
			<!-- Content Header (Page header) -->
			<div class="loader"></div>
			<img src="../../dist/img/19-1.gif" id="loading-indicator" style="display:none" />


			<!-- Main content -->
			<section class="content">
				<div class="row">





					<div class="container">

						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
								<li data-target="#myCarousel" data-slide-to="5"></li>
								<li data-target="#myCarousel" data-slide-to="6"></li>
								<li data-target="#myCarousel" data-slide-to="7"></li>
								<li data-target="#myCarousel" data-slide-to="8"></li>
								<li data-target="#myCarousel" data-slide-to="9"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">

								<div class="item active">
									<div>

										<div class="box-header with-border">
											<h3 class="box-title"><?php echo date("Y"); ?> FOD Indicator derived from MOR and Hazard reports</h3>

											<div class="box-tools pull-right">
												<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
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

								<div class="item">
									<div>
										<div class="box-header with-border">
											<h3 class="box-title"><?php echo date("Y"); ?> Nadi AD MOR Related To:</h3>

											<div class="box-tools pull-right">
												<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
												</button>
												<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
											</div>
										</div>
										<div class="box-body">
											<div class="chart" id="piechartcontaineraa">
												<div class="box box-danger" id="submittingnineaa">
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

												<canvas id="nadiadmor"></canvas>
											</div>
										</div>
										<!-- /.box-body -->
									</div>

								</div>

								<div class="item">
									<div>
										<div class="box-header with-border">
											<h3 class="box-title"><?php echo date("Y"); ?> Nausori AD MOR Related To:</h3>

											<div class="box-tools pull-right">
												<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
												</button>
												<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
											</div>
										</div>
										<div class="box-body">
											<div class="chart" id="piechartcontaineraa">
												<div class="box box-danger" id="submittingnineaau">
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

												<canvas id="nausoriadmor"></canvas>
											</div>
										</div>
										<!-- /.box-body -->
									</div>

								</div>


								<div class="item">
									<div>
										<div class="box-header with-border">
											<h3 class="box-title">Risk Graph derived from Hazard reports</h3>

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

								</div>

								<div class="item">
									<div>
										<div class="box-header with-border">
											<h3 class="box-title">Manager Graph by Risk Level derived from hazard reports</h3>

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

								</div>


								<div class="item">
									<div>
										<div class="box-header with-border">
											<h3 class="box-title">Manager Graph by Open - Close derived from hazard reports</h3>

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

								<div class="item">
									<div>
										<div class="box-header with-border">
											<h3 class="box-title">Manager Graph by Open - Close derived from compliance issues</h3>

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

								<div class="item">
									<div class="box">
										<div class="box-header with-border">
											<h3 class="box-title">COMPLIANCE </h3>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th colspan="2" bgcolor="#1abc9c">Certificate</th>
															<th colspan="2" bgcolor="#1abc9c">Current Month</th>
															<th colspan="2" bgcolor="#1abc9c">1 Month Ago</th>
															<th colspan="2" bgcolor="#1abc9c">2 Months Ago</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<th></th>
															<th></th>
															<th>OPEN</th>
															<th>CLOSED</th>
															<th>OPEN</th>
															<th>CLOSED</th>
															<th>OPEN</th>
															<th>CLOSED</th>

														</tr>
														<tr>
															<th bgcolor="#3498db">AMO</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2a = "SELECT count(*)FROM compliance  WHERE CERT='AMO' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2a) or die('Error querying database.');
															$result2a = mysqli_query($db, $query2a);
															$row2a = mysqli_fetch_row($result2a);
															$num2a = $row2a[0];



															$query = "SELECT count(*)FROM compliance  WHERE CERT='AMO' AND STATUS='OPEN'";
															mysqli_query($db, $query) or die('Error querying database.');
															$result = mysqli_query($db, $query);
															$row = mysqli_fetch_row($result);
															$num = $row[0];
															echo "<td bgcolor='#3498db' >" . $num . "</td>";

															$query2 = "SELECT count(*)FROM compliance  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2) or die('Error querying database.');
															$result2 = mysqli_query($db, $query2);
															$row2 = mysqli_fetch_row($result2);
															$num2 = $row2[0];
															echo "<td bgcolor='#3498db'>" . $num2 . "</td>";



															$int = (int)$num;
															$float = (float)$num;
															$int2 = (int)$num2;
															$float2 = (float)$num2;
															$float2a = (float)$num2a;
															$total = ($float + $float2) - $float2a;

															echo "<td bgcolor='#3498db'>" . $total . "</td>";




															include '../../dbconfig.php';
															$query4 = "SELECT count(*)FROM compliance  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4) or die('Error querying database.');
															$result4 = mysqli_query($db, $query4);
															$row4 = mysqli_fetch_row($result4);
															$num4 = $row4[0];
															echo "<td bgcolor='#3498db'>" . $num4 . "</td>";

															$int3 = (int)$num4;
															$float3 = (float)$num4;

															$totalwa = $total + $float3;

															echo "<td bgcolor='#3498db'>" . $totalwa . "</td>";


															$query6 = "SELECT count(*)FROM compliance  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6) or die('Error querying database.');
															$result6 = mysqli_query($db, $query6);
															$row6 = mysqli_fetch_row($result6);
															$num6 = $row[0];
															echo "<td bgcolor='#3498db'>" . $num6 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th>ATSP</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2ab = "SELECT count(*)FROM compliance  WHERE CERT='ATSP' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2ab) or die('Error querying database.');
															$result2ab = mysqli_query($db, $query2ab);
															$row2ab = mysqli_fetch_row($result2ab);
															$num2ab = $row2ab[0];

															$query1 = "SELECT count(*)FROM compliance  WHERE CERT='ATSP' AND STATUS='OPEN' ";
															mysqli_query($db, $query1) or die('Error querying database.');
															$result1 = mysqli_query($db, $query1);
															$row1 = mysqli_fetch_row($result1);
															$num1 = $row1[0];
															echo "<td>" . $num1 . "</td>";

															$query22 = "SELECT count(*)FROM compliance  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22) or die('Error querying database.');
															$result22 = mysqli_query($db, $query22);
															$row22 = mysqli_fetch_row($result22);
															$num22 = $row22[0];
															echo "<td>" . $num22 . "</td>";


															$int1 = (int)$num1;
															$float1 = (float)$num1;
															$int22 = (int)$num22;
															$float22 = (float)$num22;
															$float2ab = (float)$num2ab;
															$total1 = ($float1 + $float22) - $float2ab;

															echo "<td>" . $total1 . "</td>";


															$query44 = "SELECT count(*)FROM compliance  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44) or die('Error querying database.');
															$result44 = mysqli_query($db, $query44);
															$row44 = mysqli_fetch_row($result44);
															$num44 = $row44[0];
															echo "<td>" . $num44 . "</td>";




															$int33 = (int)$num44;
															$float33 = (float)$num44;

															$totalwa1 = $total1 + $float33;

															echo "<td>" . $totalwa1 . "</td>";





															$query66 = "SELECT count(*)FROM compliance  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66) or die('Error querying database.');
															$result66 = mysqli_query($db, $query66);
															$row66 = mysqli_fetch_row($result66);
															$num66 = $row66[0];
															echo "<td>" . $num66 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor='#3498db'>AIS</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2abc = "SELECT count(*)FROM compliance  WHERE CERT='ATSP' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abc) or die('Error querying database.');
															$result2abc = mysqli_query($db, $query2abc);
															$row2abc = mysqli_fetch_row($result2abc);
															$num2abc = $row2abc[0];

															$query11 = "SELECT count(*)FROM compliance  WHERE CERT='AIS' AND STATUS='OPEN' ";
															mysqli_query($db, $query11) or die('Error querying database.');
															$result11 = mysqli_query($db, $query11);
															$row11 = mysqli_fetch_row($result11);
															$num11 = $row11[0];
															echo "<td bgcolor='#3498db'>" . $num11 . "</td>";

															$query222 = "SELECT count(*)FROM compliance  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222) or die('Error querying database.');
															$result222 = mysqli_query($db, $query222);
															$row222 = mysqli_fetch_row($result222);
															$num222 = $row222[0];
															echo "<td bgcolor='#3498db'>" . $num222 . "</td>";


															$int11 = (int)$num11;
															$float11 = (float)$num11;
															$int222 = (int)$num222;
															$float222 = (float)$num222;
															$float2abc = (float)$num2abc;
															$total11 = ($float11 + $float222) - $float2ab;

															echo "<td bgcolor='#3498db'>" . $total11 . "</td>";


															$query444 = "SELECT count(*)FROM compliance  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444) or die('Error querying database.');
															$result444 = mysqli_query($db, $query444);
															$row444 = mysqli_fetch_row($result444);
															$num444 = $row444[0];
															echo "<td bgcolor='#3498db'>" . $num444 . "</td>";




															$int333 = (int)$num444;
															$float333 = (float)$num444;

															$totalwa111 = $total11 + $float333;

															echo "<td bgcolor='#3498db'>" . $totalwa111 . "</td>";





															$query666 = "SELECT count(*)FROM compliance  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666) or die('Error querying database.');
															$result666 = mysqli_query($db, $query666);
															$row666 = mysqli_fetch_row($result666);
															$num666 = $row666[0];
															echo "<td bgcolor='#3498db'>" . $num666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th>ATI</th>
															<th></th>
															<?php

															include '../../dbconfig.php';
															$query2abcd = "SELECT count(*)FROM compliance  WHERE CERT='ATI' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcd) or die('Error querying database.');
															$result2abcd = mysqli_query($db, $query2abcd);
															$row2abcd = mysqli_fetch_row($result2abcd);
															$num2abcd = $row2abcd[0];

															$query111 = "SELECT count(*)FROM compliance  WHERE CERT='ATI' AND STATUS='OPEN'";
															mysqli_query($db, $query111) or die('Error querying database.');
															$result111 = mysqli_query($db, $query111);
															$row111 = mysqli_fetch_row($result111);
															$num111 = $row111[0];
															echo "<td>" . $num111 . "</td>";

															$query2222 = "SELECT count(*)FROM compliance  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222) or die('Error querying database.');
															$result2222 = mysqli_query($db, $query2222);
															$row2222 = mysqli_fetch_row($result2222);
															$num2222 = $row2222[0];
															echo "<td>" . $num2222 . "</td>";


															$int111 = (int)$num111;
															$float111 = (float)$num111;
															$int2222 = (int)$num2222;
															$float2222 = (float)$num2222;
															$float2abcd = (float)$num2abcd;
															$total111 = ($float111 + $float2222) - $float2abcd;

															echo "<td>" . $total111 . "</td>";


															$query4444 = "SELECT count(*)FROM compliance  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444) or die('Error querying database.');
															$result4444 = mysqli_query($db, $query4444);
															$row4444 = mysqli_fetch_row($result4444);
															$num4444 = $row4444[0];
															echo "<td>" . $num4444 . "</td>";




															$int3333 = (int)$num4444;
															$float3333 = (float)$num4444;

															$totalwa1111 = $total111 + $float3333;

															echo "<td>" . $totalwa1111 . "</td>";





															$query6666 = "SELECT count(*)FROM compliance  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666) or die('Error querying database.');
															$result6666 = mysqli_query($db, $query6666);
															$row6666 = mysqli_fetch_row($result6666);
															$num6666 = $row6666[0];
															echo "<td>" . $num6666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">NADI AD</th>
															<th bgcolor='#95a5a6'>DEPARTMENT</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MARFFS</th>
															<?php

															include '../../dbconfig.php';

															$query2abcde = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcde) or die('Error querying database.');
															$result2abcde = mysqli_query($db, $query2abcde);
															$row2abcde = mysqli_fetch_row($result2abcde);
															$num2abcde = $row2abcde[0];

															$query1111 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN'";
															mysqli_query($db, $query1111) or die('Error querying database.');
															$result1111 = mysqli_query($db, $query1111);
															$row1111 = mysqli_fetch_row($result1111);
															$num1111 = $row1111[0];
															echo "<td bgcolor='#e67e22'>" . $num1111 . "</td>";

															$query22222 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222) or die('Error querying database.');
															$result22222 = mysqli_query($db, $query22222);
															$row22222 = mysqli_fetch_row($result22222);
															$num22222 = $row22222[0];
															echo "<td bgcolor='#e67e22'>" . $num22222 . "</td>";


															$int1111 = (int)$num1111;
															$float1111 = (float)$num1111;
															$int22222 = (int)$num22222;
															$float22222 = (float)$num22222;
															$float2abcde = (float)$num2abcde;
															$total1111 = ($float1111 + $float22222) - $float2abcde;

															echo "<td bgcolor='#e67e22'>" . $total1111 . "</td>";


															$query44444 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444) or die('Error querying database.');
															$result44444 = mysqli_query($db, $query44444);
															$row44444 = mysqli_fetch_row($result44444);
															$num44444 = $row44444[0];
															echo "<td bgcolor='#e67e22'>" . $num44444 . "</td>";




															$int33333 = (int)$num44444;
															$float33333 = (float)$num44444;

															$totalwa11111 = $total1111 + $float33333;

															echo "<td bgcolor='#e67e22'>" . $totalwa11111 . "</td>";





															$query66666 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666) or die('Error querying database.');
															$result66666 = mysqli_query($db, $query66666);
															$row66666 = mysqli_fetch_row($result66666);
															$num66666 = $row66666[0];
															echo "<td bgcolor='#e67e22'>" . $num66666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MEMS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdef = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdef) or die('Error querying database.');
															$result2abcdef = mysqli_query($db, $query2abcdef);
															$row2abcdef = mysqli_fetch_row($result2abcdef);
															$num2abcdef = $row2abcdef[0];

															$query11111 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='OPEN'";
															mysqli_query($db, $query11111) or die('Error querying database.');
															$result11111 = mysqli_query($db, $query11111);
															$row11111 = mysqli_fetch_row($result11111);
															$num11111 = $row11111[0];
															echo "<td>" . $num11111 . "</td>";

															$query222222 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222222) or die('Error querying database.');
															$result222222 = mysqli_query($db, $query222222);
															$row222222 = mysqli_fetch_row($result222222);
															$num222222 = $row222222[0];
															echo "<td>" . $num222222 . "</td>";


															$int11111 = (int)$num11111;
															$float11111 = (float)$num11111;
															$int222222 = (int)$num222222;
															$float222222 = (float)$num222222;
															$float2abcdef = (float)$num2abcdef;
															$total11111 = ($float11111 + $float222222) - $float2abcdef;

															echo "<td>" . $total11111 . "</td>";


															$query444444 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444444) or die('Error querying database.');
															$result444444 = mysqli_query($db, $query444444);
															$row444444 = mysqli_fetch_row($result444444);
															$num444444 = $row444444[0];
															echo "<td>" . $num444444 . "</td>";




															$int333333 = (int)$num444444;
															$float333333 = (float)$num444444;

															$totalwa111111 = $total11111 + $float333333;

															echo "<td>" . $totalwa111111 . "</td>";





															$query666666 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666666) or die('Error querying database.');
															$result666666 = mysqli_query($db, $query666666);
															$row666666 = mysqli_fetch_row($result666666);
															$num666666 = $row666666[0];
															echo "<td>" . $num666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MAO</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefg = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefg) or die('Error querying database.');
															$result2abcdefg = mysqli_query($db, $query2abcdefg);
															$row2abcdefg = mysqli_fetch_row($result2abcdefg);
															$num2abcdefg = $row2abcdefg[0];

															$query111111 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='OPEN'";
															mysqli_query($db, $query111111) or die('Error querying database.');
															$result111111 = mysqli_query($db, $query111111);
															$row111111 = mysqli_fetch_row($result111111);
															$num111111 = $row111111[0];
															echo "<td bgcolor='#e67e22'>" . $num111111 . "</td>";

															$query2222222 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222222) or die('Error querying database.');
															$result2222222 = mysqli_query($db, $query2222222);
															$row2222222 = mysqli_fetch_row($result2222222);
															$num2222222 = $row2222222[0];
															echo "<td bgcolor='#e67e22'>" . $num2222222 . "</td>";


															$int111111 = (int)$num111111;
															$float111111 = (float)$num111111;
															$int2222222 = (int)$num2222222;
															$float2222222 = (float)$num2222222;
															$float2abcdefg = (float)$num2abcdefg;
															$total111111 = ($float111111 + $float2222222) - $float2abcdefg;

															echo "<td bgcolor='#e67e22'>" . $total111111 . "</td>";


															$query4444444 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444444) or die('Error querying database.');
															$result4444444 = mysqli_query($db, $query4444444);
															$row4444444 = mysqli_fetch_row($result4444444);
															$num4444444 = $row4444444[0];
															echo "<td bgcolor='#e67e22'>" . $num4444444 . "</td>";




															$int3333333 = (int)$num4444444;
															$float3333333 = (float)$num4444444;

															$totalwa1111111 = $total111111 + $float3333333;

															echo "<td bgcolor='#e67e22'>" . $totalwa1111111 . "</td>";





															$query6666666 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666666) or die('Error querying database.');
															$result6666666 = mysqli_query($db, $query6666666);
															$row6666666 = mysqli_fetch_row($result6666666);
															$num6666666 = $row6666666[0];
															echo "<td bgcolor='#e67e22'>" . $num6666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MBCW</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefgh = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefgh) or die('Error querying database.');
															$result2abcdefgh = mysqli_query($db, $query2abcdefgh);
															$row2abcdefgh = mysqli_fetch_row($result2abcdefgh);
															$num2abcdefgh = $row2abcdefgh[0];

															$query1111111 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query1111111) or die('Error querying database.');
															$result1111111 = mysqli_query($db, $query1111111);
															$row1111111 = mysqli_fetch_row($result1111111);
															$num1111111 = $row1111111[0];
															echo "<td>" . $num1111111 . "</td>";

															$query22222222 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222222) or die('Error querying database.');
															$result22222222 = mysqli_query($db, $query22222222);
															$row22222222 = mysqli_fetch_row($result22222222);
															$num22222222 = $row22222222[0];
															echo "<td>" . $num22222222 . "</td>";


															$int1111111 = (int)$num1111111;
															$float1111111 = (float)$num1111111;
															$int22222222 = (int)$num22222222;
															$float22222222 = (float)$num22222222;
															$float2abcdefgh = (float)$num2abcdefgh;
															$total1111111 = ($float1111111 + $float22222222) - $float2abcdefgh;

															echo "<td>" . $total1111111 . "</td>";


															$query44444444 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444444) or die('Error querying database.');
															$result44444444 = mysqli_query($db, $query44444444);
															$row44444444 = mysqli_fetch_row($result44444444);
															$num44444444 = $row44444444[0];
															echo "<td>" . $num44444444 . "</td>";




															$int33333333 = (int)$num44444444;
															$float33333333 = (float)$num44444444;

															$totalwa11111111 = $total1111111 + $float33333333;

															echo "<td>" . $totalwa11111111 . "</td>";





															$query66666666 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666666) or die('Error querying database.');
															$result66666666 = mysqli_query($db, $query66666666);
															$row66666666 = mysqli_fetch_row($result66666666);
															$num66666666 = $row66666666[0];
															echo "<td>" . $num66666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MSRM</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghi = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghi) or die('Error querying database.');
															$result2abcdefghi = mysqli_query($db, $query2abcdefghi);
															$row2abcdefghi = mysqli_fetch_row($result2abcdefghi);
															$num2abcdefghi = $row2abcdefghi[0];

															$query11111111 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='OPEN'";
															mysqli_query($db, $query11111111) or die('Error querying database.');
															$result11111111 = mysqli_query($db, $query11111111);
															$row11111111 = mysqli_fetch_row($result11111111);
															$num11111111 = $row11111111[0];
															echo "<td bgcolor='#e67e22'>" . $num11111111 . "</td>";

															$query222222222 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222222222) or die('Error querying database.');
															$result222222222 = mysqli_query($db, $query222222222);
															$row222222222 = mysqli_fetch_row($result222222222);
															$num222222222 = $row222222222[0];
															echo "<td bgcolor='#e67e22'>" . $num222222222 . "</td>";


															$int11111111 = (int)$num11111111;
															$float11111111 = (float)$num11111111;
															$int222222222 = (int)$num222222222;
															$float222222222 = (float)$num222222222;
															$float2abcdefghi = (float)$num2abcdefghi;
															$total11111111 = ($float11111111 + $float222222222) - $float2abcdefghi;

															echo "<td bgcolor='#e67e22'>" . $total11111111 . "</td>";


															$query444444444 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444444444) or die('Error querying database.');
															$result444444444 = mysqli_query($db, $query444444444);
															$row444444444 = mysqli_fetch_row($result444444444);
															$num444444444 = $row444444444[0];
															echo "<td bgcolor='#e67e22'>" . $num444444444 . "</td>";




															$int333333333 = (int)$num444444444;
															$float333333333 = (float)$num444444444;

															$totalwa111111111 = $total11111111 + $float333333333;

															echo "<td bgcolor='#e67e22'>" . $totalwa111111111 . "</td>";





															$query666666666 = "SELECT count(*)FROM compliance  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666666666) or die('Error querying database.');
															$result666666666 = mysqli_query($db, $query666666666);
															$row666666666 = mysqli_fetch_row($result666666666);
															$num666666666 = $row666666666[0];
															echo "<td bgcolor='#e67e22'>" . $num666666666 . "</td>";
															mysqli_close($db);

															?>
														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e74c3c">TOTAL</th>
															<?php

															$currentmonthtotalopennadi = $num1111 + $num11111 + $num111111 + $num1111111 + $num11111111;
															echo "<td bgcolor='#e74c3c'>" . $currentmonthtotalopennadi . "</td>";

															$currentmonthclosednadi = $num222222222 + $num22222222 + $num2222222 + $num222222 + $num22222;
															echo "<td bgcolor='#e74c3c'>" . $currentmonthclosednadi . "</td>";

															$onemonthopennadi = $total1111 + $total11111 + $total111111 + $total1111111 + $total11111111;
															echo "<td bgcolor='#e74c3c'>" . $onemonthopennadi . "</td>";

															$onemonthclosednadi = $num44444 + $num444444 + $num4444444 + $num44444444 + $num444444444;
															echo "<td bgcolor='#e74c3c'>" . $onemonthclosednadi . "</td>";

															$twomonthopennadi = $totalwa111111111 + $totalwa11111111 + $totalwa1111111 + $totalwa111111 + $totalwa11111;
															echo "<td bgcolor='#e74c3c'>" . $twomonthopennadi . "</td>";
															$twomonthclosednadi = $num66666 + $num666666 + $num6666666 + $num66666666 + $num666666666;
															echo "<td bgcolor='#e74c3c'>" . $twomonthclosednadi . "</td>";


															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">NAUSORI AD</th>
															<th bgcolor='#95a5a6'>DEPARTMENT</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MNOS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijapmna = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijapmna) or die('Error querying database.');
															$result2abcdefghijapmna = mysqli_query($db, $query2abcdefghijapmna);
															$row2abcdefghijapmna = mysqli_fetch_row($result2abcdefghijapmna);
															$num2abcdefghijapmna = $row2abcdefghijapmna[0];

															$query11112apmna = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='OPEN'";
															mysqli_query($db, $query11112apmna) or die('Error querying database.');
															$result11112apmna = mysqli_query($db, $query11112apmna);
															$row11112apmna = mysqli_fetch_row($result11112apmna);
															$num11112apmna = $row11112apmna[0];
															echo "<td bgcolor='#e67e22'>" . $num11112apmna . "</td>";

															$query222223apmna = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223apmna) or die('Error querying database.');
															$result222223apmna = mysqli_query($db, $query222223apmna);
															$row222223apmna = mysqli_fetch_row($result222223apmna);
															$num222223apmna = $row222223apmna[0];
															echo "<td bgcolor='#e67e22'>" . $num222223apmna . "</td>";


															$int11112apmna = (int)$num11112apmna;
															$float11112apmna = (float)$num11112apmna;
															$int222223apmna = (int)$num222223apmna;
															$float222223apmna = (float)$num222223apmna;
															$float2abcdefghijapmna = (float)$num2abcdefghijapmna;
															$total11112apmna = ($float11112apmna + $float222223apmna) - $float2abcdefghijapmna;

															echo "<td bgcolor='#e67e22'>" . $total11112apmna . "</td>";


															$query444445apmna = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445apmna) or die('Error querying database.');
															$result444445apmna = mysqli_query($db, $query444445apmna);
															$row444445apmna = mysqli_fetch_row($result444445apmna);
															$num444445apmna = $row444445apmna[0];
															echo "<td bgcolor='#e67e22'>" . $num444445apmna . "</td>";




															$int333334apmna = (int)$num444445apmna;
															$float333334apmna = (float)$num444445apmna;

															$totalwa111112apmna = $total11112apmna + $float333334apmna;

															echo "<td bgcolor='#e67e22'>" . $totalwa111112apmna . "</td>";





															$query666667apmna = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667apmna) or die('Error querying database.');
															$result666667apmna = mysqli_query($db, $query666667apmna);
															$row666667apmna = mysqli_fetch_row($result666667apmna);
															$num666667apmna = $row666667apmna[0];
															echo "<td bgcolor='#e67e22'>" . $num666667apmna . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MARFFS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghij = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghij) or die('Error querying database.');
															$result2abcdefghij = mysqli_query($db, $query2abcdefghij);
															$row2abcdefghij = mysqli_fetch_row($result2abcdefghij);
															$num2abcdefghij = $row2abcdefghij[0];

															$query11112 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN'";
															mysqli_query($db, $query11112) or die('Error querying database.');
															$result11112 = mysqli_query($db, $query11112);
															$row11112 = mysqli_fetch_row($result11112);
															$num11112 = $row11112[0];
															echo "<td >" . $num11112 . "</td>";

															$query222223 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223) or die('Error querying database.');
															$result222223 = mysqli_query($db, $query222223);
															$row222223 = mysqli_fetch_row($result222223);
															$num222223 = $row222223[0];
															echo "<td >" . $num222223 . "</td>";


															$int11112 = (int)$num11112;
															$float11112 = (float)$num11112;
															$int222223 = (int)$num222223;
															$float222223 = (float)$num222223;
															$float2abcdefghij = (float)$num2abcdefghij;
															$total11112 = ($float11112 + $float222223) - $float2abcdefghij;

															echo "<td >" . $total11112 . "</td>";


															$query444445 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445) or die('Error querying database.');
															$result444445 = mysqli_query($db, $query444445);
															$row444445 = mysqli_fetch_row($result444445);
															$num444445 = $row444445[0];
															echo "<td >" . $num444445 . "</td>";




															$int333334 = (int)$num444445;
															$float333334 = (float)$num444445;

															$totalwa111112 = $total11112 + $float333334;

															echo "<td>" . $totalwa111112 . "</td>";





															$query666667 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667) or die('Error querying database.');
															$result666667 = mysqli_query($db, $query666667);
															$row666667 = mysqli_fetch_row($result666667);
															$num666667 = $row666667[0];
															echo "<td >" . $num666667 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MEMS</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijk = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijk) or die('Error querying database.');
															$result2abcdefghijk = mysqli_query($db, $query2abcdefghijk);
															$row2abcdefghijk = mysqli_fetch_row($result2abcdefghijk);
															$num2abcdefghijk = $row2abcdefghijk[0];

															$query111123 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='OPEN'";
															mysqli_query($db, $query111123) or die('Error querying database.');
															$result111123 = mysqli_query($db, $query111123);
															$row111123 = mysqli_fetch_row($result111123);
															$num111123 = $row111123[0];
															echo "<td bgcolor='#e67e22'>" . $num111123 . "</td>";

															$query2222234 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234) or die('Error querying database.');
															$result2222234 = mysqli_query($db, $query2222234);
															$row2222234 = mysqli_fetch_row($result2222234);
															$num2222234 = $row2222234[0];
															echo "<td bgcolor='#e67e22'>" . $num2222234 . "</td>";


															$int111123 = (int)$num111123;
															$float111123 = (float)$num11112;
															$int2222234 = (int)$num2222234;
															$float2222234 = (float)$num2222234;
															$float2abcdefghijk = (float)$num2abcdefghijk;
															$total111123 = ($float111123 + $float2222234) - $float2abcdefghijk;

															echo "<td bgcolor='#e67e22'>" . $total111123 . "</td>";


															$query4444456 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456) or die('Error querying database.');
															$result4444456 = mysqli_query($db, $query4444456);
															$row4444456 = mysqli_fetch_row($result4444456);
															$num4444456 = $row4444456[0];
															echo "<td bgcolor='#e67e22'>" . $num4444456 . "</td>";




															$int3333345 = (int)$num4444456;
															$float3333345 = (float)$num4444456;

															$totalwa1111123 = $total111123 + $float3333345;

															echo "<td bgcolor='#e67e22'>" . $totalwa1111123 . "</td>";





															$query6666678 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678) or die('Error querying database.');
															$result6666678 = mysqli_query($db, $query6666678);
															$row6666678 = mysqli_fetch_row($result6666678);
															$num6666678 = $row6666678[0];
															echo "<td bgcolor='#e67e22'>" . $num6666678 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MAO</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijkl = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijkl) or die('Error querying database.');
															$result2abcdefghijkl = mysqli_query($db, $query2abcdefghijkl);
															$row2abcdefghijkl = mysqli_fetch_row($result2abcdefghijkl);
															$num2abcdefghijkl = $row2abcdefghijkl[0];

															$query1111234 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234) or die('Error querying database.');
															$result1111234 = mysqli_query($db, $query1111234);
															$row1111234 = mysqli_fetch_row($result1111234);
															$num1111234 = $row1111234[0];
															echo "<td >" . $num1111234 . "</td>";

															$query22222345 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345) or die('Error querying database.');
															$result22222345 = mysqli_query($db, $query22222345);
															$row22222345 = mysqli_fetch_row($result22222345);
															$num22222345 = $row22222345[0];
															echo "<td >" . $num22222345 . "</td>";


															$int1111234 = (int)$num1111234;
															$float1111234 = (float)$num111123;
															$int22222345 = (int)$num22222345;
															$float22222345 = (float)$num22222345;
															$float2abcdefghijkl = (float)$num2abcdefghijkl;
															$total1111234 = ($float1111234 + $float22222345) - $float2abcdefghijkl;

															echo "<td >" . $total1111234 . "</td>";


															$query44444567 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567) or die('Error querying database.');
															$result44444567 = mysqli_query($db, $query44444567);
															$row44444567 = mysqli_fetch_row($result44444567);
															$num44444567 = $row44444567[0];
															echo "<td >" . $num44444567 . "</td>";




															$int33333456 = (int)$num44444567;
															$float33333456 = (float)$num44444567;

															$totalwa11111234 = $total1111234 + $float33333456;

															echo "<td >" . $totalwa11111234 . "</td>";





															$query66666789 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789) or die('Error querying database.');
															$result66666789 = mysqli_query($db, $query66666789);
															$row66666789 = mysqli_fetch_row($result66666789);
															$num66666789 = $row66666789[0];
															echo "<td >" . $num66666789 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MBCW</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklm = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklm) or die('Error querying database.');
															$result2abcdefghijklm = mysqli_query($db, $query2abcdefghijklm);
															$row2abcdefghijklm = mysqli_fetch_row($result2abcdefghijklm);
															$num2abcdefghijklm = $row2abcdefghijklm[0];

															$query11112345 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345) or die('Error querying database.');
															$result11112345 = mysqli_query($db, $query11112345);
															$row11112345 = mysqli_fetch_row($result11112345);
															$num11112345 = $row11112345[0];
															echo "<td bgcolor='#e67e22'>" . $num11112345 . "</td>";

															$query222223456 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456) or die('Error querying database.');
															$result222223456 = mysqli_query($db, $query222223456);
															$row222223456 = mysqli_fetch_row($result222223456);
															$num222223456 = $row222223456[0];
															echo "<td bgcolor='#e67e22'>" . $num222223456 . "</td>";


															$int11112345 = (int)$num11112345;
															$float11112345 = (float)$num1111234;
															$int222223456 = (int)$num222223456;
															$float222223456 = (float)$num222223456;
															$float2abcdefghijklm = (float)$num2abcdefghijklm;
															$total11112345 = ($float11112345 + $float222223456) - $float2abcdefghijklm;

															echo "<td bgcolor='#e67e22'>" . $total11112345 . "</td>";


															$query444445678 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678) or die('Error querying database.');
															$result444445678 = mysqli_query($db, $query444445678);
															$row444445678 = mysqli_fetch_row($result444445678);
															$num444445678 = $row444445678[0];
															echo "<td bgcolor='#e67e22'>" . $num444445678 . "</td>";




															$int333334567 = (int)$num444445678;
															$float333334567 = (float)$num444445678;

															$totalwa111112345 = $total11112345 + $float333334567;

															echo "<td bgcolor='#e67e22'>" . $totalwa111112345 . "</td>";





															$query666667891 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891) or die('Error querying database.');
															$result666667891 = mysqli_query($db, $query666667891);
															$row666667891 = mysqli_fetch_row($result666667891);
															$num666667891 = $row666667891[0];
															echo "<td bgcolor='#e67e22'>" . $num666667891 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MSRM</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmn = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmn) or die('Error querying database.');
															$result2abcdefghijklmn = mysqli_query($db, $query2abcdefghijklmn);
															$row2abcdefghijklmn = mysqli_fetch_row($result2abcdefghijklmn);
															$num2abcdefghijklmn = $row2abcdefghijklmn[0];

															$query111123456 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456) or die('Error querying database.');
															$result111123456 = mysqli_query($db, $query111123456);
															$row111123456 = mysqli_fetch_row($result111123456);
															$num111123456 = $row111123456[0];
															echo "<td >" . $num111123456 . "</td>";

															$query2222234567 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567) or die('Error querying database.');
															$result2222234567 = mysqli_query($db, $query2222234567);
															$row2222234567 = mysqli_fetch_row($result2222234567);
															$num2222234567 = $row2222234567[0];
															echo "<td >" . $num2222234567 . "</td>";


															$int111123456 = (int)$num111123456;
															$float111123456 = (float)$num11112345;
															$int2222234567 = (int)$num2222234567;
															$float2222234567 = (float)$num2222234567;
															$float2abcdefghijklmn = (float)$num2abcdefghijklmn;
															$total111123456 = ($float111123456 + $float2222234567) - $float2abcdefghijklmn;

															echo "<td >" . $total111123456 . "</td>";


															$query4444456789 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789) or die('Error querying database.');
															$result4444456789 = mysqli_query($db, $query4444456789);
															$row4444456789 = mysqli_fetch_row($result4444456789);
															$num4444456789 = $row4444456789[0];
															echo "<td>" . $num4444456789 . "</td>";




															$int3333345678 = (int)$num4444456789;
															$float3333345678 = (float)$num4444456789;

															$totalwa1111123456 = $total111123456 + $float3333345678;

															echo "<td>" . $totalwa1111123456 . "</td>";





															$query6666678912 = "SELECT count(*)FROM compliance  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912) or die('Error querying database.');
															$result6666678912 = mysqli_query($db, $query6666678912);
															$row6666678912 = mysqli_fetch_row($result6666678912);
															$num6666678912 = $row6666678912[0];
															echo "<td >" . $num6666678912 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e74c3c">TOTAL</th>
															<?php

															$currentmonthtotalopennau = $num11112apmna + $num11112 + $num111123 + $num1111234 + $num11112345 + $num111123456;
															echo "<td bgcolor='#e74c3c'>" . $currentmonthtotalopennau . "</td>";

															$currentmonthclosednau = $num222223apmna + $num222223 + $num2222234 + $num22222345 + $num222223456 + $num2222234567;
															echo "<td bgcolor='#e74c3c'>" . $currentmonthclosednau . "</td>";

															$onemonthopennau = $total11112apmna + $total11112 + $total111123 + $total1111234 + $total11112345 + $total111123456;
															echo "<td bgcolor='#e74c3c'>" . $onemonthopennau . "</td>";

															$onemonthclosednau = $num444445apmna + $num444445 + $num4444456 + $num44444567 + $num444445678 + $num4444456789;
															echo "<td bgcolor='#e74c3c'>" . $onemonthclosednau . "</td>";

															$twomonthopennau = $totalwa111112apmna + $totalwa111112 + $totalwa1111123 + $totalwa11111234 + $totalwa111112345 + $totalwa1111123456;
															echo "<td bgcolor='#e74c3c'>" . $twomonthopennau . "</td>";
															$twomonthclosednau = $num666667apmna + $num666667 + $num6666678 + $num66666789 + $num666667891 + $num6666678912;
															echo "<td bgcolor='#e74c3c'>" . $twomonthclosednau . "</td>";


															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">OUTER STATIONS</th>
															<th bgcolor='#95a5a6'>AIRPORTS</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">LABASA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmno = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmno) or die('Error querying database.');
															$result2abcdefghijklmno = mysqli_query($db, $query2abcdefghijklmno);
															$row2abcdefghijklmno = mysqli_fetch_row($result2abcdefghijklmno);
															$num2abcdefghijklmno = $row2abcdefghijklmno[0];

															$query1111234567 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567) or die('Error querying database.');
															$result1111234567 = mysqli_query($db, $query1111234567);
															$row1111234567 = mysqli_fetch_row($result1111234567);
															$num1111234567 = $row1111234567[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567 . "</td>";

															$query22222345678 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678) or die('Error querying database.');
															$result22222345678 = mysqli_query($db, $query22222345678);
															$row22222345678 = mysqli_fetch_row($result22222345678);
															$num22222345678 = $row22222345678[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678 . "</td>";


															$int1111234567 = (int)$num1111234567;
															$float1111234567 = (float)$num111123456;
															$int22222345678 = (int)$num22222345678;
															$float22222345678 = (float)$num22222345678;
															$float2abcdefghijklmno = (float)$num2abcdefghijklmno;
															$total1111234567 = ($float1111234567 + $float22222345678) - $float2abcdefghijklmno;

															echo "<td bgcolor='#27ae60'>" . $total1111234567 . "</td>";


															$query44444567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891) or die('Error querying database.');
															$result44444567891 = mysqli_query($db, $query44444567891);
															$row44444567891 = mysqli_fetch_row($result44444567891);
															$num44444567891 = $row44444567891[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891 . "</td>";




															$int33333456789 = (int)$num44444567891;
															$float33333456789 = (float)$num44444567891;

															$totalwa11111234567 = $total1111234567 + $float33333456789;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567 . "</td>";





															$query66666789123 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123) or die('Error querying database.');
															$result66666789123 = mysqli_query($db, $query66666789123);
															$row66666789123 = mysqli_fetch_row($result66666789123);
															$num66666789123 = $row66666789123[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>SAVUSAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnop = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnop) or die('Error querying database.');
															$result2abcdefghijklmnop = mysqli_query($db, $query2abcdefghijklmnop);
															$row2abcdefghijklmnop = mysqli_fetch_row($result2abcdefghijklmnop);
															$num2abcdefghijklmnop = $row2abcdefghijklmnop[0];

															$query11112345678 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678) or die('Error querying database.');
															$result11112345678 = mysqli_query($db, $query11112345678);
															$row11112345678 = mysqli_fetch_row($result11112345678);
															$num11112345678 = $row11112345678[0];
															echo "<td>" . $num11112345678 . "</td>";

															$query222223456789 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789) or die('Error querying database.');
															$result222223456789 = mysqli_query($db, $query222223456789);
															$row222223456789 = mysqli_fetch_row($result222223456789);
															$num222223456789 = $row222223456789[0];
															echo "<td>" . $num222223456789 . "</td>";


															$int11112345678 = (int)$num11112345678;
															$float11112345678 = (float)$num11112345678;
															$int222223456789 = (int)$num222223456789;
															$float222223456789 = (float)$num222223456789;
															$float2abcdefghijklmnop = (float)$num2abcdefghijklmnop;
															$total11112345678 = ($float11112345678 + $float222223456789) - $float2abcdefghijklmnop;

															echo "<td>" . $total11112345678 . "</td>";


															$query444445678912 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912) or die('Error querying database.');
															$result444445678912 = mysqli_query($db, $query444445678912);
															$row444445678912 = mysqli_fetch_row($result444445678912);
															$num444445678912 = $row444445678912[0];
															echo "<td>" . $num444445678912 . "</td>";




															$int333334567891 = (int)$num444445678912;
															$float333334567891 = (float)$num444445678912;

															$totalwa111112345678 = $total11112345678 + $float333334567891;

															echo "<td>" . $totalwa111112345678 . "</td>";





															$query666667891234 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234) or die('Error querying database.');
															$result666667891234 = mysqli_query($db, $query666667891234);
															$row666667891234 = mysqli_fetch_row($result666667891234);
															$num666667891234 = $row666667891234[0];
															echo "<td>" . $num666667891234 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">MATEI</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopq = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopq) or die('Error querying database.');
															$result2abcdefghijklmnopq = mysqli_query($db, $query2abcdefghijklmnopq);
															$row2abcdefghijklmnopq = mysqli_fetch_row($result2abcdefghijklmnopq);
															$num2abcdefghijklmnopq = $row2abcdefghijklmnopq[0];

															$query111123456789 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789) or die('Error querying database.');
															$result111123456789 = mysqli_query($db, $query111123456789);
															$row111123456789 = mysqli_fetch_row($result111123456789);
															$num111123456789 = $row111123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num111123456789 . "</td>";

															$query2222234567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891) or die('Error querying database.');
															$result2222234567891 = mysqli_query($db, $query2222234567891);
															$row2222234567891 = mysqli_fetch_row($result2222234567891);
															$num2222234567891 = $row2222234567891[0];
															echo "<td bgcolor='#27ae60'>" . $num2222234567891 . "</td>";


															$int111123456789 = (int)$num111123456789;
															$float111123456789 = (float)$num111123456789;
															$int2222234567891 = (int)$num2222234567891;
															$float2222234567891 = (float)$num2222234567891;
															$float2abcdefghijklmnopq = (float)$num2abcdefghijklmnopq;
															$total111123456789 = ($float111123456789 + $float2222234567891) - $float2abcdefghijklmnopq;

															echo "<td bgcolor='#27ae60'>" . $total111123456789 . "</td>";


															$query4444456789123 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123) or die('Error querying database.');
															$result4444456789123 = mysqli_query($db, $query4444456789123);
															$row4444456789123 = mysqli_fetch_row($result4444456789123);
															$num4444456789123 = $row4444456789123[0];
															echo "<td bgcolor='#27ae60'>" . $num4444456789123 . "</td>";




															$int3333345678912 = (int)$num4444456789123;
															$float3333345678912 = (float)$num4444456789123;

															$totalwa1111123456789 = $total111123456789 + $float3333345678912;

															echo "<td bgcolor='#27ae60'>" . $totalwa1111123456789 . "</td>";





															$query6666678912345 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345) or die('Error querying database.');
															$result6666678912345 = mysqli_query($db, $query6666678912345);
															$row6666678912345 = mysqli_fetch_row($result6666678912345);
															$num6666678912345 = $row6666678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num6666678912345 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>ROTUMA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqr = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqr) or die('Error querying database.');
															$result2abcdefghijklmnopqr = mysqli_query($db, $query2abcdefghijklmnopqr);
															$row2abcdefghijklmnopqr = mysqli_fetch_row($result2abcdefghijklmnopqr);
															$num2abcdefghijklmnopqr = $row2abcdefghijklmnopqr[0];

															$query1111234567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891) or die('Error querying database.');
															$result1111234567891 = mysqli_query($db, $query1111234567891);
															$row1111234567891 = mysqli_fetch_row($result1111234567891);
															$num1111234567891 = $row1111234567891[0];
															echo "<td>" . $num1111234567891 . "</td>";

															$query22222345678912 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912) or die('Error querying database.');
															$result22222345678912 = mysqli_query($db, $query22222345678912);
															$row22222345678912 = mysqli_fetch_row($result22222345678912);
															$num22222345678912 = $row22222345678912[0];
															echo "<td>" . $num22222345678912 . "</td>";


															$int1111234567891 = (int)$num1111234567891;
															$float1111234567891 = (float)$num1111234567891;
															$int22222345678912 = (int)$num22222345678912;
															$float22222345678912 = (float)$num22222345678912;
															$float2abcdefghijklmnopqr = (float)$num2abcdefghijklmnopqr;
															$total1111234567891 = ($float1111234567891 + $float22222345678912) - $float2abcdefghijklmnopqr;

															echo "<td>" . $total1111234567891 . "</td>";


															$query44444567891234 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234) or die('Error querying database.');
															$result44444567891234 = mysqli_query($db, $query44444567891234);
															$row44444567891234 = mysqli_fetch_row($result44444567891234);
															$num44444567891234 = $row44444567891234[0];
															echo "<td>" . $num44444567891234 . "</td>";




															$int33333456789123 = (int)$num44444567891234;
															$float33333456789123 = (float)$num44444567891234;

															$totalwa11111234567891 = $total1111234567891 + $float33333456789123;

															echo "<td>" . $totalwa11111234567891 . "</td>";





															$query66666789123456 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456) or die('Error querying database.');
															$result66666789123456 = mysqli_query($db, $query66666789123456);
															$row66666789123456 = mysqli_fetch_row($result66666789123456);
															$num66666789123456 = $row66666789123456[0];
															echo "<td>" . $num66666789123456 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">KORO</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijklmnopqrs = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrs) or die('Error querying database.');
															$result2abcdefghijklmnopqrs = mysqli_query($db, $query2abcdefghijklmnopqrs);
															$row2abcdefghijklmnopqrs = mysqli_fetch_row($result2abcdefghijklmnopqrs);
															$num2abcdefghijklmnopqrs = $row2abcdefghijklmnopqrs[0];

															$query11112345678912 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912) or die('Error querying database.');
															$result11112345678912 = mysqli_query($db, $query11112345678912);
															$row11112345678912 = mysqli_fetch_row($result11112345678912);
															$num11112345678912 = $row11112345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num11112345678912 . "</td>";

															$query222223456789123 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123) or die('Error querying database.');
															$result222223456789123 = mysqli_query($db, $query222223456789123);
															$row222223456789123 = mysqli_fetch_row($result222223456789123);
															$num222223456789123 = $row222223456789123[0];
															echo "<td bgcolor='#27ae60'>" . $num222223456789123 . "</td>";


															$int11112345678912 = (int)$num11112345678912;
															$float11112345678912 = (float)$num11112345678912;
															$int222223456789123 = (int)$num222223456789123;
															$float222223456789123 = (float)$num222223456789123;
															$float2abcdefghijklmnopqrs = (float)$num2abcdefghijklmnopqrs;
															$total11112345678912 = ($float11112345678912 + $float222223456789123) - $float2abcdefghijklmnopqrs;

															echo "<td bgcolor='#27ae60'>" . $total11112345678912 . "</td>";


															$query444445678912345 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345) or die('Error querying database.');
															$result444445678912345 = mysqli_query($db, $query444445678912345);
															$row444445678912345 = mysqli_fetch_row($result444445678912345);
															$num444445678912345 = $row444445678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num444445678912345 . "</td>";




															$int333334567891234 = (int)$num444445678912345;
															$float333334567891234 = (float)$num444445678912345;

															$totalwa111112345678912 = $total11112345678912 + $float333334567891234;

															echo "<td bgcolor='#27ae60'>" . $totalwa111112345678912 . "</td>";





															$query666667891234567 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567) or die('Error querying database.');
															$result666667891234567 = mysqli_query($db, $query666667891234567);
															$row666667891234567 = mysqli_fetch_row($result666667891234567);
															$num666667891234567 = $row666667891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num666667891234567 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>GAU</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijklmnopqrst = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrst) or die('Error querying database.');
															$result2abcdefghijklmnopqrst = mysqli_query($db, $query2abcdefghijklmnopqrst);
															$row2abcdefghijklmnopqrst = mysqli_fetch_row($result2abcdefghijklmnopqrst);
															$num2abcdefghijklmnopqrst = $row2abcdefghijklmnopqrst[0];

															$query111123456789123 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123) or die('Error querying database.');
															$result111123456789123 = mysqli_query($db, $query111123456789123);
															$row111123456789123 = mysqli_fetch_row($result111123456789123);
															$num111123456789123 = $row111123456789123[0];
															echo "<td>" . $num111123456789123 . "</td>";

															$query2222234567891234 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234) or die('Error querying database.');
															$result2222234567891234 = mysqli_query($db, $query2222234567891234);
															$row2222234567891234 = mysqli_fetch_row($result2222234567891234);
															$num2222234567891234 = $row2222234567891234[0];
															echo "<td>" . $num2222234567891234 . "</td>";


															$int111123456789123 = (int)$num111123456789123;
															$float111123456789123 = (float)$num111123456789123;
															$int2222234567891234 = (int)$num2222234567891234;
															$float2222234567891234 = (float)$num2222234567891234;
															$float2abcdefghijklmnopqrst = (float)$num2abcdefghijklmnopqrst;
															$total111123456789123 = ($float111123456789123 + $float2222234567891234) - $float2abcdefghijklmnopqrst;

															echo "<td>" . $total111123456789123 . "</td>";


															$query4444456789123456 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456) or die('Error querying database.');
															$result4444456789123456 = mysqli_query($db, $query4444456789123456);
															$row4444456789123456 = mysqli_fetch_row($result4444456789123456);
															$num4444456789123456 = $row4444456789123456[0];
															echo "<td>" . $num4444456789123456 . "</td>";




															$int3333345678912345 = (int)$num4444456789123456;
															$float3333345678912345 = (float)$num4444456789123456;

															$totalwa1111123456789123 = $total111123456789123 + $float3333345678912345;

															echo "<td>" . $totalwa1111123456789123 . "</td>";





															$query6666678912345678 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678) or die('Error querying database.');
															$result6666678912345678 = mysqli_query($db, $query6666678912345678);
															$row6666678912345678 = mysqli_fetch_row($result6666678912345678);
															$num6666678912345678 = $row6666678912345678[0];
															echo "<td>" . $num6666678912345678 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">BURETA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstu = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstu) or die('Error querying database.');
															$result2abcdefghijklmnopqrstu = mysqli_query($db, $query2abcdefghijklmnopqrstu);
															$row2abcdefghijklmnopqrstu = mysqli_fetch_row($result2abcdefghijklmnopqrstu);
															$num2abcdefghijklmnopqrstu = $row2abcdefghijklmnopqrstu[0];

															$query1111234567891234 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234) or die('Error querying database.');
															$result1111234567891234 = mysqli_query($db, $query1111234567891234);
															$row1111234567891234 = mysqli_fetch_row($result1111234567891234);
															$num1111234567891234 = $row1111234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567891234 . "</td>";

															$query22222345678912345 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345) or die('Error querying database.');
															$result22222345678912345 = mysqli_query($db, $query22222345678912345);
															$row22222345678912345 = mysqli_fetch_row($result22222345678912345);
															$num22222345678912345 = $row22222345678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678912345 . "</td>";


															$int1111234567891234 = (int)$num1111234567891234;
															$float1111234567891234 = (float)$num1111234567891234;
															$int22222345678912345 = (int)$num22222345678912345;
															$float22222345678912345 = (float)$num22222345678912345;
															$float2abcdefghijklmnopqrstu = (float)$num2abcdefghijklmnopqrstu;
															$total1111234567891234 = ($float1111234567891234 + $float22222345678912345) - $float2abcdefghijklmnopqrstu;

															echo "<td bgcolor='#27ae60'>" . $total1111234567891234 . "</td>";


															$query44444567891234567 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567) or die('Error querying database.');
															$result44444567891234567 = mysqli_query($db, $query44444567891234567);
															$row44444567891234567 = mysqli_fetch_row($result44444567891234567);
															$num44444567891234567 = $row44444567891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891234567 . "</td>";




															$int33333456789123456 = (int)$num44444567891234567;
															$float33333456789123456 = (float)$num44444567891234567;

															$totalwa11111234567891234 = $total1111234567891234 + $float33333456789123456;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567891234 . "</td>";





															$query66666789123456789 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789) or die('Error querying database.');
															$result66666789123456789 = mysqli_query($db, $query66666789123456789);
															$row66666789123456789 = mysqli_fetch_row($result66666789123456789);
															$num66666789123456789 = $row66666789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123456789 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>VANUABALAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuv = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuv) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuv = mysqli_query($db, $query2abcdefghijklmnopqrstuv);
															$row2abcdefghijklmnopqrstuv = mysqli_fetch_row($result2abcdefghijklmnopqrstuv);
															$num2abcdefghijklmnopqrstuv = $row2abcdefghijklmnopqrstuv[0];


															$query11112345678912345 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912345) or die('Error querying database.');
															$result11112345678912345 = mysqli_query($db, $query11112345678912345);
															$row11112345678912345 = mysqli_fetch_row($result11112345678912345);
															$num11112345678912345 = $row11112345678912345[0];
															echo "<td>" . $num11112345678912345 . "</td>";

															$query222223456789123456 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123456) or die('Error querying database.');
															$result222223456789123456 = mysqli_query($db, $query222223456789123456);
															$row222223456789123456 = mysqli_fetch_row($result222223456789123456);
															$num222223456789123456 = $row222223456789123456[0];
															echo "<td>" . $num222223456789123456 . "</td>";


															$int11112345678912345 = (int)$num11112345678912345;
															$float11112345678912345 = (float)$num11112345678912345;
															$int222223456789123456 = (int)$num222223456789123456;
															$float222223456789123456 = (float)$num222223456789123456;
															$float2abcdefghijklmnopqrstuv = (float)$num2abcdefghijklmnopqrstuv;
															$total11112345678912345 = ($float11112345678912345 + $float222223456789123456) - $float2abcdefghijklmnopqrstuv;

															echo "<td>" . $total11112345678912345 . "</td>";


															$query444445678912345678 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345678) or die('Error querying database.');
															$result444445678912345678 = mysqli_query($db, $query444445678912345678);
															$row444445678912345678 = mysqli_fetch_row($result444445678912345678);
															$num444445678912345678 = $row444445678912345678[0];
															echo "<td>" . $num444445678912345678 . "</td>";




															$int333334567891234567 = (int)$num444445678912345678;
															$float333334567891234567 = (float)$num444445678912345678;

															$totalwa111112345678912345 = $total11112345678912345 + $float333334567891234567;

															echo "<td>" . $totalwa111112345678912345 . "</td>";





															$query666667891234567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567891) or die('Error querying database.');
															$result666667891234567891 = mysqli_query($db, $query666667891234567891);
															$row666667891234567891 = mysqli_fetch_row($result666667891234567891);
															$num666667891234567891 = $row666667891234567891[0];
															echo "<td>" . $num666667891234567891 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">CICIA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvw = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvw) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvw = mysqli_query($db, $query2abcdefghijklmnopqrstuvw);
															$row2abcdefghijklmnopqrstuvw = mysqli_fetch_row($result2abcdefghijklmnopqrstuvw);
															$num2abcdefghijklmnopqrstuvw = $row2abcdefghijklmnopqrstuvw[0];

															$query111123456789123456 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123456) or die('Error querying database.');
															$result111123456789123456 = mysqli_query($db, $query111123456789123456);
															$row111123456789123456 = mysqli_fetch_row($result111123456789123456);
															$num111123456789123456 = $row111123456789123456[0];
															echo "<td bgcolor='#27ae60'>" . $num111123456789123456 . "</td>";

															$query2222234567891234567 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234567) or die('Error querying database.');
															$result2222234567891234567 = mysqli_query($db, $query2222234567891234567);
															$row2222234567891234567 = mysqli_fetch_row($result2222234567891234567);
															$num2222234567891234567 = $row2222234567891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num2222234567891234567 . "</td>";


															$int111123456789123456 = (int)$num111123456789123456;
															$float111123456789123456 = (float)$num111123456789123456;
															$int2222234567891234567 = (int)$num2222234567891234567;
															$float2222234567891234567 = (float)$num2222234567891234567;
															$float2abcdefghijklmnopqrstuvw = (float)$num2abcdefghijklmnopqrstuvw;
															$total111123456789123456 = ($float111123456789123456 + $float2222234567891234567) - $float2abcdefghijklmnopqrstuvw;

															echo "<td bgcolor='#27ae60'>" . $total111123456789123456 . "</td>";


															$query4444456789123456789 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456789) or die('Error querying database.');
															$result4444456789123456789 = mysqli_query($db, $query4444456789123456789);
															$row4444456789123456789 = mysqli_fetch_row($result4444456789123456789);
															$num4444456789123456789 = $row4444456789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num4444456789123456789 . "</td>";




															$int3333345678912345678 = (int)$num4444456789123456789;
															$float3333345678912345678 = (float)$num4444456789123456789;

															$totalwa1111123456789123456 = $total111123456789123456 + $float3333345678912345678;

															echo "<td bgcolor='#27ae60'>" . $totalwa1111123456789123456 . "</td>";





															$query6666678912345678912 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678912) or die('Error querying database.');
															$result6666678912345678912 = mysqli_query($db, $query6666678912345678912);
															$row6666678912345678912 = mysqli_fetch_row($result6666678912345678912);
															$num6666678912345678912 = $row6666678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num6666678912345678912 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>LAKEBA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwx = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwx) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwx = mysqli_query($db, $query2abcdefghijklmnopqrstuvwx);
															$row2abcdefghijklmnopqrstuvwx = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwx);
															$num2abcdefghijklmnopqrstuvwx = $row2abcdefghijklmnopqrstuvwx[0];

															$query1111234567891234567 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234567) or die('Error querying database.');
															$result1111234567891234567 = mysqli_query($db, $query1111234567891234567);
															$row1111234567891234567 = mysqli_fetch_row($result1111234567891234567);
															$num1111234567891234567 = $row1111234567891234567[0];
															echo "<td>" . $num1111234567891234567 . "</td>";

															$query22222345678912345678 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345678) or die('Error querying database.');
															$result22222345678912345678 = mysqli_query($db, $query22222345678912345678);
															$row22222345678912345678 = mysqli_fetch_row($result22222345678912345678);
															$num22222345678912345678 = $row22222345678912345678[0];
															echo "<td>" . $num22222345678912345678 . "</td>";


															$int1111234567891234567 = (int)$num1111234567891234567;
															$float1111234567891234567 = (float)$num1111234567891234567;
															$int22222345678912345678 = (int)$num22222345678912345678;
															$float22222345678912345678 = (float)$num22222345678912345678;
															$float2abcdefghijklmnopqrstuvwx = (float)$num2abcdefghijklmnopqrstuvwx;
															$total1111234567891234567 = ($float1111234567891234567 + $float22222345678912345678) - $float2abcdefghijklmnopqrstuvwx;

															echo "<td>" . $total1111234567891234567 . "</td>";


															$query44444567891234567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567891) or die('Error querying database.');
															$result44444567891234567891 = mysqli_query($db, $query44444567891234567891);
															$row44444567891234567891 = mysqli_fetch_row($result44444567891234567891);
															$num44444567891234567891 = $row44444567891234567891[0];
															echo "<td>" . $num44444567891234567891 . "</td>";




															$int33333456789123456789 = (int)$num44444567891234567891;
															$float33333456789123456789 = (float)$num44444567891234567891;

															$totalwa11111234567891234567 = $total1111234567891234567 + $float33333456789123456789;

															echo "<td>" . $totalwa11111234567891234567 . "</td>";





															$query66666789123456789123 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789123) or die('Error querying database.');
															$result66666789123456789123 = mysqli_query($db, $query66666789123456789123);
															$row66666789123456789123 = mysqli_fetch_row($result66666789123456789123);
															$num66666789123456789123 = $row66666789123456789123[0];
															echo "<td>" . $num66666789123456789123 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">MOALA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxy = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxy) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxy = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxy);
															$row2abcdefghijklmnopqrstuvwxy = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxy);
															$num2abcdefghijklmnopqrstuvwxy = $row2abcdefghijklmnopqrstuvwxy[0];

															$query11112345678912345678 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912345678) or die('Error querying database.');
															$result11112345678912345678 = mysqli_query($db, $query11112345678912345678);
															$row11112345678912345678 = mysqli_fetch_row($result11112345678912345678);
															$num11112345678912345678 = $row11112345678912345678[0];
															echo "<td bgcolor='#27ae60'>" . $num11112345678912345678 . "</td>";

															$query222223456789123456789 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123456789) or die('Error querying database.');
															$result222223456789123456789 = mysqli_query($db, $query222223456789123456789);
															$row222223456789123456789 = mysqli_fetch_row($result222223456789123456789);
															$num222223456789123456789 = $row222223456789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num222223456789123456789 . "</td>";


															$int11112345678912345678 = (int)$num11112345678912345678;
															$float11112345678912345678 = (float)$num11112345678912345678;
															$int222223456789123456789 = (int)$num222223456789123456789;
															$float222223456789123456789 = (float)$num222223456789123456789;
															$float2abcdefghijklmnopqrstuvwxy = (float)$num2abcdefghijklmnopqrstuvwxy;
															$total11112345678912345678 = ($float11112345678912345678 + $float222223456789123456789) - $float2abcdefghijklmnopqrstuvwxy;

															echo "<td bgcolor='#27ae60'>" . $total11112345678912345678 . "</td>";


															$query444445678912345678912 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345678912) or die('Error querying database.');
															$result444445678912345678912 = mysqli_query($db, $query444445678912345678912);
															$row444445678912345678912 = mysqli_fetch_row($result444445678912345678912);
															$num444445678912345678912 = $row444445678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num444445678912345678912 . "</td>";




															$int333334567891234567891 = (int)$num444445678912345678912;
															$float333334567891234567891 = (float)$num444445678912345678912;

															$totalwa111112345678912345678 = $total11112345678912345678 + $float333334567891234567891;

															echo "<td bgcolor='#27ae60'>" . $totalwa111112345678912345678 . "</td>";





															$query666667891234567891234 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567891234) or die('Error querying database.');
															$result666667891234567891234 = mysqli_query($db, $query666667891234567891234);
															$row666667891234567891234 = mysqli_fetch_row($result666667891234567891234);
															$num666667891234567891234 = $row666667891234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num666667891234567891234 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>KADAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxyz = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyz) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxyz = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyz);
															$row2abcdefghijklmnopqrstuvwxyz = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxyz);
															$num2abcdefghijklmnopqrstuvwxyz = $row2abcdefghijklmnopqrstuvwxyz[0];

															$query111123456789123456789 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123456789) or die('Error querying database.');
															$result111123456789123456789 = mysqli_query($db, $query111123456789123456789);
															$row111123456789123456789 = mysqli_fetch_row($result111123456789123456789);
															$num111123456789123456789 = $row111123456789123456789[0];
															echo "<td>" . $num111123456789123456789 . "</td>";

															$query2222234567891234567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234567891) or die('Error querying database.');
															$result2222234567891234567891 = mysqli_query($db, $query2222234567891234567891);
															$row2222234567891234567891 = mysqli_fetch_row($result2222234567891234567891);
															$num2222234567891234567891 = $row2222234567891234567891[0];
															echo "<td>" . $num2222234567891234567891 . "</td>";


															$int111123456789123456789 = (int)$num111123456789123456789;
															$float111123456789123456789 = (float)$num111123456789123456789;
															$int2222234567891234567891 = (int)$num2222234567891234567891;
															$float2222234567891234567891 = (float)$num2222234567891234567891;
															$float2abcdefghijklmnopqrstuvwxyz = (float)$num2abcdefghijklmnopqrstuvwxyz;
															$total111123456789123456789 = ($float111123456789123456789 + $float2222234567891234567891) - $float2abcdefghijklmnopqrstuvwxyz;

															echo "<td>" . $total111123456789123456789 . "</td>";


															$query4444456789123456789123 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456789123) or die('Error querying database.');
															$result4444456789123456789123 = mysqli_query($db, $query4444456789123456789123);
															$row4444456789123456789123 = mysqli_fetch_row($result4444456789123456789123);
															$num4444456789123456789123 = $row4444456789123456789123[0];
															echo "<td>" . $num4444456789123456789123 . "</td>";




															$int3333345678912345678912 = (int)$num4444456789123456789123;
															$float3333345678912345678912 = (float)$num4444456789123456789123;

															$totalwa1111123456789123456789 = $total111123456789123456789 + $float3333345678912345678912;

															echo "<td>" . $totalwa1111123456789123456789 . "</td>";





															$query6666678912345678912345 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678912345) or die('Error querying database.');
															$result6666678912345678912345 = mysqli_query($db, $query6666678912345678912345);
															$row6666678912345678912345 = mysqli_fetch_row($result6666678912345678912345);
															$num6666678912345678912345 = $row6666678912345678912345[0];
															echo "<td>" . $num6666678912345678912345 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">ONO-I-LAU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxyza = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(SUBMITDATE) = YEAR(CURRENT_DATE )AND MONTH(SUBMITDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyza) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxyza = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyza);
															$row2abcdefghijklmnopqrstuvwxyza = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxyza);
															$num2abcdefghijklmnopqrstuvwxyza = $row2abcdefghijklmnopqrstuvwxyza[0];

															$query1111234567891234567891 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234567891) or die('Error querying database.');
															$result1111234567891234567891 = mysqli_query($db, $query1111234567891234567891);
															$row1111234567891234567891 = mysqli_fetch_row($result1111234567891234567891);
															$num1111234567891234567891 = $row1111234567891234567891[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567891234567891 . "</td>";

															$query22222345678912345678912 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345678912) or die('Error querying database.');
															$result22222345678912345678912 = mysqli_query($db, $query22222345678912345678912);
															$row22222345678912345678912 = mysqli_fetch_row($result22222345678912345678912);
															$num22222345678912345678912 = $row22222345678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678912345678912 . "</td>";


															$int1111234567891234567891 = (int)$num1111234567891234567891;
															$float1111234567891234567891 = (float)$num1111234567891234567891;
															$int22222345678912345678912 = (int)$num22222345678912345678912;
															$float22222345678912345678912 = (float)$num22222345678912345678912;
															$float2abcdefghijklmnopqrstuvwxyza = (float)$num2abcdefghijklmnopqrstuvwxyza;
															$total1111234567891234567891 = ($float1111234567891234567891 + $float22222345678912345678912) - $float2abcdefghijklmnopqrstuvwxyza;

															echo "<td bgcolor='#27ae60'>" . $total1111234567891234567891 . "</td>";


															$query44444567891234567891234 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567891234) or die('Error querying database.');
															$result44444567891234567891234 = mysqli_query($db, $query44444567891234567891234);
															$row44444567891234567891234 = mysqli_fetch_row($result44444567891234567891234);
															$num44444567891234567891234 = $row44444567891234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891234567891234 . "</td>";




															$int33333456789123456789123 = (int)$num44444567891234567891234;
															$float33333456789123456789123 = (float)$num44444567891234567891234;

															$totalwa11111234567891234567891 = $total1111234567891234567891 + $float33333456789123456789123;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567891234567891 . "</td>";





															$query66666789123456789123456 = "SELECT count(*)FROM compliance  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789123456) or die('Error querying database.');
															$result66666789123456789123456 = mysqli_query($db, $query66666789123456789123456);
															$row66666789123456789123456 = mysqli_fetch_row($result66666789123456789123456);
															$num66666789123456789123456 = $row66666789123456789123456[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123456789123456 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e74c3c">TOTAL</th>
															<?php

															$currentmonthtotalopenouter = $num1111234567 + $num11112345678 + $num111123456789 + $num1111234567891 + $num11112345678912 + $num111123456789123 + $num1111234567891234 + $num11112345678912345 + $num111123456789123456 + $num1111234567891234567 + $num11112345678912345678 + $num111123456789123456789 + $num1111234567891234567891;
															echo "<td bgcolor='#e74c3c'>" . $currentmonthtotalopenouter . "</td>";

															$currentmonthclosedouter = $num22222345678 + $num222223456789 + $num2222234567891 + $num22222345678912 + $num222223456789123 + $num2222234567891234 + $num22222345678912345 + $num222223456789123456 + $num2222234567891234567 + $num22222345678912345678 + $num222223456789123456789 + $num2222234567891234567891 + $num22222345678912345678912;
															echo "<td bgcolor='#e74c3c'>" . $currentmonthclosedouter . "</td>";

															$onemonthopenouter = $total1111234567 + $total11112345678 + $total111123456789 + $total1111234567891 + $total11112345678912 + $total111123456789123 + $total1111234567891234 + $total11112345678912345 + $total111123456789123456 + $total1111234567891234567 + $total11112345678912345678 + $total111123456789123456789 + $total1111234567891234567891;
															echo "<td bgcolor='#e74c3c'>" . $onemonthopenouter . "</td>";

															$onemonthclosedouter = $num44444567891 + $num444445678912 + $num4444456789123 + $num44444567891234 + $num444445678912345 + $num4444456789123456 + $num44444567891234567 + $num444445678912345678 + $num4444456789123456789 + $num44444567891234567891 + $num444445678912345678912 + $num4444456789123456789123 + $num44444567891234567891234;
															echo "<td bgcolor='#e74c3c'>" . $onemonthclosedouter . "</td>";

															$twomonthopenouter = $totalwa11111234567 + $totalwa111112345678 + $totalwa1111123456789 + $totalwa11111234567891 + $totalwa111112345678912 + $totalwa1111123456789123 + $totalwa11111234567891234 + $totalwa111112345678912345 + $totalwa1111123456789123456 + $totalwa11111234567891234567 + $totalwa111112345678912345678 + $totalwa1111123456789123456789 + $totalwa11111234567891234567891;
															echo "<td bgcolor='#e74c3c'>" . $twomonthopenouter . "</td>";
															$twomonthclosedouter = $num66666789123 + $num666667891234 + $num6666678912345 + $num66666789123456 + $num666667891234567 + $num6666678912345678 + $num66666789123456789 + $num666667891234567891 + $num6666678912345678912 + $num66666789123456789123 + $num666667891234567891234 + $num6666678912345678912345 + $num66666789123456789123456;
															echo "<td bgcolor='#e74c3c'>" . $twomonthclosedouter . "</td>";


															?>

														</tr>

													</tbody>

												</table>
											</div>
										</div>
										<!-- /.box-body -->
									</div>


								</div>

								<div class="item">
									<div class="box">
										<div class="box-header with-border">
											<h3 class="box-title">HAZARD</h3>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th colspan="2" bgcolor="#1abc9c">Certificate</th>
															<th colspan="2" bgcolor="#1abc9c">Current Month</th>
															<th colspan="2" bgcolor="#1abc9c">1 Month Ago</th>
															<th colspan="2" bgcolor="#1abc9c">2 Months Ago</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<th></th>
															<th></th>
															<th>OPEN</th>
															<th>CLOSED</th>
															<th>OPEN</th>
															<th>CLOSED</th>
															<th>OPEN</th>
															<th>CLOSED</th>

														</tr>
														<tr>
															<th bgcolor="#3498db">AMO</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2a = "SELECT count(*)FROM hazardreport  WHERE CERT='AMO' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2a) or die('Error querying database.');
															$result2a = mysqli_query($db, $query2a);
															$row2a = mysqli_fetch_row($result2a);
															$num2a = $row2a[0];



															$query = "SELECT count(*)FROM hazardreport  WHERE CERT='AMO' AND STATUS='OPEN'";
															mysqli_query($db, $query) or die('Error querying database.');
															$result = mysqli_query($db, $query);
															$row = mysqli_fetch_row($result);
															$num = $row[0];
															echo "<td bgcolor='#3498db' >" . $num . "</td>";

															$query2 = "SELECT count(*)FROM hazardreport  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2) or die('Error querying database.');
															$result2 = mysqli_query($db, $query2);
															$row2 = mysqli_fetch_row($result2);
															$num2 = $row2[0];
															echo "<td bgcolor='#3498db'>" . $num2 . "</td>";



															$int = (int)$num;
															$float = (float)$num;
															$int2 = (int)$num2;
															$float2 = (float)$num2;
															$float2a = (float)$num2a;
															$total = ($float + $float2) - $float2a;

															echo "<td bgcolor='#3498db'>" . $total . "</td>";




															include '../../dbconfig.php';
															$query4 = "SELECT count(*)FROM hazardreport  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4) or die('Error querying database.');
															$result4 = mysqli_query($db, $query4);
															$row4 = mysqli_fetch_row($result4);
															$num4 = $row4[0];
															echo "<td bgcolor='#3498db'>" . $num4 . "</td>";

															$int3 = (int)$num4;
															$float3 = (float)$num4;

															$totalwa = $total + $float3;

															echo "<td bgcolor='#3498db'>" . $totalwa . "</td>";


															$query6 = "SELECT count(*)FROM hazardreport  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6) or die('Error querying database.');
															$result6 = mysqli_query($db, $query6);
															$row6 = mysqli_fetch_row($result6);
															$num6 = $row[0];
															echo "<td bgcolor='#3498db'>" . $num6 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th>ATSP</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2ab = "SELECT count(*)FROM hazardreport  WHERE CERT='ATSP' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2ab) or die('Error querying database.');
															$result2ab = mysqli_query($db, $query2ab);
															$row2ab = mysqli_fetch_row($result2ab);
															$num2ab = $row2ab[0];

															$query1 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATSP' AND STATUS='OPEN' ";
															mysqli_query($db, $query1) or die('Error querying database.');
															$result1 = mysqli_query($db, $query1);
															$row1 = mysqli_fetch_row($result1);
															$num1 = $row1[0];
															echo "<td>" . $num1 . "</td>";

															$query22 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22) or die('Error querying database.');
															$result22 = mysqli_query($db, $query22);
															$row22 = mysqli_fetch_row($result22);
															$num22 = $row22[0];
															echo "<td>" . $num22 . "</td>";


															$int1 = (int)$num1;
															$float1 = (float)$num1;
															$int22 = (int)$num22;
															$float22 = (float)$num22;
															$float2ab = (float)$num2ab;
															$total1 = ($float1 + $float22) - $float2ab;

															echo "<td>" . $total1 . "</td>";


															$query44 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44) or die('Error querying database.');
															$result44 = mysqli_query($db, $query44);
															$row44 = mysqli_fetch_row($result44);
															$num44 = $row44[0];
															echo "<td>" . $num44 . "</td>";




															$int33 = (int)$num44;
															$float33 = (float)$num44;

															$totalwa1 = $total1 + $float33;

															echo "<td>" . $totalwa1 . "</td>";





															$query66 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66) or die('Error querying database.');
															$result66 = mysqli_query($db, $query66);
															$row66 = mysqli_fetch_row($result66);
															$num66 = $row66[0];
															echo "<td>" . $num66 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor='#3498db'>AIS</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2abc = "SELECT count(*)FROM hazardreport  WHERE CERT='ATSP' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abc) or die('Error querying database.');
															$result2abc = mysqli_query($db, $query2abc);
															$row2abc = mysqli_fetch_row($result2abc);
															$num2abc = $row2abc[0];

															$query11 = "SELECT count(*)FROM hazardreport  WHERE CERT='AIS' AND STATUS='OPEN' ";
															mysqli_query($db, $query11) or die('Error querying database.');
															$result11 = mysqli_query($db, $query11);
															$row11 = mysqli_fetch_row($result11);
															$num11 = $row11[0];
															echo "<td bgcolor='#3498db'>" . $num11 . "</td>";

															$query222 = "SELECT count(*)FROM hazardreport  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222) or die('Error querying database.');
															$result222 = mysqli_query($db, $query222);
															$row222 = mysqli_fetch_row($result222);
															$num222 = $row222[0];
															echo "<td bgcolor='#3498db'>" . $num222 . "</td>";


															$int11 = (int)$num11;
															$float11 = (float)$num11;
															$int222 = (int)$num222;
															$float222 = (float)$num222;
															$float2abc = (float)$num2abc;
															$total11 = ($float11 + $float222) - $float2ab;

															echo "<td bgcolor='#3498db'>" . $total11 . "</td>";


															$query444 = "SELECT count(*)FROM hazardreport  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444) or die('Error querying database.');
															$result444 = mysqli_query($db, $query444);
															$row444 = mysqli_fetch_row($result444);
															$num444 = $row444[0];
															echo "<td bgcolor='#3498db'>" . $num444 . "</td>";




															$int333 = (int)$num444;
															$float333 = (float)$num444;

															$totalwa111 = $total11 + $float333;

															echo "<td bgcolor='#3498db'>" . $totalwa111 . "</td>";





															$query666 = "SELECT count(*)FROM hazardreport  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666) or die('Error querying database.');
															$result666 = mysqli_query($db, $query666);
															$row666 = mysqli_fetch_row($result666);
															$num666 = $row666[0];
															echo "<td bgcolor='#3498db'>" . $num666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th>ATI</th>
															<th></th>
															<?php

															include '../../dbconfig.php';
															$query2abcd = "SELECT count(*)FROM hazardreport  WHERE CERT='ATI' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcd) or die('Error querying database.');
															$result2abcd = mysqli_query($db, $query2abcd);
															$row2abcd = mysqli_fetch_row($result2abcd);
															$num2abcd = $row2abcd[0];

															$query111 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATI' AND STATUS='OPEN'";
															mysqli_query($db, $query111) or die('Error querying database.');
															$result111 = mysqli_query($db, $query111);
															$row111 = mysqli_fetch_row($result111);
															$num111 = $row111[0];
															echo "<td>" . $num111 . "</td>";

															$query2222 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222) or die('Error querying database.');
															$result2222 = mysqli_query($db, $query2222);
															$row2222 = mysqli_fetch_row($result2222);
															$num2222 = $row2222[0];
															echo "<td>" . $num2222 . "</td>";


															$int111 = (int)$num111;
															$float111 = (float)$num111;
															$int2222 = (int)$num2222;
															$float2222 = (float)$num2222;
															$float2abcd = (float)$num2abcd;
															$total111 = ($float111 + $float2222) - $float2abcd;

															echo "<td>" . $total111 . "</td>";


															$query4444 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444) or die('Error querying database.');
															$result4444 = mysqli_query($db, $query4444);
															$row4444 = mysqli_fetch_row($result4444);
															$num4444 = $row4444[0];
															echo "<td>" . $num4444 . "</td>";




															$int3333 = (int)$num4444;
															$float3333 = (float)$num4444;

															$totalwa1111 = $total111 + $float3333;

															echo "<td>" . $totalwa1111 . "</td>";





															$query6666 = "SELECT count(*)FROM hazardreport  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666) or die('Error querying database.');
															$result6666 = mysqli_query($db, $query6666);
															$row6666 = mysqli_fetch_row($result6666);
															$num6666 = $row6666[0];
															echo "<td>" . $num6666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">NADI AD</th>
															<th bgcolor='#95a5a6'>DEPARTMENT</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">ARFFS</th>
															<?php

															include '../../dbconfig.php';

															$query2abcde = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcde) or die('Error querying database.');
															$result2abcde = mysqli_query($db, $query2abcde);
															$row2abcde = mysqli_fetch_row($result2abcde);
															$num2abcde = $row2abcde[0];

															$query1111 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN'";
															mysqli_query($db, $query1111) or die('Error querying database.');
															$result1111 = mysqli_query($db, $query1111);
															$row1111 = mysqli_fetch_row($result1111);
															$num1111 = $row1111[0];
															echo "<td bgcolor='#e67e22'>" . $num1111 . "</td>";

															$query22222 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222) or die('Error querying database.');
															$result22222 = mysqli_query($db, $query22222);
															$row22222 = mysqli_fetch_row($result22222);
															$num22222 = $row22222[0];
															echo "<td bgcolor='#e67e22'>" . $num22222 . "</td>";


															$int1111 = (int)$num1111;
															$float1111 = (float)$num1111;
															$int22222 = (int)$num22222;
															$float22222 = (float)$num22222;
															$float2abcde = (float)$num2abcde;
															$total1111 = ($float1111 + $float22222) - $float2abcde;

															echo "<td bgcolor='#e67e22'>" . $total1111 . "</td>";


															$query44444 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444) or die('Error querying database.');
															$result44444 = mysqli_query($db, $query44444);
															$row44444 = mysqli_fetch_row($result44444);
															$num44444 = $row44444[0];
															echo "<td bgcolor='#e67e22'>" . $num44444 . "</td>";




															$int33333 = (int)$num44444;
															$float33333 = (float)$num44444;

															$totalwa11111 = $total1111 + $float33333;

															echo "<td bgcolor='#e67e22'>" . $totalwa11111 . "</td>";





															$query66666 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666) or die('Error querying database.');
															$result66666 = mysqli_query($db, $query66666);
															$row66666 = mysqli_fetch_row($result66666);
															$num66666 = $row66666[0];
															echo "<td bgcolor='#e67e22'>" . $num66666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>E & M</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdef = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdef) or die('Error querying database.');
															$result2abcdef = mysqli_query($db, $query2abcdef);
															$row2abcdef = mysqli_fetch_row($result2abcdef);
															$num2abcdef = $row2abcdef[0];

															$query11111 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='OPEN'";
															mysqli_query($db, $query11111) or die('Error querying database.');
															$result11111 = mysqli_query($db, $query11111);
															$row11111 = mysqli_fetch_row($result11111);
															$num11111 = $row11111[0];
															echo "<td>" . $num11111 . "</td>";

															$query222222 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222222) or die('Error querying database.');
															$result222222 = mysqli_query($db, $query222222);
															$row222222 = mysqli_fetch_row($result222222);
															$num222222 = $row222222[0];
															echo "<td>" . $num222222 . "</td>";


															$int11111 = (int)$num11111;
															$float11111 = (float)$num11111;
															$int222222 = (int)$num222222;
															$float222222 = (float)$num222222;
															$float2abcdef = (float)$num2abcdef;
															$total11111 = ($float11111 + $float222222) - $float2abcdef;

															echo "<td>" . $total11111 . "</td>";


															$query444444 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444444) or die('Error querying database.');
															$result444444 = mysqli_query($db, $query444444);
															$row444444 = mysqli_fetch_row($result444444);
															$num444444 = $row444444[0];
															echo "<td>" . $num444444 . "</td>";




															$int333333 = (int)$num444444;
															$float333333 = (float)$num444444;

															$totalwa111111 = $total11111 + $float333333;

															echo "<td>" . $totalwa111111 . "</td>";





															$query666666 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666666) or die('Error querying database.');
															$result666666 = mysqli_query($db, $query666666);
															$row666666 = mysqli_fetch_row($result666666);
															$num666666 = $row666666[0];
															echo "<td>" . $num666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">AIRSIDE</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefg = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefg) or die('Error querying database.');
															$result2abcdefg = mysqli_query($db, $query2abcdefg);
															$row2abcdefg = mysqli_fetch_row($result2abcdefg);
															$num2abcdefg = $row2abcdefg[0];

															$query111111 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='OPEN'";
															mysqli_query($db, $query111111) or die('Error querying database.');
															$result111111 = mysqli_query($db, $query111111);
															$row111111 = mysqli_fetch_row($result111111);
															$num111111 = $row111111[0];
															echo "<td bgcolor='#e67e22'>" . $num111111 . "</td>";

															$query2222222 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222222) or die('Error querying database.');
															$result2222222 = mysqli_query($db, $query2222222);
															$row2222222 = mysqli_fetch_row($result2222222);
															$num2222222 = $row2222222[0];
															echo "<td bgcolor='#e67e22'>" . $num2222222 . "</td>";


															$int111111 = (int)$num111111;
															$float111111 = (float)$num111111;
															$int2222222 = (int)$num2222222;
															$float2222222 = (float)$num2222222;
															$float2abcdefg = (float)$num2abcdefg;
															$total111111 = ($float111111 + $float2222222) - $float2abcdefg;

															echo "<td bgcolor='#e67e22'>" . $total111111 . "</td>";


															$query4444444 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444444) or die('Error querying database.');
															$result4444444 = mysqli_query($db, $query4444444);
															$row4444444 = mysqli_fetch_row($result4444444);
															$num4444444 = $row4444444[0];
															echo "<td bgcolor='#e67e22'>" . $num4444444 . "</td>";




															$int3333333 = (int)$num4444444;
															$float3333333 = (float)$num4444444;

															$totalwa1111111 = $total111111 + $float3333333;

															echo "<td bgcolor='#e67e22'>" . $totalwa1111111 . "</td>";





															$query6666666 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666666) or die('Error querying database.');
															$result6666666 = mysqli_query($db, $query6666666);
															$row6666666 = mysqli_fetch_row($result6666666);
															$num6666666 = $row6666666[0];
															echo "<td bgcolor='#e67e22'>" . $num6666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MBCW</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefgh = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefgh) or die('Error querying database.');
															$result2abcdefgh = mysqli_query($db, $query2abcdefgh);
															$row2abcdefgh = mysqli_fetch_row($result2abcdefgh);
															$num2abcdefgh = $row2abcdefgh[0];

															$query1111111 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query1111111) or die('Error querying database.');
															$result1111111 = mysqli_query($db, $query1111111);
															$row1111111 = mysqli_fetch_row($result1111111);
															$num1111111 = $row1111111[0];
															echo "<td>" . $num1111111 . "</td>";

															$query22222222 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222222) or die('Error querying database.');
															$result22222222 = mysqli_query($db, $query22222222);
															$row22222222 = mysqli_fetch_row($result22222222);
															$num22222222 = $row22222222[0];
															echo "<td>" . $num22222222 . "</td>";


															$int1111111 = (int)$num1111111;
															$float1111111 = (float)$num1111111;
															$int22222222 = (int)$num22222222;
															$float22222222 = (float)$num22222222;
															$float2abcdefgh = (float)$num2abcdefgh;
															$total1111111 = ($float1111111 + $float22222222) - $float2abcdefgh;

															echo "<td>" . $total1111111 . "</td>";


															$query44444444 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444444) or die('Error querying database.');
															$result44444444 = mysqli_query($db, $query44444444);
															$row44444444 = mysqli_fetch_row($result44444444);
															$num44444444 = $row44444444[0];
															echo "<td>" . $num44444444 . "</td>";




															$int33333333 = (int)$num44444444;
															$float33333333 = (float)$num44444444;

															$totalwa11111111 = $total1111111 + $float33333333;

															echo "<td>" . $totalwa11111111 . "</td>";





															$query66666666 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666666) or die('Error querying database.');
															$result66666666 = mysqli_query($db, $query66666666);
															$row66666666 = mysqli_fetch_row($result66666666);
															$num66666666 = $row66666666[0];
															echo "<td>" . $num66666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MSRM</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghi = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghi) or die('Error querying database.');
															$result2abcdefghi = mysqli_query($db, $query2abcdefghi);
															$row2abcdefghi = mysqli_fetch_row($result2abcdefghi);
															$num2abcdefghi = $row2abcdefghi[0];

															$query11111111 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='OPEN'";
															mysqli_query($db, $query11111111) or die('Error querying database.');
															$result11111111 = mysqli_query($db, $query11111111);
															$row11111111 = mysqli_fetch_row($result11111111);
															$num11111111 = $row11111111[0];
															echo "<td bgcolor='#e67e22'>" . $num11111111 . "</td>";

															$query222222222 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222222222) or die('Error querying database.');
															$result222222222 = mysqli_query($db, $query222222222);
															$row222222222 = mysqli_fetch_row($result222222222);
															$num222222222 = $row222222222[0];
															echo "<td bgcolor='#e67e22'>" . $num222222222 . "</td>";


															$int11111111 = (int)$num11111111;
															$float11111111 = (float)$num11111111;
															$int222222222 = (int)$num222222222;
															$float222222222 = (float)$num222222222;
															$float2abcdefghi = (float)$num2abcdefghi;
															$total11111111 = ($float11111111 + $float222222222) - $float2abcdefghi;

															echo "<td bgcolor='#e67e22'>" . $total11111111 . "</td>";


															$query444444444 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444444444) or die('Error querying database.');
															$result444444444 = mysqli_query($db, $query444444444);
															$row444444444 = mysqli_fetch_row($result444444444);
															$num444444444 = $row444444444[0];
															echo "<td bgcolor='#e67e22'>" . $num444444444 . "</td>";




															$int333333333 = (int)$num444444444;
															$float333333333 = (float)$num444444444;

															$totalwa111111111 = $total11111111 + $float333333333;

															echo "<td bgcolor='#e67e22'>" . $totalwa111111111 . "</td>";





															$query666666666 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666666666) or die('Error querying database.');
															$result666666666 = mysqli_query($db, $query666666666);
															$row666666666 = mysqli_fetch_row($result666666666);
															$num666666666 = $row666666666[0];
															echo "<td bgcolor='#e67e22'>" . $num666666666 . "</td>";
															mysqli_close($db);

															?>
														</tr>
														<tr>
															<th bgcolor="#3498db">NAUSORI AD</th>
															<th bgcolor='#95a5a6'>DEPARTMENT</th>

														</tr>

														<tr>
															<th></th>
															<th bgcolor="#e67e22">ARFFS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghij = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghij) or die('Error querying database.');
															$result2abcdefghij = mysqli_query($db, $query2abcdefghij);
															$row2abcdefghij = mysqli_fetch_row($result2abcdefghij);
															$num2abcdefghij = $row2abcdefghij[0];

															$query11112 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN'";
															mysqli_query($db, $query11112) or die('Error querying database.');
															$result11112 = mysqli_query($db, $query11112);
															$row11112 = mysqli_fetch_row($result11112);
															$num11112 = $row11112[0];
															echo "<td bgcolor='#e67e22'>" . $num11112 . "</td>";

															$query222223 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223) or die('Error querying database.');
															$result222223 = mysqli_query($db, $query222223);
															$row222223 = mysqli_fetch_row($result222223);
															$num222223 = $row222223[0];
															echo "<td bgcolor='#e67e22'>" . $num222223 . "</td>";


															$int11112 = (int)$num11112;
															$float11112 = (float)$num11112;
															$int222223 = (int)$num222223;
															$float222223 = (float)$num222223;
															$float2abcdefghij = (float)$num2abcdefghij;
															$total11112 = ($float11112 + $float222223) - $float2abcdefghij;

															echo "<td bgcolor='#e67e22'>" . $total11112 . "</td>";


															$query444445 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445) or die('Error querying database.');
															$result444445 = mysqli_query($db, $query444445);
															$row444445 = mysqli_fetch_row($result444445);
															$num444445 = $row444445[0];
															echo "<td bgcolor='#e67e22'>" . $num444445 . "</td>";




															$int333334 = (int)$num444445;
															$float333334 = (float)$num444445;

															$totalwa111112 = $total11112 + $float333334;

															echo "<td bgcolor='#e67e22'>" . $totalwa111112 . "</td>";





															$query666667 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667) or die('Error querying database.');
															$result666667 = mysqli_query($db, $query666667);
															$row666667 = mysqli_fetch_row($result666667);
															$num666667 = $row666667[0];
															echo "<td bgcolor='#e67e22'>" . $num666667 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>E & M</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijk = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijk) or die('Error querying database.');
															$result2abcdefghijk = mysqli_query($db, $query2abcdefghijk);
															$row2abcdefghijk = mysqli_fetch_row($result2abcdefghijk);
															$num2abcdefghijk = $row2abcdefghijk[0];

															$query111123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='OPEN'";
															mysqli_query($db, $query111123) or die('Error querying database.');
															$result111123 = mysqli_query($db, $query111123);
															$row111123 = mysqli_fetch_row($result111123);
															$num111123 = $row111123[0];
															echo "<td>" . $num111123 . "</td>";

															$query2222234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234) or die('Error querying database.');
															$result2222234 = mysqli_query($db, $query2222234);
															$row2222234 = mysqli_fetch_row($result2222234);
															$num2222234 = $row2222234[0];
															echo "<td>" . $num2222234 . "</td>";


															$int111123 = (int)$num111123;
															$float111123 = (float)$num11112;
															$int2222234 = (int)$num2222234;
															$float2222234 = (float)$num2222234;
															$float2abcdefghijk = (float)$num2abcdefghijk;
															$total111123 = ($float111123 + $float2222234) - $float2abcdefghijk;

															echo "<td>" . $total111123 . "</td>";


															$query4444456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456) or die('Error querying database.');
															$result4444456 = mysqli_query($db, $query4444456);
															$row4444456 = mysqli_fetch_row($result4444456);
															$num4444456 = $row4444456[0];
															echo "<td>" . $num4444456 . "</td>";




															$int3333345 = (int)$num4444456;
															$float3333345 = (float)$num4444456;

															$totalwa1111123 = $total111123 + $float3333345;

															echo "<td>" . $totalwa1111123 . "</td>";





															$query6666678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678) or die('Error querying database.');
															$result6666678 = mysqli_query($db, $query6666678);
															$row6666678 = mysqli_fetch_row($result6666678);
															$num6666678 = $row6666678[0];
															echo "<td>" . $num6666678 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">AIRSIDE</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijkl = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijkl) or die('Error querying database.');
															$result2abcdefghijkl = mysqli_query($db, $query2abcdefghijkl);
															$row2abcdefghijkl = mysqli_fetch_row($result2abcdefghijkl);
															$num2abcdefghijkl = $row2abcdefghijkl[0];

															$query1111234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234) or die('Error querying database.');
															$result1111234 = mysqli_query($db, $query1111234);
															$row1111234 = mysqli_fetch_row($result1111234);
															$num1111234 = $row1111234[0];
															echo "<td bgcolor='#e67e22'>" . $num1111234 . "</td>";

															$query22222345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345) or die('Error querying database.');
															$result22222345 = mysqli_query($db, $query22222345);
															$row22222345 = mysqli_fetch_row($result22222345);
															$num22222345 = $row22222345[0];
															echo "<td bgcolor='#e67e22'>" . $num22222345 . "</td>";


															$int1111234 = (int)$num1111234;
															$float1111234 = (float)$num111123;
															$int22222345 = (int)$num22222345;
															$float22222345 = (float)$num22222345;
															$float2abcdefghijkl = (float)$num2abcdefghijkl;
															$total1111234 = ($float1111234 + $float22222345) - $float2abcdefghijkl;

															echo "<td bgcolor='#e67e22'>" . $total1111234 . "</td>";


															$query44444567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567) or die('Error querying database.');
															$result44444567 = mysqli_query($db, $query44444567);
															$row44444567 = mysqli_fetch_row($result44444567);
															$num44444567 = $row44444567[0];
															echo "<td bgcolor='#e67e22'>" . $num44444567 . "</td>";




															$int33333456 = (int)$num44444567;
															$float33333456 = (float)$num44444567;

															$totalwa11111234 = $total1111234 + $float33333456;

															echo "<td bgcolor='#e67e22'>" . $totalwa11111234 . "</td>";





															$query66666789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789) or die('Error querying database.');
															$result66666789 = mysqli_query($db, $query66666789);
															$row66666789 = mysqli_fetch_row($result66666789);
															$num66666789 = $row66666789[0];
															echo "<td bgcolor='#e67e22'>" . $num66666789 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MBCW</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklm = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklm) or die('Error querying database.');
															$result2abcdefghijklm = mysqli_query($db, $query2abcdefghijklm);
															$row2abcdefghijklm = mysqli_fetch_row($result2abcdefghijklm);
															$num2abcdefghijklm = $row2abcdefghijklm[0];

															$query11112345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345) or die('Error querying database.');
															$result11112345 = mysqli_query($db, $query11112345);
															$row11112345 = mysqli_fetch_row($result11112345);
															$num11112345 = $row11112345[0];
															echo "<td>" . $num11112345 . "</td>";

															$query222223456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456) or die('Error querying database.');
															$result222223456 = mysqli_query($db, $query222223456);
															$row222223456 = mysqli_fetch_row($result222223456);
															$num222223456 = $row222223456[0];
															echo "<td>" . $num222223456 . "</td>";


															$int11112345 = (int)$num11112345;
															$float11112345 = (float)$num11112345;
															$int222223456 = (int)$num222223456;
															$float222223456 = (float)$num222223456;
															$float2abcdefghijklm = (float)$num2abcdefghijklm;
															$total11112345 = ($float11112345 + $float222223456) - $float2abcdefghijklm;

															echo "<td>" . $total11112345 . "</td>";


															$query444445678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678) or die('Error querying database.');
															$result444445678 = mysqli_query($db, $query444445678);
															$row444445678 = mysqli_fetch_row($result444445678);
															$num444445678 = $row444445678[0];
															echo "<td>" . $num444445678 . "</td>";




															$int333334567 = (int)$num444445678;
															$float333334567 = (float)$num444445678;

															$totalwa111112345 = $total11112345 + $float333334567;

															echo "<td>" . $totalwa111112345 . "</td>";





															$query666667891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891) or die('Error querying database.');
															$result666667891 = mysqli_query($db, $query666667891);
															$row666667891 = mysqli_fetch_row($result666667891);
															$num666667891 = $row666667891[0];
															echo "<td>" . $num666667891 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MSRM</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmn = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmn) or die('Error querying database.');
															$result2abcdefghijklmn = mysqli_query($db, $query2abcdefghijklmn);
															$row2abcdefghijklmn = mysqli_fetch_row($result2abcdefghijklmn);
															$num2abcdefghijklmn = $row2abcdefghijklmn[0];

															$query111123456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456) or die('Error querying database.');
															$result111123456 = mysqli_query($db, $query111123456);
															$row111123456 = mysqli_fetch_row($result111123456);
															$num111123456 = $row111123456[0];
															echo "<td bgcolor='#e67e22'>" . $num111123456 . "</td>";

															$query2222234567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567) or die('Error querying database.');
															$result2222234567 = mysqli_query($db, $query2222234567);
															$row2222234567 = mysqli_fetch_row($result2222234567);
															$num2222234567 = $row2222234567[0];
															echo "<td bgcolor='#e67e22'>" . $num2222234567 . "</td>";


															$int111123456 = (int)$num111123456;
															$float111123456 = (float)$num11112345;
															$int2222234567 = (int)$num2222234567;
															$float2222234567 = (float)$num2222234567;
															$float2abcdefghijklmn = (float)$num2abcdefghijklmn;
															$total111123456 = ($float111123456 + $float2222234567) - $float2abcdefghijklmn;

															echo "<td bgcolor='#e67e22'>" . $total111123456 . "</td>";


															$query4444456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789) or die('Error querying database.');
															$result4444456789 = mysqli_query($db, $query4444456789);
															$row4444456789 = mysqli_fetch_row($result4444456789);
															$num4444456789 = $row4444456789[0];
															echo "<td bgcolor='#e67e22'>" . $num4444456789 . "</td>";




															$int3333345678 = (int)$num4444456789;
															$float3333345678 = (float)$num4444456789;

															$totalwa1111123456 = $total111123456 + $float3333345678;

															echo "<td bgcolor='#e67e22'>" . $totalwa1111123456 . "</td>";





															$query6666678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912) or die('Error querying database.');
															$result6666678912 = mysqli_query($db, $query6666678912);
															$row6666678912 = mysqli_fetch_row($result6666678912);
															$num6666678912 = $row6666678912[0];
															echo "<td bgcolor='#e67e22'>" . $num6666678912 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MNOS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmapmna = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmapmna) or die('Error querying database.');
															$result2abcdefghijklmapmna = mysqli_query($db, $query2abcdefghijklmapmna);
															$row2abcdefghijklmapmna = mysqli_fetch_row($result2abcdefghijklmapmna);
															$num2abcdefghijklmapmna = $row2abcdefghijklmapmna[0];

															$query11112345apmna = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345apmna) or die('Error querying database.');
															$result11112345apmna = mysqli_query($db, $query11112345apmna);
															$row11112345apmna = mysqli_fetch_row($result11112345apmna);
															$num11112345apmna = $row11112345apmna[0];
															echo "<td>" . $num11112345apmna . "</td>";

															$query222223456apmna = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456apmna) or die('Error querying database.');
															$result222223456apmna = mysqli_query($db, $query222223456apmna);
															$row222223456apmna = mysqli_fetch_row($result222223456apmna);
															$num222223456apmna = $row222223456apmna[0];
															echo "<td>" . $num222223456apmna . "</td>";


															$int11112345apmna = (int)$num11112345apmna;
															$float11112345apmna = (float)$num11112345apmna;
															$int222223456apmna = (int)$num222223456apmna;
															$float222223456apmna = (float)$num222223456apmna;
															$float2abcdefghijklmapmna = (float)$num2abcdefghijklmapmna;
															$total11112345apmna = ($float11112345apmna + $float222223456apmna) - $float2abcdefghijklmapmna;

															echo "<td>" . $total11112345apmna . "</td>";


															$query444445678apmna = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678apmna) or die('Error querying database.');
															$result444445678apmna = mysqli_query($db, $query444445678apmna);
															$row444445678apmna = mysqli_fetch_row($result444445678apmna);
															$num444445678apmna = $row444445678apmna[0];
															echo "<td>" . $num444445678apmna . "</td>";




															$int333334567apmna = (int)$num444445678apmna;
															$float333334567apmna = (float)$num444445678apmna;

															$totalwa111112345apmna = $total11112345apmna + $float333334567apmna;

															echo "<td>" . $totalwa111112345apmna . "</td>";





															$query666667891apmna = "SELECT count(*)FROM hazardreport  WHERE CERT='Nausori AD' AND RISKOWNER='MNOS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891apmna) or die('Error querying database.');
															$result666667891apmna = mysqli_query($db, $query666667891apmna);
															$row666667891apmna = mysqli_fetch_row($result666667891apmna);
															$num666667891apmna = $row666667891apmna[0];
															echo "<td>" . $num666667891apmna . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">OUTER STATIONS</th>
															<th bgcolor='#95a5a6'>AIRPORTS</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">LABASA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmno = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmno) or die('Error querying database.');
															$result2abcdefghijklmno = mysqli_query($db, $query2abcdefghijklmno);
															$row2abcdefghijklmno = mysqli_fetch_row($result2abcdefghijklmno);
															$num2abcdefghijklmno = $row2abcdefghijklmno[0];

															$query1111234567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567) or die('Error querying database.');
															$result1111234567 = mysqli_query($db, $query1111234567);
															$row1111234567 = mysqli_fetch_row($result1111234567);
															$num1111234567 = $row1111234567[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567 . "</td>";

															$query22222345678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678) or die('Error querying database.');
															$result22222345678 = mysqli_query($db, $query22222345678);
															$row22222345678 = mysqli_fetch_row($result22222345678);
															$num22222345678 = $row22222345678[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678 . "</td>";


															$int1111234567 = (int)$num1111234567;
															$float1111234567 = (float)$num111123456;
															$int22222345678 = (int)$num22222345678;
															$float22222345678 = (float)$num22222345678;
															$float2abcdefghijklmno = (float)$num2abcdefghijklmno;
															$total1111234567 = ($float1111234567 + $float22222345678) - $float2abcdefghijklmno;

															echo "<td bgcolor='#27ae60'>" . $total1111234567 . "</td>";


															$query44444567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891) or die('Error querying database.');
															$result44444567891 = mysqli_query($db, $query44444567891);
															$row44444567891 = mysqli_fetch_row($result44444567891);
															$num44444567891 = $row44444567891[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891 . "</td>";




															$int33333456789 = (int)$num44444567891;
															$float33333456789 = (float)$num44444567891;

															$totalwa11111234567 = $total1111234567 + $float33333456789;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567 . "</td>";





															$query66666789123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123) or die('Error querying database.');
															$result66666789123 = mysqli_query($db, $query66666789123);
															$row66666789123 = mysqli_fetch_row($result66666789123);
															$num66666789123 = $row66666789123[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>SAVUSAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnop = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnop) or die('Error querying database.');
															$result2abcdefghijklmnop = mysqli_query($db, $query2abcdefghijklmnop);
															$row2abcdefghijklmnop = mysqli_fetch_row($result2abcdefghijklmnop);
															$num2abcdefghijklmnop = $row2abcdefghijklmnop[0];

															$query11112345678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678) or die('Error querying database.');
															$result11112345678 = mysqli_query($db, $query11112345678);
															$row11112345678 = mysqli_fetch_row($result11112345678);
															$num11112345678 = $row11112345678[0];
															echo "<td>" . $num11112345678 . "</td>";

															$query222223456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789) or die('Error querying database.');
															$result222223456789 = mysqli_query($db, $query222223456789);
															$row222223456789 = mysqli_fetch_row($result222223456789);
															$num222223456789 = $row222223456789[0];
															echo "<td>" . $num222223456789 . "</td>";


															$int11112345678 = (int)$num11112345678;
															$float11112345678 = (float)$num11112345678;
															$int222223456789 = (int)$num222223456789;
															$float222223456789 = (float)$num222223456789;
															$float2abcdefghijklmnop = (float)$num2abcdefghijklmnop;
															$total11112345678 = ($float11112345678 + $float222223456789) - $float2abcdefghijklmnop;

															echo "<td>" . $total11112345678 . "</td>";


															$query444445678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912) or die('Error querying database.');
															$result444445678912 = mysqli_query($db, $query444445678912);
															$row444445678912 = mysqli_fetch_row($result444445678912);
															$num444445678912 = $row444445678912[0];
															echo "<td>" . $num444445678912 . "</td>";




															$int333334567891 = (int)$num444445678912;
															$float333334567891 = (float)$num444445678912;

															$totalwa111112345678 = $total11112345678 + $float333334567891;

															echo "<td>" . $totalwa111112345678 . "</td>";





															$query666667891234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234) or die('Error querying database.');
															$result666667891234 = mysqli_query($db, $query666667891234);
															$row666667891234 = mysqli_fetch_row($result666667891234);
															$num666667891234 = $row666667891234[0];
															echo "<td>" . $num666667891234 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">MATEI</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopq = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopq) or die('Error querying database.');
															$result2abcdefghijklmnopq = mysqli_query($db, $query2abcdefghijklmnopq);
															$row2abcdefghijklmnopq = mysqli_fetch_row($result2abcdefghijklmnopq);
															$num2abcdefghijklmnopq = $row2abcdefghijklmnopq[0];

															$query111123456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789) or die('Error querying database.');
															$result111123456789 = mysqli_query($db, $query111123456789);
															$row111123456789 = mysqli_fetch_row($result111123456789);
															$num111123456789 = $row111123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num111123456789 . "</td>";

															$query2222234567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891) or die('Error querying database.');
															$result2222234567891 = mysqli_query($db, $query2222234567891);
															$row2222234567891 = mysqli_fetch_row($result2222234567891);
															$num2222234567891 = $row2222234567891[0];
															echo "<td bgcolor='#27ae60'>" . $num2222234567891 . "</td>";


															$int111123456789 = (int)$num111123456789;
															$float111123456789 = (float)$num111123456789;
															$int2222234567891 = (int)$num2222234567891;
															$float2222234567891 = (float)$num2222234567891;
															$float2abcdefghijklmnopq = (float)$num2abcdefghijklmnopq;
															$total111123456789 = ($float111123456789 + $float2222234567891) - $float2abcdefghijklmnopq;

															echo "<td bgcolor='#27ae60'>" . $total111123456789 . "</td>";


															$query4444456789123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123) or die('Error querying database.');
															$result4444456789123 = mysqli_query($db, $query4444456789123);
															$row4444456789123 = mysqli_fetch_row($result4444456789123);
															$num4444456789123 = $row4444456789123[0];
															echo "<td bgcolor='#27ae60'>" . $num4444456789123 . "</td>";




															$int3333345678912 = (int)$num4444456789123;
															$float3333345678912 = (float)$num4444456789123;

															$totalwa1111123456789 = $total111123456789 + $float3333345678912;

															echo "<td bgcolor='#27ae60'>" . $totalwa1111123456789 . "</td>";





															$query6666678912345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345) or die('Error querying database.');
															$result6666678912345 = mysqli_query($db, $query6666678912345);
															$row6666678912345 = mysqli_fetch_row($result6666678912345);
															$num6666678912345 = $row6666678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num6666678912345 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>ROTUMA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqr = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqr) or die('Error querying database.');
															$result2abcdefghijklmnopqr = mysqli_query($db, $query2abcdefghijklmnopqr);
															$row2abcdefghijklmnopqr = mysqli_fetch_row($result2abcdefghijklmnopqr);
															$num2abcdefghijklmnopqr = $row2abcdefghijklmnopqr[0];

															$query1111234567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891) or die('Error querying database.');
															$result1111234567891 = mysqli_query($db, $query1111234567891);
															$row1111234567891 = mysqli_fetch_row($result1111234567891);
															$num1111234567891 = $row1111234567891[0];
															echo "<td>" . $num1111234567891 . "</td>";

															$query22222345678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912) or die('Error querying database.');
															$result22222345678912 = mysqli_query($db, $query22222345678912);
															$row22222345678912 = mysqli_fetch_row($result22222345678912);
															$num22222345678912 = $row22222345678912[0];
															echo "<td>" . $num22222345678912 . "</td>";


															$int1111234567891 = (int)$num1111234567891;
															$float1111234567891 = (float)$num1111234567891;
															$int22222345678912 = (int)$num22222345678912;
															$float22222345678912 = (float)$num22222345678912;
															$float2abcdefghijklmnopqr = (float)$num2abcdefghijklmnopqr;
															$total1111234567891 = ($float1111234567891 + $float22222345678912) - $float2abcdefghijklmnopqr;

															echo "<td>" . $total1111234567891 . "</td>";


															$query44444567891234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234) or die('Error querying database.');
															$result44444567891234 = mysqli_query($db, $query44444567891234);
															$row44444567891234 = mysqli_fetch_row($result44444567891234);
															$num44444567891234 = $row44444567891234[0];
															echo "<td>" . $num44444567891234 . "</td>";




															$int33333456789123 = (int)$num44444567891234;
															$float33333456789123 = (float)$num44444567891234;

															$totalwa11111234567891 = $total1111234567891 + $float33333456789123;

															echo "<td>" . $totalwa11111234567891 . "</td>";





															$query66666789123456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456) or die('Error querying database.');
															$result66666789123456 = mysqli_query($db, $query66666789123456);
															$row66666789123456 = mysqli_fetch_row($result66666789123456);
															$num66666789123456 = $row66666789123456[0];
															echo "<td>" . $num66666789123456 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">KORO</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijklmnopqrs = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrs) or die('Error querying database.');
															$result2abcdefghijklmnopqrs = mysqli_query($db, $query2abcdefghijklmnopqrs);
															$row2abcdefghijklmnopqrs = mysqli_fetch_row($result2abcdefghijklmnopqrs);
															$num2abcdefghijklmnopqrs = $row2abcdefghijklmnopqrs[0];

															$query11112345678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912) or die('Error querying database.');
															$result11112345678912 = mysqli_query($db, $query11112345678912);
															$row11112345678912 = mysqli_fetch_row($result11112345678912);
															$num11112345678912 = $row11112345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num11112345678912 . "</td>";

															$query222223456789123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123) or die('Error querying database.');
															$result222223456789123 = mysqli_query($db, $query222223456789123);
															$row222223456789123 = mysqli_fetch_row($result222223456789123);
															$num222223456789123 = $row222223456789123[0];
															echo "<td bgcolor='#27ae60'>" . $num222223456789123 . "</td>";


															$int11112345678912 = (int)$num11112345678912;
															$float11112345678912 = (float)$num11112345678912;
															$int222223456789123 = (int)$num222223456789123;
															$float222223456789123 = (float)$num222223456789123;
															$float2abcdefghijklmnopqrs = (float)$num2abcdefghijklmnopqrs;
															$total11112345678912 = ($float11112345678912 + $float222223456789123) - $float2abcdefghijklmnopqrs;

															echo "<td bgcolor='#27ae60'>" . $total11112345678912 . "</td>";


															$query444445678912345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345) or die('Error querying database.');
															$result444445678912345 = mysqli_query($db, $query444445678912345);
															$row444445678912345 = mysqli_fetch_row($result444445678912345);
															$num444445678912345 = $row444445678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num444445678912345 . "</td>";




															$int333334567891234 = (int)$num444445678912345;
															$float333334567891234 = (float)$num444445678912345;

															$totalwa111112345678912 = $total11112345678912 + $float333334567891234;

															echo "<td bgcolor='#27ae60'>" . $totalwa111112345678912 . "</td>";





															$query666667891234567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567) or die('Error querying database.');
															$result666667891234567 = mysqli_query($db, $query666667891234567);
															$row666667891234567 = mysqli_fetch_row($result666667891234567);
															$num666667891234567 = $row666667891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num666667891234567 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>GAU</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijklmnopqrst = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrst) or die('Error querying database.');
															$result2abcdefghijklmnopqrst = mysqli_query($db, $query2abcdefghijklmnopqrst);
															$row2abcdefghijklmnopqrst = mysqli_fetch_row($result2abcdefghijklmnopqrst);
															$num2abcdefghijklmnopqrst = $row2abcdefghijklmnopqrst[0];

															$query111123456789123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123) or die('Error querying database.');
															$result111123456789123 = mysqli_query($db, $query111123456789123);
															$row111123456789123 = mysqli_fetch_row($result111123456789123);
															$num111123456789123 = $row111123456789123[0];
															echo "<td>" . $num111123456789123 . "</td>";

															$query2222234567891234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234) or die('Error querying database.');
															$result2222234567891234 = mysqli_query($db, $query2222234567891234);
															$row2222234567891234 = mysqli_fetch_row($result2222234567891234);
															$num2222234567891234 = $row2222234567891234[0];
															echo "<td>" . $num2222234567891234 . "</td>";


															$int111123456789123 = (int)$num111123456789123;
															$float111123456789123 = (float)$num111123456789123;
															$int2222234567891234 = (int)$num2222234567891234;
															$float2222234567891234 = (float)$num2222234567891234;
															$float2abcdefghijklmnopqrst = (float)$num2abcdefghijklmnopqrst;
															$total111123456789123 = ($float111123456789123 + $float2222234567891234) - $float2abcdefghijklmnopqrst;

															echo "<td>" . $total111123456789123 . "</td>";


															$query4444456789123456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456) or die('Error querying database.');
															$result4444456789123456 = mysqli_query($db, $query4444456789123456);
															$row4444456789123456 = mysqli_fetch_row($result4444456789123456);
															$num4444456789123456 = $row4444456789123456[0];
															echo "<td>" . $num4444456789123456 . "</td>";




															$int3333345678912345 = (int)$num4444456789123456;
															$float3333345678912345 = (float)$num4444456789123456;

															$totalwa1111123456789123 = $total111123456789123 + $float3333345678912345;

															echo "<td>" . $totalwa1111123456789123 . "</td>";





															$query6666678912345678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678) or die('Error querying database.');
															$result6666678912345678 = mysqli_query($db, $query6666678912345678);
															$row6666678912345678 = mysqli_fetch_row($result6666678912345678);
															$num6666678912345678 = $row6666678912345678[0];
															echo "<td>" . $num6666678912345678 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">BURETA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstu = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstu) or die('Error querying database.');
															$result2abcdefghijklmnopqrstu = mysqli_query($db, $query2abcdefghijklmnopqrstu);
															$row2abcdefghijklmnopqrstu = mysqli_fetch_row($result2abcdefghijklmnopqrstu);
															$num2abcdefghijklmnopqrstu = $row2abcdefghijklmnopqrstu[0];

															$query1111234567891234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234) or die('Error querying database.');
															$result1111234567891234 = mysqli_query($db, $query1111234567891234);
															$row1111234567891234 = mysqli_fetch_row($result1111234567891234);
															$num1111234567891234 = $row1111234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567891234 . "</td>";

															$query22222345678912345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345) or die('Error querying database.');
															$result22222345678912345 = mysqli_query($db, $query22222345678912345);
															$row22222345678912345 = mysqli_fetch_row($result22222345678912345);
															$num22222345678912345 = $row22222345678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678912345 . "</td>";


															$int1111234567891234 = (int)$num1111234567891234;
															$float1111234567891234 = (float)$num1111234567891234;
															$int22222345678912345 = (int)$num22222345678912345;
															$float22222345678912345 = (float)$num22222345678912345;
															$float2abcdefghijklmnopqrstu = (float)$num2abcdefghijklmnopqrstu;
															$total1111234567891234 = ($float1111234567891234 + $float22222345678912345) - $float2abcdefghijklmnopqrstu;

															echo "<td bgcolor='#27ae60'>" . $total1111234567891234 . "</td>";


															$query44444567891234567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567) or die('Error querying database.');
															$result44444567891234567 = mysqli_query($db, $query44444567891234567);
															$row44444567891234567 = mysqli_fetch_row($result44444567891234567);
															$num44444567891234567 = $row44444567891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891234567 . "</td>";




															$int33333456789123456 = (int)$num44444567891234567;
															$float33333456789123456 = (float)$num44444567891234567;

															$totalwa11111234567891234 = $total1111234567891234 + $float33333456789123456;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567891234 . "</td>";





															$query66666789123456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789) or die('Error querying database.');
															$result66666789123456789 = mysqli_query($db, $query66666789123456789);
															$row66666789123456789 = mysqli_fetch_row($result66666789123456789);
															$num66666789123456789 = $row66666789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123456789 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>VANUABALAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuv = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuv) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuv = mysqli_query($db, $query2abcdefghijklmnopqrstuv);
															$row2abcdefghijklmnopqrstuv = mysqli_fetch_row($result2abcdefghijklmnopqrstuv);
															$num2abcdefghijklmnopqrstuv = $row2abcdefghijklmnopqrstuv[0];


															$query11112345678912345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912345) or die('Error querying database.');
															$result11112345678912345 = mysqli_query($db, $query11112345678912345);
															$row11112345678912345 = mysqli_fetch_row($result11112345678912345);
															$num11112345678912345 = $row11112345678912345[0];
															echo "<td>" . $num11112345678912345 . "</td>";

															$query222223456789123456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123456) or die('Error querying database.');
															$result222223456789123456 = mysqli_query($db, $query222223456789123456);
															$row222223456789123456 = mysqli_fetch_row($result222223456789123456);
															$num222223456789123456 = $row222223456789123456[0];
															echo "<td>" . $num222223456789123456 . "</td>";


															$int11112345678912345 = (int)$num11112345678912345;
															$float11112345678912345 = (float)$num11112345678912345;
															$int222223456789123456 = (int)$num222223456789123456;
															$float222223456789123456 = (float)$num222223456789123456;
															$float2abcdefghijklmnopqrstuv = (float)$num2abcdefghijklmnopqrstuv;
															$total11112345678912345 = ($float11112345678912345 + $float222223456789123456) - $float2abcdefghijklmnopqrstuv;

															echo "<td>" . $total11112345678912345 . "</td>";


															$query444445678912345678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345678) or die('Error querying database.');
															$result444445678912345678 = mysqli_query($db, $query444445678912345678);
															$row444445678912345678 = mysqli_fetch_row($result444445678912345678);
															$num444445678912345678 = $row444445678912345678[0];
															echo "<td>" . $num444445678912345678 . "</td>";




															$int333334567891234567 = (int)$num444445678912345678;
															$float333334567891234567 = (float)$num444445678912345678;

															$totalwa111112345678912345 = $total11112345678912345 + $float333334567891234567;

															echo "<td>" . $totalwa111112345678912345 . "</td>";





															$query666667891234567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567891) or die('Error querying database.');
															$result666667891234567891 = mysqli_query($db, $query666667891234567891);
															$row666667891234567891 = mysqli_fetch_row($result666667891234567891);
															$num666667891234567891 = $row666667891234567891[0];
															echo "<td>" . $num666667891234567891 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">CICIA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvw = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvw) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvw = mysqli_query($db, $query2abcdefghijklmnopqrstuvw);
															$row2abcdefghijklmnopqrstuvw = mysqli_fetch_row($result2abcdefghijklmnopqrstuvw);
															$num2abcdefghijklmnopqrstuvw = $row2abcdefghijklmnopqrstuvw[0];

															$query111123456789123456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123456) or die('Error querying database.');
															$result111123456789123456 = mysqli_query($db, $query111123456789123456);
															$row111123456789123456 = mysqli_fetch_row($result111123456789123456);
															$num111123456789123456 = $row111123456789123456[0];
															echo "<td bgcolor='#27ae60'>" . $num111123456789123456 . "</td>";

															$query2222234567891234567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234567) or die('Error querying database.');
															$result2222234567891234567 = mysqli_query($db, $query2222234567891234567);
															$row2222234567891234567 = mysqli_fetch_row($result2222234567891234567);
															$num2222234567891234567 = $row2222234567891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num2222234567891234567 . "</td>";


															$int111123456789123456 = (int)$num111123456789123456;
															$float111123456789123456 = (float)$num111123456789123456;
															$int2222234567891234567 = (int)$num2222234567891234567;
															$float2222234567891234567 = (float)$num2222234567891234567;
															$float2abcdefghijklmnopqrstuvw = (float)$num2abcdefghijklmnopqrstuvw;
															$total111123456789123456 = ($float111123456789123456 + $float2222234567891234567) - $float2abcdefghijklmnopqrstuvw;

															echo "<td bgcolor='#27ae60'>" . $total111123456789123456 . "</td>";


															$query4444456789123456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456789) or die('Error querying database.');
															$result4444456789123456789 = mysqli_query($db, $query4444456789123456789);
															$row4444456789123456789 = mysqli_fetch_row($result4444456789123456789);
															$num4444456789123456789 = $row4444456789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num4444456789123456789 . "</td>";




															$int3333345678912345678 = (int)$num4444456789123456789;
															$float3333345678912345678 = (float)$num4444456789123456789;

															$totalwa1111123456789123456 = $total111123456789123456 + $float3333345678912345678;

															echo "<td bgcolor='#27ae60'>" . $totalwa1111123456789123456 . "</td>";





															$query6666678912345678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678912) or die('Error querying database.');
															$result6666678912345678912 = mysqli_query($db, $query6666678912345678912);
															$row6666678912345678912 = mysqli_fetch_row($result6666678912345678912);
															$num6666678912345678912 = $row6666678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num6666678912345678912 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>LAKEBA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwx = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwx) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwx = mysqli_query($db, $query2abcdefghijklmnopqrstuvwx);
															$row2abcdefghijklmnopqrstuvwx = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwx);
															$num2abcdefghijklmnopqrstuvwx = $row2abcdefghijklmnopqrstuvwx[0];

															$query1111234567891234567 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234567) or die('Error querying database.');
															$result1111234567891234567 = mysqli_query($db, $query1111234567891234567);
															$row1111234567891234567 = mysqli_fetch_row($result1111234567891234567);
															$num1111234567891234567 = $row1111234567891234567[0];
															echo "<td>" . $num1111234567891234567 . "</td>";

															$query22222345678912345678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345678) or die('Error querying database.');
															$result22222345678912345678 = mysqli_query($db, $query22222345678912345678);
															$row22222345678912345678 = mysqli_fetch_row($result22222345678912345678);
															$num22222345678912345678 = $row22222345678912345678[0];
															echo "<td>" . $num22222345678912345678 . "</td>";


															$int1111234567891234567 = (int)$num1111234567891234567;
															$float1111234567891234567 = (float)$num1111234567891234567;
															$int22222345678912345678 = (int)$num22222345678912345678;
															$float22222345678912345678 = (float)$num22222345678912345678;
															$float2abcdefghijklmnopqrstuvwx = (float)$num2abcdefghijklmnopqrstuvwx;
															$total1111234567891234567 = ($float1111234567891234567 + $float22222345678912345678) - $float2abcdefghijklmnopqrstuvwx;

															echo "<td>" . $total1111234567891234567 . "</td>";


															$query44444567891234567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567891) or die('Error querying database.');
															$result44444567891234567891 = mysqli_query($db, $query44444567891234567891);
															$row44444567891234567891 = mysqli_fetch_row($result44444567891234567891);
															$num44444567891234567891 = $row44444567891234567891[0];
															echo "<td>" . $num44444567891234567891 . "</td>";




															$int33333456789123456789 = (int)$num44444567891234567891;
															$float33333456789123456789 = (float)$num44444567891234567891;

															$totalwa11111234567891234567 = $total1111234567891234567 + $float33333456789123456789;

															echo "<td>" . $totalwa11111234567891234567 . "</td>";





															$query66666789123456789123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789123) or die('Error querying database.');
															$result66666789123456789123 = mysqli_query($db, $query66666789123456789123);
															$row66666789123456789123 = mysqli_fetch_row($result66666789123456789123);
															$num66666789123456789123 = $row66666789123456789123[0];
															echo "<td>" . $num66666789123456789123 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">MOALA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxy = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxy) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxy = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxy);
															$row2abcdefghijklmnopqrstuvwxy = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxy);
															$num2abcdefghijklmnopqrstuvwxy = $row2abcdefghijklmnopqrstuvwxy[0];

															$query11112345678912345678 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912345678) or die('Error querying database.');
															$result11112345678912345678 = mysqli_query($db, $query11112345678912345678);
															$row11112345678912345678 = mysqli_fetch_row($result11112345678912345678);
															$num11112345678912345678 = $row11112345678912345678[0];
															echo "<td bgcolor='#27ae60'>" . $num11112345678912345678 . "</td>";

															$query222223456789123456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123456789) or die('Error querying database.');
															$result222223456789123456789 = mysqli_query($db, $query222223456789123456789);
															$row222223456789123456789 = mysqli_fetch_row($result222223456789123456789);
															$num222223456789123456789 = $row222223456789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num222223456789123456789 . "</td>";


															$int11112345678912345678 = (int)$num11112345678912345678;
															$float11112345678912345678 = (float)$num11112345678912345678;
															$int222223456789123456789 = (int)$num222223456789123456789;
															$float222223456789123456789 = (float)$num222223456789123456789;
															$float2abcdefghijklmnopqrstuvwxy = (float)$num2abcdefghijklmnopqrstuvwxy;
															$total11112345678912345678 = ($float11112345678912345678 + $float222223456789123456789) - $float2abcdefghijklmnopqrstuvwxy;

															echo "<td bgcolor='#27ae60'>" . $total11112345678912345678 . "</td>";


															$query444445678912345678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345678912) or die('Error querying database.');
															$result444445678912345678912 = mysqli_query($db, $query444445678912345678912);
															$row444445678912345678912 = mysqli_fetch_row($result444445678912345678912);
															$num444445678912345678912 = $row444445678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num444445678912345678912 . "</td>";




															$int333334567891234567891 = (int)$num444445678912345678912;
															$float333334567891234567891 = (float)$num444445678912345678912;

															$totalwa111112345678912345678 = $total11112345678912345678 + $float333334567891234567891;

															echo "<td bgcolor='#27ae60'>" . $totalwa111112345678912345678 . "</td>";





															$query666667891234567891234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567891234) or die('Error querying database.');
															$result666667891234567891234 = mysqli_query($db, $query666667891234567891234);
															$row666667891234567891234 = mysqli_fetch_row($result666667891234567891234);
															$num666667891234567891234 = $row666667891234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num666667891234567891234 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>KADAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxyz = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyz) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxyz = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyz);
															$row2abcdefghijklmnopqrstuvwxyz = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxyz);
															$num2abcdefghijklmnopqrstuvwxyz = $row2abcdefghijklmnopqrstuvwxyz[0];

															$query111123456789123456789 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123456789) or die('Error querying database.');
															$result111123456789123456789 = mysqli_query($db, $query111123456789123456789);
															$row111123456789123456789 = mysqli_fetch_row($result111123456789123456789);
															$num111123456789123456789 = $row111123456789123456789[0];
															echo "<td>" . $num111123456789123456789 . "</td>";

															$query2222234567891234567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234567891) or die('Error querying database.');
															$result2222234567891234567891 = mysqli_query($db, $query2222234567891234567891);
															$row2222234567891234567891 = mysqli_fetch_row($result2222234567891234567891);
															$num2222234567891234567891 = $row2222234567891234567891[0];
															echo "<td>" . $num2222234567891234567891 . "</td>";


															$int111123456789123456789 = (int)$num111123456789123456789;
															$float111123456789123456789 = (float)$num111123456789123456789;
															$int2222234567891234567891 = (int)$num2222234567891234567891;
															$float2222234567891234567891 = (float)$num2222234567891234567891;
															$float2abcdefghijklmnopqrstuvwxyz = (float)$num2abcdefghijklmnopqrstuvwxyz;
															$total111123456789123456789 = ($float111123456789123456789 + $float2222234567891234567891) - $float2abcdefghijklmnopqrstuvwxyz;

															echo "<td>" . $total111123456789123456789 . "</td>";


															$query4444456789123456789123 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456789123) or die('Error querying database.');
															$result4444456789123456789123 = mysqli_query($db, $query4444456789123456789123);
															$row4444456789123456789123 = mysqli_fetch_row($result4444456789123456789123);
															$num4444456789123456789123 = $row4444456789123456789123[0];
															echo "<td>" . $num4444456789123456789123 . "</td>";




															$int3333345678912345678912 = (int)$num4444456789123456789123;
															$float3333345678912345678912 = (float)$num4444456789123456789123;

															$totalwa1111123456789123456789 = $total111123456789123456789 + $float3333345678912345678912;

															echo "<td>" . $totalwa1111123456789123456789 . "</td>";





															$query6666678912345678912345 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678912345) or die('Error querying database.');
															$result6666678912345678912345 = mysqli_query($db, $query6666678912345678912345);
															$row6666678912345678912345 = mysqli_fetch_row($result6666678912345678912345);
															$num6666678912345678912345 = $row6666678912345678912345[0];
															echo "<td>" . $num6666678912345678912345 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">ONO-I-LAU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxyza = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(DREPORTED) = YEAR(CURRENT_DATE )AND MONTH(DREPORTED) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyza) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxyza = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyza);
															$row2abcdefghijklmnopqrstuvwxyza = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxyza);
															$num2abcdefghijklmnopqrstuvwxyza = $row2abcdefghijklmnopqrstuvwxyza[0];

															$query1111234567891234567891 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234567891) or die('Error querying database.');
															$result1111234567891234567891 = mysqli_query($db, $query1111234567891234567891);
															$row1111234567891234567891 = mysqli_fetch_row($result1111234567891234567891);
															$num1111234567891234567891 = $row1111234567891234567891[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567891234567891 . "</td>";

															$query22222345678912345678912 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345678912) or die('Error querying database.');
															$result22222345678912345678912 = mysqli_query($db, $query22222345678912345678912);
															$row22222345678912345678912 = mysqli_fetch_row($result22222345678912345678912);
															$num22222345678912345678912 = $row22222345678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678912345678912 . "</td>";


															$int1111234567891234567891 = (int)$num1111234567891234567891;
															$float1111234567891234567891 = (float)$num1111234567891234567891;
															$int22222345678912345678912 = (int)$num22222345678912345678912;
															$float22222345678912345678912 = (float)$num22222345678912345678912;
															$float2abcdefghijklmnopqrstuvwxyza = (float)$num2abcdefghijklmnopqrstuvwxyza;
															$total1111234567891234567891 = ($float1111234567891234567891 + $float22222345678912345678912) - $float2abcdefghijklmnopqrstuvwxyza;

															echo "<td bgcolor='#27ae60'>" . $total1111234567891234567891 . "</td>";


															$query44444567891234567891234 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567891234) or die('Error querying database.');
															$result44444567891234567891234 = mysqli_query($db, $query44444567891234567891234);
															$row44444567891234567891234 = mysqli_fetch_row($result44444567891234567891234);
															$num44444567891234567891234 = $row44444567891234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891234567891234 . "</td>";




															$int33333456789123456789123 = (int)$num44444567891234567891234;
															$float33333456789123456789123 = (float)$num44444567891234567891234;

															$totalwa11111234567891234567891 = $total1111234567891234567891 + $float33333456789123456789123;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567891234567891 . "</td>";





															$query66666789123456789123456 = "SELECT count(*)FROM hazardreport  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789123456) or die('Error querying database.');
															$result66666789123456789123456 = mysqli_query($db, $query66666789123456789123456);
															$row66666789123456789123456 = mysqli_fetch_row($result66666789123456789123456);
															$num66666789123456789123456 = $row66666789123456789123456[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123456789123456 . "</td>";
															mysqli_close($db);

															?>

														</tr>
													</tbody>

												</table>
											</div>
										</div>
										<!-- /.box-body -->
									</div>


								</div>

								<div class="item">
									<div class="box">
										<div class="box-header with-border">
											<h3 class="box-title">MOR </h3>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th colspan="2" bgcolor="#1abc9c">Certificate</th>
															<th colspan="2" bgcolor="#1abc9c">Current Month</th>
															<th colspan="2" bgcolor="#1abc9c">1 Month Ago</th>
															<th colspan="2" bgcolor="#1abc9c">2 Months Ago</th>


														</tr>
													</thead>
													<tbody>
														<tr>
															<th></th>
															<th></th>
															<th>OPEN</th>
															<th>CLOSED</th>
															<th>OPEN</th>
															<th>CLOSED</th>
															<th>OPEN</th>
															<th>CLOSED</th>

														</tr>
														<tr>
															<th bgcolor="#3498db">AMO</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2a = "SELECT count(*)FROM mor  WHERE CERT='AMO' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2a) or die('Error querying database.');
															$result2a = mysqli_query($db, $query2a);
															$row2a = mysqli_fetch_row($result2a);
															$num2a = $row2a[0];



															$query = "SELECT count(*)FROM mor  WHERE CERT='AMO' AND STATUS='OPEN'";
															mysqli_query($db, $query) or die('Error querying database.');
															$result = mysqli_query($db, $query);
															$row = mysqli_fetch_row($result);
															$num = $row[0];
															echo "<td bgcolor='#3498db' >" . $num . "</td>";

															$query2 = "SELECT count(*)FROM mor  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2) or die('Error querying database.');
															$result2 = mysqli_query($db, $query2);
															$row2 = mysqli_fetch_row($result2);
															$num2 = $row2[0];
															echo "<td bgcolor='#3498db'>" . $num2 . "</td>";



															$int = (int)$num;
															$float = (float)$num;
															$int2 = (int)$num2;
															$float2 = (float)$num2;
															$float2a = (float)$num2a;
															$total = ($float + $float2) - $float2a;

															echo "<td bgcolor='#3498db'>" . $total . "</td>";




															include '../../dbconfig.php';
															$query4 = "SELECT count(*)FROM mor  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4) or die('Error querying database.');
															$result4 = mysqli_query($db, $query4);
															$row4 = mysqli_fetch_row($result4);
															$num4 = $row4[0];
															echo "<td bgcolor='#3498db'>" . $num4 . "</td>";

															$int3 = (int)$num4;
															$float3 = (float)$num4;

															$totalwa = $total + $float3;

															echo "<td bgcolor='#3498db'>" . $totalwa . "</td>";


															$query6 = "SELECT count(*)FROM mor  WHERE CERT='AMO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6) or die('Error querying database.');
															$result6 = mysqli_query($db, $query6);
															$row6 = mysqli_fetch_row($result6);
															$num6 = $row[0];
															echo "<td bgcolor='#3498db'>" . $num6 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th>ATSP</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2ab = "SELECT count(*)FROM mor  WHERE CERT='ATSP' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2ab) or die('Error querying database.');
															$result2ab = mysqli_query($db, $query2ab);
															$row2ab = mysqli_fetch_row($result2ab);
															$num2ab = $row2ab[0];

															$query1 = "SELECT count(*)FROM mor  WHERE CERT='ATSP' AND STATUS='OPEN' ";
															mysqli_query($db, $query1) or die('Error querying database.');
															$result1 = mysqli_query($db, $query1);
															$row1 = mysqli_fetch_row($result1);
															$num1 = $row1[0];
															echo "<td>" . $num1 . "</td>";

															$query22 = "SELECT count(*)FROM mor  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22) or die('Error querying database.');
															$result22 = mysqli_query($db, $query22);
															$row22 = mysqli_fetch_row($result22);
															$num22 = $row22[0];
															echo "<td>" . $num22 . "</td>";


															$int1 = (int)$num1;
															$float1 = (float)$num1;
															$int22 = (int)$num22;
															$float22 = (float)$num22;
															$float2ab = (float)$num2ab;
															$total1 = ($float1 + $float22) - $float2ab;

															echo "<td>" . $total1 . "</td>";


															$query44 = "SELECT count(*)FROM mor  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44) or die('Error querying database.');
															$result44 = mysqli_query($db, $query44);
															$row44 = mysqli_fetch_row($result44);
															$num44 = $row44[0];
															echo "<td>" . $num44 . "</td>";




															$int33 = (int)$num44;
															$float33 = (float)$num44;

															$totalwa1 = $total1 + $float33;

															echo "<td>" . $totalwa1 . "</td>";





															$query66 = "SELECT count(*)FROM mor  WHERE CERT='ATSP' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66) or die('Error querying database.');
															$result66 = mysqli_query($db, $query66);
															$row66 = mysqli_fetch_row($result66);
															$num66 = $row66[0];
															echo "<td>" . $num66 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor='#3498db'>AIS</th>
															<th></th>
															<?php

															include '../../dbconfig.php';

															$query2abc = "SELECT count(*)FROM mor  WHERE CERT='ATSP' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abc) or die('Error querying database.');
															$result2abc = mysqli_query($db, $query2abc);
															$row2abc = mysqli_fetch_row($result2abc);
															$num2abc = $row2abc[0];

															$query11 = "SELECT count(*)FROM mor  WHERE CERT='AIS' AND STATUS='OPEN' ";
															mysqli_query($db, $query11) or die('Error querying database.');
															$result11 = mysqli_query($db, $query11);
															$row11 = mysqli_fetch_row($result11);
															$num11 = $row11[0];
															echo "<td bgcolor='#3498db'>" . $num11 . "</td>";

															$query222 = "SELECT count(*)FROM mor  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222) or die('Error querying database.');
															$result222 = mysqli_query($db, $query222);
															$row222 = mysqli_fetch_row($result222);
															$num222 = $row222[0];
															echo "<td bgcolor='#3498db'>" . $num222 . "</td>";


															$int11 = (int)$num11;
															$float11 = (float)$num11;
															$int222 = (int)$num222;
															$float222 = (float)$num222;
															$float2abc = (float)$num2abc;
															$total11 = ($float11 + $float222) - $float2ab;

															echo "<td bgcolor='#3498db'>" . $total11 . "</td>";


															$query444 = "SELECT count(*)FROM mor  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444) or die('Error querying database.');
															$result444 = mysqli_query($db, $query444);
															$row444 = mysqli_fetch_row($result444);
															$num444 = $row444[0];
															echo "<td bgcolor='#3498db'>" . $num444 . "</td>";




															$int333 = (int)$num444;
															$float333 = (float)$num444;

															$totalwa111 = $total11 + $float333;

															echo "<td bgcolor='#3498db'>" . $totalwa111 . "</td>";





															$query666 = "SELECT count(*)FROM mor  WHERE CERT='AIS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666) or die('Error querying database.');
															$result666 = mysqli_query($db, $query666);
															$row666 = mysqli_fetch_row($result666);
															$num666 = $row666[0];
															echo "<td bgcolor='#3498db'>" . $num666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th>ATI</th>
															<th></th>
															<?php

															include '../../dbconfig.php';
															$query2abcd = "SELECT count(*)FROM mor  WHERE CERT='ATI' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcd) or die('Error querying database.');
															$result2abcd = mysqli_query($db, $query2abcd);
															$row2abcd = mysqli_fetch_row($result2abcd);
															$num2abcd = $row2abcd[0];

															$query111 = "SELECT count(*)FROM mor  WHERE CERT='ATI' AND STATUS='OPEN'";
															mysqli_query($db, $query111) or die('Error querying database.');
															$result111 = mysqli_query($db, $query111);
															$row111 = mysqli_fetch_row($result111);
															$num111 = $row111[0];
															echo "<td>" . $num111 . "</td>";

															$query2222 = "SELECT count(*)FROM mor  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222) or die('Error querying database.');
															$result2222 = mysqli_query($db, $query2222);
															$row2222 = mysqli_fetch_row($result2222);
															$num2222 = $row2222[0];
															echo "<td>" . $num2222 . "</td>";


															$int111 = (int)$num111;
															$float111 = (float)$num111;
															$int2222 = (int)$num2222;
															$float2222 = (float)$num2222;
															$float2abcd = (float)$num2abcd;
															$total111 = ($float111 + $float2222) - $float2abcd;

															echo "<td>" . $total111 . "</td>";


															$query4444 = "SELECT count(*)FROM mor  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444) or die('Error querying database.');
															$result4444 = mysqli_query($db, $query4444);
															$row4444 = mysqli_fetch_row($result4444);
															$num4444 = $row4444[0];
															echo "<td>" . $num4444 . "</td>";




															$int3333 = (int)$num4444;
															$float3333 = (float)$num4444;

															$totalwa1111 = $total111 + $float3333;

															echo "<td>" . $totalwa1111 . "</td>";





															$query6666 = "SELECT count(*)FROM mor  WHERE CERT='ATI' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666) or die('Error querying database.');
															$result6666 = mysqli_query($db, $query6666);
															$row6666 = mysqli_fetch_row($result6666);
															$num6666 = $row6666[0];
															echo "<td>" . $num6666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">NADI AD</th>
															<th bgcolor='#95a5a6'>DEPARTMENT</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">ARFFS</th>
															<?php

															include '../../dbconfig.php';

															$query2abcde = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcde) or die('Error querying database.');
															$result2abcde = mysqli_query($db, $query2abcde);
															$row2abcde = mysqli_fetch_row($result2abcde);
															$num2abcde = $row2abcde[0];

															$query1111 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN'";
															mysqli_query($db, $query1111) or die('Error querying database.');
															$result1111 = mysqli_query($db, $query1111);
															$row1111 = mysqli_fetch_row($result1111);
															$num1111 = $row1111[0];
															echo "<td bgcolor='#e67e22'>" . $num1111 . "</td>";

															$query22222 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222) or die('Error querying database.');
															$result22222 = mysqli_query($db, $query22222);
															$row22222 = mysqli_fetch_row($result22222);
															$num22222 = $row22222[0];
															echo "<td bgcolor='#e67e22'>" . $num22222 . "</td>";


															$int1111 = (int)$num1111;
															$float1111 = (float)$num1111;
															$int22222 = (int)$num22222;
															$float22222 = (float)$num22222;
															$float2abcde = (float)$num2abcde;
															$total1111 = ($float1111 + $float22222) - $float2abcde;

															echo "<td bgcolor='#e67e22'>" . $total1111 . "</td>";


															$query44444 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444) or die('Error querying database.');
															$result44444 = mysqli_query($db, $query44444);
															$row44444 = mysqli_fetch_row($result44444);
															$num44444 = $row44444[0];
															echo "<td bgcolor='#e67e22'>" . $num44444 . "</td>";




															$int33333 = (int)$num44444;
															$float33333 = (float)$num44444;

															$totalwa11111 = $total1111 + $float33333;

															echo "<td bgcolor='#e67e22'>" . $totalwa11111 . "</td>";





															$query66666 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666) or die('Error querying database.');
															$result66666 = mysqli_query($db, $query66666);
															$row66666 = mysqli_fetch_row($result66666);
															$num66666 = $row66666[0];
															echo "<td bgcolor='#e67e22'>" . $num66666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>E & M</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdef = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdef) or die('Error querying database.');
															$result2abcdef = mysqli_query($db, $query2abcdef);
															$row2abcdef = mysqli_fetch_row($result2abcdef);
															$num2abcdef = $row2abcdef[0];

															$query11111 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='OPEN'";
															mysqli_query($db, $query11111) or die('Error querying database.');
															$result11111 = mysqli_query($db, $query11111);
															$row11111 = mysqli_fetch_row($result11111);
															$num11111 = $row11111[0];
															echo "<td>" . $num11111 . "</td>";

															$query222222 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222222) or die('Error querying database.');
															$result222222 = mysqli_query($db, $query222222);
															$row222222 = mysqli_fetch_row($result222222);
															$num222222 = $row222222[0];
															echo "<td>" . $num222222 . "</td>";


															$int11111 = (int)$num11111;
															$float11111 = (float)$num11111;
															$int222222 = (int)$num222222;
															$float222222 = (float)$num222222;
															$float2abcdef = (float)$num2abcdef;
															$total11111 = ($float11111 + $float222222) - $float2abcdef;

															echo "<td>" . $total11111 . "</td>";


															$query444444 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444444) or die('Error querying database.');
															$result444444 = mysqli_query($db, $query444444);
															$row444444 = mysqli_fetch_row($result444444);
															$num444444 = $row444444[0];
															echo "<td>" . $num444444 . "</td>";




															$int333333 = (int)$num444444;
															$float333333 = (float)$num444444;

															$totalwa111111 = $total11111 + $float333333;

															echo "<td>" . $totalwa111111 . "</td>";





															$query666666 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666666) or die('Error querying database.');
															$result666666 = mysqli_query($db, $query666666);
															$row666666 = mysqli_fetch_row($result666666);
															$num666666 = $row666666[0];
															echo "<td>" . $num666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">AIRSIDE</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefg = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefg) or die('Error querying database.');
															$result2abcdefg = mysqli_query($db, $query2abcdefg);
															$row2abcdefg = mysqli_fetch_row($result2abcdefg);
															$num2abcdefg = $row2abcdefg[0];

															$query111111 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='OPEN'";
															mysqli_query($db, $query111111) or die('Error querying database.');
															$result111111 = mysqli_query($db, $query111111);
															$row111111 = mysqli_fetch_row($result111111);
															$num111111 = $row111111[0];
															echo "<td bgcolor='#e67e22'>" . $num111111 . "</td>";

															$query2222222 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222222) or die('Error querying database.');
															$result2222222 = mysqli_query($db, $query2222222);
															$row2222222 = mysqli_fetch_row($result2222222);
															$num2222222 = $row2222222[0];
															echo "<td bgcolor='#e67e22'>" . $num2222222 . "</td>";


															$int111111 = (int)$num111111;
															$float111111 = (float)$num111111;
															$int2222222 = (int)$num2222222;
															$float2222222 = (float)$num2222222;
															$float2abcdefg = (float)$num2abcdefg;
															$total111111 = ($float111111 + $float2222222) - $float2abcdefg;

															echo "<td bgcolor='#e67e22'>" . $total111111 . "</td>";


															$query4444444 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444444) or die('Error querying database.');
															$result4444444 = mysqli_query($db, $query4444444);
															$row4444444 = mysqli_fetch_row($result4444444);
															$num4444444 = $row4444444[0];
															echo "<td bgcolor='#e67e22'>" . $num4444444 . "</td>";




															$int3333333 = (int)$num4444444;
															$float3333333 = (float)$num4444444;

															$totalwa1111111 = $total111111 + $float3333333;

															echo "<td bgcolor='#e67e22'>" . $totalwa1111111 . "</td>";





															$query6666666 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666666) or die('Error querying database.');
															$result6666666 = mysqli_query($db, $query6666666);
															$row6666666 = mysqli_fetch_row($result6666666);
															$num6666666 = $row6666666[0];
															echo "<td bgcolor='#e67e22'>" . $num6666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MBCW</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefgh = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefgh) or die('Error querying database.');
															$result2abcdefgh = mysqli_query($db, $query2abcdefgh);
															$row2abcdefgh = mysqli_fetch_row($result2abcdefgh);
															$num2abcdefgh = $row2abcdefgh[0];

															$query1111111 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query1111111) or die('Error querying database.');
															$result1111111 = mysqli_query($db, $query1111111);
															$row1111111 = mysqli_fetch_row($result1111111);
															$num1111111 = $row1111111[0];
															echo "<td>" . $num1111111 . "</td>";

															$query22222222 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222222) or die('Error querying database.');
															$result22222222 = mysqli_query($db, $query22222222);
															$row22222222 = mysqli_fetch_row($result22222222);
															$num22222222 = $row22222222[0];
															echo "<td>" . $num22222222 . "</td>";


															$int1111111 = (int)$num1111111;
															$float1111111 = (float)$num1111111;
															$int22222222 = (int)$num22222222;
															$float22222222 = (float)$num22222222;
															$float2abcdefgh = (float)$num2abcdefgh;
															$total1111111 = ($float1111111 + $float22222222) - $float2abcdefgh;

															echo "<td>" . $total1111111 . "</td>";


															$query44444444 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444444) or die('Error querying database.');
															$result44444444 = mysqli_query($db, $query44444444);
															$row44444444 = mysqli_fetch_row($result44444444);
															$num44444444 = $row44444444[0];
															echo "<td>" . $num44444444 . "</td>";




															$int33333333 = (int)$num44444444;
															$float33333333 = (float)$num44444444;

															$totalwa11111111 = $total1111111 + $float33333333;

															echo "<td>" . $totalwa11111111 . "</td>";





															$query66666666 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666666) or die('Error querying database.');
															$result66666666 = mysqli_query($db, $query66666666);
															$row66666666 = mysqli_fetch_row($result66666666);
															$num66666666 = $row66666666[0];
															echo "<td>" . $num66666666 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MSRM</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghi = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghi) or die('Error querying database.');
															$result2abcdefghi = mysqli_query($db, $query2abcdefghi);
															$row2abcdefghi = mysqli_fetch_row($result2abcdefghi);
															$num2abcdefghi = $row2abcdefghi[0];

															$query11111111 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='OPEN'";
															mysqli_query($db, $query11111111) or die('Error querying database.');
															$result11111111 = mysqli_query($db, $query11111111);
															$row11111111 = mysqli_fetch_row($result11111111);
															$num11111111 = $row11111111[0];
															echo "<td bgcolor='#e67e22'>" . $num11111111 . "</td>";

															$query222222222 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222222222) or die('Error querying database.');
															$result222222222 = mysqli_query($db, $query222222222);
															$row222222222 = mysqli_fetch_row($result222222222);
															$num222222222 = $row222222222[0];
															echo "<td bgcolor='#e67e22'>" . $num222222222 . "</td>";


															$int11111111 = (int)$num11111111;
															$float11111111 = (float)$num11111111;
															$int222222222 = (int)$num222222222;
															$float222222222 = (float)$num222222222;
															$float2abcdefghi = (float)$num2abcdefghi;
															$total11111111 = ($float11111111 + $float222222222) - $float2abcdefghi;

															echo "<td bgcolor='#e67e22'>" . $total11111111 . "</td>";


															$query444444444 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444444444) or die('Error querying database.');
															$result444444444 = mysqli_query($db, $query444444444);
															$row444444444 = mysqli_fetch_row($result444444444);
															$num444444444 = $row444444444[0];
															echo "<td bgcolor='#e67e22'>" . $num444444444 . "</td>";




															$int333333333 = (int)$num444444444;
															$float333333333 = (float)$num444444444;

															$totalwa111111111 = $total11111111 + $float333333333;

															echo "<td bgcolor='#e67e22'>" . $totalwa111111111 . "</td>";





															$query666666666 = "SELECT count(*)FROM mor  WHERE CERT='Nadi AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666666666) or die('Error querying database.');
															$result666666666 = mysqli_query($db, $query666666666);
															$row666666666 = mysqli_fetch_row($result666666666);
															$num666666666 = $row666666666[0];
															echo "<td bgcolor='#e67e22'>" . $num666666666 . "</td>";
															mysqli_close($db);

															?>
														</tr>
														<tr>
															<th bgcolor="#3498db">NAUSORI AD</th>
															<th bgcolor='#95a5a6'>DEPARTMENT</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">ARFFS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghij = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghij) or die('Error querying database.');
															$result2abcdefghij = mysqli_query($db, $query2abcdefghij);
															$row2abcdefghij = mysqli_fetch_row($result2abcdefghij);
															$num2abcdefghij = $row2abcdefghij[0];

															$query11112 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='OPEN'";
															mysqli_query($db, $query11112) or die('Error querying database.');
															$result11112 = mysqli_query($db, $query11112);
															$row11112 = mysqli_fetch_row($result11112);
															$num11112 = $row11112[0];
															echo "<td bgcolor='#e67e22'>" . $num11112 . "</td>";

															$query222223 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223) or die('Error querying database.');
															$result222223 = mysqli_query($db, $query222223);
															$row222223 = mysqli_fetch_row($result222223);
															$num222223 = $row222223[0];
															echo "<td bgcolor='#e67e22'>" . $num222223 . "</td>";


															$int11112 = (int)$num11112;
															$float11112 = (float)$num11112;
															$int222223 = (int)$num222223;
															$float222223 = (float)$num222223;
															$float2abcdefghij = (float)$num2abcdefghij;
															$total11112 = ($float11112 + $float222223) - $float2abcdefghij;

															echo "<td bgcolor='#e67e22'>" . $total11112 . "</td>";


															$query444445 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445) or die('Error querying database.');
															$result444445 = mysqli_query($db, $query444445);
															$row444445 = mysqli_fetch_row($result444445);
															$num444445 = $row444445[0];
															echo "<td bgcolor='#e67e22'>" . $num444445 . "</td>";




															$int333334 = (int)$num444445;
															$float333334 = (float)$num444445;

															$totalwa111112 = $total11112 + $float333334;

															echo "<td bgcolor='#e67e22'>" . $totalwa111112 . "</td>";





															$query666667 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MARFFS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667) or die('Error querying database.');
															$result666667 = mysqli_query($db, $query666667);
															$row666667 = mysqli_fetch_row($result666667);
															$num666667 = $row666667[0];
															echo "<td bgcolor='#e67e22'>" . $num666667 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>E & M</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijk = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijk) or die('Error querying database.');
															$result2abcdefghijk = mysqli_query($db, $query2abcdefghijk);
															$row2abcdefghijk = mysqli_fetch_row($result2abcdefghijk);
															$num2abcdefghijk = $row2abcdefghijk[0];

															$query111123 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='OPEN'";
															mysqli_query($db, $query111123) or die('Error querying database.');
															$result111123 = mysqli_query($db, $query111123);
															$row111123 = mysqli_fetch_row($result111123);
															$num111123 = $row111123[0];
															echo "<td>" . $num111123 . "</td>";

															$query2222234 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234) or die('Error querying database.');
															$result2222234 = mysqli_query($db, $query2222234);
															$row2222234 = mysqli_fetch_row($result2222234);
															$num2222234 = $row2222234[0];
															echo "<td>" . $num2222234 . "</td>";


															$int111123 = (int)$num111123;
															$float111123 = (float)$num11112;
															$int2222234 = (int)$num2222234;
															$float2222234 = (float)$num2222234;
															$float2abcdefghijk = (float)$num2abcdefghijk;
															$total111123 = ($float111123 + $float2222234) - $float2abcdefghijk;

															echo "<td>" . $total111123 . "</td>";


															$query4444456 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456) or die('Error querying database.');
															$result4444456 = mysqli_query($db, $query4444456);
															$row4444456 = mysqli_fetch_row($result4444456);
															$num4444456 = $row4444456[0];
															echo "<td>" . $num4444456 . "</td>";




															$int3333345 = (int)$num4444456;
															$float3333345 = (float)$num4444456;

															$totalwa1111123 = $total111123 + $float3333345;

															echo "<td>" . $totalwa1111123 . "</td>";





															$query6666678 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MEMS' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678) or die('Error querying database.');
															$result6666678 = mysqli_query($db, $query6666678);
															$row6666678 = mysqli_fetch_row($result6666678);
															$num6666678 = $row6666678[0];
															echo "<td>" . $num6666678 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">AIRSIDE</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijkl = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijkl) or die('Error querying database.');
															$result2abcdefghijkl = mysqli_query($db, $query2abcdefghijkl);
															$row2abcdefghijkl = mysqli_fetch_row($result2abcdefghijkl);
															$num2abcdefghijkl = $row2abcdefghijkl[0];

															$query1111234 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234) or die('Error querying database.');
															$result1111234 = mysqli_query($db, $query1111234);
															$row1111234 = mysqli_fetch_row($result1111234);
															$num1111234 = $row1111234[0];
															echo "<td bgcolor='#e67e22'>" . $num1111234 . "</td>";

															$query22222345 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345) or die('Error querying database.');
															$result22222345 = mysqli_query($db, $query22222345);
															$row22222345 = mysqli_fetch_row($result22222345);
															$num22222345 = $row22222345[0];
															echo "<td bgcolor='#e67e22'>" . $num22222345 . "</td>";


															$int1111234 = (int)$num1111234;
															$float1111234 = (float)$num111123;
															$int22222345 = (int)$num22222345;
															$float22222345 = (float)$num22222345;
															$float2abcdefghijkl = (float)$num2abcdefghijkl;
															$total1111234 = ($float1111234 + $float22222345) - $float2abcdefghijkl;

															echo "<td bgcolor='#e67e22'>" . $total1111234 . "</td>";


															$query44444567 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567) or die('Error querying database.');
															$result44444567 = mysqli_query($db, $query44444567);
															$row44444567 = mysqli_fetch_row($result44444567);
															$num44444567 = $row44444567[0];
															echo "<td bgcolor='#e67e22'>" . $num44444567 . "</td>";




															$int33333456 = (int)$num44444567;
															$float33333456 = (float)$num44444567;

															$totalwa11111234 = $total1111234 + $float33333456;

															echo "<td bgcolor='#e67e22'>" . $totalwa11111234 . "</td>";





															$query66666789 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MAO' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789) or die('Error querying database.');
															$result66666789 = mysqli_query($db, $query66666789);
															$row66666789 = mysqli_fetch_row($result66666789);
															$num66666789 = $row66666789[0];
															echo "<td bgcolor='#e67e22'>" . $num66666789 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MBCW</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklm = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklm) or die('Error querying database.');
															$result2abcdefghijklm = mysqli_query($db, $query2abcdefghijklm);
															$row2abcdefghijklm = mysqli_fetch_row($result2abcdefghijklm);
															$num2abcdefghijklm = $row2abcdefghijklm[0];

															$query11112345 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345) or die('Error querying database.');
															$result11112345 = mysqli_query($db, $query11112345);
															$row11112345 = mysqli_fetch_row($result11112345);
															$num11112345 = $row11112345[0];
															echo "<td>" . $num11112345 . "</td>";

															$query222223456 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456) or die('Error querying database.');
															$result222223456 = mysqli_query($db, $query222223456);
															$row222223456 = mysqli_fetch_row($result222223456);
															$num222223456 = $row222223456[0];
															echo "<td>" . $num222223456 . "</td>";


															$int11112345 = (int)$num11112345;
															$float11112345 = (float)$num1111234;
															$int222223456 = (int)$num222223456;
															$float222223456 = (float)$num222223456;
															$float2abcdefghijklm = (float)$num2abcdefghijklm;
															$total11112345 = ($float11112345 + $float222223456) - $float2abcdefghijklm;

															echo "<td>" . $total11112345 . "</td>";


															$query444445678 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678) or die('Error querying database.');
															$result444445678 = mysqli_query($db, $query444445678);
															$row444445678 = mysqli_fetch_row($result444445678);
															$num444445678 = $row444445678[0];
															echo "<td>" . $num444445678 . "</td>";




															$int333334567 = (int)$num444445678;
															$float333334567 = (float)$num444445678;

															$totalwa111112345 = $total11112345 + $float333334567;

															echo "<td>" . $totalwa111112345 . "</td>";





															$query666667891 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891) or die('Error querying database.');
															$result666667891 = mysqli_query($db, $query666667891);
															$row666667891 = mysqli_fetch_row($result666667891);
															$num666667891 = $row666667891[0];
															echo "<td>" . $num666667891 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#e67e22">MSRM</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmn = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmn) or die('Error querying database.');
															$result2abcdefghijklmn = mysqli_query($db, $query2abcdefghijklmn);
															$row2abcdefghijklmn = mysqli_fetch_row($result2abcdefghijklmn);
															$num2abcdefghijklmn = $row2abcdefghijklmn[0];

															$query111123456 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456) or die('Error querying database.');
															$result111123456 = mysqli_query($db, $query111123456);
															$row111123456 = mysqli_fetch_row($result111123456);
															$num111123456 = $row111123456[0];
															echo "<td bgcolor='#e67e22'>" . $num111123456 . "</td>";

															$query2222234567 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567) or die('Error querying database.');
															$result2222234567 = mysqli_query($db, $query2222234567);
															$row2222234567 = mysqli_fetch_row($result2222234567);
															$num2222234567 = $row2222234567[0];
															echo "<td bgcolor='#e67e22'>" . $num2222234567 . "</td>";


															$int111123456 = (int)$num111123456;
															$float111123456 = (float)$num11112345;
															$int2222234567 = (int)$num2222234567;
															$float2222234567 = (float)$num2222234567;
															$float2abcdefghijklmn = (float)$num2abcdefghijklmn;
															$total111123456 = ($float111123456 + $float2222234567) - $float2abcdefghijklmn;

															echo "<td bgcolor='#e67e22'>" . $total111123456 . "</td>";


															$query4444456789 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789) or die('Error querying database.');
															$result4444456789 = mysqli_query($db, $query4444456789);
															$row4444456789 = mysqli_fetch_row($result4444456789);
															$num4444456789 = $row4444456789[0];
															echo "<td bgcolor='#e67e22'>" . $num4444456789 . "</td>";




															$int3333345678 = (int)$num4444456789;
															$float3333345678 = (float)$num4444456789;

															$totalwa1111123456 = $total111123456 + $float3333345678;

															echo "<td bgcolor='#e67e22'>" . $totalwa1111123456 . "</td>";





															$query6666678912 = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MSRM' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912) or die('Error querying database.');
															$result6666678912 = mysqli_query($db, $query6666678912);
															$row6666678912 = mysqli_fetch_row($result6666678912);
															$num6666678912 = $row6666678912[0];
															echo "<td bgcolor='#e67e22'>" . $num6666678912 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>MNOS</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmapmnamor = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmapmnamor) or die('Error querying database.');
															$result2abcdefghijklmapmnamor = mysqli_query($db, $query2abcdefghijklmapmnamor);
															$row2abcdefghijklmapmnamor = mysqli_fetch_row($result2abcdefghijklmapmnamor);
															$num2abcdefghijklmapmnamor = $row2abcdefghijklmapmnamor[0];

															$query11112345apmnamor = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345apmnamor) or die('Error querying database.');
															$result11112345apmnamor = mysqli_query($db, $query11112345apmnamor);
															$row11112345apmnamor = mysqli_fetch_row($result11112345apmnamor);
															$num11112345apmnamor = $row11112345apmnamor[0];
															echo "<td>" . $num11112345apmnamor . "</td>";

															$query222223456apmnamor = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456apmnamor) or die('Error querying database.');
															$result222223456apmnamor = mysqli_query($db, $query222223456apmnamor);
															$row222223456apmnamor = mysqli_fetch_row($result222223456apmnamor);
															$num222223456apmnamor = $row222223456apmnamor[0];
															echo "<td>" . $num222223456apmnamor . "</td>";


															$int11112345apmnamor = (int)$num11112345apmnamor;
															$float11112345apmnamor = (float)$num11112345apmnamor;
															$int222223456apmnamor = (int)$num222223456apmnamor;
															$float222223456apmnamor = (float)$num222223456apmnamor;
															$float2abcdefghijklmapmnamor = (float)$num2abcdefghijklmapmnamor;
															$total11112345apmnamor = ($float11112345apmnamor + $float222223456apmnamor) - $float2abcdefghijklmapmnamor;

															echo "<td>" . $total11112345apmnamor . "</td>";


															$query444445678apmnamor = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678apmnamor) or die('Error querying database.');
															$result444445678apmnamor = mysqli_query($db, $query444445678apmnamor);
															$row444445678apmnamor = mysqli_fetch_row($result444445678apmnamor);
															$num444445678apmnamor = $row444445678apmnamor[0];
															echo "<td>" . $num444445678apmnamor . "</td>";




															$int333334567apmnamor = (int)$num444445678apmnamor;
															$float333334567apmnamor = (float)$num444445678apmnamor;

															$totalwa111112345apmnamor = $total11112345apmnamor + $float333334567apmnamor;

															echo "<td>" . $totalwa111112345apmnamor . "</td>";





															$query666667891apmnamor = "SELECT count(*)FROM mor  WHERE CERT='Nausori AD' AND RISKOWNER='MBCW' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891apmnamor) or die('Error querying database.');
															$result666667891apmnamor = mysqli_query($db, $query666667891apmnamor);
															$row666667891apmnamor = mysqli_fetch_row($result666667891apmnamor);
															$num666667891apmnamor = $row666667891apmnamor[0];
															echo "<td>" . $num666667891apmnamor . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th bgcolor="#3498db">OUTER STATIONS</th>
															<th bgcolor='#95a5a6'>AIRPORTS</th>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">LABASA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmno = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmno) or die('Error querying database.');
															$result2abcdefghijklmno = mysqli_query($db, $query2abcdefghijklmno);
															$row2abcdefghijklmno = mysqli_fetch_row($result2abcdefghijklmno);
															$num2abcdefghijklmno = $row2abcdefghijklmno[0];

															$query1111234567 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567) or die('Error querying database.');
															$result1111234567 = mysqli_query($db, $query1111234567);
															$row1111234567 = mysqli_fetch_row($result1111234567);
															$num1111234567 = $row1111234567[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567 . "</td>";

															$query22222345678 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678) or die('Error querying database.');
															$result22222345678 = mysqli_query($db, $query22222345678);
															$row22222345678 = mysqli_fetch_row($result22222345678);
															$num22222345678 = $row22222345678[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678 . "</td>";


															$int1111234567 = (int)$num1111234567;
															$float1111234567 = (float)$num111123456;
															$int22222345678 = (int)$num22222345678;
															$float22222345678 = (float)$num22222345678;
															$float2abcdefghijklmno = (float)$num2abcdefghijklmno;
															$total1111234567 = ($float1111234567 + $float22222345678) - $float2abcdefghijklmno;

															echo "<td bgcolor='#27ae60'>" . $total1111234567 . "</td>";


															$query44444567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891) or die('Error querying database.');
															$result44444567891 = mysqli_query($db, $query44444567891);
															$row44444567891 = mysqli_fetch_row($result44444567891);
															$num44444567891 = $row44444567891[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891 . "</td>";




															$int33333456789 = (int)$num44444567891;
															$float33333456789 = (float)$num44444567891;

															$totalwa11111234567 = $total1111234567 + $float33333456789;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567 . "</td>";





															$query66666789123 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Labasa' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123) or die('Error querying database.');
															$result66666789123 = mysqli_query($db, $query66666789123);
															$row66666789123 = mysqli_fetch_row($result66666789123);
															$num66666789123 = $row66666789123[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>SAVUSAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnop = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnop) or die('Error querying database.');
															$result2abcdefghijklmnop = mysqli_query($db, $query2abcdefghijklmnop);
															$row2abcdefghijklmnop = mysqli_fetch_row($result2abcdefghijklmnop);
															$num2abcdefghijklmnop = $row2abcdefghijklmnop[0];

															$query11112345678 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678) or die('Error querying database.');
															$result11112345678 = mysqli_query($db, $query11112345678);
															$row11112345678 = mysqli_fetch_row($result11112345678);
															$num11112345678 = $row11112345678[0];
															echo "<td>" . $num11112345678 . "</td>";

															$query222223456789 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789) or die('Error querying database.');
															$result222223456789 = mysqli_query($db, $query222223456789);
															$row222223456789 = mysqli_fetch_row($result222223456789);
															$num222223456789 = $row222223456789[0];
															echo "<td>" . $num222223456789 . "</td>";


															$int11112345678 = (int)$num11112345678;
															$float11112345678 = (float)$num11112345678;
															$int222223456789 = (int)$num222223456789;
															$float222223456789 = (float)$num222223456789;
															$float2abcdefghijklmnop = (float)$num2abcdefghijklmnop;
															$total11112345678 = ($float11112345678 + $float222223456789) - $float2abcdefghijklmnop;

															echo "<td>" . $total11112345678 . "</td>";


															$query444445678912 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912) or die('Error querying database.');
															$result444445678912 = mysqli_query($db, $query444445678912);
															$row444445678912 = mysqli_fetch_row($result444445678912);
															$num444445678912 = $row444445678912[0];
															echo "<td>" . $num444445678912 . "</td>";




															$int333334567891 = (int)$num444445678912;
															$float333334567891 = (float)$num444445678912;

															$totalwa111112345678 = $total11112345678 + $float333334567891;

															echo "<td>" . $totalwa111112345678 . "</td>";





															$query666667891234 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Savusavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234) or die('Error querying database.');
															$result666667891234 = mysqli_query($db, $query666667891234);
															$row666667891234 = mysqli_fetch_row($result666667891234);
															$num666667891234 = $row666667891234[0];
															echo "<td>" . $num666667891234 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">MATEI</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopq = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopq) or die('Error querying database.');
															$result2abcdefghijklmnopq = mysqli_query($db, $query2abcdefghijklmnopq);
															$row2abcdefghijklmnopq = mysqli_fetch_row($result2abcdefghijklmnopq);
															$num2abcdefghijklmnopq = $row2abcdefghijklmnopq[0];

															$query111123456789 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789) or die('Error querying database.');
															$result111123456789 = mysqli_query($db, $query111123456789);
															$row111123456789 = mysqli_fetch_row($result111123456789);
															$num111123456789 = $row111123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num111123456789 . "</td>";

															$query2222234567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891) or die('Error querying database.');
															$result2222234567891 = mysqli_query($db, $query2222234567891);
															$row2222234567891 = mysqli_fetch_row($result2222234567891);
															$num2222234567891 = $row2222234567891[0];
															echo "<td bgcolor='#27ae60'>" . $num2222234567891 . "</td>";


															$int111123456789 = (int)$num111123456789;
															$float111123456789 = (float)$num111123456789;
															$int2222234567891 = (int)$num2222234567891;
															$float2222234567891 = (float)$num2222234567891;
															$float2abcdefghijklmnopq = (float)$num2abcdefghijklmnopq;
															$total111123456789 = ($float111123456789 + $float2222234567891) - $float2abcdefghijklmnopq;

															echo "<td bgcolor='#27ae60'>" . $total111123456789 . "</td>";


															$query4444456789123 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123) or die('Error querying database.');
															$result4444456789123 = mysqli_query($db, $query4444456789123);
															$row4444456789123 = mysqli_fetch_row($result4444456789123);
															$num4444456789123 = $row4444456789123[0];
															echo "<td bgcolor='#27ae60'>" . $num4444456789123 . "</td>";




															$int3333345678912 = (int)$num4444456789123;
															$float3333345678912 = (float)$num4444456789123;

															$totalwa1111123456789 = $total111123456789 + $float3333345678912;

															echo "<td bgcolor='#27ae60'>" . $totalwa1111123456789 . "</td>";





															$query6666678912345 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Matei' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345) or die('Error querying database.');
															$result6666678912345 = mysqli_query($db, $query6666678912345);
															$row6666678912345 = mysqli_fetch_row($result6666678912345);
															$num6666678912345 = $row6666678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num6666678912345 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>ROTUMA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqr = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqr) or die('Error querying database.');
															$result2abcdefghijklmnopqr = mysqli_query($db, $query2abcdefghijklmnopqr);
															$row2abcdefghijklmnopqr = mysqli_fetch_row($result2abcdefghijklmnopqr);
															$num2abcdefghijklmnopqr = $row2abcdefghijklmnopqr[0];

															$query1111234567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891) or die('Error querying database.');
															$result1111234567891 = mysqli_query($db, $query1111234567891);
															$row1111234567891 = mysqli_fetch_row($result1111234567891);
															$num1111234567891 = $row1111234567891[0];
															echo "<td>" . $num1111234567891 . "</td>";

															$query22222345678912 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912) or die('Error querying database.');
															$result22222345678912 = mysqli_query($db, $query22222345678912);
															$row22222345678912 = mysqli_fetch_row($result22222345678912);
															$num22222345678912 = $row22222345678912[0];
															echo "<td>" . $num22222345678912 . "</td>";


															$int1111234567891 = (int)$num1111234567891;
															$float1111234567891 = (float)$num1111234567891;
															$int22222345678912 = (int)$num22222345678912;
															$float22222345678912 = (float)$num22222345678912;
															$float2abcdefghijklmnopqr = (float)$num2abcdefghijklmnopqr;
															$total1111234567891 = ($float1111234567891 + $float22222345678912) - $float2abcdefghijklmnopqr;

															echo "<td>" . $total1111234567891 . "</td>";


															$query44444567891234 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234) or die('Error querying database.');
															$result44444567891234 = mysqli_query($db, $query44444567891234);
															$row44444567891234 = mysqli_fetch_row($result44444567891234);
															$num44444567891234 = $row44444567891234[0];
															echo "<td>" . $num44444567891234 . "</td>";




															$int33333456789123 = (int)$num44444567891234;
															$float33333456789123 = (float)$num44444567891234;

															$totalwa11111234567891 = $total1111234567891 + $float33333456789123;

															echo "<td>" . $totalwa11111234567891 . "</td>";





															$query66666789123456 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Rotuma' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456) or die('Error querying database.');
															$result66666789123456 = mysqli_query($db, $query66666789123456);
															$row66666789123456 = mysqli_fetch_row($result66666789123456);
															$num66666789123456 = $row66666789123456[0];
															echo "<td>" . $num66666789123456 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">KORO</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijklmnopqrs = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrs) or die('Error querying database.');
															$result2abcdefghijklmnopqrs = mysqli_query($db, $query2abcdefghijklmnopqrs);
															$row2abcdefghijklmnopqrs = mysqli_fetch_row($result2abcdefghijklmnopqrs);
															$num2abcdefghijklmnopqrs = $row2abcdefghijklmnopqrs[0];

															$query11112345678912 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912) or die('Error querying database.');
															$result11112345678912 = mysqli_query($db, $query11112345678912);
															$row11112345678912 = mysqli_fetch_row($result11112345678912);
															$num11112345678912 = $row11112345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num11112345678912 . "</td>";

															$query222223456789123 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123) or die('Error querying database.');
															$result222223456789123 = mysqli_query($db, $query222223456789123);
															$row222223456789123 = mysqli_fetch_row($result222223456789123);
															$num222223456789123 = $row222223456789123[0];
															echo "<td bgcolor='#27ae60'>" . $num222223456789123 . "</td>";


															$int11112345678912 = (int)$num11112345678912;
															$float11112345678912 = (float)$num11112345678912;
															$int222223456789123 = (int)$num222223456789123;
															$float222223456789123 = (float)$num222223456789123;
															$float2abcdefghijklmnopqrs = (float)$num2abcdefghijklmnopqrs;
															$total11112345678912 = ($float11112345678912 + $float222223456789123) - $float2abcdefghijklmnopqrs;

															echo "<td bgcolor='#27ae60'>" . $total11112345678912 . "</td>";


															$query444445678912345 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345) or die('Error querying database.');
															$result444445678912345 = mysqli_query($db, $query444445678912345);
															$row444445678912345 = mysqli_fetch_row($result444445678912345);
															$num444445678912345 = $row444445678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num444445678912345 . "</td>";




															$int333334567891234 = (int)$num444445678912345;
															$float333334567891234 = (float)$num444445678912345;

															$totalwa111112345678912 = $total11112345678912 + $float333334567891234;

															echo "<td bgcolor='#27ae60'>" . $totalwa111112345678912 . "</td>";





															$query666667891234567 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Koro' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567) or die('Error querying database.');
															$result666667891234567 = mysqli_query($db, $query666667891234567);
															$row666667891234567 = mysqli_fetch_row($result666667891234567);
															$num666667891234567 = $row666667891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num666667891234567 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>GAU</th>
															<?php

															include '../../dbconfig.php';

															$query2abcdefghijklmnopqrst = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrst) or die('Error querying database.');
															$result2abcdefghijklmnopqrst = mysqli_query($db, $query2abcdefghijklmnopqrst);
															$row2abcdefghijklmnopqrst = mysqli_fetch_row($result2abcdefghijklmnopqrst);
															$num2abcdefghijklmnopqrst = $row2abcdefghijklmnopqrst[0];

															$query111123456789123 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123) or die('Error querying database.');
															$result111123456789123 = mysqli_query($db, $query111123456789123);
															$row111123456789123 = mysqli_fetch_row($result111123456789123);
															$num111123456789123 = $row111123456789123[0];
															echo "<td>" . $num111123456789123 . "</td>";

															$query2222234567891234 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234) or die('Error querying database.');
															$result2222234567891234 = mysqli_query($db, $query2222234567891234);
															$row2222234567891234 = mysqli_fetch_row($result2222234567891234);
															$num2222234567891234 = $row2222234567891234[0];
															echo "<td>" . $num2222234567891234 . "</td>";


															$int111123456789123 = (int)$num111123456789123;
															$float111123456789123 = (float)$num111123456789123;
															$int2222234567891234 = (int)$num2222234567891234;
															$float2222234567891234 = (float)$num2222234567891234;
															$float2abcdefghijklmnopqrst = (float)$num2abcdefghijklmnopqrst;
															$total111123456789123 = ($float111123456789123 + $float2222234567891234) - $float2abcdefghijklmnopqrst;

															echo "<td>" . $total111123456789123 . "</td>";


															$query4444456789123456 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456) or die('Error querying database.');
															$result4444456789123456 = mysqli_query($db, $query4444456789123456);
															$row4444456789123456 = mysqli_fetch_row($result4444456789123456);
															$num4444456789123456 = $row4444456789123456[0];
															echo "<td>" . $num4444456789123456 . "</td>";




															$int3333345678912345 = (int)$num4444456789123456;
															$float3333345678912345 = (float)$num4444456789123456;

															$totalwa1111123456789123 = $total111123456789123 + $float3333345678912345;

															echo "<td>" . $totalwa1111123456789123 . "</td>";





															$query6666678912345678 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Gau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678) or die('Error querying database.');
															$result6666678912345678 = mysqli_query($db, $query6666678912345678);
															$row6666678912345678 = mysqli_fetch_row($result6666678912345678);
															$num6666678912345678 = $row6666678912345678[0];
															echo "<td>" . $num6666678912345678 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">BURETA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstu = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstu) or die('Error querying database.');
															$result2abcdefghijklmnopqrstu = mysqli_query($db, $query2abcdefghijklmnopqrstu);
															$row2abcdefghijklmnopqrstu = mysqli_fetch_row($result2abcdefghijklmnopqrstu);
															$num2abcdefghijklmnopqrstu = $row2abcdefghijklmnopqrstu[0];

															$query1111234567891234 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234) or die('Error querying database.');
															$result1111234567891234 = mysqli_query($db, $query1111234567891234);
															$row1111234567891234 = mysqli_fetch_row($result1111234567891234);
															$num1111234567891234 = $row1111234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567891234 . "</td>";

															$query22222345678912345 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345) or die('Error querying database.');
															$result22222345678912345 = mysqli_query($db, $query22222345678912345);
															$row22222345678912345 = mysqli_fetch_row($result22222345678912345);
															$num22222345678912345 = $row22222345678912345[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678912345 . "</td>";


															$int1111234567891234 = (int)$num1111234567891234;
															$float1111234567891234 = (float)$num1111234567891234;
															$int22222345678912345 = (int)$num22222345678912345;
															$float22222345678912345 = (float)$num22222345678912345;
															$float2abcdefghijklmnopqrstu = (float)$num2abcdefghijklmnopqrstu;
															$total1111234567891234 = ($float1111234567891234 + $float22222345678912345) - $float2abcdefghijklmnopqrstu;

															echo "<td bgcolor='#27ae60'>" . $total1111234567891234 . "</td>";


															$query44444567891234567 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567) or die('Error querying database.');
															$result44444567891234567 = mysqli_query($db, $query44444567891234567);
															$row44444567891234567 = mysqli_fetch_row($result44444567891234567);
															$num44444567891234567 = $row44444567891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891234567 . "</td>";




															$int33333456789123456 = (int)$num44444567891234567;
															$float33333456789123456 = (float)$num44444567891234567;

															$totalwa11111234567891234 = $total1111234567891234 + $float33333456789123456;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567891234 . "</td>";





															$query66666789123456789 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Bureta' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789) or die('Error querying database.');
															$result66666789123456789 = mysqli_query($db, $query66666789123456789);
															$row66666789123456789 = mysqli_fetch_row($result66666789123456789);
															$num66666789123456789 = $row66666789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123456789 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>VANUABALAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuv = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuv) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuv = mysqli_query($db, $query2abcdefghijklmnopqrstuv);
															$row2abcdefghijklmnopqrstuv = mysqli_fetch_row($result2abcdefghijklmnopqrstuv);
															$num2abcdefghijklmnopqrstuv = $row2abcdefghijklmnopqrstuv[0];


															$query11112345678912345 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912345) or die('Error querying database.');
															$result11112345678912345 = mysqli_query($db, $query11112345678912345);
															$row11112345678912345 = mysqli_fetch_row($result11112345678912345);
															$num11112345678912345 = $row11112345678912345[0];
															echo "<td>" . $num11112345678912345 . "</td>";

															$query222223456789123456 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123456) or die('Error querying database.');
															$result222223456789123456 = mysqli_query($db, $query222223456789123456);
															$row222223456789123456 = mysqli_fetch_row($result222223456789123456);
															$num222223456789123456 = $row222223456789123456[0];
															echo "<td>" . $num222223456789123456 . "</td>";


															$int11112345678912345 = (int)$num11112345678912345;
															$float11112345678912345 = (float)$num11112345678912345;
															$int222223456789123456 = (int)$num222223456789123456;
															$float222223456789123456 = (float)$num222223456789123456;
															$float2abcdefghijklmnopqrstuv = (float)$num2abcdefghijklmnopqrstuv;
															$total11112345678912345 = ($float11112345678912345 + $float222223456789123456) - $float2abcdefghijklmnopqrstuv;

															echo "<td>" . $total11112345678912345 . "</td>";


															$query444445678912345678 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345678) or die('Error querying database.');
															$result444445678912345678 = mysqli_query($db, $query444445678912345678);
															$row444445678912345678 = mysqli_fetch_row($result444445678912345678);
															$num444445678912345678 = $row444445678912345678[0];
															echo "<td>" . $num444445678912345678 . "</td>";




															$int333334567891234567 = (int)$num444445678912345678;
															$float333334567891234567 = (float)$num444445678912345678;

															$totalwa111112345678912345 = $total11112345678912345 + $float333334567891234567;

															echo "<td>" . $totalwa111112345678912345 . "</td>";





															$query666667891234567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Vanuabalavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567891) or die('Error querying database.');
															$result666667891234567891 = mysqli_query($db, $query666667891234567891);
															$row666667891234567891 = mysqli_fetch_row($result666667891234567891);
															$num666667891234567891 = $row666667891234567891[0];
															echo "<td>" . $num666667891234567891 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">CICIA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvw = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvw) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvw = mysqli_query($db, $query2abcdefghijklmnopqrstuvw);
															$row2abcdefghijklmnopqrstuvw = mysqli_fetch_row($result2abcdefghijklmnopqrstuvw);
															$num2abcdefghijklmnopqrstuvw = $row2abcdefghijklmnopqrstuvw[0];

															$query111123456789123456 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123456) or die('Error querying database.');
															$result111123456789123456 = mysqli_query($db, $query111123456789123456);
															$row111123456789123456 = mysqli_fetch_row($result111123456789123456);
															$num111123456789123456 = $row111123456789123456[0];
															echo "<td bgcolor='#27ae60'>" . $num111123456789123456 . "</td>";

															$query2222234567891234567 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234567) or die('Error querying database.');
															$result2222234567891234567 = mysqli_query($db, $query2222234567891234567);
															$row2222234567891234567 = mysqli_fetch_row($result2222234567891234567);
															$num2222234567891234567 = $row2222234567891234567[0];
															echo "<td bgcolor='#27ae60'>" . $num2222234567891234567 . "</td>";


															$int111123456789123456 = (int)$num111123456789123456;
															$float111123456789123456 = (float)$num111123456789123456;
															$int2222234567891234567 = (int)$num2222234567891234567;
															$float2222234567891234567 = (float)$num2222234567891234567;
															$float2abcdefghijklmnopqrstuvw = (float)$num2abcdefghijklmnopqrstuvw;
															$total111123456789123456 = ($float111123456789123456 + $float2222234567891234567) - $float2abcdefghijklmnopqrstuvw;

															echo "<td bgcolor='#27ae60'>" . $total111123456789123456 . "</td>";


															$query4444456789123456789 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456789) or die('Error querying database.');
															$result4444456789123456789 = mysqli_query($db, $query4444456789123456789);
															$row4444456789123456789 = mysqli_fetch_row($result4444456789123456789);
															$num4444456789123456789 = $row4444456789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num4444456789123456789 . "</td>";




															$int3333345678912345678 = (int)$num4444456789123456789;
															$float3333345678912345678 = (float)$num4444456789123456789;

															$totalwa1111123456789123456 = $total111123456789123456 + $float3333345678912345678;

															echo "<td bgcolor='#27ae60'>" . $totalwa1111123456789123456 . "</td>";





															$query6666678912345678912 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678912) or die('Error querying database.');
															$result6666678912345678912 = mysqli_query($db, $query6666678912345678912);
															$row6666678912345678912 = mysqli_fetch_row($result6666678912345678912);
															$num6666678912345678912 = $row6666678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num6666678912345678912 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>LAKEBA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwx = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwx) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwx = mysqli_query($db, $query2abcdefghijklmnopqrstuvwx);
															$row2abcdefghijklmnopqrstuvwx = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwx);
															$num2abcdefghijklmnopqrstuvwx = $row2abcdefghijklmnopqrstuvwx[0];

															$query1111234567891234567 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234567) or die('Error querying database.');
															$result1111234567891234567 = mysqli_query($db, $query1111234567891234567);
															$row1111234567891234567 = mysqli_fetch_row($result1111234567891234567);
															$num1111234567891234567 = $row1111234567891234567[0];
															echo "<td>" . $num1111234567891234567 . "</td>";

															$query22222345678912345678 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345678) or die('Error querying database.');
															$result22222345678912345678 = mysqli_query($db, $query22222345678912345678);
															$row22222345678912345678 = mysqli_fetch_row($result22222345678912345678);
															$num22222345678912345678 = $row22222345678912345678[0];
															echo "<td>" . $num22222345678912345678 . "</td>";


															$int1111234567891234567 = (int)$num1111234567891234567;
															$float1111234567891234567 = (float)$num1111234567891234567;
															$int22222345678912345678 = (int)$num22222345678912345678;
															$float22222345678912345678 = (float)$num22222345678912345678;
															$float2abcdefghijklmnopqrstuvwx = (float)$num2abcdefghijklmnopqrstuvwx;
															$total1111234567891234567 = ($float1111234567891234567 + $float22222345678912345678) - $float2abcdefghijklmnopqrstuvwx;

															echo "<td>" . $total1111234567891234567 . "</td>";


															$query44444567891234567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567891) or die('Error querying database.');
															$result44444567891234567891 = mysqli_query($db, $query44444567891234567891);
															$row44444567891234567891 = mysqli_fetch_row($result44444567891234567891);
															$num44444567891234567891 = $row44444567891234567891[0];
															echo "<td>" . $num44444567891234567891 . "</td>";




															$int33333456789123456789 = (int)$num44444567891234567891;
															$float33333456789123456789 = (float)$num44444567891234567891;

															$totalwa11111234567891234567 = $total1111234567891234567 + $float33333456789123456789;

															echo "<td>" . $totalwa11111234567891234567 . "</td>";





															$query66666789123456789123 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Lakeba' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789123) or die('Error querying database.');
															$result66666789123456789123 = mysqli_query($db, $query66666789123456789123);
															$row66666789123456789123 = mysqli_fetch_row($result66666789123456789123);
															$num66666789123456789123 = $row66666789123456789123[0];
															echo "<td>" . $num66666789123456789123 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">MOALA</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxy = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxy) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxy = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxy);
															$row2abcdefghijklmnopqrstuvwxy = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxy);
															$num2abcdefghijklmnopqrstuvwxy = $row2abcdefghijklmnopqrstuvwxy[0];

															$query11112345678912345678 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='OPEN'";
															mysqli_query($db, $query11112345678912345678) or die('Error querying database.');
															$result11112345678912345678 = mysqli_query($db, $query11112345678912345678);
															$row11112345678912345678 = mysqli_fetch_row($result11112345678912345678);
															$num11112345678912345678 = $row11112345678912345678[0];
															echo "<td bgcolor='#27ae60'>" . $num11112345678912345678 . "</td>";

															$query222223456789123456789 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query222223456789123456789) or die('Error querying database.');
															$result222223456789123456789 = mysqli_query($db, $query222223456789123456789);
															$row222223456789123456789 = mysqli_fetch_row($result222223456789123456789);
															$num222223456789123456789 = $row222223456789123456789[0];
															echo "<td bgcolor='#27ae60'>" . $num222223456789123456789 . "</td>";


															$int11112345678912345678 = (int)$num11112345678912345678;
															$float11112345678912345678 = (float)$num11112345678912345678;
															$int222223456789123456789 = (int)$num222223456789123456789;
															$float222223456789123456789 = (float)$num222223456789123456789;
															$float2abcdefghijklmnopqrstuvwxy = (float)$num2abcdefghijklmnopqrstuvwxy;
															$total11112345678912345678 = ($float11112345678912345678 + $float222223456789123456789) - $float2abcdefghijklmnopqrstuvwxy;

															echo "<td bgcolor='#27ae60'>" . $total11112345678912345678 . "</td>";


															$query444445678912345678912 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query444445678912345678912) or die('Error querying database.');
															$result444445678912345678912 = mysqli_query($db, $query444445678912345678912);
															$row444445678912345678912 = mysqli_fetch_row($result444445678912345678912);
															$num444445678912345678912 = $row444445678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num444445678912345678912 . "</td>";




															$int333334567891234567891 = (int)$num444445678912345678912;
															$float333334567891234567891 = (float)$num444445678912345678912;

															$totalwa111112345678912345678 = $total11112345678912345678 + $float333334567891234567891;

															echo "<td bgcolor='#27ae60'>" . $totalwa111112345678912345678 . "</td>";





															$query666667891234567891234 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Moala' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query666667891234567891234) or die('Error querying database.');
															$result666667891234567891234 = mysqli_query($db, $query666667891234567891234);
															$row666667891234567891234 = mysqli_fetch_row($result666667891234567891234);
															$num666667891234567891234 = $row666667891234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num666667891234567891234 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th>KADAVU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxyz = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyz) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxyz = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyz);
															$row2abcdefghijklmnopqrstuvwxyz = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxyz);
															$num2abcdefghijklmnopqrstuvwxyz = $row2abcdefghijklmnopqrstuvwxyz[0];

															$query111123456789123456789 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='OPEN'";
															mysqli_query($db, $query111123456789123456789) or die('Error querying database.');
															$result111123456789123456789 = mysqli_query($db, $query111123456789123456789);
															$row111123456789123456789 = mysqli_fetch_row($result111123456789123456789);
															$num111123456789123456789 = $row111123456789123456789[0];
															echo "<td>" . $num111123456789123456789 . "</td>";

															$query2222234567891234567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2222234567891234567891) or die('Error querying database.');
															$result2222234567891234567891 = mysqli_query($db, $query2222234567891234567891);
															$row2222234567891234567891 = mysqli_fetch_row($result2222234567891234567891);
															$num2222234567891234567891 = $row2222234567891234567891[0];
															echo "<td>" . $num2222234567891234567891 . "</td>";


															$int111123456789123456789 = (int)$num111123456789123456789;
															$float111123456789123456789 = (float)$num111123456789123456789;
															$int2222234567891234567891 = (int)$num2222234567891234567891;
															$float2222234567891234567891 = (float)$num2222234567891234567891;
															$float2abcdefghijklmnopqrstuvwxyz = (float)$num2abcdefghijklmnopqrstuvwxyz;
															$total111123456789123456789 = ($float111123456789123456789 + $float2222234567891234567891) - $float2abcdefghijklmnopqrstuvwxyz;

															echo "<td>" . $total111123456789123456789 . "</td>";


															$query4444456789123456789123 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query4444456789123456789123) or die('Error querying database.');
															$result4444456789123456789123 = mysqli_query($db, $query4444456789123456789123);
															$row4444456789123456789123 = mysqli_fetch_row($result4444456789123456789123);
															$num4444456789123456789123 = $row4444456789123456789123[0];
															echo "<td>" . $num4444456789123456789123 . "</td>";




															$int3333345678912345678912 = (int)$num4444456789123456789123;
															$float3333345678912345678912 = (float)$num4444456789123456789123;

															$totalwa1111123456789123456789 = $total111123456789123456789 + $float3333345678912345678912;

															echo "<td>" . $totalwa1111123456789123456789 . "</td>";





															$query6666678912345678912345 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Kadavu' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query6666678912345678912345) or die('Error querying database.');
															$result6666678912345678912345 = mysqli_query($db, $query6666678912345678912345);
															$row6666678912345678912345 = mysqli_fetch_row($result6666678912345678912345);
															$num6666678912345678912345 = $row6666678912345678912345[0];
															echo "<td>" . $num6666678912345678912345 . "</td>";
															mysqli_close($db);

															?>

														</tr>
														<tr>
															<th></th>
															<th bgcolor="#27ae60">ONO-I-LAU</th>
															<?php

															include '../../dbconfig.php';
															$query2abcdefghijklmnopqrstuvwxyza = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Cicia' AND STATUS='OPEN' AND YEAR(RECEIVEDDATE) = YEAR(CURRENT_DATE )AND MONTH(RECEIVEDDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyza) or die('Error querying database.');
															$result2abcdefghijklmnopqrstuvwxyza = mysqli_query($db, $query2abcdefghijklmnopqrstuvwxyza);
															$row2abcdefghijklmnopqrstuvwxyza = mysqli_fetch_row($result2abcdefghijklmnopqrstuvwxyza);
															$num2abcdefghijklmnopqrstuvwxyza = $row2abcdefghijklmnopqrstuvwxyza[0];

															$query1111234567891234567891 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='OPEN'";
															mysqli_query($db, $query1111234567891234567891) or die('Error querying database.');
															$result1111234567891234567891 = mysqli_query($db, $query1111234567891234567891);
															$row1111234567891234567891 = mysqli_fetch_row($result1111234567891234567891);
															$num1111234567891234567891 = $row1111234567891234567891[0];
															echo "<td bgcolor='#27ae60'>" . $num1111234567891234567891 . "</td>";

															$query22222345678912345678912 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE )AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE) ";
															mysqli_query($db, $query22222345678912345678912) or die('Error querying database.');
															$result22222345678912345678912 = mysqli_query($db, $query22222345678912345678912);
															$row22222345678912345678912 = mysqli_fetch_row($result22222345678912345678912);
															$num22222345678912345678912 = $row22222345678912345678912[0];
															echo "<td bgcolor='#27ae60'>" . $num22222345678912345678912 . "</td>";


															$int1111234567891234567891 = (int)$num1111234567891234567891;
															$float1111234567891234567891 = (float)$num1111234567891234567891;
															$int22222345678912345678912 = (int)$num22222345678912345678912;
															$float22222345678912345678912 = (float)$num22222345678912345678912;
															$float2abcdefghijklmnopqrstuvwxyza = (float)$num2abcdefghijklmnopqrstuvwxyza;
															$total1111234567891234567891 = ($float1111234567891234567891 + $float22222345678912345678912) - $float2abcdefghijklmnopqrstuvwxyza;

															echo "<td bgcolor='#27ae60'>" . $total1111234567891234567891 . "</td>";


															$query44444567891234567891234 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)  ";
															mysqli_query($db, $query44444567891234567891234) or die('Error querying database.');
															$result44444567891234567891234 = mysqli_query($db, $query44444567891234567891234);
															$row44444567891234567891234 = mysqli_fetch_row($result44444567891234567891234);
															$num44444567891234567891234 = $row44444567891234567891234[0];
															echo "<td bgcolor='#27ae60'>" . $num44444567891234567891234 . "</td>";




															$int33333456789123456789123 = (int)$num44444567891234567891234;
															$float33333456789123456789123 = (float)$num44444567891234567891234;

															$totalwa11111234567891234567891 = $total1111234567891234567891 + $float33333456789123456789123;

															echo "<td bgcolor='#27ae60'>" . $totalwa11111234567891234567891 . "</td>";





															$query66666789123456789123456 = "SELECT count(*)FROM mor  WHERE CERT='Outer Station' AND RISKOWNER='OMOIA' AND AIRPORT='Ono-I-Lau' AND STATUS='CLOSED' AND YEAR(LASTUPDATE) = YEAR(CURRENT_DATE - INTERVAL 2 MONTH)AND MONTH(LASTUPDATE) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) ";
															mysqli_query($db, $query66666789123456789123456) or die('Error querying database.');
															$result66666789123456789123456 = mysqli_query($db, $query66666789123456789123456);
															$row66666789123456789123456 = mysqli_fetch_row($result66666789123456789123456);
															$num66666789123456789123456 = $row66666789123456789123456[0];
															echo "<td bgcolor='#27ae60'>" . $num66666789123456789123456 . "</td>";
															mysqli_close($db);

															?>

														</tr>
													</tbody>

												</table>
											</div>
										</div>
										<!-- /.box-body -->
									</div>


								</div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

				</div>
			</section>
			<!-- /.content -->


		</div>

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
	<script language="javascript" type="text/javascript">
		$(window).load(function() {



			$("#slideshow > div:gt(0)").hide();

			setInterval(function() {
				$('#slideshow > div:first')
					.fadeOut(750)
					.next()
					.fadeIn(1000)
					.end()
					.appendTo('#slideshow');
			}, 11000);

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
			makemanagergraph();
			makemanagergraphtwo();
			makemanagergraphcomp();
			makepiechart();
			makepiechartnadiad();
			makepiechartnausoriad();




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


										backgroundColor: "rgba(255,0,0, 0.75)",
										borderColor: "rgba(255,0,0, 1)",
										pointHoverBackgroundColor: "rgba(255,0,0, 1)",
										pointHoverBorderColor: "rgba(255,0,0, 1)",

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


										backgroundColor: "rgba(255,0,0, 0.75)",
										borderColor: "rgba(255,0,0, 1)",
										pointHoverBackgroundColor: "rgba(255,0,0, 1)",
										pointHoverBorderColor: "rgba(255,0,0, 1)",

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


										backgroundColor: "rgba(255,0,0, 0.75)",
										borderColor: "rgba(255,0,0, 1)",
										pointHoverBackgroundColor: "rgba(255,0,0, 1)",
										pointHoverBorderColor: "rgba(255,0,0, 1)",

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


			function makepiechart() {

				$('#submittingnine').show();
				$.ajax({
					type: "POST",
					url: "piechart.php",
					cache: false,
					dataType: 'json',
					cache: false,


					success: function(html) {
						console.log("dekho" + html);
						$('#submittingnine').hide();

						var hightype = [];
						var count = [];
						var rgb = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							hightype.push(html[i].HITYPE);
							count.push(html[i].count);

						}
						console.log("dekho" + hightype);
						console.log("dekho" + count);
						var chartdata = {
							labels: hightype,

							datasets: [

								{
									label: 'count',

									backgroundColor: ["#C91F37", "#03A678", "#875F9A", "#E29C45", "#4D8FAC", "#7A942E", "#D9B611", "#BFBFBF", "#DC3023", "#4DAF7C", "#F47983", "#5D3F6A", "#F9690E", "#5D8CAE", "#8DB255", "#F3C13A", "#F2F1EF", "#9D2933", "#DB5A6B", "#89729E", "#CA6924", "#22A7F0", "#5B8930", "#F7CA18", "#BDC3C7", "#CF000F", "#C93756", "#763568", "#F5AB35", "#19B5FE", "#6B9362", "#E2B13C", "#ECF0F1", "#E68364", "#FCC9B9", "#8D608C", "#59ABE3", "#407A52", "#A17917", "#D2D7D3", "#F22613", "#FFB3A7", "#A87CA0", "#48929B", "#006442", "#F5D76E", "#757D75", "#CF3A24", "#F62459", "#5B3256", "#317589", "#87D37C", "#F4D63F", "#EEEEEE", "#C3273B", "#F58F84", "#BF55EC", "#89C4F4", "#26A65B", "#FFA400", "#ABB7B7", "#8F1D21", "#8E44AD", "#4B77BE", "#26C281", "#E08A1E", "#6C7A89", "#D24D57", "#9B59B6", "#1F4788", "#049372", "#FFB61E", "#95A5A6", "#BE90D4", "#003171", "#2ABB9B", "#FAA945", "#044F67", "#16A085", "#FFA631", "#264348", "#36D7B7", "#FFB94E"],


									data: count
								}
							]
						};
						var ctx = $("#piechartincidentvsrelatedto");
						var pieOptions = {
							events: false,
							animation: {
								duration: 500,
								easing: "easeOutQuart",
								onComplete: function() {
									var ctx = this.chart.ctx;
									ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
									ctx.textAlign = 'center';
									ctx.textBaseline = 'bottom';

									this.data.datasets.forEach(function(dataset) {

										for (var i = 0; i < dataset.data.length; i++) {
											var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
												total = dataset._meta[Object.keys(dataset._meta)[0]].total,
												mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius) / 2,
												start_angle = model.startAngle,
												end_angle = model.endAngle,
												mid_angle = start_angle + (end_angle - start_angle) / 2;

											var x = mid_radius * Math.cos(mid_angle);
											var y = mid_radius * Math.sin(mid_angle);

											ctx.fillStyle = '#fff';
											if (i == 3) { // Darker text color for lighter background
												ctx.fillStyle = '#444';
											}
											var percent = String(Math.round(dataset.data[i] / total * 100)) + "%";
											ctx.fillText(dataset.data[i], model.x + x, model.y + y);
											// Display percent in another line, line break doesn't work for fillText
											ctx.fillText(percent, model.x + x, model.y + y + 15);
										}
									});
								}
							}
						};
						var barGraph = new Chart(ctx, {
							type: 'pie',

							data: chartdata,
							options: pieOptions


						});









					},
					error: function(html) {
						console.log(html);

					}
				});
			}

			function makepiechartnadiad() {

				$('#submittingnineaa').show();
				$.ajax({
					type: "POST",
					url: "piechartnadiad.php",
					cache: false,
					dataType: 'json',
					cache: false,


					success: function(html) {
						console.log("dekhliya" + html);
						$('#submittingnineaa').hide();

						var hightype = [];
						var count = [];
						var rgb = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							hightype.push(html[i].RELATEDTO);
							count.push(html[i].count);

						}
						console.log("dekho" + hightype);
						console.log("dekho" + count);
						var chartdata = {
							labels: hightype,

							datasets: [

								{
									label: 'count',

									backgroundColor: ["#C91F37", "#03A678", "#875F9A", "#E29C45", "#4D8FAC", "#7A942E", "#D9B611", "#BFBFBF", "#DC3023", "#4DAF7C", "#F47983", "#5D3F6A", "#F9690E", "#5D8CAE", "#8DB255", "#F3C13A", "#F2F1EF", "#9D2933", "#DB5A6B", "#89729E", "#CA6924", "#22A7F0", "#5B8930", "#F7CA18", "#BDC3C7", "#CF000F", "#C93756", "#763568", "#F5AB35", "#19B5FE", "#6B9362", "#E2B13C", "#ECF0F1", "#E68364", "#FCC9B9", "#8D608C", "#59ABE3", "#407A52", "#A17917", "#D2D7D3", "#F22613", "#FFB3A7", "#A87CA0", "#48929B", "#006442", "#F5D76E", "#757D75", "#CF3A24", "#F62459", "#5B3256", "#317589", "#87D37C", "#F4D63F", "#EEEEEE", "#C3273B", "#F58F84", "#BF55EC", "#89C4F4", "#26A65B", "#FFA400", "#ABB7B7", "#8F1D21", "#8E44AD", "#4B77BE", "#26C281", "#E08A1E", "#6C7A89", "#D24D57", "#9B59B6", "#1F4788", "#049372", "#FFB61E", "#95A5A6", "#BE90D4", "#003171", "#2ABB9B", "#FAA945", "#044F67", "#16A085", "#FFA631", "#264348", "#36D7B7", "#FFB94E"],


									data: count
								}
							]
						};
						var ctx = $("#nadiadmor");
						var pieOptions = {
							events: false,
							animation: {
								duration: 500,
								easing: "easeOutQuart",
								onComplete: function() {
									var ctx = this.chart.ctx;
									ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
									ctx.textAlign = 'center';
									ctx.textBaseline = 'bottom';

									this.data.datasets.forEach(function(dataset) {

										for (var i = 0; i < dataset.data.length; i++) {
											var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
												total = dataset._meta[Object.keys(dataset._meta)[0]].total,
												mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius) / 2,
												start_angle = model.startAngle,
												end_angle = model.endAngle,
												mid_angle = start_angle + (end_angle - start_angle) / 2;

											var x = mid_radius * Math.cos(mid_angle);
											var y = mid_radius * Math.sin(mid_angle);

											ctx.fillStyle = '#fff';
											if (i == 3) { // Darker text color for lighter background
												ctx.fillStyle = '#444';
											}
											var percent = String(Math.round(dataset.data[i] / total * 100)) + "%";
											ctx.fillText(dataset.data[i], model.x + x, model.y + y);
											// Display percent in another line, line break doesn't work for fillText
											ctx.fillText(percent, model.x + x, model.y + y + 15);
										}
									});
								}
							}
						};
						var barGraph = new Chart(ctx, {
							type: 'pie',

							data: chartdata,
							options: pieOptions
						});









					},
					error: function(html) {
						console.log(html);

					}
				});
			}

			function makepiechartnausoriad() {

				$('#submittingnineaau').show();
				$.ajax({
					type: "POST",
					url: "piechartnausoriad.php",
					cache: false,
					dataType: 'json',
					cache: false,


					success: function(html) {
						console.log("dekhliya" + html);
						$('#submittingnineaau').hide();

						var hightype = [];
						var count = [];
						var rgb = [];

						var len = html.length;
						for (var i = 0; i < len; i++) {
							hightype.push(html[i].RELATEDTO);
							count.push(html[i].count);

						}
						console.log("dekho" + hightype);
						console.log("dekho" + count);
						var chartdata = {
							labels: hightype,

							datasets: [

								{
									label: 'count',

									backgroundColor: ["#C91F37", "#03A678", "#875F9A", "#E29C45", "#4D8FAC", "#7A942E", "#D9B611", "#BFBFBF", "#DC3023", "#4DAF7C", "#F47983", "#5D3F6A", "#F9690E", "#5D8CAE", "#8DB255", "#F3C13A", "#F2F1EF", "#9D2933", "#DB5A6B", "#89729E", "#CA6924", "#22A7F0", "#5B8930", "#F7CA18", "#BDC3C7", "#CF000F", "#C93756", "#763568", "#F5AB35", "#19B5FE", "#6B9362", "#E2B13C", "#ECF0F1", "#E68364", "#FCC9B9", "#8D608C", "#59ABE3", "#407A52", "#A17917", "#D2D7D3", "#F22613", "#FFB3A7", "#A87CA0", "#48929B", "#006442", "#F5D76E", "#757D75", "#CF3A24", "#F62459", "#5B3256", "#317589", "#87D37C", "#F4D63F", "#EEEEEE", "#C3273B", "#F58F84", "#BF55EC", "#89C4F4", "#26A65B", "#FFA400", "#ABB7B7", "#8F1D21", "#8E44AD", "#4B77BE", "#26C281", "#E08A1E", "#6C7A89", "#D24D57", "#9B59B6", "#1F4788", "#049372", "#FFB61E", "#95A5A6", "#BE90D4", "#003171", "#2ABB9B", "#FAA945", "#044F67", "#16A085", "#FFA631", "#264348", "#36D7B7", "#FFB94E"],


									data: count
								}
							]
						};
						var ctx = $("#nausoriadmor");
						var pieOptions = {
							events: false,
							animation: {
								duration: 500,
								easing: "easeOutQuart",
								onComplete: function() {
									var ctx = this.chart.ctx;
									ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
									ctx.textAlign = 'center';
									ctx.textBaseline = 'bottom';

									this.data.datasets.forEach(function(dataset) {

										for (var i = 0; i < dataset.data.length; i++) {
											var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
												total = dataset._meta[Object.keys(dataset._meta)[0]].total,
												mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius) / 2,
												start_angle = model.startAngle,
												end_angle = model.endAngle,
												mid_angle = start_angle + (end_angle - start_angle) / 2;

											var x = mid_radius * Math.cos(mid_angle);
											var y = mid_radius * Math.sin(mid_angle);

											ctx.fillStyle = '#fff';
											if (i == 3) { // Darker text color for lighter background
												ctx.fillStyle = '#444';
											}
											var percent = String(Math.round(dataset.data[i] / total * 100)) + "%";
											ctx.fillText(dataset.data[i], model.x + x, model.y + y);
											// Display percent in another line, line break doesn't work for fillText
											ctx.fillText(percent, model.x + x, model.y + y + 15);
										}
									});
								}
							}
						};
						var barGraph = new Chart(ctx, {
							type: 'pie',

							data: chartdata,
							options: pieOptions
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


										backgroundColor: "rgba(255,0,0, 0.75)",
										borderColor: "rgba(255,0,0, 1)",
										pointHoverBackgroundColor: "rgba(255,0,0, 1)",
										pointHoverBorderColor: "rgba(255,0,0, 1)",

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
				$('#managergraph').remove();
				$('#managergraphcontainer').append('<canvas id="managergraph" ></canvas>');
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
		$("#example11").DataTable();
		$("#example3").DataTable();
	</script>



	<script>
		function logout() {


			$.ajax({
				type: "POST",
				url: "../../logout.php",

				cache: false,


				success: function(html) {

					setTimeout(' window.location.href = "../../index.html"; ', 500);

				},
				error: function(html) {

				}






			});
		}

		/*  function PrintFirst() 
				{
					var canvas = document.getElementById("piechartincidentvsrelatedto");
					var img    = canvas.toDataURL("image/png");
					document.write('<img src="'+img+'"/>');
					setTimeout(function(){window.print(img);}, 1);
					 document.close();
					
				}  */

		/* $('#btnPrint').on('click', function(event) {
        event.preventDefault();
        html2canvas($('#printThis'), {
            onrendered: function(canvas) {
                var imgData = canvas.toDataURL('image/jpeg');
                var doc = new jsPDF('landscape');
                doc.addImage(imgData, 'JPEG', 15, 45, 270, 125);
                doc.save('download.pdf');
                return false;
            }
        });
    }); */

		/* document.getElementById('PrintFirst').onclick = function () {
       var canvas = document.getElementById("piechartincidentvsrelatedto");
		var img    = canvas.toDataURL("image/png");
        var windowContent = '<!DOCTYPE html>';
        windowContent += '<html>'
        windowContent += '<head><title>Print canvas</title></head>';
        windowContent += '<body>'
        windowContent += '<img src="' + img + '">';
        windowContent += '</body>';
        windowContent += '</html>';
        var printWin = window.open('', '', 'width=720,height=340');
        printWin.document.open();
        printWin.document.write(windowContent);
        printWin.document.close();
        printWin.focus();
        printWin.print();
        printWin.close();
    } */
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