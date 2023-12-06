<?php

include '../../dbconfig.php';
$query = "SELECT *, DATEDIFF(CURDATE(),SDCSUBMITDATE ) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM hazardreport  WHERE SDCCHECK='1' AND QASOCHECK='1' AND SDCCHECKTWO='1' AND CLOSEDRO='OPEN'";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);

$riskowners = array();
while ($row = mysqli_fetch_array($result)) {
	$diffdateone = 7 - $row['DiffDate'];
	$diffdatetwo = 14 - $row['DiffDate'];
	if ($row['RESPONSE'] === "1 Week") {
		if ($diffdateone < 0) {
			$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];
			if ($LastUpdateDiffDate < 0) {
				$riskowners[] = $row['RISKOWNER'];
			} else {
			}
		} else {
		}
	} else if ($row['RESPONSE'] === "2 Weeks") {
		if ($diffdatetwo < 0) {
			$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];

			if ($LastUpdateDiffDate < 0) {
				$riskowners[] = $row['RISKOWNER'];
			} else {
			}
		} else {
		}
	}
}
mysqli_close($db);

$riskowners2 = array_unique($riskowners);
echo json_encode($riskowners2);



include '../../dbconfig.php';
$query = "SELECT *, DATEDIFF(TARGETDATE ,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM compliance  WHERE CLOSEDRO='OPEN'";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);

$compriskowners = array();
while ($row = mysqli_fetch_array($result)) {


	if ($row['DiffDate'] < 0) {
		$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];
		if ($LastUpdateDiffDate < 0) {
			$compriskowners[] = $row['RISKOWNER'];
		} else {
		}
	} else {
	}
}
mysqli_close($db);
$compriskowners2 = array_unique($compriskowners);
echo json_encode($compriskowners);

include '../../dbconfig.php';
$query = "SELECT *, DATEDIFF(TARGETDATE ,CURDATE()) as DiffDate, DATEDIFF(CURDATE(),LASTUPDATE) as LastUpdateDiff
						FROM audit  WHERE CLOSEDRO='OPEN'";
mysqli_query($db, $query) or die('Error querying database.');
$result = mysqli_query($db, $query);

$auditriskowners = array();
while ($row = mysqli_fetch_array($result)) {


	if ($row['DiffDate'] < 0) {
		$LastUpdateDiffDate = 7 - $row['LastUpdateDiff'];
		if ($LastUpdateDiffDate < 0) {
			$auditriskowners[] = $row['RISKOWNER'];
		} else {
		}
	} else {
	}
}
mysqli_close($db);
$auditriskowners2 = array_unique($auditriskowners);



$emaillist = array();
foreach ($riskowners2 as $riskowners2) {
	switch ($riskowners2) {
		case "MAO":
			$emaillist[] = "isaiar@fijiairports.com.fj";
			break;
		case "MNOS":
			$emaillist[] = "vulas@fijiairports.com.fj";
			break;
		case "MBCW":
			$emaillist[] = "manils@fijiairports.com.fj";
			break;
		case "HOP":
			$emaillist[] = "ivanw@fijiairports.com.fj";
			$roemailtwo = "amits@afl.com.fj";
			break;
		case "EXECUTIVE":
			$emaillist[] = "faizk@afl.com.fj";
			$emaillist[] = "iseit@afl.com.fj";
			break;
		case "MALOCS":
			$emaillist[] = "pritir@fijiairports.com.fj";
			break;
		case "MANES":
			$emaillist[] = "williamr@fijiairports.com.fj";
			break;
		case "MARFFS":
			$emaillist[] = "losefoq@fijiairports.com.fj";
			break;
		case "MASS":
			$emaillist[] = "mosesel@fijiairports.com.fj";
			break;
		case "MC":
			$emaillist[] = "shalend@afl.com.fj";
			break;
		case "MEMS":
			$emaillist[] = "waqat@fijiairports.com.fj";
			break;
		case "MFS":
			$emaillist[] = "patrickm@fijiairports.com.fj";
			break;
		case "MPODC":
			$emaillist[] = "rennya@afl.com.fj";
			break;
		case "MSRM":
			$emaillist[] = "suniak@fijiairports.com.fj";
			break;
		case "OMOIA":
			$emaillist[] = "vulas@afl.com.fj";
			break;
		case "OPS COORDINATOR":
			$emaillist[] = "shuyaibh@afl.com.fj";
			break;
		case "PAAE":
			$emaillist[] = "ashleyk@afl.com.fj";
			break;
		case "SENIOR FINANCIAL ACCOUNTANT":
			$emaillist[] = "rohitp@fijiairports.com.fj";
	}
}

