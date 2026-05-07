<!-- On utilise un auto loading -->
<?php 
require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Template.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Browser.php";
?>

<!-- On demarre le buffering -->
 <?php ob_start(); ?>

   <h5 class="d-bloc text-white mx-auto text-center pt-5">Magic Cards</h5>
   <?php
   $browse = new Browser("data/cards.json");
   $browse->generateCards();
   ?>
   

 <?php $content=ob_get_clean() ?>

 <!-- Utilisation du contenu bufferise -->
<?php Template::render($content) ?>