<?php
  //Connesione al server
  require '../../includes/dbconnect.php';

  $IDs = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
  foreach ($IDs as $IDArt){
  	if($IDArt!=null){
    	$sql="DELETE FROM articolo WHERE IdArt =".$IDArt.";";
    	if ($conn->query($sql) === TRUE) {
      	echo "eliminato";
    	} else {
        	echo "Error: " . $sql . "<br>" . $conn->error. "<br>";
        	exit();
    	}
    }
    echo ("Articolo eliminato");
    delete_directory('../../articoli/'.$IDArt);
    $file_pointer = '../../articoli/'.$IDArt.'.php';
    if (!unlink($file_pointer)) {
        echo ("$file_pointer cannot be deleted due to an error". "<br>");
    }
    else {
        echo ("$file_pointer has been deleted". "<br>");
    }
  }
  mysqli_close($conn);
  header("location: ../bacheca.php");
  //funzione
	function delete_directory($dirname) {
		if (is_dir($dirname)){
			$dir_handle = opendir($dirname);
		}
		if (!$dir_handle){
			return false;
		}

		while($file = readdir($dir_handle)) {
			if ($file != "." && $file != "..") {
				if (!is_dir($dirname."/".$file))
				unlink($dirname."/".$file);
				else
				delete_directory($dirname.'/'.$file);
			}
		}

		closedir($dir_handle);
		rmdir($dirname);
		return true;
	}
?>
