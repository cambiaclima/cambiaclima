<?php
$hostname="localhost";
$username="cambiaclima5bi";
$passwd="";
$dbname="my_cambiaclima5bi";
$conn=mysqli_connect($hostname,$username,$passwd,$dbname);
$nome_Stato=$_POST['nome_Stato'];
$consumo_energia_elettrica=$_POST['consumo_energia_elettrica'];
$emissioni_di_co2_per_elettricita=$_POST['emissioni_di_co2_per_elettricita'];

if(! $conn)
{
	echo ("errore nella connessione al server");
	exit();
}
$select="SELECT * FROM stato order by 'nome_Stato'";
				$ris=mysqli_query($conn,$select);
				if (! $ris)
				{
					echo ("errore nella visualizzazione");
					exit();
				}
				$riga=mysqli_fetch_array($ris, MYSQLI_ASSOC);
				if(! $riga)
				{
					echo ("nessun dato presente nel db");
					exit();
				}
				while($riga)
				{
					$nome_Stato=$riga['nome_Stato'];
					if($nome_Stato==$_REQUEST["stato"])
					{
						echo ("stato gia presente");
						exit();
					}
					else{
						$insert="INSERT INTO stato (nome_Stato,consumo_energia_elettrica,emissioni_di_co2_per_elettricita)";
						$insert .="VALUES ('$nome_Stato','$consumo_energia_elettrica','$emissioni_di_co2_per_elettricita')";

						if (! mysqli_query($conn,$insert))
						{
							echo ("errore nell'inserimento");
							exit();
						}
						echo ("stato inserito correttamente");
						mysqli_close($conn);

					}
					$riga=mysqli_fetch_array($ris, MYSQLI_ASSOC);
				}
?>
<br><a href="inserisci.htm">inserisci un altro stao</a>
<br><a href="index.htm">torna alla home</a>
