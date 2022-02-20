<?php
  require '../../includes/log.php';
  //Connesione al server
  require '../../includes/dbconnect.php';

  $IDArt=$_POST['Radios'];
  
  if($IDArt!=null){
    $sql="SELECT * FROM articolo WHERE IdArt =".$IDArt.";";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    mysqli_close($conn);
  }
  require '../../includes/var.php';
	$currentPage = 'Inserimento articoli';
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
		<main class="container-md" role="main">
			<form action="modify_true.php" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="IDArt" id="IDArt" value="<?php echo $IDArt; ?>">
				<div class="form-group">
					<label for="titolo">Titolo</label>
					<input type="text" name="titolo" id="titolo" class="form-control" value="<?php echo $row["Titolo"]; ?>">
				</div>
				<div class="form-group">
					<label for="breve_descr">Breve Descrizione</label>
					<input type="text" name="breve_descr" id="breve_descr" class="form-control" value="<?php echo $row["breve_descr"]; ?>">
				</div>
				<div class="form-group">
					<label for="contenuto">Contenuto</label>
					<textarea name="contenuto" class="form-control" id="contenuto"><?php echo $row["contenuto"]; ?></textarea>
				</div>
				<div class="form-group">
					<label for="fileToUpload">Immagine</label>
			    	<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" value="<?php echo $row["immagine"]; ?>">
			  </div>
				<input class="btn btn-primary" type="submit"  name="invia_uno" value="Modifica"/>
			</form>
		</main>
	</body>
</html>
