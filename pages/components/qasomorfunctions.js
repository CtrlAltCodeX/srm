$(document).ajaxSend(function (event, request, settings) {
  $("#loading-indicator").show();
});

$(document).ajaxComplete(function (event, request, settings) {
  $("#loading-indicator").hide();
});

$(document).ready(function () {
  $(".approve").click(function (e) {
    $("#auditidApprove").val(e.currentTarget.getAttribute("data-id"));
  });

  $("#closure-audit").DataTable();
});

function myFunction() {
  var focusSet = false;
  if (!$("#riskcontext").val()) {
    if ($("#riskcontext").parent().next(".validation").length == 0) {
      // only add if not added
      $("#riskcontext")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter riskcontext</div>"
        );
    }

    $("#riskcontext").focus();
    focusSet = true;
  } else {
    $("#riskcontext").parent().next(".validation").remove(); // remove it
  }
  if (!$("#riskconsequence").val()) {
    if ($("#riskconsequence").parent().next(".validation").length == 0) {
      // only add if not added
      $("#riskconsequence")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter riskconsequence</div>"
        );
    }

    if (!focusSet) {
      $("#riskconsequence").focus();
    }
  } else {
    $("#riskconsequence").parent().next(".validation").remove(); // remove it
  }

  if (!$("#rhood").val()) {
    if ($("#rhood").parent().next(".validation").length == 0) {
      // only add if not added
      $("#rhood")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter risk Likelihood</div>"
        );
    }

    $("#rhood").focus();
    focusSet = true;
  } else {
    $("#rhood").parent().next(".validation").remove(); // remove it
  }
  if (!$("#recommendeda").val()) {
    if ($("#recommendeda").parent().next(".validation").length == 0) {
      // only add if not added
      $("#recommendeda")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter recommended action</div>"
        );
    }

    $("#recommendeda").focus();
    focusSet = true;
  } else {
    $("#recommendeda").parent().next(".validation").remove(); // remove it
  }
  if (!$("#ohsref").val()) {
    if ($("#ohsref").parent().next(".validation").length == 0) {
      // only add if not added
      $("#ohsref")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter some reference</div>"
        );
    }

    $("#ohsref").focus();
    focusSet = true;
  } else {
    $("#ohsref").parent().next(".validation").remove(); // remove it
  }
  if (!$("#hitype").val()) {
    if ($("#hitype").parent().next(".validation").length == 0) {
      // only add if not added
      $("#hitype")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please select related to</div>"
        );
    }

    $("#hitype").focus();
    focusSet = true;
  } else {
    $("#hitype").parent().next(".validation").remove(); // remove it
  }
  if (!$("#pct").val()) {
    if ($("#pct").parent().next(".validation").length == 0) {
      // only add if not added
      $("#pct")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please select potential cause type</div>"
        );
    }

    $("#pct").focus();
    focusSet = true;
  } else {
    $("#pct").parent().next(".validation").remove(); // remove it
  }
  if (!$("#pcd").val()) {
    if ($("#pcd").parent().next(".validation").length == 0) {
      // only add if not added
      $("#pcd")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter some potential cause description</div>"
        );
    }

    $("#pcd").focus();
    focusSet = true;
  } else {
    $("#pcd").parent().next(".validation").remove(); // remove it
  }
  if (!$("#ect").val()) {
    if ($("#ect").parent().next(".validation").length == 0) {
      // only add if not added
      $("#ect")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please select effect type</div>"
        );
    }

    $("#ect").focus();
    focusSet = true;
  } else {
    $("#ect").parent().next(".validation").remove(); // remove it
  }
  if (!$("#ecd").val()) {
    if ($("#ecd").parent().next(".validation").length == 0) {
      // only add if not added
      $("#ecd")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please select effect type</div>"
        );
    }

    $("#ecd").focus();
    focusSet = true;
  } else {
    $("#ecd").parent().next(".validation").remove(); // remove it
  }
  if (!$("#hazorinc").val()) {
    if ($("#hazorinc").parent().next(".validation").length == 0) {
      // only add if not added
      $("#hazorinc")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please select if either hazard or incident</div>"
        );
    }

    $("#hazorinc").focus();
    focusSet = true;
  } else {
    $("#hazorinc").parent().next(".validation").remove(); // remove it
  }
  if (!$("#certificatehazard").val()) {
    if ($("#certificatehazard").parent().next(".validation").length == 0) {
      // only add if not added
      $("#certificatehazard")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please select hazard certificate</div>"
        );
    }

    $("#certificatehazard").focus();
    focusSet = true;
  } else {
    $("#certificatehazard").parent().next(".validation").remove(); // remove it
  }

  var riskcontext = document.getElementById("riskcontext").value;
  var riskowner = document.getElementById("riskowner").value;
  var id = document.getElementById("ID").value;
  var riskconsequence = document.getElementById("riskconsequence").value;
  var rhood = document.getElementById("rhood").value;
  var rl = document.getElementById("rl").value;
  var rew = document.getElementById("rew").value;
  var recommendeda = document.getElementById("recommendeda").value;
  var ohsref = document.getElementById("ohsref").value;
  var label = $("#startro");
  var qaso = label.text();

  var hitype = document.getElementById("hitype").value;
  var potcausetype = document.getElementById("pct").value;
  var potcaused = document.getElementById("pcd").value;
  var effecttype = document.getElementById("ect").value;
  var effectd = document.getElementById("ecd").value;
  var hazorinc = document.getElementById("hazorinc").value;
  var certificatehazard = document.getElementById("certificatehazard").value;
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = {
    riskcontext: riskcontext,
    riskowner: riskowner,
    id: id,
    riskconsequence: riskconsequence,
    rhood: rhood,
    rl: rl,
    rew: rew,
    recommendeda: recommendeda,
    ohsref: ohsref,
    qaso: qaso,
    hitype: hitype,
    potcausetype: potcausetype,
    potcaused: potcaused,
    effecttype: effecttype,
    effectd: effectd,
    hazorinc: hazorinc,
    certificatehazard: certificatehazard,
  };
  if (
    !(riskcontext == "") &&
    !(riskconsequence == "") &&
    !(rhood == "") &&
    !(recommendeda == "") &&
    !(ohsref == "") &&
    !(hitype == "") &&
    !(potcausetype == "") &&
    !(potcaused == "") &&
    !(effecttype == "") &&
    !(effectd == "") &&
    !(hazorinc == "") &&
    !(certificatehazard == "")
  ) {
    setTimeout(function () {
      $("#exampleModal").modal("hide");
    }, 3);
    $("#submitting").show();

    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "../qasodbfiles/processohs.php",
      data: dataString,
      cache: false,
      success: function (html) {
        console.log(html);
        $.ajax({
          type: "POST",
          url: "../qasodbfiles/emailro.php",
          data: dataString,
          cache: false,
          success: function (html) {
            $.ajax({
              type: "POST",
              url: "../qasodbfiles/emailreporterwithro.php",
              data: dataString,
              cache: false,
              success: function (htmltwo) {
                if (rl == "High Risk") {
                  $.ajax({
                    type: "POST",
                    url: "../qasodbfiles/emailexec.php",
                    data: dataString,
                    cache: false,
                    success: function (htmltwo) {
                      $("html,body").animate({ scrollTop: 0 }, 500);
                      $("#submitting").hide();
                      $("#successmodel").show();
                      setTimeout(function () {
                        location.reload();
                      }, 1001);
                    },
                    error: function (htmltwo) {
                      console.log(htmltwo);
                    },
                  });
                } else {
                  $("html,body").animate({ scrollTop: 0 }, 500);
                  $("#submitting").hide();
                  $("#successmodel").show();
                  setTimeout(function () {
                    location.reload();
                  }, 1001);
                }
              },
              error: function (htmltwo) {
                console.log(htmltwo);
              },
            });
          },
          error: function (html) {
            console.log("big man" + html);
          },
        });
      },
      error: function (html) {
        $("html").scrollTop(0);
        setTimeout(function () {
          $("#submitting").modal("hide");
        }, 3);
        $("#submitting").show();
        $("#submitting")
          .fadeTo(3000, 500)
          .slideUp(500, function () {
            $("#submitting").alert("close");
          });

        $("#verybadmodel").delay(3200).fadeIn(500);
        $("#verybadmodel").delay(3000).fadeOut(500);
      },
    });
  }
  return false;
}

