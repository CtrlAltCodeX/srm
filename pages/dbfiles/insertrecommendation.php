<?php
// Fetching Values From URL
include '../../dbconfig.php';

$recommendation = mysqli_real_escape_string($db, $_POST['recommendation']);
$status = mysqli_real_escape_string($db, $_POST['status']);
$dateoccurone = $_POST['datepickertwo'];
$dateoccurtwo = DateTime::createFromFormat('m/d/Y', $dateoccurone);
// $datewa = $dateoccurtwo->format("Y-m-d");
$datewa = '2024-02-01';
$riskowner = mysqli_real_escape_string($db, $_POST['riskowner']);
$user = mysqli_real_escape_string($db, $_POST['user']);

$query = "INSERT INTO recommendations(ID,RECOMMENDATION,STATUS,TARGETDATE,RISKOWNER,QASO) VALUES('AUDIT','$recommendation','$status', '$datewa','$riskowner','$user')";

mysqli_multi_query($db, $query) or die(mysqli_error($db));