foreach ($auditriskowners2 as $auditriskowners2) {
	switch ($auditriskowners2) {
		case "MAO":
			$emaillist[] = "isaiar@fijiairports.com.fj";
			break;
		case "MNOS":
			$emaillist[] = "vulas@fijiairports.com.fj";
			break;
		case "MBCW":
			$emaillist[] = "manils@fijiairports.com.fj";
			break;
		case "HOP":
			$emaillist[] = "ivanw@fijiairports.com.fj";
			$emaillist[] = "amits@afl.com.fj";
			break;
		case "EXECUTIVE":
			$emaillist[] = "faizk@afl.com.fj";
			$roemailtwo = "iseit@afl.com.fj";
			break;
		case "MALOCS":
			$emaillist[] = "pritir@fijiairports.com.fj";
			break;
		case "MANES":
			$emaillist[] = "williamr@fijiairports.com.fj";
			break;
		case "MARFFS":
			$emaillist[] = "losefoq@fijiairports.com.fj";
			break;
		case "MASS":
			$emaillist[] = "mosesel@fijiairports.com.fj";
			break;
		case "MC":
			$emaillist[] = "shalend@afl.com.fj";
			break;
		case "MEMS":
			$emaillist[] = "waqat@fijiairports.com.fj";
			break;
		case "MFS":
			$emaillist[] = "patrickm@fijiairports.com.fj";
			break;
		case "MPODC":
			$emaillist[] = "rennya@afl.com.fj";
			break;
		case "MSRM":
			$emaillist[] = "suniak@fijiairports.com.fj";
			break;
		case "OMOIA":
			$emaillist[] = "vulas@afl.com.fj";
			break;
		case "OPS COORDINATOR":
			$emaillist[] = "shuyaibh@afl.com.fj";
			break;
		case "PAAE":
			$emaillist[] = "ashleyk@afl.com.fj";
			break;
		case "SENIOR FINANCIAL ACCOUNTANT":
			$emaillist[] = "rohitp@fijiairports.com.fj";
	}
}

foreach ($compriskowners2 as $compriskowners2) {
	switch ($compriskowners2) {
		case "MAO":
			$emaillist[] = "isaiar@fijiairports.com.fj";
			break;
		case "MNOS":
			$emaillist[] = "vulas@fijiairports.com.fj";
			break;
		case "MBCW":
			$emaillist[] = "manils@fijiairports.com.fj";
			break;
		case "HOP":
			$emaillist[] = "ivanw@fijiairports.com.fj";
			$emaillist[] = "amits@afl.com.fj";
			break;
		case "EXECUTIVE":
			$emaillist[] = "faizk@afl.com.fj";
			$roemailtwo = "iseit@afl.com.fj";
			break;
		case "MALOCS":
			$emaillist[] = "pritir@fijiairports.com.fj";
			break;
		case "MANES":
			$emaillist[] = "williamr@fijiairports.com.fj";
			break;
		case "MARFFS":
			$emaillist[] = "losefoq@fijiairports.com.fj";
			break;
		case "MASS":
			$emaillist[] = "mosesel@fijiairports.com.fj";
			break;
		case "MC":
			$emaillist[] = "shalend@afl.com.fj";
			break;
		case "MEMS":
			$emaillist[] = "waqat@fijiairports.com.fj";
			break;
		case "MFS":
			$emaillist[] = "patrickm@fijiairports.com.fj";
			break;
		case "MPODC":
			$emaillist[] = "rennya@afl.com.fj";
			break;
		case "MSRM":
			$emaillist[] = "suniak@fijiairports.com.fj";
			break;
		case "OMOIA":
			$emaillist[] = "vulas@afl.com.fj";
			break;
		case "OPS COORDINATOR":
			$emaillist[] = "shuyaibh@afl.com.fj";
			break;
		case "PAAE":
			$emaillist[] = "ashleyk@afl.com.fj";
			break;
		case "SENIOR FINANCIAL ACCOUNTANT":
			$emaillist[] = "rohitp@fijiairports.com.fj";
	}
}
$emaillist = array_unique($emaillist);


$hazardro = implode(",", $riskowners);
$hazardro2 = explode(",", $hazardro);
$hazadrro3 = array_unique($hazardro2);
$hazardro4 = implode(",", $hazadrro3);

