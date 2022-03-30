<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Newsletter';
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
            <div class="jumbotron text-right rounded-0 align-bottom" style="margin-bottom:0; background-color: #f2f2f2;">
                <div class="row">
                    <div class="col">
						<p class="text-justify">Iscriviti alla nostra newsletter per non perderti nessun articolo!</p><br><br><br>
                        <form class="form-inline my-2 my-lg-0" method="POST" action="cambiaclima/mail/mailformstart.php">
                            <input class="form-control w-75 mr-md-2" name="email" type="email" placeholder="Inserisci qui la tua mail per aderire alle newsletter" aria-label="Aderisci" style="width:800px">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="aderisci">Aderisci</button>
                        </form>
                    </div>
                </div>
            </div>
            </main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>