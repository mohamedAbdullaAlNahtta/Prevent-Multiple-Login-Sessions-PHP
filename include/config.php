<?php

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