$compro = implode(",", $compriskowners);
$compro2 = explode(",", $compro);
$compro3 = array_unique($compro2);
$compro4 = implode(",", $compro3);

$auditro = implode(",", $auditriskowners);
$auditro2 = explode(",", $auditro);
$auditro3 = array_unique($auditro2);
$auditro4 = implode(",", $auditro3);


require('../SDC/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$subject = "SAFETY ALERT";


$content = "<b>Bula all</br><br>You have received this email because you have safety items that are overdue without an update. The EC has emphasised on getting an alert system and thus the reason for this email. Below are details...</b>
					<br>Hazard Listings</br><br>" . $hazardro4 . "</br><br>Compliance Listings</br><br>" . $compro4 . "</br><br>Audit Listings</br><br>" . $auditro4 . "</br><br>Do ensure that all items are updated to justify the overdue items</br>
					<br>Login at http://10.99.100.29/srm/index.html</br>";

include '../../dbconfig.php';
$looper = 0;
settype($looper, "integer");
$colors = array("MNOS", "MBCW", "HOP", "MALOCS", "MANES", "MAO", "MARFFS", "MASS", "MC", "MEMS", "MFS", "MPODC", "MICT", "MSRM", "OMOIA", "PAAE", "SFA");



foreach ($colors as $value) {


	$queryalert = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert) or die(mysqli_error($db));
	$resultalert = mysqli_query($db, $queryalert);
	$rowalert = mysqli_fetch_row($resultalert);
	$numalert = $rowalert[0];

	$query2a = "SELECT count(*)FROM mor  WHERE RISKOWNER='$value' AND STATUS='OPEN' AND CLOSEDRO='OPEN' ";
	mysqli_query($db, $query2a) or die(mysqli_error($db));
	$result2a = mysqli_query($db, $query2a);
	$row2a = mysqli_fetch_row($result2a);
	$num2a = $row2a[0];

	$queryalerttwo = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND STATUS='OPEN' AND CLOSEDRO='OPEN' ";
	mysqli_query($db, $queryalerttwo) or die(mysqli_error($db));
	$resultalerttwo = mysqli_query($db, $queryalerttwo);
	$rowalerttwo = mysqli_fetch_row($resultalerttwo);
	$numalerttwo = $rowalerttwo[0];

	$queryalerttwo1 = "SELECT count(*)FROM recommendations  WHERE RISKOWNER='$value' AND STATUS='OPEN'";
	mysqli_query($db, $queryalerttwo1) or die(mysqli_error($db));
	$resultalerttwo1 = mysqli_query($db, $queryalerttwo1);
	$rowalerttwo1 = mysqli_fetch_row($resultalerttwo1);
	$numalerttwo1 = $rowalerttwo1[0];

	$queryalert2 = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND MITIGATIONLEVEL='1'  AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2) or die(mysqli_error($db));
	$resultalert2 = mysqli_query($db, $queryalert2);
	$rowalert2 = mysqli_fetch_row($resultalert2);
	$numalert2 = $rowalert2[0];

	$queryalert23 = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND RISKLEVEL='High Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert23) or die(mysqli_error($db));
	$resultalert23 = mysqli_query($db, $queryalert23);
	$rowalert23 = mysqli_fetch_row($resultalert23);
	$numalert23 = $rowalert23[0];

	$queryalert234 = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$pageuser' AND audit.RISK_LEVEL='High Risk' AND recommendations.STATUS='OPEN' AND audit.AID=recommendations.ID";
	mysqli_query($db, $queryalert234) or die(mysqli_error($db));
	$resultalert234 = mysqli_query($db, $queryalert234);
	$rowalert234 = mysqli_fetch_row($resultalert234);
	$numalert234 = $rowalert234[0];

	$high = $numalert2 + $numalert23 + $numalert234;

	$queryalert2m = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND MITIGATIONLEVEL='2' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2m) or die(mysqli_error($db));
	$resultalert2m = mysqli_query($db, $queryalert2m);
	$rowalert2m = mysqli_fetch_row($resultalert2m);
	$numalert2m = $rowalert2m[0];

	$queryalert23m = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND RISKLEVEL='Medium Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert23m) or die(mysqli_error($db));
	$resultalert23m = mysqli_query($db, $queryalert23m);
	$rowalert23m = mysqli_fetch_row($resultalert23m);
	$numalert23m = $rowalert23m[0];

	$queryalert234m = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND audit.RISK_LEVEL='Medium Risk' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
	mysqli_query($db, $queryalert234m) or die(mysqli_error($db));
	$resultalert234m = mysqli_query($db, $queryalert234m);
	$rowalert234m = mysqli_fetch_row($resultalert234m);
	$numalert234m = $rowalert234m[0];

	$medium = $numalert2m + $numalert23m + $numalert234m;

	$queryalert2ml = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$value' AND MITIGATIONLEVEL='3' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2ml) or die(mysqli_error($db));
	$resultalert2ml = mysqli_query($db, $queryalert2ml);
	$rowalert2ml = mysqli_fetch_row($resultalert2ml);
	$numalert2ml = $rowalert2ml[0];

	$queryalert23ml = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$value' AND RISKLEVEL='Low Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert23ml) or die(mysqli_error($db));
	$resultalert23ml = mysqli_query($db, $queryalert23ml);
	$rowalert23ml = mysqli_fetch_row($resultalert23ml);
	$numalert23ml = $rowalert23ml[0];

	$queryalert234ml = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND audit.RISK_LEVEL='Low Risk' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
	mysqli_query($db, $queryalert234ml) or die(mysqli_error($db));
	$resultalert234ml = mysqli_query($db, $queryalert234ml);
	$rowalert234ml = mysqli_fetch_row($resultalert234ml);
	$numalert234ml = $rowalert234ml[0];

	$low = $numalert2ml + $numalert23ml + $numalert234ml;

	$queryalert2mlptd = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND TARGETDATE < CURDATE() AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptd) or die(mysqli_error($db));
	$resultalert2mlptd = mysqli_query($db, $queryalert2mlptd);
	$rowalert2mlptd = mysqli_fetch_row($resultalert2mlptd);
	$numalert2mlptd = $rowalert2mlptd[0];


	settype($overdue, "integer");


	$queryalert2mlptdh = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND TARGETDATE < CURDATE() AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdh) or die(mysqli_error($db));
	$resultalert2mlptdh = mysqli_query($db, $queryalert2mlptdh);
	$rowalert2mlptdh = mysqli_fetch_row($resultalert2mlptdh);
	$numalert2mlptdh = $rowalert2mlptdh[0];
	while ($rowalert2mlptdh = mysqli_fetch_array($resultalert2mlptdh)) {

		$diffdateone = 7 - $row['DiffDate'];
		$diffdatetwo = 14 - $row['DiffDate'];
		if ($row['RESPONSE'] === "1 Week") {
			if ($diffdateone > 0) {
				$overdue = abs($diffdateone);
				return $overdue;
			}
		} else if ($row['RESPONSE'] === "2 Weeks") {
			if ($diffdatetwo > 0) {
				$overdue = abs($diffdatetwo);
				return $overdue;
			}
		}
	}

	echo "hello" . $overdue . "lol";

	$queryalert2mlptdq = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$value' AND TARGETDATE < CURDATE() AND STATUS='OPEN'";
	mysqli_query($db, $queryalert2mlptdq) or die(mysqli_error($db));
	$resultalert2mlptdq = mysqli_query($db, $queryalert2mlptdq);
	$rowalert2mlptdq = mysqli_fetch_row($resultalert2mlptdq);
	$numalert2mlptdq = $rowalert2mlptdq[0];

	$totaloverdue = $numalert2mlptd + $numalert2mlptdh + $numalert2mlptdq;

	$queryalert2mlptdt = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdt) or die(mysqli_error($db));
	$resultalert2mlptdt = mysqli_query($db, $queryalert2mlptdt);
	$rowalert2mlptdt = mysqli_fetch_row($resultalert2mlptdt);
	$numalert2mlptdt = $rowalert2mlptdt[0];

	$queryalert2mlptdht = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdht) or die(mysqli_error($db));
	$resultalert2mlptdht = mysqli_query($db, $queryalert2mlptdht);
	$rowalert2mlptdht = mysqli_fetch_row($resultalert2mlptdht);
	$numalert2mlptdht = $rowalert2mlptdht[0];


	$queryalert2mlptdtz = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN'";
	mysqli_query($db, $queryalert2mlptdtz) or die(mysqli_error($db));
	$resultalert2mlptdtz = mysqli_query($db, $queryalert2mlptdtz);
	$rowalert2mlptdtz = mysqli_fetch_row($resultalert2mlptdtz);
	$numalert2mlptdtz = $rowalert2mlptdtz[0];

	$totalthirty = $numalert2mlptdt + $numalert2mlptdht + $numalert2mlptdtz;

	$queryalert2mlptdtg = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) > '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdtg) or die(mysqli_error($db));
	$resultalert2mlptdtg = mysqli_query($db, $queryalert2mlptdtg);
	$rowalert2mlptdtg = mysqli_fetch_row($resultalert2mlptdtg);
	$numalert2mlptdtg = $rowalert2mlptdtg[0];

	$queryalert2mlptdtgnhr = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND (DATEDIFF(TARGETDATE,CURDATE())) > '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdtgnhr) or die(mysqli_error($db));
	$resultalert2mlptdtgnhr = mysqli_query($db, $queryalert2mlptdtgnhr);
	$rowalert2mlptdtgnhr = mysqli_fetch_row($resultalert2mlptdtgnhr);
	$numalert2mlptdtgnhr = $rowalert2mlptdtgnhr[0];

	$queryalert2mlptdtzq = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),TARGETDATE)) > '30' AND STATUS='OPEN'";
	mysqli_query($db, $queryalert2mlptdtzq) or die(mysqli_error($db));
	$resultalert2mlptdtzq = mysqli_query($db, $queryalert2mlptdtzq);
	$rowalert2mlptdtzq = mysqli_fetch_row($resultalert2mlptdtzq);
	$numalert2mlptdtzq = $rowalert2mlptdtzq[0];

	$totalthirtyc = $numalert2mlptdtgnhr + $numalert2mlptdtg + $numalert2mlptdtzq;

	$queryalert2mlptdqhu = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdqhu) or die(mysqli_error($db));
	$resultalert2mlptdqhu = mysqli_query($db, $queryalert2mlptdqhu);
	$rowalert2mlptdqhu = mysqli_fetch_row($resultalert2mlptdqhu);
	$numalert2mlptdqhu = $rowalert2mlptdqhu[0];

	$queryalert2mlptdqhum = "SELECT count(*) FROM mor  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdqhum) or die(mysqli_error($db));
	$resultalert2mlptdqhum = mysqli_query($db, $queryalert2mlptdqhum);
	$rowalert2mlptdqhum = mysqli_fetch_row($resultalert2mlptdqhum);
	$numalert2mlptdqhum = $rowalert2mlptdqhum[0];

	$queryalert2mlptdqhuma = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$value' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
	mysqli_query($db, $queryalert2mlptdqhuma) or die(mysqli_error($db));
	$resultalert2mlptdqhuma = mysqli_query($db, $queryalert2mlptdqhuma);
	$rowalert2mlptdqhuma = mysqli_fetch_row($resultalert2mlptdqhuma);
	$numalert2mlptdqhuma = $rowalert2mlptdqhuma[0];

	$queryalert2mlptdqhumac = "SELECT count(DISTINCT(recommendations.ID)) FROM audit,recommendations  WHERE recommendations.RISKOWNER='$value' AND (DATEDIFF(CURDATE(),audit.LASTUPDATE)) > '7' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
	mysqli_query($db, $queryalert2mlptdqhumac) or die(mysqli_error($db));
	$resultalert2mlptdqhumac = mysqli_query($db, $queryalert2mlptdqhumac);
	$rowalert2mlptdqhumac = mysqli_fetch_row($resultalert2mlptdqhumac);
	$numalert2mlptdqhumac = $rowalert2mlptdqhumac[0];

	$lastupdatetotal = $numalert2mlptdqhu + $numalert2mlptdqhum + $numalert2mlptdqhuma + $numalert2mlptdqhumac;



	$tablerow .=  " <tr><td>" . $value . "</td>
                  <td align='center'>" . $numalert . "</td>
				  <td align='center'>" . $num2a . "</td>
				  <td align='center'>" . $numalerttwo . "</td>
				  <td align='center'>" . $numalerttwo1 . "</td>
				  <td align='center' bgcolor='#e74c3c'>" . $high . "</td>
				  <td align='center' bgcolor='#f1c40f'>" . $medium . "</td>
				  <td align='center' bgcolor='#2ecc71'>" . $low . "</td>
				   <td align='center' bgcolor='#e74c3c'>" . $totaloverdue . "</td>
				   <td align='center' bgcolor='#f1c40f'>" . $totalthirty . "</td>
				    <td align='center' bgcolor='#2ecc71'>" . $totalthirtyc . "</td> 
					<td align='center' bgcolor='#ecf0f1'>" . $lastupdatetotal . "</td></tr>";
}

