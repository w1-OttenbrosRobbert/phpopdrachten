<?php
/**
 * User: Robbert
 * Date: 2-3-2020
 * Time: 12:45
 * File: Footer.php
 */
?>
<div class="box">
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    $jaar = date("Y");
    $moment ='';

    if($uur >= 0 && $uur <= 5){
        $moment = 'Goedennacht';
    }
    else if ($uur >= 5 && $uur <= 12){
        $moment = 'Goedenochtend';
    }
    else if($uur >= 12 && $uur <= 17){
        $moment = 'Goedenmiddag';
    }
    else if ($uur >= 17 && $uur <= 0){
        $moment = 'Goedenavond';
    }

    echo $moment . ' bezoeker, &copy; Robbert Ottenbros ' . $jaar;
    ?>
</div>
</body>
</html>
