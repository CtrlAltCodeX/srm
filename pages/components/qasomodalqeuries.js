
$('#exampleModal').on('show.bs.modal', function (event) {

    $('#updatetablee').empty();
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id')
    var hid = button.data('hid')
    var dr = button.data('dreported')
    var riskowner = button.data('riskowner')
    var airport = button.data('airport')

    var modal = $(this)
    modal.find('.modal-title').text('More details for Hazard/Incident Report for ID : ' + ID)
    modal.find('.modal-body #ID').val(ID)
    modal.find('.modal-body #hid').val(hid)
    modal.find('.modal-body #dr').val(dr)
    modal.find('.modal-body #riskowner').val(riskowner)
    modal.find('.modal-body #airport').val(airport)

    var dataString = 'id=' + ID;
    $.ajax({
        type: "POST",
        url: "../qasodbfiles/processupdate.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;

            var tr_strone = "<thead><tr>" +
                "<th>ID</th>" +
                "<th > <nobr>Update Date</nobr></th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Status</th>" +
                "<th>Evidence</th>" +
                "</tr></thead><tbody>";

            $("#updatetablee").append(tr_strone);
            for (var i = 0; i < len; i++) {
                var hazid = html[i].hazid;
                var updatedate = html[i].updatedate;
                var updatecontent = html[i].updatecontent;
                var person = html[i].person;
                var status = html[i].status;
                var link = html[i].link;


                var tr_str = "<tr>" +
                    "<td >" + hazid + "</td>" +
                    "<td >" + updatedate + "</td>" +
                    "<td >" + updatecontent + "</td>" +
                    "<td >" + person + "</td>" +
                    "<td >" + status + "</td>" +
                    "<td id=file" + i + " class='links' files='" + link + "' style='cursor:pointer;'>Download</td>" +
                    "</tr>";

                $("#updatetablee").append(tr_str);

                function downloadFile(url, filename) {
                    var anchor = $('<a>')
                        .attr('href', url)
                        .attr('download', filename)
                        .appendTo('body');
                    anchor[0].click();
                    anchor.remove();
                }

                $('.links').each(function () {
                    $(this).on('click', function (event) {
                        var files = $(event.target).attr('files').split(',');

                        $.each(files, function (index, value) {
                            downloadFile('../uploads/' + value, value);
                        });
                    });
                });
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th >ID</th>" +
                "<th >Update Date</th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Status</th>" +
                "<th>Evidence</th>" +
                "</tr></tfoot><tbody>";

            $("#updatetablee").append(tr_strqw);
        },
        error: function (html) {
            console.log(html);

        }
    });


})

$('#exampleModalTransfer').on('show.bs.modal', function (event) {

    $('#updatetablee').empty();
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id')
    var hid = button.data('hid')
    var airport = button.data('airport')

    var modal = $(this)
    modal.find('.modal-title').text('More details for Hazard/Incident Report for ID : ' + ID)
    modal.find('.modal-body #IDT').val(ID)
    modal.find('.modal-body #hidT').val(hid)
    modal.find('.modal-body #airportT').val(airport)



})



