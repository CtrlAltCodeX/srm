<?php

session_start();

if (!isset($_SESSION['USER'])) {
  header("Location: ../../");
} else if (!($_SESSION['USER'] == "QASO-AERODOME") && !($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE")) {
  header("Location: ../../");
}
$pageuser = "AERODOME";

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | QASO-AERODROME</title>
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
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2/select2.css">

  <link rel="stylesheet" href="../../dist/css/custom.css">




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
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview active">
            <a href="#"><i class="fa fa-dashboard"></i> QASO-AERODROME
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="aerodashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
              <li class="active"><a href="aeroaudit.php"><i class="fa fa-circle-o"></i> AUDIT FORM</a></li>
              <li><a href="aerodatatables.php"><i class="fa fa-circle-o"></i> DATA ALL OPEN</a></li>
              <li><a href="aerodatatables2.php"><i class="fa fa-circle-o"></i> DATA ALL CLOSED</a></li>
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
          <label id="startro"><?PHP echo $_SESSION['USER']; ?></label> Dashboard


        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

          <li><a href="#">QASO-ENV</a></li>

        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
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
              There were no issues.
            </div>
            <div class="alert alert-danger alert-dismissible" id="verybadmodel">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-ban"></i> Failed!</h4>
              Something went wrong. Please contact developer.
            </div>

            <?php
            $pagebox = "../components/audit.php";

            include($pagebox);

            ?><!-- /.content -->
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
  <script src="../../plugins/iCheck/icheck.min.js"></script>

  <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="../components/qasomodalqeuries.js"></script>
  <script src="../components/qasomorfunctions.js"></script>

  <script type="text/javascript">
    var qaso = "<?= $pageuser ?>";
  </script>

  <script src="../../plugins/fine-upload/jquery.fine-uploader.min.js"></script>
  <script src="../../plugins/toastr/toastr.js"></script>
  <script src="../components/auditfunctions.js"></script>
  <script src="../components/qasoauditonload.js"></script>



  <script type="text/javascript">
    $(document).ready(function() {

      var pageuser = '<?= $pageuser ?>';
    })

    function myFunction() {



      var riskcontext = document.getElementById("riskcontext").value;
      var riskowner = document.getElementById("riskowner").value;
      var id = document.getElementById("ID").value;
      var riskconsequence = document.getElementById("riskconsequence").value;
      var rhood = document.getElementById("rhood").value;
      var rl = document.getElementById("rl").value;
      var rew = document.getElementById("rew").value;
      var recommendeda = document.getElementById("recommendeda").value;
      var ohsref = document.getElementById("ohsref").value;
      var label = $('#startro');
      var qaso = label.text();
      // Returns successful data submission message when the entered information is stored in database.
      var dataString = 'riskcontext=' + riskcontext + '&riskowner=' + riskowner + '&id=' + id + '&riskconsequence=' + riskconsequence + '&rhood=' + rhood + '&rl=' + rl +
        '&rew=' + rew + '&recommendeda=' + recommendeda + '&ohsref=' + ohsref + '&qaso=' + qaso;
      if (recommendeda == '' || ohsref == '' || riskcontext == '') {
        alert("Please ensure recommendation, isk context & ref is filled, If you have nothing to fill, please enter N/A");
      } else {
        setTimeout(function() {
          $('#exampleModal').modal('hide')
        }, 3)
        $('#submitting').show();
        // AJAX code to submit form.
        $.ajax({
          type: "POST",
          url: "../qasodbfiles/processohs.php",
          data: dataString,
          cache: false,
          success: function(html) {

            console.log(html);
            $.ajax({
              type: "POST",
              url: "../qasodbfiles/emailro.php",
              data: dataString,
              cache: false,
              success: function(html) {
                $.ajax({
                  type: "POST",
                  url: "../qasodbfiles/emailreporterwithro.php",
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
                console.log("big man" + html);
              }



            });





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
      return false;

    }

    function update() {


      $('#submitting').show();

      setTimeout(function() {
        $('#myMODALTHREE').modal('hide')
      }, 3)
      var updatecontent = document.getElementById("updatecontent").value;
      var updateuser = document.getElementById("updateuser").value;
      var id = document.getElementById("IDq").value;

      var resriskconsequenceq = document.getElementById("resriskconsequenceq").value;
      var resrhoodq = document.getElementById("resrhoodq").value;
      var resrlq = document.getElementById("resrlq").value;
      var resrating = document.getElementById("resrating").value;

      var radio = $('input[name=r1]:radio:checked').val();
      if (radio === "1") {
        var status = "CLOSED";
        var dataStringro = 'id=' + id + '&updatecontent=' + updatecontent + '&updateuser=' + updateuser + '&status=' + status +
          '&resriskconsequenceq=' + resriskconsequenceq + '&resrhoodq=' + resrhoodq + '&resrlq=' + resrlq + '&resrating=' + resrating;
        $.ajax({
          type: "POST",
          url: "../qasodbfiles/insertupdaterr.php",
          data: dataStringro,
          cache: false,
          success: function(html) {
            $.ajax({
              type: "POST",
              url: "../qasodbfiles/emailreporterclosure.php",
              data: dataStringro,
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
        var dataStringro = 'id=' + id + '&updatecontent=' + updatecontent + '&updateuser=' + updateuser + '&status=' + status;
        $.ajax({
          type: "POST",
          url: "../qasodbfiles/insertupdate.php",
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
      }

      return false;



    }

    function logout() {

      $('#submitting').show();
      $.ajax({
        type: "POST",
        url: "../qasodbfiles/logout.php",

        cache: false,


        success: function(html) {

          setTimeout(' window.location.href = "../../index.html"; ', 500);

        },
        error: function(html) {

        }

      });
    }
  </script>


  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {

      $('#updatetablee').empty();
      var button = $(event.relatedTarget) // Button that triggered the modal
      var ID = button.data('id')
      var hitype = button.data('hitype')
      var hid = button.data('hid')
      var causetype = button.data('causetype')
      var cd = button.data('cd')
      var effecttype = button.data('effecttype')
      var ed = button.data('ed')

      var dvo = button.data('deventoccurance')
      var dr = button.data('dreported')
      var riskowner = button.data('riskowner')
      var airport = button.data('airport')

      var modal = $(this)
      modal.find('.modal-title').text('More details for Hazard/Incident Report for ID : ' + ID)
      modal.find('.modal-body #ID').val(ID)
      modal.find('.modal-body #hitype').val(hitype)
      modal.find('.modal-body #hid').val(hid)
      modal.find('.modal-body #pct').val(causetype)
      modal.find('.modal-body #pcd').val(cd)
      modal.find('.modal-body #ect').val(effecttype)
      modal.find('.modal-body #ecd').val(ed)

      modal.find('.modal-body #dvo').val(dvo)
      modal.find('.modal-body #dr').val(dr)
      modal.find('.modal-body #riskowner').val(riskowner)

      modal.find('.modal-body #airport').val(airport)

      var dataString = 'id=' + ID;
      $.ajax({
        type: "POST",
        url: "../qasodbfiles/processupdate.php",
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
            "<th>Status</th>" +
            "<th>Evidence</th>" +
            "</tr></thead><tbody>";

          $("#updatetablee").append(tr_strone);
          for (var i = 0; i < len; i++) {
            var hazid = html[i].hazid;
            var updatedate = html[i].updatedate;
            var updatecontent = html[i].updatecontent;
            var person = html[i].person;
            var status = html[i].status;
            var link = html[i].link;


            var tr_str = "<tr>" +
              "<td >" + hazid + "</td>" +
              "<td >" + updatedate + "</td>" +
              "<td >" + updatecontent + "</td>" +
              "<td >" + person + "</td>" +
              "<td >" + status + "</td>" +
              "<td >" + link + "</td>" +
              "</tr>";

            $("#updatetablee").append(tr_str);
          }
          var tr_strqw = "</tbody><tfoot><tr>" +
            "<th >ID</th>" +
            "<th >Update Date</th>" +
            "<th>Update Content</th>" +
            "<th>Person</th>" +
            "<th>Status</th>" +
            "<th>Evidence</th>" +
            "</tr></tfoot><tbody>";

          $("#updatetablee").append(tr_strqw);







        },
        error: function(html) {
          console.log(html);

        }
      });


    })
    $('#myMODALTHREE').on('show.bs.modal', function(event) {
      $('#updatetable').empty();
      var button = $(event.relatedTarget) // Button that triggered the modal
      var ID = button.data('id')
      var hitype = button.data('hitype')
      var hid = button.data('hid')
      var causetype = button.data('causetype')
      var cd = button.data('cd')
      var effecttype = button.data('effecttype')
      var ed = button.data('ed')
      var usr = button.data('userreported')
      var dvo = button.data('deventoccurance')
      var dr = button.data('dreported')
      var qaso = button.data('qaso')
      var ro = button.data('riskowner')
      var riskcontext = button.data('riskcontext')
      var riskconsequence = button.data('riskconsequence')
      var riskhood = button.data('riskhood')
      var rl = button.data('risklevel')
      var response = button.data('response')
      var recommendeda = button.data('recommendeda')
      var ohsref = button.data('ohsref')

      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + ID)
      modal.find('.modal-body #IDq').val(ID)
      modal.find('.modal-body #hitypeq').val(hitype)
      modal.find('.modal-body #hidq').val(hid)
      modal.find('.modal-body #pctq').val(causetype)
      modal.find('.modal-body #pcdq').val(cd)
      modal.find('.modal-body #ectq').val(effecttype)
      modal.find('.modal-body #ecdq').val(ed)
      modal.find('.modal-body #usrq').val(usr)
      modal.find('.modal-body #dvoq').val(dvo)
      modal.find('.modal-body #drq').val(dr)

      modal.find('.modal-body #roq').val(ro)
      modal.find('.modal-body #qasoq').val(qaso)
      modal.find('.modal-body #riskcontextq').val(riskcontext)
      modal.find('.modal-body #riskconsequenceq').val(riskconsequence)
      modal.find('.modal-body #rhoodq').val(riskhood)
      modal.find('.modal-body #rlq').val(rl)
      modal.find('.modal-body #rewq').val(response)
      modal.find('.modal-body #recommendedaq').val(recommendeda)
      modal.find('.modal-body #ohsrefq').val(ohsref)

      var dataString = 'id=' + ID;

      // AJAX code to submit form.
      $.ajax({
        type: "POST",
        url: "../qasodbfiles/processupdate.php",
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
            "<th>Status</th>" +
            "<th>Evidence</th>" +
            "</tr></thead><tbody>";

          $("#updatetable").append(tr_strone);
          for (var i = 0; i < len; i++) {
            var hazid = html[i].hazid;
            var updatedate = html[i].updatedate;
            var updatecontent = html[i].updatecontent;
            var person = html[i].person;
            var status = html[i].status;
            var link = html[i].link;


            var tr_str = "<tr>" +
              "<td >" + hazid + "</td>" +
              "<td >" + updatedate + "</td>" +
              "<td >" + updatecontent + "</td>" +
              "<td >" + person + "</td>" +
              "<td >" + status + "</td>" +
              "<td >" + link + "</td>" +
              "</tr>";

            $("#updatetable").append(tr_str);
          }
          var tr_strqw = "</tbody><tfoot><tr>" +
            "<th >ID</th>" +
            "<th >Update Date</th>" +
            "<th>Update Content</th>" +
            "<th>Person</th>" +
            "<th>Status</th>" +
            "<th>Evidence</th>" +
            "</tr></tfoot><tbody>";

          $("#updatetable").append(tr_strqw);







        },
        error: function(html) {
          console.log(html);

        }
      });


    })
  </script>

</body>

</html>