function approveDisapprove() /* DONE */ {
  var status = "";

  // var updatecontent = document.getElementById("updatecontentaudit").value;
  var updatecontent = $("#updateauditapprove").val();

  if (!(updatecontent == "") && !(updateuser == "")) {
    setTimeout(function () {
      $("#UPDATEAUDIT").modal("hide");
    }, 3);
    var IDAUDIT = document.getElementById("updateaudit").value;
    var auditApproveUser = document.getElementById("auditApprove").value;

    if (document.getElementById("r3").checked && document.getElementById("r3").value == 1) {
      status = "CLOSED";
    } else {
      status = "OPEN";
    }

    var dataStringro = {
      id: IDAUDIT,
      ro: "",
      updatecontent: updatecontent,
      audititemno: "",
      updateuser: auditApproveUser,
      status: status,
      FileName: "",
      extension: "",
	    closure: status == 'CLOSED' ? true : false,
    };

    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "../qasodbfiles/insertupdateaudit.php",
      data: dataStringro,
      cache: false,
      success: function (html) {
        $("html,body").animate({ scrollTop: 0 }, 500);
        $("#submitting").hide();
        $("#successmodel").show();
        setTimeout(function(){location.reload();}, 1001); 

        // if (status == "CLOSED") {
        // 	$.ajax({
        // 		type: "POST",
        // 		url: "../dbfiles/emailqasoclosureaudit.php",
        // 		data: dataStringro,
        // 		cache: false,

        // 		success: function (htmleee) {
        // 			console.log(htmleee);
        // 			$('html,body').animate({ scrollTop: 0 }, 500);
        // 			$("#submitting").hide();
        // 			$('#successmodel').show();
        // 			setTimeout(function () { location.reload(); }, 1001);
        // 		},
        // 		error: function (html) {
        // 			$('html').scrollTop(0);
        // 			setTimeout(function () { $('#submitting').modal('hide') }, 3)
        // 			$('#submitting').show();
        // 			$("#submitting").fadeTo(3000, 500).slideUp(500, function () {
        // 				$("#submitting").alert('close');
        // 			});

        // 			$('#verybadmodel').delay(3200).fadeIn(500);
        // 			$('#verybadmodel').delay(3000).fadeOut(500);
        // 		}
        // 	});
        // }
        // else {
        // $('html,body').animate({ scrollTop: 0 }, 500);
        // $("#submitting").hide();
        // $('#successmodel').show();
        // setTimeout(function () { location.reload(); }, 1001);
        // }
      },
      error: function (html) {
        $("html,body").animate({ scrollTop: 0 }, 500);
        $("#submitting").hide();
        $("#verybadmodel").show();
        setTimeout(function(){location.reload();}, 1001); 
      },
    });
  } else {
    console.log("Fill Content");
  }
}

