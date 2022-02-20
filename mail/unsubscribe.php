 <?php
	
	$currentPage = 'Disiscrizione dalla Newsletter';
?>
<html lang="it">
<head>
	<?php require '../includes/head.php';?>
</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- Nav -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white pt-3" role="main">
			<form action="mailformstart.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="email">Email</label>
					<input name="email" type="email" placeholder="Inserisci qui la tua mail per disiscriverti dalla nostra NewsLetter" id="nome" class="form-control" >
				</div>
				<input class="btn btn-primary" type="submit"  name="disiscriviti" value="Disiscriviti"/>
			</form>
		</main>
	</body>
</html>

