<?php

    session_start();
    $n1 = mt_rand(1,9);
    $n2 = mt_rand(1,9);
    $_SESSION["correcto"] = $n1 * $n2;

    setcookie("tiempo", "", time()+10)
?>

<form action="4.3.php" method="post">
    <?php echo $n1."x".$n2."=" ?>
    <input type="number" name="resultado"/>
    <p><input type="submit"/></p>
</form>

