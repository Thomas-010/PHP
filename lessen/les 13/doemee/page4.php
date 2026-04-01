<?php
// Om een sessievariabelen te wijzigen, hoeft u dese alleen maar te overschrijven.

// Resume de sessie
session_start();
?>

<!DOCTYPE html>
<html>
<body>
    

<?php
$_SESSION ["favcolor"] = "red";
print_r($_SESSION);
?>

</body>
</html>