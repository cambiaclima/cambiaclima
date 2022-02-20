<?php
$sql= 'SELECT token FROM tokens;';
$result = mysqli_query($conn, $sql);
$resultCheck= mysqli_num_rows($result);


if($resultCheck > 0){
	while($row = mysqli_fetch_array($result)){

		$tokens[] = $row['token'];
	}

}
?>
