<?php



include_once 'dbconnect.php';



$sql= 'SELECT mail FROM newsletter;';
$result = mysqli_query($conn, $sql);
$resultCheck= mysqli_num_rows($result);



if($resultCheck > 0){
	while($row = mysqli_fetch_array($result)){
		
		$mails[] = $row['mail'];
	}
	
}







?>