<form action="5.3.php" method="post">
    <p>Elige un numero: <input type="number" name="numero" /></p>
    <p><input type="submit"/></p>
</form>



<?php
    session_start();
    echo $_SESSION['numero'];
    $_SESSION['intentos'] += 1;
    
    $url = basename($_SERVER['PHP_SELF']);
    $query = $_SERVER['QUERY_STRING'];
    if($query){
        $url .= "?".$query;
    }
    $_SESSION['current_page'] = $url;
?>