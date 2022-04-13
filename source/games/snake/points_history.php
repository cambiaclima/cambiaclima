<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Giochi';
?>
<?php
require '../../../includes/var.php';
require "../../../includes/dbconnect.php";
$sql = "SELECT * FROM punteggio_snake ORDER BY punteggio DESC";
$result = $conn->query($sql) or die($conn->error);
	
$points = array();
while($row = $result->fetch_assoc()) {
    $points[$row['nome_giocatore']] = $row['punteggio'];
}
$conn->close();
?>
<html lang="it">
	<head>
		<?php
          require '../../../includes/head.php';
          require '../../../includes/popover.php';
        ?>
        <style>
           
            tr:hover {background-color: green;}
        </style>
	</head>
	<body>
		<!-- Header -->
		<?php require '../../../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../../../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm" role="main">
            <?php 
                print '	
                <table class="table table-dark rounded" id="score_history">
                    <tr>
                        <td>Nome giocatore</th>
                        <td>Punti</th>
                    </tr>';
                foreach ($points as $nome_giocatore => $punteggio) {
                    print '
                        <tr>
                            <td>'.$nome_giocatore.'
                            <td>'.$punteggio.'
                        </tr>
                    ';          
                }
                print '</table>';
            ?>
		</main>
		<!-- Footer -->
		<?php require '../../../includes/footer.php';?>
	</body>
</html>
