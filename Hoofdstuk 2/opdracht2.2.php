<?php
/**
 * User: Robbert
 * Date: 7-2-2020
 * Time: 14:05
 * File: opdracht_2.1.php
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>

    </title>

    <meta name="description" content="PHP">
    <meta name="keywords" content="PHP">
    <meta charset="utf-8">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<h2>Uitwerking van <a href="../index.php"> PHP-opdrachten</a></h2>

<div class="box">
    <?php
    $text1 = "Hallo";
    $text2 = "tocht een makkelijke taal";
    $text3 = "wat is";
    $text4 = "PHP";
    $text5 = "nooit gedacht dat";
    $text6 = "de ingewikkelde installatie";
    $text7 = "Fijn toch?";

    echo ("<h1>Taak 2</h1>");
    echo ("<p>$text1 $text3 $text4 $text2</p>");
    echo ("<p>$text3 $text6 $text7</p>");
    echo ("<p>$text5 $text4 $text2 $text3</p>");
    ?>

    <?php
    echo ("<h1>Taak 3</h1>");
    echo ("<p>$text1, $text3 $text4, ondanks $text6 $text2?</p>");
    echo ("<p>$text7 $text5 $text4 eigenlijk $text2 blijkt te zijn?</p>");
    ?>

</div>

</body>
</html>