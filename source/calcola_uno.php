<?php require '../includes/var.php';?>
<?php
	$metaTags = 'Calcolo CO2 in base allo stato';
	$currentPage = 'Calcolo CO2';
	$aggiuntivo = '<img name="logo" src="../img/img4.jpg" alt="CO2">';
	session_start();
	$_SESSION["stato"]=$_POST["stato"];
?>
<html lang="it">
	<head>
		<?php require '../includes/head.php';?>
  </head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main role="main" class="container container-md">
			<?php
				$hostname="localhost";
				$username="cambiaclima5bi";
				$passwd="";
				$dbname="my_cambiaclima5bi";
				$conn=mysqli_connect($hostname,$username,$passwd,$dbname);
				if(! $conn)
				{
					echo ("errore nella connessione al server");
					exit();
				}
				$select="SELECT * FROM stato order by 'nome_Stato'";
				$ris=mysqli_query($conn,$select);
				if (! $ris)
				{
					echo ("errore nella visualizzazione");
					exit();
				}
				$riga=mysqli_fetch_array($ris, MYSQLI_ASSOC);
				if(! $riga)
				{
					echo ("nessun dato presente nel db");
					exit();
				}
				$variabile="1000";
				while($riga)
				{
					$nome_Stato=$riga['nome_Stato'];
					$consumo_energia_elettrica=$riga['consumo_energia_elettrica'];
					$emissioni_di_CO2_per_elettricita=$riga['emissioni_di_co2_per_elettricita'];
					if($nome_Stato==$_REQUEST["stato"])
					{
              			$linea1 = "<h5>CO2 emessa dalla ".$nome_Stato." per la produzione di elettricità :</h5><wbr> ".$consumo_energia_elettrica*$emissioni_di_CO2_per_elettricita/$variabile." millioni di tonnellate di CO2";
                        $tonnellate=($consumo_energia_elettrica*$emissioni_di_CO2_per_elettricita/$variabile)*1000000;
                        $alberi=$tonnellate/0.03;
                        $linea2 = "<h5>Per assorbire la quantita di CO2 prodotta servono :</h5><wbr>".ceil($alberi)." alberi";
                        $area=$alberi/10000;
                        $raggio=sqrt($area/3.14)*1000;
    					$linea3 = "<h5>Per piantare ".ceil($alberi)." servono :</h5><wbr>".ceil($area)." chilometri quadrati";
                        echo '<p>' . $linea1 . PHP_EOL . $linea2 .PHP_EOL . $linea3.'</p>';
						$json=json_encode($raggio);

					}
					$riga=mysqli_fetch_array($ris, MYSQLI_ASSOC);
				}
				mysqli_close($conn);
			?>
			<p>Il cerchio rosso sulla mappa indica le dimensioni reali necessarie per assorbire la quantita di CO2 prodotta</p>
			<div id="map"></div>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
		<script>
		  var variabile_js = <?php echo($json)?> ;

		  var citymap = {
			  center: {lat: -3.16, lng:-60.03}
		  };

		  function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
			  zoom: 4,
			  center: {lat: -3.16, lng: -60.03},
			  mapTypeId: 'terrain'
			});

			  var cityCircle = new google.maps.Circle({
				strokeColor: '#FF0000',
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: '#FF0000',
				fillOpacity: 0.35,
				map: map,
				center: citymap.center,
				radius: variabile_js
			  });
		  }
		</script>
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbS6kF_t0_nabRsmadCc7TDelh_rzN_Oc&callback=initMap">
		</script>
	</body>
</html>
