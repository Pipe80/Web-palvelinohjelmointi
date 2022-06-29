<title>2, Harjoitus 1, PHP</title>

<form method="post"
      action="<?php echo $_SERVER['PHP_SELF']?>">
	  



<br>I'm so tired <input type="checkbox" name="tunne" value="vasy"<?php if(isset($_POST['tunne'])) echo 'checked="checked"'; ?> /><br>
<br>Friday <input type="checkbox" name="tunne2" value="perjantai" <?php if(isset($_POST['tunne2'])) echo 'checked="checked"'; ?> /><br>
<br>My head hurts <input type="checkbox" name="tunne3" value="paa pipi" <?php if(isset($_POST['tunne3'])) echo 'checked="checked"'; ?> /><br>
<input type="submit" name="painike" value="Kerro tunne"><br>



</form>

<?php


if (isset($_POST['tunne'])) {
echo "I'm so tired" ,"<br>";
    // Checkbox is selected
} 
else {
echo "checkbox not selected","<br>";
   // Alternate code
}
if (isset($_POST['tunne2'])) {
	

// if(document.getElementById('on_or_off_checkbox').checked) {
    // //I am checked
// } 


	
	
echo "Friday" ,"<br>";
} 
else {
echo "checkbox not selected","<br>";

}
if (isset($_POST['tunne3'])) {
	
echo $tunne3 = _("My head hurts");
// $head = <<<EOF

    // <p>$tunne3</p>
// EOF;
    // echo $head;

} 
else {
echo "checkbox not selected","<br>";

}


?>
<br>
