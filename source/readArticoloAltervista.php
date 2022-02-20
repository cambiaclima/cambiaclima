<?php
	require '../includes/dbconnect.php';
	$sel="select * from articolo";
	$ris=mysqli_query($conn,$sel);
	if(!$ris) 	{
		echo json_encode(array("message" => "Nessun articolo Trovato."));
	}else{
		$articoli = array();
		$articoli = $ris->fetch_all(MYSQLI_ASSOC);
		echo json_encode($articoli);
	}
	mysqli_close($conn);
?>


