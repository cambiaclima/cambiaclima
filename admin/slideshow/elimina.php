<?php
  //Connesione al server
  require '../../includes/dbconnect.php';

  $IDs = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
  foreach ($IDs as $IDArt){
  	if($IDArt!=null){
    	$sqlquery= "DELETE  FROM articolo_slide WHERE IdArt =$IDArt;";
        $result = $conn->query($sqlquery);
    }
    
  }
  header("location: ../bacheca.php");