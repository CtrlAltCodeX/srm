$("#myMODAL").on("show.bs.modal", function (event) {
  $("#hazardmoreonthistable").empty();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  var hitype = button.data("hitype");
  var hid = button.data("hid");
  var causetype = button.data("causetype");
  var cd = button.data("cd");
  var effecttype = button.data("effecttype");
  var ed = button.data("ed");
  var air = button.data("airport");

  var dvo = button.data("deventoccurance");
  var dr = button.data("dreported");
  var qaso = button.data("qaso");
  var ro = button.data("riskowner");
  var riskcontext = button.data("riskcontext");
  var riskconsequence = button.data("riskconsequence");
  var riskhood = button.data("riskhood");
  var rl = button.data("risklevel");
  var response = button.data("response");
  var recommendeda = button.data("recommendeda");
  var ohsref = button.data("ohsref");

  var hazorinc = button.data("hazorinc");
  var timeoc = button.data("timeoc");

  var newro = button.data("newro");

  var modal = $(this);
  modal
    .find(".modal-title")
    .text("More details for Hazard/Incident Report for ID : " + ID);
  modal.find(".modal-body #IDq").val(ID);
  modal.find(".modal-body #air").val(air);
  modal.find(".modal-body #hitypeq").val(hitype);
  modal.find(".modal-body #hidq").val(hid);
  modal.find(".modal-body #pctq").val(causetype);
  modal.find(".modal-body #pcdq").val(cd);
  modal.find(".modal-body #ectq").val(effecttype);
  modal.find(".modal-body #ecdq").val(ed);

  modal.find(".modal-body #dvoq").val(dvo);
  modal.find(".modal-body #drq").val(dr);

  modal.find(".modal-body #roq").val(ro);
  modal.find(".modal-body #qasoq").val(qaso);
  modal.find(".modal-body #riskcontextq").val(riskcontext);
  modal.find(".modal-body #riskconsequenceq").val(riskconsequence);
  modal.find(".modal-body #rhoodq").val(riskhood);
  modal.find(".modal-body #rlq").val(rl);
  modal.find(".modal-body #rewq").val(response);
  modal.find(".modal-body #recommendedaq").val(recommendeda);
  modal.find(".modal-body #ohsrefq").val(ohsref);

  modal.find(".modal-body #hazorincq").val(hazorinc);
  modal.find(".modal-body #timeocq").val(timeoc);

  if (newro !== "") {
    modal.find(".modal-body #rotransfer").prop("disabled", true);
    modal.find(".modal-body #reasonriskowner").prop("disabled", true);
    modal.find(".modal-body #hazardtransfer").prop("disabled", true);
    if ($("#reasonriskowner").parent().next(".validation").length == 0) {
      // only add if not added
      $("#reasonriskowner")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>This hazard is already transferred</div>"
        );
    }
  } else {
    $("#reasonriskowner").parent().next(".validation").remove();
    modal.find(".modal-body #rotransfer").prop("disabled", false);
    modal.find(".modal-body #reasonriskowner").prop("disabled", false);
    modal.find(".modal-body #hazardtransfer").prop("disabled", false);
  }
  var dataString = "id=" + ID;

  $.ajax({
    type: "POST",
    url: "../dbfiles/processhazard.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></thead><tbody>";

      $("#hazardmoreonthistable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var hazid = html[i].hazid;
        var hazorinc = html[i].hazorinc;
        var airport = html[i].airport;
        var hitype = html[i].hitype;
        var hid = html[i].hid;
        var ct = html[i].ct;
        var cd = html[i].cd;
        var et = html[i].et;
        var ed = html[i].ed;
        var deventoccurance = html[i].deventoccurance;
        var timeoc = html[i].timeoc;
        var dreported = html[i].dreported;
        var riskowner = html[i].riskowner;
        var qaso = html[i].qaso;
        var riskcontext = html[i].riskcontext;
        var riskconsequence = html[i].riskconsequence;
        var rhood = html[i].rhood;
        var risklevel = html[i].risklevel;
        var recommendeda = html[i].recommendeda;
        var ref = html[i].ref;
        var status = html[i].status;
        var cert = html[i].cert;
        var tg = html[i].tg;

        var tr_str =
          "<tr>" +
          "<td style='font-weight:bold'>ID</td>" +
          "<td >" +
          hazid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Hazard/Incident</td>" +
          "<td >" +
          hazorinc +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Airport</td>" +
          "<td >" +
          airport +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Hazard Type</td>" +
          "<td >" +
          hitype +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Hazard Description</td>" +
          "<td >" +
          hid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Cause Type</td>" +
          "<td >" +
          ct +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Cause Description</td>" +
          "<td >" +
          cd +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Effect Type</td>" +
          "<td >" +
          et +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Effect Description</td>" +
          "<td >" +
          ed +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Date of Occurance</td>" +
          "<td >" +
          deventoccurance +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Time of Occurance</td>" +
          "<td >" +
          timeoc +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Date Reported</td>" +
          "<td >" +
          dreported +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Owner</td>" +
          "<td >" +
          riskowner +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>QASO</td>" +
          "<td >" +
          qaso +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Context</td>" +
          "<td >" +
          riskcontext +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Consequence</td>" +
          "<td >" +
          riskconsequence +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Likelihood</td>" +
          "<td >" +
          rhood +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Level</td>" +
          "<td >" +
          risklevel +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Recommended Action</td>" +
          "<td >" +
          recommendeda +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Reference</td>" +
          "<td >" +
          ref +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Status</td>" +
          "<td >" +
          status +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Certificate Location</td>" +
          "<td >" +
          cert +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Target Date</td>" +
          "<td >" +
          tg +
          "</td>" +
          "</tr>";

        $("#hazardmoreonthistable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#hazardmoreonthistable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#myMODALmyMODAL").on("show.bs.modal", function (event) {
  $("#updatetabletwo").empty();

  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  var hitype = button.data("hitype");
  var airport = button.data("airport");
  var hid = button.data("hid");
  var causetype = button.data("causetype");
  var cd = button.data("cd");
  var effecttype = button.data("effecttype");
  var ed = button.data("ed");

  var dvo = button.data("deventoccurance");
  var dr = button.data("dreported");
  var qaso = button.data("qaso");
  var ro = button.data("riskowner");
  var riskcontext = button.data("riskcontext");
  var riskconsequence = button.data("riskconsequence");
  var riskhood = button.data("riskhood");
  var rl = button.data("risklevel");
  var response = button.data("response");
  var recommendeda = button.data("recommendeda");
  var ohsref = button.data("ohsref");

  var hazorinc = button.data("hazorinc");
  var timeoc = button.data("timeoc");

  var modal = $(this);
  modal
    .find(".modal-title")
    .text("More details for Hazard/Incident Report for ID : " + ID);
  modal.find(".modal-body #IDar").val(ID);
  modal.find(".modal-body #hitypeqar").val(hitype);
  modal.find(".modal-body #airth").val(airport);
  modal.find(".modal-body #hidqar").val(hid);
  modal.find(".modal-body #pctqar").val(causetype);
  modal.find(".modal-body #pcdqar").val(cd);
  modal.find(".modal-body #ectqar").val(effecttype);
  modal.find(".modal-body #ecdqar").val(ed);

  modal.find(".modal-body #dvoqar").val(dvo);
  modal.find(".modal-body #drqar").val(dr);

  modal.find(".modal-body #roqar").val(ro);
  modal.find(".modal-body #qasoqar").val(qaso);
  modal.find(".modal-body #riskcontextqar").val(riskcontext);
  modal.find(".modal-body #riskconsequenceqar").val(riskconsequence);
  modal.find(".modal-body #rhoodqar").val(riskhood);
  modal.find(".modal-body #rlqar").val(rl);
  modal.find(".modal-body #rewqar").val(response);
  modal.find(".modal-body #recommendedaqar").val(recommendeda);
  modal.find(".modal-body #ohsrefqar").val(ohsref);

  modal.find(".modal-body #hazorincar").val(hazorinc);
  modal.find(".modal-body #timeocar").val(timeoc);
  var dataString = "id=" + ID;

  // AJAX code to submit form.
  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdatetransferredhazard.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Status</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";

      $("#updatetabletwo").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var hazid = html[i].hazid;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var status = html[i].status;
        var link = html[i].link;

        var tr_str =
          "<tr>" +
          "<td >" +
          hazid +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td >" +
          status +
          "</td>" +
          "<td >" +
          link +
          "</td>" +
          "</tr>";

        $("#updatetabletwo").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Status</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#updatetabletwo").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#myMODALTWO").on("show.bs.modal", function (event) {
  $("#updatetable").empty();
  $("#hazardtable").empty();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  /* var ID = button.data('id')  */

  var modal = $(this);
  modal.find(".modal-title").text("Update Details for ID : " + ID);
  modal.find(".modal-body #IDu").val(ID);

  // Returns successful data submission message when the entered information is stored in database.
  var dataString = "id=" + ID;

  $.ajax({
    type: "POST",
    url: "../dbfiles/processhazard.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></thead><tbody>";

      $("#hazardtable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var hazid = html[i].hazid;
        var airport = html[i].airport;
        var hid = html[i].hid;
        var recommendeda = html[i].recommendeda;

        var tr_str =
          "<tr>" +
          "<td style='font-weight:bold'>ID</td>" +
          "<td >" +
          hazid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Airport</td>" +
          "<td >" +
          airport +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Hazard Description</td>" +
          "<td >" +
          hid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Recommended Action</td>" +
          "<td >" +
          recommendeda +
          "</td>" +
          "</tr>";

        $("#hazardtable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#hazardtable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });

  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdate.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";
      $("#updatetable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var hazid = html[i].hazid;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var link = html[i].link;

        var tr_str =
          "<tr>" +
          "<td >" +
          hazid +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td >" +
          link +
          "</td>" +
          "</tr>";

        $("#updatetable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#updatetable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#MORMODAL").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var id = button.data("id");
  var caafid = button.data("caafid");
  var catofoc = button.data("catofoc");
  var actype = button.data("actype");
  var reg = button.data("reg");

  var operator = button.data("operator");
  var date = button.data("date");
  var time = button.data("time");
  var timetype = button.data("timetype");
  var loc_pos_rwy = button.data("loc_pos_rwy");
  var fcr_flightno = button.data("fcr_flightno");
  var fcr_rf = button.data("fcr_rf");
  var fcr_rt = button.data("fcr_rt");
  var fcr_ias = button.data("fcr_ias");
  var fcr_ft = button.data("fcr_ft");
  var fcr_clearance = button.data("fcr_clearance");
  var etops = button.data("etops");
  var nature_flight = button.data("nature_flight");

  var flight_phase = button.data("flight_phase");
  var env_w_kts = button.data("env_w_kts");
  var env_w_oc = button.data("env_w_oc");
  var env_c_type = button.data("env_c_type");
  var env_c_ft = button.data("env_c_ft");
  var env_c_th = button.data("env_c_th");
  var env_p_w = button.data("env_p_w");
  var env_p_l = button.data("env_p_l");
  var omc_v = button.data("omc_v");
  var omc_icing = button.data("omc_icing");
  var omc_turb = button.data("omc_turb");
  var rs_status = button.data("rs_status");
  var rs_cat = button.data("rs_cat");

  var airport = button.data("airport");
  var relatedto = button.data("relatedto");
  var title = button.data("title");
  var narrative = button.data("narrative");
  var reporter_org = button.data("reporter_org");
  var reporter_name = button.data("reporter_name");
  var reporter_position = button.data("reporter_position");
  var receiveddate = button.data("receiveddate");
  var riskowner = button.data("riskowner");
  var receiveddate = button.data("receiveddate");
  var lastupdate = button.data("lastupdate");

  var newro = button.data("newro");

  var modal = $(this);
  modal.find(".modal-title").text("More details for MOR : " + id);
  modal.find(".modal-body #morid").val(id);
  modal.find(".modal-body #caafid").val(caafid);
  modal.find(".modal-body #rd").val(receiveddate);
  modal.find(".modal-body #hitypeq").val(relatedto);
  modal.find(".modal-body #coo").val(catofoc);
  modal.find(".modal-body #actypeseries").val(actype);
  modal.find(".modal-body #registration").val(reg);
  modal.find(".modal-body #operator").val(operator);
  modal.find(".modal-body #date").val(date);
  modal.find(".modal-body #timeoc").val(time);
  modal.find(".modal-body #dtn").val(timetype);
  modal.find(".modal-body #lpr").val(loc_pos_rwy);
  modal.find(".modal-body #fno").val(fcr_flightno);
  modal.find(".modal-body #routefrom").val(fcr_rf);
  modal.find(".modal-body #routeto").val(fcr_rt);
  modal.find(".modal-body #ias").val(fcr_ias);
  modal.find(".modal-body #fah").val(fcr_ft);
  modal.find(".modal-body #iv").val(fcr_clearance);
  modal.find(".modal-body #err").val(etops);
  modal.find(".modal-body #nof").val(nature_flight);

  modal.find(".modal-body #fp").val(flight_phase);
  modal.find(".modal-body #ds").val(env_w_kts);
  modal.find(".modal-body #oat").val(env_w_oc);
  modal.find(".modal-body #ctype").val(env_c_type);
  modal.find(".modal-body #cht").val(env_c_ft);
  modal.find(".modal-body #cth").val(env_c_th);
  modal.find(".modal-body #pw").val(env_p_w);
  modal.find(".modal-body #pt").val(env_p_l);
  modal.find(".modal-body #vk").val(omc_v);
  modal.find(".modal-body #icing").val(omc_icing);
  modal.find(".modal-body #turbulance").val(omc_turb);
  modal.find(".modal-body #rst").val(rs_status);
  modal.find(".modal-body #rsc").val(rs_cat);
  modal.find(".modal-body #airport").val(airport);
  modal.find(".modal-body #hitype").val(relatedto);
  modal.find(".modal-body #morriskowner").val(riskowner);
  modal.find(".modal-body #lastupdate").val(lastupdate);
  modal.find(".modal-body #bt").val(title);
  modal.find(".modal-body #narrative").val(narrative);
  modal.find(".modal-body #organisation").val(reporter_org);

  modal.find(".modal-body #name").val(reporter_name);
  modal.find(".modal-body #position").val(reporter_position);
  if (newro !== "") {
    modal.find(".modal-body #morrotransfer").prop("disabled", true);
    modal.find(".modal-body #morreasonriskowner").prop("disabled", true);
    modal.find(".modal-body #mortransferbutton").prop("disabled", true);
    if ($("#morreasonriskowner").parent().next(".validation").length == 0) {
      // only add if not added
      $("#morreasonriskowner")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>This MOR is already transferred</div>"
        );
    }
  } else {
    $("#morreasonriskowner").parent().next(".validation").remove();
    modal.find(".modal-body #morrotransfer").prop("disabled", false);
    modal.find(".modal-body #morreasonriskowner").prop("disabled", false);
    modal.find(".modal-body #mortransferbutton").prop("disabled", false);
  }

  var dataString = "id=" + id;
});

$("#MORMODALTRANSFER").on("show.bs.modal", function (event) {
  $("#morupdatetable").empty();

  var button = $(event.relatedTarget); // Button that triggered the modal
  var id = button.data("id");
  var caafid = button.data("caafid");
  var catofoc = button.data("catofoc");
  var actype = button.data("actype");
  var reg = button.data("reg");

  var operator = button.data("operator");
  var date = button.data("date");
  var time = button.data("time");
  var timetype = button.data("timetype");
  var loc_pos_rwy = button.data("loc_pos_rwy");
  var fcr_flightno = button.data("fcr_flightno");
  var fcr_rf = button.data("fcr_rf");
  var fcr_rt = button.data("fcr_rt");
  var fcr_ias = button.data("fcr_ias");
  var fcr_ft = button.data("fcr_ft");
  var fcr_clearance = button.data("fcr_clearance");
  var etops = button.data("etops");
  var nature_flight = button.data("nature_flight");

  var flight_phase = button.data("flight_phase");
  var env_w_kts = button.data("env_w_kts");
  var env_w_oc = button.data("env_w_oc");
  var env_c_type = button.data("env_c_type");
  var env_c_ft = button.data("env_c_ft");
  var env_c_th = button.data("env_c_th");
  var env_p_w = button.data("env_p_w");
  var env_p_l = button.data("env_p_l");
  var omc_v = button.data("omc_v");
  var omc_icing = button.data("omc_icing");
  var omc_turb = button.data("omc_turb");
  var rs_status = button.data("rs_status");
  var rs_cat = button.data("rs_cat");

  var airport = button.data("airport");
  var relatedto = button.data("relatedto");
  var title = button.data("title");
  var narrative = button.data("narrative");
  var reporter_org = button.data("reporter_org");
  var reporter_name = button.data("reporter_name");
  var reporter_position = button.data("reporter_position");
  var receiveddate = button.data("receiveddate");
  var riskowner = button.data("riskowner");
  var receiveddate = button.data("receiveddate");
  var lastupdate = button.data("lastupdate");

  var modal = $(this);
  modal.find(".modal-title").text("More details for MOR : " + id);
  modal.find(".modal-body #moridt").val(id);
  modal.find(".modal-body #caafidt").val(caafid);
  modal.find(".modal-body #rdt").val(receiveddate);
  modal.find(".modal-body #hitypeqt").val(relatedto);
  modal.find(".modal-body #coot").val(catofoc);
  modal.find(".modal-body #actypeseriest").val(actype);
  modal.find(".modal-body #registrationt").val(reg);
  modal.find(".modal-body #operatort").val(operator);
  modal.find(".modal-body #datet").val(date);
  modal.find(".modal-body #timeoct").val(time);
  modal.find(".modal-body #dtnt").val(timetype);
  modal.find(".modal-body #lprt").val(loc_pos_rwy);
  modal.find(".modal-body #fnot").val(fcr_flightno);
  modal.find(".modal-body #routefromt").val(fcr_rf);
  modal.find(".modal-body #routetot").val(fcr_rt);
  modal.find(".modal-body #iast").val(fcr_ias);
  modal.find(".modal-body #faht").val(fcr_ft);
  modal.find(".modal-body #ivt").val(fcr_clearance);
  modal.find(".modal-body #errt").val(etops);
  modal.find(".modal-body #noft").val(nature_flight);

  modal.find(".modal-body #fpt").val(flight_phase);
  modal.find(".modal-body #dst").val(env_w_kts);
  modal.find(".modal-body #oatt").val(env_w_oc);
  modal.find(".modal-body #ctypet").val(env_c_type);
  modal.find(".modal-body #chtt").val(env_c_ft);
  modal.find(".modal-body #ctht").val(env_c_th);
  modal.find(".modal-body #pwt").val(env_p_w);
  modal.find(".modal-body #ptt").val(env_p_l);
  modal.find(".modal-body #vkt").val(omc_v);
  modal.find(".modal-body #icingt").val(omc_icing);
  modal.find(".modal-body #turbulancet").val(omc_turb);
  modal.find(".modal-body #rstt").val(rs_status);
  modal.find(".modal-body #rsct").val(rs_cat);
  modal.find(".modal-body #airportt").val(airport);
  modal.find(".modal-body #hitypet").val(relatedto);
  modal.find(".modal-body #riskownert").val(riskowner);
  modal.find(".modal-body #lastupdatet").val(lastupdate);
  modal.find(".modal-body #btt").val(title);
  modal.find(".modal-body #narrativet").val(narrative);
  modal.find(".modal-body #organisationt").val(reporter_org);

  modal.find(".modal-body #namet").val(reporter_name);
  modal.find(".modal-body #positiont").val(reporter_position);

  var dataString = "id=" + id;

  // AJAX code to submit form.
  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdatetransferredmor.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Status</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";

      $("#morupdatetable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var morid = html[i].morid;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var status = html[i].status;
        var link = html[i].link;

        var tr_str =
          "<tr>" +
          "<td >" +
          morid +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td >" +
          status +
          "</td>" +
          "<td >" +
          link +
          "</td>" +
          "</tr>";

        $("#morupdatetable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Status</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#morupdatetable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#MORMODALTWO").on("show.bs.modal", function (event) {
  $("#updateupdatemor").empty();
  $("#mortable").empty();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  /* var ID = button.data('id')  */

  var modal = $(this);
  modal.find(".modal-title").text("Update Details for ID : " + ID);
  modal.find(".modal-body #IDum").val(ID);

  // Returns successful data submission message when the entered information is stored in database.
  var dataString = "id=" + ID;

  // AJAX code to submit form.
  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdatemor.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";

      $("#updateupdatemor").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var morid = html[i].morid;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var link = html[i].link;

        var tr_str =
          "<tr>" +
          "<td >" +
          morid +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td >" +
          link +
          "</td>" +
          "</tr>";

        $("#updateupdatemor").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#updateupdatemor").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });

  $.ajax({
    type: "POST",
    url: "../dbfiles/processmor.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></thead><tbody>";

      $("#mortable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var morid = html[i].morid;
        var airport = html[i].airport;
        var narrative = html[i].narrative;

        var tr_str =
          "<tr>" +
          "<td style='font-weight:bold'>ID</td>" +
          "<td >" +
          morid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Airport</td>" +
          "<td >" +
          airport +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>MOR Description</td>" +
          "<td >" +
          narrative +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "</tr>";

        $("#mortable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#mortable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#COMPMODAL").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  var yearaudit = button.data("yearaudit");
  var desc = button.data("desc");
  var ml = button.data("ml");
  var tg = button.data("tg");
  var ro = button.data("ro");
  var rt = button.data("rt");
  var airport = button.data("airport");
  var lu = button.data("lu");
  var closedro = button.data("closedro");
  var status = button.data("status");
  var newro = button.data("newro");
  var modal = $(this);
  modal.find(".modal-title").text("More details for compliance ID : " + ID);
  modal.find(".modal-body #compid").val(ID);
  modal.find(".modal-body #yearaudit").val(yearaudit);
  modal.find(".modal-body #description").val(desc);
  modal.find(".modal-body #mitigation").val(ml);
  modal.find(".modal-body #targetdate").val(tg);
  modal.find(".modal-body #compriskowner").val(ro);
  modal.find(".modal-body #hitype").val(rt);
  modal.find(".modal-body #airport").val(airport);

  modal.find(".modal-body #lastupdate").val(lu);
  modal.find(".modal-body #status").val(status);

  if (newro !== "") {
    modal.find(".modal-body #comprotransfer").prop("disabled", true);
    modal.find(".modal-body #compreasonriskowner").prop("disabled", true);
    modal.find(".modal-body #comptransferbutton").prop("disabled", true);
    if ($("#compreasonriskowner").parent().next(".validation").length == 0) {
      // only add if not added
      $("#compreasonriskowner")
        .parent()
        .after(
          "<div class='validation' style='color:red;margin-bottom: 20px;'>This Compliance is already transferred</div>"
        );
    }
  } else {
    $("#compreasonriskowner").parent().next(".validation").remove();
    modal.find(".modal-body #comprotransfer").prop("disabled", false);
    modal.find(".modal-body #compreasonriskowner").prop("disabled", false);
    modal.find(".modal-body #comptransferbutton").prop("disabled", false);
  }
});

$("#COMPMODALTRANSFER").on("show.bs.modal", function (event) {
  $("#compupdatetable").empty();

  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  var yearaudit = button.data("yearaudit");
  var desc = button.data("desc");
  var ml = button.data("ml");
  var tg = button.data("tg");
  var ro = button.data("ro");
  var rt = button.data("rt");
  var airport = button.data("airport");
  var lu = button.data("lu");
  var closedro = button.data("closedro");
  var status = button.data("status");

  var modal = $(this);
  modal.find(".modal-title").text("More details for compliance ID : " + ID);
  modal.find(".modal-body #compidt").val(ID);
  modal.find(".modal-body #yearaudit").val(yearaudit);
  modal.find(".modal-body #description").val(desc);
  modal.find(".modal-body #mitigation").val(ml);
  modal.find(".modal-body #targetdate").val(tg);
  modal.find(".modal-body #riskowner").val(ro);
  modal.find(".modal-body #hitype").val(rt);
  modal.find(".modal-body #airport").val(airport);

  modal.find(".modal-body #lastupdate").val(lu);
  modal.find(".modal-body #status").val(status);
  var dataString = "id=" + ID;
  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdatetransferredcomp.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Status</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";

      $("#compupdatetable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var compid = html[i].compid;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var status = html[i].status;
        var link = html[i].link;

        var tr_str =
          "<tr>" +
          "<td >" +
          compid +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td >" +
          status +
          "</td>" +
          "<td >" +
          link +
          "</td>" +
          "</tr>";

        $("#compupdatetable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Status</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#compupdatetable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#COMPMODALTWO").on("show.bs.modal", function (event) {
  $("#updateupdatecomp").empty();
  $("#comptable").empty();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  /* var ID = button.data('id')  */

  var modal = $(this);
  $(".modal-content").removeAttr("id");
  modal.find(".modal-content").attr("id", "file_name");
  modal.find(".modal-title").text("Update Details for ID : " + ID);
  modal.find(".modal-body #IDCOMP").val(ID);

  var dataString = "id=" + ID;

  $.ajax({
    type: "POST",
    url: "../dbfiles/processcomp.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></thead><tbody>";

      $("#comptable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var compid = html[i].compid;
        var airport = html[i].airport;
        var description = html[i].description;
        var targetdate = html[i].targetdate;

        var tr_str =
          "<tr>" +
          "<td style='font-weight:bold'>ID</td>" +
          "<td >" +
          compid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Airport</td>" +
          "<td >" +
          airport +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Compliance Description</td>" +
          "<td >" +
          description +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Target Date</td>" +
          "<td >" +
          targetdate +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "</tr>";

        $("#comptable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#comptable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });

  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdatecomp.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";

      $("#updateupdatecomp").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var compid = html[i].compid;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var link = html[i].link;

        var text = "";
        if (link) {
          text = "Download";
        } else {
          text = "No File";
        }
        var tr_str =
          "<tr>" +
          "<td >" +
          compid +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td id=file" +
          i +
          " class='links' files='" +
          link +
          "' style='cursor:pointer;'>" +
          text +
          "</td>" +
          "</tr>";

        $("#updateupdatecomp").append(tr_str);

        function downloadFile(url, filename) {
          var anchor = $("<a>")
            .attr("href", url)
            .attr("download", filename)
            .appendTo("body");
          anchor[0].click();
          anchor.remove();
        }

        $(".links").each(function () {
          $(this).on("click", function (event) {
            var files = $(event.target).attr("files").split(",");

            $.each(files, function (index, value) {
              downloadFile("../uploads/" + value, value);
            });
          });
        });
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#updateupdatecomp").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#AUDITMODAL").on("show.bs.modal", function (event) {
  $("#auditmoreonthistable").empty();
  $("#auditmoreonthistablerecommendation").empty();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");

  var modal = $(this);
  modal
    .find(".modal-title")
    .text("More details for Audit Report for ID : " + ID);
  modal.find(".modal-body #auditid").val(ID);
  var ro = button.data("ro");

  var dataString = { id: ID, ro: ro };

  $.ajax({
    type: "POST",
    url: "../dbfiles/processaudit.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;
      console.log(len);
      var tr_strone =
        "<thead><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></thead><tbody>";

      $("#auditmoreonthistable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var aid = html[i].aid;
        var compliance = html[i].compliance;
        var noncompliance = html[i].noncompliance;
        var conformance = html[i].conformance;
        var nonconformance = html[i].nonconformance;
        var safetyconcern = html[i].safetyconcern;
        var audittype = html[i].audittype;
        var date = html[i].date;
        var airport = html[i].airport;
        var risklevel = html[i].risklevel;
        var finding = html[i].finding;
        var classification = html[i].classification;
        var criteria = html[i].criteria;
        var effect = html[i].effect;
        var cause = html[i].cause;
        /* var recommendation = html[i].recommendation; */
        var dreported = html[i].dreported;
        var qaso = html[i].qaso;
        var cert = html[i].cert;

        var tr_str =
          "<tr>" +
          "<td style='font-weight:bold'>ID</td>" +
          "<td >" +
          aid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Compliance</td>" +
          "<td >" +
          compliance +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Non-Compliance</td>" +
          "<td >" +
          noncompliance +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Conformance</td>" +
          "<td >" +
          conformance +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Non-Conformance</td>" +
          "<td >" +
          nonconformance +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Safety Concern</td>" +
          "<td >" +
          safetyconcern +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Audit Type</td>" +
          "<td >" +
          audittype +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Date of Audit</td>" +
          "<td >" +
          date +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Airport</td>" +
          "<td >" +
          airport +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Level</td>" +
          "<td >" +
          risklevel +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Finding Description</td>" +
          "<td >" +
          finding +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Classification</td>" +
          "<td >" +
          classification +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Criteria</td>" +
          "<td >" +
          criteria +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Effect</td>" +
          "<td >" +
          effect +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Cause</td>" +
          "<td >" +
          cause +
          "</td>" +
          "</tr>" +
          "<tr>" +
          /* "<td style='font-weight:bold'>Recommendation</td>"+
                    "<td >" + recommendation + "</td>"+"</tr>"+"<tr>"+ */
          "<td style='font-weight:bold'>Date Reported</td>" +
          "<td >" +
          dreported +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>QASO</td>" +
          "<td >" +
          qaso +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Certificate</td>" +
          "<td >" +
          cert +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "</tr>";

        $("#auditmoreonthistable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#auditmoreonthistable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });

  $.ajax({
    type: "POST",
    url: "../dbfiles/processauditrecommendation.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;
      console.log(len);
      var tr_strone =
        "<thead><tr>" +
        "<th>Item Number</th>" +
        "<th > <nobr>Recommendation</nobr></th>" +
        "<th > <nobr>Status</nobr></th>" +
        "<th > <nobr>Target Date</nobr></th>" +
        "<th > <nobr>Risk Owner</nobr></th>" +
        "<th > <nobr>QASO</nobr></th>" +
        "</tr></thead><tbody>";

      $("#auditmoreonthistablerecommendation").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var idwa = html[i].idwa;
        var recommendation = html[i].recommendation;
        var status = html[i].status;
        var targetdate = html[i].targetdate;
        var riskowner = html[i].riskowner;
        var qaso = html[i].qaso;

        var tr_str =
          "<tr>" +
          "<td >" +
          idwa +
          "</td>" +
          "<td >" +
          recommendation +
          "</td>" +
          "<td >" +
          status +
          "</td>" +
          "<td >" +
          targetdate +
          "</td>" +
          "<td >" +
          riskowner +
          "</td>" +
          "<td >" +
          qaso +
          "</td>" +
          "</tr>";

        $("#auditmoreonthistablerecommendation").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#auditmoreonthistablerecommendation").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});

$("#AUDITMODALUPDATE").on("show.bs.modal", function (event) {
  $("#auditupdatetable").empty();
  $("#auditupdatetablerecommendation").empty();
  $("#updateupdateaudit").empty();
  var button = $(event.relatedTarget); // Button that triggered the modal
  var ID = button.data("id");
  var ro = button.data("ro");

  var modal = $(this);
  $(".modal-content").removeAttr("id");
  modal.find(".modal-content").attr("id", "file_name");
  modal
    .find(".modal-title")
    .text("More details for Audit Report for ID : " + ID);
  modal.find(".modal-body #auditidupdate").val(ID);

  var dataString = { id: ID, ro: ro };

  $.ajax({
    type: "POST",
    url: "../dbfiles/processaudit.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;
      console.log(len);
      var tr_strone =
        "<thead><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></thead><tbody>";

      $("#auditupdatetable").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var aid = html[i].aid;

        var airport = html[i].airport;
        var risklevel = html[i].risklevel;
        var finding = html[i].finding;
        var classification = html[i].classification;
        var criteria = html[i].criteria;
        var effect = html[i].effect;
        var cause = html[i].cause;
        /* var recommendation = html[i].recommendation; */

        var tr_str =
          "<tr>" +
          "<td style='font-weight:bold'>ID</td>" +
          "<td >" +
          aid +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Airport</td>" +
          "<td >" +
          airport +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Risk Level</td>" +
          "<td >" +
          risklevel +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Finding Description</td>" +
          "<td >" +
          finding +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Classification</td>" +
          "<td >" +
          classification +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Criteria</td>" +
          "<td >" +
          criteria +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Effect</td>" +
          "<td >" +
          effect +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "<td style='font-weight:bold'>Cause</td>" +
          "<td >" +
          cause +
          "</td>" +
          "</tr>" +
          "<tr>" +
          "</tr>";

        $("#auditupdatetable").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#auditupdatetable").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });

  $.ajax({
    type: "POST",
    url: "../dbfiles/processauditrecommendationupdate.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      console.log(html);
      /* var title=html[0];  */

      var len = html.length;
      console.log(len);
      var tr_strone =
        "<thead><tr>" +
        "<th>Item Number</th>" +
        "<th > <nobr>Recommendation</nobr></th>" +
        "<th > <nobr>Status</nobr></th>" +
        "<th > <nobr>Target Date</nobr></th>" +
        "<th > <nobr>Risk Owner</nobr></th>" +
        "<th > <nobr>QASO</nobr></th>" +
        "</tr></thead><tbody>";

      $("#auditupdatetablerecommendation").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var idwa = html[i].idwa;
        var recommendation = html[i].recommendation;
        var status = html[i].status;
        var targetdate = html[i].targetdate;
        var riskowner = html[i].riskowner;
        var qaso = html[i].qaso;

        var tr_str =
          "<tr>" +
          "<td >" +
          idwa +
          "</td>" +
          "<td >" +
          recommendation +
          "</td>" +
          "<td >" +
          status +
          "</td>" +
          "<td >" +
          targetdate +
          "</td>" +
          "<td >" +
          riskowner +
          "</td>" +
          "<td >" +
          qaso +
          "</td>" +
          "</tr>";

        $("#auditupdatetablerecommendation").append(tr_str);
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th>Item</th>" +
        "<th > <nobr>Description</nobr></th>" +
        "</tr></tfoot><tbody>";

      $("#auditupdatetablerecommendation").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });

  $.ajax({
    type: "POST",
    url: "../dbfiles/processupdateaudit.php",
    data: dataString,
    cache: false,
    dataType: "json",

    success: function (html) {
      /* var title=html[0];  */

      var len = html.length;

      var tr_strone =
        "<thead><tr>" +
        "<th>ID</th>" +
        "<th>Item Number</th>" +
        "<th > <nobr>Update Date</nobr></th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></thead><tbody>";

      $("#updateupdateaudit").append(tr_strone);
      for (var i = 0; i < len; i++) {
        var aid = html[i].aid;
        var item = html[i].item;
        var updatedate = html[i].updatedate;
        var updatecontent = html[i].updatecontent;
        var person = html[i].person;
        var link = html[i].link;
        var tr_str =
          "<tr>" +
          "<td >" +
          aid +
          "</td>" +
          "<td >" +
          item +
          "</td>" +
          "<td >" +
          updatedate +
          "</td>" +
          "<td >" +
          updatecontent +
          "</td>" +
          "<td >" +
          person +
          "</td>" +
          "<td id=file" +
          i +
          " class='links' files='" +
          link +
          "' style='cursor:pointer;'>Download</td>" +
          "</tr>";

        $("#updateupdateaudit").append(tr_str);

        function downloadFile(url, filename) {
          var anchor = $("<a>")
            .attr("href", url)
            .attr("download", filename)
            .appendTo("body");
          anchor[0].click();
          anchor.remove();
        }

        $(".links").each(function () {
          $(this).on("click", function (event) {
            var files = $(event.target).attr("files").split(",");

            $.each(files, function (index, value) {
              downloadFile("../uploads/" + value, value);
            });
          });
        });
      }
      var tr_strqw =
        "</tbody><tfoot><tr>" +
        "<th >ID</th>" +
        "<th >Item Number</th>" +
        "<th >Update Date</th>" +
        "<th>Update Content</th>" +
        "<th>Person</th>" +
        "<th>Evidence</th>" +
        "</tr></tfoot><tbody>";

      $("#updateupdateaudit").append(tr_strqw);
    },
    error: function (html) {
      console.log(html);
    },
  });
});
