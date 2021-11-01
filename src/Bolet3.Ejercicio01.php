<?php
/*Realizar un programa que pida un nombre mediante un formulario y lo
añada a un fichero de texto (Nombres.txt). En cada línea del fichero
aparecerá el nombre, fecha y hora en la que se rellena el formulario.*/
$nombre=$_POST["nombre"];
date_default_timezone_set("Europe/Madrid");
$fecha=date ("d/M/Y H:i:s");
//$texto=echo "<br>$nombre - $fecha";
$f=fopen( "Nombres.txt","a"); // "a" significa que está en modo escritura y append
fwrite($f, "$nombre - $fecha");
fclose($f);
?>
