<?php require '../includes/var.php';
	require '../includes/dbconnect.php';
	$sql = "SELECT * FROM argomenti_prepair;";
	$result = $conn->query($sql);
	
	$prepair = array();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$prepair[$row['nomeCategoria']] = $row['Contenuto'];
		}
	}
	$conn->close();
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
		<link rel="stylesheet" href="../css/styleApprofondimenti.css?<?=filemtime('../css/styleApprofondimenti.css');?>"> 	
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm" role="main">

			<div id = "header" align = "center"><!--#header, dove c'è il titolo-->
			<h1>PrepAIR<h1>
			</div>

			<p class="pl-3"><!--Contenuto della pagina-->
			<div class="row">
				<div class="col-md-3 menu" align="left"><!-- SideBar -->
					<div class = "row">
					<div class="col">
						<h3> Scegli l'argomento: </h3>
					</div>
					</div><!--Riga per il titolo della sezione-->
					<br>
					<div class = "row">
						<div class="col">
							<input class="form-control" id="myInput" type="text" placeholder="Inserisci termine">
						</div>
					</div><!--Riga per il form-->
					<br>
					<div class = "row">
					<div class="col" style = "overflow-y:scroll;max-height:400px">
						<ul class="nav nav-pills" role="tablist" id="myList">
						<?php
							$active="active";
							foreach ($prepair as $nomeCategoria => $Contenuto) {
							$codice=preg_replace('/\s+/', '', strtolower ($nomeCategoria));
							print '<li class="nav-item">
								<a class="nav-link '.$active.'" data-toggle="pill" href="#'.$codice.'">'.$nomeCategoria.'</a>
							</li>';
							if($active!="")
								$active="";
							}
						?>
						</ul>
					</div>
					</div><!--Riga per i termini da cliccare-->
				</div>

				<div class="col-md-8 offset-md-1 mr-1 menu" >
					<!-- Contenuti -->
					<div class="tab-content">
					<?php
						$active="active";
						foreach ($prepair as $nomeCategoria => $Contenuto) {
							$codice=preg_replace('/\s+/', '', strtolower ($nomeCategoria));
							print '<div id="'.$codice.'" class ="container tab-pane '.$active.'" >
								<h3>'.$nomeCategoria.'</h3>
								<div class="row">
								<div class="text">
									'.nl2br(popups($Contenuto)).'
								</div>
								</div>
							</div>';
							if($active!="")
								$active="";
						}
					?>
					</div>
				</div>
			</div>
			</p>
		</main>
	<!-- Footer -->
	<?php require '../includes/footer.php';?>
	<script>
	$(document).ready(function(){
		$("#myInput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myList li").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
	</script>
</body>
</html>
