<?php
$n = array();
for ($i = 0; $i <= 10; $i++) {
    $numeroAleatorio = mt_rand(20,35);
    while (in_array($numeroAleatorio, $n)) {
        $numeroAleatorio = mt_rand(20,35);
    }
    $n[] = $numeroAleatorio;
}
sort($n);
foreach ($n as $key) {
    echo $key, ", ";
}
echo "<br>Mayor: ", max($n);
?>
