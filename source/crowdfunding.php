<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Prova';
?>
<html lang="it">
	<head>
		<?php
      require '../includes/head.php';
      require '../includes/popover.php';
    ?>
  
    <style>
    video{
      padding: 5%;
      float:right;
      width: 50%;
    }
    @media only screen and (max-width: 768px) {
      video{width: 100%;}
    }
    </style>
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main role="main" class="container-md shadow-sm py-md-3 px-md-5">
      <div id = "title" class = "row">
				<div align = "center" class = "col">
					<h1>Crowdfunding</h1>
				</div><!--conlonna 1 della riga 1-->
			</div><!--Riga 1 -->
      <div class="row">
        <div class="col p-3">
          <video controls>
            <source src="/cambiaclima/video/video_k.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>

          <p class="p-2 approfondimento">
            <?php
              $testo='Il crowdfunding è raccolta fondi di piccole donazioni ma di numerose persone che condividono lo stesso interesse o intendono sostenere un’idea.
              Se siete interessati a sostenere la nostra idea potete visualizzare il nostro progetto su School Raising.
              Il termine crowdfunding deriva dall’inglese "Crowd" (folla) e "Funding" (finanziamento), quindi non è altro che una pratica di finanziamento collettivo, che mobilita molte persone e risorse

              Che cos’è School Raising?
              School Raising è una piattaforma utilizzata dalle scuole italiane per raccogliere fondi online per finanziare un progetto.
              Il nostro progetto puoi trovarlo su <a href="https://schoolraising.it/progetti/cambiaclima5bi"><u>School Raising.</u></a>

              La nostra idea è quella di sostenere il WWF e aiutare i koala che stanno affrontando momenti veramente critici.
              Abbiamo deciso dunque di fare una raccolta fondi e devolvere tutto il ricavato al WWF e nella premiazione dei donatori con borracce in alluminio.';
              $testo=popups($testo);
              print nl2br($testo);
            ?>
          </p>
        </div>
      </div>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
