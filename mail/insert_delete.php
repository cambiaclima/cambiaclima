<?php

include_once '../includes/dbconnect.php';
include_once '../includes/dballmail.php';
include_once '../includes/dballtoken.php';
session_start();

$type=$_GET['type'];
$email=$_GET['email'];
$token=$_GET['token'];



$flagtk=false;

foreach ($tokens as $element){
	
	if($element==$token){
		
		$flagtk=true;
		
		
	}else{

		

	}
}

if($flagtk==true){
	
    $sqladd= "DELETE FROM tokens WHERE token='$token'";
	$resultadd = mysqli_query($conn, $sqladd);
    
    
    if((strcmp($type,"aderisci"))==0){

		$flag=true;
	
		foreach ($mails as $item){
	
			if($item==$email){
		
				$flag=false;
		
		
			}else{

			}
	
	
		}
	
	
		if($flag==true){
		
			$sqladd= "INSERT INTO newsletter(mail) VALUES('$email')";
			$resultadd = mysqli_query($conn, $sqladd);
          
			echo "<script>
					alert('Mail Aggiunta!');
					window.location.href='../index.php';
					</script>";

		}else{
		
			echo "<script>
					alert('Mail già presente nella mailing list!');
					window.location.href='../index.php';
					</script>";
					
		
	
		}
	

	}else{

		$flag2=true;

		foreach ($mails as $item){
		
		
	
			if((strcmp($item,$email))==0){
		
				$flag2=false;
		
		
		
			}else{

			}

		}
	
		if($flag2==true){
		
			"<script>
						alert('Mail non presente nella mailing list!');
						window.location.href='../index.php';
						</script>";
					
		
		
		}else{
		
			$sqladd= "DELETE FROM newsletter WHERE mail='$email'";
		
			$resultadd = mysqli_query($conn, $sqladd);
		
			echo "<script>
						alert('Mail Rimossa!');
						window.location.href='../index.php';
						</script>";
		
			}
	
	

	}	
    
    
    
    
}else{


	echo "<script>
					alert('Token Scaduto!');
					window.location.href='../index.php';
					</script>";
                    

}


?>