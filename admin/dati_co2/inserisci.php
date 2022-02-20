<?php
//Connesione al server
require '../../includes/dbconnect.php';

$nome_Stato=mysql_escape_string ($_POST['nome_Stato']);
$consumo_energia_elettrica=mysql_escape_string ($_POST['consumo_energia_elettrica']);
$emissioni_di_co2_per_elettricita=mysql_escape_string ($_POST['emissioni_di_co2_per_elettricita']);

if(! $conn)
{
	echo ("errore nella connessione al server");
	exit();

}
$insert="INSERT INTO stato (nome_Stato,consumo_energia_elettrica,emissioni_di_co2_per_elettricita)";
$insert .="VALUES ('$nome_Stato','$consumo_energia_elettrica','$emissioni_di_co2_per_elettricita')";

if (! mysqli_query($conn,$insert))
{
	echo ("errore nell'inserimento");
	exit();
}
echo ("stato inserito correttamente");
mysqli_close($conn);
header("location: ../bacheca.php");
?>
