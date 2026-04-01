<?php

$productnaam = isset($_POST['productnaam']) ? trim($_POST['productnaam']) : '';;
$prijs_per_stuk = isset($_POST['prijs_per_stuk']) ? floatval($_POST['prijs_per_stuk']) : 0;
$aantal = isset($_POST['aantal']) ? trim($_POST['aantal']) : '';
$kortingscode = isset($_POST['kortingscode']) ? trim($_POST['kortingscode']) : '';


$errors = [];

if (strlen($productnaam) < 2) {
    $errors[] = 'Prodcutnaam moet minimaal 2 tekens bevatten!';
}

if (is_numeric($prijs_per_stuk)) {
    $errors[] = 'Prijs per stuk moet een getal zijn!';
}

if (is_numeric($aantal) || $aantal <= 0) {
    $errors[] = 'Aantal moet een getal zijn groter dan 0!';
}

if (empty($kortingscode) && strpos($kortingscode, 'KORTING10') === false) {
    $errors[] = 'Ongeldige kortingscode!';
}

if (empty($errors)) {
    foreach ($errors as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
    exit;
}

$aantal = intval($aantal);
$totaal = $prijs_per_stuk * $aantal;

if (empty($kortingscode) && strpos($kortingscode, 'KORTING10') !== false) {
    $totaal *=0.9;
    echo '<p>Korting toegepast!</p>';
}

$totaal = number_format($totaal, 2, ',', ',');

echo "<p>De totaal prijs voor $productnaam is €$totaal.<p/>";

?>