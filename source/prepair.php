<?php require '../includes/var.php';
			require '../includes/dbconnect.php';
			$size=getimagesize("../img/map.jpg");//prendo la grandezza dell'immagine
			$w=$size[0];
			$h=$size[1];
?>

<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'PrepAIR';
?>
<html lang="it">
	<head>
		<?php
			require '../includes/head.php';
			require '../includes/popover.php';
		?>
		<link rel="stylesheet" type="text/css" href="../css/styleMap.css?<?=filemtime('../css/styleMap.css');?>">
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm py-md-3 px-md-5" role="main">
      <div id = "header" align = "center"><!--#header, dove c'è il titolo-->
        <h1>PrepAir</h1>
			</div>
      <p class="pl-3"><!--Contenuto della pagina-->
				<div class="row">
					<div class="col">
						<p class="text-justify">
							<?php
							$testo="Il Bacino del Po rappresenta un'importante area di criticità per la qualità dell'aria (polveri fini, ossidi di azoto, ozono), sin dall'entrata in vigore dei valori limite fissati dall'Unione Europea. Questa zona copre il territorio delle regioni italiane del nord ed include diversi agglomerati urbani quali Milano, Bologna e Torino. L'area è densamente popolata ed intensamente industrializzata.
							Tonnellate di ossidi di azoto, polveri e ammoniaca sono emesse ogni anno in atmosfera da un'ampia varietà di sorgenti inquinanti principalmente legate al traffico al riscaldamento domestico, all'industria, alla produzione di energia. Un importante contributo è inoltre dovuto all'ammoniaca, principalmente prodotta da fertilizzanti ed attività agricole e di allevamento.
							A causa delle condizioni meteo climatiche e delle caratteristiche morfologiche del Bacino, le concentrazioni di fondo rurale degli inquinanti sono spesso alte e una larga parte del particolato atmosferico ha origini secondarie.
							Al fine di ridurre i livelli di inquinamento atmosferico, le regioni hanno istituito il Tavolo di Bacino Padano ed hanno pianificato azioni comuni con lo scopo di limitare le emissioni nei prossimi anni.
							La necessità di azioni coordinate ha portato le amministrazioni locali e regionali a sottoscrivere un accordo con l’obiettivo di sviluppare e coordinare azioni di breve e di lungo periodo per migliorare la qualità dell’aria nel Bacino padano.
							L’Accordo di Bacino identifica i principali settori su cui agiranno le azioni: la combustione di biomasse, il trasporto di beni e passeggeri, il riscaldamento domestico, l’industria e l’energia, l’agricoltura.
							Tutti i governi regionali sottoscrittori dell’Accordo hanno inoltre un proprio Piano di qualità dell’aria.
							Il progetto PREPAIR mira ad implementare le misure previste dai piani regionali e dall’Accordo di Bacino su scala maggiore e a rafforzarne la sostenibilità e la durabilità dei risultati: il progetto copre la valle del Po e le regioni e le città che influenzano maggiormente la qualità dell’aria nel bacino.
							Le azioni di progetto si estendono anche alla Slovenia con lo scopo di valutare e ridurre il trasporto di inquinanti anche oltre il mare Adriatico.
							Il progetto ha una durata di 7 anni (1 febbraio 2017 – 31 gennaio 2024)
							Il budget totale è di € 16.805.939 con un co-finanziamento europeo di € 9.974.624
							Il progetto è guidato dalla Regione Emilia Romagna, Direzione Generale cura del territorio e dell’ambiente, e coinvolge 17 partner.

							";
							//$testo=popups($testo);
							print nl2br($testo);
							?>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="map-box"> <!-- Mappa -->
							<div class="map">
								<ul>
									<?php
										$sql = "SELECT * FROM prepair";
										$result = $conn->query($sql);
										$temp=5;
										$num_rows=$result->num_rows;
										if ($num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												$temp=$temp+20/$result->num_rows;
												require '../includes/circle-popup.php';
											}
										} else {
											echo "0 results";
										}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<center>
							<iframe id="pwp" src="https://onedrive.live.com/embed?cid=75468B0096F7F343&amp;resid=75468B0096F7F343%211798&amp;authkey=ANf37dDaNpn0lT4&amp;em=2&amp;wdAr=1.3333333333333333" align="center" frameborder="0">Documento di <a target="_blank" href="https://office.com">Microsoft Office</a> incorporato, con tecnologia <a target="_blank" href="https://office.com/webapps">Office</a>.</iframe>
						</center>
					</div>
				</div>
      </p>
		</main>
		<script>
		$(document).ready(function(){
			var w = $(".col-md-6").width();
			$("#pwp").width(w).height(w);
			$(".map").width(w).height(w);
		});
		$(window).resize(function(){
			var w = $(".col-md-6").width();
			$("#pwp").width(w).height(w/4*3);
			$(".map").width(w).height(w);
		});
		</script>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
