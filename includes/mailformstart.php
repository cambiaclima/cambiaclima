<?php


$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "climatechange";

$conn= mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);



$sql= 'SELECT mail FROM newsletter;';
$result = mysqli_query($conn, $sql);
$resultCheck= mysqli_num_rows($result);



if($resultCheck > 0){
	while($row = mysqli_fetch_array($result)){
		
		$mails[] = $row['mail'];
		
	}
	
}

if (isset($_POST['aderisci'])){
	
	$flag=true;
	
	foreach ($mails as $item){
	
	if($item==$_POST['email']){
		
		$flag=false;
		
		
	}else{
		
		

	}
	
	
	}
	if($flag==true){
		
		
		
		session_start();
			$_SESSION['email']="";
			$_SESSION['type'] = "";
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['type'] = "aderisci";
			header('Location: /mail/ciao.php');
			
			
	}else{
		
		$message = "Sei già iscritto alla nostra mailing list!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
		
	}
	
	
	
	
   
}



?>