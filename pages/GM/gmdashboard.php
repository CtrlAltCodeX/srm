<?php

session_start();

if (!isset($_SESSION['USER'])) {
  header("Location: ../../");
} else if (!($_SESSION['USER'] == "GMATM") && !($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "CEO")) {
  header("Location: ../../");
}
// Echo session variables that were set on previous page
/* echo "Favorite color is " . $_SESSION["USER"] . ".<br>"; */
$pageuser = "GMATM";
?>

<!DOCTYPE html>


<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | HOP</title>
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
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="../../plugins/fine-upload/fine-uploader-gallery.min.css" />

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
      <a href="../../index.html" class="logo">
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
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <!-- <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->


          <li class="active treeview ">
            <a href="#"><i class="fa fa-dashboard"></i> <span>GMATM</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>

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
                  <li><a href="../../pages/APMNA/apmnadashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

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
                  <li><a href="../../pages/CHOP/chopdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>

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
                  <li><a href="../../pages/MALOCS/malocsdashboard.php"><i class="fa fa-circle-o"></i> DAHSBOARD</a></li>

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
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="loader"></div>
      <img src="../../dist/img/19-1.gif" id="loading-indicator" style="display:none" />
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <label id="startro"><?PHP echo $pageuser; ?></label> Dashboard

        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

          <li class="active">DASHBOARD</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo $_SESSION["USER"]; ?> Stats</h3>

                <!-- /.box-header -->

                <div class="pull-right">
                  <a href="../../uploads/MSRM/SafetyPerformanceData.pdf?= $pageuser; ?>/SafetyPerformanceData.pdf" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Safety Performance Data</a>
                  <div class="col-md-1"></div>
                </div>

                <div class="pull-right">
                  <a href="../../uploads/MSRM/FAADCertificates.pdf?= $pageuser; ?>/FAADCertificates.pdf" target="_blank" class="btn btn-info btn-sm"> FA AD Certificates</a>
                  <div class="col-md-1"></div>
                </div>
              </div>
              <div class="box-body" id="tablediv">
                <div class="table-responsive">
                  <?php
                  include '../../dbconfig.php';
                  /* $looper = 0;
						settype($looper, "integer"); */
                  $colors = array("MNOS", "HOP", "MALOCS", "MAO", "MARFFS", "MASS");
                  $tablerow = "";


                  foreach ($colors as $value) {


                    $queryalert = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert) or die(mysqli_error($db));
                    $resultalert = mysqli_query($db, $queryalert);
                    $rowalert = mysqli_fetch_row($resultalert);
                    $numalert = $rowalert[0];

                    $query2a = "SELECT count(*)FROM mor  WHERE RISKOWNER='$value' AND STATUS='OPEN' AND CLOSEDRO='OPEN' ";
                    mysqli_query($db, $query2a) or die(mysqli_error($db));
                    $result2a = mysqli_query($db, $query2a);
                    $row2a = mysqli_fetch_row($result2a);
                    $num2a = $row2a[0];

                    $queryalerttwo = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND STATUS='OPEN' AND CLOSEDRO='OPEN' ";
                    mysqli_query($db, $queryalerttwo) or die(mysqli_error($db));
                    $resultalerttwo = mysqli_query($db, $queryalerttwo);
                    $rowalerttwo = mysqli_fetch_row($resultalerttwo);
                    $numalerttwo = $rowalerttwo[0];

                    $queryalerttwo1 = "SELECT count(*)FROM recommendations  WHERE RISKOWNER='$value' AND STATUS='OPEN'";
                    mysqli_query($db, $queryalerttwo1) or die(mysqli_error($db));
                    $resultalerttwo1 = mysqli_query($db, $queryalerttwo1);
                    $rowalerttwo1 = mysqli_fetch_row($resultalerttwo1);
                    $numalerttwo1 = $rowalerttwo1[0];

                    $queryalert2 = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND MITIGATIONLEVEL='1'  AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2) or die(mysqli_error($db));
                    $resultalert2 = mysqli_query($db, $queryalert2);
                    $rowalert2 = mysqli_fetch_row($resultalert2);
                    $numalert2 = $rowalert2[0];

                    $queryalert23 = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND RISKLEVEL='High Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert23) or die(mysqli_error($db));
                    $resultalert23 = mysqli_query($db, $queryalert23);
                    $rowalert23 = mysqli_fetch_row($resultalert23);
                    $numalert23 = $rowalert23[0];

                    $queryalert234 = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND audit.RISK_LEVEL='High Risk' AND recommendations.STATUS='OPEN' AND audit.AID=recommendations.ID";
                    mysqli_query($db, $queryalert234) or die(mysqli_error($db));
                    $resultalert234 = mysqli_query($db, $queryalert234);
                    $rowalert234 = mysqli_fetch_row($resultalert234);
                    $numalert234 = $rowalert234[0];

                    $high = $numalert2 + $numalert23 + $numalert234;

                    $queryalert2m = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND MITIGATIONLEVEL='2' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2m) or die(mysqli_error($db));
                    $resultalert2m = mysqli_query($db, $queryalert2m);
                    $rowalert2m = mysqli_fetch_row($resultalert2m);
                    $numalert2m = $rowalert2m[0];

                    $queryalert23m = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND RISKLEVEL='Medium Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert23m) or die(mysqli_error($db));
                    $resultalert23m = mysqli_query($db, $queryalert23m);
                    $rowalert23m = mysqli_fetch_row($resultalert23m);
                    $numalert23m = $rowalert23m[0];

                    $queryalert234m = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND audit.RISK_LEVEL='Medium Risk' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
                    mysqli_query($db, $queryalert234m) or die(mysqli_error($db));
                    $resultalert234m = mysqli_query($db, $queryalert234m);
                    $rowalert234m = mysqli_fetch_row($resultalert234m);
                    $numalert234m = $rowalert234m[0];

                    $medium = $numalert2m + $numalert23m + $numalert234m;

                    $queryalert2ml = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND MITIGATIONLEVEL='3' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2ml) or die(mysqli_error($db));
                    $resultalert2ml = mysqli_query($db, $queryalert2ml);
                    $rowalert2ml = mysqli_fetch_row($resultalert2ml);
                    $numalert2ml = $rowalert2ml[0];

                    $queryalert23ml = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND RISKLEVEL='Low Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert23ml) or die(mysqli_error($db));
                    $resultalert23ml = mysqli_query($db, $queryalert23ml);
                    $rowalert23ml = mysqli_fetch_row($resultalert23ml);
                    $numalert23ml = $rowalert23ml[0];

                    $queryalert234ml = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND audit.RISK_LEVEL='Low Risk' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
                    mysqli_query($db, $queryalert234ml) or die(mysqli_error($db));
                    $resultalert234ml = mysqli_query($db, $queryalert234ml);
                    $rowalert234ml = mysqli_fetch_row($resultalert234ml);
                    $numalert234ml = $rowalert234ml[0];

                    $low = $numalert2ml + $numalert23ml + $numalert234ml;

                    $queryalert2mlptd = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND TARGETDATE < CURDATE() AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptd) or die(mysqli_error($db));
                    $resultalert2mlptd = mysqli_query($db, $queryalert2mlptd);
                    $rowalert2mlptd = mysqli_fetch_row($resultalert2mlptd);
                    $numalert2mlptd = $rowalert2mlptd[0];


                    /* settype($overdue, "integer"); */


                    $queryalert2mlptdh = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND TARGETDATE < CURDATE() AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdh) or die(mysqli_error($db));
                    $resultalert2mlptdh = mysqli_query($db, $queryalert2mlptdh);
                    $rowalert2mlptdh = mysqli_fetch_row($resultalert2mlptdh);
                    $numalert2mlptdh = $rowalert2mlptdh[0];

                    /* IF(RESPONSE='2 Weeks',(DATEDIFF(CURDATE(),SDCSUBMITDATE ) > '14'),(DATEDIFF(CURDATE(),SDCSUBMITDATE ) > '7')) */
                    /* while ($rowalert2mlptdh = mysqli_fetch_array($resultalert2mlptdh)) 
						{							
							
							$diffdateone = 7 - $row['DiffDate'] ;
							$diffdatetwo = 14 - $row['DiffDate'] ;
							if($row['RESPONSE']==="1 Week")
							{
								if($diffdateone>0)
								{
									$overdue = abs($diffdateone);
									return $overdue;
									
								}						
								
							}
							else if($row['RESPONSE']==="2 Weeks")
							{
								if($diffdatetwo>0)
								{
									$overdue = abs($diffdatetwo);
									return $overdue;
								}		
								
							}
						}
						
						echo "hello".$overdue."lol"; */

                    $queryalert2mlptdq = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$value' AND TARGETDATE < CURDATE() AND STATUS='OPEN'";
                    mysqli_query($db, $queryalert2mlptdq) or die(mysqli_error($db));
                    $resultalert2mlptdq = mysqli_query($db, $queryalert2mlptdq);
                    $rowalert2mlptdq = mysqli_fetch_row($resultalert2mlptdq);
                    $numalert2mlptdq = $rowalert2mlptdq[0];

                    $totaloverdue = $numalert2mlptd + $numalert2mlptdh + $numalert2mlptdq;

                    $queryalert2mlptdt = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdt) or die(mysqli_error($db));
                    $resultalert2mlptdt = mysqli_query($db, $queryalert2mlptdt);
                    $rowalert2mlptdt = mysqli_fetch_row($resultalert2mlptdt);
                    $numalert2mlptdt = $rowalert2mlptdt[0];

                    $queryalert2mlptdht = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdht) or die(mysqli_error($db));
                    $resultalert2mlptdht = mysqli_query($db, $queryalert2mlptdht);
                    $rowalert2mlptdht = mysqli_fetch_row($resultalert2mlptdht);
                    $numalert2mlptdht = $rowalert2mlptdht[0];

                    /* IF(RESPONSE='2 Weeks',(DATEDIFF(CURDATE(),SDCSUBMITDATE ) < '14'),(DATEDIFF(CURDATE(),SDCSUBMITDATE ) < '7')) */


                    $queryalert2mlptdtz = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN'";
                    mysqli_query($db, $queryalert2mlptdtz) or die(mysqli_error($db));
                    $resultalert2mlptdtz = mysqli_query($db, $queryalert2mlptdtz);
                    $rowalert2mlptdtz = mysqli_fetch_row($resultalert2mlptdtz);
                    $numalert2mlptdtz = $rowalert2mlptdtz[0];

                    $totalthirty = $numalert2mlptdt + $numalert2mlptdht + $numalert2mlptdtz;

                    $queryalert2mlptdtg = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) > '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdtg) or die(mysqli_error($db));
                    $resultalert2mlptdtg = mysqli_query($db, $queryalert2mlptdtg);
                    $rowalert2mlptdtg = mysqli_fetch_row($resultalert2mlptdtg);
                    $numalert2mlptdtg = $rowalert2mlptdtg[0];

                    $queryalert2mlptdtgnhr = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) > '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdtgnhr) or die(mysqli_error($db));
                    $resultalert2mlptdtgnhr = mysqli_query($db, $queryalert2mlptdtgnhr);
                    $rowalert2mlptdtgnhr = mysqli_fetch_row($resultalert2mlptdtgnhr);
                    $numalert2mlptdtgnhr = $rowalert2mlptdtgnhr[0];

                    $queryalert2mlptdtzq = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),TARGETDATE)) > '30' AND STATUS='OPEN'";
                    mysqli_query($db, $queryalert2mlptdtzq) or die(mysqli_error($db));
                    $resultalert2mlptdtzq = mysqli_query($db, $queryalert2mlptdtzq);
                    $rowalert2mlptdtzq = mysqli_fetch_row($resultalert2mlptdtzq);
                    $numalert2mlptdtzq = $rowalert2mlptdtzq[0];

                    $totalthirtyc = $numalert2mlptdtgnhr + $numalert2mlptdtg + $numalert2mlptdtzq;

                    $queryalert2mlptdqhu = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdqhu) or die(mysqli_error($db));
                    $resultalert2mlptdqhu = mysqli_query($db, $queryalert2mlptdqhu);
                    $rowalert2mlptdqhu = mysqli_fetch_row($resultalert2mlptdqhu);
                    $numalert2mlptdqhu = $rowalert2mlptdqhu[0];

                    $queryalert2mlptdqhum = "SELECT count(*) FROM mor  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdqhum) or die(mysqli_error($db));
                    $resultalert2mlptdqhum = mysqli_query($db, $queryalert2mlptdqhum);
                    $rowalert2mlptdqhum = mysqli_fetch_row($resultalert2mlptdqhum);
                    $numalert2mlptdqhum = $rowalert2mlptdqhum[0];

                    $queryalert2mlptdqhuma = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
                    mysqli_query($db, $queryalert2mlptdqhuma) or die(mysqli_error($db));
                    $resultalert2mlptdqhuma = mysqli_query($db, $queryalert2mlptdqhuma);
                    $rowalert2mlptdqhuma = mysqli_fetch_row($resultalert2mlptdqhuma);
                    $numalert2mlptdqhuma = $rowalert2mlptdqhuma[0];

                    $queryalert2mlptdqhumac = "SELECT count(DISTINCT(recommendations.ID)) FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND (DATEDIFF(CURDATE(),audit.LASTUPDATE)) > '7' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
                    mysqli_query($db, $queryalert2mlptdqhumac) or die(mysqli_error($db));
                    $resultalert2mlptdqhumac = mysqli_query($db, $queryalert2mlptdqhumac);
                    $rowalert2mlptdqhumac = mysqli_fetch_row($resultalert2mlptdqhumac);
                    $numalert2mlptdqhumac = $rowalert2mlptdqhumac[0];

                    $lastupdatetotal = $numalert2mlptdqhu + $numalert2mlptdqhum + $numalert2mlptdqhuma + $numalert2mlptdqhumac;



                    $tablerow .=  " <tr><td>" . $value . "</td>
                  <td align='center'>" . $numalert . "</td>
				  <td align='center'>" . $num2a . "</td>
				  <td align='center'>" . $numalerttwo . "</td>
				  <td align='center'>" . $numalerttwo1 . "</td>
				  <td align='center' bgcolor='#e74c3c'>" . $high . "</td>
				  <td align='center' bgcolor='#f1c40f'>" . $medium . "</td>
				  <td align='center' bgcolor='#2ecc71'>" . $low . "</td>
				   <td align='center' bgcolor='#e74c3c'>" . $totaloverdue . "</td>
				   <td align='center' bgcolor='#f1c40f'>" . $totalthirty . "</td>
				    <td align='center' bgcolor='#2ecc71'>" . $totalthirtyc . "</td> 
					<td align='center' bgcolor='#ecf0f1'>" . $lastupdatetotal . "</td>
					<td align='center' bgcolor='#ecf0f1'><button type='button' class='btn btn-primary'   value='" . $value . "' onclick='dheko(this.value)'>View Details </button></td></tr>";
                  }
                  ?>
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th bgcolor='#ecf0f1'></th>
                      <th colspan='4' bgcolor='#ecf0f1'># Issues Open</th>
                      <th colspan='3' bgcolor='#ecf0f1'>Risk Level</th>
                      <th colspan='3' bgcolor='#ecf0f1'># of item(s)</th>
                      <th bgcolor='#ecf0f1'></th>
                      <th bgcolor='#ecf0f1'></th>

                    </tr>
                    <tr>
                      <th bgcolor='#ecf0f1'>Responsible Person</th>
                      <th bgcolor='#ecf0f1'>Non - Compliance</th>
                      <th bgcolor='#ecf0f1'>MOR</th>
                      <th bgcolor='#ecf0f1'>Hazard Report</th>
                      <th bgcolor='#ecf0f1'>Internal Audit / Inspection</th>
                      <th bgcolor='#e74c3c'>High</th>
                      <th bgcolor='#f1c40f'>Medium</th>
                      <th bgcolor='#2ecc71'>Low</th>
                      <th bgcolor='#e74c3c'>Past Target Date</th>
                      <th bgcolor='#f1c40f'>Due date within 30 days</th>
                      <th bgcolor='#2ecc71'>Due date after 30 days</th>
                      <th bgcolor='#ecf0f1'>Items without updates</th>
                      <th bgcolor='#ecf0f1'>View</th>
                    </tr>
                    <?php
                    echo $tablerow;
                    ?>
                  </table>
                </div>
              </div>
              <!-- /.box-body -->

            </div><!-- /.info-box -->
          </div>

          <?php
          $sumtable = "../components/sumtable.php";

          include($sumtable);
          ?>
        </div>


        <div class="row">
          <!-- left column -->
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


            <?php
            $pagebox = "../components/pagecomponentsriskowner.php";
            include($pagebox);
            ?>
            <div class="box box-danger">


              <div class="box-header">
                <h3 class="box-title">All High Risk Hazards currently being managed by the respective Managers</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body" id="tablediv">



                <div class="table-responsive">
                  <table id="example77" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID:</th>
                        <th>Hazard Description:</th>


                        <th>Closure Expected:</th>
                        <th>Risk Owner</th>
                        <th>Details</th>


                        <th>Details</th>
                        <th>Update Status</th>

                      </tr>
                    </thead>
                    <tbody>

                      <?php

                      include '../../dbconfig.php';
                      $query = "SELECT *, DATEDIFF(CURDATE(),SDCSUBMITDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='1' AND SDCCHECKTWO='1' AND CLOSEDRO='OPEN' AND RISKLEVEL='HIGH RISK'";
                      mysqli_query($db, $query) or die('Error querying database.');
                      $result = mysqli_query($db, $query);


                      while ($row = mysqli_fetch_array($result)) {

                        echo "<tr>";
                        echo "<td>" . $row['HAZID'] . "</td>";
                        echo "<td>" . $row['HITYPE'] . "</td>";



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


                        /* $LastUpdateDiffDate = 7 - $row['LastUpdateDiff'] ;
							
							if($LastUpdateDiffDate<0)
							{
									echo "<td>Overdue by ".abs($LastUpdateDiffDate)." days</td>";
							}
							else
							{
								echo "<td>".$LastUpdateDiffDate." days</td>";
							}	 */

                        echo "<td>" . $row['RISKOWNER'] . "</td>";

                        echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myMODAL' 
								data-id='" . $row['HAZID'] . "'data-hazorinc='" . $row['HAZORINC'] . "' data-airport='" . $row['AIRPORT'] . "' data-hitype='" . $row['HITYPE'] . "' data-hid='" . $row['HID'] . "' data-causetype='" . $row['CAUSETYPE'] . "'
								data-cd='" . $row['CD'] . "' data-effecttype='" . $row['EFFECTTYPE'] . "' data-ed='" . $row['ED'] . "' data-deventoccurance='" . $row['DEVENTOCCURANCE'] . "'data-timeoc='" . $row['TIMEOC'] . "'
								data-dreported='" . $row['DREPORTED'] . "' data-userreported='" . $row['USERREPORTED'] . "'data-riskowner='" . $row['RISKOWNER'] . "' 
								data-qaso='" . $row['QASO'] . "'data-riskcontext='" . $row['RISKCONTEXT'] . "'data-riskconsequence='" . $row['RISKCONSEQUENCE'] . "'
								data-riskhood='" . $row['RISKHOOD'] . "'data-risklevel='" . $row['RISKLEVEL'] . "'data-response='" . $row['RESPONSE'] . "'
								data-recommendeda='" . $row['RECOMMENDEDA'] . "'data-ohsref='" . $row['OHSREF'] . "'>View </button></td>";



                        echo "<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myMODALTWO' 
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


            <?php
            $Modal = "../components/moreonthis.php";
            include($Modal);
            ?>


            <!-- /.content -->
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
    <?php
    $footer = "../components/footer.php";
    include($footer);

    ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <!-- /.tab-pane -->
      </div>


    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <script type="text/javascript">
    function dheko(verb) {

      switch (verb) {

        case 'MAO':
          // <!--location.href = "http://localhost/srm/pages/MAO/airsidedashboard.php"; -- >
          window.location.href = "../../pages/MAO/airsidedashboard.php";
          break;
        case 'MBCW':
          // <!--location.href = "http://localhost/srm/pages/MAO/airsidedashboard.php"; -- >
          window.location.href = "http://10.99.100.29/srm/pages/MBCW/bcwdashboard.php";
          break;
        case 'OHS':
          window.location.href = "http://10.99.100.29/srm/pages/OHS/ohsdashboard.php";
          break;
        case 'SDA':
          window.location.href = "http://10.99.100.29/srm/pages/SDA/sdcdashboard.php";
          break;
        case 'MNOS':
          window.location.href = "../../pages/APMNA/apmnadashboard.php";
          break;
        case 'HOP':
          window.location.href = "../../pages/CHOP/chopdashboard.php";
          break;
        case 'MALOCS':
          window.location.href = "../../pages/MALOCS/malocsdashboard.php";
          break;
        case 'MANES':
          window.location.href = "http://10.99.100.29/srm/pages/MANES/manesdashboard.php";
          break;
        case 'MICT':
          window.location.href = "http://10.99.100.29/srm/pages/MICT/mictdashboard.php";
          break;
        case 'MARFFS':
          window.location.href = "../../pages/MARFFS/marffsdashboard.php";
          break;
        case 'MASS':
          window.location.href = "../../pages/MASS/massdashboard.php";
          break;
        case 'MC':
          window.location.href = "http://10.99.100.29/srm/pages/MC/mcdashboard.php";
          break;
        case 'MEMS':
          window.location.href = "http://10.99.100.29/srm/pages/MEMS/memsdashboard.php";
          break;
        case 'MFS':
          window.location.href = "http://10.99.100.29/srm/pages/MFS/mfsdashboard.php";
          break;
        case 'MPODC':
          window.location.href = "http://10.99.100.29/srm/pages/MPODC/mhrdashboard.php";
          break;
        case 'MSRM':
          window.location.href = "http://10.99.100.29/srm/pages/MSRM/msrmdashboard.php";
          break;
        case 'OMOIA':
          window.location.href = "http://10.99.100.29/srm/pages/OMOIA/omoiadashboard.php";
          break;
        case 'SFA':
          window.location.href = "http://10.99.100.29/srm/pages/SFA/sfadashboard.php";
          break;
        case 'QASO-FIRE':
          window.location.href = "http://10.99.100.29/srm/pages/FIRE/firedashboard.php";
          break;
        case 'QASO-AERODOME':
          window.location.href = "http://10.99.100.29/srm/pages/AERODOME/aerodashboard.php";
          break;
        case 'QASO-AMO':
          window.location.href = "http://10.99.100.29/srm/pages/AMO/amodashboard.php";
          break;
        case 'QASO-ATSP':
          window.location.href = "http://10.99.100.29/srm/pages/ATSP/atspdashboard.php";
          break;
        case 'QASO-ENV':
          window.location.href = "http://10.99.100.29/srm/pages/ENVIRONMENT/envdashboard.php";
          break;
        case 'PAAE':
          window.location.href = "http://10.99.100.29/srm/pages/PAAE/paaedashboard.php";
          break;
        case 'LABASA':
          window.location.href = "http://10.99.100.29/srm/pages/OUTERISLANDS/labasadashboard.php";
          break;
        case 'SAVUSAVU':
          window.location.href = "http://10.99.100.29/srm/pages/OUTERISLANDS/savusavudashboard.php";
          break;
        case 'MATEI':
          window.location.href = "http://10.99.100.29/srm/pages/OUTERISLANDS/mateidashboard.php";
          break;
        case 'GMATM':
          window.location.href = "http://10.99.100.29/srm/pages/KING/execdashboard.php";

          break;


      }
    }
  </script>

  <!-- jQuery 2.2.3 -->
  <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../../plugins/fastclick/fastclick.js"></script>

  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>

  <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>

  <script src="../components/modalqeuries.js"></script>
  <script src="../components/morfunctions.js"></script>
  <script src="../components/manageronload.js"></script>

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
            // $('.audit_image_galery_listed').append('<input type="text" class="listed_file_uuid" name="audit_image_uuid[' + id + ']" value="' + uuid + '" /><input type="text" class="listed_file_name" name="audit_image_name[' + id + ']" value="' + xhr.uploadName + '" />');
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