
<?php
/**
 * User: Robbert
 * Date: 2-3-2020
 * Time: 11:10
 * File: Oefening 1
 */
?>
<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";
?>
<br>
<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu : $vandaag";
?>