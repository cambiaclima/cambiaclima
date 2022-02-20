<?php
  session_start();
  $user=$_POST['user'];
  $password=$_POST['passwd'];

  $info = array("Username"=>$user, "Password"=>$password);

  $fp = fopen('temp/passwordTemp.json', 'w');
  fwrite($fp, json_encode($info));
  fclose($fp);
?>