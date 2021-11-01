<?php
/*A partir del fichero IP.txt, realizar un programa que imprima si el resultado
del ping ha sido o no correcto.*/
$ping=file("IP.txt");
	foreach ($ping as $key =>$value)
		{
		if (strstr($value,"TTL")){	
		echo "<br>$value ";
		}
}
?>

