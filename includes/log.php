<?php
  session_start();
  if (!isset($_SESSION["user"])){
    header("location: login.php?accesso=0");
  }
  $aggiuntivo="<h3>Benvenuto: ".$_SESSION["user"]."</h3>";
?>
