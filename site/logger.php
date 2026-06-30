<?php
 
date_default_timezone_set('America/Sao_Paulo');
 
function Logger($msg){
 
$data = date("d-m-y");
$hora = date("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
 
//Nome do arquivo:
$arquivo = "logs/$data.log";
 
//Texto a ser impresso no log:
$texto = "[$hora][$ip] > $msg \r\n";
 
$manipular = fopen("$arquivo", "a+b");
fwrite($manipular, $texto);
fclose($manipular);
 
}
 
?>
