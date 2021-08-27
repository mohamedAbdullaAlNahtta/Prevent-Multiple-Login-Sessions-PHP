<?php
session_start();
error_reporting(0);

/* arabicss database connection */
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prvent-multiple-sessions-login";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: Please Contact Your Administrator ");
}


$logoutdate=date(' Y-m-d H:i:s ',strtotime('+1 hour ',strtotime(date('Y-m-d H:i:s '))));

$username=$_SESSION['username'];


mysqli_query($connection,"UPDATE `user_log`  SET `logoutTime` = NOW() WHERE `username` = '$username' ORDER BY id DESC LIMIT 1");

$_SESSION['username']=="";
session_destroy();
session_unset();


/* database destroy connection */

mysqli_close($connection);

?>
<!-- <script language="javascript">
document.location="login.php";
</script>
 -->