$content =  "Bula all,<br>Tabulated below are the summary of pending safety reports that requires your action:</br>
					<br>1. Non - compliance issues - based on CAAF certification renewal audit;</br><br>2. MOR - incidents/accidents which stems out from your process or affect the services offered;</br>
					<br>3. Hazard Report - safety reports raised within which poses a risk to our operation/personal safety/environment;</br><br>4. Internal Audit/Inspection - safety findings raised by our own Quality Assurance Officers.</br>
					<br>Your commitment in the timely rectification of reports related to your department is vital as it has implications on the status of our certification and the overall health of our safety system. The Board will also be informed from time to time and may not reflect favorably on your departments performance.</br><br></br> 
<table border='1' width='100%'  align='center'  class='table table-bordered table-striped'>
                <tr>
                  <th bgcolor='#ecf0f1'></th>
                  <th colspan='4' bgcolor='#ecf0f1'># Issues Open</th>
                  <th colspan='3' bgcolor='#ecf0f1'>Risk Level</th>
                  <th colspan='3' bgcolor='#ecf0f1'># of item(s)</th>
				  <th bgcolor='#ecf0f1'></th>
                </tr>
				 <tr>
                  <th bgcolor='#ecf0f1'>Responsible person</th>
                  <th bgcolor='#ecf0f1'>Non- compliance</th>
                  <th bgcolor='#ecf0f1'>MOR</th>
                  <th bgcolor='#ecf0f1'>Hazard report</th>
				  <th bgcolor='#ecf0f1'>Internal Audit/Inspection</th>				  
				  <th bgcolor='#e74c3c'>High</th>
                  <th bgcolor='#f1c40f'>Medium</th>
                  <th bgcolor='#2ecc71'>Low</th>
                  <th bgcolor='#e74c3c'>Past Target Date</th>
				  <th bgcolor='#f1c40f'>Due date within 30 days</th>
				   <th bgcolor='#2ecc71'>Due date after 30 days</th>
				   <th bgcolor='#ecf0f1'>Items without updates</th>				  
                </tr>" . $tablerow . "	
        
               
              </table>";



