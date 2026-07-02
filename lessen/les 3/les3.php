<?php
$naam = "Thomas";
$leeftijd = 16;
$heeftVIPpas = false;
$heeftKorting = false;
$isBegeleiderAanwezig = true;


if ($heeftVIPpas) {
    echo "Hallo $naam! Je bent $leeftijd jaar oud, Je hebt een VIP-pas. Je hebt altijd toegang. Ticketprijs: gratis " . "\n";
} 
else if ($leeftijd <= 12) {
    echo "Hallo $naam! Je bent $leeftijd jaar oud, je hebt geen toegang tot het park" . "\n";
} 
if ($leeftijd >= 13 && $leeftijd <= 17) {
    echo "Hallo $naam! Je bent $leeftijd jaar oud, je hebt toegang tot het park omdat $isBegeleiderAanwezig je begeleider aanwezig is. De ticketprijs is €8." . "\n";
}
if ($leeftijd >= 18) {
    echo "Hallo $naam! Je bent $leeftijd jaar oud, je hebt toegang tot het park. De ticketprijs is €12." . "\n";
}



