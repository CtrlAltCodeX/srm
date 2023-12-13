$(document).ajaxSend(function (event, request, settings) {
	$('#loading-indicator').show();
});

$(document).ajaxComplete(function (event, request, settings) {
	$('#loading-indicator').hide();
});

/* document.getElementById("Print").onclick = function () {
	printElement(document.getElementById("printThis"));
};
document.getElementById("PrintTwo").onclick = function () {
	printElement(document.getElementById("printThisTwo"));
}; */

document.getElementById("PrintTwo").onclick = function () {
	printElement(document.getElementById("printThisTwo"));
}

document.getElementById("PrintThree").onclick = function () {
	printElement(document.getElementById("printThisThree"));
}
document.getElementById("PrintFour").onclick = function () {
	printElement(document.getElementById("printThisFour"));
}

document.getElementById("PrintFiveAll").onclick = function () {
	printElement(document.getElementById("printThisFive"));
}
document.getElementById("PrintFive").onclick = function () {
	printElement(document.getElementById("PrintFiveUpdate"));
}
function printElement(elem) {
	var domClone = elem.cloneNode(true);

	var $printSection = document.getElementById("printSection");

	if (!$printSection) {
		var $printSection = document.createElement("div");
		$printSection.id = "printSection";
		document.body.appendChild($printSection);
	}

	$printSection.innerHTML = "";
	$printSection.appendChild(domClone);
	window.print();
}

function pio() {

	w = window.open();
	var IDq = document.getElementById("IDq").value;
	var hazorincq = document.getElementById("hazorincq").value;
	var dreport = document.getElementById("drq").value;
	var air = document.getElementById("air").value;
	var hidq = document.getElementById("hidq").value;
	var pcdq = document.getElementById("pcdq").value;
	var ecdq = document.getElementById("ecdq").value;
	var dvoq = document.getElementById("dvoq").value;
	var roq = document.getElementById("roq").value;
	var qasoq = document.getElementById("qasoq").value;
	var riskcontextq = document.getElementById("riskcontextq").value;
	var riskconsequenceq = document.getElementById("riskconsequenceq").value;
	var rhoodq = document.getElementById("rhoodq").value;
	var rlq = document.getElementById("rlq").value;
	var rewq = document.getElementById("rewq").value;
	var recommendedaq = document.getElementById("recommendedaq").value;
	var ohsrefq = document.getElementById("ohsrefq").value;


	w.document.write("ID: <br>" + IDq.bold() + "<br><br>");
	w.document.write("Hazard/Incident: <br>" + hazorincq.bold() + "<br><br>");
	w.document.write("Date Reported: <br>" + dreport.bold() + "<br><br>");
	w.document.write("Airport: <br>" + air.bold() + "<br><br>");
	w.document.write("Hazard/Incident Description: <br>" + hidq.bold() + "<br><br>");
	w.document.write("Potential Cause Description: <br>" + pcdq.bold() + "<br><br>");
	w.document.write("Effect/Consequence Description: <br>" + ecdq.bold() + "<br><br>");
	w.document.write("Date Event Occured: <br>" + dvoq.bold() + "<br><br>");
	w.document.write("Risk Owner: <br>" + roq.bold() + "<br><br>");
	w.document.write("QASO: <br>" + qasoq.bold() + "<br><br>");
	w.document.write("Risk Context(Effect/How it can happen?): <br>" + riskcontextq.bold() + "<br><br>");
	w.document.write("Risk Consequence: <br>" + riskconsequenceq.bold() + "<br><br>");
	w.document.write("Risk Likelihood: <br>" + rhoodq.bold() + "<br><br>");
	w.document.write("Risk Level: <br>" + rlq.bold() + "<br><br>");
	w.document.write("Response Expected Within: <br>" + rewq.bold() + "<br><br>");
	w.document.write("Recommended Actions: <br>" + recommendedaq.bold() + "<br><br>");
	w.document.write("Reference: <br>" + ohsrefq.bold() + "<br><br>");
	w.print();
	w.close();
}

