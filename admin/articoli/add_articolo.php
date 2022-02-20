<?php
  require '../escape.php'; 

  //Connesione al server
  $dbServerName = "localhost";
  $dbUserName = "cambiaclima5bi";
  $dbPassword = "";
  $dbName = "my_cambiaclima5bi";
  $conn= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName) or die('Unable to establish a SQL connection');
  $conn->set_charset("utf8");

  $titolo=$_POST['titolo'];
  $breve_descr=$_POST['breve_descr'];
  $contenuto=$_POST['contenuto'];
  $immagine= preg_replace('/\s+/', '', basename($_FILES["fileToUpload"]["name"]));



  $sql="INSERT INTO articolo (Titolo,breve_descr,contenuto,immagine,data_pubbli)";
  $sql .="VALUES('$titolo','$breve_descr','$contenuto','$immagine',CURDATE());";
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
  mkdir('/cambiaclima/articoli/'.$IDArt);
  require 'upload.php';

  // require generate page
  $myfile = fopen("cambiaclima/admin/articoli/".$IDArt.".php", "w") or die("Unable to open file!");
  $txt = '<?php $IDArt='.$IDArt.';?>';
  fwrite($myfile, $txt);
  $txt = '<?php require "blank_article.php";?>';
  fwrite($myfile, $txt);
  fclose($myfile);

  mysqli_close($conn);
  header("location: ../bacheca.php");

/*include_once '../dballmail.php';
require("cambiaclima/mail/SendGrid/sendgrid-php.php");
use SendGrid\Mail\To;
use SendGrid\Mail\Personalization;
$email = new \SendGrid\Mail\Mail();
$email->setFrom("mirtdavide@gmail.com");
$email->setSubject("Pubblicazione nuovo Articolo");

foreach ($mails as $item){
$personalization = new Personalization();
$personalization->addTo(new To($item));
$email->addPersonalization($personalization);
}


$email->addContent(
    "text/html", "<html>
    <body>
    <header>
    <p>Abbiamo pubblicato un nuovo articolo che si chiama: $titolo</p>
    </header>
    <main>
  	<p>Vallo a vedere cliccando</p>
  	<p><a href=\"http://cambiaclima5bi.altervista.org/articoli/$IDArt.php\">Qui<br></a></p>
	</main>
    </body>
    <footer>
  	<p>Per non ricevere più mail dal nostro sito vai qui:</p>
  	<p><a href=\"http://cambiaclima5bi.altervista.org/mail/unsubscribe.php\">Disiscriviti</a></p>
	</footer>
    </html>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    /*print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    //header('Location: ../index.php');
	
} catch (Exception $e) {
    //echo 'Caught exception: '. $e->getMessage() ."\n";
}*/





?>
