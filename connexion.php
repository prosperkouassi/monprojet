

<?php
require('header.php');
if(!empty($_POST['pseudonyme']) && !empty($_POST['mot_de_passe'])) {
    $pseudonyme = htmlspecialchars($_POST['pseudonyme']);
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);

    //on fait une requete pour verifier les données de l'utilisateur
    $sql = "SELECT mot_de_passe, rang FROM membre WHERE pseudonyme=:pseudonyme";
    $requete = $pdo->prepare($sql);
    $requete->execute([
        'pseudonyme' =>$pseudonyme
    ]);
    $donnees = $requete->fetch();
    if($mot_de_passe === $donnees['mot_de_passe']) {
        $_SESSION['pseudonyme'] = $pseudonyme;
        $_SESSION['rang'] =$donnees['rang'];
        if($_SESSION['rang']= $donnees['rang']);
        $message = "Bienvenue $pseudonyme sur votre profil,  <a href='index.php'> revenir a l'accueil du site </a>.";

    }
        else{
            $message = " mauvais identifiants ! Réessayer";
        }
    }
?>
<?php
if(isset($message)) {
    echo $message;
}

?>
<?php if(empty($_SESSION['pseudonyme'])) :?>

<form action="" method="post">
    Pseudonyme <input type="text" name="pseudonyme"/><br>
    Mot de pas
    
    se <input type="password" name="mot_de_passe"/><br>
    <input type="submit" value="Valider"/>
</form>
<?php endif;  ?>
<?php

require('footer.php');
?>
<!---contenu du site --->
 <!--method Get : transmet les informations dans URL-->
 <!--method POST : transmet les informations dans URL-->
 
 <!---contenu du site --->
 <?php
 ?>

 <?php