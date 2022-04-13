<?php require '../includes/var.php';?>
<?php
	$metaTags = "Pagina relativa al calcolo dell'a CO2 prodotta da un singolo individuo" ;
	$currentPage = 'Calcolo CO2';
	$aggiuntivo = '<img name="logo" src="../img/img4.jpg" alt="CO2">';
?>
<html lang="it">
<html lang="it">
	<head>
	<link rel="stylesheet" href="/cambiaclima/css/styleCo2.css?<?echo filemtime('../css/styleCo2.css');?>">
			<?php require '../includes/head.php';?>
	</head>
	<body>	
		<!-- Header -->
		<?php require '../includes/header.php';?>

		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm" role="main">
			<h1>Calcolo della CO2 che emetti in base alle tue abitudini settimanali o al tuo stile di guida</h1>
			<br><br><br><br>
			<a class="btn btn-secondary data-toggle="collapse" href="CO2/calcoloCO2Abitudini.php">CLICCA QUA PER CALCOLARE LA CO2 CHE EMETTI IN BASE ALLE TUE ABITUDINI SETTIMANALI</a>
			<br><br>
			<a class="btn btn-secondary data-toggle="collapse" href="CO2/calcoloCO2Auto.php">CLICCA QUA PER CALCOLARE LA CO2 CHE EMETTI IN BASE AL TUO STILE DI GUIDA</a>
		</main>
		 <!--Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
