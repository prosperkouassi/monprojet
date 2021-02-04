<?php
require_once 'header.php';
if(isset($_SESSION['rang']) && $_SESSION['rang'] ==1){
    echo "<center><h1>Bienvenue Jean dans votre espace Admin</h1><center>";

    

}else{
    die(" pas de tentative hack");
}
require_once 'footer.php';
