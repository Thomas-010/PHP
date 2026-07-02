<?php
// start de sessie
session_start();

?>

<!DOCTYPE html>
<html>
<body> 


<?php
// Stel de sessie variablen in

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "dog";
echo "Sessie variabelen zijn geset";


?>



</body>
</html>