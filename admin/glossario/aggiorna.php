<?php
	$ID=$_POST['ID'];
	$nome=preg_replace('/\s+/', '', $_POST['nome']);
	$descrizione=$_POST['descrizione'];

	//Connesione al server
	require '../../includes/dbconnect.php';

	$update='UPDATE termine SET Nome="'.$nome.'", descrizione="'.$descrizione.'" WHERE Nome="'.$ID.'";';
	echo $update."<br>";
	echo $ID."<br>";
	if (!mysqli_query($conn,$update)){
		echo ("errore nella modifica");
		exit();
	}
	echo ("stato modificato correttamente");
	mysqli_close($conn);
  header("location: ../bacheca.php");
?>
