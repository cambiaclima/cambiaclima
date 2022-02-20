<?php
	$ID=$_POST['ID'];
  $IdCategoria=$_POST['categoria'];
  $newCategoria=mysql_escape_string ($_POST['newCategoria']);
  $titolo=mysql_escape_string ($_POST['titolo']);
  $contenuto=mysql_escape_string ($_POST['contenuto']);

	//Connesione al server
	require '../../includes/dbconnect.php';

	if($newCategoria!=null||$newCategoria!=""){
    $sql="INSERT INTO categoria (nomeCategoria) ";
    $sql .="VALUES('$newCategoria');";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit();
    }
    $sql="SELECT IdCategoria FROM categoria where nomeCategoria = '".$newCategoria."';";
    $result = mysqli_query($conn,$sql);
    $IdCategoria = mysqli_fetch_array($result)[0];
  }

	$sql='UPDATE approfondimento SET Descrizione="'.$contenuto.'", titolo="'.$titolo.'", IdCategoria='.$IdCategoria.' WHERE IdApprofondimento='.$ID.';';
	if ($conn->query($sql) === TRUE) {
		echo "Record modified";
	} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			exit();
	}

	echo ("stato modificato correttamente");
	mysqli_close($conn);
  header("location: ../bacheca.php");
?>
