<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Snake cambiaclima</title>
  <link rel="stylesheet" href="./style.css">
 
</head>
<body class="container" style="color:white">		
	<div class="container fluid"> <h1 style="color:white; text-align: center;">Mangia tutte le molecole di CO2 per convertirle in ossigeno e salvare il pianeta</h1><br> 
	<h2 style="color:white; text-align: center;">Usa le frecce della tastiera per iniziare una partita e per muoverti</h2><br>
	<div class="col-sm">
  	<div class="row">
		<form action="db_punteggio.php" method="POST" name="pointsDB">
				<input type="text" name="player_name" id="name_box"  class="form-control" value="inserisci il tuo nome (senza spazi)"><br>
				<input type="button" value="ottieni il tuo punteggio" class="btn btn-secondary btn-sm" onclick="getScore()">
				<input type="text" name="player_score" id="score_box" class="btn btn-secondary btn-sm"   value="0" readonly><br>
				<input type="submit" value="salva il tuo punteggio"><br><br>

				<a href="points_history.php" target="_blank" style="color:white"> clicca per vedere la classifica dei miglior punteggi</a>
		</form>

	<div>
	
	<div class="row">
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