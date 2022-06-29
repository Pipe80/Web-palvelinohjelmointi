<?php
    $eurot = isset($_GET['eurot']) ? $_GET['eurot'] : 0;
    $markka_kerroin = 5.94573;
    $markat = $eurot * $markka_kerroin;

    $head = <<<EOHead
        <title>Eurolaskin.php</title>
    EOHead;

    $lomake = <<< EOLomake
        <form method="get" action="{$_SERVER['PHP_SELF']}">
            Eurot tahan :<br>
            <input type="text" name="eurot" value="$eurot"><br>
            <br><br>
            <input type="submit" name="painike" value="Send">
        </form>
    EOLomake;

    $footer = <<<EOFooter
        <hr>
        <p>{$markat} markkaa</p>      
    EOFooter;

    echo $head;
    echo $lomake;
    echo $footer;

?>