<?php

$naam = "Alex";
$leeftijd = 17;
$rol = "bezoeker";

echo "Welkom " . $naam .'!<br>';

if ($leeftijd >= 17) {
    echo "Je bent " . $leeftijd . " jaar, dus je mag naar binnen.<br>";
} else {
    echo "Sorry " . $naam . ", je bent te jong.<br>";
}

echo "Rol:" . $rol . ".<br>";

var_dump($naam, $leeftijd, $rol);
