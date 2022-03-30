<?php
	require '../../includes/log.php';
	//Connesione al server
	require '../../includes/dbconnect.php';
	$currentPage = 'Inserimento Approfondimento scientifico';
?>
<html lang="it">
<link rel="stylesheet" href="/cambiaclima/css/styleInsert.css">
<head>
	<?php require '../../includes/head.php';?>
</head>
	<body>
		<!-- Header -->
		<?php require '../../includes/header.php';?>
		<!-- Nav -->
		<?php require '../../includes/adminNav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white pt-3" role="main">
			<form action="add_approfondimento.php" method="post">
				<div class="form-row">
			    <div class="form-group col-md-4">
						<label for="categoria">Categoria</label>
						<select class="form-control" id="categoria" name="categoria">
							<?php
							require '../../includes/dbconnect.php';
							$sql = "SELECT * FROM `categoria`;";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								$i=0;
								while($row = $result->fetch_assoc()) {
									print '<option value="'.$row["IdCategoria"].'">'.$row["nomeCategoria"].'</option>'."\n\t\t\t\t\t\t\t";
								}
							}
							$conn->close();
							mysqli_close($conn);
							?>
						</select>
			    </div>
			    <div class="form-group col-md-2 offset-md-1">
			      <label>altrimenti</label>
			    </div>
			    <div class="form-group col-md-4 offset-md-1">
			      <label for="newCategoria">Nuova Categoria</label>
			      <input type="text" class="form-control" id="newCategoria"  name="newCategoria">
			    </div>
			  </div>
				<div class="form-group">
					<label for="titolo">Titolo</label>
					<input type="text" name="titolo" id="titolo" class="form-control" >
				</div>
				<div class="form-group">
					<label for="contenuto">Contenuto</label>
					<textarea name="contenuto" class="form-control" id="contenuto"></textarea>
				</div>
				<input class="btn btn-primary" type="submit"  name="invia_uno" value="inserisci"/>
			</form>
		</main>
	</body>
</html>
