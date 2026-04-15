<?php
session_start();
require_once 'functies.php';
$bestelling = $_SESSION['laatste_bestelling'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling</title>
</head>
<body>
    <h1>Bedankt voor je bestelling!</h1>
    
    <?php 
    echo "Naam: " . htmlspecialchars($bestelling[0]) . "<br>";
    echo "Email: " . htmlspecialchars($bestelling[1]) . "<br>";
    echo "Totaal: " . number_format($bestelling[2], 2, ',', '.') . "<br>";
    echo "Bestelde producten: " . htmlspecialchars($bestelling[3]) . "<br>";
    ?>
</body>
</html>