<?php
/*Realizar un programa que lea a través de un formulario una cantidad de dinero y de a escoger mediante una lista o botones de radio entre
los tipos de IVA 4%,10% o 21%. Imprimir la cantidad total una vez aplicado el IVA..*/
echo "Esta es la cantidad ANTES de aplicar el IVA: ",$_POST ["dinero"];

switch ($_POST ["IVA"]) {
case 4:
echo "<br>Ha elegido el 4% de IVA";
$IVA_4=($_POST ["dinero"]*0.04) + $_POST ["dinero"];
echo "<br><br>La cantidad final de aplicar el 4% es: $IVA_4";
break;
case 10:
echo "<br>Ha elegido el 10% de IVA";
$IVA_10=($_POST ["dinero"]*0.10) + $_POST ["dinero"];
echo "<br><br>La cantidad final de aplicar el 10% es: $IVA_10";
break;
case 21:
echo "<br>Ha elegido el 21% de IVA";
$IVA_21=($_POST ["dinero"]*0.21) + $_POST ["dinero"];
echo "<br><br>La cantidad final de aplicar el 21% es: $IVA_21";
break;
}
?>