$('#myMODALTHREE').on('show.bs.modal', function (event) {
    if (event.relatedTarget === undefined) return;

    $('#updatetable').empty();
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id')
    var hitype = button.data('hitype')
    var hid = button.data('hid')
    var causetype = button.data('causetype')
    var cd = button.data('cd')
    var effecttype = button.data('effecttype')
    var ed = button.data('ed')

    var dvo = button.data('deventoccurance')
    var dr = button.data('dreported')
    var qaso = button.data('qaso')
    var ro = button.data('riskowner')
    var riskcontext = button.data('riskcontext')
    var riskconsequence = button.data('riskconsequence')
    var riskhood = button.data('riskhood')
    var rl = button.data('risklevel')
    var response = button.data('response')
    var recommendeda = button.data('recommendeda')
    var ohsref = button.data('ohsref')
    var tg = button.data('tg')



    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + ID)
    modal.find('.modal-body #IDq').val(ID)
    modal.find('.modal-body #hitypeq').val(hitype)
    modal.find('.modal-body #hidq').val(hid)
    modal.find('.modal-body #pctq').val(causetype)
    modal.find('.modal-body #pcdq').val(cd)
    modal.find('.modal-body #ectq').val(effecttype)
    modal.find('.modal-body #ecdq').val(ed)

    modal.find('.modal-body #dvoq').val(dvo)
    modal.find('.modal-body #drq').val(dr)

    modal.find('.modal-body #roq').val(ro)
    modal.find('.modal-body #qasoq').val(qaso)
    modal.find('.modal-body #riskcontextq').val(riskcontext)
    modal.find('.modal-body #riskconsequenceq').val(riskconsequence)
    modal.find('.modal-body #rhoodq').val(riskhood)
    modal.find('.modal-body #rlq').val(rl)
    modal.find('.modal-body #rewq').val(response)
    modal.find('.modal-body #recommendedaq').val(recommendeda)
    modal.find('.modal-body #ohsrefq').val(ohsref)
    var dateAr = tg.split('-');
    var newDate = dateAr[1] + '/' + dateAr[2] + '/' + dateAr[0];

    modal.find('.modal-body #datepickerfidy').val(newDate)

    var dataString = 'id=' + ID;

    // AJAX code to submit form.
    $.ajax({
        type: "POST",
        url: "../qasodbfiles/processupdate.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;

            var tr_strone = "<thead><tr>" +
                "<th>ID</th>" +
                "<th > <nobr>Update Date</nobr></th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Status</th>" +
                "<th>Evidence</th>" +
                "</tr></thead><tbody>";

            $("#updatetable").append(tr_strone);
            for (var i = 0; i < len; i++) {
                var hazid = html[i].hazid;
                var updatedate = html[i].updatedate;
                var updatecontent = html[i].updatecontent;
                var person = html[i].person;
                var status = html[i].status;
                var link = html[i].link;


                var tr_str = "<tr>" +
                    "<td >" + hazid + "</td>" +
                    "<td >" + updatedate + "</td>" +
                    "<td >" + updatecontent + "</td>" +
                    "<td >" + person + "</td>" +
                    "<td >" + status + "</td>" +
                    "<td >" + link + "</td>" +
                    "</tr>";

                $("#updatetable").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th >ID</th>" +
                "<th >Update Date</th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Status</th>" +
                "<th>Evidence</th>" +
                "</tr></tfoot><tbody>";

            $("#updatetable").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }
    });


})


