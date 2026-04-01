<?php
// Vanuit deze pagina hebben we toegang tot e sessiegegevens die we in page1.php hebben gezet


// Resume de sessie
session_start();

?>

<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_SESSION["favcolor"])){
    echo "Mijn favoriete kleur is " . $_SESSION["favcolor"] . ".<br>";
} else {
    echo "Geen sessie data gevonden";
}
?>



</body>
</html>