<?php require '../includes/var.php';?>
<?php
	$metaTags = "Pagina relativa al calcolo dell'a CO2 prodotta da un singolo individuo" ;
	$currentPage = 'Calcolo CO2';
	$aggiuntivo = '<img name="logo" src="../img/img4.jpg" alt="CO2">';
?>
<html lang="it">
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

			<h1>CALCOLA LA CO2 PRODOTTA NEL MONDO E DA TE STESSO</h1>

			<form action="calcola_uno.php" method="Post">
				<label for="stato">Selezione la nazione della quale vorresti calcolare la produzione di CO2</label>
				<div class="form-group row">
					<div class="col-md">
						<select class="form-control" id="stato" name="stato">
							<?php
							//Connesione al server
							$hostname="localhost";
							$username="cambiaclima5bi";
							$passwd="";
							$dbname="my_cambiaclima5bi";

							$conn=mysqli_connect($hostname,$username,$passwd,$dbname);
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
							$sql = "SELECT nome_Stato FROM stato;";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								$i=0;
								while($row = $result->fetch_assoc()) {
									print '<option value="'.$row["nome_Stato"].'">'.$row["nome_Stato"].'</option>'."\n\t\t\t\t\t\t\t";
								}
							}
						  mysqli_close($conn);
							?>
					  </select>
					</div>
					<div class="col-md-1">
						<button type="submit" class="btn btn-primary mb-2" value="Calcola">Calcola</button>
					</div>
				</div>
			</form>

			<h2>Calcola il consumo di CO2 in base ai tuoi comportamenti</h2>
			<p>Inserisci i dati che ritieni opportuni per fare l calcolo della CO2 prodotta da te stesso(solo numeri interi)</p>
			<form action="calcola_due.php" method="get">
				<h5>Tuo consumo di gas naturale in:</h5>
				<div class="form-group row">
					<div class="col-md">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gas_type" id="gas-option_1" value="2.1" checked>
						  <label class="form-check-label" for="inlineRadio1">Metri cubici</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gas_type" id="gas-option_2" value="5.9">
						  <label class="form-check-label" for="inlineRadio2">Centinaia di piedi cubici</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="gas_type" id="gas-option_3" value="0.19">
						  <label class="form-check-label" for="inlineRadio3">kiloWattora</label>
						</div>
					</div>
					<div class="col-md">
						<input name="consumo_gas_naturale" pattern="[^\-]+"
                        #credit_days="ngModel" class="form-control"
                        placeholder="Numero intero positivo" min="0"
                        [(ngModel)]="provider.credit_days"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0 ||
                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <=
                        57" onpaste="return false" type="number" class="form-control" id="gas_naturale">
					</div>
				</div>
				<h5>Risgaldamento a carbone (in Kilogrammi):</h5>
				<div class="form-group row">
					<div class="col-md">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="carbon_type" id="carbon-option_1" value="2.7" checked>
						  <label class="form-check-label" for="inlineRadio1">Carbone di media qualit&agrave</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="carbon_type" id="carbon-option_2" value="2.5">
						  <label class="form-check-label" for="inlineRadio2">Carbone di alta qualit&agrave(antracite)</label>
						</div>
					</div>
					<div class="col-md">
						<input type="number" pattern="[^\-]+"
                        #credit_days="ngModel" class="form-control"
                        placeholder="Numero intero positivo" min="0"
                        [(ngModel)]="provider.credit_days"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0 ||
                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <=
                        57" onpaste="return false" type="number" class="form-control"  id="consumo_carbone" name="consumo_carbone" >
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md">
						<label for="consumo_petrolio">Il tuo consumo per il riscaldamento a petrolio(in litri)</label>
						<input type="number" pattern="[^\-]+"
                        #credit_days="ngModel" class="form-control"
                        placeholder="Numero intero positivo" min="0"
                        [(ngModel)]="provider.credit_days"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0 ||
                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <=
                        57" onpaste="return false" type="number" class="form-control" id="consumo_petrolio" name="consumo_petrolio" >
					</div>
				</div>
				<h5>Consumo di elettricit&agrave annuo (in kWh):</h5>
				<div class="form-group row">
					<div class="col-md">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="electricity_type" id="electricity-option_1" value="0.667" checked>
						  <label class="form-check-label" for="inlineRadio1">Elettricit&agrave convenzionale</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="electricity_type" id="electricity-option_2" value="0.015">
						  <label class="form-check-label" for="inlineRadio2">Elettricit&agrave Verde ( non di origine fossile )Prodotta Domesticamente</label>
						</div>
					</div>
					<div class="col-md">
						<input type="number" pattern="[^\-]+"
                        #credit_days="ngModel" class="form-control"
                        placeholder="Numero intero positivo" min="0"
                        [(ngModel)]="provider.credit_days"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0 ||
                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <=
                        57" onpaste="return false" type="number" class="form-control" id="consumo_electricity" name="consumo_electricity" >
					</div>
				</div>
				<h5>Consumo (in litri) annuo di:</h5>
				<div class="form-group row">
					<div class="col-md">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="fuel_type" id="fuel-option_1" value="2.3" checked>
							<label class="form-check-label" for="inlineRadio1">Benzina</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="fuel_type" id="fuel-option_2" value="2.6">
							<label class="form-check-label" for="inlineRadio2">Diesel</label>
						</div>
					</div>
					<div class="col-md">
						<input type="number" pattern="[^\-]+"
                        #credit_days="ngModel" class="form-control"
                        placeholder="Numero intero positivo" min="0"
                        [(ngModel)]="provider.credit_days"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0 ||
                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <=
                        57" onpaste="return false" type="number" class="form-control" id="consumo_fuel" name="consumo_fuel" >
					</div>
				</div>
				<h3>Inserisci il tuo kilometraggio ( in  kilometri per anno ) a seconda del tuo tipo di auto:</h3>
				<div class="form-group row">
					<div class="col-md">
						<select class="form-control" id="auto_type" name="auto_type">
							<option value="0.16">A benzina piccola fino a motori da 1.4 litri ( 1400 cc )</option>
							<option value="0.19">A benzina media per motori fino a 2.1 litri ( 2100 cc )</option>
							<option value="0.22">A benzina grande oltre i 2.1 litri ( oltre 2100 cc )</option>
							<option value="0.16">A diesel piccola sino a motori da 2.0 litri ( 2000 cc )</option>
							<option value="0.19">A diesel grande con motori oltre 2.0 litri ( oltre 2000 cc )</option>
							<option value="0.17">Auto a GPL</option>
					  </select>
					</div>
					<div class="col-md">
							<input type="number" pattern="[^\-]+"
                        #credit_days="ngModel" class="form-control"
                        placeholder="Numero intero positivo" min="0"
                        [(ngModel)]="provider.credit_days"
                        onkeypress="return (event.charCode == 8 || event.charCode == 0 ||
                        event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <=
                        57" onpaste="return false" type="number" class="form-control" id="consumo_auto" name="consumo_auto">
					</div>
				</div>
				<input class="btn btn-primary" type="submit" id="tasto_uno" name="invia_uno" value="Calcola"/>
			</form>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
