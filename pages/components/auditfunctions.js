function auditkaro(pageuser) {

	if (!$('#findingdescription').val()) {
		if ($("#findingdescription").parent().next(".validation").length == 0) // only add if not added
		{
			$("#findingdescription").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter recommendation</div>");
		}

		$('#findingdescription').focus();
		focusSet = true;
	}
	else {
		$("#findingdescription").parent().next(".validation").remove(); // remove it
	}

	var uniquevar = jQuery.now();
	var findingdescription = document.getElementById("findingdescription").value;
	/* var useremail = document.getElementById("useremail").value;
	var userphone = document.getElementById("userphone").value;
	 */
	/*  var data = <?php echo json_encode("42", JSON_HEX_TAG); ?>;
	   alert(data);
	*/

	if (!(findingdescription == '')) {

		$('#submitting').show();
		$('html, body').animate({ scrollTop: 0 }, 'slow');
		$('#submitting').show();

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../components/auditreportmysql.php",

			cache: false,
			success: function (html) {

				console.log(html);
				var comp = $('input[name=r2]:radio:checked').val();
				var conf = $('input[name=r3]:radio:checked').val();
				var qrc = $('input[name=r3]:radio:checked').val();
				if (document.getElementById("sc").checked) {
					var sc = "sc";
				} else {
					var sc = "nsc";
				}
				var at = document.getElementById("at").value;
				var dateaudit = document.getElementById("datepicker").value;
				var airport = document.getElementById("airport").value;
				var rl = document.getElementById("rl").value;
				var findingdescription = document.getElementById("findingdescription").value;
				var classification = document.getElementById("classification").value;
				/* var sourcedata = document.getElementById("sourcedata").value; */
				/* var condition = document.getElementById("condition").value; */
				var criteria = document.getElementById("criteria").value;
				var effect = document.getElementById("effect").value;
				var cause = document.getElementById("cause").value;

				var id = $.trim(html);
				var recommendation = document.getElementById("recommendation").value;
				/*var riskowner = document.getElementById("riskowner").value;*/
				var auditcert = document.getElementById("auditcert").value;
				var files = $("input[name='audit_image_name[]']").map(function () {
					return this.value; // $(this).val()
				}).get().join(",");

				var qaso = pageuser;
				if (files != null) {

					var dataString = {
						id: id, comp: comp, qrc: qrc, conf: conf, sc: sc, at: at, dateaudit: dateaudit, airport: airport, rl: rl
						, findingdescription: findingdescription, classification: classification, criteria: criteria, effect: effect
						, cause: cause, auditcert: auditcert, FileName: files, qaso: qaso
					};

				}
				else {

					var dataString = {
						id: id, comp: comp, qrc: qrc, conf: conf, sc: sc, at: at, dateaudit: dateaudit, airport: airport, rl: rl
						, findingdescription: findingdescription, classification: classification, criteria: criteria, effect: effect
						, cause: cause, auditcert: auditcert, FileName: "", qaso: qaso
					};

				}
				$.ajax(
					{
						type: "POST",
						url: "../components/auditinsert.php",
						data: dataString,
						cache: false,
						success: function (htmltwo) {
							console.log("Audit server response" + htmltwo)
							$('html,body').animate({ scrollTop: 0 }, 50);
							$("#submitting").hide();
							$('#successmodel').show();

							/* $.ajax({
							type: "POST",
							url: "../components/auditemailro.php",
							data: dataString,
							cache: false,
							success: function(htmlthree) 
							{           
										console.log(htmlthree);
										$('html,body').animate({scrollTop:0},50);
										$("#submitting").hide(); 
										$('#successmodel').show();
										setTimeout(function(){location.reload();}, 1001); 		

							},
							error: function (htmlthree) 
							{		  
										alert("Audit successfully sent, email however failed to notify the risk owner, please send manual email to notify risk owner");
			
							}
								});	 */



						},
						error: function (htmltwo) {
							alert("Audit failed to insert, contact System Administrator");

						}
					});

				location.reload();
			},
			error: function (html) {
				console.log(html);
				$("#submitting").hide();
				$('#verybadmodel').show();

			}
		});
	}
	return false;
}

