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
                      A questo proposito un ottimo modello è la soluzione che ha adottato la città di Friburgo.
                      Inolte abbiamo anche inserito la possibilità di calcolare a seguito di un certo numero di consumi
                      di c02 quanto servirebbe per annullarne l'effetto.
      				  Un altro argomento di cui ci siamo occupati è il crowdfunding e cioè una raccolta fondi per salvare
                      i koala che si stanno estinguendo a causa degli incendi originati dai cambiamenti climatici
                      Inoltre qui sotto potete trovare il link alla nostra app";
                      $testo=popups($testo);
              		  print nl2br($testo);
                      ?>
      </p>
      		<a href="CO2Tracker.apk">
              <img src="/cambiaclima/img/iconapp.jfif" height="100px" style="
                  height: 150px;
              ">Scarica APK
            </a>
              <p><?php print nl2br('1. Clicca su "scarica APK" dal tuo dispositivo mobile. Il download avverrà in automatico.
2. Una volta scaricato il file, basta aprirlo per far partire'." l'installazione. (P.S. il file è sicuro)
3. Divertiti!");?></p>
            <div class="alert alert-warning fade show" role="alert">
              <strong>Attenzione! </strong> Questa applicazione necessita del sistema operativo Android 6 o superiori. Controlla se il tuo dispositivo è adatto prima di scaricare il file.
            </div>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
