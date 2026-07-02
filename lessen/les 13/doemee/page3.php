<?php
// Een andere manier om alle sessievariabelenwaarden voor een gebruikersessie weer te geven

// Resume de sessie
session_start();



?>

<!DOCTYPE html>
<html>
<body>
    
<?php

print_r($_SESSION);

?>

</body>
</html>