function printmor() {
	w = window.open();
	var morid = document.getElementById("morid").value;
	var caafid = document.getElementById("caafid").value;
	var rd = document.getElementById("rd").value;
	var coo = document.getElementById("coo").value;
	var actypeseries = document.getElementById("actypeseries").value;
	var registration = document.getElementById("registration").value;
	var operator = document.getElementById("operator").value;
	var date = document.getElementById("date").value;
	var timeoc = document.getElementById("timeoc").value;
	var dtn = document.getElementById("dtn").value;
	var lpr = document.getElementById("lpr").value;
	var fno = document.getElementById("fno").value;
	var routefrom = document.getElementById("routefrom").value;
	var routeto = document.getElementById("routeto").value;
	var ias = document.getElementById("ias").value;
	var fah = document.getElementById("fah").value;
	var iv = document.getElementById("iv").value;

	var err = document.getElementById("err").value;
	var nof = document.getElementById("nof").value;
	var fp = document.getElementById("fp").value;
	var ds = document.getElementById("ds").value;
	var oat = document.getElementById("oat").value;

	var pw = document.getElementById("pw").value;
	var pt = document.getElementById("pt").value;
	var vk = document.getElementById("vk").value;
	var icing = document.getElementById("icing").value;
	var turbulance = document.getElementById("turbulance").value;
	var rst = document.getElementById("rst").value;
	var rsc = document.getElementById("rsc").value;
	var airport = document.getElementById("airport").value;
	var riskowner = document.getElementById("morriskowner").value;
	var bt = document.getElementById("bt").value;
	var narrative = document.getElementById("narrative").value;


	w.document.write("ID: <br>" + morid.bold() + "<br><br>");
	w.document.write("CAAF ID: <br>" + caafid.bold() + "<br><br>");
	w.document.write("RECEIVED DATE: <br>" + rd.bold() + "<br><br>");
	w.document.write("CATEGORY OF OCCURANCE: <br>" + coo.bold() + "<br><br>");
	w.document.write("AIRCRAFT TYPE & SERIES: <br>" + actypeseries.bold() + "<br><br>");
	w.document.write("REGISTRATION: <br>" + registration.bold() + "<br><br>");
	w.document.write("OPERATOR: <br>" + operator.bold() + "<br><br>");
	w.document.write("Date Event Occured: <br>" + date.bold() + "<br><br>");
	w.document.write("Time: <br>" + timeoc.bold() + "<br><br>");
	w.document.write("Time Type: <br>" + dtn.bold() + "<br><br>");
	w.document.write("LOCATION/POSITION/RWY: <br>" + lpr.bold() + "<br><br>");
	w.document.write("<h3>FLIGHT/CABIN CREW REPORT</h3><br><br>");
	w.document.write("FLIGHT NO: <br>" + fno.bold() + "<br><br>");
	w.document.write("ROUTE FROM: <br>" + routefrom.bold() + "<br><br>");
	w.document.write("ROUTE TO: <br>" + routeto.bold() + "<br><br>");
	w.document.write("IAS (kts): <br>" + ias.bold() + "<br><br>");
	w.document.write("FL/ALT/HT (ft): <br>" + fah.bold() + "<br><br>");
	w.document.write("FCR Clearance: <br>" + iv.bold() + "<br><br>");

	w.document.write("ETOPS/RVSM/RNP 4/10: <br>" + err.bold() + "<br><br>");
	w.document.write("Nature of Flight: <br>" + nof.bold() + "<br><br>");
	w.document.write("Flight Phase: <br>" + fp.bold() + "<br><br>");
	w.document.write("<h3>ENVIRONMENT</h3><br>");
	w.document.write("DRIN SPEED (kts): <br>" + ds.bold() + "<br><br>");
	w.document.write("OAT(oC): <br>" + oat.bold() + "<br><br>");


	w.document.write("<h3>PRECIPITATION</h3><br>");
	w.document.write("Weather: <br>" + pw.bold() + "<br><br>");
	w.document.write("Level: <br>" + pt.bold() + "<br><br>");
	w.document.write("<h3>OTHER METEOROLOGICAL CONDITIONS</h3><br>");
	w.document.write("VISIBILITY: <br>" + vk.bold() + "<br><br>");
	w.document.write("ICING: <br>" + icing.bold() + "<br><br>");
	w.document.write("TURBULANCE: <br>" + turbulance.bold() + "<br><br>");
	w.document.write("<h3>RUNWAY STATE</h3><br>");
	w.document.write("Status: <br>" + rst.bold() + "<br><br>");

	w.document.write("Category: <br>" + rsc.bold() + "<br><br>");
	w.document.write("Airport: <br>" + airport.bold() + "<br><br>");
	w.document.write("Risk Owner: <br>" + riskowner.bold() + "<br><br>");
	w.document.write("BRIEF TITLE: <br>" + bt.bold() + "<br><br>");
	w.document.write("NARRATIVE: <br>" + narrative.bold() + "<br><br>");


	w.print();
	w.close();

}


