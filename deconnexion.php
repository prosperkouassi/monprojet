<?php
require_once 'header.php';
unset($_SESSION['pseudonyme']);
unset($_SESSION['rang']);
echo "VOUS avez bien été déconnecté'<a href='connexion.php'>Revenir a l'index du site</a>";

require_once 'footer.php';
?>