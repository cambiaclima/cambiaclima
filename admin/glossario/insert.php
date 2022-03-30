<?php
	require '../../includes/log.php';
	$currentPage = 'Inserimento termine glossario';
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
			<form action="add_termine.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="titolo">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control" >
				</div>
				<div class="form-group">
					<label for="contenuto">Descrizione</label>
					<textarea name="descrizione" class="form-control" id="descrizione"></textarea>
				</div>
				<input class="btn btn-primary" type="submit"  name="invia_uno" value="inserisci"/>
			</form>
		</main>
	</body>
</html>