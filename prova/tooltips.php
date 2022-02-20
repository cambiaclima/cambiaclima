<?php require '../includes/var.php';
$metaTags = 'tags da aggiungere';
$currentPage = 'Titolo';
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
			<!-- HTML to write -->
      <?php print popups('prova dei Popups') ?>
	<a href="FileZilla_3.48.1_win64-setup.exe">FileZilla</a>
    </main>
    <!-- Footer -->
    <?php require '../includes/footer.php';?>
  </body>
</html>
