<?php
require_once "Fraction.php";

$fraction = new Fraction(1, 2);

echo "<p>Voici une fraction : $fractions</p>";

try {
    $fraction->setDenominateur(1);
} catch (Exception $e) {
    echo "
    <p>
        Une erreur s'est produite :
        <span style ='color: red'>" . $e->getMessage() ."</span> 
    </p>
    ";
}