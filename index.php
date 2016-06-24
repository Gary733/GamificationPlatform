<?php
session_start();
include "config.php";
$acc= $_SESSION['username'];
$page = $_GET["page"];
$title="Gamification Platform - Hochschule Hamm-Lippstadt";



echo "
<html><head>
<link rel=\"icon\" href=\"favicon2.ico\" type=\"image/vnd.microsoft.icon\">
<meta charset='utf-8'/>
<title>$title</title>
<style>div { border: 0px ; }</style>

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <link href=\"css/design.css\" type=\"text/css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"css/desgin.css\" type=\"text/css\"/>

</head>";

if (!isset($_SESSION['username'])) {
   include "login.php";
} else {
echo"<body align=center>";

			//navbar top
echo'
<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li ';
					if ($page!="settings"){echo'class="active"';}						
					echo'
						><a href="index.php?page=home">Home</a></li>
						<li ';						
					if ($page=="settings"){echo'class="active"';}						
					echo'
						><a href="index.php?page=settings">Settings</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>';echo" $acc";echo' ausloggen</a></li>
                    </ul>
                </div>
            </div>
        </nav>
';
		
		

echo'<div style="width:100%;">';
		//div box left menu
echo "<div style='width:20%;display:inline;float:left;background-color: #EEEEEE;max-width:200;height:100%;'>";
//echo "<div style='width:20%;'>";
include "leftmenu.php";
echo "</div>";

		//div box main pages
echo"<div style='width:78%;display:inline;float:left;'>";

switch($page)
	{case "home": include "home.php";break;
	 case "settings": include "settings.php";break;
	 case "marks": include "marks.php";break;
	 default: include "home.php";break;
	};
echo"</div>";



echo'</div>';
		//footer
echo'
<div style="width:100%;margin-top:0;position: absolute; bottom: 0;">
<footer class="container-fluid text-center">
            <p>Some links for websites</p>
        </footer></div>
		';


}

echo "</body></html>";
?>