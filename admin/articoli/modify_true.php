<?php
	$IDArt = $_POST ['IDArt'];
	$Titolo = $_POST['titolo'];
    $breve_descr = $_POST['breve_descr'];
    $contenuto = $_POST['contenuto'];
    $immagine = preg_replace('/\s+/', '', basename($_FILES["fileToUpload"]["name"]));

		//Connesione al server
	  require '../../includes/dbconnect.php';

	$sql= "SELECT immagine FROM articolo WHERE IdArt=".$IDArt .";";
    $result = $conn->query($sql);
    $imgvecchia = mysqli_fetch_array($result)[0];



    $sql = 'UPDATE articolo SET Titolo="'. $Titolo .'", breve_descr="'.$breve_descr .'", CONTENUTO="'.$contenuto .'", immagine="'.$immagine .'" WHERE IdArt='.$IDArt .';';
	if ($conn->query($sql) === TRUE) {
    echo "Record modified";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      exit();
  }
   mysqli_close($conn);
  if($immagine!=null||$immagine!=""){
  	if($imgvecchia==null||$imgvecchia==""){
    	require 'upload.php';
    }else if($immagine!=$imgvecchia){
      $myFile = "../../articoli/".$IDArt."/".$imgvecchia;
      echo $myFile;
      unlink($myFile);
      require 'upload.php';
    }
  }
  require 'generate_page.php';

  header("location: ../bacheca.php");
  echo ("Articolo modificato");
?>