$('#MORMODALQASO').on('show.bs.modal', function (event) {
    $('#qasomorupdatetable').empty();

    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id')
    var caafid = button.data('caafid')
    var catofoc = button.data('catofoc')
    var actype = button.data('actype')
    var reg = button.data('reg')

    var operator = button.data('operator')
    var date = button.data('date')
    var time = button.data('time')
    var timetype = button.data('timetype')
    var loc_pos_rwy = button.data('loc_pos_rwy')
    var fcr_flightno = button.data('fcr_flightno')
    var fcr_rf = button.data('fcr_rf')
    var fcr_rt = button.data('fcr_rt')
    var fcr_ias = button.data('fcr_ias')
    var fcr_ft = button.data('fcr_ft')
    var fcr_clearance = button.data('fcr_clearance')
    var etops = button.data('etops')
    var nature_flight = button.data('nature_flight')

    var flight_phase = button.data('flight_phase')
    var env_w_kts = button.data('env_w_kts')
    var env_w_oc = button.data('env_w_oc')
    var env_c_type = button.data('env_c_type')
    var env_c_ft = button.data('env_c_ft')
    var env_c_th = button.data('env_c_th')
    var env_p_w = button.data('env_p_w')
    var env_p_l = button.data('env_p_l')
    var omc_v = button.data('omc_v')
    var omc_icing = button.data('omc_icing')
    var omc_turb = button.data('omc_turb')
    var rs_status = button.data('rs_status')
    var rs_cat = button.data('rs_cat')

    var airport = button.data('airport')
    var relatedto = button.data('relatedto')
    var title = button.data('title')
    var narrative = button.data('narrative')
    var reporter_org = button.data('reporter_org')
    var reporter_name = button.data('reporter_name')
    var reporter_position = button.data('reporter_position')
    var receiveddate = button.data('receiveddate')
    var riskowner = button.data('riskowner')
    var receiveddate = button.data('receiveddate')
    var lastupdate = button.data('lastupdate')



    var modal = $(this)
    modal.find('.modal-title').text('More details for MOR : ' + id)
    modal.find('.modal-body #morid').val(id)
    modal.find('.modal-body #caafid').val(caafid)
    modal.find('.modal-body #rd').val(receiveddate)
    modal.find('.modal-body #hitypeq').val(relatedto)
    modal.find('.modal-body #coo').val(catofoc)
    modal.find('.modal-body #actypeseries').val(actype)
    modal.find('.modal-body #registration').val(reg)
    modal.find('.modal-body #operator').val(operator)
    modal.find('.modal-body #date').val(date)
    modal.find('.modal-body #timeoc').val(time)
    modal.find('.modal-body #dtn').val(timetype)
    modal.find('.modal-body #lpr').val(loc_pos_rwy)
    modal.find('.modal-body #fno').val(fcr_flightno)
    modal.find('.modal-body #routefrom').val(fcr_rf)
    modal.find('.modal-body #routeto').val(fcr_rt)
    modal.find('.modal-body #ias').val(fcr_ias)
    modal.find('.modal-body #fah').val(fcr_ft)
    modal.find('.modal-body #iv').val(fcr_clearance)
    modal.find('.modal-body #err').val(etops)
    modal.find('.modal-body #nof').val(nature_flight)

    modal.find('.modal-body #fp').val(flight_phase)
    modal.find('.modal-body #ds').val(env_w_kts)
    modal.find('.modal-body #oat').val(env_w_oc)
    modal.find('.modal-body #ctype').val(env_c_type)
    modal.find('.modal-body #cht').val(env_c_ft)
    modal.find('.modal-body #cth').val(env_c_th)
    modal.find('.modal-body #pw').val(env_p_w)
    modal.find('.modal-body #pt').val(env_p_l)
    modal.find('.modal-body #vk').val(omc_v)
    modal.find('.modal-body #icing').val(omc_icing)
    modal.find('.modal-body #turbulance').val(omc_turb)
    modal.find('.modal-body #rst').val(rs_status)
    modal.find('.modal-body #rsc').val(rs_cat)
    modal.find('.modal-body #airport').val(airport)
    modal.find('.modal-body #hitype').val(relatedto)
    modal.find('.modal-body #riskowner').val(riskowner)
    modal.find('.modal-body #lastupdate').val(lastupdate)
    modal.find('.modal-body #bt').val(title)
    modal.find('.modal-body #narrative').val(narrative)
    modal.find('.modal-body #organisation').val(reporter_org)

    modal.find('.modal-body #name').val(reporter_name)
    modal.find('.modal-body #position').val(reporter_position)
    var dataString = 'id=' + id;

    // AJAX code to submit form.
    $.ajax({
        type: "POST",
        url: "../dbfiles/processupdatemorformodal.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;

            var tr_strone = "<thead><tr>" +
                "<th>ID</th>" +
                "<th > <nobr>Update Date</nobr></th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Status</th>" +
                "<th>Evidence</th>" +
                "</tr></thead><tbody>";

            $("#qasomorupdatetable").append(tr_strone);
            for (var i = 0; i < len; i++) {
                var morid = html[i].morid;
                var updatedate = html[i].updatedate;
                var updatecontent = html[i].updatecontent;
                var person = html[i].person;
                var status = html[i].status;
                var link = html[i].link;


                var tr_str = "<tr>" +
                    "<td >" + morid + "</td>" +
                    "<td >" + updatedate + "</td>" +
                    "<td >" + updatecontent + "</td>" +
                    "<td >" + person + "</td>" +
                    "<td >" + status + "</td>" +
                    "<td >" + link + "</td>" +
                    "</tr>";

                $("#qasomorupdatetable").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th >ID</th>" +
                "<th >Update Date</th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Status</th>" +
                "<th>Evidence</th>" +
                "</tr></tfoot><tbody>";

            $("#qasomorupdatetable").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }
    });





})

