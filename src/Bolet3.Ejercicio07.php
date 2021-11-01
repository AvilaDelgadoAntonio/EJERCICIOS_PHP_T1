<?php
/*A partir de los ficheros Capitales.txt y Países.txt. Realizar un programa que
muestre un país y le pida al usuario que seleccione la capital. El programa le
dirá si ha acertado o no. En los ficheros se corresponde el primer país con la
primera capital, el segundo país con la segunda capital,...*/
$na=48;
$paises=file("paises.txt");
$capitales=file("capitales.txt");
$na=sizeof($paises);
for ($i = 0; $i < $na; $i++) 

{
	echo "<br>$paises[$i] - $capitales[$i]";
	}
?>