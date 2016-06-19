<?php
session_start();
if (!isset($_SESSION['username'])) {
   echo"<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
} else {

echo'
 <ul class="nav nav-pills nav-stacked">
                        
                        <li ';
						
						if($page=="settings"){
						echo 'class="active"';
						};
						echo'><a href="index.php?page=settings">Settings</a></li>
                        <li><a href="#">Page4</a></li>
                    </ul>
';

/*
echo"<a href='logout.php'>logout</a><br>";
echo "<a href='index.php?page=settings'>Settings</a>";
*/
}
?>