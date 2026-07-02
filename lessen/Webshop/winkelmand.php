<?php
require_once 'functies.php';

if (isset($_POST['leeg'])) {
    leegWinkelmand();
    header('Location: winkelmand.php');
    exit;
}

$winkelmand = leesWinkelmand();

$alleProducten = leesProducten();
$productenOpId = [];
foreach ($alleProducten as $product) {
    $productenOpId[$product['id']] = $product;
}

$totaal = berekenTotaal($winkelmand, $alleProducten);

?>
 
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand</title>
</head>
<body>
    <h1>Winkelmand</h1>

    <nav>
        <a href="index.php">Home</a> |
        <a href="producten.php">Verder winkelen</a>
    </nav>

    <h2>Overzicht van je producten</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Product</th>
            <th>Aantal</th>
            <th>Prijs per stuk</th>
            <th>Subtotaal</th>
        </tr>

        <!-- Hier komen later de producten uit de winkelmand -->
        <?php if (empty($winkelmand)): ?> 
        <tr>
            <td colspan="4">Je winkelmand is nog leeg.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($winkelmand as $id => $aantal): ?>
                <?php
                    $product   = $productenOpId[$id];
                    $prijs     = (float) $product['prijs'];
                    $subtotaal = $prijs * $aantal;
                ?>
                 <tr>
                    <td><?php echo htmlspecialchars($product['naam']); ?></td>
                    <td><?php echo $aantal; ?></td>
                    <td>€ <?php echo number_format($prijs, 2, ',', '.'); ?></td>
                    <td>€ <?php echo number_format($subtotaal, 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
                    
    </table>

    <!-- Hier komt later de totaalregel -->
    <p><strong>Totaal:</strong> € <?php echo number_format($totaal, 2, ',', '.'); ?></p>

    <form method="post">
        <button type="submit" name="leeg">Winkelmand legen</button>
    </form>

    <p>
        <a href="bestellen.php">Verder naar bestellen</a>
    </p>
</body>
</html>
