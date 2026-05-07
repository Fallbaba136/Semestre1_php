<!-- On utilise un auto loading -->
 <?php require_once __DIR__.DIRECTORY_SEPARATOR."magic/Template.php";
 session_start();
 ?>

<!-- On demarre le buffering -->
 <?php ob_start(); ?>
 <?php
   $nom = $_SESSION['username'] ?? null;
   if ($nom){
      echo "<h1 class='nom'> Hi $nom</h1>";
   } 
   ?>

    <h1 class="Welcome">WELCOME TO THE MAGIC STORE</h1>
    <div class="logo">
        <img src="img/MagicLogo4.png" class="logo4" alt="si l'image ne charge pas vous verrez ce texte">
    </div>
  



 <?php $content=ob_get_clean() ?>

 <!-- Utilisation du contenu bufferise -->
<?php Template::render($content) ?>