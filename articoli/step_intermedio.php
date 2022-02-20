<?php
  //Connesione al server
  $hostname="localhost";
  $username="cambiaclima5bi";
  $passwd="";
  $dbname="my_cambiaclima5bi";
  $conn=mysqli_connect($hostname,$username,$passwd,$dbname);

 $pagina=$_POST["pagina"];
 $IDArt=$_POST["IDArt"];
 $prec=null;
 $succ=null;

 $sql = "SELECT IDArt FROM articolo";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
   $i=0;
   while($row = $result->fetch_assoc()) {
     if ($IDArt==$row["IDArt"]) 
     	break;
     $prec=$row["IDArt"];
   }
   $succ = $result->fetch_assoc()["IDArt"];
 }
 
 $conn->close();
switch ($pagina) {
   case 0:
     if ($prec!=null)
       header("location: ".$prec.".php");
     else
     	header("location: ../source/articoli.php");
     break;
   case 1:
    header("location: ../source/articoli.php");
     break;
   case 2:
     if ($succ!=null)
        header("location: ".$succ.".php");
    else
      header("location: ../source/articoli.php");
     break;
 }

?>
