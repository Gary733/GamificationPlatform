<?php
session_start();
include "config.php";
$acc = $_POST["acc"];
$pw = $_POST["pw"];
$pwhash = md5($pw);

if($acc&&$pw){
$con=mysql_connect($sql_host,$sql_user,$sql_pw) or die("keine db verbindung");
mysql_select_db($sql_db) or die ("Die Datenbank existiert nicht.");

$abfrage = "SELECT name FROM accounts";
$ergebnis = mysql_query($abfrage);
while($row = mysql_fetch_object($ergebnis))
   {
	if($acc==$row->name)
		{
		$nameistaken=1;
		break;
		}
};
if($nameistaken==1){echo "Den Account namen gibt es schon!";}
else{
	$sql="insert into accounts(name, pwhash) values ('$acc', '$pwhash');";
	$eintragen=mysql_query($sql);
	echo "Registrierung erfolgreich! Du wirst jetzt eingeloggt...";
	$_SESSION['username'] = $acc;
	echo"<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
};
}

echo'
<form action="register.php" method="post" charset="UTF-8">
  Acc:<br>
  <input type="text" name="acc"><br>
  PW:<br>
  <input type="password" name="pw">
  <br>
  <input type="submit" value="register">
</form>';
?>