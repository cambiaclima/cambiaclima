<?php
	require '../../includes/log.php';
	$currentPage = 'Inserimento Dati Co2';
?>
<html lang="it">
<link rel="stylesheet" href="/cambiaclima/css/styleInsert.css">
<head>
	<?php require '../../includes/head.php';?>
</head>
	<body>
		<!-- Header -->
		<?php require '../../includes/header.php';?>
		<!-- Nav -->
		<?php require '../../includes/adminNav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white pt-3" role="main">
      <h2>Inserisci stato:</h2>
      <form action="inserisci.php" method="post">
				<div class="form-group">
					<label for="nome_Stato">Nome dello stato</label>
					<input type="text" name="nome_Stato" id="nome_Stato" class="form-control" >
				</div>
				<div class="form-group">
					<label for="consumo_energia_elettrica">Consumo energia elettrica</label>
					<input type="text" name="consumo_energia_elettrica" id="consumo_energia_elettrica" class="form-control">
				</div>
				<div class="form-group">
					<label for="emissioni_di_co2_per_elettricita">Emissioni di co2 per elettricita</label>
					<input type="text" name="emissioni_di_co2_per_elettricita" id="emissioni_di_co2_per_elettricita" class="form-control">
				</div>
				<input class="btn btn-primary" type="submit" value="inserisci"/>
			</form>
    </main>
  </body>
</html>
