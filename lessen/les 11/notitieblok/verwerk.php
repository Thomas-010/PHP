<?php

$noteFile = "nootje.txt";
$errorLogFile = "error_log.txt";

if (isset($_POST["notitie"]) && !empty(trim($_POST["notitie"]))) {

    $notitie = trim($_POST["notitie"]);
    $timestamp = date("d-m-Y H:i");

    $regel = "[" . $timestamp . "] " . $notitie . "\n";
    $handle = fopen($noteFile, "a");

    if ($handle === false) {
        $foutmelding = "Kon " . $noteFile . " niet openen voor schrijven.";
        loggenFout($errorLogFile, $noteFile, $foutmelding);
        die("Er ging iets mis bij het opslaan van je notitie.");
    }

    fwrite($handle, $regel);
    fclose($handle);

    echo "Notitie succesvol opgeslagen.";
    echo "<br><a href='index.php'>Terug naar het notitieblok</a>"; 
} else {
    echo "Vul eerst een notitie in voordat je verstuurt.";
    echo "<br><a href='index.php'>Terug naar het notitieblok</a>";
}

function loggenFout($errorLogFile, $bestandsnaam, $foutmelding) {
    $timestamp = date("d-m-Y H:i");
    $logRegel = "[" . $timestamp . "] " . $foutmelding . "\n";

    $logHandle = fopen($errorLogFile, "a");

    if ($logHandle !== false) {
        fwrite($logHandle, $logRegel);
        fclose($logHandle);
    }
    
}

?>



