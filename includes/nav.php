<link rel="stylesheet" href="/cambiaclima/css/styleNav.css?<?echo filemtime('../css/styleNav.css');?>">
<nav class="navbar navbar-expand-lg sticky-top navbar-light ">
<img src="../img/logo.jpeg" class="img-fluid" alt="Responsive image" width="50" height="50">
	<p id="p1"  class="p1"> CAMBIA CLIMA
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"  id="collapsibleNavbar">
			<ul class="navbar-nav ml-auto text-right">
				<?php
					// Define each name associated with an URL
					$dir="/cambiaclima/source/";
					$urls = array(
						'Home' => $dir.'../',
						'Approfondimenti Scientifici' => $dir.'app_scientifici.php',
						'Calcolo CO2' => $dir.'co2.php',
						'Glossario' => $dir.'glossario.php',
						'Friburgo' => $dir.'friburgo.php',
						'Eventi/News' => $dir.'articoli.php',
						'Crowdfunding' => $dir.'crowdfunding.php',
						'PrepAIR' => $dir.'prepair.php',
						'Chi siamo?' => $dir.'chi_siamo.php',
						'Newsletter' => $dir.'newsletter.php',
						'Giochi' => $dir.'giochi.php',
						'Donut' => $dir.'donut.php',
						'Area admin' => '/cambiaclima/admin/login.php'
					);
					$i=0;
					foreach ($urls as $name => $url) {
						if($i==1){
							print '<li class="nav-item dropdown '.(($currentPage === $name) ? ' active': '').'">
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
							$query = "SELECT * FROM `categoria`;";
							$risultati = $connessione->query($query);
							if ($risultati->num_rows > 0) {
								while($righa = $risultati->fetch_assoc()) {
									print'<a class="dropdown-item" href="'.$url.'?Categoria='.$righa["IdCategoria"].'">'.$righa["nomeCategoria"].'</a>';
								}
							}
							print '</div>
							</li>';
							$connessione->close();
						}else{
							print '<li  class="nav-item'.(($currentPage === $name) ? ' active': '').'">'."\n\t\t\t\t\t\t".
							'<a class="nav-link" href="'.$url.'">'.$name.'</a>'."\n\t\t\t\t\t".
							'</li>'."\n\t\t\t\t\t";
						}
						$i++;
					}
				?>
			</ul>
		</p>
	</div>
</nav>