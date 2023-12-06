$(function() {
	$(".loader").fadeOut("slow");
	
	
	$('#datepicker').datepicker({
      autoclose: true
    });
	$('#datepickerTWO').datepicker({
      autoclose: true
    });
	
	$('#datepicker27').datepicker({
      autoclose: true
    });
	$('#successmodel').hide();	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	 $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
	
	$(document).ajaxSend(function(event, request, settings) {
  $('#loading-indicator').show();
});

$(document).ajaxComplete(function(event, request, settings) {
  $('#loading-indicator').hide();
});
	
	$("#example1").DataTable();
	$("#example2").DataTable();
    $("#example3").DataTable();	 
	
	
	


  });