$('#QASOAUDITMODAL').on('show.bs.modal', function (event) {


    var button = $(event.relatedTarget) // Button that triggered the modal

    $('#datepicker27').datepicker({
        autoclose: true
    });

    $('#updateupdateaudit').empty();
    var ID = button.data('id')
    var comp = button.data('comp')
    var noncomp = button.data('noncomp')
    var conf = button.data('conf')
    var nonconf = button.data('nonconf')
    var sc = button.data('sc')
    var at = button.data('at')
    var date = button.data('date')
    var airport = button.data('airport')
    var risklevel = button.data('risklevel')
    var auditobj = button.data('auditobj')
    var ts = button.data('ts')
    var sd = button.data('sd')
    var cp = button.data('cp')
    var criteria = button.data('criteria')
    var effect = button.data('effect')
    var cause = button.data('cause')
    var rec = button.data('rec')
    var ro = button.data('ro')
    var auditor = button.data('auditor')
    var auditore = button.data('auditore')
    var auditorp = button.data('auditorp')
    var dr = button.data('dr')
    var tg = button.data('tg')
    var lu = button.data('lu')
    var qaso = button.data('qaso')

    if (comp == 1) {
        $("#comp").prop("checked", true)

    } else if (noncomp == 1) {
        $("#noncomp").prop("checked", true)

    }

    if (conf == 1) {
        $("#conf").prop("checked", true)

    } else if (nonconf == 1) {
        $("#nonconf").prop("checked", true)

    }

    if (sc == 1) {
        $("#sc").prop("checked", true)

    }



    var modal = $(this)
    modal.find('.modal-title').text('More details for compliance ID : ' + ID)
    modal.find('.modal-body #auditid').val(ID)
    modal.find('.modal-body #at').val(at)

    modal.find('.modal-body #dateofocc').val(date)
    modal.find('.modal-body #airport').val(airport)
    modal.find('.modal-body #rl').val(rl)
    modal.find('.modal-body #auditobj').val(auditobj)
    modal.find('.modal-body #teststep').val(ts)
    modal.find('.modal-body #sourcedata').val(sd)

    modal.find('.modal-body #condition').val(cp)
    modal.find('.modal-body #criteria').val(criteria)

    modal.find('.modal-body #effect').val(effect)
    modal.find('.modal-body #cause').val(cause)

    modal.find('.modal-body #recommendation').val(rec)
    modal.find('.modal-body #riskowner').val(ro)
    modal.find('.modal-body #qaso').val(qaso)
    modal.find('.modal-body #username').val(auditor)

    modal.find('.modal-body #useremail').val(auditore)
    modal.find('.modal-body #userphone').val(auditorp)


    var lol = new Date(Date.parse(tg.replace('-', '/', 'g')));
    modal.find('.modal-body #datepicker27').val(lol)



    var dataString = 'id=' + ID;

    // AJAX code to submit form.
    $.ajax({
        type: "POST",
        url: "../dbfiles/processupdateaudit.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;

            var tr_strone = "<thead><tr>" +
                "<th>ID</th>" +
                "<th > <nobr>Update Date</nobr></th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Evidence</th>" +
                "</tr></thead><tbody>";

            $("#updateupdateaudit").append(tr_strone);
            for (var i = 0; i < len; i++) {
                var aid = html[i].aid;
                var updatedate = html[i].updatedate;
                var updatecontent = html[i].updatecontent;
                var person = html[i].person;
                var link = html[i].link;


                var tr_str = "<tr>" +
                    "<td >" + aid + "</td>" +
                    "<td >" + updatedate + "</td>" +
                    "<td >" + updatecontent + "</td>" +
                    "<td >" + person + "</td>" +
                    "<td >" + link + "</td>" +
                    "</tr>";

                $("#updateupdateaudit").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th >ID</th>" +
                "<th >Update Date</th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Evidence</th>" +
                "</tr></tfoot><tbody>";

            $("#updateupdateaudit").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }
    });

    $("#datepicker27").datepicker().on('show.bs.modal', function (event) {
        // prevent datepicker from firing bootstrap modal "show.bs.modal"
        event.stopPropagation();
    });
})

