<?php
require '../../includes/log.php';
//Connesione al server
require '../../includes/dbconnect.php';

$id=$_POST['Radios'];
if($id!=null){
	$sql='SELECT * FROM approfondimento WHERE IdApprofondimento ="'.$id.'";';
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
}
	$currentPage = 'Modifica Approfondimento scientifico';
?>
<html lang="it">
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
    <h2>Inserisci termine:</h2>
		<form action="aggiorna.php" method="post">
			<input type="hidden" name="ID" id="ID" value="<?php echo $id; ?>">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="categoria">Categoria</label>
					<select class="form-control" id="categoria" name="categoria">
						<?php
						$sql2 = "SELECT * FROM `categoria_approfondimento`;";
						$result2 = $conn->query($sql2);
						if ($result2->num_rows > 0) {
							$i=0;
							while($row2 = $result2->fetch_assoc()) {
								print '<option value="'.$row2["IdCategoria"].'">'.$row2["nomeCategoria"].'</option>'."\n";
							}
						}
						$conn->close();
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
				<input type="text" name="titolo" id="titolo" class="form-control"  value="<?php echo $row["titolo"]; ?>">
			</div>
			<div class="form-group">
				<label for="contenuto">Contenuto</label>
				<textarea name="contenuto" class="form-control" id="contenuto"><?php echo nl2br($row["Descrizione"]); ?></textarea>
			</div>
			<input class="btn btn-primary" type="submit"  name="invia_uno" value="Modifica"/>
		</form>
  </main>
  </body>
</html>
