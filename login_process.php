<?php
 session_start();
 require_once 'dbconfig.php';

 
  $user = trim($_POST['user']);
  $pass = trim($_POST['pass']);
  
  $query = "SELECT * FROM users  WHERE user='$user' AND pass='$pass'";
  $result = mysqli_query($db, $query); 
  $row = mysqli_fetch_array($result); 
  if($row > 0)
  {
	  $USER = $row['department'];
	  $_SESSION['USER'] = $USER;
	  echo $USER;
  }
  else{echo "noexist";}
 
?>

