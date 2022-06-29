<title>Harjoitukset 1, PHP</title>

<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']?>">

Mika on painosi kiloina:<br><input type="text" name="paino"><br>
<input type="submit" name="painike" value="Laheta">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name = $_POST['paino'];


echo "Painosi on $name , sinulla taitaa olla paino-ongelmia! Minun painoni on: ";
echo $name - 5;
}
?>
