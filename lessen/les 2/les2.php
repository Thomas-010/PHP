<?php
$naam = "Thomas";
$leeftijd = 21;
$lengte = 1.95;
$isStudent = true;

echo "Hoi, " . $naam . "!". "\n";
echo "Je bent " . $leeftijd . " jaar oud." . "\n";
echo "Je bent " . $lengte . " meter lang." . "\n";
if ($isStudent) {
    echo "Je bent een student." . "\n";
} else {
    echo "Je bent geen student." . "\n";
}

var_dump($naam);
var_dump($leeftijd);
var_dump($lengte);
var_dump($isStudent);