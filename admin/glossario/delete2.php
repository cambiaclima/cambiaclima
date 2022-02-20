<?php
//Connesione al server
require '../../includes/dbconnect.php';

  $IDs = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
  foreach ($IDs as $ID){
  	if($ID!=null){
    	$sql='DELETE FROM termine WHERE Nome ="'.$ID.'";';
    	if ($conn->query($sql) === TRUE) {
      	echo "eliminato";
    	} else {
        	echo "Error: " . $sql . "<br>" . $conn->error. "<br>";
        	exit();
    	}
    }
    echo ("Articolo eliminato");
  }
  mysqli_close($conn);
  header("location: ../bacheca.php");
?>
