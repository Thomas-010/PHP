<?php
session_start();


var_dump($_POST);
var_dump($_SESSION);

$foutmelding = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $foutmelding = "Vul een geldig e-mailadres in.";
    }

    elseif (empty($password)) {
        $foutmelding = "Vul een wachtwoord in.";
    }
    else {

        $ingelogd = false;
        $regels = file("users.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($regels as $regel) {
            $delen = explode(",", $regel);

            if (count($delen) === 3) {
                $csvEmail = trim($delen[1]);
                $csvHash = trim($delen[2]);

                if ($csvEmail === $email && password_verify($password, $csvHash)) {
                    $ingelogd = true;
                    break;
                }
            }
        }

        if ($ingelogd) {
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            $foutmelding = "E-mailadres of wachtwoord is onjuist.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
</head>
<body>

    <h1>Inloggen</h1>

    <?php if ($foutmelding !== "") { ?>
        <p style="color: red;"><?php echo $foutmelding; ?></p>
    <?php } ?>

    <form method="POST">
        <label>E-mailadres:</label>
        <input type="email" name="email"><br>

        <label>Wachtwoord:</label>
        <input type="password" name="password"><br>

        <button type="submit">Inloggen</button>
    </form>

</body>
</html>