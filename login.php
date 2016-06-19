<?php
session_start();
include "config.php";
$acc = $_POST["acc"];
$pw = $_POST["pw"];
$pwhash = md5($pw);

$con=mysql_connect($sql_host,$sql_user,$sql_pw) or die("keine db verbindung");
mysql_select_db($sql_db) or die ("Die Datenbank existiert nicht.");

echo'
<form action="login.php" method="post" charset="UTF-8">
  Acc:<br>
  <input type="text" name="acc"><br>
  PW:<br>
  <input type="password" name="pw">
  <br>
  <input type="submit" value="login">
</form>';
echo '<br><a href="register.php">neu registrieren</a><br>';

$abfrage = "SELECT name,pwhash,locked FROM accounts";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
	if($acc==$row->name&&$row->locked==0&&$pwhash==$row->pwhash)
		{
		$correct=1;
		} 
	}
if($correct==1){echo "acc und pw richtig!!";
$_SESSION['username'] = $acc;
echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php?page=home\">";
}
elseif($acc) echo "Accountname oder Passwort ist falsch.";
	
   
?>