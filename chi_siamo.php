<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Chi siamo?';
?>
<html lang="it">
	<head>
		<?php
          require '../includes/head.php';
          require '../includes/popover.php';
        ?>
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white" role="main">
      <div id = "header" align = "center"><!--#header, dove c'è il titolo-->
        <h1>Chi siamo?</h1>
			</div>
      <p class="pl-3 introduzione">
      				  <?php
                      $testo="Siamo una classe di quinta superiore informatica dell'istituto IIS Falcone-Righi
      				  Abbiamo creato questo sito con il progetto di parlare dei Cambiamenti Climatici con 
                      l'obbiettivo di far capire a tutti cosa siano, da cosa sono causati, perchè sono così importanti e
                      che cosa possiamo fare per contrastarli.
                      Inolte abbiamo anche inserito la possibilità di calcolare a seguito di un certo numero di consumi
                      di c02 quanto servirebbe per annullarne l'effetto.
      				  Un altro argomento di cui ci siamo occupati è il crowdfunding e cioè una raccolta fondi per salvare
                      i koala che si stanno estinguendo a causa degli incendi originati dai cambiamenti climatici
                      Inoltre qui sotto potete trovare il link alla nostra app";
                      $testo=popups($testo);
              		  print nl2br($testo);
                      ?>
                      <img src="/img/iconapp.jfif" width="50px" height="auto"/>
      </p>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
