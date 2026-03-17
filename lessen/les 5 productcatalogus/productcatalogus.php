<?php
 
$producten = ["laptop", "muis", "toetsenbord"];
 
$productInfo = [
"naam" => "laptop",
"prijs" => 1999.99,
"voorraad" => 24,
"categorie" => "Elektronica"
];
 
var_dump($producten);
var_dump($productInfo);
 
echo "\n";
 
$nummer = 1;
 
foreach ($producten as $product) {
    echo "Product $nummer: $product\n";
    $nummer++;
}
 
foreach ($productInfo as $key => $value) {
    echo ucfirst($key) . ": $value\n";
}
 
$totaleWaarde = $productInfo["prijs"] * $productInfo["voorraad"];
echo "Totale waarde: $totaleWaarde\n";