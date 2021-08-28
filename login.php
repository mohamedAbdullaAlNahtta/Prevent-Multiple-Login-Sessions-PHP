<?php
session_start();
error_reporting(0);

include("dark/includes/mysql_connection_arabicss.php");

if (isset($_POST['submit'])) {


$result=mysqli_query($connection,"SELECT * FROM `users` WHERE `username`='".$_POST['username']."' AND `password`='".$_POST['password']."'");

$num=mysqli_fetch_array($result);

if ($num>0) {


  $extra="index.php";
  $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

  $token =md5(getToken(50)).getToken(50);
  

  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['token'] = $token;

  $reso=mysqli_query($connection,"SELECT * FROM `login-sessions` WHERE `username`='".$_POST['username']."' AND `loginOut` IS NULL");

  $numo=mysqli_fetch_array($reso);

  if ($numo>0) {
  
  $sql = "UPDATE `login-sessions` SET `loginOut` = NOW() WHERE `login-sessions`.`username`='".$_SESSION['username']."';";
  $sql.="INSERT INTO `login-sessions` ( `username`, `token`, `loginTme`) VALUES ('".$_SESSION['username']."', '$token', NOW())";

  $res=mysqli_multi_query($connection,$sql);
    
  } else {

  $sql="INSERT INTO `login-sessions` ( `username`, `token`, `loginTme`) VALUES ('".$_SESSION['username']."', '$token', NOW())";


  $res=mysqli_query($connection,$sql);
    
  }

  

$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");

} else {
$errormsg="Invalid username or password";
  
}
  
}




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
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="container">
  <section id="content">
    <form action="login.php" method="post">
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="Username" required="" id="username" name="username" />
      </div>
      <br>
      <div>
        <input type="password" placeholder="Password" required="" id="password" name="password" />
      </div>
      <br>
      <div>
        <input type="submit" name="submit" value="Log in" />
        <br>
        <p>
          <?php if($errormsg){
            echo htmlentities($errormsg);
          }?>
        </p>
        <br>
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</body>
</html>
