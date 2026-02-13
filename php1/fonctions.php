<?php
    // déclaration de la fonction
    function disBonjour(){
        $msg = "Hello World" ;
        echo "<p>$msg</p>";
    }

    // appel de la fonction 
    disBonjour();
    disBonjour();
?>

<!-- Fonction avec paramétre -->

<?php
// declaration de la fonction
    function disMoiBonjour($nom, $ponctuation='!'){
        echo "<p> Hello $nom $ponctuation</p>";
    }

    // appel de la fonction 
    disMoiBonjour('FALL');
    disMoiBonjour('FALL', ':)');?><br>

