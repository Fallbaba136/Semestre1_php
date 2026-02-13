<?php
    // déclaration d'une fonction qui retourne une chaine
    function getGreetingMessage($nom, $ponctuation='!'){
        $msg = "Hello $nom $ponctuation" ;
        return $msg; 
    }
?>

    <h2><?php echo getGreetingMessage('Fall')?></h2>

