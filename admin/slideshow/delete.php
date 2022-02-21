<?php
	require '../../includes/log.php';
	//Connesione al server
  require '../../includes/dbconnect.php';
	
	//Ritorna il numero della pagina
  if (isset($_GET['pageno'])) {
      $pageno = $_GET['pageno'];
  } else {
      $pageno = 1;
  }
	//Instanziamo il numero di records da visualizzare
  $no_of_records_per_page = 20;
  $offset = ($pageno-1) * $no_of_records_per_page;

	//Numero di Articolo totali e il numero di pagine
  $total_pages_sql = "SELECT COUNT(*) FROM articolo";
  $result = mysqli_query($conn,$total_pages_sql);
  $total_rows = mysqli_fetch_array($result)[0];
  $total_pages = ceil($total_rows / $no_of_records_per_page);

	$sql = "SELECT * FROM articolo
            WHERE IdArt IN (SELECT IdArt FROM articolo_slide)
            ORDER BY data_pubbli desc LIMIT $offset, $no_of_records_per_page";
	$result = $conn->query($sql);
	require '../../includes/var.php';
	$currentPage = 'Elimina slideshow';
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
			<form action="elimina.php" method="post">
			  <fieldset class="form-group">
					<table class="table table-hover">
					  <thead class="thead-dark">
					    <tr>
								<th scope="col"></th>
					      <th scope="col">#</th>
					      <th scope="col">Titolo</th>
					      <th scope="col">Breve Descrizione</th>
					      <th scope="col">Data</th>
					    </tr>
					  </thead>
						<tbody>
						<?php
						if ($result->num_rows > 0) {
							$i=0;
							while($row = $result->fetch_assoc()) {
								print '<tr>
									<td>
										<input type="checkbox" name="checkbox[]" id="checkbox'.($i+$offset).'" value="'.$row["IdArt"].'">
									</th>
						      <th scope="row">'.($i+$offset).'</th>
						      <td>'.$row["Titolo"].'</td>
						      <td>'.$row["breve_descr"].'</td>
						      <td>'.$row["data_pubbli"].'</td>
						    </tr>'."\n";
								$i++;
							}
						}
						$conn->close();
						?>
					  </tbody>
					</table>
			  </fieldset>
				<div class="row">
					<div class="col">
						<label for="invia_uno">Seleziona gli articoli da eliminare nello slideshow</label>
					</div>
					<div class="col-2">
						<input class="btn btn-primary" type="submit"  name="invia_uno" id="invia_uno" value="Elimina"/>
					</div>
				</div>
			</form>
			<ul class="pagination justify-content-center">
		    <li class="page-item">
					<a class="page-link" href="?pageno=1">First</a>
				</li>
		    <li class="<?php echo (($pageno <= 1) ? 'page-item disabled': 'page-item'); ?>">
		    	<a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
		    </li>
		    <li class="<?php echo (($pageno >= $total_pages) ? 'page-item disabled': 'page-item'); ?>">
			    <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
		    </li>
		    <li class="page-item">
					<a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a>
				</li>
			</ul>
		</main>
	</body>
</html>