<?php
/*Realizar un programa que lea una fecha mediante un formulario (campo tipo fecha) y
diga los días que faltan hasta esa fecha*/
$fecha1 = new DateTime($_POST ["fecha"]); 
$fecha2 = new DateTime(); 
$interval = $fecha1->diff($fecha2); 
echo "El número de días que falta para dicha fecha son: ", $interval->format('%R%a días');
?>
