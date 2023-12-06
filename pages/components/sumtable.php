<div class="col-md-12">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"><?php echo $pageuser; ?> Stats</h3>


			<div class="pull-right">
				<a href="../../uploads/MSRM/SafetyPerformanceData.pdf?= $pageuser; ?>/SafetyPerformanceData.pdf" target="_blank" class="btn btn-info btn-sm"></i> Safety Performance Data</a>
				<div class="col-md-1"></div>
			</div>

		</div>
		<!-- /.box-header -->
		<div class="box-body" id="tablediv">
			<div class="table-responsive">
				<?php
				include '../../dbconfig.php';
				$queryalert = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$pageuser' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert) or die(mysqli_error($db));
				$resultalert = mysqli_query($db, $queryalert);
				$rowalert = mysqli_fetch_row($resultalert);
				$numalert = $rowalert[0];

				$query2a = "SELECT count(*)FROM mor  WHERE RISKOWNER='$pageuser' AND STATUS='OPEN' AND CLOSEDRO='OPEN' ";
				mysqli_query($db, $query2a) or die(mysqli_error($db));
				$result2a = mysqli_query($db, $query2a);
				$row2a = mysqli_fetch_row($result2a);
				$num2a = $row2a[0];

				$queryalerttwo = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$pageuser' AND STATUS='OPEN' AND CLOSEDRO='OPEN' ";
				mysqli_query($db, $queryalerttwo) or die(mysqli_error($db));
				$resultalerttwo = mysqli_query($db, $queryalerttwo);
				$rowalerttwo = mysqli_fetch_row($resultalerttwo);
				$numalerttwo = $rowalerttwo[0];

				$queryalerttwo1 = "SELECT count(*)FROM recommendations  WHERE RISKOWNER='$pageuser' AND STATUS='OPEN'";
				mysqli_query($db, $queryalerttwo1) or die(mysqli_error($db));
				$resultalerttwo1 = mysqli_query($db, $queryalerttwo1);
				$rowalerttwo1 = mysqli_fetch_row($resultalerttwo1);
				$numalerttwo1 = $rowalerttwo1[0];

				$queryalert2 = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$pageuser' AND MITIGATIONLEVEL='1'  AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2) or die(mysqli_error($db));
				$resultalert2 = mysqli_query($db, $queryalert2);
				$rowalert2 = mysqli_fetch_row($resultalert2);
				$numalert2 = $rowalert2[0];

				$queryalert23 = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$pageuser' AND RISKLEVEL='High Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
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

				$queryalert2m = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$pageuser' AND MITIGATIONLEVEL='2' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2m) or die(mysqli_error($db));
				$resultalert2m = mysqli_query($db, $queryalert2m);
				$rowalert2m = mysqli_fetch_row($resultalert2m);
				$numalert2m = $rowalert2m[0];

				$queryalert23m = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$pageuser' AND RISKLEVEL='Medium Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert23m) or die(mysqli_error($db));
				$resultalert23m = mysqli_query($db, $queryalert23m);
				$rowalert23m = mysqli_fetch_row($resultalert23m);
				$numalert23m = $rowalert23m[0];

				$queryalert234m = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$pageuser' AND audit.RISK_LEVEL='Medium Risk' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
				mysqli_query($db, $queryalert234m) or die(mysqli_error($db));
				$resultalert234m = mysqli_query($db, $queryalert234m);
				$rowalert234m = mysqli_fetch_row($resultalert234m);
				$numalert234m = $rowalert234m[0];

				$medium = $numalert2m + $numalert23m + $numalert234m;

				$queryalert2ml = "SELECT count(*)FROM compliance  WHERE RISKOWNER='$pageuser' AND MITIGATIONLEVEL='3' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2ml) or die(mysqli_error($db));
				$resultalert2ml = mysqli_query($db, $queryalert2ml);
				$rowalert2ml = mysqli_fetch_row($resultalert2ml);
				$numalert2ml = $rowalert2ml[0];

				$queryalert23ml = "SELECT count(*)FROM hazardreport  WHERE RISKOWNER='$pageuser' AND RISKLEVEL='Low Risk' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert23ml) or die(mysqli_error($db));
				$resultalert23ml = mysqli_query($db, $queryalert23ml);
				$rowalert23ml = mysqli_fetch_row($resultalert23ml);
				$numalert23ml = $rowalert23ml[0];

				$queryalert234ml = "SELECT count(DISTINCT(recommendations.ID))FROM audit,recommendations  WHERE recommendations.RISKOWNER='$pageuser' AND audit.RISK_LEVEL='Low Risk' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
				mysqli_query($db, $queryalert234ml) or die(mysqli_error($db));
				$resultalert234ml = mysqli_query($db, $queryalert234ml);
				$rowalert234ml = mysqli_fetch_row($resultalert234ml);
				$numalert234ml = $rowalert234ml[0];

				$low = $numalert2ml + $numalert23ml + $numalert234ml;

				$queryalert2mlptd = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$pageuser' AND TARGETDATE < CURDATE() AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptd) or die(mysqli_error($db));
				$resultalert2mlptd = mysqli_query($db, $queryalert2mlptd);
				$rowalert2mlptd = mysqli_fetch_row($resultalert2mlptd);
				$numalert2mlptd = $rowalert2mlptd[0];

				$queryalert2mlptdh = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$pageuser' AND TARGETDATE < CURDATE() AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdh) or die(mysqli_error($db));
				$resultalert2mlptdh = mysqli_query($db, $queryalert2mlptdh);
				$rowalert2mlptdh = mysqli_fetch_row($resultalert2mlptdh);
				$numalert2mlptdh = $rowalert2mlptdh[0];

				$queryalert2mlptdq = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$pageuser' AND TARGETDATE < CURDATE() AND STATUS='OPEN'";
				mysqli_query($db, $queryalert2mlptdq) or die(mysqli_error($db));
				$resultalert2mlptdq = mysqli_query($db, $queryalert2mlptdq);
				$rowalert2mlptdq = mysqli_fetch_row($resultalert2mlptdq);
				$numalert2mlptdq = $rowalert2mlptdq[0];

				$totaloverdue = $numalert2mlptd + $numalert2mlptdh + $numalert2mlptdq;

				$queryalert2mlptdt = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdt) or die(mysqli_error($db));
				$resultalert2mlptdt = mysqli_query($db, $queryalert2mlptdt);
				$rowalert2mlptdt = mysqli_fetch_row($resultalert2mlptdt);
				$numalert2mlptdt = $rowalert2mlptdt[0];

				$queryalert2mlptdht = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdht) or die(mysqli_error($db));
				$resultalert2mlptdht = mysqli_query($db, $queryalert2mlptdht);
				$rowalert2mlptdht = mysqli_fetch_row($resultalert2mlptdht);
				$numalert2mlptdht = $rowalert2mlptdht[0];


				$queryalert2mlptdtz = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(TARGETDATE,CURDATE())) BETWEEN '0' AND '30' AND STATUS='OPEN'";
				mysqli_query($db, $queryalert2mlptdtz) or die(mysqli_error($db));
				$resultalert2mlptdtz = mysqli_query($db, $queryalert2mlptdtz);
				$rowalert2mlptdtz = mysqli_fetch_row($resultalert2mlptdtz);
				$numalert2mlptdtz = $rowalert2mlptdtz[0];

				$totalthirty = $numalert2mlptdt + $numalert2mlptdht + $numalert2mlptdtz;

				$queryalert2mlptdtg = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(TARGETDATE,CURDATE())) > '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdtg) or die(mysqli_error($db));
				$resultalert2mlptdtg = mysqli_query($db, $queryalert2mlptdtg);
				$rowalert2mlptdtg = mysqli_fetch_row($resultalert2mlptdtg);
				$numalert2mlptdtg = $rowalert2mlptdtg[0];

				$queryalert2mlptdtgnhr = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(TARGETDATE,CURDATE())) > '30' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdtgnhr) or die(mysqli_error($db));
				$resultalert2mlptdtgnhr = mysqli_query($db, $queryalert2mlptdtgnhr);
				$rowalert2mlptdtgnhr = mysqli_fetch_row($resultalert2mlptdtgnhr);
				$numalert2mlptdtgnhr = $rowalert2mlptdtgnhr[0];

				$queryalert2mlptdtzq = "SELECT count(*) FROM recommendations  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(CURDATE(),TARGETDATE)) > '30' AND STATUS='OPEN'";
				mysqli_query($db, $queryalert2mlptdtzq) or die(mysqli_error($db));
				$resultalert2mlptdtzq = mysqli_query($db, $queryalert2mlptdtzq);
				$rowalert2mlptdtzq = mysqli_fetch_row($resultalert2mlptdtzq);
				$numalert2mlptdtzq = $rowalert2mlptdtzq[0];

				$totalthirtyc = $numalert2mlptdtgnhr + $numalert2mlptdtg + $numalert2mlptdtzq;

				$queryalert2mlptdqhu = "SELECT count(*) FROM hazardreport  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdqhu) or die(mysqli_error($db));
				$resultalert2mlptdqhu = mysqli_query($db, $queryalert2mlptdqhu);
				$rowalert2mlptdqhu = mysqli_fetch_row($resultalert2mlptdqhu);
				$numalert2mlptdqhu = $rowalert2mlptdqhu[0];

				$queryalert2mlptdqhum = "SELECT count(*) FROM mor  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdqhum) or die(mysqli_error($db));
				$resultalert2mlptdqhum = mysqli_query($db, $queryalert2mlptdqhum);
				$rowalert2mlptdqhum = mysqli_fetch_row($resultalert2mlptdqhum);
				$numalert2mlptdqhum = $rowalert2mlptdqhum[0];

				$queryalert2mlptdqhuma = "SELECT count(*) FROM compliance  WHERE RISKOWNER='$pageuser' AND (DATEDIFF(CURDATE(),LASTUPDATE)) > '7' AND STATUS='OPEN' AND CLOSEDRO='OPEN'";
				mysqli_query($db, $queryalert2mlptdqhuma) or die(mysqli_error($db));
				$resultalert2mlptdqhuma = mysqli_query($db, $queryalert2mlptdqhuma);
				$rowalert2mlptdqhuma = mysqli_fetch_row($resultalert2mlptdqhuma);
				$numalert2mlptdqhuma = $rowalert2mlptdqhuma[0];

				$queryalert2mlptdqhumac = "SELECT count(DISTINCT(recommendations.ID)) FROM audit,recommendations  WHERE recommendations.RISKOWNER='$pageuser' AND (DATEDIFF(CURDATE(),audit.LASTUPDATE)) > '7' AND recommendations.STATUS='OPEN'  AND audit.AID=recommendations.ID";
				mysqli_query($db, $queryalert2mlptdqhumac) or die(mysqli_error($db));
				$resultalert2mlptdqhumac = mysqli_query($db, $queryalert2mlptdqhumac);
				$rowalert2mlptdqhumac = mysqli_fetch_row($resultalert2mlptdqhumac);
				$numalert2mlptdqhumac = $rowalert2mlptdqhumac[0];

				$lastupdatetotal = $numalert2mlptdqhu + $numalert2mlptdqhum + $numalert2mlptdqhuma + $numalert2mlptdqhumac;
				$tablerow =  " <tr>
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
					<td align='center' >" . $lastupdatetotal . "</td></tr>";
				?>
				<table class="table table-bordered table-striped">
					<tr>
						<th bgcolor='#ecf0f1'></th>
						<th colspan='4' bgcolor='#ecf0f1'># Issues Open</th>
						<th colspan='3' bgcolor='#ecf0f1'>Risk Level</th>
						<th colspan='3' bgcolor='#ecf0f1'># of item(s)</th>

					</tr>
					<tr>

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
					</tr>
					<?php
					echo $tablerow;
					?>
				</table>
			</div>
		</div>
		<!-- /.box-body -->

	</div>

	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"><?php echo $pageuser; ?> Stats</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body" id="tablediv">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<tr>
						<th bgcolor='#ecf0f1'>Item</th>
						<th bgcolor='#ecf0f1'>Total</th>
						<th bgcolor='#ecf0f1'>Open</th>
						<th bgcolor='#ecf0f1'>Closed</th>
						<th bgcolor='#ecf0f1'>Closure Percentage</th>
					</tr>
					<tr>
						<td>HAZARD</td>
						<?php

						include '../../dbconfig.php';
						$query = "SELECT SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
									SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
									COUNT(STATUS) AS 'TOTAL' FROM hazardreport WHERE RISKOWNER = '$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);


						while ($row = mysqli_fetch_array($result)) {


							echo "<td>" . $row['TOTAL'] . "</td>";
							echo "<td>" . $row['OPEN'] . "</td>";
							echo "<td>" . $row['CLOSED'] . "</td>";
							if ($row['TOTAL'] == 0) {
								$total = 1;
							} else {
								$total = $row['TOTAL'];
							}
							$foo = ($row['CLOSED'] / $total) * 100;
							$completion = round($foo);
							if ($completion >= 50) {
								echo "<td><span class='badge bg-green'>" . $completion . "%</td>";
							} else {

								echo "<td><span class='badge bg-red'>" . $completion . "%</td>";
							}
						}
						mysqli_close($db);

						?>

					</tr>
					<tr>
						<td>MOR</td>
						<?php

						include '../../dbconfig.php';
						$query = "SELECT SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
									SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
									COUNT(STATUS) AS 'TOTAL' FROM mor WHERE RISKOWNER = '$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);


						while ($row = mysqli_fetch_array($result)) {


							echo "<td>" . $row['TOTAL'] . "</td>";
							echo "<td>" . $row['OPEN'] . "</td>";
							echo "<td>" . $row['CLOSED'] . "</td>";
							if ($row['TOTAL'] == 0) {
								$total = 1;
							} else {
								$total = $row['TOTAL'];
							}
							$foo = ($row['CLOSED'] / $total) * 100;
							$completion = round($foo);
							if ($completion >= 50) {
								echo "<td><span class='badge bg-green'>" . $completion . "%</td>";
							} else {

								echo "<td><span class='badge bg-red'>" . $completion . "%</td>";
							}
						}
						mysqli_close($db);

						?>
					</tr>
					<tr>
						<td>COMPLIANCE</td>
						<?php

						include '../../dbconfig.php';
						$query = "SELECT SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
									SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
									COUNT(STATUS) AS 'TOTAL' FROM compliance WHERE RISKOWNER = '$pageuser'";
						mysqli_query($db, $query) or die('Error querying database.');
						$result = mysqli_query($db, $query);


						while ($row = mysqli_fetch_array($result)) {


							echo "<td>" . $row['TOTAL'] . "</td>";
							echo "<td>" . $row['OPEN'] . "</td>";
							echo "<td>" . $row['CLOSED'] . "</td>";
							if ($row['TOTAL'] == 0) {
								$total = 1;
							} else {
								$total = $row['TOTAL'];
							}
							$foo = ($row['CLOSED'] / $total) * 100;
							$completion = round($foo);
							if ($completion >= 50) {
								echo "<td><span class='badge bg-green'>" . $completion . "%</td>";
							} else {

								echo "<td><span class='badge bg-red'>" . $completion . "%</td>";
							}
						}
						mysqli_close($db);

						?>
					</tr>
					<tr>
						<td>AUDIT</td>
						<?php

						include '../../dbconfig.php';
						$query = "SELECT SUM(IF(STATUS = 'OPEN',1,0)) AS OPEN,
									SUM(IF(STATUS = 'CLOSED',1,0)) AS CLOSED,
									COUNT(STATUS) AS 'TOTAL' FROM recommendations WHERE RISKOWNER = '$pageuser'";
						mysqli_query($db, $query) or die(mysqli_error($db));
						$result = mysqli_query($db, $query);


						while ($row = mysqli_fetch_array($result)) {


							echo "<td>" . $row['TOTAL'] . "</td>";
							echo "<td>" . $row['OPEN'] . "</td>";
							echo "<td>" . $row['CLOSED'] . "</td>";
							if ($row['TOTAL'] == 0) {
								$total = 1;
							} else {
								$total = $row['TOTAL'];
							}
							$foo = ($row['CLOSED'] / $total) * 100;
							$completion = round($foo);
							if ($completion >= 50) {
								echo "<td><span class='badge bg-green'>" . $completion . "%</td>";
							} else {

								echo "<td><span class='badge bg-red'>" . $completion . "%</td>";
							}
						}
						mysqli_close($db);

						?>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- /.info-box -->
</div>