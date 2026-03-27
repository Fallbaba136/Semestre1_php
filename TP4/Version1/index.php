<!-- On utilise un auto loading -->
 <?php require_once __DIR__.DIRECTORY_SEPARATOR."magic/Template.php"; ?>

<!-- On demarre le buffering -->
 <?php ob_start(); ?>

    <h1 class="prince2 text-white text-center p-3 ms-8 display-1">WELCOME TO THE MAGIC STORE</h1>
    <img src="img/MagicLogo4.png" class="d-block mx-auto" alt="si l'image ne charge pas vous verrez ce texte">


 <?php $content=ob_get_clean() ?>

 <!-- Utilisation du contenu bufferise -->
<?php Template::render($content) ?>