function update() {
  var id = document.getElementById("IDq").value;
  var updatecontent = document.getElementById("updatecontent").value;
  var resrating = document.getElementById("resrating").value;
  var updateuser = document.getElementById("updateuser").value;
  var resriskconsequenceq = document.getElementById(
    "resriskconsequenceq"
  ).value;
  var resrhoodq = document.getElementById("resrhoodq").value;
  var resrlq = document.getElementById("resrlq").value;
  var targetdate = document.getElementById("datepickerfidy").value;

  /* alert(targetdate); */

  var radio = $("input[name=r1]:radio:checked").val();
  if (radio === "1") {
    var focusSet = false;
    if (!$("#resriskconsequenceq").val()) {
      if ($("#resriskconsequenceq").parent().next(".validation").length == 0) {
        // only add if not added
        $("#resriskconsequenceq")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Residual Risk Consequence</div>"
          );
      }

      $("#resriskconsequenceq").focus();
      focusSet = true;
    } else {
      $("#resriskconsequenceq").parent().next(".validation").remove(); // remove it
    }

    if (!$("#resrhoodq").val()) {
      if ($("#resrhoodq").parent().next(".validation").length == 0) {
        // only add if not added
        $("#resrhoodq")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Residual Risk Likelihood</div>"
          );
      }

      $("#resrhoodq").focus();
      focusSet = true;
    } else {
      $("#resrhoodq").parent().next(".validation").remove(); // remove it
    }
    if (!$("#resrlq").val()) {
      if ($("#resrlq").parent().next(".validation").length == 0) {
        // only add if not added
        $("#resrlq")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Residual Risk Level</div>"
          );
      }

      $("#resrlq").focus();
      focusSet = true;
    } else {
      $("#resrlq").parent().next(".validation").remove(); // remove it
    }
    if (!$("#updatecontent").val()) {
      if ($("#updatecontent").parent().next(".validation").length == 0) {
        // only add if not added
        $("#updatecontent")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter some final comments</div>"
          );
      }

      $("#updatecontent").focus();
      focusSet = true;
    } else {
      $("#updatecontent").parent().next(".validation").remove(); // remove it
    }
    if (!$("#updateuser").val()) {
      if ($("#updateuser").parent().next(".validation").length == 0) {
        // only add if not added
        $("#updateuser")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter your name or title</div>"
          );
      }

      $("#updateuser").focus();
      focusSet = true;
    } else {
      $("#updateuser").parent().next(".validation").remove(); // remove it
    }
    if (!$("#resrating").val()) {
      if ($("#resrating").parent().next(".validation").length == 0) {
        // only add if not added
        $("#resrating")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter Residual Risk Rating</div>"
          );
      }

      $("#resrating").focus();
      focusSet = true;
    } else {
      $("#resrating").parent().next(".validation").remove(); // remove it
    }

    if (
      !(updatecontent == "") &&
      !(resrating == "") &&
      !(updateuser == "") &&
      !(resriskconsequenceq == "") &&
      !(resrhoodq == "") &&
      !(resrlq == "")
    ) {
      setTimeout(function () {
        $("#myMODALTHREE").modal("hide");
      }, 3);
      $("#submitting").show();

      var status = "CLOSED";
      var dataStringro = {
        id: id,
        updatecontent: updatecontent,
        updateuser: updateuser,
        status: status,
        resriskconsequenceq: resriskconsequenceq,
        resrhoodq: resrhoodq,
        resrlq: resrlq,
        resrating: resrating,
      };
      $.ajax({
        type: "POST",
        url: "../qasodbfiles/insertupdaterr.php",
        data: dataStringro,
        cache: false,
        success: function (html) {
          $.ajax({
            type: "POST",
            url: "../qasodbfiles/emailreporterclosure.php",
            data: dataStringro,
            cache: false,
            success: function (htmltwo) {
              $("html,body").animate({ scrollTop: 0 }, 500);
              $("#submitting").hide();
              $("#successmodel").show();
              setTimeout(function () {
                location.reload();
              }, 1001);
            },
            error: function (htmltwo) {
              console.log(htmltwo);
            },
          });
        },
        error: function (html) {
          $("html").scrollTop(0);
          setTimeout(function () {
            $("#submitting").modal("hide");
          }, 3);
          $("#submitting").show();
          $("#submitting")
            .fadeTo(3000, 500)
            .slideUp(500, function () {
              $("#submitting").alert("close");
            });

          $("#verybadmodel").delay(3200).fadeIn(500);
          $("#verybadmodel").delay(3000).fadeOut(500);
        },
      });
    }
  } else {
    if (!$("#updatecontent").val()) {
      if ($("#updatecontent").parent().next(".validation").length == 0) {
        // only add if not added
        $("#updatecontent")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter some comments</div>"
          );
      }

      $("#updatecontent").focus();
      focusSet = true;
    } else {
      $("#updatecontent").parent().next(".validation").remove(); // remove it
    }
    if (!$("#updateuser").val()) {
      if ($("#updateuser").parent().next(".validation").length == 0) {
        // only add if not added
        $("#updateuser")
          .parent()
          .after(
            "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter your name or title</div>"
          );
      }

      $("#updateuser").focus();
      focusSet = true;
    } else {
      $("#updateuser").parent().next(".validation").remove(); // remove it
    }
    if (!(updatecontent == "") && !(updateuser == "")) {
      setTimeout(function () {
        $("#myMODALTHREE").modal("hide");
      }, 3);
      $("#submitting").show();

      var status = "OPEN";
      var dataStringro = {
        id: id,
        updatecontent: updatecontent,
        updateuser: updateuser,
        status: status,
        targetdate: targetdate,
      };
      $.ajax({
        type: "POST",
        url: "../qasodbfiles/insertupdate.php",
        data: dataStringro,
        cache: false,
        success: function (html) {
          $("html,body").animate({ scrollTop: 0 }, 500);
          $("#submitting").hide();
          $("#successmodel").show();
          setTimeout(function () {
            location.reload();
          }, 1001);
        },
        error: function (html) {
          $("html").scrollTop(0);
          setTimeout(function () {
            $("#submitting").modal("hide");
          }, 3);
          $("#submitting").show();
          $("#submitting")
            .fadeTo(3000, 500)
            .slideUp(500, function () {
              $("#submitting").alert("close");
            });

          $("#verybadmodel").delay(3200).fadeIn(500);
          $("#verybadmodel").delay(3000).fadeOut(500);
        },
      });
    }
  }
}

