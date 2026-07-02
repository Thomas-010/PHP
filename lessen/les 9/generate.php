<?php
$naam = "Thomas";
$leeftijd = 21;
$woonplaats = "Strijen";
$favorieteGetal = 6;

function maakBegroeting($naam) {
    return "Hallo, jou naam is " . $naam . "!";
}

function berekenGeboortejaar($leeftijd) {
    $huidigJaar = 2025;
    return $huidigJaar - $leeftijd;
}

function berekenGeluksgetal($favorieteGetal, $leeftijd) {
    return $favorieteGetal * $leeftijd;

}

echo maakBegroeting($naam) . "<br>";
echo "Je geboortejaar is: " . berekenGeboortejaar($leeftijd) . "<br>";
echo "Je geluksgetal is: " . berekenGeluksgetal($favorieteGetal, $leeftijd) . "<br>";

echo "Hallo" . $naam . ", je woont in " . $woonplaats . "<br>";
echo "Hallo $naam, je woont in $woonplaats.<br>";

var_dump($naam, $leeftijd); 
var_dump(berekenGeboortejaar($leeftijd));


?>
