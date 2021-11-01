<?php
/*Realizar un programa que genere 10 números al azar entre 20 y 35.
i) Imprimir los 10 números de mayor a menor separados por comas.
ii) Imprimir, separados por comas, los números sin repetir ninguno.
iii) Imprimir el mayor.*/

$arraynum = array();
echo "DIEZ números al azar entre 20 y 35: <br>";
for ($i = 1; $i <= 10; $i++) {
    $numeros = mt_rand(20,35);
    array_push($arraynum,$numeros);
    echo "$numeros, ", "";

}

arsort($arraynum);


$unico = array_unique($arraynum);
echo "<br>Sin repetir y ordenados de mayor a menor (decreciente): <br>";
foreach ($unico as $key =>$value) {
    echo "$value, ", "";
}

echo "<br>El número mayor es: ", max($arraynum);
?>


