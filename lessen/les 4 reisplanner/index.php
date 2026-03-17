<?php

$afstandKm = 80;
$isSpitsuur = true;

var_dump($afstandKm);
var_dump($isSpitsuur);

$bestemming = 'Rotterdam';
$snelheidKmU = 100;
$prijsPerKm = 0.40;

$rijstijdUur = $afstandKm / $snelheidKmU;
$kosten = $afstandKm * $prijsPerKm;

echo '<h2>Reisplanner</h2>';
echo 'Bestemming: '. $bestemming . '<br>';
echo 'Afstand; ' . $afstandKm . "km<br>";
echo 'Gemiddelde snelheid:' . $snelheidKmU . "km/u<br>";
echo 'Reistijd: ' . $rijstijdUur . 'uur<br>';
echo 'Kosten: €' . $kosten . '<br><br>';

if ($isSpitsuur) {
    echo 'Let op: het is spitsuur, reken op extra reistijd.<br>';
} else {
    echo 'Geen spitsuur, je reist waarschijnlijk vlot door.<br>'; 
}



?>