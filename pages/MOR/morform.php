


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | MOR FORM</title>
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
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      
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
        <li  class="active"><a href="../../pages/submitforms/hazardreport.php"><i class="fa fa-dashboard"></i> <span>MOR Form</span></a></li>
		
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
        MOR Form
        
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> MOR Form</a></li>
        
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
			  
			  
        <!-- left column -->
        <div class="col-md-6">
		
		
          <!-- general form elements -->
          <div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body" >
              <form role="form" method="POST" action="" id="hazardform">
                <div class="form-group">
			   <input class="form-control"  placeholder="MOR ID (M1/2017)" id="morid" type="text" ></input>
				  <input class="form-control"  placeholder="CAFF ID" id="caafid" type="text"></input>
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
			   
				  <div class="form-group">
			   <label >Categories of Occurance</label>
				  <select class="form-control select2" style="width: 100%;" id="coo" >                  
						<option>ACCIDENT</option>
						<option>INCIDENT</option>
						<option>APHAZ</option>
						<option>FAILURE</option> 
						<option>PROCEDURAL</option> 
						<option>BIRDSTRIKE</option> 
						<option>GENERAL</option>
                        							
					</select></div>
                
				  <div class="form-group">
                  
                  <input class="form-control"  placeholder="AIRCRAFT TYPE & SERIES" id="actypeseries" type="text" ></input>
				  <input class="form-control"  placeholder="REGISTRATION" id="registration" type="text"></input>
				  <input class="form-control"  placeholder="OPERATOR" id="operator" type="text"></input>
				  
				  <div class="form-group">
                <label>Date :</label>

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
                  <label>Time:</label>

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
				 <label>Time Type:</label>
				  <select class="form-control select2" style="width: 100%;" id="dtn" >                  
						<option>N/A</option>
						<option>DAY</option>
						<option>TWILIGHT</option>
						<option>NIGHT</option>
							
					</select></div>
                
				  <input class="form-control"  placeholder="LOCATION/POSITION/RWY" id="lpr" type="text"></input>
				  
				  <label >FLIGHT/CABIN CREW REPORT</label>
				  <input class="form-control"  placeholder="FLIGHT NO" id="fno" type="text"></input>
				  <input class="form-control"  placeholder="ROUTE FROM" id="routefrom" type="text" ></input>
				  <input class="form-control"  placeholder="ROUTE TO" id="routeto" type="text"></input>
				  <input class="form-control"  placeholder="IAS (kts)" id="ias" type="text"></input>
				  <input class="form-control"  placeholder="FL/ALT/HT (ft)" id="fah" type="text"></input>
				  <label>FCR Clearance:</label>
				  <select class="form-control select2" style="width: 100%;" id="iv" >                  
						<option>N/A</option>
						<option>IFR</option>
						<option>VFR</option>
						
				  </select>
					
					
				
					<label >ETOPS/RVSM/RNP 4/10</label>
						<select class="form-control select2" style="width: 100%;" id="err" >                  
							<option>N/A</option>
							<option>YES</option>
							<option>NO</option>							                   							
					</select></div>
					
					<div class="form-group">
			   <label >Nature of Flight</label>
				  <select class="form-control select2" style="width: 100%;" id="nof" >                  
						<option>N/A</option>
						<option>PAX</option>
						<option>FREIGHT</option>
						<option>POSITIONING</option>
						<option>FERRY</option> 
						<option>TEST</option> 
						<option>TRAINING</option> 
						<option>BUSINESS</option>						
						<option>AGRICULTURAL</option>
						<option>SURVEY</option>
						<option>PLEASURE</option>
						<option>CLUB/GROUP</option> 
						<option>PRIVATE</option> 
						<option>PARACHUTING</option> 
						<option>TOWING</option>
                        							
					</select></div>
					
					<div class="form-group">
			   <label >Flight Phase</label>
				  <select class="form-control select2" style="width: 100%;" id="fp" >                  
						<option>N/A</option>
						<option>PARKED</option>
						<option>TAXYING</option>
						<option>TAKE-OFF</option>
						<option>INIT CLIMB</option> 
						<option>CLIMB</option> 
						<option>CRUISE</option> 
						<option>DESCENT</option>						
						<option>HOLDING</option>
						<option>APPROACH</option>
						<option>LANDING</option>
						<option>CLUB/GROUP</option> 
						<option>CIRCUIT</option> 
						<option>AEROBATICS</option> 
						<option>HOVER</option>
                        							
					</select></div>
					
					
					</div>
                
                </div>
				
				<!-- Date Picker-->
                
                
				</form>
				
				
            </div> 
			
		<div class="col-md-6">
		
		
          <!-- general form elements -->
          <div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body" >
              <form role="form" method="POST" action="" id="hazardform">
               
				  
			   <label ><h2>ENVIRONMENT</h2></label>
			   <div class="form-group">
			    <label ><h3>WIND</h3></label>
				  
                
				  <div class="form-group">
                  
                  <input class="form-control"  placeholder="DRIN SPEED (kts)" id="ds" type="text" ></input>
				  <input class="form-control"  placeholder="OAT(oC)" id="oat" type="text"></input>
				  </div>
				  <div class="form-group">
				  <label ><h3>CLOUD</h3></label>
				  
                
				  <div class="form-group">
                  
                  <input class="form-control"  placeholder="Type" id="ctype" type="text" ></input>
				  <input class="form-control"  placeholder="Height (ft)" id="cht" type="text"></input>
				   <input class="form-control"  placeholder="8th" id="cth" type="text"></input>
				  
					</div>
					
					</div>
                
					<div class="form-group">
				  <label ><h3>PRECIPITATION</h3></label>
				  
                
				  <div class="form-group">
				  <label >Weather</label>
                  <select class="form-control select2" style="width: 100%;" id="pw" >                  
						<option>N/A</option>
						<option>RAIN</option>
						<option>SNOW</option>
						<option>SLEET</option>
						<option>HAIL</option> 
						
                        							
					</select>
					<label >Level</label>
					<select class="form-control select2" style="width: 100%;" id="pt" >                  
						<option>N/A</option>
						<option>LIGHT</option>
						<option>MOD</option>
						<option>HEAVY</option>
						
						
                        							
					</select>
                 
					</div>
					
					</div>
					
					<div class="form-group">
				  <label ><h3>OTHER METEOROLOGICAL CONDITIONS</h3></label>
				  
                
				  <div class="form-group">
               <label >VISIBILITY</label>
                 <input class="form-control"  placeholder="Km/m" id="vk" type="text" ></input>
				  
					</div>
					<div class="form-group">
               <label >ICING</label>
                 <select class="form-control select2" style="width: 100%;" id="icing" > 
						<option>N/A</option>                 
						<option>LIGHT</option>
						<option>MOD</option>
						<option>SEVERE</option>
						
						
                        							
					</select>
					</div>
					<div class="form-group">
               <label >TURBULANCE</label>
                 <select class="form-control select2" style="width: 100%;" id="turbulance" >                  
						<option>N/A</option>
						<option>LIGHT</option>
						<option>MOD</option>
						<option>SEVERE</option>
						
						
                        							
					</select>
					</div>
					
					</div>
					
					<div class="form-group">
				  <label ><h3>RUNWAY STATE</h3></label>
				  
                
				  <div class="form-group">
				   <label >Status</label>
                  <select class="form-control select2" style="width: 100%;" id="rst" >                  
						<option>N/A</option>
						<option>DRY</option>
						<option>WET</option>
						<option>ICE</option>
						<option>SNOW</option> 
						<option>SLUSH</option> 
						
                        							
					</select>
					 <label >Category</label>
					<select class="form-control select2" style="width: 100%;" id="rsc" >                  
						<option>N/A</option>
						<option>CATEGORY I</option>
						<option>CATEGORY II</option>
						<option>CATEGORY III</option>
						
						
                        							
					</select>
                 
					</div>
					
					</div>
					
				</div>
				
				<!-- Date Picker-->
                
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
                
                		
               <!-- Hazard icident description-->
			
				</form>
				
				
            </div> 
			
			
			</div>

			
            <!-- /.box-body -->
          </div>
          
		<div class="col-md-12">
			<div class="box box-ptimary">
			 <div class="box-body" >
				<div class="form-group">
                  <label>BRIEF TITLE</label>
				  <input class="form-control"  placeholder="Title" id="bt" type="text" ></input>
				  
                  </div>
				  
				  <div class="form-group">
                  <label>NARRATIVE</label>
				  <textarea class="form-control" rows="10" placeholder="Enter ..." id="narrative"></textarea>
				  
                  </div>
				  <div class="form-group">
				  <label ><h3>REPORTER DETAILS</h3></label>
				  </div>
                <div class="col-md-3">
				  <div class="form-group">
               <label >ORGANISATION</label>
                 <input class="form-control"  placeholder="Enter..." id="organisation" type="text" ></input>
				  
					</div>
										
					</div>
					
				<div class="col-md-3">
				 <div class="form-group">
               <label >NAME</label>
                 <input class="form-control"  placeholder="Enter..." id="name" type="text" ></input>
				  
					</div>
					
					
					</div>
					
				<div class="col-md-3">
				 <div class="form-group">
               <label >POSITION</label>
                 <input class="form-control"  placeholder="Enter..." id="position" type="text" ></input>
				  
					</div>
					
					</div>
					<div class="col-md-3">
					<div class="form-group">
									<label for="exampleInputFile">Upload Original</label>
									<input type="file" id="exampleInputFilei">
									
				</div></div>
				
				
			 </div>
			</div>
			<div style=" display: table;  margin: 0 auto;">
					<button type="button" id="submit2" class="btn btn-danger" onclick="submitmor()" >Submit</button>
				</div>	
		</div>
        
		
		</div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
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
    <strong>Copyright &copy; 2017 SRM</a>.</strong> All rights
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

