<?php
session_start();
require('includes/functions.php');
$pdo =connexion();

?>
<?php
$tableauxLiens = [
    ['Accueil', 'index.php'],
    ['apropos', 'apropos.php'],
    ['formations', 'formations.php'],
    ['contact', 'contact.php']
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prosper Kouassi - Bienvenue sur le portfolio Prosper Kouassi. Vous découvrirez, qui je suis, mon parcours, mes compétences et les projets que j'ai réalisés.">
       <!-- permet un d'optimiser le referencement et la visibilité sur les moteurs de recherche -->
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="BURO'TIC | Formation personnalisée" />
        <meta property="og:description" content="BURO'TIC - Formation personnalisée. Offre de formations professionnels pour les entreprises aux salariés." />
        <meta property="og:site_name" content="BURO'TIC | Formation personnalisée" />
        <meta property="og:image" content="src/image/burotic.png" />
        <meta property="og:image:secure_url" content="src/image/burotic.png" />
        <meta property="og:image:width" content="150" />
        <meta property="og:image:height" content="50" />

        <title>BUROTIC | Formation personnalisée</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
         <!--font-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
         <!--integration animate css
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" />  -->
         <!--font-awsome-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
          <!--css stylisation-->
         <link rel="stylesheet" href="src/css/styles.css">
         <link rel="stylesheet" href="src/css/footer.css">
         <script src="src/js/jquery-3.5.1.min.js"></script>

</head>
<body>
    <!--header-->
    
  <header class="header">
        <nav>
          <div class="logo"><img src="src/image/burotic.png" alt="buro'tic"></div>
              <div class="openMenu"><i class="fa fa-bars"></i></div>
                  <ul class="mainMenu">
                  <?php
                  foreach($tableauxLiens as $tableauxLien) {
                      echo '<li><a href="'.$tableauxLien[1].'">'.$tableauxLien[0].'</a></li>';
                  }
                  ?>
                      <!-- <li><a href="#">Accueil</a></li>
                      <li><a href="page/apropos.html">A propos</a></li>
                      <li><a href="page/Formations.html">Formations</a></li>
                      <li><a href="page/contact.html" target="_blank">contact</a></li> -->
                  <div class="closeMenu"><i class="fa fa-times"></i></div>
                      <!-- <span class="icons">
                          <a href="https://www.instagram.com/ethnic_ground/?hl=fr"target="_blank"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.homeis.com/africans-in-france/africans-alsace/profile/5f8914c0860b8c0018b9c7f4" target="_blank"><i class="fab fa-themeisle"></i>
                          <a href="https://www.linkedin.com/in/prosper-kouassi-98132a147/" target="_blank"><i class="fab fa-linkedin"></i></a>
                          <a href="https://github.com/prosperkouassi"target="_blank"><i class="fab fa-github"></i></a>
                      </span> -->
                  </ul>
         </nav>
         <div class="solution">
          <div class="speech">
              <h2 class="animate__animated animate__pulse"> SOLUTIONS D' ENTREPRISE</h2><br>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet quidem 
               repudiandae magnam, culpa dolorem magni odit impedit. Commodi corporis tempore doloribus in ea sit incidunt, non minima eius, vero distinctio modi dolores architecto sunt qui provident. Reprehenderit, sunt minus vero iure,
               reiciendis quibusdam eos consectetur animi tenetur temporibus a quos.</p>
               <a href="#">Découvrir</a> 
          </div>
  </header>
                                <!--contenu du site -->