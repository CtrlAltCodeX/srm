<?php

session_start();

if (!isset($_SESSION['USER'])) {
  header("Location: ../../");
} else if (!($_SESSION['USER'] == "MSRM") && !($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE") && !($_SESSION['USER'] == "CEO")) {
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
              <li class="active"><a href="msrmdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
              <li><a href="msrmcompliance.php"><i class="fa fa-circle-o"></i> COMPLIANCE</a></li>
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

      $('.audit_image_galery').fineUploader({
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
              var uuid = $('.audit_image_galery').fineUploader('getUuid', id);
              $('.audit_image_galery_listed').append('<input type="text" hidden class="listed_file_uuid" name="audit_image_uuid[]" value="' + uuid + '" /><input type="text" hidden class="listed_file_name" name="audit_image_name[]" value="' + xhr.uploadName + '" />');
              // $('.audit_image_galery_listed').append('<input type="text" class="listed_file_uuid" name="audit_image_uuid[' + id + ']" value="' + uuid + '" /><input type="text" class="listed_file_name" name="audit_image_name[' + id + ']" value="' + xhr.uploadName + '" />');

            } else {
              toastr['error'](xhr.error);
            }
          },
          onDeleteComplete: function(id, xhr, isError) {
            if (isError == false) {
              $('.audit_image_galery_listed').find('.listed_file_uuid[name="audit_image_uuid[' + id + ']"]').remove();
              $('.audit_image_galery_listed').find('.listed_file_name[name="audit_image_name[' + id + ']"]').remove();
            }
          }
        }
      }); /*end image galery*/
    });
  </script>

</body>

</html>