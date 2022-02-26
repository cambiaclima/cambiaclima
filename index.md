<?php
	require 'includes/var.php';
	$currentPage = 'Home';
?>
<html lang="it">
<head>
	<?php require 'includes/head.php';?>
</head>
	<body>
		<!-- Header -->
		<?php require 'includes/header.php';?>
		<!-- NavBar -->
		<?php require 'includes/nav.php';?>
		<!-- Main -->
		<main class="container-md" role="main">
			<div class="row" >
				<div class="col shadow-sm bg-white mr-2 p-3">
					<!-- Slides -->
					<?php
					//Connessione al server

						require 'includes/dbconnect.php';
					$sqlquery= 'SELECT IdArt,Titolo,immagine,breve_descr FROM articolo
                    WHERE Idart IN (SELECT IdArt FROM articolo_slide)
                    ORDER BY data_pubbli desc;';
					$result = mysqli_query($conn, $sqlquery);
					$num_rows= mysqli_num_rows($result);
					if($result->num_rows > 0){
						print '<div id="carouselExampleCaptions" class="carousel slide" style="height:300px" data-ride="carousel">
							<ol class="carousel-indicators">'."\n";
						$active = "";
						for ($i=0; $i<$num_rows; $i++){
							if($i>0)
								$active = "";
							else
								$active = 'class="active"';
							print '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'"'.$active.'></li>'."\n";
						}
						print '</ol>
							<div class="carousel-inner shadow-sm">'."\n";
						for ($i=0; $i<$num_rows; $i++){
							$row = $result->fetch_assoc();
							if($i>0)
								$active = "";
							else
								$active = 'active';
							print '<div class="carousel-item '.$active.'">
								<div style="background: url(articoli/'.$row["IdArt"].'/'.$row["immagine"].') no-repeat center;
									background-size:cover;" class="d-block w-100 h-100" alt="...">
								</div>
								<div class="carousel-caption d-none bg-dark d-md-block text-white">
									<a href="articoli/'.$row["IdArt"].'.php"><h5>'.$row["Titolo"].'</h5></a>
									'.$row["breve_descr"].'
								</div>
							</div>'."\n";				
						}
						print '</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>'."\n";
					}
					$conn->close();
					?>

				
				<div class="row-lg-3" style="margin-top:30px">
					<h2><p>Ultime Notizie</h2></p>
					<div class="row row-cols-1 row-cols-md-1">
				<?php
					//Connesione al server
					require 'includes/dbconnect.php';

					$sql = "SELECT * FROM articolo ORDER BY data_pubbli desc";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						$i=0;
						while($row = $result->fetch_assoc()) {
							print '	<div class="card mb-3 shadow-sm">
									<a href="/cambiaclima/articoli/'.$row["IdArt"].'.php">
									<div class="row no-gutters">
										<div class="col-sm-8">
										<div class="card-body">
										<h5 class="card-title">'.$row["Titolo"].'</h5>
										<p class="card-text">'.$row["breve_descr"].'</p>
										<p class="card-text"><small class="text-muted">Ultimo aggiornamento: '.$row["data_pubbli"].'</small></p>
									</div>
									</div>
									<div class="col-sm-4">
									<div style="background: url(articoli/'.$row["IdArt"].'/'.$row["immagine"].') no-repeat center;
										background-size:cover;" class="card-img-top w-100 h-100"></div>
									</div>
									</div>
									</a>
									</div>';
							$i++;
							if($i==3) break;
						}
					} else {
						print '<div class="alert alert-info alert-dismissible fade show" role="alert">
									<strong>Non ci sono articoli nel database!</strong> Riprovare pi&ugrave tardi.
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>';
					}
				?>
				<!-- $sqlquery= 'SELECT mail FROM newsletter;';
				$result = mysqli_query($conn, $sqlquery);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck > 0){
				while($row = mysqli_fetch_array($result)){
					$mails[] = $row['mail'];}
				}
				$conn->close();
				?> -->
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Footer -->
		<?php require 'includes/footer.php';?>


	</body>
</html>
