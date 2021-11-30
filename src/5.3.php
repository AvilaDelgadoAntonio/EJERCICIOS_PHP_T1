<?php

    session_start();

    $numero = $_POST["numero"];

    if ($numero == $_SESSION['numero']) {
        echo "Felicidades, has encontrado el numero";
        echo "Has tenido: ", $_SESSION['intentos'], " intentos";
    } else if ($numero > $_SESSION['numero']) {
        echo "El numero es más pequeño";
    } else if ($numero < $_SESSION['numero']) {
        echo "El numero es mas grande";
    }

    $previous_page = $_SESSION['current_page'];
?>

<a href="<?php echo $previous_page;?>"><button>Volver a intentar</button></a>