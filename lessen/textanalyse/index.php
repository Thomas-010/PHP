<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekstanalyse</title>
</head>
<body>

<?php

function countCharactersIn($tekst) {
    return strlen($tekst);
}

function countWordsIn($tekst) {
    return str_word_count($tekst);
}

function containsWord($tekst, $woord) {
    if (is_int(strpos(strtolower($tekst) , strtolower($woord)))) {
        return "Ja";
    } else {
        return "Nee";
    }
}

$input = "PHP is een krachtige taal voor webontwikkeling"; 

echo "<h2>Tekstanalyse</h2>";

echo "Tekst: $input<br><br>";

echo "Aantal karakters: " . countCharactersIn($input) . "<br>";

echo "Aantal woorden: " . countWordsIn($input) . "<br>";

echo "Het woord 'PHP' komt  voor in de string? " . containsWord($input, 'PHP') . "<br>";




?>
</body>
</html>

