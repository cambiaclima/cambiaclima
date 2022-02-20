<?php
	require '../includes/log.php';
	$currentPage = 'Bacheca';

	// evita che si acceda all'area admin senza avere l'autorizzazione
	function checkLogin(){ // SISTEMA LOGIN: PASSO 4
		require '../includes/dbconnect.php';

		$sql = 'SELECT utente, password FROM `amministratore`;';
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$userDB = $row["utente"];
			$passwordDB = $row["password"];
		}
		$json = file_get_contents('temp/passwordTemp.json');
		$info = json_decode($json, true);
		$user = $info["Username"];
		$password = $info["Password"];

		if(strcmp($user, $userDB)==0 && strcmp($password, $passwordDB)==0){
			return true;
		}else {
			return false;
		}
	}

	if(checkLogin()){ // SISTEMA LOGIN PASSO 5
		require 'bachecaPROVA.php';
	}
	else {
		header("location: login.php");
	}
?>
