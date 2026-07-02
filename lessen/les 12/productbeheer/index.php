<?php


var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productnaam = $_POST["productnaam"];
    $prijs = $_POST["prijs"];
    $categorie = $_POST["categorie"];
        
    if ($productnaam !== "" && $prijs !== "" && $categorie !== "") {
        $regel = $productnaam . ";" . $prijs . ";" . $categorie . "\n";
        file_put_contents("producten.csv", $regel, FILE_APPEND);
    } else {
        echo "Vul alle velden in!<br>";
    }
}

?>

<form method="POST">
    <label>Productnaam:</label>
    <input type="text" name="productnaam"><br>

    <label>Prijs:</label>
    <input type="number" name="prijs" step="0.01"><br>

    <label>Categorie:</label>
    <input type="text" name="categorie"><br>

    <button type="submit">Toevoegen</button>
</form>

<hr>

<?php


$inhoud = file_get_contents("producten.csv");
var_dump($inhoud);

$regels = explode("'\n", $inhoud);

echo "<h3>Productenlijst</h3>";
echo "<ul>";


$totaalPrijs = 0;
$aantalProducten = 0;
$duursteNaam = "";
$duursteBedrag = -1;
$goedkoopsteNaam = "";
$goedkoopsteBedrag = -1;


foreach ($regels as $regel) {
    $regel = trim($regel);

    if ($regel === "") {
        continue;
    }

    $delen = explode(";", $regel);

    if (count($delen) === 3) {
        $naam = $delen[0];
        $prijs = $delen[1];
        $categorie = $delen[2];

        echo "<li>" . $naam . " – €" . $prijs . " (Categorie: " . $categorie . ")</li>";

 
        $aantalProducten++;
        $totaalPrijs = $totaalPrijs + floatval($prijs);

        if ($duursteBedrag === -1 || floatval($prijs) > $duursteBedrag) {
            $duursteBedrag = floatval($prijs);
            $duursteNaam = $naam;
        }

        if ($goedkoopsteBedrag === -1 || floatval($prijs) < $goedkoopsteBedrag) {
            $goedkoopsteBedrag = floatval($prijs);
            $goedkoopsteNaam = $naam;
        }
    }
}

echo "</ul>";


if ($aantalProducten > 0) {
    $gemiddelde = $totaalPrijs / $aantalProducten;

    echo "<h3>Statistieken</h3>";
    echo "Totaal aantal producten: " . $aantalProducten . "<br>";
    echo "Gemiddelde prijs: €" . round($gemiddelde, 2) . "<br>";
    echo "Duurste product: " . $duursteNaam . " (€" . $duursteBedrag . ")<br>";
    echo "Goedkoopste product: " . $goedkoopsteNaam . " (€" . $goedkoopsteBedrag . ")<br>";
}

?>