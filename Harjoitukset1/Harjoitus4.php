<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjoitukset 1, osa 4</title>
    <style>
        img {
            max-width: 100%;
            max-height: 100%;
        }
        .column {
            float: left;
            width: 300px;
            padding: 4px;
        }
        
    </style>
</head>
<body>
    <div class="images">
        <?php

        $elain1= "<div class='column'><img src='kissa.jpg'></img></div>"; 
        $elain2="<div class='column'><img src='koira.jpg'></img></div>";
        $elain3="<div class='column'><img src='hiiri.jpg'></img></div>";


$input = array($elain1,$elain2,$elain3,$elain3,$elain1,$elain2);
$rand_keys = array_rand($input, 3);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
echo $input[$rand_keys[2]] . "\n";

                  
        ?>
    </div>
</body>
</html>