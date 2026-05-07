<!-- On utilise un auto loading -->
 <?php require_once __DIR__.DIRECTORY_SEPARATOR."magic/Template.php"; ?>

<!-- On demarre le buffering -->
 <?php ob_start(); ?>

    <h class="shop">THE SHOP IS UNDER CONSTRUCTION</h1>
 <?php $content=ob_get_clean() ?>

 <!-- Utilisation du contenu bufferise -->
<?php Template::render($content) ?>