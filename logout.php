<?php
session_start();
error_reporting(0);

$_SESSION['username']=="";
$_SESSION['password']=="";
$_SESSION['token']=="";

session_destroy();
session_unset();

header("location: login.php");

?>
