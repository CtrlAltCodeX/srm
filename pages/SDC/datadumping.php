<?php

session_start();

if(!isset($_SESSION['USER']))
{
 header("Location: ../../");
}else if (!($_SESSION['USER'] == "SDA")&& !($_SESSION['USER'] == "EXECUTIVE") )
{
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
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b><?php echo $_SESSION["USER"]; ?></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Welcome </b><?php echo $_SESSION["USER"]; ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
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
            <li ><a href="sdcdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>  
			<li class="active"><a href="datadumping.php"><i class="fa fa-circle-o"></i> DATA DUMPING</a></li>
            		
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
		
		
		<li>
              <a href="#"><i class="fa fa-dashboard"></i> OHS
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../OHS/ohsdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
				
                </ul>
         </li>
             	
		
			
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>MAO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="../../pages/MAO/airsidedashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
			
            		  
            
            
          </ul>
        </li>
      
	      
	    	
		<li  ><a href="../../pages/submitforms/hazardreport.php"><i class="fa fa-dashboard"></i> <span>Hazard Form</span></a></li>
		
	    
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
                There were no issues submitting your form. Please wait while the page refreshes.
              </div>
			  
			  <div class="alert alert-danger alert-dismissible" id="verybadmodel">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Failed!</h4>
                Something went wrong. Please contact developer. Lol.
              </div>
			  
		<form role="form" method="POST" action="" id="hazardform">	  
        <!-- left column -->
        <div class="col-md-6">
		
		
          <!-- general form elements -->
          <div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body" >
              
               <div class="form-group">
			   <div class="form-group">
			    <div class="form-group">
			   <label >Hazard / Incident</label>
					<select class="form-control select2" style="width: 100%;" id="hazorinc" >                  
						<option>HAZARD</option>
						<option>INCIDENT</option>
						
                        						
					</select></div>
			   <label >Source</label>
					<select class="form-control select2" style="width: 100%; " id="source" >                  
						<option>SRM Audit - Manual/SOP Review</option>
						<option>SRM Audit - National Legislation Review</option>
						<option>SRM Audit - On-site Inspection</option>
						<option>SRM Audit - Interview </option> 
						<option>SRM Audit - Group discussion</option> 
						<option>SRM Audit - Observation</option> 
						<option>SRM Audit - Assessment of Department logs/records</option>
                        <option>General - Manual/SOP Review</option>
						<option>General - National Legislation Review</option>
						<option>General - On-site Inspection</option>						
						<option>General - Group discussion</option> 
						<option>General - Observation</option> 
						<option>General - Assessment of Department logs/records</option>						
					</select></div>
                  <label>ID</label>
                  <input class="form-control" rows="3" placeholder="Formart: H2/2017" id="id"></input>
                </div>
				
				<div class="form-group">
                <label>Received Date :</label>

                <div class="input-group date" >
                  <div class="input-group-addon" >
                    <i class="fa fa-calendar" ></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepickerTWO" >
                </div>
                <!-- /.input group -->
              </div>

                <!-- Date Picker-->
                <div class="form-group">
                <label>Date of Occurance :</label>

                <div class="input-group date" >
                  <div class="input-group-addon" >
                    <i class="fa fa-calendar" ></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" >
                </div>
                <!-- /.input group -->
              </div>
			  <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time of occurance:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="timeoc">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
          
                <div class="form-group">
					<label>Select Airport Involved</label>
						<select class="form-control" id="airport">
							<?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM airport";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['airport']."</option>";
									
								}
								mysqli_close($db);
									
							?>	
				
						</select>
               
			    </div>
                
				<div class="form-group">
					<label>Related to: </label>
						<select  class="form-control" id="hitype">
				
				<?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM related";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['focusarea']."</option>";
									
								}
								mysqli_close($db);
									
							?>	
				
               
                 </select>
                
				</div>
                		
               <!-- Hazard icident description-->
			    <div class="form-group">
                  <label>Hazard/ Incident Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." id="hid"></textarea>
                </div>
				
				<div class="form-group">
					<label>Select Potential Cause Type</label>
						<select  class="form-control" id="causetype">
							<?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM potcause";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['CAUSEtype']."</option>";
									
								}
								mysqli_close($db);
									
							?>	
				
						</select>
               
			    </div>
				
				<div class="form-group">
                  <label>Potential Cause Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." id="pcd"></textarea>
                </div>       

                <div class="form-group" >
					<label>Select Effect Type</label>
					<select  class="form-control" id="effecttype">
						<?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM effect";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['EFFECTtype']."</option>";
									
								}
								mysqli_close($db);
									
							?>
						</select>
				</div>
				
                <div class="form-group">
                  <label>Effect/ Consequence Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." id="ecd"></textarea>
                </div>
				
					
            </div> 

			
            <!-- /.box-body -->
          </div>
          

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
			<div class="box box-info">
				<div class="box-body">
					<div class="form-group">
					<h3>Risk Treatment Plan</h3>
					<label>Risk Context(Effect/How it can happen?):</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." id="riskcontext" ></textarea>
					
					<h4>Initial Risk Rating</h4>
					<label >Risk Consequence</label>
					<select class="form-control select2" style="width: 100%; " id="riskconsequenceq" >                  
						<option>A - Catastrophic</option>
						<option>B - Hazardous  </option>
						<option>C - Major</option>
						<option>D - Minor</option> 
						<option>E - Negligence</option> 									  
					</select>
					<label >Risk Likelihood</label>
					<select class="form-control select2" style="width: 100%; " id="rhoodq" >                  
						<option>5 - Frequent</option>
						<option>4 - Occasional</option>
						<option>3 - Remote</option>
						<option>2 - Improbable</option> 
						<option>1 - Extremely Improbable</option> 									  
					</select>
					<label >Risk Level</label>
					<select class="form-control select2" style="width: 100%; " id="rlq" >                  
						<option>High Risk</option>
						<option>Medium Risk</option>
						<option>Low Risk</option>															  
					</select>
					<label >Response Expected Within</label>	
					<select class="form-control select2" style="width: 100%; " id="rewq" >                  
						<option>1 Week</option>
						<option>2 Weeks</option>
																			  
					</select>
					
					<label>Recommended Actions</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." id="recommendedaq" ></textarea>
					
					<label>OHS reference</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." id="ohsrefq" ></textarea>
					<div class="box box-danger">
							<div class="box-header">
							<h3 class="box-title">Residual Risk Rating</h3>
							</div>
							
							<div class="col-md-6">
					<label >Residual Risk Consequence</label>
					<select class="form-control select2" style="width: 100%; " id="resriskconsequenceq" >                  
						<option>A - Catastrophic</option>
						<option>B - Hazardous  </option>
						<option>C - Major</option>
						<option>D - Minor</option> 
						<option>E - Negligence</option> 									  
					</select>
					<label >Residual Risk Likelihood</label>
					<select class="form-control select2" style="width: 100%; " id="resrhoodq" >                  
						<option>5 - Frequent</option>
						<option>4 - Occasional</option>
						<option>3 - Remote</option>
						<option>2 - Improbable</option> 
						<option>1 - Extremely Improbable</option> 									  
					</select>
					</div>
					<label ></label>
					<div class="col-md-6">
					<label >Residual Risk Level</label>
					<select class="form-control select2" style="width: 100%; " id="resrlq" >                  
						<option>High Risk</option>
						<option>Medium Risk</option>
						<option>Low Risk</option>															  
					</select>
					<label ></label>
					<input class="form-control" placeholder="Resdidual risk rating" id="resrating"></input>
					</div>
					<label ></label>
					<h3>Status</h3>
					
                  <label>User Reported</label>
                  <input class="form-control" rows="3" placeholder="Enter Name" id="userreported"></input>
				  
				  <label>Qaso</label>
                  <select class="form-control select2" style="width: 100%; " id="qaso">
									  <?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM qaso";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['QASO']."</option>";
									
								}
								mysqli_close($db);
									
							?>	              
									                 
								</select>
                
				<label>Risk Owner</label>
                 <select class="form-control select2" style="width: 100%; " id="riskowner">
									  <?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM riskowners";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['RISKOWNER']."</option>";
									
								}
								mysqli_close($db);
									
							?>                  
								</select>
								
				<div class="form-group">
                <label>Date of Last Update :</label>

                <div class="input-group date" >
                  <div class="input-group-addon" >
                    <i class="fa fa-calendar" ></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepickerONE" >
                </div>
                <!-- /.input group -->
              </div>  
                <label>Update Details</label>
                   <textarea class="form-control" rows="3" placeholder="Enter Last Update" id="updatedetails" ></textarea>
					
				<label>Status</label>
                   <select class="form-control select2" style="width: 100%; " id="status">
									  <option>OPEN</option>
									  <option>CLOSED</option>
									             
								</select>
                
					
					</div>
					
				</div>
			
			</div>
		
          <!-- Horizontal Form -->
          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        </div>
		<div class="form-group">
					<button type="button" id="submit2" class="btn btn-primary" onclick="bhejo()" style="margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%" >Submit</button>
				</div>	
        <!--/.col (right) -->
      </form></div>
      <!-- /.row -->
    </section><!-- /.content -->
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
<link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">


