<?php




$a = session_id();
if(empty($a)) session_start();
echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];

// session_destroy();
// session_unset();




?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>

<center><h1>Page one</h1></center>

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