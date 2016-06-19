<?php
session_start();
$acc= $_SESSION['username'];
if (!isset($_SESSION['username'])) {
   echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
} else {

echo"Hallo $acc, du bist eingeloggt.";
}
?>