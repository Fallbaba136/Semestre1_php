<?php
$tab = ['a', 'b', 'c', 'd'];    // tab
?>


<p>Voici un tableau de taille <?php echo count($tab) ?> :</p> // taille du tableau


<div style="front-family": Monaco ; font-size: 0.8em>
    <div style="white-space: pre ;"><?php var_dump($tab) ?></div>
</div><br>

<p>
    <?php
    $case = 2;
    // on peut utiliser les variables dans un echo
    echo "Le contenu de la case $case est $tab[$case].";
    ?>
</p>

<?php 
$phonetic_alphabet=array("Alpha" => "A", "Bravo" => "B", "charlie" => "C", "Delta" => "D");
?>

<p>
    <?php $code = "charlie" ; ?>
    Dans l'alphabet phonétique de l'OTAN,
    le code "<?php echo $code ?>" signifie '<?php echo $phonetic_alphabet[$code] ?>'.
</p>

<!--Fonction de recherche dans un tableau -->
<!-- in_array(valeur, tableau) => renvoie un boolean si le valeur est dans le tableau -->
<!-- array_key_exists(clé, tableau) => renvoie un boolean si clé est dans le tableau --> 
 <!-- array_search(valeur, tableau) => renvoie l'index la clé correspondant à valeur si valeur est dans tableau -->

 <?php
 $week = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
 
 $day = 'vendredi';
 $idx = array_search($day, $week);

 // NB: il faudrait vérifier que la réponse n'est pas false...
 echo "$day est le jour n° " . ($idx+1)." dans la semaine";
 ?>