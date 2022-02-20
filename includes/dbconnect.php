<?php
$dbServerName = "localhost";
$dbUserName = "cambiaclima5bi";
$dbPassword = "";
$dbName = "my_cambiaclima5bi";

$conn= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die('Unable to establish a SQL connection');
$conn->set_charset("utf8");
?>
