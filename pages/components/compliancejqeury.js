$(window).load(function() {
		 $(".loader").fadeOut("slow");
     $('#successmodel').hide();
	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	 
	 document.getElementById('compform').reset();
	 
	 
  });



function submitcomp() 
{
	
$('html').scrollTop(0);
var compid;

var compid = document.getElementById("compid").value;
var yearaudit = document.getElementById("yearaudit").value;
var description = document.getElementById("description").value;
var mitigation = document.getElementById("mitigation").value;
var targetdate = document.getElementById("datepickerTWO").value;
var riskowner = document.getElementById("riskowner").value;
var compcert = document.getElementById("compcert").value;
var hitype = document.getElementById("hitype").value;
var airport = document.getElementById("airport").value;



var lastupdatedate = document.getElementById("datepickerONE").value;
var updatedetails = document.getElementById("updatedetails").value;
var status = document.getElementById("status").value;

			var dataString ={compid: compid ,yearaudit: yearaudit ,description: description ,mitigation: mitigation ,targetdate: targetdate ,compcert:compcert,riskowner: riskowner ,hitype: hitype ,airport: airport,lastupdatedate: lastupdatedate ,updatedetails: updatedetails ,status: status}; 
				
			
			$.ajax({
					type: "POST",
					url: "../components/compinsert.php",
					data: dataString,
					cache: false,
					success: function(html) 
					{      
					    						$('html,body').animate({scrollTop:0},50);
												$("#submitting").hide(); 
												$('#successmodel').show();
												setTimeout(function(){location.reload();}, 1001); 	

									
						
					},
					error: function (html) 
					{
						
						console.log("Error"+html);
						
					}
				});
			

}



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
