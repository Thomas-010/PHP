<?php
session_start();
require_once 'functies.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO Fase 3: valideer naam
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    // TODO Fase 3: valideer email
    $fouten = [];

    if (!isGeldigeNaam($naam)) {
        $fouten[] = 'Vul een geldige naam in.';
    }

    if (!isGeldigEmail($email)) {
        $fouten[] = 'Vul een geldig e-mailadres in.';
    }

    // TODO Fase 3: schrijf bestelling weg
    if (empty($fouten)) {
        $winkelmand     = leesWinkelmand();
        $alleProducten  = leesProducten();
        $totaal         = berekenTotaal($winkelmand, $alleProducten);

        $regel = [
            $naam,
            $email,
            $totaal,
            implode('; ', array_keys($winkelmand))
        ]; 
        
        $bestand = fopen('data/bestellingen.csv', 'a');
        fputcsv($bestand, $regel);
        fclose($bestand);

        $_SESSION['laatste_bestelling'] = $regel;

        leegWinkelmand();
        header('Location: bevestiging.php');
        exit;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellen</title>
</head>
<body>
    <h1>Bestellen</h1>


    <?php if (!empty($fouten)): ?>
        <ul>
            <?php foreach ($fouten as $fout): ?>
                <li><?php echo htmlspecialchars($fout); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <label>Naam:</label>
        <input type="text" name="naam" value="<?php echo isset($naam) ? htmlspecialchars($naam) : ''; ?>">

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">

        <button type="submit">Bestelling plaatsen</button>
    </form>
</body>
</html>