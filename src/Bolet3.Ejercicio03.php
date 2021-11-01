<?php
/*Realizar un programa que guarde en un fichero (IP.txt) de texto el resultado
de hacer ping (por ejemplo a la puerta de enlace).*/
echo "Estos resultados se escribirán en el archivo IP.txt: <br>";
exec("ping 192.168.1.1",$ping);
foreach ($ping as $key =>$value) {
    echo "<br>$value";
    $f=fopen( "IP.txt","a"); // "a" significa que está en modo escritura y append
	fwrite($f, $value);
	fclose($f);
}
?>





