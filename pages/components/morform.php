




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
              <form role="form" method="POST" action="" id="morform">
                <div class="form-group">
				<label>MOR ID (Only enter if old record) :</label>
			   <input class="form-control"  placeholder="MOR ID (M1/2017)" id="morid" type="text" ></input>
			   <label>CAAF ID (Only enter if exist) :</label>
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
                <label>Date of Occurance:</label>

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
                  <label>Time of Occurance:</label>

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
								
								<label >Assign Certificate</label>
								<select class="form-control select2" style="width: 100%; " id="morcert">
									  <?php
			
								include '../../dbconfig.php';
								$query = "SELECT * FROM certificate";
								mysqli_query($db, $query) or die('Error querying database.');
								$result = mysqli_query($db, $query);								
								
								while ($row = mysqli_fetch_array($result)) 
								{	
									echo "<option>".$row['cert']."</option>";
									
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
								
								<label >Assign QASO</label>
								<select class="form-control select2" style="width: 100%; " id="morqaso">
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
 
    </section>
