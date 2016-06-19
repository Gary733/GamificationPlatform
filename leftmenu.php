<?php
session_start();
if (!isset($_SESSION['username'])) {
   echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
} else {

echo'
   
                    <ul class="nav nav-pills nav-stacked">
                        <li ';
						
						if($page=="home"){
						echo 'class="active"';
						};
						echo'
						><a href="index.php?page=home">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Notenübersicht
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=marks">Dashboard</a></li>
                                <li><a href="#">Semester2</a></li>
                                <li><a href="#">Semester3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Page3</a></li>
                        <li><a href="#">Page4</a></li>
                    </ul>
                
            
';


/*
echo "<a href='index.php?page=home'>Home</a>";

echo"<br>Statistik<br>anderes";
*/

}
?>