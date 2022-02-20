<?php


			  $hostname="localhost";
              $username="cambiaclima5bi";
              $passwd="";
              $dbname="my_cambiaclima5bi";
              $conn=mysqli_connect($hostname,$username,$passwd,$dbname);
              mysql_select_db("my_cambiaclima5bi");
          		
              $sqlquery= 'SELECT mail FROM newsletter;';
			  $result = mysqli_query($conn, $sqlquery);
			  $resultCheck= mysqli_num_rows($result);



			 if($resultCheck > 0){
			 while($row = mysqli_fetch_array($result)){
		
			$mails[] = $row['mail'];
            
			
			}
	
			}
            
               
	          $conn->close();

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
            $_SESSION['confid']="";
            if($_POST['email']!=''){
            
            
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['type'] = "aderisci";
            $token = md5(uniqid(rand(), true));
            $_SESSION['token']=$token;
			header('Location: confirmmail.php');
            
            }else{
            
            echo "<script>
					alert('Inserisci una mail!');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
            
            
            }
            
			
			
	}else{
		if($_POST['email']!=''){
        
        echo "<script>
					alert('Sei già isctitto alla nostra NewsLetter!');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
        }else{
        
        echo "<script>
					alert('Inserisci una mail!');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
        }
		
		
		
	}
	
	}else{
    
    
    $flag=true;
	
	foreach ($mails as $item){
	
	if($item==$_POST['email']){
		
		$flag=false;
		
		
	}else{
		
		

	}
	
	
	}
	if($flag==false){
		
		
		
		session_start();
			$_SESSION['email']="";
			$_SESSION['type'] = "";
            $_SESSION['confid']="";
			
            if($_POST['email']!=''){
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['type'] = "disiscriviti";
            $token = md5(uniqid(rand(), true));
            $_SESSION['token']=$token;
			header('Location: confirmmail.php');
            
            }else{
            
            echo "<script>
					alert('Inserisci una mail!');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
            
            }
			
			
			
	}else{
		if($_POST['email']!=''){
        
        echo "<script>
					alert('Inserisci una mail!');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
        
        }else{
        echo "<script>
					alert('Questo indirizzo non è presente nella nostra NewsLetter');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
        }
		
		
		
	}
    
    
    
    }



?>