function recommend(pageuser) {
	$('#recommendationtable').empty();
	if (!$('#recommendation').val()) {
		if ($("#recommendation").parent().next(".validation").length == 0) // only add if not added
		{
			$("#recommendation").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter recommendation</div>");
		}

		$('#recommendation').focus();
		focusSet = true;
	}
	else {
		$("#recommendation").parent().next(".validation").remove(); // remove it
	}

	if (!$('#datepickerTWO').val()) {
		if ($("#datepickerTWO").parent().next(".validation").length == 0) // only add if not added
		{
			$("#datepickerTWO").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter target date for your recommendation</div>");
		}

		$('#datepickerTWO').focus();
		focusSet = true;
	}
	else {
		$("#datepickerTWO").parent().next(".validation").remove(); // remove it
	}

	var recommendation = document.getElementById("recommendation").value;
	var datepickertwo = document.getElementById("datepickerTWO").value;
	if (!(recommendation == '') && !(datepickerTWO == '')) {
		var recstatus = document.getElementById("status").value;
		var riskowner = document.getElementById("riskowner").value;
		var user = pageuser;
		var dataStringro = { recommendation: recommendation, datepickertwo: datepickertwo, status: recstatus, riskowner: riskowner, user: user };

		$.ajax({
			type: "POST",
			url: "../dbfiles/insertrecommendation.php",
			data: dataStringro,
			cache: false,

			success: function (html) {
				// $myfile = fopen("tiger.txt", "a") or die("Unable to open file!");
				// $txt = "writing from recommed process..all good to insert functions here ";
				// fwrite($myfile, $txt);
				// fclose($myfile);

				console.log(html);
				$.ajax(
					{
						type: "POST", url: "../dbfiles/processrecommendations.php", data: dataStringro, cache: false, dataType: 'json',
						success: function (html) {
							console.log(html);
							/* var title=html[0];  */

							var len = html.length;

							var tr_strone = "<thead><tr>" +
								"<th>Recommendation</th>" +
								"<th > <nobr>Manager</nobr></th>" +
								"<th > <nobr>Target Date</nobr></th>" +
								"<th > <nobr>Status</nobr></th>" +
								"</tr></thead><tbody>";

							$("#recommendationtable").append(tr_strone);
							for (var i = 0; i < len; i++) {
								var id = html[i].id;
								var recommendation = html[i].recommendation;
								var status = html[i].status;
								var targetdate = html[i].targetdate;
								var riskowner = html[i].riskowner;
								var qaso = html[i].qaso;


								var tr_str = "<tr>" +


									"<td >" + recommendation + "</td>" +

									"<td >" + riskowner + "</td>" +

									"<td >" + targetdate + "</td>" +

									"<td >" + status + "</td>" +

									"</tr>";

								$("#recommendationtable").append(tr_str);
							}
							var tr_strqw = "</tbody><tfoot><tr>" +
								"<th>Recommendation</th>" +
								"<th > <nobr>Manager</nobr></th>" +
								"<th > <nobr>Target Date</nobr></th>" +
								"<th > <nobr>Status</nobr></th>" +

								"</tr></tfoot><tbody>";

							$("#recommendationtable").append(tr_strqw);







						},
						error: function (html) {
							console.log(html);

						}

					});


			},
			error: function (html) {
				$('html').scrollTop(0);
				setTimeout(function () { $('#submitting').modal('hide') }, 3)
				$('#submitting').show();
				$("#submitting").fadeTo(3000, 500).slideUp(500, function () {
					$("#submitting").alert('close');
				});

				$('#verybadmodel').delay(3200).fadeIn(500);
				$('#verybadmodel').delay(3000).fadeOut(500);
			}



		});

	}
}

function uploadFile(myFileObject, uniquevar, extension) {
	// Open Our formData Object
	var formData = new FormData();

	// Append our file to the formData object
	// Notice the first argument "file" and keep it in mind
	formData.append('my_uploaded_file', myFileObject);
	formData.append('uniquevar', uniquevar);
	formData.append('extension', extension);

	// Create our XMLHttpRequest Object
	var xhr = new XMLHttpRequest();

	// Open our connection using the POST method
	xhr.open("POST", '../dbfiles/upload.php');

	// Send the file
	xhr.send(formData);
}