$mail->IsSMTP();
$mail->SMTPDebug = 3;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->SMTPOptions = array(
	'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
);
$mail->Port     = 587;
$mail->Username = "safety";
$mail->Password = "safety18";
$mail->Host     = "fijiairports.com.fj";
$mail->Mailer   = "smtp";
$mail->SetFrom("safety@fijiairports.com.fj", "Mr Safety");
$mail->AddReplyTo("safety@fijiairports.com.fj", "PHPPot");
foreach ($emaillist as $emaillist) {
	$mail->AddAddress($emaillist);
}

$mail->AddAddress("vincentk@afl.com.fj");
$mail->AddAddress("shameerk@afl.com.fj");
$mail->AddAddress("ivanw@afl.com.fj");
$mail->AddAddress("amits@afl.com.fj");
$mail->AddAddress("joeg@afl.com.fj");
$mail->AddAddress("kelepid@afl.com.fj");
$mail->AddAddress("apenisan@afl.com.fj");
$mail->AddAddress("semib@afl.com.fj");
$mail->AddAddress("josaial@afl.com.fj");
$mail->AddAddress("shalend@afl.com.fj");
$mail->AddAddress("wtaukei@afl.com.fj");
$mail->AddAddress("dhanjayk@afl.com.fj");
$mail->AddAddress("rennya@afl.com.fj");
$mail->AddAddress("ashveenn@afl.com.fj");
$mail->AddAddress("suniak@afl.com.fj");
$mail->AddAddress("vulas@afl.com.fj");
$mail->AddAddress("ashleyk@afl.com.fj");
$mail->AddAddress("sanjanam@afl.com.fj");
$mail->AddCC("faizk@afl.com.fj");
$mail->AddCC("iseit@afl.com.fj");
$mail->AddCC("suniak@afl.com.fj");
$mail->AddCC("SafetyandRisk@afl.com.fj");
$mail->AddAddress("shuyaibh@afl.com.fj");
$mail->AddAddress("safety@afl.com.fj");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if (!$mail->Send())
	echo "Problem on sending mail";
else
	echo "Mail sent";