function logout() {
  $("#submitting").show();
  $.ajax({
    type: "POST",
    url: "../qasodbfiles/logout.php",

    cache: false,

    success: function (html) {
      setTimeout(' window.location.href = "../../index.html"; ', 500);
    },
    error: function (html) {},
  });
}

function updatemor() {
  setTimeout(function () {
    $("#MORMODALQASO").modal("hide");
  }, 3);
  $("#submitting").show();
  var updatecontent = document.getElementById("qasoupdatecontent").value;
  var updateuser = document.getElementById("qasoupdateuser").value;
  var id = document.getElementById("morid").value;

  var radio = $("input[name=r2]:radio:checked").val();
  if (radio === "1") {
    var status = "CLOSED";
    var dataStringro = {
      id: id,
      updatecontent: updatecontent,
      updateuser: updateuser,
      status: status,
    };
    $.ajax({
      type: "POST",
      url: "../qasodbfiles/insertupdaterrmor.php",
      data: dataStringro,
      cache: false,
      success: function (html) {
        $("html,body").animate({ scrollTop: 0 }, 500);
        $("#submitting").hide();
        $("#successmodel").show();
        setTimeout(function () {
          location.reload();
        }, 1001);
      },
      error: function (html) {
        $("html").scrollTop(0);
        setTimeout(function () {
          $("#submitting").modal("hide");
        }, 3);
        $("#submitting").show();
        $("#submitting")
          .fadeTo(3000, 500)
          .slideUp(500, function () {
            $("#submitting").alert("close");
          });

        $("#verybadmodel").delay(3200).fadeIn(500);
        $("#verybadmodel").delay(3000).fadeOut(500);
      },
    });
  } else {
    var status = "OPEN";
    var dataStringro = {
      id: id,
      updatecontent: updatecontent,
      updateuser: updateuser,
      status: status,
    };
    $.ajax({
      type: "POST",
      url: "../qasodbfiles/insertupdatemor.php",
      data: dataStringro,
      cache: false,
      success: function (html) {
        $("html,body").animate({ scrollTop: 0 }, 500);
        $("#submitting").hide();
        $("#successmodel").show();
        setTimeout(function () {
          location.reload();
        }, 1001);
      },
      error: function (html) {
        $("html").scrollTop(0);
        setTimeout(function () {
          $("#submitting").modal("hide");
        }, 3);
        $("#submitting").show();
        $("#submitting")
          .fadeTo(3000, 500)
          .slideUp(500, function () {
            $("#submitting").alert("close");
          });

        $("#verybadmodel").delay(3200).fadeIn(500);
        $("#verybadmodel").delay(3000).fadeOut(500);
      },
    });
  }

  // AJAX code to submit form.

  return false;
}

