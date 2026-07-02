<?php

session_start();


if (isset($_POST["actie"]) && $_POST["actie"] === "wissen") {
    session_unset(); 
    header("Location: index.php");
    exit();
}


if (
    isset($_POST["naam"]) && !empty(trim($_POST["naam"])) &&
    isset($_POST["leeftijd"]) && !empty(trim($_POST["leeftijd"])) &&
    isset($_POST["kleur"]) && !empty(trim($_POST["kleur"]))
) {

    $naam = trim($_POST["naam"]);
    $leeftijd = trim($_POST["leeftijd"]);
    $kleur = trim($_POST["kleur"]);

    if (!is_numeric($leeftijd)) {
        die("Leeftijd moet een getal zijn. <a href='index.php'>Terug</a>");
    }

   
    $_SESSION["naam"] = $naam;
    $_SESSION["leeftijd"] = $leeftijd;
    $_SESSION["kleur"] = $kleur;
    $_SESSION["timestamp"] = date("d-m-Y H:i");


    if (!isset($_SESSION["geschiedenis"])) {
        $_SESSION["geschiedenis"] = [];
    }

    $_SESSION["geschiedenis"][] = [
        "naam" => $naam,
        "leeftijd" => $leeftijd,
        "kleur" => $kleur,
        "timestamp" => $_SESSION["timestamp"]
    ];


    header("Location: index.php?opgeslagen=1");
    exit();

} else {
    die("Vul alle velden in. <a href='index.php'>Terug</a>");
}

?>