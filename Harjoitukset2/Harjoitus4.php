
<title>2, Harjoitus 4, PHP</title>

	  
<body bgcolor="lightgreen"> 

<?php
    $laske = isset($_GET["laske"]) ? $_GET["laske"] : 0;

    if($laske < 3) {
		

        $laske++;

    }

    else {
        $laske = 0;
    }
?>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="submit" name="Lähetä" value="Hullu Nappi">
        <input type="text" name="laske" value="<?php echo $laske; ?>">
    </form>
</body>
</html>



