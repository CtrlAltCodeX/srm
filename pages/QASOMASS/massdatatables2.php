<?php

session_start();

if(!isset($_SESSION['USER']))
{
 header("Location: ../../");
}else if (!($_SESSION['USER'] == "QASO-MASS") && !($_SESSION['USER'] == "SDA") && !($_SESSION['USER'] == "EXECUTIVE"))
{
	header("Location: ../../");
}
$pageuser="SECURITY";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRM PORTAL | EC</title>
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
   <section class="sidebar">
  <ul class="sidebar-menu">
	   <li class="header">MAIN NAVIGATION</li>
     <li class="treeview active">
              <a href="#"><i class="fa fa-dashboard"></i> QASO-ATSP
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
               <li ><a href="qasomassdashboard.php"><i class="fa fa-circle-o"></i> DASHBOARD</a></li>
								<li ><a href="massaudit.php"><i class="fa fa-circle-o"></i> AUDIT FORM</a></li>
				<li ><a href="massdatatables.php"><i class="fa fa-circle-o"></i> DATA ALL OPEN</a></li>
				<li class="active"><a href="massdatatables2.php"><i class="fa fa-circle-o"></i> DATA ALL CLOSED</a></li>
				
                </ul>
         </li>
	  </ul>
    </section>
	 </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="loader"></div>
    <section class="content-header">
       <h1>
        <label id="startro"><?PHP echo $pageuser;?></label> Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">DATA TABLES</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
		
		
		 
		 
		 
		 <div class="col-xs-12">
			
			
			<div class="box box-warning" id="submitting">
				<div class="box-header">
					<h3 class="box-title">Submitting</h3>
				</div>
            <div class="box-body">
              Request Pending
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
                Request completed. Standby for refresh !
              </div>
			   
			  
			<div class="alert alert-danger alert-dismissible" id="verybadmodel">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Failed!</h4>
                Something went really wrong. Please contact Shuyaib.
              </div>
            
						
			<!-- BLOCK ALL OPEN HAZARDS -->
			<div class="box box-primary">
			
			
			<div class="box-header">
              <h3 class="box-title">All Closed Hazards</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
              <table id="example3" class="table table-bordered table-striped " >
                <thead>
                <tr>
				  <th>ID</th>
				 
                 
				  <th>Title</th>                 
				  <th>Risk Owner</th>
                  <th>Risk Level</th>
				  
				   <th>Details</th>
                  <th>Update</th>
				 
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(CURDATE(),SDCSUBMITDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE  STATUS='CLOSED' AND QASO='$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['HAZID']."</td>";
							
							
							
							
							echo "<td>".$row['HITYPE']."</td>";
							echo "<td>".$row['RISKOWNER']."</td>";
							echo "<td>".$row['RISKLEVEL']."</td>";
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myMODAL' 
								data-id='".$row['HAZID']."'data-hazorinc='".$row['HAZORINC']."' data-airport='".$row['AIRPORT']."' data-hitype='".$row['HITYPE']."' data-hid='".$row['HID']."' data-causetype='".$row['CAUSETYPE']."'
								data-cd='".$row['CD']."' data-effecttype='".$row['EFFECTTYPE']."' data-ed='".$row['ED']."' data-deventoccurance='".$row['DEVENTOCCURANCE']."'data-timeoc='".$row['TIMEOC']."'
								data-dreported='".$row['DREPORTED']."' data-userreported='".$row['USERREPORTED']."'data-riskowner='".$row['RISKOWNER']."' 
								data-qaso='".$row['QASO']."'data-riskcontext='".$row['RISKCONTEXT']."'data-riskconsequence='".$row['RISKCONSEQUENCE']."'
								data-riskhood='".$row['RISKHOOD']."'data-risklevel='".$row['RISKLEVEL']."'data-response='".$row['RESPONSE']."'
								data-recommendeda='".$row['RECOMMENDEDA']."'data-ohsref='".$row['OHSREF']."'>View </button></td>";
							
								
													  
							echo "<td><button type='button' class='btn btn-warning' data-toggle='modal' data-target='#myMODALTWO' 
								data-id='".$row['HAZID']."'>Update</button></td>";
								
								
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
            </div>
 
			<!-- BLOCK ALL OPEN MOR'S -->
			<div class="box box-primary">
			<div class="box-header">
              <h3 class="box-title">All Closed MOR's</h3>
            </div>
		  
			<div class="box-body" id="tablediv">
              <table id="example33" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th> 
				  <th>CAAFID</th>			  
                 
				  <th>Title</th>      
				   <th>Manager</th>
                              
				  <th>Details</th>
                  <th>Update</th>
				 
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM mor  WHERE  STATUS='CLOSED' AND QASO='$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['MORID']."</td>";
							
							echo "<td>".$row['CAAFID']."</td>";
							
							
						
							 echo "<td>".$row['TITLE']."</td>"; 
							 echo "<td>".$row['RISKOWNER']."</td>"; 
							echo "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#MORMODAL' 
								data-id='".$row['MORID']."'data-caafid='".$row['CAAFID']."'data-catofoc='".$row['CATOFOC']."'data-actype='".$row['ACTYPE']."'data-reg='".$row['REG']."'data-operator='".$row['OPERATOR']."'
								data-date='".$row['DATE']."'data-time='".$row['TIME']."'data-timetype='".$row['TIMETYPE']."'data-loc_pos_rwy='".$row['LOC_POS_RWY']."'data-fcr_flightno='".$row['FCR_FLIGHTNO']."'
								data-fcr_rf='".$row['FCR_RF']."'data-fcr_rt='".$row['FCR_RT']."'data-fcr_ias='".$row['FCR_IAS']."' 
								data-fcr_ft='".$row['FCR_FT']."'data-fcr_clearance='".$row['FCR_CLEARANCE']."'data-etops='".$row['ETOPS']."'
								data-nature_flight='".$row['NATURE_FLIGHT']."'data-flight_phase='".$row['FLIGHT_PHASE']."'data-env_w_kts='".$row['ENV_W_KTS']."'
								data-env_w_oc='".$row['ENV_W_OC']."'data-env_c_type='".$row['ENV_C_TYPE']."'data-env_c_ft='".$row['ENV_C_FT']."'
								data-env_c_th='".$row['ENV_C_TH']."'data-env_p_w='".$row['ENV_P_W']."'data-env_p_l='".$row['ENV_P_L']."'
								data-omc_v='".$row['OMC_V']."'data-omc_icing='".$row['OMC_ICING']."'data-omc_turb='".$row['OMC_TURB']."'
								data-rs_status='".$row['RS_STATUS']."'data-rs_cat='".$row['RS_CAT']."'data-airport='".$row['AIRPORT']."'
								data-relatedto='".$row['RELATEDTO']."'data-title='".$row['TITLE']."'data-narrative='".$row['NARRATIVE']."'
								data-reporter_org='".$row['REPORTER_ORG']."'data-reporter_name='".$row['REPORTER_NAME']."'data-reporter_position='".$row['REPORTER_POSITION']."'
								data-lastupdate='".$row['LASTUPDATE']."'data-receiveddate='".$row['RECEIVEDDATE']."'data-riskowner='".$row['RISKOWNER']."'>View </button></td>";
							
								
													  
							echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#MORMODALTWO' 
								data-id='".$row['MORID']."'>Update</button></td>";
								
								
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
            </div>
            
		  
		  </div>
		  
			<!-- BLOCK ALL OPEN COMPLIANCE -->
			
			<!-- BLOCK ALL OPEN AUDIT -->
			<div class="box box-primary">
			
			
			<div class="box-header">
              <h3 class="box-title">All Closed Audit Listing</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="tablediv">
              <table id="example66" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
				  <th>Risk Level</th>

				  <th>Details/Update</th>
                  
                </tr>
                </thead>
                <tbody>
                                
				<?php
			
						include '../../dbconfig.php';
						$query = "SELECT *, DATEDIFF(TARGETDATE,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM audit  WHERE STATUS='CLOSED' AND QASO='$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);
						
						
						while ($row = mysqli_fetch_array($result)) 
						{
							
							echo "<tr>";
							echo "<td>".$row['AID']."</td>";
							echo "<td>".$row['RISK_LEVEL']."</td>";
							
							
					
							
							/* echo "<td>".$row['DREPORTED']."</td>"; */
							echo "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#AUDITMODAL' 
								data-id='".$row['AID']."'data-comp='".$row['COMPLIANCE']."' data-noncomp='".$row['NON_COMPLIANCE']."' data-conf='".$row['CONFORMANCE']."' data-nonconf='".$row['NON_CONFORMANCE']."' data-sc='".$row['SAFETY_CONCERN']."'
								data-at='".$row['AUDIT_TYPE']."'data-date='".$row['DATE']."'data-airport='".$row['AIRPORT']."' data-risklevel='".$row['RISK_LEVEL']."' data-auditobj='".$row['AUDIT_OBJ']."' 
								data-ts='".$row['TEST_STEP']."'data-sd='".$row['SOURCE_DATA']."'data-cp='".$row['CONDITION_PLACE']."' data-criteria='".$row['CRITERIA']."' data-effect='".$row['EFFECT']."'
								data-cause='".$row['CAUSE']."'data-rec='".$row['RECOMMENDATION']."'data-ro='".$row['RISKOWNER']."' data-auditor='".$row['AUDITOR']."' data-auditore='".$row['AUDITOR_EMAIL']."'
								data-auditorp='".$row['AUDITOR_PHONE']."'data-dr='".$row['DREPORTED']."'data-tg='".$row['TARGETDATE']."' data-lu='".$row['LASTUPDATE']."'data-qaso='".$row['QASO']."'>View </button></td>";
							
								
													  
						
								
								echo "</tr>";
						   
								
														
							
							
					    }
						mysqli_close($db);
							
				?>	
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
            </div>
 
			
			
			<!-- MODAL ALL MOR'S UPDATE -->
			<div class="modal fade bs-example-modal-lg" id="MORMODALTWO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
				<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myMODALTWOLabel"></h4>
					</div>
					<div class="modal-body">
						<form role="form" method="POST" action="" id="stuffthree">
						<div class="col-md-12">	
						 <div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3> 
								<input  type="hidden" class="form-control" id="IDum" disabled=""> 
							</div>
            <!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="outputupdatemor">
								<table class="table table-bordered table-hover" id="updateupdatemor" >
								</table>
						</div>
            <!-- /.box-body -->
						 </div>
						 
						 <div class="box box-primary">
							<div class="box-header">
							<h3 class="box-title">Insert your update here...</h3>
							</div>
							
							<div class="box-body" id="updateresetmor">
								<!-- <label>Update Content</label> -->
								
								<textarea class="form-control" rows="3" placeholder="Enter Update..." id="updatecontentmor"></textarea>
								<input class="form-control" type="text" placeholder="Name" id="updateusermor">
								<div><label><input type="checkbox" class="flat-red" id="statusmor">To be Closed(Check if you are closing this item, leave it unchecked if you are just updating)</label></div>
								<div class="form-group">
									<label for="exampleInputFile">Evidence Upload</label>
									<input type="file" id="exampleInputFilemor">
									<p class="help-block">Upload evidence here. Ensure filename does not have spaces</p>
							    </div>

								
							</div>
							
							
					    </div>
				
							
				        </form>	
				    </div>
				    <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="updatemor()" >Update</button>
					</div>
				</div>
	  
			</div>
			</div>
		</div>
		 
			<div class="modal fade bs-example-modal-lg" id="COMPMODALWA" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="form-content">
				<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="COMPMODALWALabel"></h4>
					</div>
					<div class="modal-body">
						<form role="form" method="POST" action="" id="compstuffwa">
							<div class="col-md-12">
					
						<div class="box box-warning">
            
            <!-- /.box-header -->
            <div class="box-body" >
              <form role="form" method="POST" action="" id="compform">
                <div class="form-group">
				<label>COMPLIANCE ID:</label>
			   <input class="form-control"  placeholder="COMPLIANCE ID" id="compidwa" type="text" disabled=""></input>
			   <label>YEAR OF AUDIT:</label>
				  <input class="form-control"  placeholder="YEAR" id="yearauditwa" type="text" disabled=""></input>

                  <label>DESCRIPTION</label>
				  <textarea class="form-control" rows="10" placeholder="Enter ..." id="descriptionwa" disabled=""></textarea>
				  
                
				  
				 
                  <label>MITIGATION LEVEL</label>
				  <textarea class="form-control" rows="1" placeholder="Enter ..." id="mitigationwa" disabled=""></textarea>
				  
                
				  
				 
                <label>TARGET DATE :</label>
					<input class="form-control"  placeholder="YEAR" id="targetdatewa" type="text" disabled=""></input>
				  
                
                <!-- /.input group -->
             
			   
				 
			  <label>Risk Owner</label>
                 <select class="form-control select2" style="width: 100%; " id="riskownercompwa" disabled="">
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
					
					<label>Related to: </label>
						<select  class="form-control" id="hitypecompwa" disabled="">
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
					
					
					<label>Airport Involved</label>
						<select class="form-control" id="airportcompwa" disabled="">
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
               
			 			
                
			
                <label>Date of Last Update :</label>

                <input class="form-control"  placeholder="YEAR" id="lastupdatecompwa" type="text" disabled=""></input>
				  
                <!-- /.input group -->
             
                
               
					
				<label>Status</label>
                   <select class="form-control select2" style="width: 100%; " id="statuscompwa" disabled="">
									  <option>OPEN</option>
									  <option>CLOSED</option>
									             
								</select>
				
				</div>
				
				<!-- Date Picker-->
                
                
				</form>
				
				
            </div> 
			
					
					</div>
				
							
						<div class="form-group">
								<div class="box box-info">
							<div class="box-header">
								<h3 class="box-title">Update History</h3> 
								<input  type="hidden" class="form-control" id="IDCOMPwa" disabled=""> 
							</div>
            <!-- /.box-header -->
							<div class="box-body table-responsive no-padding" id="outputupdatecompwa">
								<table class="table table-bordered table-hover" id="updateupdatecompwa" >
								</table>
						   </div>
            <!-- /.box-body -->
						 </div>
					    </div>
						
						</div>
				
				        </form>	
				    
				    <div class="modal-footer">
					<div class="form-group">
									<form id="qasoad">
									
									<textarea class="form-control" rows="3" placeholder="Enter Feedback..." id="qasoupdatecontentcompwa"></textarea>
								    <input class="form-control" type="text" placeholder="Name" id="qasoupdateusercompwa">
									<label>
										<input type="radio" name="r3" class="minimal" value="1" checked>
										Approve Closure
									</label>
									<label>
										<input type="radio" name="r3" class="minimal" value="2">
										Disapprove Closure
									</label>
									</form>
									
								</div>
								<button type="button" class="btn btn-primary" onclick="updatecompwa()">Update</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>						
					</div>
				</div>
	  
			</div>
			</div>
			</div>
		 
	  
	  
			<div class="row">
	<?php
			
			$Modal = "../components/moreonthisec.php"; 
			
			include($Modal);
			?>
	</div>
			
          
			
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

<script src="../components/modalqeuries.js"></script>


<script language="javascript" type="text/javascript">
     $(window).load(function() {
		 $(".loader").fadeOut("slow");
     $('#successmodel').hide();
	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	  $('#allsubmissionsdiv').css('visibility', 'hidden');
	  
	  /* $.ajax({
						type: "POST",
						url: "email.php",		
						cache: false,
						success: function(html) 
						{      
							console.log("little man"+html);                 

						},
						error: function (html) 
						{
							console.log("big man"+html);
						}
		
       
	    
						}); */
  });
</script>


<script>
$('#datepicker').datepicker({
      autoclose: true
    });
	
	$("#example1").DataTable();
	$("#example11").DataTable();
	$("#example3").DataTable();
	$("#example33").DataTable();
	$("#example10").DataTable();
	$("#example12").DataTable();
	$("#example77").DataTable();
	$("#example66").DataTable();
</script>




<script>
<!-- NEW HAZARD SUBMITTED -->


$('#COMPMODALWA').on('show.bs.modal', function (event) {
	
	$('#updateupdatecomp').empty();
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ID = button.data('id') 
  var yearaudit = button.data('yearaudit')
  var desc = button.data('desc')
  var ml = button.data('ml')
  var tg = button.data('tg')
  var ro = button.data('ro')
  var rt = button.data('rt')
  var airport = button.data('airport')
  var lu = button.data('lu')
  var closedro = button.data('closedro')  
  var status = button.data('status')
    
  var modal = $(this)
  modal.find('.modal-title').text('More details for compliance ID : ' + ID)
  modal.find('.modal-body #compidwa').val(ID)
  modal.find('.modal-body #yearauditwa').val(yearaudit)
  modal.find('.modal-body #descriptionwa').val(desc)
  modal.find('.modal-body #mitigationwa').val(ml)
  modal.find('.modal-body #targetdatewa').val(tg)
  modal.find('.modal-body #riskownerwa').val(ro)
  modal.find('.modal-body #hitypewa').val(rt)
  modal.find('.modal-body #airportwa').val(airport)
  
  modal.find('.modal-body #lastupdatewa').val(lu)
  modal.find('.modal-body #statuswa').val(status)
  	var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id') 
	/* var ID = button.data('id')  */
	
	var modal = $(this)
	modal.find('.modal-title').text('Update Details for ID : ' + ID)
	  modal.find('.modal-body #IDCOMPwa').val(ID)
  
    	
	// Returns successful data submission message when the entered information is stored in database.
	 var dataString = 'id=' + ID; 
	
// AJAX code to submit form.
	$.ajax({
		type: "POST",
		url: "../dbfiles/processupdatecomp.php",
		data: dataString,
		cache: false,		
		 dataType: 'json', 
		
		success: function(html) 
		{      
		            
					console.log (html);
					/* var title=html[0];  */

					var len = html.length;
					
					var tr_strone = "<thead><tr>"+
                  "<th>ID</th>"+
                  "<th > <nobr>Update Date</nobr></th>"+
                  "<th>Update Content</th>"+
                  "<th>Person</th>"+
                  "<th>Evidence</th>"+                  
                "</tr></thead><tbody>";

                $("#updateupdatecompwa").append(tr_strone);
               for(var i=0; i<len; i++)
			   {
                var compid = html[i].compid;
				var updatedate = html[i].updatedate; 
				var updatecontent = html[i].updatecontent; 
				var person = html[i].person; 
                var link = html[i].link; 				
				

                var tr_str = "<tr>" +
                    "<td >" + compid + "</td>"+
					"<td >" + updatedate + "</td>"+
					"<td >" + updatecontent + "</td>"+
					"<td >" + person + "</td>"+
					"<td >" + link + "</td>"+
					"</tr>";

                $("#updateupdatecompwa").append(tr_str);
				}
				var tr_strqw = "</tbody><tfoot><tr>"+
                  "<th >ID</th>"+
                  "<th >Update Date</th>"+
                  "<th>Update Content</th>"+
                  "<th>Person</th>"+
					"<th>Evidence</th>"+ 
                "</tr></tfoot><tbody>";

                $("#updateupdatecompwa").append(tr_strqw);
					
				

					
					
					

        },
	   error: function (html) {
		   console.log (html);
                    
                }
});
  
  
})


</script>

<script>
$(document).ajaxSend(function(event, request, settings) {
  $('#loading-indicator').show();
});

$(document).ajaxComplete(function(event, request, settings) {
  $('#loading-indicator').hide();
});
 
 

function logout()
{
	$('#submitting').show();
	$.ajax({
		type: "POST",
		url: "../dbfiles/logout.php",		
		
		cache: false,
		
		
		success: function(html) 
		{      
		
			setTimeout(' window.location.href = "../../index.html"; ',500);		

        },
	   error: function (html) 
	   {
                  
        }
		
	    
    });
}



</script>
</body>
</html>
