<?php
session_start();
error_reporting(0);


include("include/config.php");

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$token = $_SESSION['token'];

$reso=mysqli_query($connection,"SELECT * FROM `login-sessions` WHERE `username`='$username' AND `token`='$token' AND `loginOut` IS NULL");

$numo=mysqli_fetch_array($reso);

if ($numo<=0) {
  header("location:logout.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>

<center><h1>index Page</h1></center>
<br>
<center><h1>
<?php

echo "Session for User Name : ".$username."....";

?>	
</h1></center>

<br>
<a href="index.php"> index page </a>
<br>
<a href="pageone.php">page one</a>
<br>
<a href="pagetwo.php">page two</a>
<br>
<a href="pagethree.php">page three</a>

</body>
</html>