<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script language="javascript" type="text/javascript">
     $(window).load(function() {
		 $(".loader").fadeOut("slow");
     $('#successmodel').hide();
	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	  $('#allsubmissionsdiv').css('visibility', 'hidden');
  });
</script>
<script>
$('#datepicker').datepicker({
      autoclose: true
    });
	$('#datepickerONE').datepicker({
      autoclose: true
    });
	$('#datepickerTWO').datepicker({
      autoclose: true
    });
	
	$(".timepicker").timepicker({
      showInputs: false
    });
	
	$("#example1").DataTable();
	$("#example11").DataTable();
	$("#example3").DataTable();
	
	
</script>

<script>
function bhejo() {
$('#submitting').show();	
var receiveddate = document.getElementById("datepickerTWO").value;
var airport = document.getElementById("airport").value;
var dateoccur = document.getElementById("datepicker").value;
var hitype = document.getElementById("hitype").value;
var hid = document.getElementById("hid").value;
var potcausetype = document.getElementById("causetype").value;
var potcaused = document.getElementById("pcd").value;
var effecttype = document.getElementById("effecttype").value;
var effectd = document.getElementById("ecd").value;

var id = document.getElementById("id").value;
var riskcontext = document.getElementById("riskcontext").value;
var riskconsequence = document.getElementById("riskconsequenceq").value;
var riskhood = document.getElementById("rhoodq").value;
var risklevel = document.getElementById("rlq").value;
var responseexpected = document.getElementById("rewq").value;
var recommendedaction = document.getElementById("recommendedaq").value;
var ohsref = document.getElementById("ohsrefq").value;
var userreported = document.getElementById("userreported").value;

var qaso = document.getElementById("qaso").value;
var riskowner = document.getElementById("riskowner").value;
var lastupdatedate = document.getElementById("datepickerONE").value;
var updatedetails = document.getElementById("updatedetails").value;
var status = document.getElementById("status").value;

var resriskconsequenceq = document.getElementById("resriskconsequenceq").value;
var resrhoodq = document.getElementById("resrhoodq").value;
var resrlq = document.getElementById("resrlq").value;
var resrating = document.getElementById("resrating").value;

var source = document.getElementById("source").value;

var hazorinc = document.getElementById("hazorinc").value;
var timeoc = document.getElementById("timeoc").value;

// Returns successful data submission message when the entered information is stored in database.
var dataString ={dateoccur: dateoccur ,timeoc: timeoc ,hazorinc: hazorinc ,hitype: hitype ,hid: hid ,potcausetype: potcausetype ,potcaused: potcaused ,effecttype: effecttype ,effectd: effectd  ,airport: airport ,id: id ,riskcontext: riskcontext ,riskconsequence: riskconsequence ,riskhood: riskhood  ,risklevel: risklevel ,responseexpected: responseexpected ,recommendedaction: recommendedaction ,ohsref: ohsref ,userreported: userreported  ,qaso: qaso ,riskowner: riskowner ,lastupdatedate: lastupdatedate ,updatedetails: updatedetails ,status: status ,receiveddate: receiveddate ,resriskconsequenceq: resriskconsequenceq ,resrhoodq: resrhoodq ,resrlq: resrlq ,resrating: resrating ,source: source};


if (hid == '' ) 
{
	alert("Please Briefly describe the Hazard");
} 
else 
{
// AJAX code to submit form.
	$.ajax({
	type: "POST",
	url: "datadumpmysql.php",
	data: dataString,
	cache: false,
	success: function(html) 
		{      
		     $("#submitting").fadeOut(500); 
											 
							   			
								$('#successmodel').fadeIn(500);
							
								
								setTimeout(function(){location.reload();}, 7150); 			
					

        },
	   error: function (html) {
		   /* document.getElementById('hazardform').reset(); */
		   $('html').scrollTop(0);
		    setTimeout(function(){$('#submitting').modal('hide')}, 3)
					$('#submitting').show();
					$("#submitting").fadeTo(3000, 500).slideUp(500, function()
					{
						$("#submitting").alert('close'); 
					});
                    
					$('#verybadmodel').delay(3200).fadeIn(500);
					$('#verybadmodel').delay(3000).fadeOut(500);
					
                }
});
}
return false;
}