$('#AUDITMODAL').on('show.bs.modal', function (event) {
    $('#auditmoreonthistable').empty();
    $('#auditmoreonthistablerecommendation').empty();
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id')

    var modal = $(this)
    modal.find('.modal-title').text('More details for Audit Report for ID : ' + ID)
    modal.find('.modal-body #auditid').val(ID)
    var ro = button.data('ro')

    var dataString = { id: ID, ro: ro };


    $.ajax({
        type: "POST",
        url: "../dbfiles/processaudit.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;
            // console.log(len);
            var tr_strone = "<thead><tr>" +
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




                var tr_str = "<tr>" +
                    "<td style='font-weight:bold'>ID</td>" +
                    "<td >" + aid + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Compliance</td>" +
                    "<td >" + compliance + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Non-Compliance</td>" +
                    "<td >" + noncompliance + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Conformance</td>" +
                    "<td >" + conformance + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Non-Conformance</td>" +
                    "<td >" + nonconformance + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Safety Concern</td>" +
                    "<td >" + safetyconcern + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Audit Type</td>" +
                    "<td >" + audittype + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Date of Audit</td>" +
                    "<td >" + date + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Airport</td>" +
                    "<td >" + airport + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Risk Level</td>" +
                    "<td >" + risklevel + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Finding Description</td>" +
                    "<td >" + finding + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Classification</td>" +
                    "<td >" + classification + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Criteria</td>" +
                    "<td >" + criteria + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Effect</td>" +
                    "<td >" + effect + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Cause</td>" +
                    "<td >" + cause + "</td>" + "</tr>" + "<tr>" +
                    /* "<td style='font-weight:bold'>Recommendation</td>"+
                    "<td >" + recommendation + "</td>"+"</tr>"+"<tr>"+ */
                    "<td style='font-weight:bold'>Date Reported</td>" +
                    "<td >" + dreported + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>QASO</td>" +
                    "<td >" + qaso + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Certificate</td>" +
                    "<td >" + cert + "</td>" + "</tr>" + "<tr>" +
                    "</tr>";

                $("#auditmoreonthistable").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th>Item</th>" +
                "<th > <nobr>Description</nobr></th>" +

                "</tr></tfoot><tbody>";

            $("#auditmoreonthistable").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }

    });

    $.ajax({
        type: "POST",
        url: "../dbfiles/processauditrecommendation.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;
            // console.log(len);
            var tr_strone = "<thead><tr>" +
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





                var tr_str = "<tr>" +

                    "<td >" + idwa + "</td>" +

                    "<td >" + recommendation + "</td>" +

                    "<td >" + status + "</td>" +

                    "<td >" + targetdate + "</td>" +

                    "<td >" + riskowner + "</td>" +

                    "<td >" + qaso + "</td>" +
                    "</tr>";

                $("#auditmoreonthistablerecommendation").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th>Item</th>" +
                "<th > <nobr>Description</nobr></th>" +

                "</tr></tfoot><tbody>";

            $("#auditmoreonthistablerecommendation").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }

    });

})

