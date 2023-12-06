function update() {
        
		setTimeout(function(){$('#myMODALTHREE').modal('hide')}, 3)
		$('#submitting').show();
        var updatecontent = document.getElementById("updatecontent").value;	 	
		var updateuser = document.getElementById("updateuser").value; 
		var id = document.getElementById("IDq").value; 
		
		var resriskconsequenceq = document.getElementById("resriskconsequenceq").value;
		var resrhoodq = document.getElementById("resrhoodq").value;
		var resrlq = document.getElementById("resrlq").value;
		var resrating = document.getElementById("resrating").value;
		
		var radio = $('input[name=r1]:radio:checked').val();
		if(radio==="1")
		{
			var status = "CLOSED";
			var dataStringro = 'id=' + id + '&updatecontent=' + updatecontent + '&updateuser=' + updateuser + '&status=' + status
			+ '&resriskconsequenceq=' + resriskconsequenceq + '&resrhoodq=' + resrhoodq + '&resrlq=' + resrlq + '&resrating=' + resrating;
			$.ajax({
				type: "POST",
				url: "../qasodbfiles/insertupdaterr.php",		
				data: dataStringro,
				cache: false,
				success: function(html) 
				{     
		                  $.ajax({
										type: "POST",
										url: "../qasodbfiles/emailreporterclosure.php",
										data: dataStringro,						
										cache: false,
										success: function(htmltwo) 
										{      
												console.log(htmltwo);
												$("#submitting").fadeOut(500);   			
												$('#successmodel').fadeIn(500);
												setTimeout(function(){location.reload();}, 7150); 	                

										},
										error: function (htmltwo) 
										{
											console.log(htmltwo);
										}
									});	
	                

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
		
       
	    
					});
		}
		else 
		{
			var status = "OPEN";
			var dataStringro = 'id=' + id + '&updatecontent=' + updatecontent + '&updateuser=' + updateuser + '&status=' + status;
			$.ajax({
				type: "POST",
				url: "../qasodbfiles/insertupdate.php",		
				data: dataStringro,
				cache: false,
				success: function(html) 
				{     
		           $("#submitting").hide(); 
											 
							   			
								$('#successmodel').show();
							
								
								setTimeout(function(){location.reload();}, 7150); 	   
	                

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
		
       
	    
					});
		}
		
		
		
// AJAX code to submit form.


return false;



 }
 