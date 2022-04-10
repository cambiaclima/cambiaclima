<?php
	require 'includes/var.php';
	$currentPage = 'Home';
?>
<html lang="it">
<head>
	<?php require 'includes/head.php';?>
	<link rel="stylesheet" href="/cambiaclima/css/style.css?<?echo filemtime('../css/style.css');?>">
</head>
	<body>
		<!-- Header-->
		<?php require 'includes/header.php';?>
	
		<div class="bg">
		 <!-- NavBar -->
		<?php require 'includes/nav.php';?>
		
		<!-- Main
		<main class="container-md" role="main"> -->
		<section id="facilities">
		<div class="container">
			<div class="title">
				<h1>CAMBIACLIMA</h1>
				<p>I NOSTRI PROGETTI</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card-text-center">
						<img class="card-img-top" src="img/friburgo.jpg" alt="Card image cap">
						<div class="card-body">
						<a href="source/friburgo.php">FRIBURGO</a>
							<p class="card-text">Partiamo alla scoperta di questa bellissima cittadina nel cuore della foresta Nera che negli ultimi anni è diventata l’esempio numero uno di turismo della sostenibilità.</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-text-center">
						<img class="card-img-top" src="img/crowdfunding.jpg" alt="Card image cap">
						<div class="card-body">
						<a href="source/crowdfunding.php">CROWDFUNDING</a>
							<p class="card-text">Il crowdfunding è raccolta fondi di piccole donazioni ma di numerose persone che condividono lo stesso interesse o intendono sostenere un’idea.</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-text-center">
						<img class="card-img-top" src="img/prepair.jpg" alt="Card image cap">
						<div class="card-body">
						<a href="source/prepair.php">PREPAIR</a>
							<p class="card-text">Il progetto PREPAIR mira ad implementare le misure previste dai piani regionali e dall’Accordo di Bacino su scala maggiore e a rafforzarne la sostenibilità e la durabilità dei risultati</p>
							
						</div>
					</div>
				</div>
			</div>
			</section>
			<section id="facilities">
				<div class="container">
					<div class="title">
						<p>LE NOSTRE CREAZIONI</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="card-text-center">
								<img class="card-img-top" src="img/co2.jpg" alt="Card image cap">
								<div class="card-body">
								<a href="source/co2.php">CALCOLO CO2</a>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card-text-center">
								<img class="card-img-top" src="img/glossario.jpg" alt="Card image cap">
								<div class="card-body">
								<a href="source/glossario.php">GLOSSARIO</a>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card-text-center">
								<img class="card-img-top" src="img/game.jpg" alt="Card image cap">
								<div class="card-body">
								<a href="source/giochi.php">GIOCHI</a>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									
								</div>
							</div>
						</div>
					</div>
			</section>
			</div>
			<div class="bg">
			</div>
		<!-- </main> -->
		<!-- Footer -->
		<?php require 'includes/footer.php';?>
</div>
<!-- //ciao -->
	</body>
</html>
