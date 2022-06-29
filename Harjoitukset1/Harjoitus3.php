<!DOCTYPE html>
<html>
<head>
    <title>Harjoitukset1, osa 3</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
           How many stars would you like to have: <br><input type="number" name="stars"><br>
            <input type="submit" name="painike" value="Send">
    </form>
</body>
<?php

    $amount = isset($_GET['stars']) ? $_GET['stars'] : 0;
    Tahdet($amount);

    function Tahdet($StarAmount) {
        for ($i = 0; $i < $StarAmount; $i++) {
            echo "*";
         }
    }
?>
</html>