<?php
$a_le_permis = true;
$est_sobre = false;
$a_un_chauffeur = true;

$msg = "Rentre";

if (($a_le_permis and $est_sobre) or $a_un_chauffeur) {
    $msg .= 'en voiture';
} else{
    $msg .= 'à pieds';
}
echo $smg;
?>

<!-- Affectation ternaire -->
<?= "affichage avec terniare : "; ?>
<?php
$a_le_permis = true;
$est_sobre = false;

$msg = ($a_le_permis and $est_sobre) ? 'en voiture' : 'à pied';

$msg = 'Rentre ' .$msg;
echo $msg;
?><br>
<br>

<!-- Boucle while -->

<?php 
$notes = [18, 15, 6, 20, 12];
$acc = 0;

$compteur = 0;


while ($compteur <= count($notes)) {
    $acc += $notes[$compteur];
    $compteur++;
}
$moyenne = $acc / count($notes);

?>
La moyenne avec while est : <?=  $moyenne ?>  <br>

<!-- Boucle for -->

<?php
$notes = [18, 15, 6, 20, 12];
$acc = 0;

for ($compteur=0; $compteur < count($notes) ; $compteur++) { 
    $acc += $notes[$compteur];
}

$moyenne = $acc / count($notes);
?>
La moyenne est avec for : <?php echo $moyenne ?><br>

<!-- foreach -->
<?php
$notes = [18, 15, 6, 20, 12];
$acc = 0;

foreach ($notes as $n) {
    $acc += $n;
}

$moyenne = $acc / count($notes);

?>

La moyenne avec foreach est : <?= $moyenne ?><br>

<p>
    Alphabet phonétique de l'OTAN:
</p>
<ul style = "list-style-type: square">
<?php
    $phonetic_alphabet=array("Alpha" => "A", "Bravo" => "B", "charlie" => "C", "Delta" => "D");

    foreach ($phonetic_alphabet as $code => $char) {
        echo "<li>\"$code\" : '$char'</li>";
    }
?>
</ul>