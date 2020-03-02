<?php
/**
 * User: Robbert
 * Date: 21-2-2020
 * Time: 12:45
 * File: opdracht_3.1.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet">

</head>
<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>
<div class="box">
    <?php
    $soortTochtocht = "<u>Elfstedentocht</u>";
    $tocht_fries = "<u>Alvestêdetocht</u>";
    $km = "<u>200</u>";
    $tocht = "<u>schaatstocht</u>";
    $type = "<u>natuurijs</u>";
    $vereniging = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $plaats = "<u>Leeuwarden</u>";
    $provincie = "<u>Friesland</u>";
    $hoeVaak = "<u>15</u>";
    $jaar = "<u>1909</u>";

    $verhaal1 = "De $soortTocht (Fries: $tocht_fries) is een $km
                kilometer lange $hoeVaak over $type die wordt
                georganiseerd door de $vereniging. $plaats, de hoofdstad van $provincie, is start- en
                aankomstplaats. De $soortTocht is inmiddels $hoeVaak maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 1</h1>");
    echo ("<p>$verhaal1</p>");

    $verhaal2 = "De " . $soortTocht .  " (Fries: " . $tocht_fries . ") is een " . $km . " kilometer lange " . $hoeVaak . " over " . $type . " die wordt
                georganiseerd door de " . $vereniging .". " . $plaats . ",  de hoofdstad van " . $provincie . ",  is start- en
                aankomstplaats. De " . $soorttocht . " is inmiddels " . $hoeVaak . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<h1>Taak 2</h1>");
    echo ("<p>$verhaal2</p>");
    ?>
</div>
</body>
</html>