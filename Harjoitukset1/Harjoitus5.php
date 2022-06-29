<!DOCTYPE html>
<html>
<head>
    <title>Harjoitukset,osa 5</title>
</head>

<?php
    $taulu = ['Eka','Toka','Kolkki','Nelkki','Viikki','Kuukki','Seiska','Kasi','Ysi','Kymppi'];
    taustaVari($taulu);

    function taustaVari($Taulukko) {
        echo "<table>";
        for ($i = 0; $i < count($Taulukko); $i++) {
            if ($i % 2 == 0) {
                echo "<tr style='background-color: #ff0'>";
                echo ("<td>{$Taulukko[$i]}</td>");
                echo "</tr>";
            }
            else {
                echo "<tr class='colors' style='background-color: #fff'>";
                echo ("<td>{$Taulukko[$i]}</td>");
                echo "</tr>";
            }
        }
        echo "</table>";

        if(count($Taulukko) % 2 == 0) {
            $Index = 0;
        }
        else {
            $Index = 1;
        }
        foreach ($Taulukko as $tulos) {
            echo "<table>";
            if ($Index % 2 == 0) {
                echo "<tr style='background-color: #ff0'>";
                echo ("<td>{$tulos}</td>");
                echo "</tr>";
            }
            else {
                echo "<tr class='colors' style='background-color: #fff'>";
                echo ("<td>{$tulos}</td>");
                echo "</tr>";
            }
            echo "</table>";
            $Index++;
        }
    }
?>
</html>