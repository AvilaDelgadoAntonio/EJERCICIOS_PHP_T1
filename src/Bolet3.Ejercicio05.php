<?php
/*A partir del fichero de texto 2ASIR.txt realizar un programa que genere al
azar las notas de cada alumn@ en IAW (entre 1 y 10) y cree un nuevo
fichero de texto que contenga los nombres del alumnado y separado por dos
puntos (“:”) la nota que ha obtenido. El fichero se denominará IAWNotas.txt.*/
$na=22;

for ($i = 0; $i < $na; $i++) 

{
	$nota[$i]=mt_rand(1,10).PHP_EOL;
	}

$fichero = "IAWNotas.txt";
$final= file_put_contents($fichero, $nota);
$alumno=file("2ASIR.txt");
$nota=file("IAWNotas.txt");
$na=sizeof($alumno);
for ($i = 0; $i < $na; $i++) 

{
	echo "<br>$alumno[$i] : $nota[$i]";
	}
?>