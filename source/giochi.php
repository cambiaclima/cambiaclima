<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Giochi';
?>
<html lang="it">
	<head>
		<?php
          require '../includes/head.php';
          require '../includes/popover.php';
        ?>
	</head>
	<body>
	<div class="bg-image" style="background-image: url('img/back1.jpeg');">
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white" role="main">
            <div id = "header" style:='text-align:center;;'><!--#header, dove c'è il titolo-->
                <h1>Giochi ufficiali targati cambia clima</h1>
            </div>
            <br><br><br>
            <a href='games/pratofiorito/index.html'>gioca a prato fiorito</a> <br><br><br>
            <a href='games/blackjack/newplay.html'>gioca al blackjack</a>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
		</div>
	</body>
</html>