$('#AUDITMODALUPDATE').on('show.bs.modal', function (event) {
    $('#auditupdatetable').empty();
    $('#auditupdatetablerecommendation').empty();
    $('#updateupdateaudit').empty();
    $('#audititemno').empty();
    $('#updateupdateauditupdate').empty();
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id')


    var modal = $(this)
    modal.find('.modal-title').text('More details for Audit Report for ID : ' + ID)
    modal.find('.modal-body #auditidupdat   e').val(ID)

    var dataString = { id: ID };
    $.ajax({
        type: "POST",
        url: "../dbfiles/itemno.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;

            for (var i = 0; i < len; i++) {
                var idwa = html[i].idwa;


                var tr_str = "<option>" + idwa + "</option>";

                $("#audititemno").append(tr_str);


            }


        },
        error: function (html) {
            console.log(html);

        }
    });


    $.ajax({
        type: "POST",
        url: "../dbfiles/processaudit.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;
            // console.log(len);
            var tr_strone = "<thead><tr>" +
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





                var tr_str = "<tr>" +
                    "<td style='font-weight:bold'>ID</td>" +
                    "<td >" + aid + "</td>" + "</tr>" + "<tr>" +

                    "<td style='font-weight:bold'>Airport</td>" +
                    "<td >" + airport + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Risk Level</td>" +
                    "<td >" + risklevel + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Finding Description</td>" +
                    "<td >" + finding + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Classification</td>" +
                    "<td >" + classification + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Criteria</td>" +
                    "<td >" + criteria + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Effect</td>" +
                    "<td >" + effect + "</td>" + "</tr>" + "<tr>" +
                    "<td style='font-weight:bold'>Cause</td>" +
                    "<td >" + cause + "</td>" + "</tr>" + "<tr>" +
                    "</tr>";

                $("#auditupdatetable").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th>Item</th>" +
                "<th > <nobr>Description</nobr></th>" +

                "</tr></tfoot><tbody>";

            $("#auditupdatetable").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }

    });

    $.ajax({
        type: "POST",
        url: "../dbfiles/processauditrecommendationupdateqaso.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {

            // console.log(html);
            /* var title=html[0];  */

            var len = html.length;
            // console.log(len);
            var tr_strone = "<thead><tr>" +
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





                var tr_str = "<tr>" +

                    "<td >" + idwa + "</td>" +

                    "<td >" + recommendation + "</td>" +

                    "<td >" + status + "</td>" +

                    "<td >" + targetdate + "</td>" +

                    "<td >" + riskowner + "</td>" +

                    "<td >" + qaso + "</td>" +
                    "</tr>";

                $("#auditupdatetablerecommendation").append(tr_str);
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th>Item</th>" +
                "<th > <nobr>Description</nobr></th>" +

                "</tr></tfoot><tbody>";

            $("#auditupdatetablerecommendation").append(tr_strqw);







        },
        error: function (html) {
            console.log(html);

        }

    });

    $.ajax({
        type: "POST",
        url: "../dbfiles/processupdateauditqaso.php",
        data: dataString,
        cache: false,
        dataType: 'json',

        success: function (html) {
            var len = html.length;

            var tr_strone = "<thead><tr>" +
                "<th>ID</th>" +
                "<th>Item Number</th>" +
                "<th > <nobr>Update Date</nobr></th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Evidence</th>" +
                "</tr></thead><tbody>";

            $("#updateupdateauditupdate").append(tr_strone);
            for (var i = 0; i < len; i++) {
                var aid = html[i].aid;
                var item = html[i].item;
                var updatedate = html[i].updatedate;
                var updatecontent = html[i].updatecontent;
                var person = html[i].person;
                var link = html[i].link;

                $("#auditidupdate").val(aid);

                var tr_str = "<tr>" +
                    "<td >" + aid + "</td>" +
                    "<td >" + item + "</td>" +
                    "<td >" + updatedate + "</td>" +
                    "<td >" + updatecontent + "</td>" +
                    "<td >" + person + "</td>" +
                    "<td id=file" + i + " class='links' files='" + link + "' style='cursor:pointer;'>Download</td>" +
                    "</tr>";

                $("#updateupdateauditupdate").append(tr_str);

                function downloadFile(url, filename) {
                    var anchor = $('<a>')
                        .attr('href', url)
                        .attr('download', filename)
                        .appendTo('body');
                    anchor[0].click();
                    anchor.remove();
                }

                $('.links').each(function () {
                    $(this).on('click', function (event) {
                        var files = $(event.target).attr('files').split(',');
                        files.pop();
                        console.log(files);

                        $.each(files, function (index, value) {
                            downloadFile('../uploads/' + value, value);
                        });
                    });
                });
            }
            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th >ID</th>" +
                "<th >Item Number</th>" +
                "<th >Update Date</th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Evidence</th>" +
                "</tr></tfoot><tbody>";

            $("#updateupdateauditupdate").append(tr_strqw);
        },
        error: function (html) {
            console.log(html);

        }
    });

})

