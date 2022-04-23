<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Friburgo';
?>
<html lang="it">
	<head>
		<?php
      require '../includes/head.php';
      require '../includes/popover.php';
    ?>
	<style>
		.flip-card {
		  background-color: transparent;
		  width: 200px;
		  height: 112.5px;
		  perspective: 1000px;
		}

		.flip-card-inner {
		  position: relative;
		  width: 100%;
		  height: 100%;
		  transition: transform 0.6s;
			text-align: center;
			align-items: center;
		  transform-style: preserve-3d;
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		.flip-card:hover .flip-card-inner {
		  transform: rotateY(180deg);
		}

		.flip-card-front, .flip-card-back {
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  -webkit-backface-visibility: hidden;
		  backface-visibility: hidden;
		}

		.flip-card-front {
		  background-color: #bbb;
		  color: black;
		}

		.flip-card-back {
		  background-color: #228B22;
		  color: white;
		  transform: rotateY(180deg);
		}

	</style>
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main role="main" class="container-md shadow-sm py-md-3 px-md-5 pr-sm-1">
			<div id = "title" class = "row">
				<div style="text-align: center;" class = "col-12">
					<h1>Friburgo</h1>
				</div><!--conlonna 1 della riga 1-->
			</div><!--Riga 1 -->
			<div id = "descrizione" class = "row mt-2" id = "row2">
				<div style="text-align: left;" class = "col" id = "descrizionee"><!-- contenuto in questa riga-->
					<p>
						<?php
							$text='Partiamo alla scoperta di questa bellissima cittadina nel cuore della foresta Nera che negli ultimi anni è diventata l’esempio numero uno di turismo della sostenibilità.

							Oggi con il termine turismo sostenibile si intende un insieme di pratiche e scelte che non danneggiano l’ambiente e favoriscono uno sviluppo economico durevole, non danneggiando i processi sociali locali, ma contribuendo al miglioramento della qualità della vita dei residenti.

							È il caso di Friburgo, cittadina nel sud della Germania, che a partire dagli anni ’90 ha iniziato ad ideare un progetto con l’obbiettivo di rendere la città un luogo dove vivere in modo più sostenibile. ';
							print nl2br(popups($text));
						?>
					</p>
				</div><!--conlonna 2 della riga 2-->
			</div><!--Riga 2 -->
			<br><!--spazio tattico-->
			<div class = "row" style="text-align: center;">
				<?php
					$cards= array(
						array(
							'codice' => 'nHKTN6oiFTo',
							'titolo' => 'Vauban introduzione',
							'descrizione' => 'Cosa rende così famoso l’eco-quartiere di Vauban a Friburgo e quali sono le sue caratteristiche fondamentali? Queste domande troveranno risposta all’interno del video, vedere per credere!'
						),
						array(
							'codice' => '4BVgMWA1fpc',
							'titolo' => 'Vauban mobilità',
							'descrizione' => 'In questo secondo video vi verrà spiegato come ci si muove nell’eco-quartiere di Vauban, cosa significa mobilità sostenibile e, lo spazio spazio dedicato agli automobilisti, ai ciclisti e ai pedoni.'
						),
						array(
							'codice' => '5jzf-ggvKnc',
							'titolo' => 'Vauban edilizia',
							'descrizione' => 'All’interno di questo video vedremo quali sono i criteri da rispettare per poter costruire una casa a Vauban e quale è il fabbisogno di un edificio situato nell’eco-quartiere di Friburgo.'
						),
						array(
							'codice' => '4j9ZdzMqbYw',
							'titolo' => 'Vauban casa passiva',
							'descrizione' => 'Il quarto video invece, ci spiegherà che cosa significa casa passiva e quali sono le sue principali caratteristiche.'
						),
						array(
							'codice' => 'nXUjdTgw4N8',
							'titolo' => 'Stadio solare',
							'descrizione' => 'Il quinto video ci porterà allo Schwarzwald Stadion, il primo stadio solare d’Europa, il video ci spiegherà anche cosa significa stadio solare e quali sono le sue caratteristiche.'
						),
						array(
							'codice' => 'QU6pU9wa32M',
							'titolo' => 'Rinaturalizzazione della Dreisam',
							'descrizione' => 'Guardando il video impareremo il significato e l’importanza di naturalizzare corso d’acqua e ne scopriremo gli effetti tramite questo progetto sul fiume Dreisam.'
						),
						array(
							'codice' => 'tGK9jAOdR1Y',
							'titolo' => 'Rieselfeld',
							'descrizione' => 'Nel video riguardo il quartiere di Rieselfed scopriremo come si combatte l’urban sprawl a Friburgo e osa succede quando il piano della mobilità e il piano urbanistico di una città vanno di pari passo.'
						),
						array(
							'codice' => 'WrdVdfRzwYI',
							'titolo' => 'Weingarten',
							'descrizione' => 'In questo video analizzeremo il programma “Weingarten 2020” che punta alla riqualifica del quartiere Weingarten e scopriremo come viene riqualificato un quartiere e quali sono i principali cambiamenti avvenuti a Weingarten.'
						),
						array(
							'codice' => 'eZqiFRAyYJY',
							'titolo' => 'Friburgo città dalle brevi distanze',
							'descrizione' => 'Questo video ci spiegherà perché Friburgo viene anche chiamata la città delle brevi distanze e, cosa significa progettare quartieri che non siano solo “dormitori”.'
						),
						array(
							'codice' => 'P-bx08AHQA4',
							'titolo' => 'Mobilità ciclistica',
							'descrizione' => 'Quest’ultimo video ci spiegherà come, per rendere la mobilità urbana sostenibile ed inclusiva, un mix di regolamentazioni e scelte infrastrutturali sia più efficace che investire in piste ciclabili in sede propria.'
						)
					);
					$length = count($cards);

					//dimensioni delle colonne di ogni singola card
					$col = array();
					for ($i=0; $i<$length; $i++) {
						$col[$i]='col-6 mb-3';
					}
					//visualizzazione lg
					$col=mosaico($col,3,'lg');
					//visualizzazione md
					$col=mosaico($col,2,'md');
					//visualizzazione sm
					$col=mosaico($col,2,'sm');
					$i=0;
					foreach ($cards as $card) {
						print '<div class = "'.$col[$i].'" id = "firstCard">
							<a class="video" data-video="https://www.youtube.com/embed/'.$card['codice'].'" data="'.$card['descrizione'].'" data-toggle="modal" data-target="#videoModal">
									<div class="flip-card">
									  <div class="flip-card-inner">
											<div class="flip-card-front">
												<img src="https://i.ytimg.com/vi/'.$card['codice'].'/mqdefault.jpg" class="img-fluid" alt="'.$card['titolo'].'">
											</div>
											<div class="flip-card-back ">
												<br>
											  <h4 class="align-middle">'.$card['titolo'].'</h4>
											</div>
									  </div>
									</div>
							</a>
						</div><!-- la prima card-->';
						$i++;
					}

					//funzione che sitema le card a mosaico
					function mosaico($array, $ncard, $type){
  					$length=count($array);
						$ncard2=$ncard+1;//n°card secondario
						$cont=0;
						while($length-$cont>0){
							for ($i=0; $i<$ncard; $i++) {
								$array[$cont].=' col-'.$type.'-'.(12/$ncard);
								$cont++;
							}
							$t=$ncard;
							$ncard=$ncard2;
							$ncard2=$t;
						}
						return $array;
					}
				?>
				<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<iframe width="100%" height="350" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="modal-footer">
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id = "row5" class = "row my-4">
				<div  class = "col"><!-- contenuto in questa riga-->
					<p>
						<?php
							$text='A Friburgo il primo passo verso la sostenibilità si è concretizzato con la realizzazione degli edifici green a basso impatto ambientale e con l’introduzione dal 2011 di uno standard di casa passiva per tutti gli edifici residenziali. Grazie all’isolamento termico, le abitazioni di Friburgo sono in grado di risparmiare gran parte del fabbisogno di energia che sarebbe richiesto per riscaldare o raffreddare l’ambiente interno.

							Il mezzo di trasporto principale della città è la bicicletta. La città conta infatti oggi 500 km di pista ciclabile e più di 200 mila biciclette, pari al doppio della quantità delle auto che circolano a Friburgo.

							Infine, la zona della città conosciuta come Village Solar sfrutta le 1800 ore di sole all’anno per generare energia grazie all’uso di 1800 pannelli solari, producendo così più di 4 volte l’energia che consuma. Si tratta del progetto di energia solare più all’avanguardia in Europa. ';
							print nl2br(popups($text));
						?>
					</p>
				</div><!--conlonna 2 della riga 6-->
			</div><!-- riga 6-->
			<div id = "row6" class = "row">
				<div class = "col">
					<a href = "https://viaggiostrasburgo2020.altervista.org/una-friburgo-ecologica" target="_blank">Informazioni tratte dal <u>sito di IV Bi<u></a>
				</div>
			</div>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
		<script>
			$(function() {
			  $(".video").click(function () {
					var theModal = $(this).data("target"),
					videoSRC = $(this).attr("data-video"),
					videoDesc = $(this).attr("data"),
					videoSRCauto = videoSRC + "?modestbranding=1&rel=0&showinfo=0&html5=1&autoplay=1";
					$(theModal + ' iframe').attr('src', videoSRCauto);
					$(theModal + ' p').last().html(videoDesc);
					$(theModal + ' button.close').click(function () {
						$(theModal + ' iframe').attr('src', videoSRC);
					});
			  });
			});
		</script>
	</body>
</html>
