<?php
// remove all session variables
session_start();
$_SESSION = array();
session_unset();
// destroy the session
session_destroy();
header("location: ../index.php");
?>