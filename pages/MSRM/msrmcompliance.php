<?php

session_start();

if (!isset($_SESSION['USER'])) {
  header("Location: ../../");
} else if (!($_SESSION['USER'] == "MSRM") && !($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE")) {
  header("Location: ../../");
}
$pageuser = "MSRM";
?>

<!DOCTYPE html>


<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | MSRM</title>
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
          <li class="treeview active">
            <a href="../../pages/MSRM/msrmdashboard.php"><i class="fa fa-dashboard"></i> MSRM
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="msrmdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
              <li class="active"><a href="msrmcompliance.php"><i class="fa fa-circle-o"></i> COMPLIANCE</a></li>
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
          <!-- left column -->
          <div class="col-md-12">
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
                        <th>Status</th>
                        <th>Compliance Description:</th>
                        <th>SUBMITDATE:</th>
                        <th>Airport:</th>
                        <th>Details</th>
                        <th>Update</th>

                      </tr>
                    </thead>
                    <tbody>

                      <?php

                      include '../../dbconfig.php';
                      $query = "SELECT *, DATEDIFF(TARGETDATE ,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM compliance ORDER BY SUBMITDATE DESC";
                      mysqli_query($db, $query) or die('Error querying database.');
                      $result = mysqli_query($db, $query);


                      while ($row = mysqli_fetch_array($result)) {

                        echo "<tr>";
                        echo "<td>" . $row['COMP_ID'] . "</td>";
                        echo "<td>" . $row['STATUS'] . "</td>";

                        echo "<td>" . $row['DESCRIPTION'] . "</td>";
                        echo "<td>" . $row['SUBMITDATE'] . "</td>";

                        echo "<td>" . $row['AIRPORT'] . "</td>";



                        /* echo "<td>".$row['DREPORTED']."</td>"; */
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

              </div>
              <!-- /.box-body -->
            </div>

            <?php
            $alert = "../components/alerts.php";

            $Modal = "../components/moreonthis.php";
            include($alert);

            include($Modal);
            ?>
          </div>
          <!-- /.content -->
        </div>
    </div>
    </section>

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



</body>

</html>