// function updateaudit() {
//   // setTimeout(function () {
//   //   $("#QASOAUDITMODAL").modal("hide");
//   // }, 3);
//   $("#submitting").show();
//   var updatecontent = document.getElementById("qasoupdatecontentaudit").value;
//   var updateuser = document.getElementById("qasoupdateuseraudit").value;
//   var id = document.getElementById("auditid").value;

//   var radio = $("input[name=r3]:radio:checked").val();
//   console.log(radio);

//   if (radio === "1") {
//     var status = "CLOSED";
//     var dataStringro = {
//       id: id,
//       updatecontent: updatecontent,
//       updateuser: updateuser,
//       status: status,
//     };
//     $.ajax({
//       type: "POST",
//       url: "../qasodbfiles/insertupdateaudit.php",
//       data: dataStringro,
//       cache: false,
//       success: function (html) {
//         $("html,body").animate({ scrollTop: 0 }, 500);
//         $("#submitting").hide();
//         $("#successmodel").show();
//         setTimeout(function () {
//           location.reload();
//         }, 1001);
//       },
//       error: function (html) {
//         $("html").scrollTop(0);
//         setTimeout(function () {
//           $("#submitting").modal("hide");
//         }, 3);
//         $("#submitting").show();
//         $("#submitting")
//           .fadeTo(3000, 500)
//           .slideUp(500, function () {
//             $("#submitting").alert("close");
//           });

