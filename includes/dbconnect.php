<?php
$dbServerName = "localhost";
$dbUserName = "cambiaclima5bi";
$dbPassword = "";
$dbName = "my_cambiaclima5bi";

// ricordarsi di mettere privato il file una volta configurata la connessione remota cosi che non si vedano i parametri di accesso dal repository 

$conn= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die('Unable to establish a SQL connection');
$conn->set_charset("utf8");
?>
