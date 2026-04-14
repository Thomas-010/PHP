<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profielgenerator</title>
</head>
<body>
    <h1>Vul je profiel in</h1>

    <form action="generate.php" method="GET">

        <label>Naam:</label>
        <input type="text" name="naam" required maxlength="50">
        <br>

        <label>Leeftijd:</label>
        <input type="number" name="leeftijd" required min="1" max="120">
        <br> 
        
        <label>Woonplaats:</label>
        <input type="text" name="woonplaats" required maxlength="50">
        <br>

        <label>Favoriete getal:</label>
        <input type="number" name="favorieteGetal" required min="1">
        <br>

        <button type="submit">Verstuur</button>

    </form>
</body>
</html>