//         $("#verybadmodel").delay(3200).fadeIn(500);
//         $("#verybadmodel").delay(3000).fadeOut(500);
//       },
//     });
//   } else {
//     var status = "OPEN";
//     var dataStringro = {
//       id: id,
//       updatecontent: updatecontent,
//       updateuser: updateuser,
//       status: status,
//     };
//     $.ajax({
//       type: "POST",
//       url: "../qasodbfiles/insertupdateaudit.php",
//       data: dataStringro,
//       cache: false,
//       success: function (html) {
//         $("html,body").animate({ scrollTop: 0 }, 500);
//         $("#submitting").hide();
//         $("#successmodel").show();
//         setTimeout(function () {
//           location.reload();
//         }, 1001);
//       },
//       error: function (html) {
//         $("html").scrollTop(0);
//         setTimeout(function () {
//           $("#submitting").modal("hide");
//         }, 3);
//         $("#submitting").show();
//         $("#submitting")
//           .fadeTo(3000, 500)
//           .slideUp(500, function () {
//             $("#submitting").alert("close");
//           });

//         $("#verybadmodel").delay(3200).fadeIn(500);
//         $("#verybadmodel").delay(3000).fadeOut(500);
//       },
//     });
//   }

//   // AJAX code to submit form.

//   return false;
// }

