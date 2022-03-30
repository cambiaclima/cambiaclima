<?php
	require '../../includes/log.php';
	$currentPage = 'Inserimento articoli';
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
			<form action="add_articolo.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="titolo">Titolo</label>
					<input type="text" name="titolo" id="titolo" class="form-control" >
				</div>
				<div class="form-group">
					<label for="breve_descr">Breve Descrizione</label>
					<input type="text" name="breve_descr" id="breve_descr" class="form-control">
				</div>
				<div class="form-group">
					<label for="contenuto">Contenuto</label>
					<textarea name="contenuto" class="form-control" id="contenuto"></textarea>
				</div>
				<div class="form-group">
					<label for="fileToUpload">Immagine</label>
			    	<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
			  </div>
				<input class="btn btn-primary" type="submit"  name="invia_uno" value="inserisci"/>
			</form>
		</main>
	</body>
</html>
