<link rel="stylesheet" href="/cambiaclima/css/style.css?<?echo filemtime('../css/style.css');?>">


<nav class="navbar navbar-expand-lg header-nav navbar-light fixed-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="/cambiaclima/img/logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-between"  id="navbarResponsive">
		<ul class="navbar-nav ml-auto mb-2 mb-lg-0">
			<?php
				// Define each name associated with an URL pppp
				$dir="/cambiaclima/source/";
				$urls = array(
					'Home' => $dir.'../',
					'Approfondimenti Scientifici' => $dir.'app_scientifici.php',
					'Progetti' => $dir.'#',
					'Strumenti' => $dir.'#',
					'Eventi/News' => $dir.'articoli.php',
					'Chi siamo?' => $dir.'chi_siamo.php',
					'Newsletter' => $dir.'newsletter.php',
					'Area admin' => '/cambiaclima/admin/login.php'
					
				);
				$i=0;
				foreach ($urls as $name => $url) {
					switch($i){
						case 1: print '<li class="nav-item dropdown '.(($currentPage === $name) ? ' active': '').'">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$name.'</a>
								<div class="dropdown-menu">';
								//Connesione al DB
								$hostname="localhost";
								$username="cambiaclima5bi";
								$passwd="";
								$dbname="my_cambiaclima5bi";
								$connessione=mysqli_connect($hostname,$username,$passwd,$dbname);
								if ($connessione->connect_error) {
								die("Connection failed: " . $connessione->connect_error);
								}
								$query = "SELECT * FROM `categoria_approfondimento`;";
								$risultati = $connessione->query($query);
								if ($risultati->num_rows > 0) {
									while($righa = $risultati->fetch_assoc()) {
										print'<a class="dropdown-item" href="'.$url.'?Categoria='.$righa["IdCategoria"].'">'.$righa["nomeCategoria"].'</a>';
									}
								}
								print '</div>
								</li>';
								$connessione->close();
								break;
						case 2: print '<li class="nav-item dropdown '.(($currentPage === $name) ? ' active': '').'">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$name.'</a>
								<div class="dropdown-menu">';
								//Connesione al DB
								$hostname="localhost";
								$username="cambiaclima5bi";
								$passwd="";
								$dbname="my_cambiaclima5bi";
								$connessione=mysqli_connect($hostname,$username,$passwd,$dbname);
								if ($connessione->connect_error) {
								die("Connection failed: " . $connessione->connect_error);
								}
								$query = "SELECT * FROM `categoria_progetto`;";
								$risultati = $connessione->query($query);
								if ($risultati->num_rows > 0) {
									while($righa = $risultati->fetch_assoc()) {
										print'<a class="dropdown-item" href="/cambiaclima/source/'.$righa["nomeCategoria"].'.php">'.$righa["nomeCategoria"].'</a>';
									}
								}
								print '</div>
								</li>';
								$connessione->close();
								break;
						case 3: print '<li class="nav-item dropdown '.(($currentPage === $name) ? ' active': '').'">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$name.'</a>
								<div class="dropdown-menu">';
								//Connesione al DB
								$hostname="localhost";
								$username="cambiaclima5bi";
								$passwd="";
								$dbname="my_cambiaclima5bi";
								$connessione=mysqli_connect($hostname,$username,$passwd,$dbname);
								if ($connessione->connect_error) {
								die("Connection failed: " . $connessione->connect_error);
								}
								$query = "SELECT * FROM `categoria_creazione`;";
								$risultati = $connessione->query($query);
								if ($risultati->num_rows > 0) {
									while($righa = $risultati->fetch_assoc()) {
										print'<a class="dropdown-item" href="/cambiaclima/source/'.$righa["link"].'.php">'.$righa["nomeCategoria"].'</a>';
									}
								}
								print '</div>
								</li>';
								$connessione->close();
								break;
						default: print '<li  class="nav-item'.(($currentPage === $name) ? ' active': '').'">'."\n\t\t\t\t\t\t".
								'<a class="nav-link" href="'.$url.'">'.$name.'</a>'."\n\t\t\t\t\t".
								'</li>'."\n\t\t\t\t\t";
					}
					$i++;
				}
			?>
		</ul>
	</p>
	</div>
</div>
</nav>