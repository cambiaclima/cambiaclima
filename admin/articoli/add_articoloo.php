<?php
  $titolo=mysql_escape_string ($_POST['titolo']);
  $breve_descr=mysql_escape_string ($_POST['breve_descr']);
  $contenuto=mysql_escape_string ($_POST['contenuto']);
  $immagine= preg_replace('/\s+/', '', basename($_FILES["fileToUpload"]["name"]));

  //Connesione al server
  require '../../includes/dbconnect.php';
  
  $sql="INSERT INTO articolo (Titolo,breve_descr,contenuto,immagine,data_pubbli)";
  $sql .="VALUES('$titolo ','$breve_descr','$contenuto','$immagine',CURDATE());";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      exit();
  }
  echo ("Articolo aggiunto");
  //Creazione Cartella
  $sql="SELECT IDArt FROM articolo where Titolo = '".$titolo."' AND breve_descr = '".$breve_descr."' AND contenuto = '".$contenuto."' AND immagine = '".$immagine."' AND data_pubbli = CURDATE();";
  $result = mysqli_query($conn,$sql);
  $IDArt = mysqli_fetch_array($result)[0];
  mkdir('../../articoli/'.$IDArt);
  require 'upload.php';
  require 'generate_page.php';

  mysqli_close($conn);
  header("location: ../bacheca.php");

?>
