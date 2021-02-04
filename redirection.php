<?php
//Permet de renvoyer le formulaire vers la page indiquee
//Si l'utilisateur a rentrer son pseudonyme et que le formulaire n'est pas vide a ce moment la on le redirige vers la page de connexion
// alors on le connection a la session apres validation du bouton
if(isset($_POST['pseudonyme'])){
    header('Location: https:www.google.com');
    //header('refresh:3;url=https:www.google.com');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <!-- Formulaire de connexion-->
    <form action="" method="POST"></form>
        <input type="text" name="pseudonyme">
        <input type="submit" value="submit">
</body>
</html>