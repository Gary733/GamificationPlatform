<?php
session_start();
session_destroy();
echo "Logout erfolgreich";
//echo "<br>Du wirst in 2sek weitergeleitet...";
echo"<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
?>