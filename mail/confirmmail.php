<?php
include_once '../includes/dbconnect.php';
require("SendGrid/sendgrid-php.php"); 
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("mirtdavide@gmail.com");
$sendgrid = new \SendGrid('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');
session_start();
$type=$_SESSION['type'];
$ml=$_SESSION['email'];
$token=$_SESSION['token'];
 



if((strcmp($_SESSION['type'],"aderisci"))==0){
	
$email->setSubject("Conferma Iscrizione alla NewsLetter CambiaClima5Bi");

$email->addContent(
    "text/html", "<html>
    <body>
    <a href=\"http://cambiaclima5bi.altervista.org/mail/insert_delete.php?type=$type&email=$ml&token=$token\">Clicca qui per confermare la tua iscrizione alla nostra NewsLetter!</a>
    </body>
    </html>"
);                       




}else{
	
$email->setSubject("Conferma Rimozione dalla NewsLetter CambiaClima5Bi");

$email->addContent(
    "text/html", "<html>
    <body>
    <a href=\"http://cambiaclima5bi.altervista.org/mail/insert_delete.php?type=$type&email=$ml&token=$token\">Clicca qui per confermare la tua rimozione dalla nostra NewsLetter!</a>
    </body>
    </html>"
);     
}

$email->addTo($ml);  
try {
if(!$sendgrid->send($email)){

echo "<script>
					alert('C'è stato un errore durante l'invio della mail di conferma! Clicca ok per tornare alla pagina principale');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";

}else{

 $sqladd= "INSERT INTO tokens(token) VALUES('$token')";
		
	$resultadd = mysqli_query($conn, $sqladd);
    echo "<script>
    alert('Una mail di conferma è stata inviata al tuo indirizzo di posta elettronica! Se non la trovi controlla la cartella Spam e inseriscici tra gli indirizzi consentiti!');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
}
    
    
   
    
    				

					
                    
                    
    
} catch (Exception $e) {

echo "<script>
					alert('C'è stato un errore durante l'invio della mail di conferma! Clicca ok per tornare alla pagina principale');
					window.location.href='http://cambiaclima5bi.altervista.org/';
					</script>";
    
}



?>