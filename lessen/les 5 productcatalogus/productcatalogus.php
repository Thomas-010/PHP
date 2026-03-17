<?php
$producten = ["Laptop", "Muis", "Toetsenbord"];

$productInfo = [
"naam" => "Laptop",
"prijs" => 899.99,
"voorraad" => 12,
"categorie" => "Elektronica"
];


var_dump($producten);
echo "<br><br>";

var_dump($productInfo);
echo "<br><br>";

echo "Naam: " . $productInfo["naam"] . "<br>";
echo "Prijs: €" . $productInfo["prijs"] . "<br>";
echo "Voorraad: " . $productInfo["voorraad"] . "<br>";
echo "Categorie: " . $productInfo["categorie"] . "<br>";

$totaleWaarde = $productInfo["prijs"] * $productInfo["voorraad"];
$totaleWaarde2 = $productInfo["prijs"] * $productInfo["voorraad"];



?>