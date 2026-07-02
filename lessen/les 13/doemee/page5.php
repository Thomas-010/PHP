<?php

// Resume de sessie
session_start();


?>


<!DOCTYPE html>
<html>
<body>

<?php

// unset alle sessie variabelen
session_unset();

// stop de sessie
session_destroy();

echo "Sessie is beëindigd"; 
?>


</body>
</html>