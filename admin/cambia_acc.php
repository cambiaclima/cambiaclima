<?php
//funzione
function cambia_acc($dato){
$dato = str_replace("€", "&euro",   $dato);
$dato = str_replace("è", "&egrave", $dato);
$dato = str_replace("é", "&eacute", $dato);
$dato = str_replace("à", "&agrave", $dato);
$dato = str_replace("À", "&Agrave", $dato);
$dato = str_replace("á", "&aacute", $dato);
$dato = str_replace("ò", "&ograve", $dato);
$dato = str_replace("ó", "&oacute", $dato);
$dato = str_replace("ì", "&igrave", $dato);
$dato = str_replace("í", "&iacute", $dato);
$dato = str_replace("ù", "&ugrave", $dato);
$dato = str_replace("ú", "&uacute", $dato);
$dato = str_replace("ñ", "&ntilde", $dato);
$dato = str_replace("ç", "&ccedil", $dato);
$dato = str_replace("'", "&#039",   $dato);
$dato = str_replace('"', "&quot",   $dato);
$dato = str_replace('°', "&deg",    $dato);
$dato = str_replace('’', "&acute",  $dato);
$dato = str_replace('»', "&raquo",  $dato);
$dato = str_replace('«', "&laquo",  $dato);
$dato = str_replace('“', "&quot",   $dato);
$dato = str_replace('”', "&quot",   $dato);
$dato = str_replace('®', "&reg",    $dato);
$dato = str_replace("™", "&trade",  $dato);

return $dato;
}
?>
