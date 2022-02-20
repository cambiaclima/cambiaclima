<?php
	require '../../includes/log.php';
	$currentPage = 'Invio Personalizzato alla Newsletter';
?>
<html lang="it">
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
			<form action="send_mail.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="titolo">Oggetto</label>
					<input type="text" name="oggetto" id="oggetto" class="form-control" >
				</div>
                <div class="form-group">
					<label for="titolo">Titolo Mail</label>
					<input type="text" name="titolo" id="titolo" class="form-control" >
				</div>
				<div class="form-group">
					<label for="contenuto">Testo</label>
					<textarea name="testo" class="form-control" id="testo"></textarea>
				</div>
				<input class="btn btn-primary" type="submit"  name="invia_uno" value="Invia"/>
			</form>
		</main>
	</body>
</html>