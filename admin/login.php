<?php
	require '../includes/var.php';
	$currentPage = 'Login';

	if (isset($_GET['log'])) {
      $log = $_GET['log'];
  } else {
      $log = 1;
  }
	if (isset($_GET['accesso'])) {
      $accesso = $_GET['accesso'];
  } else {
      $accesso = 1;
  }
?>
<html lang="it">
<head>
	<?php require '../includes/head.php';?>
</head>
	<body>
		<!-- Header -->
		<?php require '../includes/header.php';?>
		<!-- Container -->
		<main class="container-md shadow-sm bg-white pt-3" role="main">
			<?php
				if($log==0){
					print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								  <strong>Autenticazione fallita!</strong> Username o Password errati.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
				}
				if($accesso==0){
					print '<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Accesso negato!</strong>Effetuare il login.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>';
				}
			?>
			<form action="accedi.php" method="POST" class="form-group">
              <label for="user">Nome utente</label>
							<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
				          	<svg class="bi bi-people-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				              <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 008 15a6.987 6.987 0 005.468-2.63z"/>
				              <path fill-rule="evenodd" d="M8 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
				              <path fill-rule="evenodd" d="M8 1a7 7 0 100 14A7 7 0 008 1zM0 8a8 8 0 1116 0A8 8 0 010 8z" clip-rule="evenodd"/>
				            </svg>
				          </div>
				        </div>
				        <input type="text" name="user" class="form-control">
				      </div><br>
              <label for="Password">Password</label>
							<div class="input-group">
				        <div class="input-group-prepend">
				          <div class="input-group-text">
										<svg class="bi bi-shield-shaded" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				              <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 00-2.725.802.454.454 0 00-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 008 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 002.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 00-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815z" clip-rule="evenodd"/>
				              <path d="M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 01.656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z"/>
				            </svg>
				          </div>
				        </div>
	              <input type="password" name="passwd" class="form-control">
				      </div><br>
              <input class="btn btn-primary" type="submit"  name="accedi" value="accedi"/>
            </form>
		</main>
	</body>
</html>
