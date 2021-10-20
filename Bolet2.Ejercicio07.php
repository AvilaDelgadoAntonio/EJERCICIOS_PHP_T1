<?php
/*Realizar un programa que lea mediante cuatro campos tipo número una IP.
a. Crear al azar una cadena con el formato IP (a.b.c.d) e imprimirla.
b. Convertir la IP a binario e imprimir cada octeto con 8 dígitos usando
STR_PAD.
c. Usar explode en la cadena creada en el apartado “a” e imprimir el último
valor de la IP..*/


$ip = array($_POST ["octeto_1"],$_POST ["octeto_2"],$_POST ["octeto_3"],$_POST ["octeto_4"]);
shuffle($ip);
foreach ($ip as $ip_address) {
    echo "$ip_address ";
}

$binario_1 = str_pad(decbin($_POST ["octeto_1"]),8,0,STR_PAD_LEFT);
echo "<br>$binario_1 ";
$binario_2 = str_pad(decbin($_POST ["octeto_2"]),8,0,STR_PAD_LEFT);
echo "<br>$binario_2 ";
$binario_3 = str_pad(decbin($_POST ["octeto_3"]),8,0,STR_PAD_LEFT);
echo "<br>$binario_3 ";
$binario_4 = str_pad(decbin($_POST ["octeto_4"]),8,0,STR_PAD_LEFT);
echo "<br>$binario_4 ";

$último_octeto = explode(" ", $ip_address);
echo $último_octeto[2];

?>
