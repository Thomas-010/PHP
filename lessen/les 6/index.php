<?php
$spelers = ["Sam", "Aisha", "Liam", "Noor", "Daan"];

$scores = [
    "Sam" => 12,
    "Aisha" => 18,
    "Liam" => 9,
    "Noor" => 22,
    "Daan" => 15
];

var_dump($spelers);
var_dump($scores);

foreach ($spelers as $speler) {
    $score = $scores[$speler];
    echo "$speler heeft een score van $score\n" . "<br>";
}

echo "<br><br>";

echo "Top 3 spelers:\n";
for ($i = 0; $i < 3; $i++) {
    echo $spelers[$i] . "<br>";
}
echo "<br><br>";

$count = 10;
echo "Countdown:\n";
    while ($count > 0) {
        echo "$count\n" . "<br>";
        $count--;
    }

echo "<br><br>";


$totalescore = 0;
foreach ($scores as $score) {
    $totalescore += $score;
}

echo "Totale score: $totalescore<br>";


if ($totalescore >= 60) {
    echo "Goed gedaan!";
}   else {
    echo "Er is nog ruimte voor verbetering.";
}

?>
