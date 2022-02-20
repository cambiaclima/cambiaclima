<?php
	//require '../includes/log.php';
	$currentPage = 'Mail Card';
?>
<html lang="it">
<head>
	<?php require '../includes/head.php';?>
</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- Nav -->
		<?php require '../includes/adminNav.php';?>
		<!-- Container -->
		<main class="container-md pt-3" role="main">
			<div class="row row-cols-1 row-cols-lg-3 row-cols-md-2">
			<?php
				$urls = array(
					'NewsLetter' => 'newsletter/',
				);
				
				foreach ($urls as $name => $url) {
					print '<div class="col p-3">
						<div class="card">
						  <div class="card-header shadow-sm">
						    <h5 class="card-title">'.$name.'</h5>
						  </div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">
									<a href="'.$url.'send.php'.'" class="card-link">Invio Personalizzato</a>
								</li>
								<li class="list-group-item">
									<a href="'.$url.'insert.php" class="card-link">Aggiungi</a>
								</li>
								<li class="list-group-item">
									<a href="'.$url.'delete.php" class="card-link">Rimuovi</a>
								</li>
							</ul>
						</div>
					</div>'."\n\t\t\t";
                    
                    
					
                    
                    
				}
                
               
			?>
		</div>
		</main>
	</body>
</html>
