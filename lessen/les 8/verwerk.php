<?php

var_dump($_POST);

$getal1 = trim($_POST['getal1'] ?? '');
$getal2 = trim($_POST['getal2'] ?? '');
$bewerking = $_POST['bewerking'] ?? '';

$fouten = [];

if ($getal1 === '') {
    $fouten[] = 'Getal 1 is niet ingevuld!';
} elseif (!is_numeric($getal1)) {
    $fouten[] = 'Getal 1 is geen geldig getal!';
}    

if ($getal2 === '') {
    $fouten[] = 'Getal 2 is niet ingevuld!';
} elseif (!is_numeric($getal2)) {
    $fouten[] = 'Getal 2 is geen geldig getal!';
}

if ($bewerking === 'delen' && is_numeric($getal2) && $getal2 == 0) {
    $fouten[] = 'Delen door nul is niet toegestaan!';
}

if (!empty($fouten)) {
    foreach ($fouten as $fout) {
        echo "<p style='color:red;'>$fout</p>";
    }
} else {
    $symbolen = [
        "optellen"          => "+",
        "aftrekken"         => "-",
        "vermenigvuldigen"  => "x",
        "delen"             => "÷"
    ];

    $getal1 = (float) $getal1;
    $getal2 = (float) $getal2;

    if ($bewerking === 'optellen') {
        $resultaat = $getal1 + $getal2;
    } elseif ($bewerking === 'aftrekken') {
        $resultaat = $getal1 - $getal2;
    } elseif ($bewerking === 'vermenigvuldigen') {
        $resultaat = $getal1 * $getal2;
    } elseif ($bewerking === 'delen') {
        $resultaat = $getal1 / $getal2;
    }

    $symbool = $symbolen[$bewerking];

    echo "<p>" . $getal1 . " $symbool " . $getal2 . "= <strong>$resultaat<?strong></p>";

     $invoer = [
        "Getal 1"   => $getal1,
        "Getal 2"   => $getal2,
        "Bewerking" => $bewerking
    ];

    echo "<ul>";
    foreach ($invoer as $label => $waarde) {
        echo "<li>$label: $waarde</li>";
    }
    echo "</ul>";
}


?>