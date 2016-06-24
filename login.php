<?php
session_start();
include "config.php";
$acc = $_POST["acc"];
$pw = $_POST["pw"];
$register=$_GET["register"];
$pwhash = md5($pw);

$con=mysql_connect($sql_host,$sql_user,$sql_pw) or die("keine db verbindung");
mysql_select_db($sql_db) or die ("Die Datenbank existiert nicht.");


			//navbar top
echo'
<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                </div>
            </div>
        </nav>
';
            
echo"<center>";

if($register!=1){
            //Login Formular
echo'
<form action="index.php" method="post" charset="UTF-8">
  Name:<br>
  <input type="text" name="acc"><br>
  Passwort:<br>
  <input type="password" name="pw">
  <br>
  <input type="submit" value="einloggen">
</form>
';
echo '<br><a href="index.php?register=1">neu registrieren</a><br>';

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
}else {include "register.php";};

echo"</center>";
   		//footer
echo'
<div style="width:100%;margin-top:0;position: absolute; bottom: 0;">
<footer class="container-fluid text-center">
            <p>Some links for websites</p>
        </footer></div>
		';
?>