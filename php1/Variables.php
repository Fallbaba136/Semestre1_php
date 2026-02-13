<?php
$ma_variable = 5; 
?>
<p>
 Voici la valeur de ma variable : <?= $ma_variable ?>
</p>

<?php $ma-$ma_variable *=2 ?>

<P>
    Et la voici après avoir été modifiée : <?= $ma_variable ?>
</P>

<!-- Information sur un variable => var_dump(---) -->

<!-- la fonction var_dump(data) affiche les informations concernant une data -->

<?= $ok = false; ?>
<p>Voici les informations sur $ok : <b><?= var_dump($ok) ?></b></p>

<!-- Existence d'une variable : isset / unset -->

<!-- La fonction isset(variable) renvoie true si variable existe et est différente de null, false sinon -->
<!-- la function unset(variable) permet de "detruire" une variable -->

<p> la variable existe ? <?= var_dump(isset($prenom)) ?></p>
<?= $prenom = "Greg" ?>

<p> La variable existe ? <?= var_dump(isset($prenom)) ?> : <?= $prenom ?></p>
<?php unset($prenom) ?>
<p> La variable existe ? <?= var_dump(isset($prenom)) ?></p>