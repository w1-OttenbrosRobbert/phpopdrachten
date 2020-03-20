<?php
/**
 * User: robbert
 * Date: 15-3-2020
 * Time: 12:19
 * File: script4.3.php
 */
?>

<?php
// Includen extern bestand
include "../../includes/header.php"
?>

<?php
// Maken 1e while loop
$task2 = "Lancering in: ";
$y = 19;
while($y >= 0)
{
    $task2 .= $y.", ";
    $y--;
}
// Maken 1e for loop
$task3 = "Lancering in: ";
for($y=19;$y >= 0;$y--)
{
    $task3 .= $y.", ";
}
// Maken 2e while loop
$task4 = "";
$x = 1;
while($x <= 6)
{
    $task4 .= "<h$x>Dit is de ". $x. "e iteratie<h$x>";
    $x++;
}
// Maken 2e for loop
$task5 = '';
$t = "<table><tr>";
$r = "</table></tr>";
for($f=1; $f <= 10; $f++)
{
    $task5 .= "<td>Dit is de ". $f . "e iteratie</td><br>";
    $task5 = $t . $task5 . $r;
}


// Maken 3e while loop
$task6= '';
$year = date('Y');
$age = 17;

while($year >= 2003)
{

    $task6 .= "<p>In " . $year . " was ik " . $age . " jaar oud</p><br>";

    if($year == 2020){
        $task6 .= "<p>In " . $year. " ben/word ik " . $age . " jaar oud</p><br>";
    }
    elseif ($year == 2003){
        $task6 .= "<p>In " . $year . " ben ik geboren</p><br>";
    }

    $year--;
    $age--;
}

// Maken 3e for loop
$task7 = '';
$years = date('Y');
for($ages = 17; $ages > 0; $ages--)
{

    switch ($ages)
    {
        case 0:
            $task7 .= "<p>In $years ben ik $ages geboren en was ik een baby</p>";
            break;
        case 2:
            $task7 .= "<p>In $years? was ik $ages jaar oud en werd ik een peuter</p>";
            break;
        case 4:
            $task7 .= "<p>In $years? was ik $ages jaar oud en werd ik een kleuter</p>";
            break;
        case 8:
            $task7 .= "<p>In $years? was ik $ages jaar oud en werd ik een tiener</p>";
            break;
        case 12:
            $task7 .= "<p>In $years? was ik $ages jaar oud en werd ik een puber</p>";
            break;
        case 18:
            $task7 .= "<p>In $years? was ik $ages jaar oud en werd ik een adolescent</p>";
            break;
        case 20:
            $task7 .= "<p>In $years? was ik $ages jaar oud en werd ik een volwassen</p>";
            break;
        default:
            $task7 .= "<p>In $years? was ik $ages jaar oud</p>";
            break;
    }
    $year--;
}

?>


<?php
include "../../includes/footer.php"
?><?php
