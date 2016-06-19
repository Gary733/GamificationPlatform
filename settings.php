<?php
session_start();
include "config.php";
$acc= $_SESSION['username'];
$pwold = $_POST["pwold"];
$pwnew = $_POST["pwnew"];
$pwnew2 = $_POST["pwnew2"];
$pwoldhash=md5($pwold);
$pwnewhash=md5($pwnew);
if (!isset($_SESSION['username'])) {
   echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
} else {

$con=mysql_connect($sql_host,$sql_user,$sql_pw) or die("keine db verbindung");
mysql_select_db($sql_db) or die ("Die Datenbank existiert nicht.");

echo'
<form action="index.php?page=settings" method="post" charset="UTF-8">
  Dein altes Passwort:<br>
  <input type="password" name="pwold"><br>
  neues Passwort:<br>
  <input type="password" name="pwnew"><br>
  nochmal:<br>
  <input type="password" name="pwnew2"><br>
  <input type="submit" value="ändern">
</form><br>';

if($pwold && $pwnew && $pwnew2){
	if($pwnew!=$pwnew2){echo"Die neuen Passwörter stimmen nicht überein!<br>Bitte nochmal eingeben.";}
		else {
			$abfrage = "SELECT name,pwhash FROM accounts where name='$acc'";
			$ergebnis = mysql_query($abfrage);
			while($row = mysql_fetch_object($ergebnis))
				{
					if($acc==$row->name&&$pwoldhash==$row->pwhash)
						{$correct=1;} 
				}
			if($correct==1){
			$sql="update accounts set pwhash='$pwnewhash' where name='$acc';";
			$eintragen=mysql_query($sql);
			echo "Passwort wurde geändert.";
			}else{echo "Du hast ein falsches Passwort eingegeben!<br>Bitte nochmal eingeben.";};
			};
}
}
?>