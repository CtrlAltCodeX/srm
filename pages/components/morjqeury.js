$(window).load(function () {
  $(".loader").fadeOut("slow");
  $("#successmodel").hide();

  $("#verybadmodel").hide();
  $("#submitting").hide();

  document.getElementById("morform").reset();
});

function submitmor() {
  $("#submitting").show();
  var uniquevar = jQuery.now();

  var morid;

  morid = document.getElementById("morid").value;

  if (morid == "") {
    $.ajax({
      type: "POST",
      url: "../components/morgetid.php",

      async: false,
      success: function (html) {
        console.log(html);
        morid = $.trim(html);
      },
      error: function (html) {
        /* document.getElementById('hazardform').reset(); */
        console.log(html);
        $("html").scrollTop(0);
      },
    });
  }

  var caafid = document.getElementById("caafid").value;

  var receiveddate = document.getElementById("datepickerTWO").value;

  var coo = document.getElementById("coo").value;
  var actypeseries = document.getElementById("actypeseries").value;
  var registration = document.getElementById("registration").value;
  var operator = document.getElementById("operator").value;
  var doo = document.getElementById("datepicker").value;
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
  var ctype = document.getElementById("ctype").value;
  var cht = document.getElementById("cht").value;
  var cth = document.getElementById("cth").value;
  var pw = document.getElementById("pw").value;
  var pt = document.getElementById("pt").value;
  var vk = document.getElementById("vk").value;
  var icing = document.getElementById("icing").value;
  var turbulance = document.getElementById("turbulance").value;
  var rst = document.getElementById("rst").value;
  var rsc = document.getElementById("rsc").value;
  var airport = document.getElementById("airport").value;
  var hitype = document.getElementById("hitype").value;

  var morcert = document.getElementById("morcert").value;
  var riskowner = document.getElementById("riskowner").value;
  var lastupdatedate = document.getElementById("datepickerONE").value;
  var updatedetails = document.getElementById("updatedetails").value;
  var status = document.getElementById("status").value;
  var morqaso = document.getElementById("morqaso").value;

  var bt = document.getElementById("bt").value;
  var narrative = document.getElementById("narrative").value;
  var organisation = document.getElementById("organisation").value;
  var name = document.getElementById("name").value;
  var position = document.getElementById("position").value;
  var myFileList = document.getElementById("exampleInputFilei").files;
  var myFile = myFileList[0];
  if (!(myFile == null)) {
    var myFileName = myFile.name;
    var extension = getFileExtension(myFileName);
    function getFileExtension(filename) {
      return filename.split(".").pop();
    }

    uploadFile(myFile, uniquevar, extension);
    var dataString = {
      morid: morid,
      caafid: caafid,
      receiveddate: receiveddate,
      coo: coo,
      actypeseries: actypeseries,
      registration: registration,
      operator: operator,
      doo: doo,
      timeoc: timeoc,
      dtn: dtn,
      lpr: lpr,
      fno: fno,
      routefrom: routefrom,
      routeto: routeto,
      ias: ias,
      fah: fah,
      iv: iv,
      err: err,
      nof: nof,
      fp: fp,
      ds: ds,
      oat: oat,
      ctype: ctype,
      cht: cht,
      cth: cth,
      pw: pw,
      pt: pt,
      vk: vk,
      icing: icing,
      turbulance: turbulance,
      rst: rst,
      rsc: rsc,
      airport: airport,
      hitype: hitype,
      bt: bt,
      morcert: morcert,
      riskowner: riskowner,
      lastupdatedate: lastupdatedate,
      updatedetails: updatedetails,
      status: status,
      morqaso: morqaso,
      narrative: narrative,
      organisation: organisation,
      name: name,
      position: position,
      myFileName: uniquevar,
      extension: extension,
    };
  } else {
    var dataString = {
      morid: morid,
      caafid: caafid,
      receiveddate: receiveddate,
      coo: coo,
      actypeseries: actypeseries,
      registration: registration,
      operator: operator,
      doo: doo,
      timeoc: timeoc,
      dtn: dtn,
      lpr: lpr,
      fno: fno,
      routefrom: routefrom,
      routeto: routeto,
      ias: ias,
      fah: fah,
      iv: iv,
      err: err,
      nof: nof,
      fp: fp,
      ds: ds,
      oat: oat,
      ctype: ctype,
      cht: cht,
      cth: cth,
      pw: pw,
      pt: pt,
      vk: vk,
      icing: icing,
      turbulance: turbulance,
      rst: rst,
      rsc: rsc,
      airport: airport,
      hitype: hitype,
      bt: bt,
      morcert: morcert,
      riskowner: riskowner,
      lastupdatedate: lastupdatedate,
      updatedetails: updatedetails,
      status: status,
      morqaso: morqaso,
      narrative: narrative,
      organisation: organisation,
      name: name,
      position: position,
      myFileName: "",
      extension: "",
    };
  }
  $.ajax({
    type: "POST",
    url: "../components/morinsert.php",
    data: dataString,
    cache: false,
    success: function (html) {
      if (status == "OPEN") {
        $.ajax({
          type: "POST",
          url: "../components/moremailro.php",
          data: dataString,
          cache: false,
          success: function (htmlthree) {
            console.log(htmlthree);
            $("html,body").animate({ scrollTop: 0 }, 50);
            $("#submitting").hide();
            $("#successmodel").show();
            setTimeout(function () {
              location.reload();
            }, 1001);
          },
          error: function (htmlthree) {
            alert("failure");
            console.log(htmlthree);
            $("html,body").animate({ scrollTop: 0 }, 500);
            $("#submitting").hide();
            $("#verybadmodel").show();
          },
        });
      } else {
        $("html,body").animate({ scrollTop: 0 }, 50);
        $("#submitting").hide();
        $("#successmodel").show();
        setTimeout(function () {
          location.reload();
        }, 1001);
      }
    },
    error: function (html) {
      console.log("Error" + html);
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

$("#datepicker").datepicker({
  autoclose: true,
});
$("#datepickerONE").datepicker({
  autoclose: true,
});
$("#datepickerTWO").datepicker({
  autoclose: true,
});

$(".timepicker").timepicker({
  showInputs: false,
});

function logout() {
  $("#submitting").show();
  $.ajax({
    type: "POST",
    url: "../dbfiles/logout.php",

    cache: false,

    success: function (html) {
      setTimeout(' window.location.href = "../../index.html"; ', 500);
    },
    error: function (html) {},
  });
}
