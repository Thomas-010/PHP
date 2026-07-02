<?php
session_start();

var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn Account</title>
</head>
<body>

    <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true) { ?>

        <h1>Welkom</h1>
        <p>Je bent ingelogd als <?php echo $_SESSION['email']; ?></p>
        <a href="logout.php">Uitloggen</a>

    <?php } else { ?>

        <h1>Niet ingelogd</h1>
        <p>Je bent nog niet ingelogd.</p>
        <a href="login.php">Ga naar de inlogpagina</a>

    <?php } ?>

</body>
</html>