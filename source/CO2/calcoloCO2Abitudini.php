<?php require '../../includes/var.php';?>
<?php
	$metaTags = "Pagina relativa al calcolo dell'a CO2 prodotta da un singolo individuo" ;
	$currentPage = 'Calcolo CO2';
	$aggiuntivo = '<img name="logo" src="../img/img4.jpg" alt="CO2">';
?>
<html lang="it">
<html lang="it">
	<head>
	<link rel="stylesheet" href="/cambiaclima/css/styleCo2.css?<?echo filemtime('../css/styleCo2.css');?>">
			<?php require '../../includes/head.php';?>
	</head>
	<body>	
		<!-- Header -->
		<?php require '../../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm" role="main">
            <?php require 'fun/JSfunction_calcoloCO2_abitudini.html';?>
		</main>
		 <!--Footer -->
		<?php require '../../includes/footer.php';?>
	</body>
</html>
