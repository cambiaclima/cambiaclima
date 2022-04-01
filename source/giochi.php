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
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm" role="main">
            <div id = "header" style:='text-align:center;;'><!--#header, dove c'è il titolo-->
                <h1>Giochi ufficiali targati cambia clima</h1>
            </div>
            <br><br><br>
            <a href='games/pratofiorito/index.html'>gioca a prato fiorito</a> <br><br><br>
            <a href='games/blackjack/newplay.html'>gioca al blackjack</a> <br><br><br>
            <a href='games/snake/index.php'>gioca a snake</a>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
