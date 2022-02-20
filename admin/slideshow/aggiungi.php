<?php
  //Connesione al server
  require '../../includes/dbconnect.php';

  $IDs = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
  foreach ($IDs as $IDArt){
  	if($IDArt!=null){
    	$sqlquery= "INSERT INTO articolo_slide (idArt) VALUES('$IDArt');";
        $result = $conn->query($sqlquery);
    }
    
  }
  header("location: ../bacheca.php");