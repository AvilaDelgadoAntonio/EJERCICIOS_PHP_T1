<?php
/*Realizar un programa que genere una nota al azar entre 1 y 10, la imprima y diga si es Muy deficiente (1,2), Insuficiente (3 y 4), suficiente
(5), bien (6), notable (7), sobresaliente (9 y 10).*/
$numero=mt_rand(1,10);
echo "número: $numero <br>";
switch ($numero) {
case "1":
echo "nota: Muy deficiente";
break;
case "2":
echo "nota: Muy deficiente";
break;
case "3":
echo "nota: Insuficiente";
break;
case "4":
echo "nota: Insuficiente";
break;
case "5":
echo "nota: Suficiente";
break;
case "6":
echo "nota: Bien";
break;
case "7":
echo "nota: Notable";
break;
case "8":
echo "nota: Notable";
break;
case "9":
echo "nota: Sobresaliente";
break;
case "10":
echo "nota: Sobresaliente";
break;
}
?>