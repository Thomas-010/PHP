<?php

session_start();

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Persoonlijk Profiel</title>
</head>
<body>

    <h1>Persoonlijk Profiel</h1>

    
    <p><small>Sessie-ID: <?php echo session_id(); ?></small></p>

    <?php
    
    if (isset($_GET["opgeslagen"])) {
        echo "<p style='color: green;'>Gegevens opgeslagen!</p>";
    }
    ?>

    
    <form action="verwerk.php" method="POST">
        <label>Naam:</label>
        <input type="text" name="naam"><br>

        <label>Leeftijd:</label>
        <input type="number" name="leeftijd"><br>

        <label>Favoriete kleur:</label>
        <input type="text" name="kleur"><br>

        <button type="submit">Opslaan</button>
    </form>

    <hr>

    <?php
    if (isset($_SESSION['naam'])) {
        echo "<h2>Jouw profiel</h2>";
        echo "Naam: " . $_SESSION["naam"] . "<br>";
        echo "Leeftijd: " . $_SESSION["leeftijd"] . "<br>";
        echo "Favoriete kleur: " . $_SESSION["kleur"] . "<br>";

       
        if (isset($_SESSION["timestamp"])) {
            echo "Laatst bijgewerkt: " . $_SESSION["timestamp"] . "<br>";
        }

       
        echo "<form action='verwerk.php' method='POST'>";
        echo "<input type='hidden' name='actie' value='wissen'>";
        echo "<button type='submit'>Wis mijn profiel</button>";
        echo "</form>"; 
        } else {
        echo "<p>Nog geen profiel opgeslagen.</p>";
    }
    ?>

    <hr>

    <?php
    
    if (isset($_SESSION["geschiedenis"]) && count($_SESSION["geschiedenis"]) > 0) {
        echo "<h2>Profielgeschiedenis</h2>";
        echo "<ul>";
        foreach ($_SESSION["geschiedenis"] as $item) {
            echo "<li>" . $item["timestamp"] . " - " . $item["naam"] . ", " . $item["leeftijd"] . " jaar, kleur: " . $item["kleur"] . "</li>";
        }
        echo "</ul>";
    }
    ?>

</body>
</html>


