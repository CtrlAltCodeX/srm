<?php

session_start();

if (!isset($_SESSION['USER'])) {
  header("Location: ../../");
} else if (!($_SESSION['USER'] == "MFS") && !($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE") && !($_SESSION['USER'] == "CEO") && !($_SESSION['USER'] == "GMAI")) {
  header("Location: ../../");
}
$pageuser = "MFS";
?>

<!DOCTYPE html>


<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | MFS</title>
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
            <a href="../../pages/MFS/mfsdashboard.php"><i class="fa fa-dashboard"></i> MFS
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="mfsdashboard.php"><i class="fa fa-circle-o"></i>DASHBOARD</a></li>

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
          <?php
          $sumtable = "../components/sumtable.php";

          include($sumtable);
          ?>
        </div>


        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <?php
            $alert = "../components/alerts.php";
            $pagebox = "../components/pagecomponentsriskowner.php";
            $Modal = "../components/moreonthis.php";
            include($alert);
            include($pagebox);
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