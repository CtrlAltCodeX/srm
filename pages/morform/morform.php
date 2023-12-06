


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | HAZARD FORM</title>
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
  
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <link rel="stylesheet" href="../../dist/css/custom.css">
  <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
  
  


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
        <li  class="active"><a href="../../pages/submitforms/hazardreport.php"><i class="fa fa-dashboard"></i> <span>Hazard Form</span></a></li>
		
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
        Mandatory Occurance Report Form
        
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Hazard Form</a></li>
        
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
			   <label >Source</label>
					<select class="form-control select2" style="width: 100%;" id="source" >                  
						<option>Manual/SOP Review</option>
						<option>National Legislation Review</option>
						<option>On-site Inspection</option>
						<option>Interview </option> 
						<option>Group discussion</option> 
						<option>Observation</option> 
						<option>Assessment of Department logs/records</option>						
					</select></div>
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
				
				<div class="form-group">
                  <label>Enter the following details to be notified if the hazard closes.</label>
                  <input class="form-control"  placeholder="Name ..." id="username" type="text" ></input>
				  <input class="form-control"  placeholder="Email ..." id="useremail" type="text"></input>
				  <input class="form-control"  placeholder="Phone ..." id="userphone" type="text"></input>
                </div>
				
				
				
				
				</form>
				
				<div class="form-group">
					<button type="button" id="submit2" class="btn btn-primary" onclick="bhejo()" >Submit</button>
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
					<h3>Tips</h3>
					<h4>Date of Occurance :</h4> <p>The date of the event occur/occured</p>
					<h4>Select Airport :</h4> <p>Airport in which the event occur/occured</p>
					<h4>Related to: </h4><p>Safety area involved, if unsure, select unsure</p>
					<h4>Hazard/ Incident Description : </h4><p>Describe the event in your own words</p>
					<h4>Select Potential Cause Type : </h4><p>What caused the event</p>
					<h4>Potential Cause Description : </h4><p>Describe the cause in your own words</p>
					<h4>Select Effect Type : </h4><p>What the effect might be after the event</p>
					<h4>Effect/ Consequence Description : </h4><p>Describe the effect in your own words</p>
					
				</div>
			
			</div>
		
          <!-- Horizontal Form -->
          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        </div>
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

<script>
function bhejo() {
	
var airport = document.getElementById("airport").value;
var dateoccur = document.getElementById("datepicker").value;
var hitype = document.getElementById("hitype").value;
var hid = document.getElementById("hid").value;
var potcausetype = document.getElementById("causetype").value;
var potcaused = document.getElementById("pcd").value;
var effecttype = document.getElementById("effecttype").value;
var effectd = document.getElementById("ecd").value;
var username = document.getElementById("username").value;
var useremail = document.getElementById("useremail").value;
var userphone = document.getElementById("userphone").value;
var source = document.getElementById("source").value;


var dataString = 'dateoccur=' + dateoccur + '&hitype=' + hitype + '&hid=' + hid + '&potcausetype=' + potcausetype + '&potcaused=' + potcaused + '&effecttype=' + effecttype
 + '&effectd=' + effectd + '&username=' + username + '&useremail=' + useremail +'&userphone=' + userphone + '&airport=' + airport + '&source='+ source;
if (hid == '' ) 
{
	alert("Please Briefly describe the Hazard");
} 
else 
{
// AJAX code to submit form.
	$.ajax({
	type: "POST",
	url: "hazardreportmysql.php",
	data: dataString,
	cache: false,
	success: function(html) 
		{      
		     
					console.log(html);
					
			        var airport = document.getElementById("airport").value;
					var dateoccur = document.getElementById("datepicker").value;
					var hitype = document.getElementById("hitype").value;
					var hid = document.getElementById("hid").value;
					var potcausetype = document.getElementById("causetype").value;
					var potcaused = document.getElementById("pcd").value;
					var effecttype = document.getElementById("effecttype").value;
					var effectd = document.getElementById("ecd").value;
					var username = document.getElementById("username").value;
					var useremail = document.getElementById("useremail").value;
					var userphone = document.getElementById("userphone").value;
					var id = $.trim(html);
					var source = document.getElementById("source").value;
					
					var dataString = 'id=' + id + '&dateoccur=' + dateoccur + '&hitype=' + hitype + '&hid=' + hid + '&potcausetype=' + potcausetype + '&potcaused=' + potcaused + '&effecttype=' + effecttype
					+ '&effectd=' + effectd + '&username=' + username + '&useremail=' + useremail +'&userphone=' + userphone + '&airport=' + airport + '&source='+ source;
					
					if (hid == '' ) 
					{
						alert("Please Briefly describe the Hazard");
					} 
					 
					 	$.ajax({
							type: "POST",
							url: "hazardinsert.php",
							data: dataString,
							cache: false,
							success: function(htmltwo) 
							{      
		     
								console.log(htmltwo);
								 
								 $('html, body').animate({ scrollTop: 0 }, 'slow');
								 setTimeout(function(){$('#submitting').modal('hide')}, 3)
								$('#submitting').show();
								$("#submitting").fadeTo(3000, 500).slideUp(500, function()
								{
								$("#submitting").alert('close'); 
								});						 
							   			
								$('#successmodel').delay(3200).fadeIn(500);
								$('#successmodel').delay(3000).fadeOut(500);
								
								setTimeout(function(){location.reload();}, 7150); 


					
			       					

							},
					error: function (htmltwo) 
					{
		  
						console.log(htmltwo);
		   
					}
						});
		},			

        
	   error: function (html) {
		   /* document.getElementById('hazardform').reset(); */
		   console.log(html);
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
	
	$(".timepicker").timepicker({
      showInputs: false
    });
	
	//iCheck for checkbox and radio inputs
    

	
	//Flat red color scheme for iCheck
    
</script>
</body>
</html>
