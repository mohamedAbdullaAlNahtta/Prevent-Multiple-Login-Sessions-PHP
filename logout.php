<?php
session_start();
error_reporting(0);

$_SESSION['username']=="";
$_SESSION['password']=="";
$_SESSION['token']=="";

$errormsg=$_SESSION['errormsg'];
session_destroy();
session_unset();

session_start();
error_reporting(0);
$_SESSION['errormsg']=;

header("location:login.php");

?>
