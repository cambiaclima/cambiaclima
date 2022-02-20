<?php
//Connesione al server
require '../../includes/dbconnect.php';

$nome_Stato=$_POST['nome_Stato'];

if(! $conn)
{
echo ("errore nella connessione al server");
exit();

}

$delete="DELETE FROM stato ";
$delete .="WHERE nome_Stato ='$nome_Stato'";

if (! mysqli_query($conn,$delete))
{
echo ("errore nella cancellazione");
exit();
}
echo ("stato cancellato correttamente");
mysqli_close($conn);
header("location: ../bacheca.php");
?>
