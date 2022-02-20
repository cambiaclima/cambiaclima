<?php require '../includes/var.php';?>
<?php
	$metaTags = 'Calcolo CO2 in modo semplice';
	$currentPage = 'Calcolo CO2';
	$aggiuntivo = '<img name="logo" src="../img/img4.jpg" alt="CO2" >';
	$_SESSION["gas_type"] = $_POST["gas_type"];
	$_SESSION["consumo_gas_naturale"] = $_POST["consumo_gas_naturale"];
	$_SESSION["carbon_type"] = $_POST["carbon_type"];
	$_SESSION["consumo_carbone"] = $_POST["consumo_carbone"];
	$_SESSION["consumo_petrolio"] = $_POST["consumo_petrolio"];
	$_SESSION["consumo_electricity"] = $_POST["consumo_electricity"];
	$_SESSION["electricity_type"] = $_POST["electricity_type"];
	$_SESSION["consumo_fuel"] = $_POST["consumo_fuel"];
	$_SESSION["fuel_type"] = $_POST["fuel_type"];
	$_SESSION["auto_type"] = $_POST["auto_type"];
	$_SESSION["consumo_auto"] = $_POST["consumo_auto"];
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
  		<main class="container-md shadow-sm bg-white" role="main">
    			<?php
    			session_start();
    			$risultato =  ((float) $_REQUEST["consumo_gas_naturale"] * (float) $_REQUEST["gas_type"])+
                  			  ((float) $_REQUEST["consumo_carbone"] * (float) $_REQUEST["carbon_type"])+
    						  ((float) $_REQUEST["consumo_petrolio"] * 3.2) +
    						  ((float) $_REQUEST["consumo_electricity"] * (float) $_REQUEST["electricity_type"]) +
    						  ((float) $_REQUEST["consumo_fuel"] * (float) $_REQUEST["fuel_type"]) +
    						  ((float) $_REQUEST["consumo_auto"] * (float) $_REQUEST["auto_type"]);

                $tonnellate=$risultato/1000;
                $alberi=$tonnellate/0.03;
    			$linea1 = "<h5>Hai prodotto :</h5><wbr>" . $risultato. " kg di CO2"." oppure ". $tonnellate ." Tonnellate";
    			$linea2 = "<h5>Gli alberi neccessari per assorbire la quantita di CO2 prodotto sono :</h5><wbr>" .$alberi;
                $area=$alberi/10000;
                $raggio=sqrt($area/3.14)*1000;
                $linea3 = "<h5>La superfice necessaria per gli alberi è di:</h5><wbr>" .$area." km^2" ;
    			echo '<p>' . $linea1 . PHP_EOL . $linea2 .PHP_EOL . $linea3.'</p>';
    			$json=json_encode($raggio);
    			?>
    		<p>Il cerchio rosso sulla mappa indica le dimensioni reali necessarie per assorbire la quantita di CO2 prodotta</p>
    		<div id="map">
        </div>
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