function updateauditall() {
  setTimeout(function () {
    $("#AUDITMODAL").modal("hide");
  }, 3);
  $("#submitting").show();
  var uniquevar = jQuery.now();
  var updatecontent = document.getElementById("updatecontentauditall").value;
  var updateuser = document.getElementById("updateuserauditall").value;
  var IDCOMP = document.getElementById("auditidall").value;

  if (document.getElementById("statusauditall").checked) {
    var status = "CLOSED";
  } else {
    var status = "OPEN";
  }
  var files = $("input[name='audit_image_name[]']")
    .map(function () {
      return this.value; // $(this).val()
    })
    .get()
    .join(",");

  if (files != null) {
    var dataStringro = {
      id: IDCOMP,
      updatecontent: updatecontent,
      updateuser: updateuser,
      status: status,
      FileName: files,
      FileSize: "NOT NEEDED",
      FileType: "NOT NEEDED",
      extension: files,
    };
  } else {
    var dataStringro = {
      id: IDCOMP,
      updatecontent: updatecontent,
      updateuser: updateuser,
      status: status,
      FileName: "",
      FileSize: "",
      FileType: "",
      extension: "",
    };
  }

  // AJAX code to submit form.
  $.ajax({
    type: "POST",
    url: "../dbfiles/insertupdateaudit.php",
    data: dataStringro,
    cache: false,

    success: function (html) {
      $("html,body").animate({ scrollTop: 0 }, 500);
      $("#submitting").hide();
      $("#successmodel").show();
      setTimeout(function () {
        location.reload();
      }, 1001);
    },
    error: function (html) {
      $("html").scrollTop(0);
      setTimeout(function () {
        $("#submitting").modal("hide");
      }, 3);
      $("#submitting").show();
      $("#submitting")
        .fadeTo(3000, 500)
        .slideUp(500, function () {
          $("#submitting").alert("close");
        });

      $("#verybadmodel").delay(3200).fadeIn(500);
      $("#verybadmodel").delay(3000).fadeOut(500);
    },
  });
}

function uploadFile(myFileObject, uniquevar, extension) {
  // Open Our formData Object
  var formData = new FormData();

  // Append our file to the formData object
  // Notice the first argument "file" and keep it in mind
  formData.append("my_uploaded_file", myFileObject);
  formData.append("uniquevar", uniquevar);
  formData.append("extension", extension);

  // Create our XMLHttpRequest Object
  var xhr = new XMLHttpRequest();

  // Open our connection using the POST method
  xhr.open("POST", "../dbfiles/upload.php");

  // Send the file
  xhr.send(formData);
}

function qasotransfer() {
  setTimeout(function () {
    $("#exampleModalTransfer").modal("hide");
  }, 3);
  $("#submitting").show();
  var qasoransfer = document.getElementById("qasoransfer").value;
  var reasonqaso = document.getElementById("reasonqaso").value;
  var IDT = document.getElementById("IDT").value;
  var label = $("#startro");
  var qaso = label.text();

  var dataStringro = {
    id: IDT,
    qasoransfer: qasoransfer,
    reasonqaso: reasonqaso,
    pqaso: qaso,
  };

  // AJAX code to submit form.
  $.ajax({
    type: "POST",
    url: "../qasodbfiles/qasotransfer.php",
    data: dataStringro,
    cache: false,

    success: function (html) {
      $.ajax({
        type: "POST",
        url: "../dbfiles/emailqasotransfer.php",
        data: dataStringro,
        cache: false,
        success: function (html) {
          $("html,body").animate({ scrollTop: 0 }, 500);
          $("#submitting").hide();
          $("#successmodel").show();
          setTimeout(function () {
            location.reload();
          }, 1001);
        },
        error: function (html) {
          console.log("big man" + html);
        },
      });
    },
    error: function (html) {
      $("html").scrollTop(0);
      setTimeout(function () {
        $("#submitting").modal("hide");
      }, 3);
      $("#submitting").show();
      $("#submitting")
        .fadeTo(3000, 500)
        .slideUp(500, function () {
          $("#submitting").alert("close");
        });

      $("#verybadmodel").delay(3200).fadeIn(500);
      $("#verybadmodel").delay(3000).fadeOut(500);
    },
  });

  return false;
}

