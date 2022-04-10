<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Snake cambiaclima</title>
  <link rel="stylesheet" href="./style.css">
  <style>
            table{
                border: 1px solid;
                text-align: center;
                padding: 15px;
                margin-left: auto;
                margin-right: auto;
            }
            td, tr{
                border: 1px solid;
            }
            tr:hover {background-color: coral;}
    </style>
</head>
<body style="color:white">		
	<h1 style="color:white; text-align: center;">Mangia tutte le molecole di CO2 per convertirle in ossigeno e salvare il pianeta</h1><br> 
	<h2 style="color:white; text-align: center;">Usa le frecce della tastiera per iniziare una partita e per muoverti</h2><br>
	<div>
		<form action="db_punteggio.php" method="POST" name="pointsDB">
				<input type="text" name="player_name" id="name_box" style="width:200px; text-align:center;" value="inserisci il tuo nome (senza spazi)"><br>
				<input type="button" value="ottieni il tuo punteggio" onclick="getScore()">
				<input type="text" name="player_score" id="score_box" style="width:20px; text-align:center;" value="0" readonly><br>
				<input type="submit" value="salva il tuo punteggio"><br><br>

				<a href="points_history.php" target="_blank" style="color:white"> clicca per vedere la classifica dei miglior punteggi</a>
		</form>
	<div>
	<div>
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

		print '	
					<table id="score_history">
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
	</div>
	<div class="container">
	<header>
		<div class="contrast">100%</div>
		<div class="score" id="points">0</div>
	</header>
	<div class="grid"></div>
	<footer></footer>
	</div>
  	<script  src="./script.js"></script>
	<script>
		function getScore(){
			var points = document.getElementById('points').textContent;
			var scorePHP = document.forms['pointsDB']['score_box'];
			scorePHP.setAttribute('value', points);
		}

	</script>
</body>
</html>