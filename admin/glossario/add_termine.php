<?php
  $nome=$_POST['nome'];
  $descrizione=$_POST['descrizione'];
  
	//Connesione al server
	require '../../includes/dbconnect.php';

  $sql="INSERT INTO termine (Nome,descrizione)";
  $sql .="VALUES('$nome','$descrizione');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      exit();
  }
  echo ("Termine aggiunto");

  mysqli_close($conn);
  header("location: ../bacheca.php");

?>
