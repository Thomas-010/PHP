<?php

$naam = "Thomas";
$leeftijd = 19;
$bedrag = 12.50;
$tekst = "programmeren";

function formatBedrag($Bedrag) {
    return "€" . $bedrag;
}

function isLangWoord($tekst) {
    return strlen($tekst) > 8;
}

function berekenToekomstLeeftijd($leeftijd, $jaren) {
    return $leeftijd + $jaren;
}

function maakIntro($naam, $leeftijd) {
    return "Hallo, ik ben " . $naam . " en ik ben $leeftijd jaar.";
}

echo "Bedrag: " . formatBedrag($bedrag) . "<br>";

$langwoord = isLangWoord($tekst) ? "ja" : "nee";
echo "Is '$tekst' een lang woord? $langwoord<br>";

$toekomstleeftijd = berekenToekomstLeeftijd($leeftijd, 5);
echo "Over 5 jaar ben je " . $toekomstleeftijd . "jaar.<br>";

echo maakIntro($naam, $leeftijd) . "<br>";


var_dump(maakIntro($naam, $leeftijd));
var_dump($naam, $leeftijd, $bedrag, $tekst);

$prijzen = [12.5, 3.99, 100];

echo "<br>Prijzen:<br>";
foreach ($prijzen as $prijs) {
    echo formatBedrag($prijs) . "<br>";
}