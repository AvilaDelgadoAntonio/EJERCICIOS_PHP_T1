<?php
/*Realizar un programa que imprima en pantalla el fichero Nombres.txt.*/
$asir=file("Nombres.txt");
	foreach ($asir as $key =>$value)
		{echo "<br>$value ";
}
?>
