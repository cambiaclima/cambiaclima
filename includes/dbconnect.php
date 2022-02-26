<?php
$dbServerName = "remotemysql.com";
$dbUserName = "fGPR7boOmP";
$dbPassword = "wBx7ZG1Nbd";
$dbName = "fGPR7boOmP";
$dbport = 3306;

// ricordarsi di mettere privato il file una volta configurata la connessione remota cosi che non si vedano i parametri di accesso dal repository 

$conn= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName, $dbport) or die('Unable to establish a SQL connection');
$conn->set_charset("utf8");
?>
