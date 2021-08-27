<?php
session_start();
error_reporting(0);


$token =md5(getToken(50)).getToken(50);
 $_SESSION['token'] = $token;


 
// Generate token
function getToken($length){
  $token = "";
  $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
  $codeAlphabet.= "0123456789";
  $max = strlen($codeAlphabet); // edited

  for ($i=0; $i < $length; $i++) {
    $token .= $codeAlphabet[random_int(0, $max-1)];
  }

  return $token;
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
<a href="index.php"> index page </a>
<br>
<a href="pageone.php">page one</a>
<br>
<a href="pagetwo.php">page two</a>
<br>
<a href="pagethree.php">page three</a>

</body>
</html>