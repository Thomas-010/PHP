<?php
$spelers = ["Sam", "Aisha", "Liam", "Noor", "Daan"];

$scores = [
    "Sam" => 12,
    "Aisha" => 18,
    "Liam" => 9,
    "Noor" => 22,
    "Daan" => 15
];

foreach ($spelers as $speler) {
    $score = $scores[$speler];
    echo "$speler heeft een score van $score\n";
}


?>