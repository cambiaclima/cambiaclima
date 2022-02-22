
<?php
require '../includes/log.php';
$currentPage = 'Bacheca';
?>

<html lang="it">
<head>
	<?php error_reporting(E_ALL ^ E_WARNING);
	require '../includes/head.php';?>
</head>
<script>
    function logout(){ // SISTEMA LOGIN: PASSO 7
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main-container").innerHTML = '<p style=text-align:center;"> <a href="/cambiaclima/"> Logout eseguito, torna alla home </p></a>'; // SISTEMMA LOGIN: PASSO 9
            }
        };
        xhttp.open("GET", "logout.php");
        xhttp.send();
    }
</script>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- Container -->
		<main class="container-md pt-3" role="main">
			<div class="row row-cols-1 row-cols-lg-3 row-cols-md-2" id="main-container">
			<?php
				$urls = array(
					'Articoli' => 'articoli/',
					'Dati Co2' => 'dati_co2/',
					'Agenti inquinanti' => 'inquinanti/',
					'Glossario' => 'glossario/',
					'Approfondimenti Scientifici' => 'approfondimenti/',
					'SlideShow' => 'slideshow/',
				);

				foreach ($urls as $name => $url) {
					print '<div class="col p-3">
						<div class="card">
						  <div class="card-header shadow-sm">
						    <h5 class="card-title">'.$name.'</h5>
						  </div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<a href="'.$url.'insert.php'.'" class="card-link">Aggiungi</a>
								</li>
								<li class="list-group-item">
									<a href="'.$url.'modify.php" class="card-link">Modifica</a>
								</li>
								<li class="list-group-item">
									<a href="'.$url.'delete.php" class="card-link">Rimuovi</a>
								</li>
							</ul>
						</div>
					</div>'."\n\t\t\t";
				}
			error_reporting(E_ALL ^ E_WARNING);?>

			<p style="text-align:center;"> <a href="/cambiaclima/"> Torna alla home </p></a>
            <input type="button" onclick=logout() value="Logout"> <!-- SISTEMA LOGIN: PASSO 6-->
			<p style="text-align:center;">RICORDARSI DI FARE IL LOGOUT PRIMA DI USCIRE DA QUESTA PAGINA<br>PER EVITARE DI LASCIARE LA SESSIONE APERTA PUBBLICAMENTE</p>
		</div>
		</main>
	</body>
</html>
