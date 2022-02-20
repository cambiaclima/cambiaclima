<?php
	$ID=$_POST['ID'];
	$nome_Stato=preg_replace('/\s+/', '', mysql_escape_string ($_POST['nome_Stato']));
	$consumo_energia_elettrica=mysql_escape_string ($_POST['consumo_energia_elettrica']);
	$emissioni_di_co2_per_elettricita=mysql_escape_string ($_POST['emissioni_di_co2_per_elettricita']);
	//Connesione al server
  require '../../includes/dbconnect.php';

	if(! $conn){
		echo ("errore nella connessione al server");
		exit();
	}

	$update='UPDATE stato SET nome_Stato="'.$nome_Stato.'", consumo_energia_elettrica='.$consumo_energia_elettrica.', emissioni_di_co2_per_elettricita='.$emissioni_di_co2_per_elettricita.' WHERE nome_Stato="'.$ID.'";';
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
