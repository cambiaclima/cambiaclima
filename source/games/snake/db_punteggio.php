<?php require "../../../includes/dbconnect.php";
$name = $_POST["player_name"];
$points = $_POST["player_score"];
$sql = "INSERT INTO punteggio_snake(nome_giocatore, punteggio) VALUES ('$name', '$points');";
if ($conn->query($sql) === TRUE) {
    echo "dati aggiunti con successo";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
header("Location: ../snake/index.php");
?>
