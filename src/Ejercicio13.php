<?php
/*Realizar un programa que genere al azar un número entre 1 y 7 e imprima el día de la semana que le corresponde. Asignaremos 1-Lunes, 2-Martes….*/
$numero=mt_rand(1,7);
echo "número: $numero <br>";
switch ($numero) {
case "1":
echo "1-Lunes";
break;
case "2":
echo "2-Martes";
break;
case "3":
echo "3-Miércoles";
break;
case "4":
echo "4-Jueves";
break;
case "5":
echo "5-Viernes";
break;
case "6":
echo "6-Sábado";
break;
case "7":
echo "7-Domingo";
break;
}
?>