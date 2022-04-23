<?php
  $myfile = fopen("../articoli/".$IDArt.".php", "w") or die("Unable to open file!");
  $txt = '<?php $IDArt='.$IDArt.';?>';
  fwrite($myfile, $txt);
  $txt = '<?php require "blank_article.php";?>';
  fwrite($myfile, $txt);
  fclose($myfile);
?>
