<?php
    $fp = fopen("temp/passwordTemp.json", "w"); // SISTEMA LOGIN: PASSO 8
    fwrite($fp, ''); // un sistema di login basato su variabili di sessione e coockie era poco efficiente da realizzare e avremmo dovuto chiedere il consenso all'utilizzo dei cookie all'utente
?>