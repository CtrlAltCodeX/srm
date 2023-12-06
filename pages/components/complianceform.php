




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
              <form role="form" method="POST" action="" id="compform">
                <div class="form-group">
				<label>COMPLIANCE ID:</label>
			   <input class="form-control"  placeholder="COMPLIANCE ID" id="compid" type="text" ></input>
			   <label>YEAR OF AUDIT:</label>
				  <input class="form-control"  placeholder="YEAR" id="yearaudit" type="text"></input>
				  </div>
				  <div class="form-group">
                  <label>DESCRIPTION</label>
				  <textarea class="form-control" rows="10" placeholder="Enter ..." id="description"></textarea>
				  
                  </div>
				  
				  <div class="form-group">
                  <label>MITIGATION LEVEL</label>
				  <textarea class="form-control" rows="1" placeholder="Enter ..." id="mitigation"></textarea>
				  
                  </div>
				  
				  <div class="form-group">
                <label>TARGET DATE :</label>

                <div class="input-group date" >
                  <div class="input-group-addon" >
                    <i class="fa fa-calendar" ></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepickerTWO" >
                </div>
                <!-- /.input group -->
              </div>
			   
				  <div class="form-group">
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
								<select class="form-control select2" style="width: 100%; " id="compcert">
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
				<div style=" display: table;  margin: 0 auto;">
					<button type="button" id="submit2" class="btn btn-danger" onclick="submitcomp()" >Submit</button>
				</div>	
				</div>
				
				<!-- Date Picker-->
                
                
				</form>
				
				
            </div> 
			
		
		
		</div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
 
    </section>
