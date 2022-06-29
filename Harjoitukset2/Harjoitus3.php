<title>2, Harjoitus 3, PHP</title>


<body bgcolor="lightblue">  

Linkit:
		
<form method="get" action="<?php echo $_SERVER['PHP_SELF']?>">


<select name="valinnat[]" size="4" multiple> 
<option value="uutiset"> Uutiset</option>
<option value="musiikki"> Musiikki </option>
<option value="pelit"> Pelit </option>
<option value="lemmikit"> Lemmikit</option>

</select><br>
<input type="submit" name="painike" value="Tulosta linkit"><br>
 </form>


<?php

 foreach ($_GET['valinnat'] as $arvo)
{
if ($arvo == "uutiset"){
  echo '<a href="https://yle.fi/">Ylen sivut</a>';
}

if ($arvo == "musiikki"){
  echo '<a href="https://areena.yle.fi/tv/ohjelmat/musiikki">Musa sivut</a>';
}

if ($arvo == "pelit"){
  echo '<a href="https://www.pelit.fi/">Pelit sivut</a>';
}

if ($arvo == "lemmikit"){
  echo '<a href="https://lemmikkimedia.fi/lemmikit-eli-lemmikkielaimet/">Lemmikkimedia</a>';
}
}
?>
	

