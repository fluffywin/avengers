<?php 
foreach (glob("../interface/*.php") as $interface) {
    include("$interface");
}
foreach (glob("../classes/*.php") as $class) {
    include("$class");
}

session_start();
echo "left:".($_SESSION['player']->x*32 + 5)."; top:".($_SESSION['player']->y*32 + 5).";";

//header('location: index.php');


?>