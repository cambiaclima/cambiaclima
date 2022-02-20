<?php require '../includes/var.php';?>
<?php
	$metaTags = 'tags da aggiungere';
	$currentPage = 'Count down';
?>
<html lang="it">
	<head>
		<?php require '../includes/head.php';?>
    <style media="screen">
      .bgimg {
        background: url('https://www.w3schools.com/w3images/forestbridge.jpg') center;
        height: 100%;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
      }
    </style>
	</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- NavBar -->
		<?php require '../includes/nav.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white" role="main">
      <div class="bgimg row align-items-center">
        <div class="col-4 offset-4 text-center">
          <h1>COMING SOON</h1>
          <hr>
          <p id="demo" style="font-size:30px"></p>
        </div>
      </div>
		</main>
		<!-- Footer -->
		<?php require '../includes/footer.php';?>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("05, 08, 2020 10:10:00").getTime();

      // Update the count down every 1 second
      var countdownfunction = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
          clearInterval(countdownfunction);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>
	</body>
</html>
