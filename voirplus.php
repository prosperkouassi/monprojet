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
 



// On  affiche  les articles et leur identifiant 

//sous l'article on affiche les commentaires avec les id

//si l'utilisateur est connecté on lui propose de laisser un commentaire.

//sinon on affiche pas le formulaire

//if(isset($_SESSION['pseudonyme']))

require_once 'footer.php';
?>
<textarea name="contenu"><?= $donnees['contenu']; ?></textarea>