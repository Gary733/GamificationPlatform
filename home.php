<?php
session_start();
$acc= $_SESSION['username'];
if (!isset($_SESSION['username'])) {
   echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
} else {

//echo"Hallo $acc, du bist eingeloggt.";
    
    echo"<center><br>
        
<table border=0>
<tr>
    <td>Verdiente Punkte</td>
</tr>
<tr>
    <td>letzte Woche</td><td>+11</td>
</tr>
<tr>
    <td>Ranking</td><td>Platz 15</td>
</tr>
</table></center>
     ";
}
?>