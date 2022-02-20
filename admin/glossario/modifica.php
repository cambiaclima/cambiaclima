<?php
require '../../includes/log.php';
//Connesione al server
require '../../includes/dbconnect.php';

$nome=$_POST['Radios'];
if($nome!=null){
	$sql='SELECT * FROM termine WHERE Nome ="'.$nome.'";';
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	mysqli_close($conn);
}
	$currentPage = 'Modifica Termini Glossario';
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
			<input type="hidden" name="ID" id="ID" value="<?php echo $nome; ?>">
      <div class="form-group">
        <label for="nome">Nome del termine</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $row["Nome"]; ?>">
      </div>
      <div class="form-group">
        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione" class="form-control" value="<?php echo $row["descrizione"]; ?>">
      </div>
      <input class="btn btn-primary" type="submit" value="inserisci"/>
    </form>
  </main>
  </body>
</html>
