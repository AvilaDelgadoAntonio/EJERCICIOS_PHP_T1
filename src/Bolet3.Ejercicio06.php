<?php
/*A partir del fichero de texto IAWNotas.txt, realizar un programa que imprima
los nombres y notas del alumnado aprobado. Imprimir también el número de
aprobados y el número de suspensos.*/

$alumno=file("2ASIR.txt");
$nota=file("IAWNotas.txt");
$na=sizeof($alumno);
echo "Lista de aprobados: <br>";
for ($i = 0; $i < $na; $i++) 
	{
		if ($nota[$i] >=5)
	echo "<br>$alumno[$i] : $nota[$i]";
	$aprobados=sizeof($alumno) - sizeof($nota);
	$suspensos=$na - $aprobados;	
	}
	echo "<br><br>Número de aprobados : $aprobados";
	echo "<br><br>Número de suspensos : $suspensos";
?>