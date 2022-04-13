<?php require '../includes/var.php';
if(isset($_GET['Categoria'])) {
    $IdCategoria = $_GET['Categoria'];
} else {
    exit();
}
require_once '../includes/dbconnect.php';

$sql = "SELECT * FROM approfondimento WHERE IdCategoria='$IdCategoria';";
$result = $conn->query($sql);

$app_scientifici = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $app_scientifici[$row['titolo']] = $row['Descrizione'];
  }
}
$conn->close();

$metaTags = 'tags da aggiungere';
$currentPage = 'Approfondimenti scientifici';
?>
<html lang="it">
  <head>
    <?php
      require '../includes/head.php';
      require '../includes/popover.php';
    ?>
    <link rel="stylesheet" href="../css/styleApprofondimenti.css?<?=filemtime('../css/styleApprofondimenti.css');?>">
  </head>
  <body>

    <!-- Header -->
    <?php require '../includes/header.php';?>
    <!-- NavBar -->
    <?php require '../includes/nav.php';?>
    <!-- Container -->
    <main class="container-md shadow-sm" role="main">

      <div id = "header" align = "center"><!--#header, dove c'è il titolo-->
        <h1>Approfondimenti Scienitfici<h1>
      </div>

      <p class="pl-3"><!--Contenuto della pagina-->
        <div class="row">
            <div class="col-md-3 menu" align="left"><!-- SideBar -->
            	<div class = "row">
                <div class="col">
                  <h3> Menu: navigazione </h3>
                </div>
              </div><!--Riga per il titolo della sezione-->
              <br>
              <div class = "row">
              	<div class="col">
      						<input class="form-control" id="myInput" type="text" placeholder="Inserisci termine" onfocus="this.value=''">
      					</div>
              </div><!--Riga per il form-->
              <br>
              <div class = "row">
                <div class="col" style = "overflow-y:scroll;max-height:400px">
                  <ul class="nav nav-pills" role="tablist" id="myList">
                    <?php
                      $active="active";
                      foreach ($app_scientifici as $titolo => $contenuto) {
                        $codice=preg_replace('/\s+/', '', strtolower ($titolo));
                        print '<li class="nav-item">
                          <a class="nav-link '.$active.'" data-toggle="pill" href="#'.$codice.'">'.$titolo.'</a>
                        </li>';
                        if($active!="")
                          $active="";
                      }
                    ?>
                  </ul>
                </div>
              </div><!--Riga per i termini da cliccare-->
            </div>

            <div class="col-md-8 offset-md-1 mr-1 menu" >
              <!-- Contenuti -->
              <div class="tab-content">
                <?php
                  $active="active";
                  foreach ($app_scientifici as $titolo => $contenuto) {
                    $codice=preg_replace('/\s+/', '', strtolower ($titolo));
                    print '<div id="'.$codice.'" class ="container tab-pane '.$active.'" >
                      <div class="row">
                        <h1>'.$titolo.'</h1>
                        <div class="text">
                          '.nl2br(popups($contenuto)).'
                        </div>
                      </div>
                    </div>';
                    if($active!="")
                      $active="";
                  }
                ?>
              </div>

            </div>

        </div>
      </p>
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
