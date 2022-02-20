<?php
//Connesione al server
require '../../includes/dbconnect.php';

  if(!$conn){
    echo "Errore nella connessione";
    exit();
  }else{
    echo "connessione a Mysql effettuata con successo<br>";
  }
  if(!$dbname){
    echo "db non presente o mancata selezione";
  }
  echo "db selezionato correttamente<br>";
  $nome_Stato=mysql_escape_string ($_POST['nome_Stato']);
  $sel="select * from stato where nome_Stato ='$nome_Stato'";
  $result = $conn->query($sel);
  if ($result->num_rows > 0) {
  	echo "visualizza stato <br>";
    while($row = $result->fetch_assoc()) {
      $nome_Stato=$row['nome_Stato'];
      $consumo_energia_elettrica=$row['consumo_energia_elettrica'];
      $emissioni_di_co2_per_elettricita=$row['emissioni_di_co2_per_elettricita'];
      echo "$nome_Stato<br>";
      echo "$consumo_energia_elettrica<br>";
      echo "$emissioni_di_co2_per_elettricita<br>";
      echo "<hr>";
    }
  }else{
    echo "errore nella visualizzazione";
  }
  mysqli_close($conn);
?>