function printcomp() {
	w = window.open();
	var compid = document.getElementById("compid").value;
	var yearaudit = document.getElementById("yearaudit").value;
	var description = document.getElementById("description").value;
	var mitigation = document.getElementById("mitigation").value;
	var targetdate = document.getElementById("targetdate").value;
	var riskowner = document.getElementById("compriskowner").value;
	var airport = document.getElementById("airport").value;


	w.document.write("COMPLIANCE ID: <br>" + compid.bold() + "<br><br>");
	w.document.write("YEAR OF AUDIT: <br>" + yearaudit.bold() + "<br><br>");
	w.document.write("DESCRIPTION: <br>" + description.bold() + "<br><br>");
	w.document.write("MITIGATION LEVEL: <br>" + mitigation.bold() + "<br><br>");
	w.document.write("TARGET DATE: <br>" + targetdate.bold() + "<br><br>");
	w.document.write("Risk Owner: <br>" + riskowner.bold() + "<br><br>");
	w.document.write("Airport Involved: <br>" + airport.bold() + "<br><br>");


	w.print();
	w.close();

}

function update() {


	if (!$('#updatecontent').val()) {
		if ($("#updatecontent").parent().next(".validation").length == 0) // only add if not added
		{
			$("#updatecontent").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter update contents</div>");
		}

		$('#updatecontent').focus();
		focusSet = true;
	} else {
		$("#updatecontent").parent().next(".validation").remove(); // remove it
	}

	if (!$('#updateuser').val()) {
		if ($("#updateuser").parent().next(".validation").length == 0) // only add if not added
		{
			$("#updateuser").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter name or your title</div>");
		}

		$('#updateuser').focus();
		focusSet = true;
	} else {
		$("#updateuser").parent().next(".validation").remove(); // remove it
	}
	var updatecontent = document.getElementById("updatecontent").value;
	var updateuser = document.getElementById("updateuser").value;
	if (!(updatecontent == '') && !(updateuser == '')) {

		var uniquevar = jQuery.now();

		setTimeout(function () { $('#myMODALTWO').modal('hide') }, 3)
		$('#submitting').show();

		var IDU = document.getElementById("IDu").value;

		if (document.getElementById('status').checked) {
			var status = "CLOSED";
		} else {
			var status = "OPEN";
		}

		var files = $("input[name='audit_image_name[]']").map(function () {
			return this.value; // $(this).val()
		}).get().join(",");



		// var myFileList = document.getElementById('exampleInputFile').files;
		// var myFileList = document.getElementsByName('qqfile')[0].files;
		// var myFile = myFileList;
		// if (!(myFile == null)) {
		// 	var myFileName = myFile.name;
		// 	var extension = getFileExtension(myFileName);
		// 	function getFileExtension(filename) {
		// 		return filename.split('.').pop();
		// 	}


		// 	uploadFile(myFile, uniquevar, extension);



		if (files != null) {

			// var dataStringro = { id: IDU, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: uniquevar, extension: extension };

			var dataStringro = { id: IDU, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: files, extension: files };

		// var dataStringro = { id: IDU, updatecontent: updatecontent, updateuser: updateuser, status: status };
			
		} else {

			var dataStringro = { id: IDU, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: "", extension: "" };
		// var dataStringro = { id: IDU, updatecontent: updatecontent, updateuser: updateuser, status: status};

		}
		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/insertupdate.php",
			data: dataStringro,
			cache: false,


			success: function (html) {
				console.log(html);
				if (status == "CLOSED") {
					$.ajax({
						type: "POST",
						url: "../dbfiles/emailqasoclosure.php",
						data: dataStringro,
						cache: false,

						success: function (htmleee) {
							console.log(htmleee);
							$('html,body').animate({ scrollTop: 0 }, 500);
							$("#submitting").hide();
							$('#successmodel').show();
							setTimeout(function () { location.reload(); }, 1001);


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
				else {

					$('html,body').animate({ scrollTop: 0 }, 500);
					$("#submitting").hide();
					$('#successmodel').show();
					setTimeout(function () { location.reload(); }, 1001);
				}


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
		return false;
	}
}

	function accept()  /* DONE */ {
		setTimeout(function () { $('#myMODALmyMODAL').modal('hide') }, 3)
		$('#submitting').show();
		var updatecontent = document.getElementById("reason").value;

		var IDar = document.getElementById("IDar").value;
		/* alert(IDar+updatecontent); */

		var label = $('#startro');
		var ro = label.text();


		var dataStringro = { id: IDar, updatecontent: updatecontent, riskowner: ro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/accept.php",
			data: dataStringro,
			cache: false,


			success: function (html) {


				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);
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

		return false;



	}

	function decline() /* DONE */ {
		setTimeout(function () { $('#myMODALmyMODAL').modal('hide') }, 3)
		$('#submitting').show();
		var updatecontent = document.getElementById("reason").value;

		var IDar = document.getElementById("IDar").value;




		var roqar = document.getElementById("roqar").value;//old risk owner

		var label = $('#startro');
		var ro = label.text();

		var dataStringro = { id: IDar, updatecontent: updatecontent, roq: roqar, riskowner: ro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/decline.php",
			data: dataStringro,
			cache: false,


			success: function (html) {


				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);
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

		return false;



	}


	function transfer() /* DONE */ {
		setTimeout(function () { $('#myMODAL').modal('hide') }, 3)
		$('#submitting').show();
		var rotransfer = document.getElementById("rotransfer").value;
		var reasonriskowner = document.getElementById("reasonriskowner").value;
		var IDq = document.getElementById("IDq").value;
		var label = $('#startro');
		var ro = label.text();



		var dataStringro = { id: IDq, rotransfer: rotransfer, reasonriskowner: reasonriskowner, riskowner: ro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/transfer.php",
			data: dataStringro,
			cache: false,


			success: function (html) {

				$.ajax({
					type: "POST",
					url: "../dbfiles/emailro.php",
					data: dataStringro,
					cache: false,
					success: function (html) {
						$('html,body').animate({ scrollTop: 0 }, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function () { location.reload(); }, 1001);

					},
					error: function (html) {
						console.log("big man" + html);
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

		return false;



	}




	function logout() {
		$('#submitting').show();
		$.ajax({
			type: "POST",
			url: "../dbfiles/logout.php",

			cache: false,


			success: function (html) {

				setTimeout(' window.location.href = "../../index.html"; ', 500);

			},
			error: function (html) {

			}


		});
	}




	function updatemor() /* DONE */ {
		if (!$('#updatecontentmor').val()) {
			if ($("#updatecontentmor").parent().next(".validation").length == 0) // only add if not added
			{
				$("#updatecontentmor").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter update contents</div>");
			}

			$('#updatecontentmor').focus();
			focusSet = true;
		} else {
			$("#updatecontentmor").parent().next(".validation").remove(); // remove it
		}

		if (!$('#updateusermor').val()) {
			if ($("#updateusermor").parent().next(".validation").length == 0) // only add if not added
			{
				$("#updateusermor").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter name or your title</div>");
			}

			$('#updateusermor').focus();
			focusSet = true;
		} else {
			$("#updateusermor").parent().next(".validation").remove(); // remove it
		}
		var updatecontent = document.getElementById("updatecontentmor").value;
		var updateuser = document.getElementById("updateusermor").value;
		if (!(updatecontent == '') && !(updateuser == '')) {
			var uniquevar = jQuery.now();

			setTimeout(function () { $('#MORMODALTWO').modal('hide') }, 3)
			$('#submitting').show();

			var IDum = document.getElementById("IDum").value;

			if (document.getElementById('statusmor').checked) {
				var status = "CLOSED";
			} else {
				var status = "OPEN";
			}
			var myFileList = document.getElementById('exampleInputFilemor').files;



			// Grab the first File Object from the FileList
			var myFile = myFileList[0];
			if (!(myFile == null)) {
				var myFileName = myFile.name;
				var extension = getFileExtension(myFileName);
				function getFileExtension(filename) {
					return filename.split('.').pop();
				}

				// Let's upload the complete file object
				uploadFile(myFile, uniquevar, extension);




				var dataStringro = { id: IDum, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: uniquevar, extension: extension };
			} else {

				var dataStringro = { id: IDum, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: "", extension: "" };

			}
			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "../dbfiles/insertupdatemor.php",
				data: dataStringro,
				cache: false,


				success: function (html) {


					if (status == "CLOSED") {
						$.ajax({
							type: "POST",
							url: "../dbfiles/emailqasoclosuremor.php",
							data: dataStringro,
							cache: false,

							success: function (htmleee) {
								console.log(htmleee);
								$('html,body').animate({ scrollTop: 0 }, 500);
								$("#submitting").hide();
								$('#successmodel').show();
								setTimeout(function () { location.reload(); }, 1001);


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
					else {

						$('html,body').animate({ scrollTop: 0 }, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function () { location.reload(); }, 1001);
					}

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
		return false;



	}


	function moraccept() /* DONE */ {
		setTimeout(function () { $('#MORMODALTRANSFER').modal('hide') }, 3)
		$('#submitting').show();
		var morreason = document.getElementById("morreason").value;

		var morid = document.getElementById("moridt").value;

		var label = $('#startro');
		var morro = label.text();


		var dataStringro = { morid: morid, morreason: morreason, riskowner: morro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/moraccept.php",
			data: dataStringro,
			cache: false,


			success: function (html) {


				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);
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

		return false;



	}

	function mordecline() /* DONE */ {
		setTimeout(function () { $('#MORMODALTRANSFER').modal('hide') }, 3)
		$('#submitting').show();
		var morreason = document.getElementById("morreason").value;

		var moridt = document.getElementById("moridt").value;




		var riskownert = document.getElementById("riskownert").value;//old risk owner

		var label = $('#startro');
		var ro = label.text();
		var dataStringro = { moridt: moridt, morreason: morreason, riskownert: riskownert, riskowner: ro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/mordecline.php",
			data: dataStringro,
			cache: false,


			success: function (html) {


				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);
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

		return false;



	}



	function mortransfer() /* DONE */ {
		setTimeout(function () { $('#MORMODAL').modal('hide') }, 3)
		$('#submitting').show();
		var morrotransfer = document.getElementById("morrotransfer").value;
		var morreasonriskowner = document.getElementById("morreasonriskowner").value;
		var morid = document.getElementById("morid").value;
		var label = $('#startro');
		var ro = label.text();



		var dataStringro = { morid: morid, morrotransfer: morrotransfer, morreasonriskowner: morreasonriskowner, riskowner: ro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/mortransfer.php",
			data: dataStringro,
			cache: false,


			success: function (html) {

				$.ajax({
					type: "POST",
					url: "../dbfiles/emailro.php",
					data: dataStringro,
					cache: false,
					success: function (html) {
						$('html,body').animate({ scrollTop: 0 }, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function () { location.reload(); }, 1001);

					},
					error: function (html) {
						console.log("big man" + html);
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

		return false;



	}


	function comptransfer() /* DONE */ {
		setTimeout(function () { $('#COMPMODAL').modal('hide') }, 3)
		$('#submitting').show();
		var comprotransfer = document.getElementById("comprotransfer").value;
		var compreasonriskowner = document.getElementById("compreasonriskowner").value;
		var compid = document.getElementById("compid").value;
		var complabel = $('#startro');
		var compro = complabel.text();



		var dataStringro = { compid: compid, comprotransfer: comprotransfer, compreasonriskowner: compreasonriskowner, riskowner: compro };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/comptransfer.php",
			data: dataStringro,
			cache: false,


			success: function (html) {

				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);



			},
			error: function (html) {

			}




		});

		return false;



	}
	function compaccept() /* DONE */ {
		setTimeout(function () { $('#COMPMODALTRANSFER').modal('hide') }, 3)
		$('#submitting').show();
		var compreason = document.getElementById("compreason").value;

		var compid = document.getElementById("compidt").value;

		var label = $('#startro');
		var compro = label.text();


		var dataStringro = { compid: compid, compreason: compreason, compro: compro };


		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/compaccept.php",
			data: dataStringro,
			cache: false,


			success: function (html) {
				console.log("success man" + html);

				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);
			},
			error: function (html) {
				console.log("error man" + html);

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

		return false;



	}

	function compdecline() /* DONE */ {
		setTimeout(function () { $('#COMPMODALTRANSFER').modal('hide') }, 3)
		$('#submitting').show();
		var compreason = document.getElementById("compreason").value;

		var compid = document.getElementById("compidt").value;


		var compriskowner = document.getElementById("compriskowner").value;//old risk owner

		var label = $('#startro');
		var compro = label.text();
		var dataStringro = { compid: compid, compreason: compreason, compro: compro, compriskowner: compriskowner };

		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "../dbfiles/compdecline.php",
			data: dataStringro,
			cache: false,


			success: function (html) {


				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);
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

		return false;



	}
	function updatecomp() /* DONE */ {
		if (!$('#updatecontentcomp').val()) {
			if ($("#updatecontentcomp").parent().next(".validation").length == 0) // only add if not added
			{
				$("#updatecontentcomp").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter update contents</div>");
			}

			$('#updatecontentcomp').focus();
			focusSet = true;
		} else {
			$("#updatecontentcomp").parent().next(".validation").remove(); // remove it
		}

		if (!$('#updateusercomp').val()) {
			if ($("#updateusercomp").parent().next(".validation").length == 0) // only add if not added
			{
				$("#updateusercomp").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter name or your title</div>");
			}

			$('#updateusercomp').focus();
			focusSet = true;
		} else {
			$("#updateusercomp").parent().next(".validation").remove(); // remove it
		}

		var updatecontent = document.getElementById("updatecontentcomp").value;
		var updateuser = document.getElementById("updateusercomp").value;
		if (!(updatecontent == '') && !(updateuser == '')) {

			var uniquevar = jQuery.now();
			setTimeout(function () { $('#COMPMODALTWO').modal('hide') }, 3)
			$('#submitting').show();

			var IDCOMP = document.getElementById("IDCOMP").value;

			if (document.getElementById('statuscomp').checked) {
				var status = "CLOSED";
			} else {
				var status = "OPEN";
			}
			var myFileList = document.getElementById('exampleInputFilecomp').files;



			var myFile = myFileList[0];
			if (!(myFile == null)) {
				var myFileName = myFile.name;
				var extension = getFileExtension(myFileName);
				function getFileExtension(filename) {
					return filename.split('.').pop();
				}
				uploadFile(myFile, uniquevar, extension);




				var dataStringro = { id: IDCOMP, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: uniquevar, extension: extension };
			} else {

				var dataStringro = { id: IDCOMP, updatecontent: updatecontent, updateuser: updateuser, status: status, FileName: "", extension: "" };

			}
			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "../dbfiles/insertupdatecomp.php",
				data: dataStringro,
				cache: false,


				success: function (html) {

					console.log(html);
					if (status == "CLOSED") {
						$.ajax({
							type: "POST",
							url: "../dbfiles/emailsdcclosurecomp.php",
							data: dataStringro,
							cache: false,

							success: function (htmleee) {
								console.log(htmleee);
								$('html,body').animate({ scrollTop: 0 }, 500);
								$("#submitting").hide();
								$('#successmodel').show();
								setTimeout(function () { location.reload(); }, 1001);


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
					else {

						$('html,body').animate({ scrollTop: 0 }, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function () { location.reload(); }, 1001);
					}


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
		return false;
	}


	function updateaudit() /* DONE */ {
		var status = "";
		if (!$('#updatecontentaudit').val()) {
			if ($("#updatecontentaudit").parent().next(".validation").length == 0) // only add if not added
			{
				$("#updatecontentaudit").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter update contents</div>");
			}

			$('#updatecontentaudit').focus();
			focusSet = true;
		} else {
			$("#updatecontentaudit").parent().next(".validation").remove(); // remove it
		}

		if (!$('#updateuseraudit').val()) {
			if ($("#updateuseraudit").parent().next(".validation").length == 0) // only add if not added
			{
				$("#updateuseraudit").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter name or your title</div>");
			}

			$('#updateuseraudit').focus();
			focusSet = true;
		} else {
			$("#updateuseraudit").parent().next(".validation").remove(); // remove it
		}
		var audititemno = document.getElementById("audititemno").value;
		var updatecontent = document.getElementById("updatecontentaudit").value;
		var updateuser = document.getElementById("updateuseraudit").value;

		if (!(updatecontent == '') && !(updateuser == '')) {
			setTimeout(function () { $('#AUDITMODALUPDATE').modal('hide') }, 3)
			$('#submitting').show();
			var uniquevar = jQuery.now();

			var IDAUDIT = document.getElementById("auditidupdate").value;
			var label = $('#startro');
			var ro = label.text();

			if (document.getElementById('statusaudit').checked) {
				status = "CLOSED";
			} else {
				status = "OPEN";
			}

			var files = $("#file_name input[name='audit_image_name[]']").map(function () {
				return this.value;
			}).get().join(",");

			if (files != null) {
				var dataStringro = { id: IDAUDIT, updatecontent: updatecontent, audititemno: audititemno, updateuser: updateuser, status: status, FileName: files, extension: files };
			}
			else {
				var dataStringro = { id: IDAUDIT, ro: ro, updatecontent: updatecontent, audititemno: audititemno, updateuser: updateuser, status: status, FileName: "", extension: "" };
			}

			// AJAX code to submit form.
			$.ajax({
				type: "POST",
				url: "../dbfiles/insertupdateaudit.php",
				data: dataStringro,
				cache: false,


				success: function (html) {
					console.log("hellos => " + html);

					if (status == "CLOSED") {
						$.ajax({
							type: "POST",
							url: "../dbfiles/emailqasoclosureaudit.php",
							data: dataStringro,
							cache: false,

							success: function (htmleee) {
								console.log(htmleee);
								$('html,body').animate({ scrollTop: 0 }, 500);
								$("#submitting").hide();
								$('#successmodel').show();
								setTimeout(function () { location.reload(); }, 1001);


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
					else {
						$('html,body').animate({ scrollTop: 0 }, 500);
						$("#submitting").hide();
						$('#successmodel').show();
						setTimeout(function () { location.reload(); }, 1001);
					}
				},
				error: function (html) {
					$('html,body').animate({ scrollTop: 0 }, 500);
					$("#submitting").hide();
					$('#verybadmodel').show();
					/* setTimeout(function(){location.reload();}, 1001);  */
				}
			});
		}
	}


	function settargetdate() {
		setTimeout(function () { $('#AUDITMODAL').modal('hide') }, 3)
		$('#submitting').show();
		var IDAUD = document.getElementById("auditid").value;
		var datewa = document.getElementById("datepicker27").value;



		var dat = { id: IDAUD, date: datewa };

		$.ajax({
			type: "POST",
			url: "../dbfiles/audittargetdate.php",
			data: dat,
			cache: false,


			success: function (html) {

				$('html,body').animate({ scrollTop: 0 }, 500);
				$("#submitting").hide();
				$('#successmodel').show();
				setTimeout(function () { location.reload(); }, 1001);

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

