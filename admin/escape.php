<?php
//funzione
function escape($dato){
$dato = str_replace("'", "\'",   $dato);
$dato = str_replace('"', "\"", $dato);
}
?>
