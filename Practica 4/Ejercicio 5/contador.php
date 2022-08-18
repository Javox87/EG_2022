<?php
// le asignamos una variable el nombre del archivo que va a acumular el numero de visitas
$archivo = "contador.dat";
// lo abrimos para lectura 
$abrir = fopen($archivo, "r");
// Lo leemos del archivo
$cont = fread($abrir, filesize($archivo));
// Cerramos el archivo
fclose($abrir);
// Abrimos nuevamente el archivo para escritura
$abrir = fopen($archivo, "w");
// Agregamos 1 visita
$cont = $cont + 1;
// Guardamos
$guardar = fwrite($abrir, $cont);
// Cerramos el archivo
fclose($abrir);
// Mostramos el total de visitas 
echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";
?>