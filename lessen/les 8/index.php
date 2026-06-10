<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenmachine</title>
</head>
<body>
    
    <h1>Rekenmachine</h1>

    <form action="verwerk.php" method="POST">

        <label for="Getal 1">Getal 1: </label>
        <input type="text" id="getal1" name="getal1">
        <br><br>

        <label for="Getal 2">Getal 2: </label>
        <input type="text" id="getal2" name="getal2">
        <br><br>

        <label for="bewerking">Bewerking:</label>
        <select id="bewerking" name="bewerking">
            <option value="optellen">Optellen</option>
            <option value="aftrekken">Aftrekken</option>
            <option value="vermenigvuldigen">Vermenigvuldigen</option>
            <option value="delen">Delen</option>
        </select>
        <br><br>

        <button type="submit">Berekenen</button>

    </form>

    
</body>
</html>