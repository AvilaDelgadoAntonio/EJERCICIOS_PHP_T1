<?php
/*Realizar un programa que genere 10 números al azar entre 20 y 35.
i) Imprimir los 10 números de mayor a menor separados por comas.
ii) Imprimir, separados por comas, los números sin repetir ninguno.
iii) Imprimir el mayor.*/
echo "DIEZ números al azar entre 20 y 35: <br>";
$secuencia_diez = array();
for ($i = 0; $i <= 10; $i++) {
    $cifra_azar = mt_rand(20,35);
    while (in_array( $cifra_azar, $secuencia_diez)) {
        $cifra_azar = mt_rand(20,35);
    }
    $secuencia_diez[] = $cifra_azar;
}
rsort($secuencia_diez);
foreach ($secuencia_diez as $key) {
    echo $key, ", ";
}
echo "<br>El número mayor es: ", max($secuencia_diez);
?>


