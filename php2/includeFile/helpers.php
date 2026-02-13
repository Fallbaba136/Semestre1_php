<link rel="stylesheet" href="helpers.css">

<?php
/*
    * Génére une balise h1 avec un titre formaté 
    * @param $title
 */

 function generateTitle($title){
    // formatage du titre
    $title = ucwords($title);

    //gébération du code HTML
    echo "<h2 class='custom'>$title</h2>";
 }

