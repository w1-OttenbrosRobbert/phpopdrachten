<?php
/**
 * User: Robbert
 * Date: 6-3-2020
 * Time: 12:45
 * File: script.php
 */
?>

<?php
include "../includes/header.php"
?>

<?php

$courseName = 'PHP';
$teacherName = '';

switch($courseName)
{
    case "Nederlands":
        $teacherName = 'Ende, Jan-Chris van den';
        break;
    case "Engels":
        $teacherName = 'Giesen, Jan';
        break;
    case "PHP":
        $teacherName = 'Saebu, Abu';
        break;
    case "JavaScript":
        $teacherName = 'Evers, Remco';
        break;
    case "ASP":
        $teacherName = 'Meer, Martijn van';
        break;
    case "Modeleren":
        $teacherName = 'Bijnen, Wim van';
        break;
    case "Database SQL":
        $teacherName = 'Wetering, Martijn van de';
        break;
    case "Digitale vaardigheden gevorderd":
        $teacherName = 'Pielage, Larissa';
        break;
    case "Rekenen":
        $teacherName = 'Wetering, Martijn van de';
        break;
    case "Loopbaan & Burgerschap":
        $teacherName = 'Ruiter, Paula de';
        break;
    case "Computertekenen":
        $teacherName = 'Berg, Pieter van den';
        break;
}

echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>

<?php
include "../includes/footer.php"
?>
