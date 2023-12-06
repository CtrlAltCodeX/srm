$(function() {
	$(".loader").fadeOut("slow");
	$('#successmodel').hide();	 
	 $('#verybadmodel').hide();
	 $('#submitting').hide();
	 
	 $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
	
    $("#example1").DataTable();
	$("#example2").DataTable();
	$("#example4").DataTable();
	$("#example7").DataTable();
	$("#example77").DataTable();
	$("#example17").DataTable();
	
	$('#updatepending').text('newtext');
	
	
	
	
 
     
  });