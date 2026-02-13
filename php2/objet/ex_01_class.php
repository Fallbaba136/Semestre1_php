<?php
    include "People.php";

    $fall = new People("fall babacar");
?>
<p>
    Le contenu de l'attribut : <b><?php echo $fall->getName() ?></b>
</p>

<p>
    Utilisation de __tostring() : <b><?php echo $fall ?></b>
</p>

<hr>

<?php
    $className = "People";
    $toto = new $className("toto"); // désignation de la classe avec une chaine...
    echo "<p>Autre utilisation de People: <b>$toto</b></p>"
?>