<?php
if (!empty($_POST['msg'])) {
   //Resuperation du parametre 
$param = $_POST['msg'];

//encodage avant affichage pour eviter les failles...
$chaine = htmlspecialchars($param);

//calcul de lalongeur
$longeur = strlen($chaine);
?>

La chaine reçue par POST est : "<b><?php echo $chaine ?></b>". 
<br>
Sa longeur est de <b><?php echo $longeur ?></b> caractere(s).
<?php
}else{
    echo "<b style='color: red'>Je n'ai reçu aucun message !</b>";
}
?>