<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script>
function submitmor() {
$('html').scrollTop(0);
var morid;
morid = document.getElementById("morid").value;
if(morid =='')
{
	$.ajax({
	type: "POST",
	url: "morgetid.php",
	
	 async: false,
	success: function(html) 
		{   
		
		morid = $.trim(html);
		
		
		},
		 error: function (html) 
		 {
		   /* document.getElementById('hazardform').reset(); */
		   console.log(html);
		   $('html').scrollTop(0);
		    
                }
				});
}
alert(morid);

var caafid = document.getElementById("caafid").value;

var receiveddate = document.getElementById("datepickerTWO").value;

var coo = document.getElementById("coo").value;
var actypeseries = document.getElementById("actypeseries").value;
var registration = document.getElementById("registration").value;
var operator = document.getElementById("operator").value;
var doo = document.getElementById("datepicker").value;
var timeoc = document.getElementById("timeoc").value;
var dtn = document.getElementById("dtn").value;
var lpr = document.getElementById("lpr").value;
var fno = document.getElementById("fno").value;
var routefrom = document.getElementById("routefrom").value;
var routeto = document.getElementById("routeto").value;
var ias = document.getElementById("ias").value;
var fah = document.getElementById("fah").value;
var iv = document.getElementById("iv").value;
var err = document.getElementById("err").value;
var nof = document.getElementById("nof").value;

var fp = document.getElementById("fp").value;
var ds = document.getElementById("ds").value;
var oat = document.getElementById("oat").value;
var ctype = document.getElementById("ctype").value;
var cht = document.getElementById("cht").value;
var cth = document.getElementById("cth").value;
var pw = document.getElementById("pw").value;
var pt = document.getElementById("pt").value;
var vk = document.getElementById("vk").value;
var icing = document.getElementById("icing").value;
var turbulance = document.getElementById("turbulance").value;
var rst = document.getElementById("rst").value;
var rsc = document.getElementById("rsc").value;
var airport = document.getElementById("airport").value;
var hitype = document.getElementById("hitype").value;
var qaso = document.getElementById("qaso").value;
var riskowner = document.getElementById("riskowner").value;
var lastupdatedate = document.getElementById("datepickerONE").value;
var updatedetails = document.getElementById("updatedetails").value;
var status = document.getElementById("status").value;


var bt = document.getElementById("bt").value;
var narrative = document.getElementById("narrative").value;
var organisation = document.getElementById("organisation").value;
var name = document.getElementById("name").value;
var position = document.getElementById("position").value;
var myFileList = document.getElementById('exampleInputFilei').files;
var myFile = myFileList[0];
       if(!(myFile==null))
		{
	// Set some variables containing the three attributes of the file
			var myFileName = myFile.name;
			var myFileSize = myFile.size;
			var myFileType = myFile.type;
			
			switch(myFileType)
			{
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
 
			uploadFile(myFile); 
			var dataString = 'morid=' + morid + '&caafid=' + caafid + '&receiveddate=' + receiveddate + '&coo='+ coo + '&actypeseries=' + actypeseries + '&registration=' + registration + '&operator=' + operator + 
			'&doo=' + doo + '&timeoc=' + timeoc + '&dtn=' + dtn  + '&lpr=' + lpr + '&fno=' + fno + 
			'&routefrom=' + routefrom + '&routeto=' + routeto + '&ias=' + ias  + '&fah=' + fah + 
			'&iv=' + iv + '&err=' + err + '&nof=' + nof + '&fp=' + fp  + '&ds=' + ds + '&oat=' + oat + 
			'&ctype=' + ctype + '&cht=' + cht + '&cth=' + cth + '&pw=' + pw + '&pt=' + pt + '&vk=' + vk + '&icing=' + icing + '&turbulance=' + turbulance + '&rst='+ rst + 
			'&rsc=' + rsc + '&airport=' + airport + '&hitype=' + hitype  + '&bt=' + bt + '&qaso=' + qaso + '&riskowner=' + riskowner + 
			'&lastupdatedate=' + lastupdatedate + '&updatedetails=' + updatedetails + '&status=' + status + '&narrative=' + narrative + 
			'&organisation=' + organisation + '&name=' + name + '&position=' + position  + '&myFileName=' + myFileName + '&myFileSize=' + myFileSize + '&myFileType=' + myFileType + '&extension=' + extension; 
			}
		else
			{
			
				var dataString = 'morid=' + morid + '&caafid=' + caafid + '&receiveddate=' + receiveddate + '&coo='+ coo + '&actypeseries=' + actypeseries + '&registration=' + registration + '&operator=' + operator + 
			'&doo=' + doo + '&timeoc=' + timeoc + '&dtn=' + dtn  + '&lpr=' + lpr + '&fno=' + fno + 
			'&routefrom=' + routefrom + '&routeto=' + routeto + '&ias=' + ias  + '&fah=' + fah + 
			'&iv=' + iv + '&err=' + err + '&nof=' + nof + '&fp=' + fp  + '&ds=' + ds + '&oat=' + oat + 
			'&ctype=' + ctype + '&cht=' + cht + '&cth=' + cth + '&pw=' + pw + '&pt=' + pt + '&vk=' + vk + '&icing=' + icing + '&turbulance=' + turbulance + '&rst='+ rst + 
			'&rsc=' + rsc + '&airport=' + airport + '&hitype=' + hitype  + '&qaso=' + qaso + '&riskowner=' + riskowner + 
			'&lastupdatedate=' + lastupdatedate + '&updatedetails=' + updatedetails + '&status=' + status + '&bt=' + bt + '&narrative=' + narrative + 
			'&organisation=' + organisation + '&name=' + name + '&position=' + position + '&myFileName=' + myFileName + '&myFileSize=' + myFileSize + '&myFileType=' + myFileType + '&extension=' + extension; 
				
			}
			$.ajax({
					type: "POST",
					url: "morinsert.php",
					data: dataString,
					cache: false,
					success: function(html) 
					{      
						console.log("Success"+html);
						
						$("#submitting").fadeOut(500); 
						$('#successmodel').fadeIn(500);						
						/* setTimeout(function(){location.reload();}, 7150);  */			
						
					},
					error: function (html) 
					{
						
						console.log("Error"+html);
						
					}
				});
			

}
function uploadFile(myFileObject) {
	// Open Our formData Object
	var formData = new FormData();
 
	// Append our file to the formData object
	// Notice the first argument "file" and keep it in mind
	formData.append('my_uploaded_file', myFileObject);
 
	// Create our XMLHttpRequest Object
	var xhr = new XMLHttpRequest();
 
	// Open our connection using the POST method
	xhr.open("POST", '../dbfiles/upload.php');
 
	// Send the file
	xhr.send(formData);
}





</script>
<script language="javascript" type="text/javascript">
     $(window).load(function() {
		 $(".loader").fadeOut("slow");
     $('#successmodel').hide();
	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	 
	 document.getElementById('hazardform').reset();
	 
	 
  });
</script>

<script type="text/javascript">
            function run(){
				
					$('#successmodel').show();
					$("#successmodel").fadeTo(3000, 500).slideUp(500, function()
					{
						$("#successmodel").alert('close'); 
					});
					setTimeout(function(){location.reload();}, 4000);
                
            }

          
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
	
	//iCheck for checkbox and radio inputs
    

	
	//Flat red color scheme for iCheck
    
</script>
</body>
</html>
