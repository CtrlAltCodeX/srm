<?php

session_start();

if (!isset($_SESSION['USER'])) {
  header("Location: ../../");
} else if (!($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE")) {
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
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <link rel="stylesheet" href="../../dist/css/custom.css">
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">




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
              <li><a href="sdcdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
              <li><a href="datadumping.php"><i class="fa fa-circle-o"></i> DATA DUMPING</a></li>
              <li class="active"><a href="sdcmorform.php"><i class="fa fa-circle-o"></i> MOR FORM</a></li>

            </ul>
          </li>

          <li>
            <a href="#"><i class="fa fa-dashboard"></i> Executive
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../KING/execdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
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
                  <li><a href="../../pages/MALOCS/malocshboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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
                  <li><a href="../../pages/MAO/maodashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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
                  <li><a href="../../pages/MEMS/dashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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
                  <li><a href="../../pages/MPODC/mhrdashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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
                <a href="#"><i class="fa fa-circle-o"></i> OMOIA
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="../../pages/OMOIA/omoiadashboard.php"><i class="fa fa-circle-o"></i> HAZARD</a></li>

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

      <!-- Main content -->
      <section class="content-header">
        <h1>
          MOR Form

        </h1>
        <ol class="breadcrumb">
          <li class="active"><a href="#"><i class="fa fa-dashboard"></i> MOR Form</a></li>

        </ol>
      </section>

      <?php
      $pagebox = "../components/morform.php";

      include($pagebox);

      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
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

  <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="../components/morjqeury.js"></script>


</body>

</html>