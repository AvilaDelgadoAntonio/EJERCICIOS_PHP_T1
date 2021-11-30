<?php

    session_start();
    $solucion = $_POST["resultado"];

    //Checkeamos si esta dentro del tiempo
    if (isset($_COOKIE["tiempo"])) {
        //Si es correcto sumamos uno a los aciertos
        if ($_SESSION["correcto"] == $solucion) {
            echo "Correcto<br>";
            $_SESSION["aciertos"] += 1;
            //Si tiene 3 aciertos termina el programa
            if ($_SESSION["aciertos"] == 3) {
                echo "Has ganado!";
                break;
            }
        }
        //Si es incorrecto lo expulsamos
        else {
            echo "Incorrecto<br>";
            echo "Has acertado:";
            echo $_SESSION["aciertos"];
            break;
        }
    //Expulsamos si excede el tiempo
    } else {
        echo "Has tardado demasiado";
        echo $_SESSION["aciertos"];
    }

?>

<button onclick="goBack()">Atras</button>
<script>
    function goBack() {
        window.history.back();
    }
</script>