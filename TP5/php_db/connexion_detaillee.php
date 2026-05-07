<?php

// Informations sur la BDD et le serveur qui la contient
$db_name = "gamesdb" ; $db_host = "127.0.0.1" ; $db_port = "3306" ;

// Informations d'authentification de votre script PHP :
$db_user = "root" ; $db_pwd = "" ;

//Connexion a la BD 
try {
    // Agrégation des informations de connexion dans une chaine DSN (Data Source Name)
    $dsn = 'mysql:dbname=' . $db_name . ';host='. $db_host. ';port=' . $db_port;

    //Connexion et récupération de l'objet connecté
    $pdo = new PDo($dsn, $db_user, $db_pwd);
} catch (\Exception $ex){ ?>
    //Affichée mes information liée a l'erreur
    <div style="color: red">
        <b>!!! ERREUR DE CONNEXION !!!</b><br>
        Code : <?= $ex->getCode() ?><br>
        Message : <?= $ex->getMessage() ?>
    </div><?php

//Arrêt de l'éxécution du script PHP
die("-> Exécution stoppée <-");
}
//Poursuit de léxécution du script ?>
<div style="color: green">
    Connecté à <b><?= $dsn ?></b>
</div><?php