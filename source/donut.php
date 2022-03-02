<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Donut';
?>
<html lang="it">
	<head>
		<?php
          require '../includes/head.php';
          require '../includes/popover.php';
        ?>
        <style>
            .container {
                display: -webkit-flexbox;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-flex-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
                justify-content: center;
                width: 34%;
            }
        </style>
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
        <div class="container" style="background:black;">
            <pre style="color:white;" class="center" id="d"></pre>
        </div>
        <script src="donut.js"></script>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
	</body>
</html>
