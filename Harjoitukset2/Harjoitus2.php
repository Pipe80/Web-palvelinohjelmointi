<title>2, Harjoitus 2, PHP</title>

<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']?>">
	  
 
<br>Keltainen <input type="radio" name="vari" value="keltainen"><br>
<br>Punainen <input type="radio" name="vari2" value="punainen"><br>
<br>Sininen <input type="radio" name="vari3" value="sininen"><br>
<br>Beige <input type="radio" name="vari4" value="beige"><br>
<br>Hopea <input type="radio" name="vari5" value="hopea"><br><br>
<input type="submit" name="painike" value="Color up James!"><br>



</form>

<?php


if(isset($_POST['vari'])) {

 echo '<body style="background-color:yellow">';

    // Checkbox is selected
} 
else {
echo "","<br>";
   // Alternate code
}
if (isset($_POST['vari2'])) {
	

 echo '<body style="background-color:red">';
} 
else {
echo "","<br>";

}
if (isset($_POST['vari3'])) {
echo '<body style="background-color:blue">';

} 
else {
echo "","<br>";

}
if (isset($_POST['vari4'])) {
	
 echo '<body style="background-color:beige">';

} 
else {
 echo '<body style="background-color:white">';"<br>";

}

if (isset($_POST['vari5'])) {
//hopea
 echo '<body style="background-color:#C0C0C0">';

}
else {
echo '<body style="background-color:white">';"<br>";
}
?>
<br>
Keltainen: <input type="radio" name="vari" value="keltainen" <?php if(isset($_POST['vari'])) echo 'checked="checked"'; ?> /><br>
Punainen: <input type="radio" name="vari2" value="punainen" <?php if(isset($_POST['vari2'])) echo 'checked="checked"'; ?> /><br>
Sininen: <input type="radio" name="vari3" value="sininen" <?php if(isset($_POST['vari3'])) echo 'checked="checked"'; ?> /><br>
Beige: <input type="radio" name="vari4" value="beige" <?php if(isset($_POST['vari4'])) echo 'checked="checked"'; ?> /><br>
Hopea: <input type="radio" name="vari5" value="hopea" <?php if(isset($_POST['vari5'])) echo 'checked="checked"'; ?> /><br>