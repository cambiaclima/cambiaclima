<?php



include_once '../../includes/dballmail.php';



require("../../mail/SendGrid/sendgrid-php.php");  
use SendGrid\Mail\To;
use SendGrid\Mail\Personalization;
$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("mirtdavide@gmail.com");  
$email->setSubject("Aggiornamento Nuovo Articolo");

foreach ($mails as $item){

$personalization = new Personalization();

    $personalization->addTo(new To($item));

    $email->addPersonalization($personalization);

}





$email->addContent("text/plain", "Titolo Articolo");
$email->addContent(
    "text/html", "<html>
    <body>
    Vai a vedere il nostro nuovo articolo sul sito
    <a href=\"http://cambiaclima5bi.altervista.org\">Link di prova non ancora funzionante</a>
    </body>
    </html>"
);                                                                
$sendgrid = new \SendGrid('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'); 
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    //header('Location: ../index.php');
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}




?>