</script>
<script>
  
 function myFunction() {
	 setTimeout(function(){$('#exampleModal').modal('hide')}, 3)
var ro = document.getElementById("riskowner").value;
var qaso = document.getElementById("qaso").value;
var id = document.getElementById("ID").value;
var hitype = document.getElementById("hitype").value;
var pct = document.getElementById("pct").value;
var ect = document.getElementById("ect").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString ={ro: ro ,qaso: qaso ,id: id ,hitype: hitype ,pct: pct ,ect: ect};
if (ro == '' || qaso == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
		type: "POST",
		url: "process.php",		
		data: dataString,
		cache: false,
		
		
		success: function(html) 
		{      
		
		
		
		            $('html').scrollTop(0);
			 
			        setTimeout(function(){$('#submitting').modal('hide')}, 3)
					$('#submitting').show();
					$("#submitting").fadeTo(3000, 500).slideUp(500, function()
					{
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
					 setTimeout(function(){location.reload();}, 7150); 
	                /* setTimeout(function(){$('#exampleModal').modal('hide')}, 3)
					$('#successmodel').show();
					$("#successmodel").fadeTo(3000, 500).slideUp(500, function()
					{
						$("#successmodel").alert('close'); 
					});
					setTimeout(function(){location.reload();}, 4000); */
					

        },
	   error: function (html) {
                    $('html').scrollTop(0);
		            setTimeout(function(){$('#submitting').modal('hide')}, 3)
					$('#submitting').show();
					$("#submitting").fadeTo(3000, 500).slideUp(500, function()
					{
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
}
return false;
}

</script>
<script>
 function sendtoriskowner() {
setTimeout(function(){$('#myMODAL').modal('hide')}, 3)

var id = document.getElementById("IDq").value;

// Returns successful data submission message when the entered information is stored in database.
var dataStringro ={id: id};


// AJAX code to submit form.
$.ajax({
		type: "POST",
		url: "sendtoriskowner.php",		
		data: dataStringro,
		cache: false,
		
		
		success: function(html) 
		{      
		
		
		
		            $('html').scrollTop(0);
			 
			        setTimeout(function(){$('#submitting').modal('hide')}, 3)
					$('#submitting').show();
					$("#submitting").fadeTo(3000, 500).slideUp(500, function()
					{
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
					 setTimeout(function(){location.reload();}, 7150); 
	                /* setTimeout(function(){$('#exampleModal').modal('hide')}, 3)
					$('#successmodel').show();
					$("#successmodel").fadeTo(3000, 500).slideUp(500, function()
					{
						$("#successmodel").alert('close'); 
					});
					setTimeout(function(){location.reload();}, 4000); */
					

        },
	   error: function (html) 
	   {
                    $('html').scrollTop(0);
		            setTimeout(function(){$('#submitting').modal('hide')}, 3)
					$('#submitting').show();
					$("#submitting").fadeTo(3000, 500).slideUp(500, function()
					{
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

function logout()
{
	$.ajax({
		type: "POST",
		url: "../../logout.php",		
		
		cache: false,
		
		
		success: function(html) 
		{      
		
			setTimeout(' window.location.href = "http://localhost/srm"; ',500);		

        },
	   error: function (html) 
	   {
                  
        }
		
             
		
		
       
	    
    });
}

function totalsubmissions()
{
	
	var lTable = document.getElementById("allsubmissionsdiv");
    lTable.style.display = (lTable.style.display == "table") ? "none" : "table";
	if(lTable.style.display == "table")
	{
	$('#allsubmissions').empty();
	
	
	
	$.ajax({
		type: "POST",
		url: "totalsubmissions.php",
		cache: false,		
		dataType: 'json', 
		
		success: function(html) 
		{      
		            
					console.log (html);
					/* var title=html[0];  */

					var len = html.length;
					
					var tr_strone = "<thead><tr>"+
                  "<th>ID</th>"+
                  "<th > <nobr>Airport</nobr></th>"+
                                  
                "</tr></thead><tbody id=myTable>";

                $("#allsubmissions").append(tr_strone);
               for(var i=0; i<len; i++)
			   {
                var hazid = html[i].hazid;
				var airport = html[i].airport; 
				

                var tr_str = "<tr>" +
                    "<td >" + hazid + "</td>"+
					"<td >" + airport + "</td>"+
					
					"</tr>";

                $("#allsubmissions").append(tr_str);
				}
				var tr_strqw = "</tbody><tfoot><tr>"+
                  "<th >ID</th>"+
                  "<th >airport</th>"+
                  
                "</tr></tfoot><tbody>";

                $("#allsubmissions").append(tr_strqw);
				$('#allsubmissionsdiv').css('visibility', 'visible');
				
              $('#allsubmissions').DataTable();
					
					
					

        },
	   error: function (html) {
		   console.log (html);
                    
                }
});
	
	
	}else
	{
		
		table.destroy();
	}
	 
}


</script>

<script>
$('#exampleModal').on('show.bs.modal', function (event) {
	
	
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
  modal.find('.modal-body #usr').val(usr)
  modal.find('.modal-body #dvo').val(dvo)
  modal.find('.modal-body #dr').val(dr)
  modal.find('.modal-body #airport').val(airport)
  
  
  
  
})

$('#myMODAL').on('show.bs.modal', function (event) {
	
	
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
  modal.find('.modal-title').text('More details for Hazard/Incident Report for ID : ' + ID)
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
  
  
  
  
})
</script>


</body>
</html>
