<?php
//Récuperation du parametre
if (isset($_GET['msg'])) {// Si le parametre a bien été reçu...
    $param = $_GET['msg'];

// encodage avant affichage pour eviter les failles...
$chaine = htmlspecialchars($param);

// calcul de la longeur
$longeur = strlen($chaine);
?>

La chaine reçue par get est : "<b><?php echo $chaine ?></b>". 
<br>
Sa longeur est fe <b><?php echo $longeur ?></b> caractere(s).

<?php
}else{ // si le parametre n'est pas reçu
    echo "<b style='color: red'> je n'ai reçu aucun message !</b>";

}
?>
