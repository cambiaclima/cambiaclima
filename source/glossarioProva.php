<?php
require '../includes/var.php';
require '../includes/dbconnect.php';
$sql = "SELECT * FROM termine ORDER BY Nome ASC;";
$result = $conn->query($sql);

$termini =array();
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$termini[$row["Nome"]] = $row["descrizione"];
	}
}
$conn->close();
?>

<?php
$metaTags = 'tags da aggiungere';
$currentPage = 'Glossario';
?>

<html lang="it">
  <head>
    <?php require '../includes/head.php';?>
    <link rel="stylesheet" href="../css/stylePage.css?<?=filemtime('../css/stylePage.css');?>">
  </head>
  <body>
    <!-- Header -->
    <?php require '../includes/header.php';?>
    <!-- NavBar -->
    <?php require '../includes/nav.php';?>
    <!-- Container -->
    <main role="main" class="container-md shadow-sm bg-white py-md-3 px-md-3 pr-sm-1">
      <div id = "title" class = "row">
        <div class = "col" align = "center">
          <h1>Glossario</h1>
        </div>
      </div><!--Riga 1 usata peil titolo o intestazioine della pagina-->
      <br>
      <div id = "contenuto" class = "row">
        <div class = "col-4 col-md-3 menu" id = "form_termini" align="left">
          <div class = "row" id = "title_ricerca" align = "center">
            <div class="col">
              <h5>Trova il termine che stai cercando</h5>
            </div>
          </div>
          <div class = "row" id = "ricerca" align = "center"><!--LINK DI RIFERIMENTO PER IL FILTER== https://www.w3schools.com/bootstrap/bootstrap_filters.asp-->
            <div class="col">
              <input class="form-control" id="myInput" type="text" placeholder="Inserisci termine">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col" style = "overflow-y: scroll;height:225px"><!--Grandezza del div dei termini, eventualmente può essere cambiato-->
              <ul class="nav nav-pills" id="myList" role="tablist">
                <?php
                $active = "active";
                $true = "true";
                foreach ($termini as $titolo => $contenuto) {//ciclo utilizzato per il ritrovamento delleinformazioni contenute nel db
                  print '<li class="nav-item" style = "width:100%" align = "center">
										<a class="nav-link '.$active.'" id="'.$titolo.'" data-toggle="pill" href="#'.$titolo.'x" aria-controls="'.$titolo.'" aria-selected="'.$true.'">'.$titolo.'</a>
										</li>';
                  if($active!=""){
                    $active="";
                    $true = "false";
                  }
                }
                ?>
              </ul>
            </div><!-- colonna che contiene lo spazio del form-->
          </div><!-- riga usata per il form di inserimento-->
        </div><!-- colonna usata per inserire l'elenco dei termini -->
        <div class = "col menu" id = "significato" align = "center">
          <div class="tab-content" id="nav-vertical-tabContent">
            <?php
            $active = "show active";
            foreach ($termini as $titolo => $contenuto) {//ciclo utilizzato per il ritrovamento delleinformazioni contenute nel db
              print '<div class="tab-pane p-3 fade '.$active.'" id="'.$titolo.'x" role="tabpanel" aria-labelledby="'.$titolo.'">
								<div id ="'.$titolo.'" style = "padding-top: 15px">
                                	<h4>'.$titolo.'</h4>
									<br>
									<p>'.$contenuto.'</p>
								</div>
								</div>';
              if($active!="")
                $active = "";
            }
            ?>
          </div><!-- significato-->
        </div><!-- colonna usata per inserire il significato del termine selezionato-->
        <div class = "col-md-3" id = "app_space" align = "center" style = 'border: 2px solid #347235; width: 550px'>
          <h4>Chatbot</h4>
          <iframe scrolling="no" src = "chatbot.php"
                  width="510px" height="600px" >
          </iframe>
        </div><!-- colonna usata per inserire l'app -->
      </div><!-- Riga 2 usata per il contenuto-->
    </main>
    <!-- Footer -->
    <?php require '../includes/footer.php';?>
    <script>
      $(document).ready(function(){
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myList li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
  </body>
</html>
