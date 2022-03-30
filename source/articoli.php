<?php
if (isset($_POST["giorno"])){
	$giorno=$_POST["giorno"];
	if($giorno=="Giorno")
		$giorno="%";
}else
	$giorno="%";
if (isset($_POST["mese"])){
	$mese=$_POST["mese"];
	if($mese==0)
		$mese="%";
}else
	$mese="%";
if (isset($_POST["anno"])){
	$anno=$_POST["anno"];
	if($anno=="Anno")
		$anno="%";
}else
	$anno="%";
//Connesione al server
require '../includes/dbconnect.php';

//Ritorna il numero della pagina
if (isset($_GET['pageno'])) {
	$pageno = $_GET['pageno'];
} else {
	$pageno = 1;
}
//Instanziamo il numero di records da visualizzare
$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page;

//Numero di Articolo totali e il numero di pagine
$total_pages_sql = "SELECT COUNT(*) FROM articolo";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
$data= '"'.$anno.'-'.(($mese<10) ? "0".$mese : $mese).'-'.$giorno.'"';

require '../includes/var.php';

$currentPage = 'Articoli';
$metaTags = 'Visualizzazione degli articoli';
?>
<html lang="it">
	<head>
		<?php require '../includes/head.php';?>
		<style>
		.card{
			background-color: rgba(0, 0, 0, 0.2);
			border-radius: 20px;
		}
		.immagine{
			height: 250px;
		}
		.articoli{
			margin-bottom: 20px;
		}
		@media only screen and (max-width: 768px) {
			/* For tablets: */
			.immagine {height: 200px;}
		}
		</style>
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md" role="main">
			<div id = "header" align = "center"><!--#header, dove c'è il titolo-->
				<h1>Eventi news</h1>
			</div>
			<div class = "row align-items-center">
				<div class="col-md articoli" align = "left" id = "filtra"><!--occupa 2 su 12  -->
					<form action="articoli.php" method="POST">
						<h5 align = "center">Scegli la data:</h5>
						<div class="col-md" >
							<select class="form-control" id="giorno" name="giorno" >
								<?php
								// Define the days
								$giorni = array(
									"Giorno","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"
								);
								foreach ($giorni as $giornox) {
									print '<option value="'.$giornox.'"'.(($giornox==$giorno) ? "selected" : "").'>'.$giornox.'</option>'."\n\t\t\t\t\t\t\t";
								}
								?>
							</select>
						</div><br><!--#Giorno select-->
						<div class="col-md">
							<select class="form-control" id="mese" name="mese">
								<?php
								// Define the months
								$mesi = array(
									"Mese","Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre"
								);
								$i=0;
								foreach ($mesi as $mesex) {
									print '<option value="'.$i.'"'.(($i==$mese) ? "selected" : "").'>'.$mesex.'</option>'."\n\t\t\t\t\t\t\t";
									$i++;
								}
								?>
							</select>
						</div><br><!--#Mese select-->
						<div class="col-md">
							<select class="form-control" id="anno" name="anno">
								<?php
								// Define the years
								$anni = array(
									"Anno","2020","2019","2018"
								);
								foreach ($anni as $annox) {
									print '<option value="'.$annox.'"'.(($annox==$anno) ? "selected" : "").'>'.$annox.'</option>'."\n\t\t\t\t\t\t\t";
								}
								?>
                                SELCT* FROM articolo WHERE data_pubbli
							</select>
						</div><!--#Anno select-->
						<br><div id = "searchb" align = "center">
							<button type="submit"  class="btn btn-success" >Cerca</button>
						</div><!--Bottone per la ricerca-->
					</form>
				</div><!--Colonna 1-->
				<?php
                $sql = "SELECT * FROM articolo WHERE data_pubbli LIKE $data LIMIT $offset, $no_of_records_per_page ;";
                $result = $conn->query($sql);

				if ($result->num_rows > 0) {
					$i=0;
					$offset=1;
					while($row = $result->fetch_assoc()) {
						if ($i!=0) {
							if($i%2!=0)
								$offset=1;
							else
								$offset=3;
						}
						print '<div class="col-md-8 offset-md-'.$offset.' articoli">
							<div class="card mb-3 shadow-sm" >
								<div class="row no-gutters position-relative">
									<div class="col-md-6 col-lg-5 mb-md-0 p-md-4  immagine">
										<div style="background: url(/cambiaclima/articoli/'.$row["IdArt"].'/'.$row["immagine"].') no-repeat center;
																background-size:cover;" class="card-img-top w-100 h-100">
										</div>
									</div>
									<div class="col-md-6 col-lg-7 position-static p-4 pl-md-0">
										<div class="card-body">
										<tbody>
									    <tr>
									      <td class="align-baseline">
													<h5 class="card-title">'.$row["Titolo"].'</h5>
												</td>
									      <td class="align-top">
												</td>
									      <td class="align-middle">
													<p class="card-text align-items-center">'.$row["breve_descr"].'</p>
												</td>
									      <td class="align-top">
													<p class="card-text align-text-top"><small class="text-muted">Ultimo aggiornamento: '.$row["data_pubbli"].'</small></p>
												</td>
												<td class="align-bottom">
													<a href="/cambiaclima/articoli/'.$row["IdArt"].'.php" class="stretched-link"></a>
												</td>
									    </tr>
									  </tbody>
										</div>
									</div>
								</div>
							</div>
						</div>'."\n";
						$i++;
						if($i==10)
							break;
					}
				}else{
					print '<div class="alert alert-info alert-dismissible fade show" role="alert">
					<strong>Non ci sono articoli nel database!</strong> Riprovare pi&ugrave tardi.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>';
				}
				$conn->close();
				?>
				<div class="col-md-1"></div>
			</div>

		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