$('#UPDATEAUDIT').on('show.bs.modal', function(event) {
    if (event.relatedTarget === undefined) return;
    $('#updateupdatecomp').empty();
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ID = button.data('id')
    var date = button.data('date')
    var type = button.data('type')
    var airport = button.data('airport')
    var level = button.data('level')
    var effect = button.data('effect')
    var cause = button.data('cause')
    var criteria = button.data('criteria')
    var status = button.data('status')

    var modal = $(this)
    modal.find('.modal-title').text('More details for Audit ID : ' + ID)
    modal.find('.modal-body #audit_id').val(ID)
    modal.find('.modal-body #date').val(date)
    modal.find('.modal-body #type').val(type)
    modal.find('.modal-body #airport').val(airport)
    modal.find('.modal-body #level').val(level)
    modal.find('.modal-body #effect').val(effect)
    modal.find('.modal-body #cause').val(cause)
    modal.find('.modal-body #criteria').html(criteria)

    modal.find('.modal-body #statuswa').val(status)

    var dataString = { id: ID };
    $.ajax({
        type: "POST",
        url: "../dbfiles/processupdateauditqaso.php",
        data: dataString,
        cache: false,
        dataType: 'json',
        success: function (html) {
            var len = html.length;

            var tr_strone = "<thead><tr>" +
                "<th>ID</th>" +
                "<th>Item Number</th>" +
                "<th > <nobr>Update Date</nobr></th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Evidence</th>" +
                "</tr></thead><tbody>";

            $("#audithistory").append(tr_strone);
            
            for (var i = 0; i < len; i++) {
                var aid = html[i].aid;
                var item = html[i].item;
                var updatedate = html[i].updatedate;
                var updatecontent = html[i].updatecontent;
                var person = html[i].person;
                var link = html[i].link;

                $("#updateaudit").val(aid);

                var tr_str = "<tr>" +
                    "<td >" + aid + "</td>" +
                    "<td >" + item + "</td>" +
                    "<td >" + updatedate + "</td>" +
                    "<td >" + updatecontent + "</td>" +
                    "<td >" + person + "</td>" +
                    "<td id=file" + i + " class='links' files='" + link + "' style='cursor:pointer;'>Download</td>" +
                    "</tr>";

                $("#audithistory").append(tr_str);

                function downloadFile(url, filename) {
                    var anchor = $('<a>')
                        .attr('href', url)
                        .attr('download', filename)
                        .appendTo('body');
                    anchor[0].click();
                    anchor.remove();
                }

                $('.links').each(function () {
                    $(this).on('click', function (event) {
                        var files = $(event.target).attr('files').split(',');
                        files.pop();
                        console.log(files);

                        $.each(files, function (index, value) {
                            downloadFile('../uploads/' + value, value);
                        });
                    });
                });
            }

            var tr_strqw = "</tbody><tfoot><tr>" +
                "<th >ID</th>" +
                "<th >Item Number</th>" +
                "<th >Update Date</th>" +
                "<th>Update Content</th>" +
                "<th>Person</th>" +
                "<th>Evidence</th>" +
                "</tr></tfoot><tbody>";

            // $("#audithistory").append(tr_strqw);
        },
        error: function (html) {
            console.log(html);

        }
    });
})






