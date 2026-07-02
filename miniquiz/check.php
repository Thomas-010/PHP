<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Resultaat</title>
</head>
<body>
<h2>Quiz Resultaat</h2>

<?php
// ophalen van het antwoord
$antwoord = $_POST["antwoord"];

// valideren: lege string
if (empty($antwoord)) {
    echo "Je moet een antwoord invullen";
    exit;
}

// valideren: minimaal 2 letters lang
if(strlen($antwoord) < 2 ) {
    echo"Je antwoord is te kort(minimaal 2 letters)";
    exit; 
}

// Quizcontrole
// maak eerst alles lowercase

$antwoord = strtolower($antwoord);


if (strpos($antwoord, "parijs") !== false) {
    echo "Correct! Goed gedaan!";
} else {
    echo "Helaas, dat is niet juist";
}



?>



</body>
</html>