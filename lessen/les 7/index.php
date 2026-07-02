<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijsberekenaar</title>
</head>
<body>
<h2>Prijsberekenaar</h2>

<form action="bereken.php" method="POST">
    <label>Productnaam:</label><br>
    <input type="text" name="productnaam"><br><br>

    <label>Prijs per stuk:</label><br>
    <input type="text" name="prijs_per_stuk"><br><br>

    <label>Aantal:</label><br>
    <input type="text" name="aantal"><br><br>

    <label>Kortinscode:</label><br>
    <input type="text" name="kortingscode"><br><br>

    <input type="submit" value="Bereken prijs">
</form> 
</body>
</html>