<?php

echo "<h2>Notities</h2>";

// Stap 1: Een tekstbestand lezen: fopen -> fread -> fclose
$filename = "note.txt";

// controleer of het bestand bestaat
if (!file_exists($filename)) {
    die("Het bestand bestaat niet");
}

$file = fopen($filename, "r");

// controleer of het bestand geopend kan worden
if ($file === false) {
    die("Kon het bestand niet openen");
}


// inhoud van het bestand in een keer inlezen
// en het bestand mag niet leeg zijn!
$filesize = filesize($filename);
if ($filesize != 0) {
    $note = fread($file, $filesize);
}

fclose($file);

echo $note . "<br>";

?>