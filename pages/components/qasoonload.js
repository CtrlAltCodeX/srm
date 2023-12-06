$(function() 
	 {
	$(".loader").fadeOut("slow");
	$('#successmodel').hide();	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	 
	 $("#example1").DataTable();
	$("#example2").DataTable();
    $("#example3").DataTable();	 
	$("#example10").DataTable();	
	$("#example66").DataTable();	
	$('#datepickerfidy').datepicker({
      autoclose: true
    });
	
	 
	 $("#riskconsequence").change(function()
		{
			setrisk();
			
	 
     
  });
  $("#rhood").change(function()
		{
			setrisk();
			
	 
     
  });

  function setrisk()
			{
				
				var riskconsequence = document.getElementById("riskconsequence").value;
				var rhood = document.getElementById("rhood").value;
				var dataStringro = 'riskconsequence=' + riskconsequence + '&rhood=' + rhood;
				$.ajax({
					type: "POST",
					url: "../qasodbfiles/setrisk.php",		
					data: dataStringro,
					cache: false,
					success: function(html) 
					{ 
						response = jQuery.trim(html);
						$("#rl").val(response); 
						if(response =="High Risk")
						{
							$("#rew").val("1 Week"); 
						}else
						{
							$("#rew").val("2 Weeks"); 
						}
			
					}
					
			
					}); 
			}
	 });