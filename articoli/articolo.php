<?php
//Connesione al server
$hostname="localhost";
$username="cambiaclima5bi";
$passwd="";
$dbname="my_cambiaclima5bi";
$conn=mysqli_connect($hostname,$username,$passwd,$dbname);

if($IDArt!=null){
  //Connesione al server
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql="SELECT * FROM articolo WHERE IdArt =".$IDArt.";";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  mysqli_close($conn);
}
require '../includes/var.php';
$currentPage = $row["Titolo"];
?>
<html lang="it">
  <head>
    <?php require '../includes/head.php';
    require '../includes/popover.php';?>
    <style>
    .immagine{
      height: 250px;
      padding: 20px;
    }
    .row{
      padding: 20px;
    }
    .contenuto{
      min-height: 400px;
    }
    @media only screen and (max-width: 768px) {
      /* For tablets: */
      .immagine {height: 200px;}
      .contenuto {min-height: 250px;}
    }
    </style>
  </head>
  <body>
    <!-- Header -->
    <?php require '../includes/header.php';?>
    <!-- NavBar -->
    <?php require '../includes/nav.php';?>
    <!-- Container -->
    <main class="container-md shadow-sm" role="main">
      <div id = "header" align = "center"><!--#header, dove c'è il titolo-->
        <h1 align = "center"><?php echo popups($row["Titolo"]); ?></h1>
      </div>
      <div class = "row align-items-center">
        <div class="col-lg-4 offset-md-1 immagine" align = "left"><!-- mettere il padding per questioni stilistiche-->
          <?php
          print '<div style="background: url('.$row["IdArt"].'/'.$row["immagine"].') no-repeat center;
          background-size:cover;"
          class="card-img-top w-100 h-100">
          </div>';
          ?>
        </div><!-- Colonna 1 riga 3-->
        <div class="col-lg-7" id = "spazio_sottotitolo" align = "center">
          <h5><?php echo popups($row["breve_descr"]); ?></h5>
        </div><!-- Colonna 3 riga 3-->
      </div><!-- Row 3 -->
      <div class = "row align-items-center contenuto">
        <div class = "col-lg-10 offset-md-1 " id = "spazio_testo_articolo"><!-- altro spazio tattico per il corpo dell'articolo -->
          <p>
            <?php $contenuto=popups($row["contenuto"]);
            print nl2br($contenuto);;
            ?>
          </p>
        </div><!--Colonna 2 riga 4-->
      </div>
      <div class = "row justify-content-md-center">
        <div class="col-xs-2 " align = "center">
          <form action="step_intermedio.php" method="Post" style="border-radius: 10px 0 0 10px;">
            <input class="d-none" name="pagina" value="0">
            <input class="d-none" name="IDArt" value="<?php echo $IDArt; ?>">
            <button type="submit" class="btn btn-success" id = "b_precedente">Precedente</button>
          </form>
        </div>
        <div class="col-xs-auto offset-sm-1" align = "center">
          <form action="step_intermedio.php" method="Post" style="border-radius: 0;">
            <input class="d-none" name="pagina" value="0">
            <input class="d-none" name="IDArt" value="<?php echo $IDArt; ?>">
            <button type="submit" class="btn btn-success" id = "b_articlo">Articoli</button>
          </form>
        </div>
        <div class="col-xs-2 offset-sm-1" align = "center">
          <form action="step_intermedio.php" method="Post" style="border-radius: 0 10px 10px 0;">
            <input class="d-none" name="pagina" value="2">
            <input class="d-none" name="IDArt" value="<?php echo $IDArt; ?>">
            <button type="submit" class="btn btn-success" id = "b_successivo">Successivo</button>
          </form>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <?php require '../includes/footer.php';?>
  </body>
</html>
