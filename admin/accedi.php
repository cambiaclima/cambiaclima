<?php
  session_start();
  $user=$_POST['user'];
  $password=$_POST['passwd'];

  //Connesione al server
  require '../includes/dbconnect.php';

  $sql = 'SELECT COUNT(*) FROM `amministratore` WHERE `utente`="'.$user.'" AND `password`="'.$password.'";';
  $result = mysqli_query($conn,$sql);
  $accesso = mysqli_fetch_array($result)[0];
  if($accesso==1){
    $_SESSION["user"] = $user;
    $info = array("Username"=>$user, "Password"=>$password); // RIGHE 14-15-16-17 SISTEMA LOGIN: PASSO 2
    $fp = fopen('temp/passwordTemp.json', 'w');
    fwrite($fp, json_encode($info));
    fclose($fp);
    header("location: bacheca.php"); // SISTEMA LOGIN: PASSO 3
  }else {
    header("location: login.php?log=".$accesso);
  }
  $conn->close();
  mysqli_close($conn);
?>
