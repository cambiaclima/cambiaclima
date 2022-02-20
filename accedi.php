<?php
  session_start();
  $user=$_POST['user'];
  $password=$_POST['passwd'];
	//Connesione al server
	$hostname="localhost";
	$username="cambiaclima5bi";
	$passwd="";
	$dbname="my_cambiaclima5bi";

	$conn=mysqli_connect($hostname,$username,$passwd,$dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
  $sql = 'SELECT COUNT(*) FROM `amministratore` WHERE `utente`="'.$user.'" AND `password`="'.$password.'";';
  $result = mysqli_query($conn,$sql);
  $accesso = mysqli_fetch_array($result)[0];
  if($accesso==1){
    $_SESSION["user"] = $user;
    header("location: bacheca.php");
  }else {
    header("location: login.php?log=".$accesso);
  }
  $conn->close();
  mysqli_close($conn);
?>
