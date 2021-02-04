<?php
require_once 'header.php';
//S'il y a une session
 if(isset($_SESSION['pseudonyme'])) {
    If($_SESSION['rang'] == 0 ) {
        echo " vous etes connecte en tant que ".$_SESSION['pseudonyme']." Vous êtes membre.";
        echo "<a href='deconnexion.php'>Se deconnecter</a> ";
    } else{ //si c'est egale a 1
        echo " vous etes connecte en tant que ".$_SESSION['pseudonyme']." Vous êtes Administrateur. <a href='admin_gestion.php'> allez sur administrateur
        </a>";        
    }

   echo "<a href='deconnexion.php'>Se deconnecter</a> ";
   
 }
 else{ //dans ce cas vous etes connecté é redirigé vers la page de connexion
    echo "VOUS avez bien été déconnecté'<a href='connexion.php'>Revenir a l'accueil du site</a>";
 }



// On affichera la liste des articles a gerer par l'administrateur.

require_once 'footer.php';


?>