function updateaudit() /* DONE */ {
  proceed = "no";
  var status = "";

  if (!$("#updatecontentaudit").val()) {
    if ($("#updatecontentaudit").parent().next(".validation").length == 0) {
      // only add if not added
      $("#updatecontentaudit")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter update contents</div>"
        );
    }

    $("#updatecontentaudit").focus();
    focusSet = true;
  } else {
    $("#updatecontentaudit").parent().next(".validation").remove(); // remove it
  }

  if (!$("#updateuseraudit").val()) {
    if ($("#updateuseraudit").parent().next(".validation").length == 0) {
      // only add if not added
      $("#updateuseraudit")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter name or your title</div>"
        );
    }

    $("#updateuseraudit").focus();
    focusSet = true;
  } else {
    $("#updateuseraudit").parent().next(".validation").remove(); // remove it
  }

  if (!$("#audititemno").val()) {
    if ($("#audititemno").parent().next(".validation").length == 0) {
      // only add if not added
      $("#audititemno")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter update contents</div>"
        );
    }

    $("#audititemno").focus();
    focusSet = true;
  } else {
    $("#audititemno").parent().next(".validation").remove(); // remove it
  }
  var audititemno = document.getElementById("audititemno").value;
  var updatecontent = document.getElementById("updatecontentaudit").value;
  var updateuser = document.getElementById("updateuseraudit").value;

  if (!(updatecontent == "") && !(updateuser == "") && !(audititemno == "")) {
    setTimeout(function () {
      $("#AUDITMODALUPDATE").modal("hide");
    }, 3);
    $("#submitting").show();
    var uniquevar = jQuery.now();

    var IDAUDIT = document.getElementById("auditidupdate").value;
    var label = $("#startro");
    var ro = label.text();

    if (document.getElementById("statusaudit").checked) {
      status = "CLOSED";
    } else {
      status = "OPEN";
    }

    var files = $("input[name='audit_image_name[]']")
      .map(function () {
        return this.value; // $(this).val()
      })
      .get()
      .join(",");

    if (files != null) {
      /* alert(IDAUDIT); */

      var dataStringro = {
        id: IDAUDIT,
        updatecontent: updatecontent,
        audititemno: audititemno,
        updateuser: updateuser,
        status: status,
        FileName: files,
        extension: files,
      };
    } else {
      var dataStringro = {
        id: IDAUDIT,
        ro: ro,
        updatecontent: updatecontent,
        audititemno: audititemno,
        updateuser: updateuser,
        status: status,
        FileName: "",
        extension: "",
      };
    }

    // AJAX code to submit form.
    $.ajax({
      type: "POST",
      url: "../dbfiles/insertupdateauditqaso.php",
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
              $("html,body").animate({ scrollTop: 0 }, 500);
              $("#submitting").hide();
              $("#successmodel").show();
              // setTimeout(function () { location.reload(); }, 1001);
            },
            error: function (html) {
              $("html").scrollTop(0);
              setTimeout(function () {
                $("#submitting").modal("hide");
              }, 3);
              $("#submitting").show();
              $("#submitting")
                .fadeTo(3000, 500)
                .slideUp(500, function () {
                  $("#submitting").alert("close");
                });

              $("#verybadmodel").delay(3200).fadeIn(500);
              $("#verybadmodel").delay(3000).fadeOut(500);
            },
          });
        } else {
          $("html,body").animate({ scrollTop: 0 }, 500);
          $("#submitting").hide();
          $("#successmodel").show();
          setTimeout(function () {
            location.reload();
          }, 1001);
        }
      },
      error: function (html) {
        $("html,body").animate({ scrollTop: 0 }, 500);
        $("#submitting").hide();
        $("#verybadmodel").show();
        /* setTimeout(function(){location.reload();}, 1001);  */
      },
    });
  }
}
