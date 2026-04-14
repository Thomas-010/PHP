<?php
session_start();
require_once 'functies.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['product_id'];
    voegToeAanWinkelmand($id);
    header('Location: producten.php');
    exit;
}


$producten = leesProducten();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
</head>
<body>
    
<h1>Webshop</h1>

<?php foreach ($producten as $product): ?>
    <div>
        <h2><?php echo htmlspecialchars($product['naam']); ?></h2>

        <img src="images/<?php echo htmlspecialchars($product['afbeelding']); ?>" width="150">

        <p>€ <?php echo number_format($product['prijs'], 2, ',', ',' ); ?></p>

        <form method="post">
            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
            <button>Toevoegen aan winkelmand</button>
        </form>
    </div>
<?php endforeach; ?>

</body>
</html>